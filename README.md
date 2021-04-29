# Blog Created By Using Laravel
Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.

## Setup
```
# Install dependencies
$ composer install

# Generate Vagrantfile and Homestead.yaml
# Windows
$ vendor\\bin\\homestead make
# Mac/Linux
$ php vendor/bin/homestead make

# Add IP and URL found in homestead.yaml to your hosts file (change these if you want)

# Rename .env.example to .env
$ mv .env.example .env

# Start Virtual Machine
$ vagrant up

# SSH into VM
$ vagrant ssh

# Change to code directory
$ cd code

# Generate application key
$ php artisan key:generate

# Run database migrations
$ php artisan migrate

# Run Server
$ php artisan serve
```