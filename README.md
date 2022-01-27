# How to install the application
To run this app on your local machine you will need few things installed first;
* PHP 7.3 and above
* Composer

For better development, it is recommended you install Laragon which is what used to create this application. More about this can be found here https://laragon.org/

## Steps to follow after cloning repo
1. Duplicate the .env.example and rename it to .env
2. Run composer install in terminal
3. Then run php artisan key:generate
4. Then run npm install && npm run dev
5. Make sure you have a database connection that matches the one in your env file
6. Then run php artisan migrate

Now you should have a working version of the application on your machine.

# About this application
This is the code base for hesdahorn's website. It is entirely based on Laravel with some Vue.js components in the admin dashboard and authentication pages.

Tailwind css has been configured to be available to any views that extend the layouts.app. Sass is also available and can be used to add custom css if needed.

For the admin panel, Laravel-voyager package has been used which provides out of the box ready admin section. To learn more about voyager follow this link: https://voyager-docs.devdojo.com/

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning More about Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
