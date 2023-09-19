# Laravel-explorer
Basic doc/notes for the command, config and other stuff.


## Installation

- ***create laravel projects using composer***

```bash
composer create-project laravel/laravel laravel-app
cd laravel-app # Don't forget to enter the created project.
php artisan serve
```

- ***the laravel installer***

```bash
composer global require laravel/installer

laravel new example-app
cd example-app
php artisan serve
```

### Creating *Models

```bash
php artisan make:model user
php artisan make:model user -mc #creating controller at the same time
```

Example of a class of Model.
```php
class Complain extends Model
{
    use HasFactory;
    //public $table="UserInfo"; // If want to mention explicitly name of table
    public $timestamps=false;  // If want to avoid created_at column
}
```

### Creating *Controllers

```bash
php artisan make:controller UserController
```

### public -> storage folder
```bash
# making storage folder to public for accessible
php artisan storage:link
```

### migration commands
```bash
php artisan make:migration create_test5_table
php artisan migrate
php artisan migrate:reset
php artisan migrate:rollback --step 3
php artisan migrate --path=/database/migrations/2020_09_21_141958_create_test5_table.php
php artisan migrate:refresh
```

### using *tkinter

```bash
php artisan tinker
```

```php
>>> DB::table('users')->insert(['name'=>'julfi','email'=>'hello.julfikar','password'=>Hash::make('ruet123')]);
```

## Laravel Api

```bash
# api : resources
php artisan make:controller ApisController --resource

# api : sanctum
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

```php
# app > Http > Kernel.php

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
```

Include ***EnsureFrontendRequestsAreStateful::class***

```php
protected $middlewareGroups = [
         ...
        'api' => [
            //\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
```
- config:

```php
// app > Models > User.php

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable; // *inlcude HasApiTokens

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
```

### api with Passport [VVI]

- Installation

```bash
composer require laravel/passport
php artisan migrate
php artisan passport:install
```
```php
/*
	Encryption keys generated successfully.
	Personal access client created successfully.
	Client ID: 1
	Client secret: tf7YIKSHUYGdxUDYJpS7cvDzMGRp6M1l6CKQW34Y
	Password grant client created successfully.
	Client ID: 2
	Client secret: 6eaxU8Z42oZwmwUyV93zAISCQ0PGHynW0fPtrh4H
*/
```

- other stuffs:

```php
// app > Providers > AuthServiceProvider.php

use Laravel\Passport\Passport;

public function boot()
{
    Passport::routes();

    Passport::tokensExpireIn(now()->addDays(15));
    Passport::refreshTokensExpireIn(now()->addDays(30));
    Passport::personalAccessTokensExpireIn(now()->addMonths(6));
}
```

```php
// config > auth.php

'guards' => [
        ...
        'api' => [
            'driver' => 'passport',
			'provider' => 'users',
        ],
  ]
```
