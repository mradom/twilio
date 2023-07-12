# Comment System

This is a comment system web application built with Laravel and Livewire. It allows users to post comments on a blog post and reply to existing comments.

## Installation

1. Clone the repository to your local machine.
2. Install the project dependencies by running the following command:

`composer install`

3. Copy the `.env.example` file to `.env` and configure the database settings.
4. Generate an application key by running the following command:

`php artisan key:generate`

5. Run the database migrations to create the required tables:

`php artisan migrate`

6. Seed the database with sample posts using the following command:

`php artisan db:seed --class=PostSeeder`


## Usage

1. Start the development server by running the following command:

`php artisan serve`

2. Access the application in your web browser at `http://localhost:8000`.
3. Browse the blog posts and post comments or reply to existing comments.

## Additional Information

This project utilizes the Laravel framework along with the Livewire package for the comment system functionality. The `PostSeeder` class is responsible for seeding the database with sample posts, which can be modified or extended as per your requirements. The application provides a user-friendly interface for users to interact with the comment system, and comments are displayed in a hierarchical structure up to three levels deep.

