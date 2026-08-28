# Game Backlog API

REST API for the Game Backlog Tracker. Built with Laravel 13 and SQLite.
Front end lives at: https://github.com/isamo1330/Game-Back-log-website-project

## Requirements
- PHP 8.5
- Composer

## Setup
1. `git clone https://github.com/isamo1330/Game-back-log-api.git` then `cd Game-back-log-api`
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Create the database file: `New-Item database\database.sqlite` (PowerShell) or `touch database/database.sqlite` (Git Bash)
6. `php artisan migrate`
7. `php artisan serve` API runs at http://127.0.0.1:8000

## Endpoints
| Method | URI | Action |
|---|---|---|
| GET | /api/games | List every game. |
| POST | /api/games | Create a game. |
| GET | /api/games/{id} | Show one game. |
| PUT | /api/games/{id} | Update a game. |
| DELETE | /api/games/{id} | Delete a game. |

## Testing
The API was tested using a Postman collection called Game Backlog API. It contains four requests covering the four CRUD operations, and each request has an automated test that checks the response status code matches the expected one (200 for GET and PUT, 201 for POST, 204 for DELETE). Deliberate failures 404, 405 
