# Task list app

### Description
In this project I create a simple task list using laravel and the blade components for the front end side. We can create a task and edit that tasks and also see all tasks that I should do.

### Technologies
- Laravel
- Blade components
- Vite
- mariadb
- tailwind css
- daisy ui
- alpine js
- docker

### Routes
- *GET* /tasks
    - shows the all tasks
- *GET* /tasks/{id} 
    - shows a task with its details
- *GET* /tasks/{id}/edit
    - show the form for updating a task
- *GET* /tasks/create
    - show the form for creating a task
- *POST* /tasks
    - persist a task in database
- *PATCH* /tasks/{id}
    - update a task in database
- *DELETE* /tasks/{id}
    - remove a task from database

### Patterns that I used in this project

- Restful approach
- Route model binding
- Elequent Models for simplify queries
- Docker for running the database
- Factories for creating fake data
- Seeders for seeding the database
- Blade components for reusing the template logic
