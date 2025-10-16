<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function getProfile(Request $request)
    {
        try {
            // Fetch cat fact from the external API
            $response = Http::timeout(5)
                ->get(env('CAT_FACTS_API_URL'));

            // API response and message in case it fails
            $catFact = $response->successful()
                ? $response->json()['fact']
                : 'Could not fetch a cat fact at this time.';

            // JSON response with my info from the env
            $data = [
                'status' => 'success',
                'user' => [
                    'email' => env('USER_EMAIL'),
                    'name' => env('USER_NAME'),
                    'stack' => env('USER_STACK'),
                ],
                'timestamp' => Carbon::now()->toIso8601String(),
                'fact' => $catFact,
            ];

            return response()->json($data, 200, ['Content-Type' => 'application/json']);
        } catch (\Exception $e) {
            // Logged error for debugging(just incase)
            Log::error('Error fetching cat fact: ' . $e->getMessage());

            // fallback response
            $data = [
                'status' => 'success',
                'user' => [
                    'email' => env('USER_EMAIL'),
                    'name' => env('USER_NAME'),
                    'stack' => env('USER_STACK'),
                ],
                // formatted timestamp to generate current time as instructed
                'timestamp' => Carbon::now()->toIso8601String(),
                'fact' => 'Could not fetch a cat fact due to an error.',
            ];
            // returns JSON response with the 200 status code
            return response()->json($data, 200, ['Content-Type' => 'application/json']);
        }
    }
}
