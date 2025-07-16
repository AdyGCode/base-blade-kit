

## Install Laravel installer & Update

```shell≈
composer global require laravel/installer
composer global update
```

## Create Application from Scratch

```shell
laravel new l12-base
```

| Step                  | Value    |
|-----------------------|----------|
| Project Name          | l12-base |
| Starter Kit           | None     |
| Test Framework        | Pest     |
| Database (dev)        | SQLite   |
| NPM install and Build | Yes      |


## Add Sanctum, and other Packages

We will add:
- [Laravel Breeze](https://laravel.com/docs/sanctum) (with Sanctum Authentication)
- Laravel Pint (Code Tidy +)
- [Laravel PHP Stan](https://github.com/larastan/larastan) (Static Testing)
- [Laravel Debug Bar](https://laraveldebugbar.com) (Development toolbar)
- [Laravel Livewire](https://livewire.laravel.com) (SPA components in PHP)
- [Laravel Telescope](https://laravel.com/docs/telescope) (Application Monitoring)

Note that with Windows Systems not having the `pcntl` extension for PHP we cannot install Laravel Pail.

For non Windows users, or those using Windows Subsystem for Linux, please feel free to install and use Laravel Pail, a log streaming package.

---

### Installing Breeze

```shell
cd l12-base

composer require laravel/breeze

php artisan breeze:install
```

| Step       | Value              |
|------------|--------------------|
| Framework  |  Blade with Alpine |
| Dark Mode  |  No                |
| Testing    |  Pest              |


#### Remove the postcss.config.js

```shell
rm postconfig.config.js
```

#### Add FontAwesome NPM Package

```shell
npm install @forawesome/fontawesome-free
npm update
```

#### Update any node dependencies

```shell
npm update
```

#### Update the following files:

- vite.config.js
- tailwind.config.js
- resources/css/app.css
- resources/js/app.js


##### vite.config.js
Open the `vite.config.js` file and update the contents to be:

```js
import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ]
});
```

##### tailwind.config.js

Open the `tailwind.config.js` file and update the contents to be:

```js
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
```

##### resources/css/app.css

Open the `resources/css/app.css` file and update the contents to be:

```css
@import 'tailwindcss';
@import "@fortawesome/fontawesome-free/css/all.css";

@theme {
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
    'Segoe UI Symbol', 'Noto Color Emoji';
}
```


##### resources/js/app.js

Open the `resources/js/app.js` file and update the contents to be:

```js
import './bootstrap';
```

---

### Install Laravel Pint (Code Tidy +)

Install the composer package for "development mode only":

```shell
composer require laravel/pint --dev
```

---

### Install Laravel Stan (Static Testing)

Install the composer package for "development mode only",
and create new file `phpstan.neon` in the root folder of the project:

```shell
composer require --dev "larastan/larastan"

touch phpstan.neon
```

Edit the `phpstan.neon` (this is a YAML style file) and add:

```neon
includes:
    - vendor/larastan/larastan/extension.neon
    - vendor/nesbot/carbon/extension.neon

parameters:

    paths:
        - app/

    # Level 10 is the highest level
    level: 5

#    ignoreErrors:
#        - '#PHPDoc tag @var#'
#
#    excludePaths:
#        - ./*/*/FileToBeExcluded.php
```



---

### Install Laravel Debugbar (Development toolbar)

Install the composer package for "development mode only":

```shell
composer require barryvdh/laravel-debugbar --dev
```

---

### Install Laravel Livewire (SPA components in PHP)

Install Livewire and publish its assets:

```shell
composer require livewire/livewire

php artisan vendor:publish --tag=livewire:assets --ansi --force
```

---

### Install Laravel Telescope (Application Monitoring)



```shell
composer require laravel/telescope
php artisan telescope:install
php artisan migrate
```

## Publish Assets (Error messages, pagination et al.)

We will publish a number of assets so that they may be customized as we write our code.

```shell
php artisan vendor:publish --tag=laravel-errors
php artisan vendor:publish --tag=laravel-mail
php artisan vendor:publish --tag=laravel-pagination
php artisan vendor:publish --tag=livewire:pagination
```


### Execute First Static Analysis

Run PHPStan using:

```shell
./vendor/bin/phpstan analyse --memory-limit=2G
```

> ###### Note: 
> 
> The memory limit of 2GB is needed, the default 128MB is simply not enough for 
> analysing Laravel Apps.


Any errors? Fix them at this point.

#### Must Verify Email Error

The following is a fix we discovered, **BUT** it is important **NOT** to use this for **EVERY** error 
you encounter, as that defeats the purpose of the static analysis:

Open the `app/Http/Controllers/Auth/VerifyEmailController.php` file and locate the lines:

```php
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
```

Add a single line as shown below:

```php
        if ($request->user()->markEmailAsVerified()) {
        /** @phpstan-ignore-next-line  */
            event(new Verified($request->user()));
        }
```

> ###### Aside:
> 
> We may need to see of Taylor and the Laravel crew will look
> at this error and publish a patch.


### Execute First Laravel Pint 

Execute Laravel pint to fix any code structure errors.

This will ensure your code matches the Laravel style.

```shell
./vendor/bin/pint
```

## Execute the Development Instance

We can run a development server in a number of different ways.

For this we will use the Terminal and execute the "dev" server script.

Either:
Split the current terminal into 2 halves, or
Open a new terminal instance

Verify you are in the correct folder, if not use the cd command:

> This presumes you are in a folder location such as `Source/Repos`.

```shell
cd l12-base
composer run dev
```

This will execute the dev script that is in the `composer.json` file.

After a few moments, you will be able to open the `http://localhost:8000` location in a 
browser and see the default home page:

![img.png](_docs/images/default-landing-page.png)

## Adding Default Users

To make it easier to test the application we will add a "seeder" that will fill the database 
with some default users.

This is ideal for the development and testing process.

### Create a User Seeder

Execute:

```shell
php artisan make:seeder UserSeeder
```

Open the newly created `database/seeders/UserSeeder.php` file and update the `run` method to 
read:

```php
$seedUsers = [
            [
                'id' => 100,
                'name' => 'Admin I Strator',
                'email' => 'admin@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['admin',],
            ],

            [
                'id' => 200,
                'name' => 'Staff User',
                'email' => 'staff@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['staff',],
            ],

            [
                'id' => 201,
                'name' => 'Client User',
                'email' => 'client@example.com',
                'password' => 'Password1',
                'email_verified_at' => null,
                'roles' => ['client',],
            ],
        ];

        foreach ($seedUsers as $newUser) {

            // grab the roles from the seed users
            $roles = $newUser['roles'];
            unset($newUser['roles']);

            $user = User::updateOrCreate(
                ['id' => $newUser['id']],
                $newUser
            );

            // Uncomment this line when using Spatie Permissions
            // $user->assignRole($roles);

        }

        // Uncomment the line below to create (10) randomly named users using the User Factory.
        // User::factory(10)->create();
```

To run this seeder only we can use:

```shell
php artisan db:seed UserSeeder
```

To add the seeder to execute when performing a fresh migration and seed use:

Edit the `database/migrations/DatabaseSeeder.php` file, and update the code tobe:

```php
    public function run(): void
    {

        $this->call(
            [
                // When using Spatie Permissions, perform the Role / Permission seeding FIRST
                UserSeeder::class,
                // Add further seeder classes here                
            ]
        );

    }
```


> ### ⚠️ WARNING:
>
> This performs a total database reset and SHOULD NOT be used on production applications.
>
>
> To execute this and reset the database and any logged in sessions in one go use:
> 
> ```shell
> php artisan migrate:fresh --seed
> ```


## Add Static page Controller

We will creat a static page controller that will handle pages that do not perform any 
add/edit/delete actions.

Generally, we look at these pages being:

- Home (Welcome)
- Privacy
- License
- About
- Contact Us
- Terms

and so on.

Create the static page controller using:

```shell
php artisan make:controller StaticPageController
```

> ###### Important:
>  
> Always name controllers with `Controller` as the last word in the name.

### Add the Static Page Methods to the Controller

Open the new `app/Http/Controllers/StatsicPageController.php` file and add the following 
static page methods:

```php
    /**
     * Display site 'Welcome/Index' page
     * 
     * @return View
     */
    public function home(): View
    {
        return view('static.welcome');
    }

    /**
     * Display 'About Us' page
     * 
     * @return View
     */
    public function about(): View
    {
        // return view('static.about');
    }
```

### Edit the Routes

Open the `routes/web.php` file and update it..

Add the required `use` lines:

```php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;
```

Add the Home (Welcome) page route
```php

Route::get('/', [StaticPageController::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
//        Route::get('/admin', [AdminPageController::class, 'admin'])->name('admin');
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
```

Create a Dashboard Controller:

```shell
php artisan make DashboardController
```

Edit the new `app/Http/Controllers/DashboardController.php` file, adding the missing lines 
from the code below:

```php
class DashboardController extends Controller
{

    public function dashboard(): View
    {
        $user = auth()->user();

        return view('static.dashboard')
            ->with('user', $user);
    }
}

```

## Admin Page Layout

- Create Admin Layout Component
- Move the view to resource/views/layout and rename to admin.blade.php
- Create an Admin Page Controller
- Create Admin Home page view
- Create Admin Navigation layout view
- Create admin route in routes/web.php

```shell
php artisan make:component AdminLayout

mv resources/views/components/admin-layout.blade.php resources/views/layout/admin.blade.php

phg artisan make:controller Admin/AdminController

mkdir resources/views/admin
touch resources/views/admin/index.blade.php
touch resources/views/layouts/admin-navigation.blade.php
```

#### Admin Page Layout

In the admin/index.blade.php file add:

```php


```



#### Admin Navigation Layout

in the admin/layouts/admin-layout.blade.php add:


```php


```


Edit the routes/web.php file, and fFind the lines:

```php

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
```

Immediately BEFORE this add:

```php
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });
```





- Blade Templates circa Laravel 11
- Navigation bar on guest and app layouts
- Footer in guest and app layouts
- Email Verification enabled
- [Font Awesome 6 (Free)](https://fontawesome.com)




# After Cloning

The following steps will be done:

- cd into folder
- create a database.sqlite file
- install npm packages
- install composer packages
- migrate and seed
```shell
cd FOLDRE_NAME
touch database/database.sqlite
npm i
npm update
composer install
composer update
php artisan migrate:fresh --seed

```


## Tutorials, Articles & References

Tutorials and Articles on the individual components

McDougall, S. (2022, June 20). Running PHPStan on max with Laravel - Laravel News. Laravel News. https://laravel-news.com/running-phpstan-on-max-with-laravel

Laravel.io. (2024). How to get your Laravel app from 0 to 9 with Larastan | Laravel.io. Laravel.io. https://laravel.io/articles/how-to-get-your-laravel-app-from-0-to-9-with-larastan

Larastan. (2025, June 20). GitHub - larastan/larastan: ⚗️ Adds code analysis to Laravel improving developer productivity and code quality. GitHub. https://github.com/larastan/larastan
