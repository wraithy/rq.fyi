# URL Shortener Project (rq.fyi)

A simple URL shortener with Laravel backend and React frontend.

## Project Structure
```MD
rq.fyi/
├── rq.fyi-api/ (Laravel backend - runs on port 8000)
└── rq.fyi-frontend/ (React frontend - runs on port 5173)
```


## Quick Start (Run everything locally)

1. **Backend Setup**
   ```bash
   cd rq.fyi-api
   composer install
   cp .env.example .env
   php artisan key:generate
   
   # Configure database in .env: (it uses sqlite by default)
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_db_name
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_pass
   
   php artisan migrate
   php artisan serve --port=8000

2. **Frontend Setup**
     ```bash
    cd rq.fyi-frontend
    npm install
    npm start

# Key Things to Know
## Backend (Laravel)
- We use Laravel Sanctum for API authentication

Important files:

- routes/api.php - where we define our API endpoints
- app/Http/Controllers/ - where our controller logic lives (We want to version this, so we add a V1 folder, and put the controllers in there)
- app/Models/ - where we define our data models (database tables)

## Frontend (React)
- Uses Axios to connect to our Laravel API
- Main files are in src/ directory

# API Endpoints
```php
// Keep in mind these are just examples.

Route::post('/shorten', [LinkController::class, 'store']); // Shorten a URL
Route::get('/{code}', [LinkController::class, 'redirect']); // Redirect short URL
Route::get('/links', [LinkController::class, 'index'])->middleware('auth:sanctum'); // List all links (requires auth) -> https://laravel.com/docs/12.x/sanctum

// etc.
```

#  What We Need to Build
## Backend Tasks
- Set up database tables (Yon helps with migrations)
- A job or command to write the old database data into our newly tables (Yon will make this).
- Create the Link model and controller
- Implement (duplicate) the shortening logic

## Frontend Tasks
- Create a form to submit URLs
- Show the shortened URL after creation
- Display analytics (clicks, etc.) // optional, but a fun exercise

# Visual Reference

____________________________________________________________________

![alt text](back-end.png)

![alt text](front-end.png)
