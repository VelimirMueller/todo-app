Status: sleeping ! README UPDATE: 23.12.2020


First tryout of Laravel with simple CRUD aka TodoApp
COMPLETELY FREE TO USE AND MODIFY
    this is a test-app anyways
    
----------------------------------------------------------------------------------------------------------------------------------    
----------------------------------------------------------------------------------------------------------------------------------
Usage:

1. first clone repo

2. create db: todos_app <br>
    -you can also edit the .env file, this is my configuration(created in xampp with default username: root and password:<blank>):<br>
        DB_CONNECTION=mysql<br>
        DB_HOST=127.0.0.1<br>
        DB_PORT=3306<br>
        DB_DATABASE=todos_app<br>
        DB_USERNAME=root<br>
        DB_PASSWORD=<br>
        
3. open a shell / cmd / somethingsimilar, navigate inside the app folder (cd <path/to/app>) and enter following command:
    php artisan migrate
    
    This sets up the database with the needed columns and your app is now ready for usage

----------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------

Features:

    CRUD Todos // Displays time of creation/update/completion
    Display all pending/completed Todos
    
-----------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------
App will be updated after my React E-Commerce Project.

Planned Features:

    -Add React Components to App
    -Rework Design from ugly to awesome
    -add functionality (calendar integration with export function)
    -add login
    -add monitoring area for admin
