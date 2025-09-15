# Hotel Booking System

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://images.unsplash.com/photo-1658218635253-64728f6234be?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="400" alt="Laravel Logo"></a></p>

## About The Project

This is a hotel booking system built with Laravel framework. The system allows users to browse hotels, view rooms, and make bookings online. It features a modern and responsive design with an intuitive user interface.

## Features

- User authentication and authorization
- Hotel listing and details
- Room categories and availability
- Booking management system
- Responsive design for all devices

## Project Structure

The project follows Laravel's MVC architecture:

- `app/Models` - Contains the database models (Hotel, Room, Booking, User)
- `database/migrations` - Database structure and relationships
- `database/seeders` - Sample data for hotels and rooms
- `public/images` - Hotel and room images
- `public/css` - Custom styling and third-party CSS
- `public/js` - JavaScript files for frontend functionality

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Create and configure your .env file
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run database migrations and seeders:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```

## Technologies Used

- Laravel Framework
- MySQL Database
- Bootstrap CSS Framework
- jQuery
- Modern JavaScript

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
