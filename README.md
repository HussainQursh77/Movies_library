# **Movie Library Application**

---
Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [API Documentation](#api-documentation)
- [Usage](#usage)
- [Contributing](#contributing)


## **Overview**
- A simple movie library application built using Laravel and MySQL to manage movies, implementing full CRUD operations (Create, Read, Update, Delete) for movie management. The application also allows users to rate movies, as well as edit or delete their ratings. It follows RESTful API standards and incorporates features like pagination, sorting, and filtering. The application uses a service-based architecture to handle business logic, form requests for validating user data, and resources to control output formats.
---
## **Features**
- CRUD Operations: Manage movies by creating, reading, updating, and deleting records.
- User Ratings: Allow users to rate movies, edit their ratings, or delete them.
- RESTful API: Follows RESTful API standards for seamless integration.
- Pagination, Sorting, and Filtering: Efficient handling of data display and search.
- Service-Based Architecture: Business logic is handled by services, separated from controllers.
- Form Requests and Validation: Ensures robust validation of user input.
- Resources for Output Control: Manage the format of API responses.

## **Install the Project**
- To set up the Movie Library application, follow these steps:
### **Prerequisites**
- PHP >= 8.1
- Composer
- MySQL
  
### **Installation**

1.Clone the repository.
```
    https://github.com/HussainQursh77/Movies_library.git
```
2.Navigate to the project directory.
```
    cd movie-library
```
3.Install the PHP dependencies using Composer.
```
    composer install
```
4.Copy the .env.example file to .env.
```
    cp .env.example .env
```
5.Generate the application key.
```
    php artisan key:generate
```
6.Configure the database(.env file).
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=movie-library
    DB_USERNAME=root
    DB_PASSWORD=
```
7.Run the database migrations.
```
    php artisan migrate
```
8.Seed the database with sample data.
```
    php artisan db:seed
```
9.Start the Laravel development server.
```
    php artisan serve
```

### **API Documentation**
The application follows RESTful standards. You can use tools like Postman or Insomnia to interact with the API.
- Postman Documentation:https://documenter.getpostman.com/view/34032686/2sAXjF9avk

### **Usage**
- Use the provided API endpoints to perform CRUD operations on movies.
- Users can rate movies and manage their ratings through the API.
- Utilize pagination, sorting, and filtering to manage and display movie data effectively.
### **Contributing**
If you wish to contribute to the project, feel free to submit a pull request or open an issue for discussion.
## **!!**
