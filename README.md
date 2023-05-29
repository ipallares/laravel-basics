# Laravel Basics

Just a demo project to show Laravel basic features.

## Installation

1.- Install Laravel cli:

`composer global require laravel/installer`

2.- Create a new project:

`laravel new {project-name}`

**Note**: If after this installation, the `laravel` command is not found, you can try to add the composer bin directory to your PATH environment variable. For example, on macOS, you can edit your `~/.bash_profile` (or ~/.zshrc) file and add the following line:

`export PATH="$PATH:$HOME/.composer/vendor/bin"`

3.- Run the project:

```cd {project-name}```

```php artisan serve```

At this point the project should be running on http://localhost:8000

**Reference**: https://laravel.com/docs/10.x#your-first-laravel-project

## Installation of this project
1. Clone the repo
2. Install dependencies
   `composer install`
3. Start Symfony Server
   `php artisan serve`

## Create a first Controller:

`$>php artisan make:controller TodoController`

This command will only create the Controller class. We still have to:

1.- Route it in `routes/web.php`

```Route::get('/todo', [TodoController::class, 'index']);```


2.- Create the view
    
```resources/views/todo/index.blade.php```  

```html
    @extends('base')
    
    @section('title', 'Page Title')
    
    @section('content')
    <h1>Hello {{ $controller_name }}! ✅</h1>
    
        This friendly message is coming from:
        <ul>
            <li>Your controller at <code>app/Http/Controllers/TodoController.php</code></li>
            <li>Your template at <code>resources/views/todo/index.blade.php</code></li>
        </ul>
    @endsection
```

See [commit](https://github.com/ipallares/laravel-basics/commit/251550404ee847e0194faeec552d7a0d2c0e5a4c)

## Configure the Database
To keep things simple we will be using a sqlite DB.

1.- We will create the DB file in the `database` folder.

`touch database/db.sqlite`

2.- Configure the DB connection in the `.env` file

```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/db.sqlite
```

## Create a Doctrine Entity

1.- Run command: 

`$>php artisan make:model Todo -m`

**Note:** The `m` option will create en empty Migration file.

Differently from Symfony, Laravel does not allow us to provide the properties of the Entity in the command, neither to automatically generate the Migration file with all the changes to sync Model and DB. Both things will have to be done manually.

2.- Add the properties to the Model file.

3.- Fill the migration Class

See [commit](https://github.com/ipallares/laravel-basics/commit/3ccde365072f39eee1dc8193c62d7192221d7b1d)

## Get Todos from DB
We will use the Todo Model class as a Facade to get back all the Todos from the DB and show them in frontend.

See [commit](https://github.com/ipallares/laravel-basics/commit/b5f2b8c469da2d514feae275bf901c829907a7c1)

## Use Service classes
It is bad practice to connect directly Controllers to Persistence Layers (Repository). We will use an intermediate class, following naming convention `{entityName}Service`, in this case `TodoService`.
This intermediate class will be called by the proper input System (Controller, Command, other services...) and will access the DB.
In our particular example there is no business logic involved, but still we wanna keep the layer for consistency and maintainability purposes.

It can be seen [here](https://github.com/ipallares/laravel-basics/commit/85e2b28804eb746c75907f3109cc2ca909639677)

## Dependency Inversion
As stated by the `D` in the `SOLID` Principles, we wanna depend on abstractions and not implementations (to be use with caution and common sense :) ). This principle is aimed at decoupling our code and make maintenance easier. In [this commit](https://github.com/ipallares/laravel-basics/commit/7fa27b5c11923b17e273f32d10271a3ae0c4621a) can be seen, how we inject an interface `TodoServiceInterface` instead of the `TodoService` class.
Differently from Symfony, even when having a single implementation of the interface, we still need to bind the interface to the implementation in the `AppServiceProvider` class. 

## Adding a new implementation for the Interface
Now we give a new implementation for the `TodoService` class, called `TodoCustomService` which basically gives a hardcoded list of Todos (so it is just for the purpose of showing its use). Code can be seen [here](https://github.com/ipallares/laravel-basics/commit/dee01e78d14f9bbfc2c448a106bbb596b5670720). It is completely analogous to the previous example as we in Laravel we need to bind the class implementations to Interfaces in all cases.
