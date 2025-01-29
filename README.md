# Tech Test

## Overview

This is a Laravel-based application that provides multiple functionalities, including task management with authentication, a blog management system, a welcome route, form validation, and category-product relationships.

## Features

1. **Task Management API** (Requires Authentication with Laravel Sanctum)

    - User authentication with Laravel Sanctum.
    - CRUD operations for managing tasks.
    - Validation for task creation and updates.
    - Returns JSON responses for consistency.

2. **Blog Management System** (No Authentication Required)

    - CRUD operations for managing blog posts.
    - Search functionality to find posts by title or author.
    - List all posts on the homepage.

3. **Welcome Route**

    - Displays a welcome message: "Hello, Diawan!"

4. **Form Validation**

    - Validates name and email input.
    - Ensures name is at least 3 characters long.
    - Ensures email follows a valid format.

5. **Category-Product Relationship**
    - One-to-many relationship between categories and products.
    - Fetch categories and their associated products.

## Live Demo

The application is deployed and accessible at: [TechTestDiawan on Vercel](https://techtestdiawan.vercel.app/)

To access specific routes:

-   Welcome page: [GET /welcome](https://techtestdiawan.vercel.app/welcome)
-   Form page: [GET /form](https://techtestdiawan.vercel.app/form)
-   Blog posts: [GET /posts](https://techtestdiawan.vercel.app/posts)

## Setup and Installation

### Prerequisites

-   PHP (>=8.0)
-   Composer
-   Laravel
-   PostgreSQL or any preferred database

### Installation Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/fajrizw/techtestdiawan.git
    cd techtestdiawan
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Copy environment file and configure database:

    ```bash
    cp .env.example .env
    ```

    Update `.env` file with database credentials.

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Run database migrations and seeders:

    ```bash
    php artisan migrate --seed
    ```

6. Install and configure Sanctum:

    ```bash
    composer require laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    php artisan migrate
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```

## API Endpoints

### Authentication (For Task Management Only)

-   **Login**: `POST /api/login`
    ```json
    {
        "email": "user@example.com",
        "password": "password"
    }
    ```
-   **Logout**: `POST /api/logout` (Requires authentication)

### Task Management API (Requires Authentication)

-   **Get all tasks**: `GET /api/tasks`
-   **Create a task**: `POST /api/tasks`
    ```json
    {
        "title": "New Task",
        "description": "Task details",
        "status": "pending",
        "due_date": "2025-02-15"
    }
    ```
-   **Update a task**: `PUT /api/tasks/{id}`
-   **Delete a task**: `DELETE /api/tasks/{id}`

### Blog Management System (No Authentication Required)

-   **View all posts**: `GET /posts`
-   **Search posts**: `GET /posts?search=keyword`
-   **Create a new post**: `POST /posts`
    ```json
    {
        "title": "My First Blog Post",
        "content": "This is the content of my blog post.",
        "author": "John Doe"
    }
    ```
-   **Update a post**: `PUT /posts/{id}`
-   **Delete a post**: `DELETE /posts/{id}`

### Additional Features

#### Welcome Route

-   **Display a welcome message**: `GET /welcome`
    -   Returns "Hello, Diawan!"

#### Form Validation

-   **Validate name and email input**: `POST /form-submit`
    -   Validates that the name is at least 3 characters long.
    -   Ensures the email is in a valid format.

#### Category-Product Relationship

-   **Get all categories**: `GET /categories`
-   **Get products for a category**: `GET /categories/{id}/products`

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── TaskController.php
│   │   ├── BlogController.php
│   │   ├── WelcomeController.php
│   │   ├── CategoryController.php
│   ├── Middleware/
├── Models/
│   ├── Task.php
│   ├── Post.php
│   ├── Category.php
│   ├── Product.php
│   ├── User.php
├── Database/
│   ├── Migrations/
│   │   ├── create_tasks_table.php
│   │   ├── create_posts_table.php
│   │   ├── create_categories_table.php
│   │   ├── create_products_table.php
│   ├── Seeders/
│   │   ├── TaskSeeder.php
│   │   ├── PostSeeder.php
│   │   ├── CategoryProductSeeder.php
routes/
├── api.php
├── web.php
resources/views/
├── welcome.blade.php
├── form.blade.php
├── categories-list.blade.php
├── category-products.blade.php
├── posts/
│   ├── index.blade.php
│   ├── create.blade.php
│   ├── edit.blade.php
│   ├── show.blade.php
```

## Notes

-   Task management routes require authentication with a Bearer token.
-   Blog management is publicly accessible without authentication.
-   Modify `TaskSeeder.php`, `PostSeeder.php`, and `CategoryProductSeeder.php` to add initial data.

## Contributing

Feel free to fork and submit pull requests.

## License

MIT License
