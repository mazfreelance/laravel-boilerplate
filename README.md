# Laravel Boilerplate
A laravel boilerplate for quick setup and get into development asap.

## Feature Include
- Reorganized app structure
	- `Api` (For all API related function)
	- `Console` (For command line related function)
	- `Infrastructure` (For core system related function)
	- `Support` (For custom feature related function)
	- `Web` (For web related function)
    - `Helper` (For helper function)
- Implemented base login, logout and get user information API using `Laravel Passport`
- Implemented debugging tool for developer using `Laravel Telescope` and with control of accessible only by specific email address
- Clean controller setup
	- Controller will only inject `Action` class and should only call the `execute` method.
	- All business logic related function is handled in `Action` class
- Standardized API response which include:
	- Unauthorized request
	- Validation request
- Support API versioning

## Package Include
<!--
- Enum
- Passport -->
- Eloquent Filter
- [Action & Data Transfer Object](https://github.com/mazfreelance/laravel-command-generator)
- Spatie/Slugable
- Spatie/Laravel Permission
- Telescope

## Prerequisite
Fork this repository to your own repository.

## Setup Guide
Clone the forked repository to your system using GUI tools or command line 
```
git clone <your_repository_url> <directory_to_clone_to>
```

Copy `.env.example` and rename as a new file as `.env`

Open the `.env` file and update the variable to your own variable and do not forget to set the following:
```

```
>This will be the default admin user and developer user that will be seeded into the database.
*By default only `DEVELOPER_USER_SEED_EMAIL` can access to telescope module*

After setting your `.env` file, run: 
```
composer install
```

After composer install finish, run the following command to set application key.
```
php artisan key:generate
```

Then run migration command and seed the database.
```
php artisan migrate --seed
```

Next, run the following command to setup `Passport` and `Telescope`
```
php artisan passport:install --uuids
php artisan telescope:install
```
> After running ```php artisan telescope:install```, you should see `app\Providers` being created and inside there will be `TelescopeServiceProvider` file. Please delete the folder as this has been moved to `app\Web\Providers`
