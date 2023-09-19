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
}
```

- Create the seeder for the User Model
```bash
php artisan make:seeder UsersTableSeeder
```

- Insert the records
```php
// database/seeders/UsersTableSeeder.php
...
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run the script under *run function
        DB::table('users')->insert([
            'name' => 'Md. Julfikar Islam Khan',
            'email' => 'julfikar.islam.khan@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
```

- Run the db seeder
```bash
php artisan db:seed --class=UsersTableSeeder
```

- Create login controller : UserLoginController

```php
...
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    //
    function index(Request $request)
    {
        $user= User::where("email", $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}
```
- Creating the *routes*

```php
// routes > api.php

Route::post("login",[UserLoginController::class,'index']);

// *POSTMAN : http://127.0.0.1:8000/api/login
```

- *Make the routes more secure*
```php
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    Route::get("get_data",[DemoController::class,'demo']);

    });

// *POSTMAN > Headers > [Authorization : Bearer token....]
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

- config:

```php
// app > Models > User.php

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable; // *inlcude HasApiTokens
    
    ...
}
```

- other stuffs:

```php
// app > Providers > AuthServiceProvider.php

use Laravel\Passport\Passport;

public function boot()
{
    ...
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
