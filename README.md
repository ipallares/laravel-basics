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
