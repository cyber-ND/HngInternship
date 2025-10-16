// ...existing code...
# Backend Wizards - Stage 0: Dynamic Profile Endpoint

## Table of Contents
- [Overview](#overview)
- [Prerequisites](#prerequisites)
- [Setup Instructions](#setup-instructions)
  - [Windows Setup](#windows-setup)
  - [MacOS/Linux Setup](#macoslinux-setup)
- [API Endpoint](#api-endpoint)
- [Example Response](#example-response)
- [License](#license)

## Overview
The Backend Wizards Stage 0 project is a streamlined Laravel application that exposes a `/me` endpoint. The endpoint returns user profile information (name, email, tech stack) and a random cat fact fetched from an external API. Built with Laravel 10.x, the project follows best practices for clean code, modularity, and configuration.

## Prerequisites
Before setting up the project, ensure the following are installed:
- PHP >= 8.1
- Composer (PHP dependency manager)
- Node.js and npm (optional, for frontend assets)
- Git
- Web server (e.g., Apache, Nginx, or Laravel’s built-in server for local development)

## Setup Instructions

### Windows Setup
1. Clone the repository:
   ```
   git clone https://github.com/cyber-ND/HngInternship.git
   cd HngInternship/stage0
   ```
2. Install PHP dependencies:
   ```
   composer install
   ```
3. (Optional) Install Node.js (for vite) dependencies:
   ```
   npm install
   ```
4. Configure environment file:
   ```
   copy .env.example .env
   ```
5. Generate application key:
   ```
   php artisan key:generate
   ```
6. Update environment variables in `.env`:
   ```
   USER_NAME="Your Full Name"
   USER_EMAIL="your.email@example.com"
   USER_STACK="PHP/Laravel"
   CAT_FACTS_API_URL=https://catfact.ninja/fact
   ```
7. Run the application:
   ```
   php artisan serve
   ```
   Access the application at: `http://localhost:8000`

### MacOS/Linux Setup
1. Clone the repository:
   ```
   git clone https://github.com/cyber-ND/HngInternship.git
   cd HngInternship/stage0
   ```
2. Install PHP dependencies:
   ```
   composer install
   ```
3. (Optional) Install Node.js (for vite) dependencies:
   ```
   npm install
   ```
4. Configure environment file:
   ```
   cp .env.example .env
   ```
5. Generate application key:
   ```
   php artisan key:generate
   ```
6. Update environment variables in `.env`:
   ```
   USER_NAME="Your Full Name"
   USER_EMAIL="your.email@example.com"
   USER_STACK="PHP/Laravel"
   CAT_FACTS_API_URL=https://catfact.ninja/fact
   ```
7. Run the application:
   ```
   php artisan serve
   ```
   Access the application at: `http://localhost:8000`

#### Key Differences Between Windows and MacOS/Linux
- Command syntax: Windows uses `copy`, MacOS/Linux uses `cp`.
- Terminal environment: Windows commonly uses PowerShell or Command Prompt; MacOS/Linux use Bash/Zsh.
- Path handling: Windows uses backslashes (`C:\...`), Unix uses forward slashes (`/home/...`).

## API Endpoint
### GET /me
Retrieves user profile information and a random cat fact.

Important: Use `/me` directly (no `/api` prefix).

## Example Response
A successful request returns JSON like:
```json
{
  "status": "success",
  "user": {
    "email": "hnginstructor@gmail.com",
    "name": "HNG INSTRUCTOR",
    "stack": "PHP/Laravel"
  },
  "timestamp": "2025-10-16T01:49:56.789Z",
  "fact": "Cats can jump up to six times their length."
}
```

## Author
Nwankpa Ndubuisi Chidiebube

