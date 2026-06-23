# Sawaah Tourism Platform

Sawaah is a tourism platform developed using Laravel that helps users explore tourist destinations, request customized trips, and receive personalized travel recommendations.

## Features

- User Authentication (Login & Registration)
- Browse Tourist Destinations
- Personalized Recommendations
- Trip Request Form
- User Dashboard
- Profile Management
- Admin Dashboard
- Responsive User Interface

## Technologies Used

- Laravel
- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript

## System Modules

### User Features
- Register and Login
- Browse available destinations
- Submit trip requests
- View recommendations
- Manage profile information

### Admin Features
- Manage destinations
- Manage user requests
- Monitor platform activities

## Project Structure
app/
bootstrap/
config/
database/
public/
resources/
routes/

## Screenshots

### Dashboard
![Dashboard](screenshots/dashboard.png)

### Trip Request Page
![Trip Request](screenshots/request.png)

### Recommendations Page
![Recommendations](screenshots/recommendations.png)

### Tourist Destinations
![Destinations](screenshots/destinations.png)

## Installation

Clone the repository:
git clone https://github.com/Rawan-Aloufi/Sawaah-Tourism-Platform.git

Install dependencies:
composer install
npm install

Create environment file:
cp .env.example .env

Generate application key:
php artisan key:generate

Run migrations:
php artisan migrate

Start the development server:
php artisan serve

## Authors

Rawan Aloufi

## License

This project was developed for training and educational purposes.
