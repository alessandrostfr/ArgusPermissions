This file is a merged representation of the entire codebase, combined into a single document by Repomix.

# File Summary

## Purpose
This file contains a packed representation of the entire repository's contents.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)

# Directory Structure
```
.editorconfig
.env.example
.gitattributes
.gitignore
.styleci.yml
app/ArgusPermission/Models/Permission.php
app/ArgusPermission/Models/Role.php
app/ArgusPermission/Traits/UserTrait.php
app/Console/Kernel.php
app/Exceptions/Handler.php
app/Http/Controllers/Auth/ConfirmPasswordController.php
app/Http/Controllers/Auth/ForgotPasswordController.php
app/Http/Controllers/Auth/LoginController.php
app/Http/Controllers/Auth/RegisterController.php
app/Http/Controllers/Auth/ResetPasswordController.php
app/Http/Controllers/Auth/VerificationController.php
app/Http/Controllers/Controller.php
app/Http/Controllers/HomeController.php
app/Http/Controllers/RoleController.php
app/Http/Controllers/UserController.php
app/Http/Kernel.php
app/Http/Middleware/Authenticate.php
app/Http/Middleware/CheckForMaintenanceMode.php
app/Http/Middleware/EncryptCookies.php
app/Http/Middleware/RedirectIfAuthenticated.php
app/Http/Middleware/TrimStrings.php
app/Http/Middleware/TrustHosts.php
app/Http/Middleware/TrustProxies.php
app/Http/Middleware/VerifyCsrfToken.php
app/Listeners/RegisteredEvent.php
app/Policies/UserPolicy.php
app/Providers/AppServiceProvider.php
app/Providers/AuthServiceProvider.php
app/Providers/BroadcastServiceProvider.php
app/Providers/EventServiceProvider.php
app/Providers/RouteServiceProvider.php
app/User.php
artisan
bootstrap/app.php
bootstrap/cache/.gitignore
composer.json
config/app.php
config/auth.php
config/broadcasting.php
config/cache.php
config/cors.php
config/database.php
config/filesystems.php
config/hashing.php
config/logging.php
config/mail.php
config/queue.php
config/services.php
config/session.php
config/view.php
database/.gitignore
database/factories/UserFactory.php
database/migrations/2014_10_12_000000_create_users_table.php
database/migrations/2014_10_12_100000_create_password_resets_table.php
database/migrations/2019_08_19_000000_create_failed_jobs_table.php
database/migrations/2020_07_14_111250_create_roles_table.php
database/migrations/2020_07_14_112233_create_role_user_table.php
database/migrations/2020_07_14_125040_create_permissions_table.php
database/migrations/2020_07_14_125408_create_permission_role_table.php
database/seeds/ArgusPermissionsInfoSeeder.php
database/seeds/DatabaseSeeder.php
package.json
phpunit.xml
public/.htaccess
public/css/app.css
public/favicon.ico
public/index.php
public/js/app.js
public/js/app.js.LICENSE.txt
public/mix-manifest.json
public/robots.txt
README.md
resources/js/app.js
resources/js/bootstrap.js
resources/js/components/ExampleComponent.vue
resources/lang/en/auth.php
resources/lang/en/pagination.php
resources/lang/en/passwords.php
resources/lang/en/validation.php
resources/lang/es.json
resources/lang/es/auth.php
resources/lang/es/pagination.php
resources/lang/es/passwords.php
resources/lang/es/validation.php
resources/sass/_variables.scss
resources/sass/app.scss
resources/views/auth/login.blade.php
resources/views/auth/passwords/confirm.blade.php
resources/views/auth/passwords/email.blade.php
resources/views/auth/passwords/reset.blade.php
resources/views/auth/register.blade.php
resources/views/auth/verify.blade.php
resources/views/custom/message.blade.php
resources/views/home.blade.php
resources/views/layouts/app.blade.php
resources/views/role/create.blade.php
resources/views/role/edit.blade.php
resources/views/role/index.blade.php
resources/views/role/show.blade.php
resources/views/user/edit.blade.php
resources/views/user/index.blade.php
resources/views/user/show.blade.php
resources/views/welcome.blade.php
routes/api.php
routes/channels.php
routes/console.php
routes/web.php
server.php
storage/app/.gitignore
storage/app/public/.gitignore
storage/framework/.gitignore
storage/framework/cache/.gitignore
storage/framework/cache/data/.gitignore
storage/framework/sessions/.gitignore
storage/framework/testing/.gitignore
storage/framework/views/.gitignore
storage/logs/.gitignore
tests/CreatesApplication.php
tests/Feature/ExampleTest.php
tests/TestCase.php
tests/Unit/ExampleTest.php
webpack.mix.js
```

# Files

## File: .editorconfig
```
root = true

[*]
charset = utf-8
end_of_line = lf
insert_final_newline = true
indent_style = space
indent_size = 4
trim_trailing_whitespace = true

[*.md]
trim_trailing_whitespace = false

[*.{yml,yaml}]
indent_size = 2
```

## File: .env.example
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

## File: .gitattributes
```
* text=auto
*.css linguist-vendored
*.scss linguist-vendored
*.js linguist-vendored
CHANGELOG.md export-ignore
```

## File: .gitignore
```
/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
```

## File: .styleci.yml
```yaml
php:
  preset: laravel
  disabled:
    - unused_use
  finder:
    not-name:
      - index.php
      - server.php
js:
  finder:
    not-name:
      - webpack.mix.js
css: true
```

## File: app/ArgusPermission/Traits/UserTrait.php
```php
<?php

    namespace App\ArgusPermission\Traits;

    trait UserTrait{

        public function roles(){
            return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimesTamps();
        }
    
        public function havePermission($permission){
            foreach($this->roles as $role){
                if($role['full-access'] == "yes"){
                    return true;
                }
    
                foreach($role->permissions as $role_permission){
                    if($role_permission->slug == $permission){
                        return true;
                    }
                }
            }
            return false;
            
        }
    }
```

## File: app/Console/Kernel.php
```php
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
```

## File: app/Exceptions/Handler.php
```php
<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
```

## File: app/Http/Controllers/Auth/ConfirmPasswordController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
```

## File: app/Http/Controllers/Auth/ForgotPasswordController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
}
```

## File: app/Http/Controllers/Auth/LoginController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
```

## File: app/Http/Controllers/Auth/RegisterController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
```

## File: app/Http/Controllers/Auth/ResetPasswordController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
```

## File: app/Http/Controllers/Auth/VerificationController.php
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
```

## File: app/Http/Controllers/Controller.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
```

## File: app/Http/Controllers/HomeController.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
```

## File: app/Http/Kernel.php
```php
<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
```

## File: app/Http/Middleware/Authenticate.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
```

## File: app/Http/Middleware/CheckForMaintenanceMode.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Http/Middleware/EncryptCookies.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Http/Middleware/RedirectIfAuthenticated.php
```php
<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
```

## File: app/Http/Middleware/TrimStrings.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
```

## File: app/Http/Middleware/TrustHosts.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
```

## File: app/Http/Middleware/TrustProxies.php
```php
<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
```

## File: app/Http/Middleware/VerifyCsrfToken.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Listeners/RegisteredEvent.php
```php
<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisteredEvent
{



    public function __construct()
    {
        //
    }


    public function handle(Registered $event)
    {
        $event->user->roles()->sync([2]);
    }


}
```

## File: app/Policies/UserPolicy.php
```php
<?php

    //A DIFERENCIA DE LAS GATES, LAS POLITICAS TIENEN QUE ESTAR ENLAZADAS A UN MODELO

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;


    public function viewAny(User $AuthenticateUser)
    {
        //
    }


    public function create(User $AuthenticateUser)
    {
        return $AuthenticateUser->id >0;
    }


    public function update(User $AuthenticateUser, User $user, $perm=null)
    {
        if($AuthenticateUser->havePermission($perm[0])){
            return true;
        }elseif($AuthenticateUser->havePermission($perm[1])){
            return $AuthenticateUser->id === $user->id;
        }else{
            return false;
        }
    }


    public function view(User $AuthenticateUser, User $user, $perm=null)
    {

        if($AuthenticateUser->havePermission($perm[0])){
            return true;
        }elseif($AuthenticateUser->havePermission($perm[1])){
            return $AuthenticateUser->id === $user->id;
        }else{
            return false;
        }
        
    }


}
```

## File: app/Providers/AppServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
```

## File: app/Providers/BroadcastServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
```

## File: app/Providers/RouteServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
```

## File: artisan
```
#!/usr/bin/env php
<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Artisan Application
|--------------------------------------------------------------------------
|
| When we run the console application, the current CLI command will be
| executed in this console and the response sent back to a terminal
| or another output device for the developers. Here goes nothing!
|
*/

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

/*
|--------------------------------------------------------------------------
| Shutdown The Application
|--------------------------------------------------------------------------
|
| Once Artisan has finished running, we will fire off the shutdown events
| so that any final work may be done by the application before we shut
| down the process. This is the last thing to happen to the request.
|
*/

$kernel->terminate($input, $status);

exit($status);
```

## File: bootstrap/app.php
```php
<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
```

## File: bootstrap/cache/.gitignore
```
*
!.gitignore
```

## File: config/auth.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
```

## File: config/broadcasting.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "pusher", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
```

## File: config/cache.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    | Supported: "apc", "array", "database", "file",
    |            "memcached", "redis", "dynamodb"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'),

];
```

## File: config/cors.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
```

## File: config/database.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
```

## File: config/filesystems.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
```

## File: config/hashing.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Bcrypt algorithm. This will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Argon algorithm. These will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],

];
```

## File: config/logging.php
```php
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => 'critical',
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => 'debug',
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
```

## File: config/mail.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
```

## File: config/queue.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
```

## File: config/services.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
```

## File: config/session.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache driven session backends you may
    | list a cache store that should be used for these sessions. This value
    | must match with one of the application's configured cache "stores".
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE', null),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
```

## File: config/view.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
```

## File: database/.gitignore
```
*.sqlite
*.sqlite-journal
```

## File: database/factories/UserFactory.php
```php
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
```

## File: database/migrations/2014_10_12_000000_create_users_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
```

## File: database/migrations/2014_10_12_100000_create_password_resets_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
```

## File: database/migrations/2019_08_19_000000_create_failed_jobs_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
```

## File: database/migrations/2020_07_14_112233_create_role_user_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
```

## File: database/migrations/2020_07_14_125040_create_permissions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{



    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('permissions');
    }


}
```

## File: database/migrations/2020_07_14_125408_create_permission_role_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
```

## File: package.json
```json
{
    "private": true,
    "scripts": {
        "dev": "npm run development",
        "development": "cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        "watch": "npm run development -- --watch",
        "watch-poll": "npm run watch -- --watch-poll",
        "hot": "cross-env NODE_ENV=development node_modules/webpack-dev-server/bin/webpack-dev-server.js --inline --hot --disable-host-check --config=node_modules/laravel-mix/setup/webpack.config.js",
        "prod": "npm run production",
        "production": "cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
    },
    "devDependencies": {
        "axios": "^0.19",
        "bootstrap": "^4.0.0",
        "cross-env": "^7.0",
        "jquery": "^3.2",
        "laravel-mix": "^5.0.1",
        "lodash": "^4.17.13",
        "popper.js": "^1.12",
        "resolve-url-loader": "^2.3.1",
        "sass": "^1.20.1",
        "sass-loader": "^8.0.0",
        "vue": "^2.5.17",
        "vue-template-compiler": "^2.6.10"
    }
}
```

## File: phpunit.xml
```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="./vendor/phpunit/phpunit/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
>
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">./app</directory>
        </whitelist>
    </filter>
    <php>
        <server name="APP_ENV" value="testing"/>
        <server name="BCRYPT_ROUNDS" value="4"/>
        <server name="CACHE_DRIVER" value="array"/>
        <!-- <server name="DB_CONNECTION" value="sqlite"/> -->
        <!-- <server name="DB_DATABASE" value=":memory:"/> -->
        <server name="MAIL_MAILER" value="array"/>
        <server name="QUEUE_CONNECTION" value="sync"/>
        <server name="SESSION_DRIVER" value="array"/>
        <server name="TELESCOPE_ENABLED" value="false"/>
    </php>
</phpunit>
```

## File: public/.htaccess
```
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

## File: public/css/app.css
```css
@import url(https://fonts.googleapis.com/css?family=Nunito);

/*!
 * Bootstrap v4.5.0 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */:root{--blue:#3490dc;--indigo:#6574cd;--purple:#9561e2;--pink:#f66d9b;--red:#e3342f;--orange:#f6993f;--yellow:#ffed4a;--green:#38c172;--teal:#4dc0b5;--cyan:#6cb2eb;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#3490dc;--secondary:#6c757d;--success:#38c172;--info:#6cb2eb;--warning:#ffed4a;--danger:#e3342f;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:"Nunito",sans-serif;--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:Nunito,sans-serif;font-size:.9rem;font-weight:400;line-height:1.6;color:#212529;text-align:left;background-color:#f8fafc}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{font-style:normal;line-height:inherit}address,dl,ol,ul{margin-bottom:1rem}dl,ol,ul{margin-top:0}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#3490dc;text-decoration:none;background-color:transparent}a:hover{color:#1d68a7;text-decoration:underline}a:not([href]),a:not([href]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto;-ms-overflow-style:scrollbar}figure{margin:0 0 1rem}img{border-style:none}img,svg{vertical-align:middle}svg{overflow:hidden}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.25rem}.h2,h2{font-size:1.8rem}.h3,h3{font-size:1.575rem}.h4,h4{font-size:1.35rem}.h5,h5{font-size:1.125rem}.h6,h6{font-size:.9rem}.lead{font-size:1.125rem;font-weight:300}.display-1{font-size:6rem}.display-1,.display-2{font-weight:300;line-height:1.2}.display-2{font-size:5.5rem}.display-3{font-size:4.5rem}.display-3,.display-4{font-weight:300;line-height:1.2}.display-4{font-size:3.5rem}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-inline,.list-unstyled{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.125rem}.blockquote-footer{display:block;font-size:80%;color:#6c757d}.blockquote-footer:before{content:"\2014\A0"}.img-fluid,.img-thumbnail{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#f8fafc;border:1px solid #dee2e6;border-radius:.25rem}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:#f66d9b;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#212529}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid,.container-lg,.container-md,.container-sm,.container-xl{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col-auto,.col-lg,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-auto,.col-md,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md-auto,.col-sm,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{flex-basis:0;flex-grow:1;min-width:0;max-width:100%}.row-cols-1>*{flex:0 0 100%;max-width:100%}.row-cols-2>*{flex:0 0 50%;max-width:50%}.row-cols-3>*{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-cols-4>*{flex:0 0 25%;max-width:25%}.row-cols-5>*{flex:0 0 20%;max-width:20%}.row-cols-6>*{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-auto{flex:0 0 auto;width:auto;max-width:100%}.col-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-3{flex:0 0 25%;max-width:25%}.col-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-6{flex:0 0 50%;max-width:50%}.col-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-9{flex:0 0 75%;max-width:75%}.col-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-12{flex:0 0 100%;max-width:100%}.order-first{order:-1}.order-last{order:13}.order-0{order:0}.order-1{order:1}.order-2{order:2}.order-3{order:3}.order-4{order:4}.order-5{order:5}.order-6{order:6}.order-7{order:7}.order-8{order:8}.order-9{order:9}.order-10{order:10}.order-11{order:11}.order-12{order:12}.offset-1{margin-left:8.3333333333%}.offset-2{margin-left:16.6666666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.3333333333%}.offset-5{margin-left:41.6666666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.3333333333%}.offset-8{margin-left:66.6666666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.3333333333%}.offset-11{margin-left:91.6666666667%}@media (min-width:576px){.col-sm{flex-basis:0;flex-grow:1;min-width:0;max-width:100%}.row-cols-sm-1>*{flex:0 0 100%;max-width:100%}.row-cols-sm-2>*{flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-cols-sm-4>*{flex:0 0 25%;max-width:25%}.row-cols-sm-5>*{flex:0 0 20%;max-width:20%}.row-cols-sm-6>*{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-sm-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-sm-3{flex:0 0 25%;max-width:25%}.col-sm-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-sm-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-sm-6{flex:0 0 50%;max-width:50%}.col-sm-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-sm-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-sm-9{flex:0 0 75%;max-width:75%}.col-sm-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-sm-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-sm-12{flex:0 0 100%;max-width:100%}.order-sm-first{order:-1}.order-sm-last{order:13}.order-sm-0{order:0}.order-sm-1{order:1}.order-sm-2{order:2}.order-sm-3{order:3}.order-sm-4{order:4}.order-sm-5{order:5}.order-sm-6{order:6}.order-sm-7{order:7}.order-sm-8{order:8}.order-sm-9{order:9}.order-sm-10{order:10}.order-sm-11{order:11}.order-sm-12{order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.3333333333%}.offset-sm-2{margin-left:16.6666666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.3333333333%}.offset-sm-5{margin-left:41.6666666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.3333333333%}.offset-sm-8{margin-left:66.6666666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.3333333333%}.offset-sm-11{margin-left:91.6666666667%}}@media (min-width:768px){.col-md{flex-basis:0;flex-grow:1;min-width:0;max-width:100%}.row-cols-md-1>*{flex:0 0 100%;max-width:100%}.row-cols-md-2>*{flex:0 0 50%;max-width:50%}.row-cols-md-3>*{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-cols-md-4>*{flex:0 0 25%;max-width:25%}.row-cols-md-5>*{flex:0 0 20%;max-width:20%}.row-cols-md-6>*{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-md-auto{flex:0 0 auto;width:auto;max-width:100%}.col-md-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-md-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-md-3{flex:0 0 25%;max-width:25%}.col-md-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-md-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-md-6{flex:0 0 50%;max-width:50%}.col-md-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-md-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-md-9{flex:0 0 75%;max-width:75%}.col-md-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-md-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-md-12{flex:0 0 100%;max-width:100%}.order-md-first{order:-1}.order-md-last{order:13}.order-md-0{order:0}.order-md-1{order:1}.order-md-2{order:2}.order-md-3{order:3}.order-md-4{order:4}.order-md-5{order:5}.order-md-6{order:6}.order-md-7{order:7}.order-md-8{order:8}.order-md-9{order:9}.order-md-10{order:10}.order-md-11{order:11}.order-md-12{order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.3333333333%}.offset-md-2{margin-left:16.6666666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.3333333333%}.offset-md-5{margin-left:41.6666666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.3333333333%}.offset-md-8{margin-left:66.6666666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.3333333333%}.offset-md-11{margin-left:91.6666666667%}}@media (min-width:992px){.col-lg{flex-basis:0;flex-grow:1;min-width:0;max-width:100%}.row-cols-lg-1>*{flex:0 0 100%;max-width:100%}.row-cols-lg-2>*{flex:0 0 50%;max-width:50%}.row-cols-lg-3>*{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-cols-lg-4>*{flex:0 0 25%;max-width:25%}.row-cols-lg-5>*{flex:0 0 20%;max-width:20%}.row-cols-lg-6>*{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-lg-auto{flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-lg-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-lg-3{flex:0 0 25%;max-width:25%}.col-lg-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-lg-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-lg-6{flex:0 0 50%;max-width:50%}.col-lg-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-lg-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-lg-9{flex:0 0 75%;max-width:75%}.col-lg-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-lg-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-lg-12{flex:0 0 100%;max-width:100%}.order-lg-first{order:-1}.order-lg-last{order:13}.order-lg-0{order:0}.order-lg-1{order:1}.order-lg-2{order:2}.order-lg-3{order:3}.order-lg-4{order:4}.order-lg-5{order:5}.order-lg-6{order:6}.order-lg-7{order:7}.order-lg-8{order:8}.order-lg-9{order:9}.order-lg-10{order:10}.order-lg-11{order:11}.order-lg-12{order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.3333333333%}.offset-lg-2{margin-left:16.6666666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.3333333333%}.offset-lg-5{margin-left:41.6666666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.3333333333%}.offset-lg-8{margin-left:66.6666666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.3333333333%}.offset-lg-11{margin-left:91.6666666667%}}@media (min-width:1200px){.col-xl{flex-basis:0;flex-grow:1;min-width:0;max-width:100%}.row-cols-xl-1>*{flex:0 0 100%;max-width:100%}.row-cols-xl-2>*{flex:0 0 50%;max-width:50%}.row-cols-xl-3>*{flex:0 0 33.3333333333%;max-width:33.3333333333%}.row-cols-xl-4>*{flex:0 0 25%;max-width:25%}.row-cols-xl-5>*{flex:0 0 20%;max-width:20%}.row-cols-xl-6>*{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-xl-auto{flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-xl-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-xl-3{flex:0 0 25%;max-width:25%}.col-xl-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-xl-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-xl-6{flex:0 0 50%;max-width:50%}.col-xl-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-xl-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-xl-9{flex:0 0 75%;max-width:75%}.col-xl-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-xl-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-xl-12{flex:0 0 100%;max-width:100%}.order-xl-first{order:-1}.order-xl-last{order:13}.order-xl-0{order:0}.order-xl-1{order:1}.order-xl-2{order:2}.order-xl-3{order:3}.order-xl-4{order:4}.order-xl-5{order:5}.order-xl-6{order:6}.order-xl-7{order:7}.order-xl-8{order:8}.order-xl-9{order:9}.order-xl-10{order:10}.order-xl-11{order:11}.order-xl-12{order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.3333333333%}.offset-xl-2{margin-left:16.6666666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.3333333333%}.offset-xl-5{margin-left:41.6666666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.3333333333%}.offset-xl-8{margin-left:66.6666666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.3333333333%}.offset-xl-11{margin-left:91.6666666667%}}.table{width:100%;margin-bottom:1rem;color:#212529}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table-sm td,.table-sm th{padding:.3rem}.table-bordered,.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th{border:0}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{color:#212529;background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#c6e0f5}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#95c5ed}.table-hover .table-primary:hover,.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#b0d4f1}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}.table-hover .table-secondary:hover,.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#c7eed8}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#98dfb6}.table-hover .table-success:hover,.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b3e8ca}.table-info,.table-info>td,.table-info>th{background-color:#d6e9f9}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#b3d7f5}.table-hover .table-info:hover,.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#c0ddf6}.table-warning,.table-warning>td,.table-warning>th{background-color:#fffacc}.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#fff6a1}.table-hover .table-warning:hover,.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#fff8b3}.table-danger,.table-danger>td,.table-danger>th{background-color:#f7c6c5}.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#f09593}.table-hover .table-danger:hover,.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f4b0af}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#fbfcfc}.table-hover .table-light:hover,.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#95999c}.table-hover .table-dark:hover,.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th,.table-hover .table-active:hover,.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#343a40;border-color:#454d55}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#343a40}.table-dark td,.table-dark th,.table-dark thead th{border-color:#454d55}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:hsla(0,0%,100%,.05)}.table-dark.table-hover tbody tr:hover{color:#fff;background-color:hsla(0,0%,100%,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;height:calc(1.6em + .75rem + 2px);padding:.375rem .75rem;font-size:.9rem;font-weight:400;line-height:1.6;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.form-control:focus{color:#495057;background-color:#fff;border-color:#a1cbef;outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.6}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.125rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.7875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;font-size:.9rem;line-height:1.6;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.form-control-lg{height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.125rem;line-height:1.5;border-radius:.3rem}select.form-control[multiple],select.form-control[size],textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:flex;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:inline-flex;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#38c172}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.7875rem;line-height:1.6;color:#fff;background-color:rgba(56,193,114,.9);border-radius:.25rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#38c172;padding-right:calc(1.6em + .75rem);background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2338c172' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right calc(.4em + .1875rem) center;background-size:calc(.8em + .375rem) calc(.8em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#38c172;box-shadow:0 0 0 .2rem rgba(56,193,114,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.6em + .75rem);background-position:top calc(.4em + .1875rem) right calc(.4em + .1875rem)}.custom-select.is-valid,.was-validated .custom-select:valid{border-color:#38c172;padding-right:calc(.75em + 2.3125rem);background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2338c172' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E") #fff no-repeat center right 1.75rem/calc(.8em + .375rem) calc(.8em + .375rem)}.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus{border-color:#38c172;box-shadow:0 0 0 .2rem rgba(56,193,114,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#38c172}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#38c172}.custom-control-input.is-valid~.custom-control-label:before,.was-validated .custom-control-input:valid~.custom-control-label:before{border-color:#38c172}.custom-control-input.is-valid:checked~.custom-control-label:before,.was-validated .custom-control-input:valid:checked~.custom-control-label:before{border-color:#5cd08d;background-color:#5cd08d}.custom-control-input.is-valid:focus~.custom-control-label:before,.was-validated .custom-control-input:valid:focus~.custom-control-label:before{box-shadow:0 0 0 .2rem rgba(56,193,114,.25)}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label:before,.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label:before,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#38c172}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{border-color:#38c172;box-shadow:0 0 0 .2rem rgba(56,193,114,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#e3342f}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.7875rem;line-height:1.6;color:#fff;background-color:rgba(227,52,47,.9);border-radius:.25rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#e3342f;padding-right:calc(1.6em + .75rem);background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e3342f'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23e3342f' stroke='none'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right calc(.4em + .1875rem) center;background-size:calc(.8em + .375rem) calc(.8em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#e3342f;box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.6em + .75rem);background-position:top calc(.4em + .1875rem) right calc(.4em + .1875rem)}.custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#e3342f;padding-right:calc(.75em + 2.3125rem);background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e3342f'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23e3342f' stroke='none'/%3E%3C/svg%3E") #fff no-repeat center right 1.75rem/calc(.8em + .375rem) calc(.8em + .375rem)}.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#e3342f;box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#e3342f}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#e3342f}.custom-control-input.is-invalid~.custom-control-label:before,.was-validated .custom-control-input:invalid~.custom-control-label:before{border-color:#e3342f}.custom-control-input.is-invalid:checked~.custom-control-label:before,.was-validated .custom-control-input:invalid:checked~.custom-control-label:before{border-color:#e9605c;background-color:#e9605c}.custom-control-input.is-invalid:focus~.custom-control-label:before,.was-validated .custom-control-input:invalid:focus~.custom-control-label:before{box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label:before,.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label:before,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#e3342f}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{border-color:#e3342f;box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.form-inline{display:flex;flex-flow:row wrap;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{justify-content:center}.form-inline .form-group,.form-inline label{display:flex;align-items:center;margin-bottom:0}.form-inline .form-group{flex:0 0 auto;flex-flow:row wrap}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .custom-select,.form-inline .input-group{width:auto}.form-inline .form-check{display:flex;align-items:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;flex-shrink:0;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{align-items:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:.9rem;line-height:1.6;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#3490dc;border-color:#3490dc}.btn-primary.focus,.btn-primary:focus,.btn-primary:hover{color:#fff;background-color:#227dc7;border-color:#2176bd}.btn-primary.focus,.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(82,161,225,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#3490dc;border-color:#3490dc}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#2176bd;border-color:#1f6fb2}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,161,225,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary.focus,.btn-secondary:focus,.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-success{color:#fff;background-color:#38c172;border-color:#38c172}.btn-success.focus,.btn-success:focus,.btn-success:hover{color:#fff;background-color:#2fa360;border-color:#2d995b}.btn-success.focus,.btn-success:focus{box-shadow:0 0 0 .2rem rgba(86,202,135,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#38c172;border-color:#38c172}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#2d995b;border-color:#2a9055}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(86,202,135,.5)}.btn-info{color:#212529;background-color:#6cb2eb;border-color:#6cb2eb}.btn-info.focus,.btn-info:focus,.btn-info:hover{color:#fff;background-color:#4aa0e6;border-color:#3f9ae5}.btn-info.focus,.btn-info:focus{box-shadow:0 0 0 .2rem rgba(97,157,206,.5)}.btn-info.disabled,.btn-info:disabled{color:#212529;background-color:#6cb2eb;border-color:#6cb2eb}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#3f9ae5;border-color:#3495e3}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(97,157,206,.5)}.btn-warning{color:#212529;background-color:#ffed4a;border-color:#ffed4a}.btn-warning.focus,.btn-warning:focus,.btn-warning:hover{color:#212529;background-color:#ffe924;border-color:#ffe817}.btn-warning.focus,.btn-warning:focus{box-shadow:0 0 0 .2rem rgba(222,207,69,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#ffed4a;border-color:#ffed4a}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#ffe817;border-color:#ffe70a}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,207,69,.5)}.btn-danger{color:#fff;background-color:#e3342f;border-color:#e3342f}.btn-danger.focus,.btn-danger:focus,.btn-danger:hover{color:#fff;background-color:#d0211c;border-color:#c51f1a}.btn-danger.focus,.btn-danger:focus{box-shadow:0 0 0 .2rem rgba(231,82,78,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#e3342f;border-color:#e3342f}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#c51f1a;border-color:#b91d19}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(231,82,78,.5)}.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light.focus,.btn-light:focus,.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-light.focus,.btn-light:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark.focus,.btn-dark:focus,.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-dark.focus,.btn-dark:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-outline-primary{color:#3490dc;border-color:#3490dc}.btn-outline-primary:hover{color:#fff;background-color:#3490dc;border-color:#3490dc}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(52,144,220,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#3490dc;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#3490dc;border-color:#3490dc}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,144,220,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success{color:#38c172;border-color:#38c172}.btn-outline-success:hover{color:#fff;background-color:#38c172;border-color:#38c172}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(56,193,114,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#38c172;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#38c172;border-color:#38c172}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(56,193,114,.5)}.btn-outline-info{color:#6cb2eb;border-color:#6cb2eb}.btn-outline-info:hover{color:#212529;background-color:#6cb2eb;border-color:#6cb2eb}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .2rem rgba(108,178,235,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#6cb2eb;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#212529;background-color:#6cb2eb;border-color:#6cb2eb}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,178,235,.5)}.btn-outline-warning{color:#ffed4a;border-color:#ffed4a}.btn-outline-warning:hover{color:#212529;background-color:#ffed4a;border-color:#ffed4a}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,237,74,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffed4a;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffed4a;border-color:#ffed4a}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,237,74,.5)}.btn-outline-danger{color:#e3342f;border-color:#e3342f}.btn-outline-danger:hover{color:#fff;background-color:#e3342f;border-color:#e3342f}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(227,52,47,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#e3342f;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#e3342f;border-color:#e3342f}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(227,52,47,.5)}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark{color:#343a40;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#3490dc;text-decoration:none}.btn-link:hover{color:#1d68a7}.btn-link.focus,.btn-link:focus,.btn-link:hover{text-decoration:underline}.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.125rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty:after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:.9rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu-left{right:auto;left:0}.dropdown-menu-right{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-left{right:auto;left:0}.dropdown-menu-sm-right{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-left{right:auto;left:0}.dropdown-menu-md-right{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-left{right:auto;left:0}.dropdown-menu-lg-right{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-left{right:auto;left:0}.dropdown-menu-xl-right{right:0;left:auto}}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty:after{margin-left:0}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropright .dropdown-toggle:empty:after{margin-left:0}.dropright .dropdown-toggle:after{vertical-align:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";display:none}.dropleft .dropdown-toggle:before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropleft .dropdown-toggle:empty:after{margin-left:0}.dropleft .dropdown-toggle:before{vertical-align:0}.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#3490dc}.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.7875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1.5rem;color:#212529}.btn-group,.btn-group-vertical{position:relative;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;flex:1 1 auto}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}.btn-toolbar{display:flex;flex-wrap:wrap;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split:after,.dropright .dropdown-toggle-split:after,.dropup .dropdown-toggle-split:after{margin-left:0}.dropleft .dropdown-toggle-split:before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{flex-direction:column;align-items:flex-start;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio],.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext{position:relative;flex:1 1 auto;width:1%;min-width:0;margin-bottom:0}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control{margin-left:-1px}.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file .custom-file-input:focus{z-index:4}.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:flex;align-items:center}.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label:after{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-file:not(:first-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-append,.input-group-prepend{display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn:focus,.input-group-prepend .btn:focus{z-index:3}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:flex;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:.9rem;font-weight:400;line-height:1.6;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea){height:calc(1.5em + 1rem + 2px)}.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.125rem;line-height:1.5;border-radius:.3rem}.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea){height:calc(1.5em + .5rem + 2px)}.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.25rem .5rem;font-size:.7875rem;line-height:1.5;border-radius:.2rem}.input-group-lg>.custom-select,.input-group-sm>.custom-select{padding-right:1.75rem}.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;display:block;min-height:1.44rem;padding-left:1.5rem}.custom-control-inline{display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;left:0;z-index:-1;width:1rem;height:1.22rem;opacity:0}.custom-control-input:checked~.custom-control-label:before{color:#fff;border-color:#3490dc;background-color:#3490dc}.custom-control-input:focus~.custom-control-label:before{box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.custom-control-input:focus:not(:checked)~.custom-control-label:before{border-color:#a1cbef}.custom-control-input:not(:disabled):active~.custom-control-label:before{color:#fff;background-color:#cce3f6;border-color:#cce3f6}.custom-control-input:disabled~.custom-control-label,.custom-control-input[disabled]~.custom-control-label{color:#6c757d}.custom-control-input:disabled~.custom-control-label:before,.custom-control-input[disabled]~.custom-control-label:before{background-color:#e9ecef}.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}.custom-control-label:before{pointer-events:none;background-color:#fff;border:1px solid #adb5bd}.custom-control-label:after,.custom-control-label:before{position:absolute;top:.22rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:""}.custom-control-label:after{background:no-repeat 50%/50% 50%}.custom-checkbox .custom-control-label:before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:before{border-color:#3490dc;background-color:#3490dc}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:before{background-color:rgba(52,144,220,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label:before{background-color:rgba(52,144,220,.5)}.custom-radio .custom-control-label:before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label:before{background-color:rgba(52,144,220,.5)}.custom-switch{padding-left:2.25rem}.custom-switch .custom-control-label:before{left:-2.25rem;width:1.75rem;pointer-events:all;border-radius:.5rem}.custom-switch .custom-control-label:after{top:calc(.22rem + 2px);left:calc(-2.25rem + 2px);width:calc(1rem - 4px);height:calc(1rem - 4px);background-color:#adb5bd;border-radius:.5rem;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-switch .custom-control-label:after{transition:none}}.custom-switch .custom-control-input:checked~.custom-control-label:after{background-color:#fff;transform:translateX(.75rem)}.custom-switch .custom-control-input:disabled:checked~.custom-control-label:before{background-color:rgba(52,144,220,.5)}.custom-select{display:inline-block;width:100%;height:calc(1.6em + .75rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-size:.9rem;font-weight:400;line-height:1.6;color:#495057;vertical-align:middle;background:#fff url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#a1cbef;outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}.custom-select:disabled{color:#6c757d;background-color:#e9ecef}.custom-select::-ms-expand{display:none}.custom-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.custom-select-sm{height:calc(1.5em + .5rem + 2px);padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.7875rem}.custom-select-lg{height:calc(1.5em + 1rem + 2px);padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.125rem}.custom-file{display:inline-block;margin-bottom:0}.custom-file,.custom-file-input{position:relative;width:100%;height:calc(1.6em + .75rem + 2px)}.custom-file-input{z-index:2;margin:0;opacity:0}.custom-file-input:focus~.custom-file-label{border-color:#a1cbef;box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.custom-file-input:disabled~.custom-file-label,.custom-file-input[disabled]~.custom-file-label{background-color:#e9ecef}.custom-file-input:lang(en)~.custom-file-label:after{content:"Browse"}.custom-file-input~.custom-file-label[data-browse]:after{content:attr(data-browse)}.custom-file-label{left:0;z-index:1;height:calc(1.6em + .75rem + 2px);font-weight:400;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label,.custom-file-label:after{position:absolute;top:0;right:0;padding:.375rem .75rem;line-height:1.6;color:#495057}.custom-file-label:after{bottom:0;z-index:3;display:block;height:calc(1.6em + .75rem);content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.custom-range{width:100%;height:1.4rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-range:focus{outline:none}.custom-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(52,144,220,.25)}.custom-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(52,144,220,.25)}.custom-range:focus::-ms-thumb{box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(52,144,220,.25)}.custom-range::-moz-focus-outer{border:0}.custom-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#3490dc;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.custom-range::-webkit-slider-thumb:active{background-color:#cce3f6}.custom-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#3490dc;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-moz-range-thumb{-moz-transition:none;transition:none}}.custom-range::-moz-range-thumb:active{background-color:#cce3f6}.custom-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-ms-thumb{width:1rem;height:1rem;margin-top:0;margin-right:.2rem;margin-left:.2rem;background-color:#3490dc;border:0;border-radius:1rem;-ms-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-ms-thumb{-ms-transition:none;transition:none}}.custom-range::-ms-thumb:active{background-color:#cce3f6}.custom-range::-ms-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:transparent;border-color:transparent;border-width:.5rem}.custom-range::-ms-fill-lower,.custom-range::-ms-fill-upper{background-color:#dee2e6;border-radius:1rem}.custom-range::-ms-fill-upper{margin-right:15px}.custom-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.custom-range:disabled::-webkit-slider-runnable-track{cursor:default}.custom-range:disabled::-moz-range-thumb{background-color:#adb5bd}.custom-range:disabled::-moz-range-track{cursor:default}.custom-range:disabled::-ms-thumb{background-color:#adb5bd}.custom-control-label:before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-control-label:before,.custom-file-label,.custom-select{transition:none}}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#f8fafc;border-color:#dee2e6 #dee2e6 #f8fafc}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#3490dc}.nav-fill .nav-item{flex:1 1 auto;text-align:center}.nav-justified .nav-item{flex-basis:0;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;padding:.5rem 1rem}.navbar,.navbar .container,.navbar .container-fluid,.navbar .container-lg,.navbar .container-md,.navbar .container-sm,.navbar .container-xl{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.32rem;padding-bottom:.32rem;margin-right:1rem;font-size:1.125rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.125rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat 50%;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-xl .navbar-nav{flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand,.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a,.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand,.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:hsla(0,0%,100%,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:hsla(0,0%,100%,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:hsla(0,0%,100%,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:hsla(0,0%,100%,.5);border-color:hsla(0,0%,100%,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-dark .navbar-text{color:hsla(0,0%,100%,.5)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-body{flex:1 1 auto;min-height:1px;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem}.card-subtitle,.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-bottom:-.75rem;border-bottom:0}.card-header-pills,.card-header-tabs{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img,.card-img-bottom,.card-img-top{flex-shrink:0;width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{display:flex;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{flex:1 0 0%;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{display:flex;flex-flow:row wrap}.card-group>.card{flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-moz-column-count:3;column-count:3;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion>.card{overflow:hidden}.accordion>.card:not(:last-of-type){border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion>.card:not(:first-of-type){border-top-left-radius:0;border-top-right-radius:0}.accordion>.card>.card-header{border-radius:0;margin-bottom:-1px}.breadcrumb{flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.breadcrumb,.breadcrumb-item{display:flex}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item:before{display:inline-block;padding-right:.5rem;color:#6c757d;content:"/"}.breadcrumb-item+.breadcrumb-item:hover:before{text-decoration:underline;text-decoration:none}.breadcrumb-item.active{color:#6c757d}.pagination{display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#3490dc;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#1d68a7;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.25)}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:3;color:#fff;background-color:#3490dc;border-color:#3490dc}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.125rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.7875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#3490dc}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#2176bd}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#38c172}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#2d995b}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .2rem rgba(56,193,114,.5)}.badge-info{color:#212529;background-color:#6cb2eb}a.badge-info:focus,a.badge-info:hover{color:#212529;background-color:#3f9ae5}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,178,235,.5)}.badge-warning{color:#212529;background-color:#ffed4a}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#ffe817}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .2rem rgba(255,237,74,.5)}.badge-danger{color:#fff;background-color:#e3342f}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#c51f1a}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .2rem rgba(227,52,47,.5)}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3.85rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#1b4b72;background-color:#d6e9f8;border-color:#c6e0f5}.alert-primary hr{border-top-color:#b0d4f1}.alert-primary .alert-link{color:#113049}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#1d643b;background-color:#d7f3e3;border-color:#c7eed8}.alert-success hr{border-top-color:#b3e8ca}.alert-success .alert-link{color:#123c24}.alert-info{color:#385d7a;background-color:#e2f0fb;border-color:#d6e9f9}.alert-info hr{border-top-color:#c0ddf6}.alert-info .alert-link{color:#284257}.alert-warning{color:#857b26;background-color:#fffbdb;border-color:#fffacc}.alert-warning hr{border-top-color:#fff8b3}.alert-warning .alert-link{color:#5d561b}.alert-danger{color:#761b18;background-color:#f9d6d5;border-color:#f7c6c5}.alert-danger hr{border-top-color:#f4b0af}.alert-danger .alert-link{color:#4c110f}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}.progress{height:1rem;line-height:0;font-size:.675rem;background-color:#e9ecef;border-radius:.25rem}.progress,.progress-bar{display:flex;overflow:hidden}.progress-bar{flex-direction:column;justify-content:center;color:#fff;text-align:center;white-space:nowrap;background-color:#3490dc;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:progress-bar-stripes 1s linear infinite;animation:progress-bar-stripes 1s linear infinite}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.media{display:flex;align-items:flex-start}.media-body{flex:1}.list-group{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#3490dc;border-color:#3490dc}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#1b4b72;background-color:#c6e0f5}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#1b4b72;background-color:#b0d4f1}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#1b4b72;border-color:#1b4b72}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#1d643b;background-color:#c7eed8}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#1d643b;background-color:#b3e8ca}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#1d643b;border-color:#1d643b}.list-group-item-info{color:#385d7a;background-color:#d6e9f9}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#385d7a;background-color:#c0ddf6}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#385d7a;border-color:#385d7a}.list-group-item-warning{color:#857b26;background-color:#fffacc}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#857b26;background-color:#fff8b3}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#857b26;border-color:#857b26}.list-group-item-danger{color:#761b18;background-color:#f7c6c5}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#761b18;background-color:#f4b0af}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#761b18;border-color:#761b18}.list-group-item-light{color:#818182;background-color:#fdfdfe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#818182;background-color:#ececf6}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1b1e21;background-color:#b9bbbe}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.35rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0}a.close.disabled{pointer-events:none}.toast{max-width:350px;overflow:hidden;font-size:.875rem;background-color:hsla(0,0%,100%,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .25rem .75rem rgba(0,0,0,.1);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);opacity:0;border-radius:.25rem}.toast:not(:last-child){margin-bottom:.75rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.toast-header{display:flex;align-items:center;padding:.25rem .75rem;color:#6c757d;background-color:hsla(0,0%,100%,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05)}.toast-body{padding:.75rem}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translateY(-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{display:flex;max-height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 1rem);overflow:hidden}.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header{flex-shrink:0}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-dialog-centered:before{display:block;height:calc(100vh - 1rem);height:-webkit-min-content;height:-moz-min-content;height:min-content;content:""}.modal-dialog-centered.modal-dialog-scrollable{flex-direction:column;justify-content:center;height:100%}.modal-dialog-centered.modal-dialog-scrollable .modal-content{max-height:none}.modal-dialog-centered.modal-dialog-scrollable:before{content:none}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;align-items:flex-start;justify-content:space-between;padding:1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.6}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{max-height:calc(100% - 3.5rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-dialog-centered:before{height:calc(100vh - 3.5rem);height:-webkit-min-content;height:-moz-min-content;height:min-content}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:Nunito,sans-serif;font-style:normal;font-weight:400;line-height:1.6;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.7875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow:before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow:before,.bs-tooltip-top .arrow:before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow:before,.bs-tooltip-right .arrow:before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow:before,.bs-tooltip-bottom .arrow:before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow:before,.bs-tooltip-left .arrow:before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{top:0;left:0;z-index:1060;max-width:276px;font-family:Nunito,sans-serif;font-style:normal;font-weight:400;line-height:1.6;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.7875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover,.popover .arrow{position:absolute;display:block}.popover .arrow{width:1rem;height:.5rem;margin:0 .3rem}.popover .arrow:after,.popover .arrow:before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top]>.arrow,.bs-popover-top>.arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=top]>.arrow:before,.bs-popover-top>.arrow:before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=top]>.arrow:after,.bs-popover-top>.arrow:after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right]>.arrow,.bs-popover-right>.arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=right]>.arrow:before,.bs-popover-right>.arrow:before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=right]>.arrow:after,.bs-popover-right>.arrow:after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom]>.arrow,.bs-popover-bottom>.arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=bottom]>.arrow:before,.bs-popover-bottom>.arrow:before{top:0;border-width:0 .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=bottom]>.arrow:after,.bs-popover-bottom>.arrow:after{top:1px;border-width:0 .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header:before,.bs-popover-bottom .popover-header:before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f7f7f7}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left]>.arrow,.bs-popover-left>.arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=left]>.arrow:before,.bs-popover-left>.arrow:before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=left]>.arrow:after,.bs-popover-left>.arrow:after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem .75rem;margin-bottom:0;font-size:.9rem;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.5rem .75rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner:after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left){transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right){transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;transform:none}.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:flex;align-items:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:no-repeat 50%/100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E")}.carousel-control-next-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:15;display:flex;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{box-sizing:content-box;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators li{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@-webkit-keyframes spinner-border{to{transform:rotate(1turn)}}@keyframes spinner-border{to{transform:rotate(1turn)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid;border-right:.25em solid transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:spinner-grow .75s linear infinite;animation:spinner-grow .75s linear infinite}.spinner-grow-sm{width:1rem;height:1rem}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#3490dc!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#2176bd!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#38c172!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#2d995b!important}.bg-info{background-color:#6cb2eb!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#3f9ae5!important}.bg-warning{background-color:#ffed4a!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#ffe817!important}.bg-danger{background-color:#e3342f!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#c51f1a!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#3490dc!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#38c172!important}.border-info{border-color:#6cb2eb!important}.border-warning{border-color:#ffed4a!important}.border-danger{border-color:#e3342f!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded-sm{border-radius:.2rem!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important}.rounded-right,.rounded-top{border-top-right-radius:.25rem!important}.rounded-bottom,.rounded-right{border-bottom-right-radius:.25rem!important}.rounded-bottom,.rounded-left{border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important}.rounded-lg{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-0{border-radius:0!important}.clearfix:after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:flex!important}.d-inline-flex{display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:flex!important}.d-sm-inline-flex{display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:flex!important}.d-md-inline-flex{display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:flex!important}.d-lg-inline-flex{display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:flex!important}.d-xl-inline-flex{display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:flex!important}.d-print-inline-flex{display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive:before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9:before{padding-top:42.8571428571%}.embed-responsive-16by9:before{padding-top:56.25%}.embed-responsive-4by3:before{padding-top:75%}.embed-responsive-1by1:before{padding-top:100%}.flex-row{flex-direction:row!important}.flex-column{flex-direction:column!important}.flex-row-reverse{flex-direction:row-reverse!important}.flex-column-reverse{flex-direction:column-reverse!important}.flex-wrap{flex-wrap:wrap!important}.flex-nowrap{flex-wrap:nowrap!important}.flex-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-fill{flex:1 1 auto!important}.flex-grow-0{flex-grow:0!important}.flex-grow-1{flex-grow:1!important}.flex-shrink-0{flex-shrink:0!important}.flex-shrink-1{flex-shrink:1!important}.justify-content-start{justify-content:flex-start!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.justify-content-between{justify-content:space-between!important}.justify-content-around{justify-content:space-around!important}.align-items-start{align-items:flex-start!important}.align-items-end{align-items:flex-end!important}.align-items-center{align-items:center!important}.align-items-baseline{align-items:baseline!important}.align-items-stretch{align-items:stretch!important}.align-content-start{align-content:flex-start!important}.align-content-end{align-content:flex-end!important}.align-content-center{align-content:center!important}.align-content-between{align-content:space-between!important}.align-content-around{align-content:space-around!important}.align-content-stretch{align-content:stretch!important}.align-self-auto{align-self:auto!important}.align-self-start{align-self:flex-start!important}.align-self-end{align-self:flex-end!important}.align-self-center{align-self:center!important}.align-self-baseline{align-self:baseline!important}.align-self-stretch{align-self:stretch!important}@media (min-width:576px){.flex-sm-row{flex-direction:row!important}.flex-sm-column{flex-direction:column!important}.flex-sm-row-reverse{flex-direction:row-reverse!important}.flex-sm-column-reverse{flex-direction:column-reverse!important}.flex-sm-wrap{flex-wrap:wrap!important}.flex-sm-nowrap{flex-wrap:nowrap!important}.flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-sm-fill{flex:1 1 auto!important}.flex-sm-grow-0{flex-grow:0!important}.flex-sm-grow-1{flex-grow:1!important}.flex-sm-shrink-0{flex-shrink:0!important}.flex-sm-shrink-1{flex-shrink:1!important}.justify-content-sm-start{justify-content:flex-start!important}.justify-content-sm-end{justify-content:flex-end!important}.justify-content-sm-center{justify-content:center!important}.justify-content-sm-between{justify-content:space-between!important}.justify-content-sm-around{justify-content:space-around!important}.align-items-sm-start{align-items:flex-start!important}.align-items-sm-end{align-items:flex-end!important}.align-items-sm-center{align-items:center!important}.align-items-sm-baseline{align-items:baseline!important}.align-items-sm-stretch{align-items:stretch!important}.align-content-sm-start{align-content:flex-start!important}.align-content-sm-end{align-content:flex-end!important}.align-content-sm-center{align-content:center!important}.align-content-sm-between{align-content:space-between!important}.align-content-sm-around{align-content:space-around!important}.align-content-sm-stretch{align-content:stretch!important}.align-self-sm-auto{align-self:auto!important}.align-self-sm-start{align-self:flex-start!important}.align-self-sm-end{align-self:flex-end!important}.align-self-sm-center{align-self:center!important}.align-self-sm-baseline{align-self:baseline!important}.align-self-sm-stretch{align-self:stretch!important}}@media (min-width:768px){.flex-md-row{flex-direction:row!important}.flex-md-column{flex-direction:column!important}.flex-md-row-reverse{flex-direction:row-reverse!important}.flex-md-column-reverse{flex-direction:column-reverse!important}.flex-md-wrap{flex-wrap:wrap!important}.flex-md-nowrap{flex-wrap:nowrap!important}.flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-md-fill{flex:1 1 auto!important}.flex-md-grow-0{flex-grow:0!important}.flex-md-grow-1{flex-grow:1!important}.flex-md-shrink-0{flex-shrink:0!important}.flex-md-shrink-1{flex-shrink:1!important}.justify-content-md-start{justify-content:flex-start!important}.justify-content-md-end{justify-content:flex-end!important}.justify-content-md-center{justify-content:center!important}.justify-content-md-between{justify-content:space-between!important}.justify-content-md-around{justify-content:space-around!important}.align-items-md-start{align-items:flex-start!important}.align-items-md-end{align-items:flex-end!important}.align-items-md-center{align-items:center!important}.align-items-md-baseline{align-items:baseline!important}.align-items-md-stretch{align-items:stretch!important}.align-content-md-start{align-content:flex-start!important}.align-content-md-end{align-content:flex-end!important}.align-content-md-center{align-content:center!important}.align-content-md-between{align-content:space-between!important}.align-content-md-around{align-content:space-around!important}.align-content-md-stretch{align-content:stretch!important}.align-self-md-auto{align-self:auto!important}.align-self-md-start{align-self:flex-start!important}.align-self-md-end{align-self:flex-end!important}.align-self-md-center{align-self:center!important}.align-self-md-baseline{align-self:baseline!important}.align-self-md-stretch{align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{flex-direction:row!important}.flex-lg-column{flex-direction:column!important}.flex-lg-row-reverse{flex-direction:row-reverse!important}.flex-lg-column-reverse{flex-direction:column-reverse!important}.flex-lg-wrap{flex-wrap:wrap!important}.flex-lg-nowrap{flex-wrap:nowrap!important}.flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-lg-fill{flex:1 1 auto!important}.flex-lg-grow-0{flex-grow:0!important}.flex-lg-grow-1{flex-grow:1!important}.flex-lg-shrink-0{flex-shrink:0!important}.flex-lg-shrink-1{flex-shrink:1!important}.justify-content-lg-start{justify-content:flex-start!important}.justify-content-lg-end{justify-content:flex-end!important}.justify-content-lg-center{justify-content:center!important}.justify-content-lg-between{justify-content:space-between!important}.justify-content-lg-around{justify-content:space-around!important}.align-items-lg-start{align-items:flex-start!important}.align-items-lg-end{align-items:flex-end!important}.align-items-lg-center{align-items:center!important}.align-items-lg-baseline{align-items:baseline!important}.align-items-lg-stretch{align-items:stretch!important}.align-content-lg-start{align-content:flex-start!important}.align-content-lg-end{align-content:flex-end!important}.align-content-lg-center{align-content:center!important}.align-content-lg-between{align-content:space-between!important}.align-content-lg-around{align-content:space-around!important}.align-content-lg-stretch{align-content:stretch!important}.align-self-lg-auto{align-self:auto!important}.align-self-lg-start{align-self:flex-start!important}.align-self-lg-end{align-self:flex-end!important}.align-self-lg-center{align-self:center!important}.align-self-lg-baseline{align-self:baseline!important}.align-self-lg-stretch{align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{flex-direction:row!important}.flex-xl-column{flex-direction:column!important}.flex-xl-row-reverse{flex-direction:row-reverse!important}.flex-xl-column-reverse{flex-direction:column-reverse!important}.flex-xl-wrap{flex-wrap:wrap!important}.flex-xl-nowrap{flex-wrap:nowrap!important}.flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.flex-xl-fill{flex:1 1 auto!important}.flex-xl-grow-0{flex-grow:0!important}.flex-xl-grow-1{flex-grow:1!important}.flex-xl-shrink-0{flex-shrink:0!important}.flex-xl-shrink-1{flex-shrink:1!important}.justify-content-xl-start{justify-content:flex-start!important}.justify-content-xl-end{justify-content:flex-end!important}.justify-content-xl-center{justify-content:center!important}.justify-content-xl-between{justify-content:space-between!important}.justify-content-xl-around{justify-content:space-around!important}.align-items-xl-start{align-items:flex-start!important}.align-items-xl-end{align-items:flex-end!important}.align-items-xl-center{align-items:center!important}.align-items-xl-baseline{align-items:baseline!important}.align-items-xl-stretch{align-items:stretch!important}.align-content-xl-start{align-content:flex-start!important}.align-content-xl-end{align-content:flex-end!important}.align-content-xl-center{align-content:center!important}.align-content-xl-between{align-content:space-between!important}.align-content-xl-around{align-content:space-around!important}.align-content-xl-stretch{align-content:stretch!important}.align-self-xl-auto{align-self:auto!important}.align-self-xl-start{align-self:flex-start!important}.align-self-xl-end{align-self:flex-end!important}.align-self-xl-center{align-self:center!important}.align-self-xl-baseline{align-self:baseline!important}.align-self-xl-stretch{align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;-ms-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;-ms-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{top:0}.fixed-bottom,.fixed-top{position:fixed;right:0;left:0;z-index:1030}.fixed-bottom{bottom:0}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.min-vw-100{min-width:100vw!important}.min-vh-100{min-height:100vh!important}.vw-100{width:100vw!important}.vh-100{height:100vh!important}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-n1{margin:-.25rem!important}.mt-n1,.my-n1{margin-top:-.25rem!important}.mr-n1,.mx-n1{margin-right:-.25rem!important}.mb-n1,.my-n1{margin-bottom:-.25rem!important}.ml-n1,.mx-n1{margin-left:-.25rem!important}.m-n2{margin:-.5rem!important}.mt-n2,.my-n2{margin-top:-.5rem!important}.mr-n2,.mx-n2{margin-right:-.5rem!important}.mb-n2,.my-n2{margin-bottom:-.5rem!important}.ml-n2,.mx-n2{margin-left:-.5rem!important}.m-n3{margin:-1rem!important}.mt-n3,.my-n3{margin-top:-1rem!important}.mr-n3,.mx-n3{margin-right:-1rem!important}.mb-n3,.my-n3{margin-bottom:-1rem!important}.ml-n3,.mx-n3{margin-left:-1rem!important}.m-n4{margin:-1.5rem!important}.mt-n4,.my-n4{margin-top:-1.5rem!important}.mr-n4,.mx-n4{margin-right:-1.5rem!important}.mb-n4,.my-n4{margin-bottom:-1.5rem!important}.ml-n4,.mx-n4{margin-left:-1.5rem!important}.m-n5{margin:-3rem!important}.mt-n5,.my-n5{margin-top:-3rem!important}.mr-n5,.mx-n5{margin-right:-3rem!important}.mb-n5,.my-n5{margin-bottom:-3rem!important}.ml-n5,.mx-n5{margin-left:-3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-n1{margin:-.25rem!important}.mt-sm-n1,.my-sm-n1{margin-top:-.25rem!important}.mr-sm-n1,.mx-sm-n1{margin-right:-.25rem!important}.mb-sm-n1,.my-sm-n1{margin-bottom:-.25rem!important}.ml-sm-n1,.mx-sm-n1{margin-left:-.25rem!important}.m-sm-n2{margin:-.5rem!important}.mt-sm-n2,.my-sm-n2{margin-top:-.5rem!important}.mr-sm-n2,.mx-sm-n2{margin-right:-.5rem!important}.mb-sm-n2,.my-sm-n2{margin-bottom:-.5rem!important}.ml-sm-n2,.mx-sm-n2{margin-left:-.5rem!important}.m-sm-n3{margin:-1rem!important}.mt-sm-n3,.my-sm-n3{margin-top:-1rem!important}.mr-sm-n3,.mx-sm-n3{margin-right:-1rem!important}.mb-sm-n3,.my-sm-n3{margin-bottom:-1rem!important}.ml-sm-n3,.mx-sm-n3{margin-left:-1rem!important}.m-sm-n4{margin:-1.5rem!important}.mt-sm-n4,.my-sm-n4{margin-top:-1.5rem!important}.mr-sm-n4,.mx-sm-n4{margin-right:-1.5rem!important}.mb-sm-n4,.my-sm-n4{margin-bottom:-1.5rem!important}.ml-sm-n4,.mx-sm-n4{margin-left:-1.5rem!important}.m-sm-n5{margin:-3rem!important}.mt-sm-n5,.my-sm-n5{margin-top:-3rem!important}.mr-sm-n5,.mx-sm-n5{margin-right:-3rem!important}.mb-sm-n5,.my-sm-n5{margin-bottom:-3rem!important}.ml-sm-n5,.mx-sm-n5{margin-left:-3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-n1{margin:-.25rem!important}.mt-md-n1,.my-md-n1{margin-top:-.25rem!important}.mr-md-n1,.mx-md-n1{margin-right:-.25rem!important}.mb-md-n1,.my-md-n1{margin-bottom:-.25rem!important}.ml-md-n1,.mx-md-n1{margin-left:-.25rem!important}.m-md-n2{margin:-.5rem!important}.mt-md-n2,.my-md-n2{margin-top:-.5rem!important}.mr-md-n2,.mx-md-n2{margin-right:-.5rem!important}.mb-md-n2,.my-md-n2{margin-bottom:-.5rem!important}.ml-md-n2,.mx-md-n2{margin-left:-.5rem!important}.m-md-n3{margin:-1rem!important}.mt-md-n3,.my-md-n3{margin-top:-1rem!important}.mr-md-n3,.mx-md-n3{margin-right:-1rem!important}.mb-md-n3,.my-md-n3{margin-bottom:-1rem!important}.ml-md-n3,.mx-md-n3{margin-left:-1rem!important}.m-md-n4{margin:-1.5rem!important}.mt-md-n4,.my-md-n4{margin-top:-1.5rem!important}.mr-md-n4,.mx-md-n4{margin-right:-1.5rem!important}.mb-md-n4,.my-md-n4{margin-bottom:-1.5rem!important}.ml-md-n4,.mx-md-n4{margin-left:-1.5rem!important}.m-md-n5{margin:-3rem!important}.mt-md-n5,.my-md-n5{margin-top:-3rem!important}.mr-md-n5,.mx-md-n5{margin-right:-3rem!important}.mb-md-n5,.my-md-n5{margin-bottom:-3rem!important}.ml-md-n5,.mx-md-n5{margin-left:-3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-n1{margin:-.25rem!important}.mt-lg-n1,.my-lg-n1{margin-top:-.25rem!important}.mr-lg-n1,.mx-lg-n1{margin-right:-.25rem!important}.mb-lg-n1,.my-lg-n1{margin-bottom:-.25rem!important}.ml-lg-n1,.mx-lg-n1{margin-left:-.25rem!important}.m-lg-n2{margin:-.5rem!important}.mt-lg-n2,.my-lg-n2{margin-top:-.5rem!important}.mr-lg-n2,.mx-lg-n2{margin-right:-.5rem!important}.mb-lg-n2,.my-lg-n2{margin-bottom:-.5rem!important}.ml-lg-n2,.mx-lg-n2{margin-left:-.5rem!important}.m-lg-n3{margin:-1rem!important}.mt-lg-n3,.my-lg-n3{margin-top:-1rem!important}.mr-lg-n3,.mx-lg-n3{margin-right:-1rem!important}.mb-lg-n3,.my-lg-n3{margin-bottom:-1rem!important}.ml-lg-n3,.mx-lg-n3{margin-left:-1rem!important}.m-lg-n4{margin:-1.5rem!important}.mt-lg-n4,.my-lg-n4{margin-top:-1.5rem!important}.mr-lg-n4,.mx-lg-n4{margin-right:-1.5rem!important}.mb-lg-n4,.my-lg-n4{margin-bottom:-1.5rem!important}.ml-lg-n4,.mx-lg-n4{margin-left:-1.5rem!important}.m-lg-n5{margin:-3rem!important}.mt-lg-n5,.my-lg-n5{margin-top:-3rem!important}.mr-lg-n5,.mx-lg-n5{margin-right:-3rem!important}.mb-lg-n5,.my-lg-n5{margin-bottom:-3rem!important}.ml-lg-n5,.mx-lg-n5{margin-left:-3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-n1{margin:-.25rem!important}.mt-xl-n1,.my-xl-n1{margin-top:-.25rem!important}.mr-xl-n1,.mx-xl-n1{margin-right:-.25rem!important}.mb-xl-n1,.my-xl-n1{margin-bottom:-.25rem!important}.ml-xl-n1,.mx-xl-n1{margin-left:-.25rem!important}.m-xl-n2{margin:-.5rem!important}.mt-xl-n2,.my-xl-n2{margin-top:-.5rem!important}.mr-xl-n2,.mx-xl-n2{margin-right:-.5rem!important}.mb-xl-n2,.my-xl-n2{margin-bottom:-.5rem!important}.ml-xl-n2,.mx-xl-n2{margin-left:-.5rem!important}.m-xl-n3{margin:-1rem!important}.mt-xl-n3,.my-xl-n3{margin-top:-1rem!important}.mr-xl-n3,.mx-xl-n3{margin-right:-1rem!important}.mb-xl-n3,.my-xl-n3{margin-bottom:-1rem!important}.ml-xl-n3,.mx-xl-n3{margin-left:-1rem!important}.m-xl-n4{margin:-1.5rem!important}.mt-xl-n4,.my-xl-n4{margin-top:-1.5rem!important}.mr-xl-n4,.mx-xl-n4{margin-right:-1.5rem!important}.mb-xl-n4,.my-xl-n4{margin-bottom:-1.5rem!important}.ml-xl-n4,.mx-xl-n4{margin-left:-1.5rem!important}.m-xl-n5{margin:-3rem!important}.mt-xl-n5,.my-xl-n5{margin-top:-3rem!important}.mr-xl-n5,.mx-xl-n5{margin-right:-3rem!important}.mb-xl-n5,.my-xl-n5{margin-bottom:-3rem!important}.ml-xl-n5,.mx-xl-n5{margin-left:-3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.stretched-link:after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;content:"";background-color:transparent}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace!important}.text-justify{text-align:justify!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-lighter{font-weight:lighter!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-bolder{font-weight:bolder!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#3490dc!important}a.text-primary:focus,a.text-primary:hover{color:#1d68a7!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#494f54!important}.text-success{color:#38c172!important}a.text-success:focus,a.text-success:hover{color:#27864f!important}.text-info{color:#6cb2eb!important}a.text-info:focus,a.text-info:hover{color:#298fe2!important}.text-warning{color:#ffed4a!important}a.text-warning:focus,a.text-warning:hover{color:#fde300!important}.text-danger{color:#e3342f!important}a.text-danger:focus,a.text-danger:hover{color:#ae1c17!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#cbd3da!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#121416!important}.text-body{color:#212529!important}.text-muted{color:#6c757d!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:hsla(0,0%,100%,.5)!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.text-decoration-none{text-decoration:none!important}.text-break{word-wrap:break-word!important}.text-reset{color:inherit!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,:after,:before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]:after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}.container,body{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}
```

## File: public/index.php
```php
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
```

## File: public/js/app.js
```javascript
/*! For license information please see app.js.LICENSE.txt */
!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=13)}([function(e,t,n){"use strict";var r=n(4),i=Object.prototype.toString;function o(e){return"[object Array]"===i.call(e)}function a(e){return void 0===e}function s(e){return null!==e&&"object"==typeof e}function u(e){return"[object Function]"===i.call(e)}function c(e,t){if(null!=e)if("object"!=typeof e&&(e=[e]),o(e))for(var n=0,r=e.length;n<r;n++)t.call(null,e[n],n,e);else for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&t.call(null,e[i],i,e)}e.exports={isArray:o,isArrayBuffer:function(e){return"[object ArrayBuffer]"===i.call(e)},isBuffer:function(e){return null!==e&&!a(e)&&null!==e.constructor&&!a(e.constructor)&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)},isFormData:function(e){return"undefined"!=typeof FormData&&e instanceof FormData},isArrayBufferView:function(e){return"undefined"!=typeof ArrayBuffer&&ArrayBuffer.isView?ArrayBuffer.isView(e):e&&e.buffer&&e.buffer instanceof ArrayBuffer},isString:function(e){return"string"==typeof e},isNumber:function(e){return"number"==typeof e},isObject:s,isUndefined:a,isDate:function(e){return"[object Date]"===i.call(e)},isFile:function(e){return"[object File]"===i.call(e)},isBlob:function(e){return"[object Blob]"===i.call(e)},isFunction:u,isStream:function(e){return s(e)&&u(e.pipe)},isURLSearchParams:function(e){return"undefined"!=typeof URLSearchParams&&e instanceof URLSearchParams},isStandardBrowserEnv:function(){return("undefined"==typeof navigator||"ReactNative"!==navigator.product&&"NativeScript"!==navigator.product&&"NS"!==navigator.product)&&("undefined"!=typeof window&&"undefined"!=typeof document)},forEach:c,merge:function e(){var t={};function n(n,r){"object"==typeof t[r]&&"object"==typeof n?t[r]=e(t[r],n):t[r]=n}for(var r=0,i=arguments.length;r<i;r++)c(arguments[r],n);return t},deepMerge:function e(){var t={};function n(n,r){"object"==typeof t[r]&&"object"==typeof n?t[r]=e(t[r],n):t[r]="object"==typeof n?e({},n):n}for(var r=0,i=arguments.length;r<i;r++)c(arguments[r],n);return t},extend:function(e,t,n){return c(t,(function(t,i){e[i]=n&&"function"==typeof t?r(t,n):t})),e},trim:function(e){return e.replace(/^\s*/,"").replace(/\s*$/,"")}}},function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},function(e,t,n){"use strict";n.r(t),function(e){var n="undefined"!=typeof window&&"undefined"!=typeof document&&"undefined"!=typeof navigator,r=function(){for(var e=["Edge","Trident","Firefox"],t=0;t<e.length;t+=1)if(n&&navigator.userAgent.indexOf(e[t])>=0)return 1;return 0}();var i=n&&window.Promise?function(e){var t=!1;return function(){t||(t=!0,window.Promise.resolve().then((function(){t=!1,e()})))}}:function(e){var t=!1;return function(){t||(t=!0,setTimeout((function(){t=!1,e()}),r))}};function o(e){return e&&"[object Function]"==={}.toString.call(e)}function a(e,t){if(1!==e.nodeType)return[];var n=e.ownerDocument.defaultView.getComputedStyle(e,null);return t?n[t]:n}function s(e){return"HTML"===e.nodeName?e:e.parentNode||e.host}function u(e){if(!e)return document.body;switch(e.nodeName){case"HTML":case"BODY":return e.ownerDocument.body;case"#document":return e.body}var t=a(e),n=t.overflow,r=t.overflowX,i=t.overflowY;return/(auto|scroll|overlay)/.test(n+i+r)?e:u(s(e))}function c(e){return e&&e.referenceNode?e.referenceNode:e}var l=n&&!(!window.MSInputMethodContext||!document.documentMode),f=n&&/MSIE 10/.test(navigator.userAgent);function d(e){return 11===e?l:10===e?f:l||f}function p(e){if(!e)return document.documentElement;for(var t=d(10)?document.body:null,n=e.offsetParent||null;n===t&&e.nextElementSibling;)n=(e=e.nextElementSibling).offsetParent;var r=n&&n.nodeName;return r&&"BODY"!==r&&"HTML"!==r?-1!==["TH","TD","TABLE"].indexOf(n.nodeName)&&"static"===a(n,"position")?p(n):n:e?e.ownerDocument.documentElement:document.documentElement}function h(e){return null!==e.parentNode?h(e.parentNode):e}function v(e,t){if(!(e&&e.nodeType&&t&&t.nodeType))return document.documentElement;var n=e.compareDocumentPosition(t)&Node.DOCUMENT_POSITION_FOLLOWING,r=n?e:t,i=n?t:e,o=document.createRange();o.setStart(r,0),o.setEnd(i,0);var a,s,u=o.commonAncestorContainer;if(e!==u&&t!==u||r.contains(i))return"BODY"===(s=(a=u).nodeName)||"HTML"!==s&&p(a.firstElementChild)!==a?p(u):u;var c=h(e);return c.host?v(c.host,t):v(e,h(t).host)}function g(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"top",n="top"===t?"scrollTop":"scrollLeft",r=e.nodeName;if("BODY"===r||"HTML"===r){var i=e.ownerDocument.documentElement,o=e.ownerDocument.scrollingElement||i;return o[n]}return e[n]}function m(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=g(t,"top"),i=g(t,"left"),o=n?-1:1;return e.top+=r*o,e.bottom+=r*o,e.left+=i*o,e.right+=i*o,e}function y(e,t){var n="x"===t?"Left":"Top",r="Left"===n?"Right":"Bottom";return parseFloat(e["border"+n+"Width"])+parseFloat(e["border"+r+"Width"])}function _(e,t,n,r){return Math.max(t["offset"+e],t["scroll"+e],n["client"+e],n["offset"+e],n["scroll"+e],d(10)?parseInt(n["offset"+e])+parseInt(r["margin"+("Height"===e?"Top":"Left")])+parseInt(r["margin"+("Height"===e?"Bottom":"Right")]):0)}function b(e){var t=e.body,n=e.documentElement,r=d(10)&&getComputedStyle(n);return{height:_("Height",t,n,r),width:_("Width",t,n,r)}}var w=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},x=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),C=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e},E=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e};function T(e){return E({},e,{right:e.left+e.width,bottom:e.top+e.height})}function S(e){var t={};try{if(d(10)){t=e.getBoundingClientRect();var n=g(e,"top"),r=g(e,"left");t.top+=n,t.left+=r,t.bottom+=n,t.right+=r}else t=e.getBoundingClientRect()}catch(e){}var i={left:t.left,top:t.top,width:t.right-t.left,height:t.bottom-t.top},o="HTML"===e.nodeName?b(e.ownerDocument):{},s=o.width||e.clientWidth||i.width,u=o.height||e.clientHeight||i.height,c=e.offsetWidth-s,l=e.offsetHeight-u;if(c||l){var f=a(e);c-=y(f,"x"),l-=y(f,"y"),i.width-=c,i.height-=l}return T(i)}function A(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=d(10),i="HTML"===t.nodeName,o=S(e),s=S(t),c=u(e),l=a(t),f=parseFloat(l.borderTopWidth),p=parseFloat(l.borderLeftWidth);n&&i&&(s.top=Math.max(s.top,0),s.left=Math.max(s.left,0));var h=T({top:o.top-s.top-f,left:o.left-s.left-p,width:o.width,height:o.height});if(h.marginTop=0,h.marginLeft=0,!r&&i){var v=parseFloat(l.marginTop),g=parseFloat(l.marginLeft);h.top-=f-v,h.bottom-=f-v,h.left-=p-g,h.right-=p-g,h.marginTop=v,h.marginLeft=g}return(r&&!n?t.contains(c):t===c&&"BODY"!==c.nodeName)&&(h=m(h,t)),h}function k(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=e.ownerDocument.documentElement,r=A(e,n),i=Math.max(n.clientWidth,window.innerWidth||0),o=Math.max(n.clientHeight,window.innerHeight||0),a=t?0:g(n),s=t?0:g(n,"left"),u={top:a-r.top+r.marginTop,left:s-r.left+r.marginLeft,width:i,height:o};return T(u)}function O(e){var t=e.nodeName;if("BODY"===t||"HTML"===t)return!1;if("fixed"===a(e,"position"))return!0;var n=s(e);return!!n&&O(n)}function j(e){if(!e||!e.parentElement||d())return document.documentElement;for(var t=e.parentElement;t&&"none"===a(t,"transform");)t=t.parentElement;return t||document.documentElement}function N(e,t,n,r){var i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],o={top:0,left:0},a=i?j(e):v(e,c(t));if("viewport"===r)o=k(a,i);else{var l=void 0;"scrollParent"===r?"BODY"===(l=u(s(t))).nodeName&&(l=e.ownerDocument.documentElement):l="window"===r?e.ownerDocument.documentElement:r;var f=A(l,a,i);if("HTML"!==l.nodeName||O(a))o=f;else{var d=b(e.ownerDocument),p=d.height,h=d.width;o.top+=f.top-f.marginTop,o.bottom=p+f.top,o.left+=f.left-f.marginLeft,o.right=h+f.left}}var g="number"==typeof(n=n||0);return o.left+=g?n:n.left||0,o.top+=g?n:n.top||0,o.right-=g?n:n.right||0,o.bottom-=g?n:n.bottom||0,o}function D(e){return e.width*e.height}function $(e,t,n,r,i){var o=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0;if(-1===e.indexOf("auto"))return e;var a=N(n,r,o,i),s={top:{width:a.width,height:t.top-a.top},right:{width:a.right-t.right,height:a.height},bottom:{width:a.width,height:a.bottom-t.bottom},left:{width:t.left-a.left,height:a.height}},u=Object.keys(s).map((function(e){return E({key:e},s[e],{area:D(s[e])})})).sort((function(e,t){return t.area-e.area})),c=u.filter((function(e){var t=e.width,r=e.height;return t>=n.clientWidth&&r>=n.clientHeight})),l=c.length>0?c[0].key:u[0].key,f=e.split("-")[1];return l+(f?"-"+f:"")}function L(e,t,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,i=r?j(t):v(t,c(n));return A(n,i,r)}function I(e){var t=e.ownerDocument.defaultView.getComputedStyle(e),n=parseFloat(t.marginTop||0)+parseFloat(t.marginBottom||0),r=parseFloat(t.marginLeft||0)+parseFloat(t.marginRight||0);return{width:e.offsetWidth+r,height:e.offsetHeight+n}}function R(e){var t={left:"right",right:"left",bottom:"top",top:"bottom"};return e.replace(/left|right|bottom|top/g,(function(e){return t[e]}))}function P(e,t,n){n=n.split("-")[0];var r=I(e),i={width:r.width,height:r.height},o=-1!==["right","left"].indexOf(n),a=o?"top":"left",s=o?"left":"top",u=o?"height":"width",c=o?"width":"height";return i[a]=t[a]+t[u]/2-r[u]/2,i[s]=n===s?t[s]-r[c]:t[R(s)],i}function M(e,t){return Array.prototype.find?e.find(t):e.filter(t)[0]}function F(e,t,n){return(void 0===n?e:e.slice(0,function(e,t,n){if(Array.prototype.findIndex)return e.findIndex((function(e){return e[t]===n}));var r=M(e,(function(e){return e[t]===n}));return e.indexOf(r)}(e,"name",n))).forEach((function(e){e.function&&console.warn("`modifier.function` is deprecated, use `modifier.fn`!");var n=e.function||e.fn;e.enabled&&o(n)&&(t.offsets.popper=T(t.offsets.popper),t.offsets.reference=T(t.offsets.reference),t=n(t,e))})),t}function q(){if(!this.state.isDestroyed){var e={instance:this,styles:{},arrowStyles:{},attributes:{},flipped:!1,offsets:{}};e.offsets.reference=L(this.state,this.popper,this.reference,this.options.positionFixed),e.placement=$(this.options.placement,e.offsets.reference,this.popper,this.reference,this.options.modifiers.flip.boundariesElement,this.options.modifiers.flip.padding),e.originalPlacement=e.placement,e.positionFixed=this.options.positionFixed,e.offsets.popper=P(this.popper,e.offsets.reference,e.placement),e.offsets.popper.position=this.options.positionFixed?"fixed":"absolute",e=F(this.modifiers,e),this.state.isCreated?this.options.onUpdate(e):(this.state.isCreated=!0,this.options.onCreate(e))}}function H(e,t){return e.some((function(e){var n=e.name;return e.enabled&&n===t}))}function B(e){for(var t=[!1,"ms","Webkit","Moz","O"],n=e.charAt(0).toUpperCase()+e.slice(1),r=0;r<t.length;r++){var i=t[r],o=i?""+i+n:e;if(void 0!==document.body.style[o])return o}return null}function U(){return this.state.isDestroyed=!0,H(this.modifiers,"applyStyle")&&(this.popper.removeAttribute("x-placement"),this.popper.style.position="",this.popper.style.top="",this.popper.style.left="",this.popper.style.right="",this.popper.style.bottom="",this.popper.style.willChange="",this.popper.style[B("transform")]=""),this.disableEventListeners(),this.options.removeOnDestroy&&this.popper.parentNode.removeChild(this.popper),this}function W(e){var t=e.ownerDocument;return t?t.defaultView:window}function z(e,t,n,r){n.updateBound=r,W(e).addEventListener("resize",n.updateBound,{passive:!0});var i=u(e);return function e(t,n,r,i){var o="BODY"===t.nodeName,a=o?t.ownerDocument.defaultView:t;a.addEventListener(n,r,{passive:!0}),o||e(u(a.parentNode),n,r,i),i.push(a)}(i,"scroll",n.updateBound,n.scrollParents),n.scrollElement=i,n.eventsEnabled=!0,n}function V(){this.state.eventsEnabled||(this.state=z(this.reference,this.options,this.state,this.scheduleUpdate))}function Q(){var e,t;this.state.eventsEnabled&&(cancelAnimationFrame(this.scheduleUpdate),this.state=(e=this.reference,t=this.state,W(e).removeEventListener("resize",t.updateBound),t.scrollParents.forEach((function(e){e.removeEventListener("scroll",t.updateBound)})),t.updateBound=null,t.scrollParents=[],t.scrollElement=null,t.eventsEnabled=!1,t))}function X(e){return""!==e&&!isNaN(parseFloat(e))&&isFinite(e)}function K(e,t){Object.keys(t).forEach((function(n){var r="";-1!==["width","height","top","right","bottom","left"].indexOf(n)&&X(t[n])&&(r="px"),e.style[n]=t[n]+r}))}var Y=n&&/Firefox/i.test(navigator.userAgent);function J(e,t,n){var r=M(e,(function(e){return e.name===t})),i=!!r&&e.some((function(e){return e.name===n&&e.enabled&&e.order<r.order}));if(!i){var o="`"+t+"`",a="`"+n+"`";console.warn(a+" modifier is required by "+o+" modifier in order to work, be sure to include it before "+o+"!")}return i}var G=["auto-start","auto","auto-end","top-start","top","top-end","right-start","right","right-end","bottom-end","bottom","bottom-start","left-end","left","left-start"],Z=G.slice(3);function ee(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=Z.indexOf(e),r=Z.slice(n+1).concat(Z.slice(0,n));return t?r.reverse():r}var te="flip",ne="clockwise",re="counterclockwise";function ie(e,t,n,r){var i=[0,0],o=-1!==["right","left"].indexOf(r),a=e.split(/(\+|\-)/).map((function(e){return e.trim()})),s=a.indexOf(M(a,(function(e){return-1!==e.search(/,|\s/)})));a[s]&&-1===a[s].indexOf(",")&&console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");var u=/\s*,\s*|\s+/,c=-1!==s?[a.slice(0,s).concat([a[s].split(u)[0]]),[a[s].split(u)[1]].concat(a.slice(s+1))]:[a];return(c=c.map((function(e,r){var i=(1===r?!o:o)?"height":"width",a=!1;return e.reduce((function(e,t){return""===e[e.length-1]&&-1!==["+","-"].indexOf(t)?(e[e.length-1]=t,a=!0,e):a?(e[e.length-1]+=t,a=!1,e):e.concat(t)}),[]).map((function(e){return function(e,t,n,r){var i=e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),o=+i[1],a=i[2];if(!o)return e;if(0===a.indexOf("%")){var s=void 0;switch(a){case"%p":s=n;break;case"%":case"%r":default:s=r}return T(s)[t]/100*o}if("vh"===a||"vw"===a){return("vh"===a?Math.max(document.documentElement.clientHeight,window.innerHeight||0):Math.max(document.documentElement.clientWidth,window.innerWidth||0))/100*o}return o}(e,i,t,n)}))}))).forEach((function(e,t){e.forEach((function(n,r){X(n)&&(i[t]+=n*("-"===e[r-1]?-1:1))}))})),i}var oe={placement:"bottom",positionFixed:!1,eventsEnabled:!0,removeOnDestroy:!1,onCreate:function(){},onUpdate:function(){},modifiers:{shift:{order:100,enabled:!0,fn:function(e){var t=e.placement,n=t.split("-")[0],r=t.split("-")[1];if(r){var i=e.offsets,o=i.reference,a=i.popper,s=-1!==["bottom","top"].indexOf(n),u=s?"left":"top",c=s?"width":"height",l={start:C({},u,o[u]),end:C({},u,o[u]+o[c]-a[c])};e.offsets.popper=E({},a,l[r])}return e}},offset:{order:200,enabled:!0,fn:function(e,t){var n=t.offset,r=e.placement,i=e.offsets,o=i.popper,a=i.reference,s=r.split("-")[0],u=void 0;return u=X(+n)?[+n,0]:ie(n,o,a,s),"left"===s?(o.top+=u[0],o.left-=u[1]):"right"===s?(o.top+=u[0],o.left+=u[1]):"top"===s?(o.left+=u[0],o.top-=u[1]):"bottom"===s&&(o.left+=u[0],o.top+=u[1]),e.popper=o,e},offset:0},preventOverflow:{order:300,enabled:!0,fn:function(e,t){var n=t.boundariesElement||p(e.instance.popper);e.instance.reference===n&&(n=p(n));var r=B("transform"),i=e.instance.popper.style,o=i.top,a=i.left,s=i[r];i.top="",i.left="",i[r]="";var u=N(e.instance.popper,e.instance.reference,t.padding,n,e.positionFixed);i.top=o,i.left=a,i[r]=s,t.boundaries=u;var c=t.priority,l=e.offsets.popper,f={primary:function(e){var n=l[e];return l[e]<u[e]&&!t.escapeWithReference&&(n=Math.max(l[e],u[e])),C({},e,n)},secondary:function(e){var n="right"===e?"left":"top",r=l[n];return l[e]>u[e]&&!t.escapeWithReference&&(r=Math.min(l[n],u[e]-("right"===e?l.width:l.height))),C({},n,r)}};return c.forEach((function(e){var t=-1!==["left","top"].indexOf(e)?"primary":"secondary";l=E({},l,f[t](e))})),e.offsets.popper=l,e},priority:["left","right","top","bottom"],padding:5,boundariesElement:"scrollParent"},keepTogether:{order:400,enabled:!0,fn:function(e){var t=e.offsets,n=t.popper,r=t.reference,i=e.placement.split("-")[0],o=Math.floor,a=-1!==["top","bottom"].indexOf(i),s=a?"right":"bottom",u=a?"left":"top",c=a?"width":"height";return n[s]<o(r[u])&&(e.offsets.popper[u]=o(r[u])-n[c]),n[u]>o(r[s])&&(e.offsets.popper[u]=o(r[s])),e}},arrow:{order:500,enabled:!0,fn:function(e,t){var n;if(!J(e.instance.modifiers,"arrow","keepTogether"))return e;var r=t.element;if("string"==typeof r){if(!(r=e.instance.popper.querySelector(r)))return e}else if(!e.instance.popper.contains(r))return console.warn("WARNING: `arrow.element` must be child of its popper element!"),e;var i=e.placement.split("-")[0],o=e.offsets,s=o.popper,u=o.reference,c=-1!==["left","right"].indexOf(i),l=c?"height":"width",f=c?"Top":"Left",d=f.toLowerCase(),p=c?"left":"top",h=c?"bottom":"right",v=I(r)[l];u[h]-v<s[d]&&(e.offsets.popper[d]-=s[d]-(u[h]-v)),u[d]+v>s[h]&&(e.offsets.popper[d]+=u[d]+v-s[h]),e.offsets.popper=T(e.offsets.popper);var g=u[d]+u[l]/2-v/2,m=a(e.instance.popper),y=parseFloat(m["margin"+f]),_=parseFloat(m["border"+f+"Width"]),b=g-e.offsets.popper[d]-y-_;return b=Math.max(Math.min(s[l]-v,b),0),e.arrowElement=r,e.offsets.arrow=(C(n={},d,Math.round(b)),C(n,p,""),n),e},element:"[x-arrow]"},flip:{order:600,enabled:!0,fn:function(e,t){if(H(e.instance.modifiers,"inner"))return e;if(e.flipped&&e.placement===e.originalPlacement)return e;var n=N(e.instance.popper,e.instance.reference,t.padding,t.boundariesElement,e.positionFixed),r=e.placement.split("-")[0],i=R(r),o=e.placement.split("-")[1]||"",a=[];switch(t.behavior){case te:a=[r,i];break;case ne:a=ee(r);break;case re:a=ee(r,!0);break;default:a=t.behavior}return a.forEach((function(s,u){if(r!==s||a.length===u+1)return e;r=e.placement.split("-")[0],i=R(r);var c=e.offsets.popper,l=e.offsets.reference,f=Math.floor,d="left"===r&&f(c.right)>f(l.left)||"right"===r&&f(c.left)<f(l.right)||"top"===r&&f(c.bottom)>f(l.top)||"bottom"===r&&f(c.top)<f(l.bottom),p=f(c.left)<f(n.left),h=f(c.right)>f(n.right),v=f(c.top)<f(n.top),g=f(c.bottom)>f(n.bottom),m="left"===r&&p||"right"===r&&h||"top"===r&&v||"bottom"===r&&g,y=-1!==["top","bottom"].indexOf(r),_=!!t.flipVariations&&(y&&"start"===o&&p||y&&"end"===o&&h||!y&&"start"===o&&v||!y&&"end"===o&&g),b=!!t.flipVariationsByContent&&(y&&"start"===o&&h||y&&"end"===o&&p||!y&&"start"===o&&g||!y&&"end"===o&&v),w=_||b;(d||m||w)&&(e.flipped=!0,(d||m)&&(r=a[u+1]),w&&(o=function(e){return"end"===e?"start":"start"===e?"end":e}(o)),e.placement=r+(o?"-"+o:""),e.offsets.popper=E({},e.offsets.popper,P(e.instance.popper,e.offsets.reference,e.placement)),e=F(e.instance.modifiers,e,"flip"))})),e},behavior:"flip",padding:5,boundariesElement:"viewport",flipVariations:!1,flipVariationsByContent:!1},inner:{order:700,enabled:!1,fn:function(e){var t=e.placement,n=t.split("-")[0],r=e.offsets,i=r.popper,o=r.reference,a=-1!==["left","right"].indexOf(n),s=-1===["top","left"].indexOf(n);return i[a?"left":"top"]=o[n]-(s?i[a?"width":"height"]:0),e.placement=R(t),e.offsets.popper=T(i),e}},hide:{order:800,enabled:!0,fn:function(e){if(!J(e.instance.modifiers,"hide","preventOverflow"))return e;var t=e.offsets.reference,n=M(e.instance.modifiers,(function(e){return"preventOverflow"===e.name})).boundaries;if(t.bottom<n.top||t.left>n.right||t.top>n.bottom||t.right<n.left){if(!0===e.hide)return e;e.hide=!0,e.attributes["x-out-of-boundaries"]=""}else{if(!1===e.hide)return e;e.hide=!1,e.attributes["x-out-of-boundaries"]=!1}return e}},computeStyle:{order:850,enabled:!0,fn:function(e,t){var n=t.x,r=t.y,i=e.offsets.popper,o=M(e.instance.modifiers,(function(e){return"applyStyle"===e.name})).gpuAcceleration;void 0!==o&&console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");var a=void 0!==o?o:t.gpuAcceleration,s=p(e.instance.popper),u=S(s),c={position:i.position},l=function(e,t){var n=e.offsets,r=n.popper,i=n.reference,o=Math.round,a=Math.floor,s=function(e){return e},u=o(i.width),c=o(r.width),l=-1!==["left","right"].indexOf(e.placement),f=-1!==e.placement.indexOf("-"),d=t?l||f||u%2==c%2?o:a:s,p=t?o:s;return{left:d(u%2==1&&c%2==1&&!f&&t?r.left-1:r.left),top:p(r.top),bottom:p(r.bottom),right:d(r.right)}}(e,window.devicePixelRatio<2||!Y),f="bottom"===n?"top":"bottom",d="right"===r?"left":"right",h=B("transform"),v=void 0,g=void 0;if(g="bottom"===f?"HTML"===s.nodeName?-s.clientHeight+l.bottom:-u.height+l.bottom:l.top,v="right"===d?"HTML"===s.nodeName?-s.clientWidth+l.right:-u.width+l.right:l.left,a&&h)c[h]="translate3d("+v+"px, "+g+"px, 0)",c[f]=0,c[d]=0,c.willChange="transform";else{var m="bottom"===f?-1:1,y="right"===d?-1:1;c[f]=g*m,c[d]=v*y,c.willChange=f+", "+d}var _={"x-placement":e.placement};return e.attributes=E({},_,e.attributes),e.styles=E({},c,e.styles),e.arrowStyles=E({},e.offsets.arrow,e.arrowStyles),e},gpuAcceleration:!0,x:"bottom",y:"right"},applyStyle:{order:900,enabled:!0,fn:function(e){var t,n;return K(e.instance.popper,e.styles),t=e.instance.popper,n=e.attributes,Object.keys(n).forEach((function(e){!1!==n[e]?t.setAttribute(e,n[e]):t.removeAttribute(e)})),e.arrowElement&&Object.keys(e.arrowStyles).length&&K(e.arrowElement,e.arrowStyles),e},onLoad:function(e,t,n,r,i){var o=L(i,t,e,n.positionFixed),a=$(n.placement,o,t,e,n.modifiers.flip.boundariesElement,n.modifiers.flip.padding);return t.setAttribute("x-placement",a),K(t,{position:n.positionFixed?"fixed":"absolute"}),n},gpuAcceleration:void 0}}},ae=function(){function e(t,n){var r=this,a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};w(this,e),this.scheduleUpdate=function(){return requestAnimationFrame(r.update)},this.update=i(this.update.bind(this)),this.options=E({},e.Defaults,a),this.state={isDestroyed:!1,isCreated:!1,scrollParents:[]},this.reference=t&&t.jquery?t[0]:t,this.popper=n&&n.jquery?n[0]:n,this.options.modifiers={},Object.keys(E({},e.Defaults.modifiers,a.modifiers)).forEach((function(t){r.options.modifiers[t]=E({},e.Defaults.modifiers[t]||{},a.modifiers?a.modifiers[t]:{})})),this.modifiers=Object.keys(this.options.modifiers).map((function(e){return E({name:e},r.options.modifiers[e])})).sort((function(e,t){return e.order-t.order})),this.modifiers.forEach((function(e){e.enabled&&o(e.onLoad)&&e.onLoad(r.reference,r.popper,r.options,e,r.state)})),this.update();var s=this.options.eventsEnabled;s&&this.enableEventListeners(),this.state.eventsEnabled=s}return x(e,[{key:"update",value:function(){return q.call(this)}},{key:"destroy",value:function(){return U.call(this)}},{key:"enableEventListeners",value:function(){return V.call(this)}},{key:"disableEventListeners",value:function(){return Q.call(this)}}]),e}();ae.Utils=("undefined"!=typeof window?window:e).PopperUtils,ae.placements=G,ae.Defaults=oe,t.default=ae}.call(this,n(1))},function(e,t,n){var r;!function(t,n){"use strict";"object"==typeof e.exports?e.exports=t.document?n(t,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return n(e)}:n(t)}("undefined"!=typeof window?window:this,(function(n,i){"use strict";var o=[],a=Object.getPrototypeOf,s=o.slice,u=o.flat?function(e){return o.flat.call(e)}:function(e){return o.concat.apply([],e)},c=o.push,l=o.indexOf,f={},d=f.toString,p=f.hasOwnProperty,h=p.toString,v=h.call(Object),g={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},y=function(e){return null!=e&&e===e.window},_=n.document,b={type:!0,src:!0,nonce:!0,noModule:!0};function w(e,t,n){var r,i,o=(n=n||_).createElement("script");if(o.text=e,t)for(r in b)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function x(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?f[d.call(e)]||"object":typeof e}var C=function(e,t){return new C.fn.init(e,t)};function E(e){var t=!!e&&"length"in e&&e.length,n=x(e);return!m(e)&&!y(e)&&("array"===n||0===t||"number"==typeof t&&t>0&&t-1 in e)}C.fn=C.prototype={jquery:"3.5.1",constructor:C,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=C.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return C.each(this,e)},map:function(e){return this.pushStack(C.map(this,(function(t,n){return e.call(t,n,t)})))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(C.grep(this,(function(e,t){return(t+1)%2})))},odd:function(){return this.pushStack(C.grep(this,(function(e,t){return t%2})))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(n>=0&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:c,sort:o.sort,splice:o.splice},C.extend=C.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,c=!1;for("boolean"==typeof a&&(c=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(c&&r&&(C.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||C.isPlainObject(n)?n:{},i=!1,a[t]=C.extend(c,o,r)):void 0!==r&&(a[t]=r));return a},C.extend({expando:"jQuery"+("3.5.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==d.call(e))&&(!(t=a(e))||"function"==typeof(n=p.call(t,"constructor")&&t.constructor)&&h.call(n)===v)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){w(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(E(e))for(n=e.length;r<n&&!1!==t.call(e[r],r,e[r]);r++);else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(E(Object(e))?C.merge(n,"string"==typeof e?[e]:e):c.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:l.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(E(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return u(a)},guid:1,support:g}),"function"==typeof Symbol&&(C.fn[Symbol.iterator]=o[Symbol.iterator]),C.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),(function(e,t){f["[object "+t+"]"]=t.toLowerCase()}));var T=function(e){var t,n,r,i,o,a,s,u,c,l,f,d,p,h,v,g,m,y,_,b="sizzle"+1*new Date,w=e.document,x=0,C=0,E=ue(),T=ue(),S=ue(),A=ue(),k=function(e,t){return e===t&&(f=!0),0},O={}.hasOwnProperty,j=[],N=j.pop,D=j.push,$=j.push,L=j.slice,I=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",P="[\\x20\\t\\r\\n\\f]",M="(?:\\\\[\\da-fA-F]{1,6}"+P+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",F="\\["+P+"*("+M+")(?:"+P+"*([*^$|!~]?=)"+P+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+M+"))|)"+P+"*\\]",q=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+F+")*)|.*)\\)|)",H=new RegExp(P+"+","g"),B=new RegExp("^"+P+"+|((?:^|[^\\\\])(?:\\\\.)*)"+P+"+$","g"),U=new RegExp("^"+P+"*,"+P+"*"),W=new RegExp("^"+P+"*([>+~]|"+P+")"+P+"*"),z=new RegExp(P+"|>"),V=new RegExp(q),Q=new RegExp("^"+M+"$"),X={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M+"|[*])"),ATTR:new RegExp("^"+F),PSEUDO:new RegExp("^"+q),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+P+"*(even|odd|(([+-]|)(\\d*)n|)"+P+"*(?:([+-]|)"+P+"*(\\d+)|))"+P+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+P+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+P+"*((?:-\\d)?\\d*)"+P+"*\\)|)(?=[^-]|$)","i")},K=/HTML$/i,Y=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,G=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+P+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"�":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){d()},ae=be((function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()}),{dir:"parentNode",next:"legend"});try{$.apply(j=L.call(w.childNodes),w.childNodes),j[w.childNodes.length].nodeType}catch(e){$={apply:j.length?function(e,t){D.apply(e,L.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}function se(e,t,r,i){var o,s,c,l,f,h,m,y=t&&t.ownerDocument,w=t?t.nodeType:9;if(r=r||[],"string"!=typeof e||!e||1!==w&&9!==w&&11!==w)return r;if(!i&&(d(t),t=t||p,v)){if(11!==w&&(f=Z.exec(e)))if(o=f[1]){if(9===w){if(!(c=t.getElementById(o)))return r;if(c.id===o)return r.push(c),r}else if(y&&(c=y.getElementById(o))&&_(t,c)&&c.id===o)return r.push(c),r}else{if(f[2])return $.apply(r,t.getElementsByTagName(e)),r;if((o=f[3])&&n.getElementsByClassName&&t.getElementsByClassName)return $.apply(r,t.getElementsByClassName(o)),r}if(n.qsa&&!A[e+" "]&&(!g||!g.test(e))&&(1!==w||"object"!==t.nodeName.toLowerCase())){if(m=e,y=t,1===w&&(z.test(e)||W.test(e))){for((y=ee.test(e)&&me(t.parentNode)||t)===t&&n.scope||((l=t.getAttribute("id"))?l=l.replace(re,ie):t.setAttribute("id",l=b)),s=(h=a(e)).length;s--;)h[s]=(l?"#"+l:":scope")+" "+_e(h[s]);m=h.join(",")}try{return $.apply(r,y.querySelectorAll(m)),r}catch(t){A(e,!0)}finally{l===b&&t.removeAttribute("id")}}}return u(e.replace(B,"$1"),t,r,i)}function ue(){var e=[];return function t(n,i){return e.push(n+" ")>r.cacheLength&&delete t[e.shift()],t[n+" "]=i}}function ce(e){return e[b]=!0,e}function le(e){var t=p.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){for(var n=e.split("|"),i=n.length;i--;)r.attrHandle[n[i]]=t}function de(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function pe(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function he(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function ve(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&ae(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function ge(e){return ce((function(t){return t=+t,ce((function(n,r){for(var i,o=e([],n.length,t),a=o.length;a--;)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))}))}))}function me(e){return e&&void 0!==e.getElementsByTagName&&e}for(t in n=se.support={},o=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!K.test(t||n&&n.nodeName||"HTML")},d=se.setDocument=function(e){var t,i,a=e?e.ownerDocument||e:w;return a!=p&&9===a.nodeType&&a.documentElement?(h=(p=a).documentElement,v=!o(p),w!=p&&(i=p.defaultView)&&i.top!==i&&(i.addEventListener?i.addEventListener("unload",oe,!1):i.attachEvent&&i.attachEvent("onunload",oe)),n.scope=le((function(e){return h.appendChild(e).appendChild(p.createElement("div")),void 0!==e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length})),n.attributes=le((function(e){return e.className="i",!e.getAttribute("className")})),n.getElementsByTagName=le((function(e){return e.appendChild(p.createComment("")),!e.getElementsByTagName("*").length})),n.getElementsByClassName=G.test(p.getElementsByClassName),n.getById=le((function(e){return h.appendChild(e).id=b,!p.getElementsByName||!p.getElementsByName(b).length})),n.getById?(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&v){var n=t.getElementById(e);return n?[n]:[]}}):(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){var n=void 0!==e.getAttributeNode&&e.getAttributeNode("id");return n&&n.value===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&v){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];for(i=t.getElementsByName(e),r=0;o=i[r++];)if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),r.find.TAG=n.getElementsByTagName?function(e,t){return void 0!==t.getElementsByTagName?t.getElementsByTagName(e):n.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){for(;n=o[i++];)1===n.nodeType&&r.push(n);return r}return o},r.find.CLASS=n.getElementsByClassName&&function(e,t){if(void 0!==t.getElementsByClassName&&v)return t.getElementsByClassName(e)},m=[],g=[],(n.qsa=G.test(p.querySelectorAll))&&(le((function(e){var t;h.appendChild(e).innerHTML="<a id='"+b+"'></a><select id='"+b+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&g.push("[*^$]="+P+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||g.push("\\["+P+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+b+"-]").length||g.push("~="),(t=p.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||g.push("\\["+P+"*name"+P+"*="+P+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||g.push(":checked"),e.querySelectorAll("a#"+b+"+*").length||g.push(".#.+[+~]"),e.querySelectorAll("\\\f"),g.push("[\\r\\n\\f]")})),le((function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=p.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&g.push("name"+P+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&g.push(":enabled",":disabled"),h.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&g.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),g.push(",.*:")}))),(n.matchesSelector=G.test(y=h.matches||h.webkitMatchesSelector||h.mozMatchesSelector||h.oMatchesSelector||h.msMatchesSelector))&&le((function(e){n.disconnectedMatch=y.call(e,"*"),y.call(e,"[s!='']:x"),m.push("!=",q)})),g=g.length&&new RegExp(g.join("|")),m=m.length&&new RegExp(m.join("|")),t=G.test(h.compareDocumentPosition),_=t||G.test(h.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},k=t?function(e,t){if(e===t)return f=!0,0;var r=!e.compareDocumentPosition-!t.compareDocumentPosition;return r||(1&(r=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!n.sortDetached&&t.compareDocumentPosition(e)===r?e==p||e.ownerDocument==w&&_(w,e)?-1:t==p||t.ownerDocument==w&&_(w,t)?1:l?I(l,e)-I(l,t):0:4&r?-1:1)}:function(e,t){if(e===t)return f=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==p?-1:t==p?1:i?-1:o?1:l?I(l,e)-I(l,t):0;if(i===o)return de(e,t);for(n=e;n=n.parentNode;)a.unshift(n);for(n=t;n=n.parentNode;)s.unshift(n);for(;a[r]===s[r];)r++;return r?de(a[r],s[r]):a[r]==w?-1:s[r]==w?1:0},p):p},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(d(e),n.matchesSelector&&v&&!A[t+" "]&&(!m||!m.test(t))&&(!g||!g.test(t)))try{var r=y.call(e,t);if(r||n.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(e){A(t,!0)}return se(t,p,null,[e]).length>0},se.contains=function(e,t){return(e.ownerDocument||e)!=p&&d(e),_(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=p&&d(e);var i=r.attrHandle[t.toLowerCase()],o=i&&O.call(r.attrHandle,t.toLowerCase())?i(e,t,!v):void 0;return void 0!==o?o:n.attributes||!v?e.getAttribute(t):(o=e.getAttributeNode(t))&&o.specified?o.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,r=[],i=0,o=0;if(f=!n.detectDuplicates,l=!n.sortStable&&e.slice(0),e.sort(k),f){for(;t=e[o++];)t===e[o]&&(i=r.push(o));for(;i--;)e.splice(r[i],1)}return l=null,e},i=se.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=i(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r++];)n+=i(t);return n},(r=se.selectors={cacheLength:50,createPseudo:ce,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return X.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&V.test(n)&&(t=a(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=E[e+" "];return t||(t=new RegExp("(^|"+P+")"+e+"("+P+"|$)"))&&E(e,(function(e){return t.test("string"==typeof e.className&&e.className||void 0!==e.getAttribute&&e.getAttribute("class")||"")}))},ATTR:function(e,t,n){return function(r){var i=se.attr(r,e);return null==i?"!="===t:!t||(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i.replace(H," ")+" ").indexOf(n)>-1:"|="===t&&(i===n||i.slice(0,n.length+1)===n+"-"))}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,u){var c,l,f,d,p,h,v=o!==a?"nextSibling":"previousSibling",g=t.parentNode,m=s&&t.nodeName.toLowerCase(),y=!u&&!s,_=!1;if(g){if(o){for(;v;){for(d=t;d=d[v];)if(s?d.nodeName.toLowerCase()===m:1===d.nodeType)return!1;h=v="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?g.firstChild:g.lastChild],a&&y){for(_=(p=(c=(l=(f=(d=g)[b]||(d[b]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]||[])[0]===x&&c[1])&&c[2],d=p&&g.childNodes[p];d=++p&&d&&d[v]||(_=p=0)||h.pop();)if(1===d.nodeType&&++_&&d===t){l[e]=[x,p,_];break}}else if(y&&(_=p=(c=(l=(f=(d=t)[b]||(d[b]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]||[])[0]===x&&c[1]),!1===_)for(;(d=++p&&d&&d[v]||(_=p=0)||h.pop())&&((s?d.nodeName.toLowerCase()!==m:1!==d.nodeType)||!++_||(y&&((l=(f=d[b]||(d[b]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]=[x,_]),d!==t)););return(_-=i)===r||_%r==0&&_/r>=0}}},PSEUDO:function(e,t){var n,i=r.pseudos[e]||r.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return i[b]?i(t):i.length>1?(n=[e,e,"",t],r.setFilters.hasOwnProperty(e.toLowerCase())?ce((function(e,n){for(var r,o=i(e,t),a=o.length;a--;)e[r=I(e,o[a])]=!(n[r]=o[a])})):function(e){return i(e,0,n)}):i}},pseudos:{not:ce((function(e){var t=[],n=[],r=s(e.replace(B,"$1"));return r[b]?ce((function(e,t,n,i){for(var o,a=r(e,null,i,[]),s=e.length;s--;)(o=a[s])&&(e[s]=!(t[s]=o))})):function(e,i,o){return t[0]=e,r(t,null,o,n),t[0]=null,!n.pop()}})),has:ce((function(e){return function(t){return se(e,t).length>0}})),contains:ce((function(e){return e=e.replace(te,ne),function(t){return(t.textContent||i(t)).indexOf(e)>-1}})),lang:ce((function(e){return Q.test(e||"")||se.error("unsupported lang: "+e),e=e.replace(te,ne).toLowerCase(),function(t){var n;do{if(n=v?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(n=n.toLowerCase())===e||0===n.indexOf(e+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}})),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===h},focus:function(e){return e===p.activeElement&&(!p.hasFocus||p.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ve(!1),disabled:ve(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!r.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Y.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ge((function(){return[0]})),last:ge((function(e,t){return[t-1]})),eq:ge((function(e,t,n){return[n<0?n+t:n]})),even:ge((function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e})),odd:ge((function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e})),lt:ge((function(e,t,n){for(var r=n<0?n+t:n>t?t:n;--r>=0;)e.push(r);return e})),gt:ge((function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e}))}}).pseudos.nth=r.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})r.pseudos[t]=pe(t);for(t in{submit:!0,reset:!0})r.pseudos[t]=he(t);function ye(){}function _e(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(e,t,n){var r=t.dir,i=t.next,o=i||r,a=n&&"parentNode"===o,s=C++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||a)return e(t,n,i);return!1}:function(t,n,u){var c,l,f,d=[x,s];if(u){for(;t=t[r];)if((1===t.nodeType||a)&&e(t,n,u))return!0}else for(;t=t[r];)if(1===t.nodeType||a)if(l=(f=t[b]||(t[b]={}))[t.uniqueID]||(f[t.uniqueID]={}),i&&i===t.nodeName.toLowerCase())t=t[r]||t;else{if((c=l[o])&&c[0]===x&&c[1]===s)return d[2]=c[2];if(l[o]=d,d[2]=e(t,n,u))return!0}return!1}}function we(e){return e.length>1?function(t,n,r){for(var i=e.length;i--;)if(!e[i](t,n,r))return!1;return!0}:e[0]}function xe(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,c=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),c&&t.push(s)));return a}function Ce(e,t,n,r,i,o){return r&&!r[b]&&(r=Ce(r)),i&&!i[b]&&(i=Ce(i,o)),ce((function(o,a,s,u){var c,l,f,d=[],p=[],h=a.length,v=o||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(t||"*",s.nodeType?[s]:s,[]),g=!e||!o&&t?v:xe(v,d,e,s,u),m=n?i||(o?e:h||r)?[]:a:g;if(n&&n(g,m,s,u),r)for(c=xe(m,p),r(c,[],s,u),l=c.length;l--;)(f=c[l])&&(m[p[l]]=!(g[p[l]]=f));if(o){if(i||e){if(i){for(c=[],l=m.length;l--;)(f=m[l])&&c.push(g[l]=f);i(null,m=[],c,u)}for(l=m.length;l--;)(f=m[l])&&(c=i?I(o,f):d[l])>-1&&(o[c]=!(a[c]=f))}}else m=xe(m===a?m.splice(h,m.length):m),i?i(null,a,m,u):$.apply(a,m)}))}function Ee(e){for(var t,n,i,o=e.length,a=r.relative[e[0].type],s=a||r.relative[" "],u=a?1:0,l=be((function(e){return e===t}),s,!0),f=be((function(e){return I(t,e)>-1}),s,!0),d=[function(e,n,r){var i=!a&&(r||n!==c)||((t=n).nodeType?l(e,n,r):f(e,n,r));return t=null,i}];u<o;u++)if(n=r.relative[e[u].type])d=[be(we(d),n)];else{if((n=r.filter[e[u].type].apply(null,e[u].matches))[b]){for(i=++u;i<o&&!r.relative[e[i].type];i++);return Ce(u>1&&we(d),u>1&&_e(e.slice(0,u-1).concat({value:" "===e[u-2].type?"*":""})).replace(B,"$1"),n,u<i&&Ee(e.slice(u,i)),i<o&&Ee(e=e.slice(i)),i<o&&_e(e))}d.push(n)}return we(d)}return ye.prototype=r.filters=r.pseudos,r.setFilters=new ye,a=se.tokenize=function(e,t){var n,i,o,a,s,u,c,l=T[e+" "];if(l)return t?0:l.slice(0);for(s=e,u=[],c=r.preFilter;s;){for(a in n&&!(i=U.exec(s))||(i&&(s=s.slice(i[0].length)||s),u.push(o=[])),n=!1,(i=W.exec(s))&&(n=i.shift(),o.push({value:n,type:i[0].replace(B," ")}),s=s.slice(n.length)),r.filter)!(i=X[a].exec(s))||c[a]&&!(i=c[a](i))||(n=i.shift(),o.push({value:n,type:a,matches:i}),s=s.slice(n.length));if(!n)break}return t?s.length:s?se.error(e):T(e,u).slice(0)},s=se.compile=function(e,t){var n,i=[],o=[],s=S[e+" "];if(!s){for(t||(t=a(e)),n=t.length;n--;)(s=Ee(t[n]))[b]?i.push(s):o.push(s);(s=S(e,function(e,t){var n=t.length>0,i=e.length>0,o=function(o,a,s,u,l){var f,h,g,m=0,y="0",_=o&&[],b=[],w=c,C=o||i&&r.find.TAG("*",l),E=x+=null==w?1:Math.random()||.1,T=C.length;for(l&&(c=a==p||a||l);y!==T&&null!=(f=C[y]);y++){if(i&&f){for(h=0,a||f.ownerDocument==p||(d(f),s=!v);g=e[h++];)if(g(f,a||p,s)){u.push(f);break}l&&(x=E)}n&&((f=!g&&f)&&m--,o&&_.push(f))}if(m+=y,n&&y!==m){for(h=0;g=t[h++];)g(_,b,a,s);if(o){if(m>0)for(;y--;)_[y]||b[y]||(b[y]=N.call(u));b=xe(b)}$.apply(u,b),l&&!o&&b.length>0&&m+t.length>1&&se.uniqueSort(u)}return l&&(x=E,c=w),_};return n?ce(o):o}(o,i))).selector=e}return s},u=se.select=function(e,t,n,i){var o,u,c,l,f,d="function"==typeof e&&e,p=!i&&a(e=d.selector||e);if(n=n||[],1===p.length){if((u=p[0]=p[0].slice(0)).length>2&&"ID"===(c=u[0]).type&&9===t.nodeType&&v&&r.relative[u[1].type]){if(!(t=(r.find.ID(c.matches[0].replace(te,ne),t)||[])[0]))return n;d&&(t=t.parentNode),e=e.slice(u.shift().value.length)}for(o=X.needsContext.test(e)?0:u.length;o--&&(c=u[o],!r.relative[l=c.type]);)if((f=r.find[l])&&(i=f(c.matches[0].replace(te,ne),ee.test(u[0].type)&&me(t.parentNode)||t))){if(u.splice(o,1),!(e=i.length&&_e(u)))return $.apply(n,i),n;break}}return(d||s(e,p))(i,t,!v,n,!t||ee.test(e)&&me(t.parentNode)||t),n},n.sortStable=b.split("").sort(k).join("")===b,n.detectDuplicates=!!f,d(),n.sortDetached=le((function(e){return 1&e.compareDocumentPosition(p.createElement("fieldset"))})),le((function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")}))||fe("type|href|height|width",(function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)})),n.attributes&&le((function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")}))||fe("value",(function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue})),le((function(e){return null==e.getAttribute("disabled")}))||fe(R,(function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null})),se}(n);C.find=T,C.expr=T.selectors,C.expr[":"]=C.expr.pseudos,C.uniqueSort=C.unique=T.uniqueSort,C.text=T.getText,C.isXMLDoc=T.isXML,C.contains=T.contains,C.escapeSelector=T.escape;var S=function(e,t,n){for(var r=[],i=void 0!==n;(e=e[t])&&9!==e.nodeType;)if(1===e.nodeType){if(i&&C(e).is(n))break;r.push(e)}return r},A=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=C.expr.match.needsContext;function O(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var j=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function N(e,t,n){return m(t)?C.grep(e,(function(e,r){return!!t.call(e,r,e)!==n})):t.nodeType?C.grep(e,(function(e){return e===t!==n})):"string"!=typeof t?C.grep(e,(function(e){return l.call(t,e)>-1!==n})):C.filter(t,e,n)}C.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?C.find.matchesSelector(r,e)?[r]:[]:C.find.matches(e,C.grep(t,(function(e){return 1===e.nodeType})))},C.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(C(e).filter((function(){for(t=0;t<r;t++)if(C.contains(i[t],this))return!0})));for(n=this.pushStack([]),t=0;t<r;t++)C.find(e,i[t],n);return r>1?C.uniqueSort(n):n},filter:function(e){return this.pushStack(N(this,e||[],!1))},not:function(e){return this.pushStack(N(this,e||[],!0))},is:function(e){return!!N(this,"string"==typeof e&&k.test(e)?C(e):e||[],!1).length}});var D,$=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(C.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||D,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&e.length>=3?[null,e,null]:$.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof C?t[0]:t,C.merge(this,C.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:_,!0)),j.test(r[1])&&C.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=_.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(C):C.makeArray(e,this)}).prototype=C.fn,D=C(_);var L=/^(?:parents|prev(?:Until|All))/,I={children:!0,contents:!0,next:!0,prev:!0};function R(e,t){for(;(e=e[t])&&1!==e.nodeType;);return e}C.fn.extend({has:function(e){var t=C(e,this),n=t.length;return this.filter((function(){for(var e=0;e<n;e++)if(C.contains(this,t[e]))return!0}))},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&C(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?a.index(n)>-1:1===n.nodeType&&C.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(o.length>1?C.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?l.call(C(e),this[0]):l.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(C.uniqueSort(C.merge(this.get(),C(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),C.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return S(e,"parentNode")},parentsUntil:function(e,t,n){return S(e,"parentNode",n)},next:function(e){return R(e,"nextSibling")},prev:function(e){return R(e,"previousSibling")},nextAll:function(e){return S(e,"nextSibling")},prevAll:function(e){return S(e,"previousSibling")},nextUntil:function(e,t,n){return S(e,"nextSibling",n)},prevUntil:function(e,t,n){return S(e,"previousSibling",n)},siblings:function(e){return A((e.parentNode||{}).firstChild,e)},children:function(e){return A(e.firstChild)},contents:function(e){return null!=e.contentDocument&&a(e.contentDocument)?e.contentDocument:(O(e,"template")&&(e=e.content||e),C.merge([],e.childNodes))}},(function(e,t){C.fn[e]=function(n,r){var i=C.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=C.filter(r,i)),this.length>1&&(I[e]||C.uniqueSort(i),L.test(e)&&i.reverse()),this.pushStack(i)}}));var P=/[^\x20\t\r\n\f]+/g;function M(e){return e}function F(e){throw e}function q(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}C.Callbacks=function(e){e="string"==typeof e?function(e){var t={};return C.each(e.match(P)||[],(function(e,n){t[n]=!0})),t}(e):C.extend({},e);var t,n,r,i,o=[],a=[],s=-1,u=function(){for(i=i||e.once,r=t=!0;a.length;s=-1)for(n=a.shift();++s<o.length;)!1===o[s].apply(n[0],n[1])&&e.stopOnFalse&&(s=o.length,n=!1);e.memory||(n=!1),t=!1,i&&(o=n?[]:"")},c={add:function(){return o&&(n&&!t&&(s=o.length-1,a.push(n)),function t(n){C.each(n,(function(n,r){m(r)?e.unique&&c.has(r)||o.push(r):r&&r.length&&"string"!==x(r)&&t(r)}))}(arguments),n&&!t&&u()),this},remove:function(){return C.each(arguments,(function(e,t){for(var n;(n=C.inArray(t,o,n))>-1;)o.splice(n,1),n<=s&&s--})),this},has:function(e){return e?C.inArray(e,o)>-1:o.length>0},empty:function(){return o&&(o=[]),this},disable:function(){return i=a=[],o=n="",this},disabled:function(){return!o},lock:function(){return i=a=[],n||t||(o=n=""),this},locked:function(){return!!i},fireWith:function(e,n){return i||(n=[e,(n=n||[]).slice?n.slice():n],a.push(n),t||u()),this},fire:function(){return c.fireWith(this,arguments),this},fired:function(){return!!r}};return c},C.extend({Deferred:function(e){var t=[["notify","progress",C.Callbacks("memory"),C.Callbacks("memory"),2],["resolve","done",C.Callbacks("once memory"),C.Callbacks("once memory"),0,"resolved"],["reject","fail",C.Callbacks("once memory"),C.Callbacks("once memory"),1,"rejected"]],r="pending",i={state:function(){return r},always:function(){return o.done(arguments).fail(arguments),this},catch:function(e){return i.then(null,e)},pipe:function(){var e=arguments;return C.Deferred((function(n){C.each(t,(function(t,r){var i=m(e[r[4]])&&e[r[4]];o[r[1]]((function(){var e=i&&i.apply(this,arguments);e&&m(e.promise)?e.promise().progress(n.notify).done(n.resolve).fail(n.reject):n[r[0]+"With"](this,i?[e]:arguments)}))})),e=null})).promise()},then:function(e,r,i){var o=0;function a(e,t,r,i){return function(){var s=this,u=arguments,c=function(){var n,c;if(!(e<o)){if((n=r.apply(s,u))===t.promise())throw new TypeError("Thenable self-resolution");c=n&&("object"==typeof n||"function"==typeof n)&&n.then,m(c)?i?c.call(n,a(o,t,M,i),a(o,t,F,i)):(o++,c.call(n,a(o,t,M,i),a(o,t,F,i),a(o,t,M,t.notifyWith))):(r!==M&&(s=void 0,u=[n]),(i||t.resolveWith)(s,u))}},l=i?c:function(){try{c()}catch(n){C.Deferred.exceptionHook&&C.Deferred.exceptionHook(n,l.stackTrace),e+1>=o&&(r!==F&&(s=void 0,u=[n]),t.rejectWith(s,u))}};e?l():(C.Deferred.getStackHook&&(l.stackTrace=C.Deferred.getStackHook()),n.setTimeout(l))}}return C.Deferred((function(n){t[0][3].add(a(0,n,m(i)?i:M,n.notifyWith)),t[1][3].add(a(0,n,m(e)?e:M)),t[2][3].add(a(0,n,m(r)?r:F))})).promise()},promise:function(e){return null!=e?C.extend(e,i):i}},o={};return C.each(t,(function(e,n){var a=n[2],s=n[5];i[n[1]]=a.add,s&&a.add((function(){r=s}),t[3-e][2].disable,t[3-e][3].disable,t[0][2].lock,t[0][3].lock),a.add(n[3].fire),o[n[0]]=function(){return o[n[0]+"With"](this===o?void 0:this,arguments),this},o[n[0]+"With"]=a.fireWith})),i.promise(o),e&&e.call(o,o),o},when:function(e){var t=arguments.length,n=t,r=Array(n),i=s.call(arguments),o=C.Deferred(),a=function(e){return function(n){r[e]=this,i[e]=arguments.length>1?s.call(arguments):n,--t||o.resolveWith(r,i)}};if(t<=1&&(q(e,o.done(a(n)).resolve,o.reject,!t),"pending"===o.state()||m(i[n]&&i[n].then)))return o.then();for(;n--;)q(i[n],a(n),o.reject);return o.promise()}});var H=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;C.Deferred.exceptionHook=function(e,t){n.console&&n.console.warn&&e&&H.test(e.name)&&n.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},C.readyException=function(e){n.setTimeout((function(){throw e}))};var B=C.Deferred();function U(){_.removeEventListener("DOMContentLoaded",U),n.removeEventListener("load",U),C.ready()}C.fn.ready=function(e){return B.then(e).catch((function(e){C.readyException(e)})),this},C.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--C.readyWait:C.isReady)||(C.isReady=!0,!0!==e&&--C.readyWait>0||B.resolveWith(_,[C]))}}),C.ready.then=B.then,"complete"===_.readyState||"loading"!==_.readyState&&!_.documentElement.doScroll?n.setTimeout(C.ready):(_.addEventListener("DOMContentLoaded",U),n.addEventListener("load",U));var W=function(e,t,n,r,i,o,a){var s=0,u=e.length,c=null==n;if("object"===x(n))for(s in i=!0,n)W(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),c&&(a?(t.call(e,r),t=null):(c=t,t=function(e,t,n){return c.call(C(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:c?t.call(e):u?t(e[0],n):o},z=/^-ms-/,V=/-([a-z])/g;function Q(e,t){return t.toUpperCase()}function X(e){return e.replace(z,"ms-").replace(V,Q)}var K=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Y(){this.expando=C.expando+Y.uid++}Y.uid=1,Y.prototype={cache:function(e){var t=e[this.expando];return t||(t={},K(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[X(t)]=n;else for(r in t)i[X(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][X(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(X):(t=X(t))in r?[t]:t.match(P)||[]).length;for(;n--;)delete r[t[n]]}(void 0===t||C.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!C.isEmptyObject(t)}};var J=new Y,G=new Y,Z=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,ee=/[A-Z]/g;function te(e,t,n){var r;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(ee,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n=function(e){return"true"===e||"false"!==e&&("null"===e?null:e===+e+""?+e:Z.test(e)?JSON.parse(e):e)}(n)}catch(e){}G.set(e,t,n)}else n=void 0;return n}C.extend({hasData:function(e){return G.hasData(e)||J.hasData(e)},data:function(e,t,n){return G.access(e,t,n)},removeData:function(e,t){G.remove(e,t)},_data:function(e,t,n){return J.access(e,t,n)},_removeData:function(e,t){J.remove(e,t)}}),C.fn.extend({data:function(e,t){var n,r,i,o=this[0],a=o&&o.attributes;if(void 0===e){if(this.length&&(i=G.get(o),1===o.nodeType&&!J.get(o,"hasDataAttrs"))){for(n=a.length;n--;)a[n]&&0===(r=a[n].name).indexOf("data-")&&(r=X(r.slice(5)),te(o,r,i[r]));J.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof e?this.each((function(){G.set(this,e)})):W(this,(function(t){var n;if(o&&void 0===t)return void 0!==(n=G.get(o,e))||void 0!==(n=te(o,e))?n:void 0;this.each((function(){G.set(this,e,t)}))}),null,t,arguments.length>1,null,!0)},removeData:function(e){return this.each((function(){G.remove(this,e)}))}}),C.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=J.get(e,t),n&&(!r||Array.isArray(n)?r=J.access(e,t,C.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=C.queue(e,t),r=n.length,i=n.shift(),o=C._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,(function(){C.dequeue(e,t)}),o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return J.get(e,n)||J.access(e,n,{empty:C.Callbacks("once memory").add((function(){J.remove(e,[t+"queue",n])}))})}}),C.fn.extend({queue:function(e,t){var n=2;return"string"!=typeof e&&(t=e,e="fx",n--),arguments.length<n?C.queue(this[0],e):void 0===t?this:this.each((function(){var n=C.queue(this,e,t);C._queueHooks(this,e),"fx"===e&&"inprogress"!==n[0]&&C.dequeue(this,e)}))},dequeue:function(e){return this.each((function(){C.dequeue(this,e)}))},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=C.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};for("string"!=typeof e&&(t=e,e=void 0),e=e||"fx";a--;)(n=J.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ne=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,re=new RegExp("^(?:([+-])=|)("+ne+")([a-z%]*)$","i"),ie=["Top","Right","Bottom","Left"],oe=_.documentElement,ae=function(e){return C.contains(e.ownerDocument,e)},se={composed:!0};oe.getRootNode&&(ae=function(e){return C.contains(e.ownerDocument,e)||e.getRootNode(se)===e.ownerDocument});var ue=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ae(e)&&"none"===C.css(e,"display")};function ce(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return C.css(e,t,"")},u=s(),c=n&&n[3]||(C.cssNumber[t]?"":"px"),l=e.nodeType&&(C.cssNumber[t]||"px"!==c&&+u)&&re.exec(C.css(e,t));if(l&&l[3]!==c){for(u/=2,c=c||l[3],l=+u||1;a--;)C.style(e,t,l+c),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),l/=o;l*=2,C.style(e,t,l+c),n=n||[]}return n&&(l=+l||+u||0,i=n[1]?l+(n[1]+1)*n[2]:+n[2],r&&(r.unit=c,r.start=l,r.end=i)),i}var le={};function fe(e){var t,n=e.ownerDocument,r=e.nodeName,i=le[r];return i||(t=n.body.appendChild(n.createElement(r)),i=C.css(t,"display"),t.parentNode.removeChild(t),"none"===i&&(i="block"),le[r]=i,i)}function de(e,t){for(var n,r,i=[],o=0,a=e.length;o<a;o++)(r=e[o]).style&&(n=r.style.display,t?("none"===n&&(i[o]=J.get(r,"display")||null,i[o]||(r.style.display="")),""===r.style.display&&ue(r)&&(i[o]=fe(r))):"none"!==n&&(i[o]="none",J.set(r,"display",n)));for(o=0;o<a;o++)null!=i[o]&&(e[o].style.display=i[o]);return e}C.fn.extend({show:function(){return de(this,!0)},hide:function(){return de(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each((function(){ue(this)?C(this).show():C(this).hide()}))}});var pe,he,ve=/^(?:checkbox|radio)$/i,ge=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,me=/^$|^module$|\/(?:java|ecma)script/i;pe=_.createDocumentFragment().appendChild(_.createElement("div")),(he=_.createElement("input")).setAttribute("type","radio"),he.setAttribute("checked","checked"),he.setAttribute("name","t"),pe.appendChild(he),g.checkClone=pe.cloneNode(!0).cloneNode(!0).lastChild.checked,pe.innerHTML="<textarea>x</textarea>",g.noCloneChecked=!!pe.cloneNode(!0).lastChild.defaultValue,pe.innerHTML="<option></option>",g.option=!!pe.lastChild;var ye={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function _e(e,t){var n;return n=void 0!==e.getElementsByTagName?e.getElementsByTagName(t||"*"):void 0!==e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&O(e,t)?C.merge([e],n):n}function be(e,t){for(var n=0,r=e.length;n<r;n++)J.set(e[n],"globalEval",!t||J.get(t[n],"globalEval"))}ye.tbody=ye.tfoot=ye.colgroup=ye.caption=ye.thead,ye.th=ye.td,g.option||(ye.optgroup=ye.option=[1,"<select multiple='multiple'>","</select>"]);var we=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,c,l,f=t.createDocumentFragment(),d=[],p=0,h=e.length;p<h;p++)if((o=e[p])||0===o)if("object"===x(o))C.merge(d,o.nodeType?[o]:o);else if(we.test(o)){for(a=a||f.appendChild(t.createElement("div")),s=(ge.exec(o)||["",""])[1].toLowerCase(),u=ye[s]||ye._default,a.innerHTML=u[1]+C.htmlPrefilter(o)+u[2],l=u[0];l--;)a=a.lastChild;C.merge(d,a.childNodes),(a=f.firstChild).textContent=""}else d.push(t.createTextNode(o));for(f.textContent="",p=0;o=d[p++];)if(r&&C.inArray(o,r)>-1)i&&i.push(o);else if(c=ae(o),a=_e(f.appendChild(o),"script"),c&&be(a),n)for(l=0;o=a[l++];)me.test(o.type||"")&&n.push(o);return f}var Ce=/^key/,Ee=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Te=/^([^.]*)(?:\.(.+)|)/;function Se(){return!0}function Ae(){return!1}function ke(e,t){return e===function(){try{return _.activeElement}catch(e){}}()==("focus"===t)}function Oe(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)Oe(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Ae;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return C().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=C.guid++)),e.each((function(){C.event.add(this,t,i,r,n)}))}function je(e,t,n){n?(J.set(e,t,!1),C.event.add(e,t,{namespace:!1,handler:function(e){var r,i,o=J.get(this,t);if(1&e.isTrigger&&this[t]){if(o.length)(C.event.special[t]||{}).delegateType&&e.stopPropagation();else if(o=s.call(arguments),J.set(this,t,o),r=n(this,t),this[t](),o!==(i=J.get(this,t))||r?J.set(this,t,!1):i={},o!==i)return e.stopImmediatePropagation(),e.preventDefault(),i.value}else o.length&&(J.set(this,t,{value:C.event.trigger(C.extend(o[0],C.Event.prototype),o.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===J.get(e,t)&&C.event.add(e,t,Se)}C.event={global:{},add:function(e,t,n,r,i){var o,a,s,u,c,l,f,d,p,h,v,g=J.get(e);if(K(e))for(n.handler&&(n=(o=n).handler,i=o.selector),i&&C.find.matchesSelector(oe,i),n.guid||(n.guid=C.guid++),(u=g.events)||(u=g.events=Object.create(null)),(a=g.handle)||(a=g.handle=function(t){return void 0!==C&&C.event.triggered!==t.type?C.event.dispatch.apply(e,arguments):void 0}),c=(t=(t||"").match(P)||[""]).length;c--;)p=v=(s=Te.exec(t[c])||[])[1],h=(s[2]||"").split(".").sort(),p&&(f=C.event.special[p]||{},p=(i?f.delegateType:f.bindType)||p,f=C.event.special[p]||{},l=C.extend({type:p,origType:v,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&C.expr.match.needsContext.test(i),namespace:h.join(".")},o),(d=u[p])||((d=u[p]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(e,r,h,a)||e.addEventListener&&e.addEventListener(p,a)),f.add&&(f.add.call(e,l),l.handler.guid||(l.handler.guid=n.guid)),i?d.splice(d.delegateCount++,0,l):d.push(l),C.event.global[p]=!0)},remove:function(e,t,n,r,i){var o,a,s,u,c,l,f,d,p,h,v,g=J.hasData(e)&&J.get(e);if(g&&(u=g.events)){for(c=(t=(t||"").match(P)||[""]).length;c--;)if(p=v=(s=Te.exec(t[c])||[])[1],h=(s[2]||"").split(".").sort(),p){for(f=C.event.special[p]||{},d=u[p=(r?f.delegateType:f.bindType)||p]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=d.length;o--;)l=d[o],!i&&v!==l.origType||n&&n.guid!==l.guid||s&&!s.test(l.namespace)||r&&r!==l.selector&&("**"!==r||!l.selector)||(d.splice(o,1),l.selector&&d.delegateCount--,f.remove&&f.remove.call(e,l));a&&!d.length&&(f.teardown&&!1!==f.teardown.call(e,h,g.handle)||C.removeEvent(e,p,g.handle),delete u[p])}else for(p in u)C.event.remove(e,p+t[c],n,r,!0);C.isEmptyObject(u)&&J.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=C.event.fix(e),c=(J.get(this,"events")||Object.create(null))[u.type]||[],l=C.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!l.preDispatch||!1!==l.preDispatch.call(this,u)){for(a=C.event.handlers.call(this,u,c),t=0;(i=a[t++])&&!u.isPropagationStopped();)for(u.currentTarget=i.elem,n=0;(o=i.handlers[n++])&&!u.isImmediatePropagationStopped();)u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((C.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()));return l.postDispatch&&l.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,c=e.target;if(u&&c.nodeType&&!("click"===e.type&&e.button>=1))for(;c!==this;c=c.parentNode||this)if(1===c.nodeType&&("click"!==e.type||!0!==c.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?C(i,this).index(c)>-1:C.find(i,this,null,[c]).length),a[i]&&o.push(r);o.length&&s.push({elem:c,handlers:o})}return c=this,u<t.length&&s.push({elem:c,handlers:t.slice(u)}),s},addProp:function(e,t){Object.defineProperty(C.Event.prototype,e,{enumerable:!0,configurable:!0,get:m(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(e){return e[C.expando]?e:new C.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return ve.test(t.type)&&t.click&&O(t,"input")&&je(t,"click",Se),!1},trigger:function(e){var t=this||e;return ve.test(t.type)&&t.click&&O(t,"input")&&je(t,"click"),!0},_default:function(e){var t=e.target;return ve.test(t.type)&&t.click&&O(t,"input")&&J.get(t,"click")||O(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},C.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},C.Event=function(e,t){if(!(this instanceof C.Event))return new C.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Se:Ae,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&C.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[C.expando]=!0},C.Event.prototype={constructor:C.Event,isDefaultPrevented:Ae,isPropagationStopped:Ae,isImmediatePropagationStopped:Ae,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Se,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Se,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Se,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},C.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&Ce.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Ee.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},C.event.addProp),C.each({focus:"focusin",blur:"focusout"},(function(e,t){C.event.special[e]={setup:function(){return je(this,e,ke),!1},trigger:function(){return je(this,e),!0},delegateType:t}})),C.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},(function(e,t){C.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return i&&(i===r||C.contains(r,i))||(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}})),C.fn.extend({on:function(e,t,n,r){return Oe(this,e,t,n,r)},one:function(e,t,n,r){return Oe(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,C(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Ae),this.each((function(){C.event.remove(this,e,n,t)}))}});var Ne=/<script|<style|<link/i,De=/checked\s*(?:[^=]|=\s*.checked.)/i,$e=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Le(e,t){return O(e,"table")&&O(11!==t.nodeType?t:t.firstChild,"tr")&&C(e).children("tbody")[0]||e}function Ie(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Re(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Pe(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(J.hasData(e)&&(s=J.get(e).events))for(i in J.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)C.event.add(t,i,s[i][n]);G.hasData(e)&&(o=G.access(e),a=C.extend({},o),G.set(t,a))}}function Me(e,t){var n=t.nodeName.toLowerCase();"input"===n&&ve.test(e.type)?t.checked=e.checked:"input"!==n&&"textarea"!==n||(t.defaultValue=e.defaultValue)}function Fe(e,t,n,r){t=u(t);var i,o,a,s,c,l,f=0,d=e.length,p=d-1,h=t[0],v=m(h);if(v||d>1&&"string"==typeof h&&!g.checkClone&&De.test(h))return e.each((function(i){var o=e.eq(i);v&&(t[0]=h.call(this,i,o.html())),Fe(o,t,n,r)}));if(d&&(o=(i=xe(t,e[0].ownerDocument,!1,e,r)).firstChild,1===i.childNodes.length&&(i=o),o||r)){for(s=(a=C.map(_e(i,"script"),Ie)).length;f<d;f++)c=i,f!==p&&(c=C.clone(c,!0,!0),s&&C.merge(a,_e(c,"script"))),n.call(e[f],c,f);if(s)for(l=a[a.length-1].ownerDocument,C.map(a,Re),f=0;f<s;f++)c=a[f],me.test(c.type||"")&&!J.access(c,"globalEval")&&C.contains(l,c)&&(c.src&&"module"!==(c.type||"").toLowerCase()?C._evalUrl&&!c.noModule&&C._evalUrl(c.src,{nonce:c.nonce||c.getAttribute("nonce")},l):w(c.textContent.replace($e,""),c,l))}return e}function qe(e,t,n){for(var r,i=t?C.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||C.cleanData(_e(r)),r.parentNode&&(n&&ae(r)&&be(_e(r,"script")),r.parentNode.removeChild(r));return e}C.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s=e.cloneNode(!0),u=ae(e);if(!(g.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||C.isXMLDoc(e)))for(a=_e(s),r=0,i=(o=_e(e)).length;r<i;r++)Me(o[r],a[r]);if(t)if(n)for(o=o||_e(e),a=a||_e(s),r=0,i=o.length;r<i;r++)Pe(o[r],a[r]);else Pe(e,s);return(a=_e(s,"script")).length>0&&be(a,!u&&_e(e,"script")),s},cleanData:function(e){for(var t,n,r,i=C.event.special,o=0;void 0!==(n=e[o]);o++)if(K(n)){if(t=n[J.expando]){if(t.events)for(r in t.events)i[r]?C.event.remove(n,r):C.removeEvent(n,r,t.handle);n[J.expando]=void 0}n[G.expando]&&(n[G.expando]=void 0)}}}),C.fn.extend({detach:function(e){return qe(this,e,!0)},remove:function(e){return qe(this,e)},text:function(e){return W(this,(function(e){return void 0===e?C.text(this):this.empty().each((function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)}))}),null,e,arguments.length)},append:function(){return Fe(this,arguments,(function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Le(this,e).appendChild(e)}))},prepend:function(){return Fe(this,arguments,(function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Le(this,e);t.insertBefore(e,t.firstChild)}}))},before:function(){return Fe(this,arguments,(function(e){this.parentNode&&this.parentNode.insertBefore(e,this)}))},after:function(){return Fe(this,arguments,(function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)}))},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(C.cleanData(_e(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map((function(){return C.clone(this,e,t)}))},html:function(e){return W(this,(function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ne.test(e)&&!ye[(ge.exec(e)||["",""])[1].toLowerCase()]){e=C.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(C.cleanData(_e(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)}),null,e,arguments.length)},replaceWith:function(){var e=[];return Fe(this,arguments,(function(t){var n=this.parentNode;C.inArray(this,e)<0&&(C.cleanData(_e(this)),n&&n.replaceChild(t,this))}),e)}}),C.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},(function(e,t){C.fn[e]=function(e){for(var n,r=[],i=C(e),o=i.length-1,a=0;a<=o;a++)n=a===o?this:this.clone(!0),C(i[a])[t](n),c.apply(r,n.get());return this.pushStack(r)}}));var He=new RegExp("^("+ne+")(?!px)[a-z%]+$","i"),Be=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=n),t.getComputedStyle(e)},Ue=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},We=new RegExp(ie.join("|"),"i");function ze(e,t,n){var r,i,o,a,s=e.style;return(n=n||Be(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||ae(e)||(a=C.style(e,t)),!g.pixelBoxStyles()&&He.test(a)&&We.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function Ve(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(l){c.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",l.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",oe.appendChild(c).appendChild(l);var e=n.getComputedStyle(l);r="1%"!==e.top,u=12===t(e.marginLeft),l.style.right="60%",a=36===t(e.right),i=36===t(e.width),l.style.position="absolute",o=12===t(l.offsetWidth/3),oe.removeChild(c),l=null}}function t(e){return Math.round(parseFloat(e))}var r,i,o,a,s,u,c=_.createElement("div"),l=_.createElement("div");l.style&&(l.style.backgroundClip="content-box",l.cloneNode(!0).style.backgroundClip="",g.clearCloneStyle="content-box"===l.style.backgroundClip,C.extend(g,{boxSizingReliable:function(){return e(),i},pixelBoxStyles:function(){return e(),a},pixelPosition:function(){return e(),r},reliableMarginLeft:function(){return e(),u},scrollboxSize:function(){return e(),o},reliableTrDimensions:function(){var e,t,r,i;return null==s&&(e=_.createElement("table"),t=_.createElement("tr"),r=_.createElement("div"),e.style.cssText="position:absolute;left:-11111px",t.style.height="1px",r.style.height="9px",oe.appendChild(e).appendChild(t).appendChild(r),i=n.getComputedStyle(t),s=parseInt(i.height)>3,oe.removeChild(e)),s}}))}();var Qe=["Webkit","Moz","ms"],Xe=_.createElement("div").style,Ke={};function Ye(e){var t=C.cssProps[e]||Ke[e];return t||(e in Xe?e:Ke[e]=function(e){for(var t=e[0].toUpperCase()+e.slice(1),n=Qe.length;n--;)if((e=Qe[n]+t)in Xe)return e}(e)||e)}var Je=/^(none|table(?!-c[ea]).+)/,Ge=/^--/,Ze={position:"absolute",visibility:"hidden",display:"block"},et={letterSpacing:"0",fontWeight:"400"};function tt(e,t,n){var r=re.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function nt(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=C.css(e,n+ie[a],!0,i)),r?("content"===n&&(u-=C.css(e,"padding"+ie[a],!0,i)),"margin"!==n&&(u-=C.css(e,"border"+ie[a]+"Width",!0,i))):(u+=C.css(e,"padding"+ie[a],!0,i),"padding"!==n?u+=C.css(e,"border"+ie[a]+"Width",!0,i):s+=C.css(e,"border"+ie[a]+"Width",!0,i));return!r&&o>=0&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function rt(e,t,n){var r=Be(e),i=(!g.boxSizingReliable()||n)&&"border-box"===C.css(e,"boxSizing",!1,r),o=i,a=ze(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(He.test(a)){if(!n)return a;a="auto"}return(!g.boxSizingReliable()&&i||!g.reliableTrDimensions()&&O(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===C.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===C.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+nt(e,t,n||(i?"border":"content"),o,r,a)+"px"}function it(e,t,n,r,i){return new it.prototype.init(e,t,n,r,i)}C.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=ze(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=X(t),u=Ge.test(t),c=e.style;if(u||(t=Ye(s)),a=C.cssHooks[t]||C.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:c[t];"string"===(o=typeof n)&&(i=re.exec(n))&&i[1]&&(n=ce(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(C.cssNumber[s]?"":"px")),g.clearCloneStyle||""!==n||0!==t.indexOf("background")||(c[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?c.setProperty(t,n):c[t]=n))}},css:function(e,t,n,r){var i,o,a,s=X(t);return Ge.test(t)||(t=Ye(s)),(a=C.cssHooks[t]||C.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=ze(e,t,r)),"normal"===i&&t in et&&(i=et[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),C.each(["height","width"],(function(e,t){C.cssHooks[t]={get:function(e,n,r){if(n)return!Je.test(C.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?rt(e,t,r):Ue(e,Ze,(function(){return rt(e,t,r)}))},set:function(e,n,r){var i,o=Be(e),a=!g.scrollboxSize()&&"absolute"===o.position,s=(a||r)&&"border-box"===C.css(e,"boxSizing",!1,o),u=r?nt(e,t,r,s,o):0;return s&&a&&(u-=Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-parseFloat(o[t])-nt(e,t,"border",!1,o)-.5)),u&&(i=re.exec(n))&&"px"!==(i[3]||"px")&&(e.style[t]=n,n=C.css(e,t)),tt(0,n,u)}}})),C.cssHooks.marginLeft=Ve(g.reliableMarginLeft,(function(e,t){if(t)return(parseFloat(ze(e,"marginLeft"))||e.getBoundingClientRect().left-Ue(e,{marginLeft:0},(function(){return e.getBoundingClientRect().left})))+"px"})),C.each({margin:"",padding:"",border:"Width"},(function(e,t){C.cssHooks[e+t]={expand:function(n){for(var r=0,i={},o="string"==typeof n?n.split(" "):[n];r<4;r++)i[e+ie[r]+t]=o[r]||o[r-2]||o[0];return i}},"margin"!==e&&(C.cssHooks[e+t].set=tt)})),C.fn.extend({css:function(e,t){return W(this,(function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Be(e),i=t.length;a<i;a++)o[t[a]]=C.css(e,t[a],!1,r);return o}return void 0!==n?C.style(e,t,n):C.css(e,t)}),e,t,arguments.length>1)}}),C.Tween=it,it.prototype={constructor:it,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||C.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(C.cssNumber[n]?"":"px")},cur:function(){var e=it.propHooks[this.prop];return e&&e.get?e.get(this):it.propHooks._default.get(this)},run:function(e){var t,n=it.propHooks[this.prop];return this.options.duration?this.pos=t=C.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):it.propHooks._default.set(this),this}},it.prototype.init.prototype=it.prototype,it.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=C.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){C.fx.step[e.prop]?C.fx.step[e.prop](e):1!==e.elem.nodeType||!C.cssHooks[e.prop]&&null==e.elem.style[Ye(e.prop)]?e.elem[e.prop]=e.now:C.style(e.elem,e.prop,e.now+e.unit)}}},it.propHooks.scrollTop=it.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},C.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},C.fx=it.prototype.init,C.fx.step={};var ot,at,st=/^(?:toggle|show|hide)$/,ut=/queueHooks$/;function ct(){at&&(!1===_.hidden&&n.requestAnimationFrame?n.requestAnimationFrame(ct):n.setTimeout(ct,C.fx.interval),C.fx.tick())}function lt(){return n.setTimeout((function(){ot=void 0})),ot=Date.now()}function ft(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ie[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function dt(e,t,n){for(var r,i=(pt.tweeners[t]||[]).concat(pt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function pt(e,t,n){var r,i,o=0,a=pt.prefilters.length,s=C.Deferred().always((function(){delete u.elem})),u=function(){if(i)return!1;for(var t=ot||lt(),n=Math.max(0,c.startTime+c.duration-t),r=1-(n/c.duration||0),o=0,a=c.tweens.length;o<a;o++)c.tweens[o].run(r);return s.notifyWith(e,[c,r,n]),r<1&&a?n:(a||s.notifyWith(e,[c,1,0]),s.resolveWith(e,[c]),!1)},c=s.promise({elem:e,props:C.extend({},t),opts:C.extend(!0,{specialEasing:{},easing:C.easing._default},n),originalProperties:t,originalOptions:n,startTime:ot||lt(),duration:n.duration,tweens:[],createTween:function(t,n){var r=C.Tween(e,c.opts,t,n,c.opts.specialEasing[t]||c.opts.easing);return c.tweens.push(r),r},stop:function(t){var n=0,r=t?c.tweens.length:0;if(i)return this;for(i=!0;n<r;n++)c.tweens[n].run(1);return t?(s.notifyWith(e,[c,1,0]),s.resolveWith(e,[c,t])):s.rejectWith(e,[c,t]),this}}),l=c.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=X(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=C.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(l,c.opts.specialEasing);o<a;o++)if(r=pt.prefilters[o].call(c,e,l,c.opts))return m(r.stop)&&(C._queueHooks(c.elem,c.opts.queue).stop=r.stop.bind(r)),r;return C.map(l,dt,c),m(c.opts.start)&&c.opts.start.call(e,c),c.progress(c.opts.progress).done(c.opts.done,c.opts.complete).fail(c.opts.fail).always(c.opts.always),C.fx.timer(C.extend(u,{elem:e,anim:c,queue:c.opts.queue})),c}C.Animation=C.extend(pt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return ce(n.elem,e,re.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],pt.tweeners[n]=pt.tweeners[n]||[],pt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,c,l,f="width"in t||"height"in t,d=this,p={},h=e.style,v=e.nodeType&&ue(e),g=J.get(e,"fxshow");for(r in n.queue||(null==(a=C._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,d.always((function(){d.always((function(){a.unqueued--,C.queue(e,"fx").length||a.empty.fire()}))}))),t)if(i=t[r],st.test(i)){if(delete t[r],o=o||"toggle"===i,i===(v?"hide":"show")){if("show"!==i||!g||void 0===g[r])continue;v=!0}p[r]=g&&g[r]||C.style(e,r)}if((u=!C.isEmptyObject(t))||!C.isEmptyObject(p))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(c=g&&g.display)&&(c=J.get(e,"display")),"none"===(l=C.css(e,"display"))&&(c?l=c:(de([e],!0),c=e.style.display||c,l=C.css(e,"display"),de([e]))),("inline"===l||"inline-block"===l&&null!=c)&&"none"===C.css(e,"float")&&(u||(d.done((function(){h.display=c})),null==c&&(l=h.display,c="none"===l?"":l)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",d.always((function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]}))),u=!1,p)u||(g?"hidden"in g&&(v=g.hidden):g=J.access(e,"fxshow",{display:c}),o&&(g.hidden=!v),v&&de([e],!0),d.done((function(){for(r in v||de([e]),J.remove(e,"fxshow"),p)C.style(e,r,p[r])}))),u=dt(v?g[r]:0,r,d),r in g||(g[r]=u.start,v&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?pt.prefilters.unshift(e):pt.prefilters.push(e)}}),C.speed=function(e,t,n){var r=e&&"object"==typeof e?C.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return C.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in C.fx.speeds?r.duration=C.fx.speeds[r.duration]:r.duration=C.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&C.dequeue(this,r.queue)},r},C.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ue).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=C.isEmptyObject(e),o=C.speed(t,n,r),a=function(){var t=pt(this,C.extend({},e),o);(i||J.get(this,"finish"))&&t.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(e,t,n){var r=function(e){var t=e.stop;delete e.stop,t(n)};return"string"!=typeof e&&(n=t,t=e,e=void 0),t&&this.queue(e||"fx",[]),this.each((function(){var t=!0,i=null!=e&&e+"queueHooks",o=C.timers,a=J.get(this);if(i)a[i]&&a[i].stop&&r(a[i]);else for(i in a)a[i]&&a[i].stop&&ut.test(i)&&r(a[i]);for(i=o.length;i--;)o[i].elem!==this||null!=e&&o[i].queue!==e||(o[i].anim.stop(n),t=!1,o.splice(i,1));!t&&n||C.dequeue(this,e)}))},finish:function(e){return!1!==e&&(e=e||"fx"),this.each((function(){var t,n=J.get(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=C.timers,a=r?r.length:0;for(n.finish=!0,C.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;t<a;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish}))}}),C.each(["toggle","show","hide"],(function(e,t){var n=C.fn[t];C.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ft(t,!0),e,r,i)}})),C.each({slideDown:ft("show"),slideUp:ft("hide"),slideToggle:ft("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},(function(e,t){C.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}})),C.timers=[],C.fx.tick=function(){var e,t=0,n=C.timers;for(ot=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||C.fx.stop(),ot=void 0},C.fx.timer=function(e){C.timers.push(e),C.fx.start()},C.fx.interval=13,C.fx.start=function(){at||(at=!0,ct())},C.fx.stop=function(){at=null},C.fx.speeds={slow:600,fast:200,_default:400},C.fn.delay=function(e,t){return e=C.fx&&C.fx.speeds[e]||e,t=t||"fx",this.queue(t,(function(t,r){var i=n.setTimeout(t,e);r.stop=function(){n.clearTimeout(i)}}))},function(){var e=_.createElement("input"),t=_.createElement("select").appendChild(_.createElement("option"));e.type="checkbox",g.checkOn=""!==e.value,g.optSelected=t.selected,(e=_.createElement("input")).value="t",e.type="radio",g.radioValue="t"===e.value}();var ht,vt=C.expr.attrHandle;C.fn.extend({attr:function(e,t){return W(this,C.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each((function(){C.removeAttr(this,e)}))}}),C.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return void 0===e.getAttribute?C.prop(e,t,n):(1===o&&C.isXMLDoc(e)||(i=C.attrHooks[t.toLowerCase()]||(C.expr.match.bool.test(t)?ht:void 0)),void 0!==n?null===n?void C.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=C.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!g.radioValue&&"radio"===t&&O(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)for(;n=i[r++];)e.removeAttribute(n)}}),ht={set:function(e,t,n){return!1===t?C.removeAttr(e,n):e.setAttribute(n,n),n}},C.each(C.expr.match.bool.source.match(/\w+/g),(function(e,t){var n=vt[t]||C.find.attr;vt[t]=function(e,t,r){var i,o,a=t.toLowerCase();return r||(o=vt[a],vt[a]=i,i=null!=n(e,t,r)?a:null,vt[a]=o),i}}));var gt=/^(?:input|select|textarea|button)$/i,mt=/^(?:a|area)$/i;function yt(e){return(e.match(P)||[]).join(" ")}function _t(e){return e.getAttribute&&e.getAttribute("class")||""}function bt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}C.fn.extend({prop:function(e,t){return W(this,C.prop,e,t,arguments.length>1)},removeProp:function(e){return this.each((function(){delete this[C.propFix[e]||e]}))}}),C.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&C.isXMLDoc(e)||(t=C.propFix[t]||t,i=C.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=C.find.attr(e,"tabindex");return t?parseInt(t,10):gt.test(e.nodeName)||mt.test(e.nodeName)&&e.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),g.optSelected||(C.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),C.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],(function(){C.propFix[this.toLowerCase()]=this})),C.fn.extend({addClass:function(e){var t,n,r,i,o,a,s,u=0;if(m(e))return this.each((function(t){C(this).addClass(e.call(this,t,_t(this)))}));if((t=bt(e)).length)for(;n=this[u++];)if(i=_t(n),r=1===n.nodeType&&" "+yt(i)+" "){for(a=0;o=t[a++];)r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=yt(r))&&n.setAttribute("class",s)}return this},removeClass:function(e){var t,n,r,i,o,a,s,u=0;if(m(e))return this.each((function(t){C(this).removeClass(e.call(this,t,_t(this)))}));if(!arguments.length)return this.attr("class","");if((t=bt(e)).length)for(;n=this[u++];)if(i=_t(n),r=1===n.nodeType&&" "+yt(i)+" "){for(a=0;o=t[a++];)for(;r.indexOf(" "+o+" ")>-1;)r=r.replace(" "+o+" "," ");i!==(s=yt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(e,t){var n=typeof e,r="string"===n||Array.isArray(e);return"boolean"==typeof t&&r?t?this.addClass(e):this.removeClass(e):m(e)?this.each((function(n){C(this).toggleClass(e.call(this,n,_t(this),t),t)})):this.each((function(){var t,i,o,a;if(r)for(i=0,o=C(this),a=bt(e);t=a[i++];)o.hasClass(t)?o.removeClass(t):o.addClass(t);else void 0!==e&&"boolean"!==n||((t=_t(this))&&J.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",t||!1===e?"":J.get(this,"__className__")||""))}))},hasClass:function(e){var t,n,r=0;for(t=" "+e+" ";n=this[r++];)if(1===n.nodeType&&(" "+yt(_t(n))+" ").indexOf(t)>-1)return!0;return!1}});var wt=/\r/g;C.fn.extend({val:function(e){var t,n,r,i=this[0];return arguments.length?(r=m(e),this.each((function(n){var i;1===this.nodeType&&(null==(i=r?e.call(this,n,C(this).val()):e)?i="":"number"==typeof i?i+="":Array.isArray(i)&&(i=C.map(i,(function(e){return null==e?"":e+""}))),(t=C.valHooks[this.type]||C.valHooks[this.nodeName.toLowerCase()])&&"set"in t&&void 0!==t.set(this,i,"value")||(this.value=i))}))):i?(t=C.valHooks[i.type]||C.valHooks[i.nodeName.toLowerCase()])&&"get"in t&&void 0!==(n=t.get(i,"value"))?n:"string"==typeof(n=i.value)?n.replace(wt,""):null==n?"":n:void 0}}),C.extend({valHooks:{option:{get:function(e){var t=C.find.attr(e,"value");return null!=t?t:yt(C.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!O(n.parentNode,"optgroup"))){if(t=C(n).val(),a)return t;s.push(t)}return s},set:function(e,t){for(var n,r,i=e.options,o=C.makeArray(t),a=i.length;a--;)((r=i[a]).selected=C.inArray(C.valHooks.option.get(r),o)>-1)&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),C.each(["radio","checkbox"],(function(){C.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=C.inArray(C(e).val(),t)>-1}},g.checkOn||(C.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})})),g.focusin="onfocusin"in n;var xt=/^(?:focusinfocus|focusoutblur)$/,Ct=function(e){e.stopPropagation()};C.extend(C.event,{trigger:function(e,t,r,i){var o,a,s,u,c,l,f,d,h=[r||_],v=p.call(e,"type")?e.type:e,g=p.call(e,"namespace")?e.namespace.split("."):[];if(a=d=s=r=r||_,3!==r.nodeType&&8!==r.nodeType&&!xt.test(v+C.event.triggered)&&(v.indexOf(".")>-1&&(g=v.split("."),v=g.shift(),g.sort()),c=v.indexOf(":")<0&&"on"+v,(e=e[C.expando]?e:new C.Event(v,"object"==typeof e&&e)).isTrigger=i?2:3,e.namespace=g.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+g.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=r),t=null==t?[e]:C.makeArray(t,[e]),f=C.event.special[v]||{},i||!f.trigger||!1!==f.trigger.apply(r,t))){if(!i&&!f.noBubble&&!y(r)){for(u=f.delegateType||v,xt.test(u+v)||(a=a.parentNode);a;a=a.parentNode)h.push(a),s=a;s===(r.ownerDocument||_)&&h.push(s.defaultView||s.parentWindow||n)}for(o=0;(a=h[o++])&&!e.isPropagationStopped();)d=a,e.type=o>1?u:f.bindType||v,(l=(J.get(a,"events")||Object.create(null))[e.type]&&J.get(a,"handle"))&&l.apply(a,t),(l=c&&a[c])&&l.apply&&K(a)&&(e.result=l.apply(a,t),!1===e.result&&e.preventDefault());return e.type=v,i||e.isDefaultPrevented()||f._default&&!1!==f._default.apply(h.pop(),t)||!K(r)||c&&m(r[v])&&!y(r)&&((s=r[c])&&(r[c]=null),C.event.triggered=v,e.isPropagationStopped()&&d.addEventListener(v,Ct),r[v](),e.isPropagationStopped()&&d.removeEventListener(v,Ct),C.event.triggered=void 0,s&&(r[c]=s)),e.result}},simulate:function(e,t,n){var r=C.extend(new C.Event,n,{type:e,isSimulated:!0});C.event.trigger(r,null,t)}}),C.fn.extend({trigger:function(e,t){return this.each((function(){C.event.trigger(e,t,this)}))},triggerHandler:function(e,t){var n=this[0];if(n)return C.event.trigger(e,t,n,!0)}}),g.focusin||C.each({focus:"focusin",blur:"focusout"},(function(e,t){var n=function(e){C.event.simulate(t,e.target,C.event.fix(e))};C.event.special[t]={setup:function(){var r=this.ownerDocument||this.document||this,i=J.access(r,t);i||r.addEventListener(e,n,!0),J.access(r,t,(i||0)+1)},teardown:function(){var r=this.ownerDocument||this.document||this,i=J.access(r,t)-1;i?J.access(r,t,i):(r.removeEventListener(e,n,!0),J.remove(r,t))}}}));var Et=n.location,Tt={guid:Date.now()},St=/\?/;C.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new n.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||C.error("Invalid XML: "+e),t};var At=/\[\]$/,kt=/\r?\n/g,Ot=/^(?:submit|button|image|reset|file)$/i,jt=/^(?:input|select|textarea|keygen)/i;function Nt(e,t,n,r){var i;if(Array.isArray(t))C.each(t,(function(t,i){n||At.test(e)?r(e,i):Nt(e+"["+("object"==typeof i&&null!=i?t:"")+"]",i,n,r)}));else if(n||"object"!==x(t))r(e,t);else for(i in t)Nt(e+"["+i+"]",t[i],n,r)}C.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!C.isPlainObject(e))C.each(e,(function(){i(this.name,this.value)}));else for(n in e)Nt(n,e[n],t,i);return r.join("&")},C.fn.extend({serialize:function(){return C.param(this.serializeArray())},serializeArray:function(){return this.map((function(){var e=C.prop(this,"elements");return e?C.makeArray(e):this})).filter((function(){var e=this.type;return this.name&&!C(this).is(":disabled")&&jt.test(this.nodeName)&&!Ot.test(e)&&(this.checked||!ve.test(e))})).map((function(e,t){var n=C(this).val();return null==n?null:Array.isArray(n)?C.map(n,(function(e){return{name:t.name,value:e.replace(kt,"\r\n")}})):{name:t.name,value:n.replace(kt,"\r\n")}})).get()}});var Dt=/%20/g,$t=/#.*$/,Lt=/([?&])_=[^&]*/,It=/^(.*?):[ \t]*([^\r\n]*)$/gm,Rt=/^(?:GET|HEAD)$/,Pt=/^\/\//,Mt={},Ft={},qt="*/".concat("*"),Ht=_.createElement("a");function Bt(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(P)||[];if(m(n))for(;r=o[i++];)"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function Ut(e,t,n,r){var i={},o=e===Ft;function a(s){var u;return i[s]=!0,C.each(e[s]||[],(function(e,s){var c=s(t,n,r);return"string"!=typeof c||o||i[c]?o?!(u=c):void 0:(t.dataTypes.unshift(c),a(c),!1)})),u}return a(t.dataTypes[0])||!i["*"]&&a("*")}function Wt(e,t){var n,r,i=C.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&C.extend(!0,e,r),e}Ht.href=Et.href,C.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Et.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Et.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":qt,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":C.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?Wt(Wt(e,C.ajaxSettings),t):Wt(C.ajaxSettings,e)},ajaxPrefilter:Bt(Mt),ajaxTransport:Bt(Ft),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var r,i,o,a,s,u,c,l,f,d,p=C.ajaxSetup({},t),h=p.context||p,v=p.context&&(h.nodeType||h.jquery)?C(h):C.event,g=C.Deferred(),m=C.Callbacks("once memory"),y=p.statusCode||{},b={},w={},x="canceled",E={readyState:0,getResponseHeader:function(e){var t;if(c){if(!a)for(a={};t=It.exec(o);)a[t[1].toLowerCase()+" "]=(a[t[1].toLowerCase()+" "]||[]).concat(t[2]);t=a[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return c?o:null},setRequestHeader:function(e,t){return null==c&&(e=w[e.toLowerCase()]=w[e.toLowerCase()]||e,b[e]=t),this},overrideMimeType:function(e){return null==c&&(p.mimeType=e),this},statusCode:function(e){var t;if(e)if(c)E.always(e[E.status]);else for(t in e)y[t]=[y[t],e[t]];return this},abort:function(e){var t=e||x;return r&&r.abort(t),T(0,t),this}};if(g.promise(E),p.url=((e||p.url||Et.href)+"").replace(Pt,Et.protocol+"//"),p.type=t.method||t.type||p.method||p.type,p.dataTypes=(p.dataType||"*").toLowerCase().match(P)||[""],null==p.crossDomain){u=_.createElement("a");try{u.href=p.url,u.href=u.href,p.crossDomain=Ht.protocol+"//"+Ht.host!=u.protocol+"//"+u.host}catch(e){p.crossDomain=!0}}if(p.data&&p.processData&&"string"!=typeof p.data&&(p.data=C.param(p.data,p.traditional)),Ut(Mt,p,t,E),c)return E;for(f in(l=C.event&&p.global)&&0==C.active++&&C.event.trigger("ajaxStart"),p.type=p.type.toUpperCase(),p.hasContent=!Rt.test(p.type),i=p.url.replace($t,""),p.hasContent?p.data&&p.processData&&0===(p.contentType||"").indexOf("application/x-www-form-urlencoded")&&(p.data=p.data.replace(Dt,"+")):(d=p.url.slice(i.length),p.data&&(p.processData||"string"==typeof p.data)&&(i+=(St.test(i)?"&":"?")+p.data,delete p.data),!1===p.cache&&(i=i.replace(Lt,"$1"),d=(St.test(i)?"&":"?")+"_="+Tt.guid+++d),p.url=i+d),p.ifModified&&(C.lastModified[i]&&E.setRequestHeader("If-Modified-Since",C.lastModified[i]),C.etag[i]&&E.setRequestHeader("If-None-Match",C.etag[i])),(p.data&&p.hasContent&&!1!==p.contentType||t.contentType)&&E.setRequestHeader("Content-Type",p.contentType),E.setRequestHeader("Accept",p.dataTypes[0]&&p.accepts[p.dataTypes[0]]?p.accepts[p.dataTypes[0]]+("*"!==p.dataTypes[0]?", "+qt+"; q=0.01":""):p.accepts["*"]),p.headers)E.setRequestHeader(f,p.headers[f]);if(p.beforeSend&&(!1===p.beforeSend.call(h,E,p)||c))return E.abort();if(x="abort",m.add(p.complete),E.done(p.success),E.fail(p.error),r=Ut(Ft,p,t,E)){if(E.readyState=1,l&&v.trigger("ajaxSend",[E,p]),c)return E;p.async&&p.timeout>0&&(s=n.setTimeout((function(){E.abort("timeout")}),p.timeout));try{c=!1,r.send(b,T)}catch(e){if(c)throw e;T(-1,e)}}else T(-1,"No Transport");function T(e,t,a,u){var f,d,_,b,w,x=t;c||(c=!0,s&&n.clearTimeout(s),r=void 0,o=u||"",E.readyState=e>0?4:0,f=e>=200&&e<300||304===e,a&&(b=function(e,t,n){for(var r,i,o,a,s=e.contents,u=e.dataTypes;"*"===u[0];)u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(p,E,a)),!f&&C.inArray("script",p.dataTypes)>-1&&(p.converters["text script"]=function(){}),b=function(e,t,n,r){var i,o,a,s,u,c={},l=e.dataTypes.slice();if(l[1])for(a in e.converters)c[a.toLowerCase()]=e.converters[a];for(o=l.shift();o;)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=l.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=c[u+" "+o]||c["* "+o]))for(i in c)if((s=i.split(" "))[1]===o&&(a=c[u+" "+s[0]]||c["* "+s[0]])){!0===a?a=c[i]:!0!==c[i]&&(o=s[0],l.unshift(s[1]));break}if(!0!==a)if(a&&e.throws)t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(p,b,E,f),f?(p.ifModified&&((w=E.getResponseHeader("Last-Modified"))&&(C.lastModified[i]=w),(w=E.getResponseHeader("etag"))&&(C.etag[i]=w)),204===e||"HEAD"===p.type?x="nocontent":304===e?x="notmodified":(x=b.state,d=b.data,f=!(_=b.error))):(_=x,!e&&x||(x="error",e<0&&(e=0))),E.status=e,E.statusText=(t||x)+"",f?g.resolveWith(h,[d,x,E]):g.rejectWith(h,[E,x,_]),E.statusCode(y),y=void 0,l&&v.trigger(f?"ajaxSuccess":"ajaxError",[E,p,f?d:_]),m.fireWith(h,[E,x]),l&&(v.trigger("ajaxComplete",[E,p]),--C.active||C.event.trigger("ajaxStop")))}return E},getJSON:function(e,t,n){return C.get(e,t,n,"json")},getScript:function(e,t){return C.get(e,void 0,t,"script")}}),C.each(["get","post"],(function(e,t){C[t]=function(e,n,r,i){return m(n)&&(i=i||r,r=n,n=void 0),C.ajax(C.extend({url:e,type:t,dataType:i,data:n,success:r},C.isPlainObject(e)&&e))}})),C.ajaxPrefilter((function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")})),C._evalUrl=function(e,t,n){return C.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){C.globalEval(e,t,n)}})},C.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=C(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map((function(){for(var e=this;e.firstElementChild;)e=e.firstElementChild;return e})).append(this)),this},wrapInner:function(e){return m(e)?this.each((function(t){C(this).wrapInner(e.call(this,t))})):this.each((function(){var t=C(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)}))},wrap:function(e){var t=m(e);return this.each((function(n){C(this).wrapAll(t?e.call(this,n):e)}))},unwrap:function(e){return this.parent(e).not("body").each((function(){C(this).replaceWith(this.childNodes)})),this}}),C.expr.pseudos.hidden=function(e){return!C.expr.pseudos.visible(e)},C.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},C.ajaxSettings.xhr=function(){try{return new n.XMLHttpRequest}catch(e){}};var zt={0:200,1223:204},Vt=C.ajaxSettings.xhr();g.cors=!!Vt&&"withCredentials"in Vt,g.ajax=Vt=!!Vt,C.ajaxTransport((function(e){var t,r;if(g.cors||Vt&&!e.crossDomain)return{send:function(i,o){var a,s=e.xhr();if(s.open(e.type,e.url,e.async,e.username,e.password),e.xhrFields)for(a in e.xhrFields)s[a]=e.xhrFields[a];for(a in e.mimeType&&s.overrideMimeType&&s.overrideMimeType(e.mimeType),e.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest"),i)s.setRequestHeader(a,i[a]);t=function(e){return function(){t&&(t=r=s.onload=s.onerror=s.onabort=s.ontimeout=s.onreadystatechange=null,"abort"===e?s.abort():"error"===e?"number"!=typeof s.status?o(0,"error"):o(s.status,s.statusText):o(zt[s.status]||s.status,s.statusText,"text"!==(s.responseType||"text")||"string"!=typeof s.responseText?{binary:s.response}:{text:s.responseText},s.getAllResponseHeaders()))}},s.onload=t(),r=s.onerror=s.ontimeout=t("error"),void 0!==s.onabort?s.onabort=r:s.onreadystatechange=function(){4===s.readyState&&n.setTimeout((function(){t&&r()}))},t=t("abort");try{s.send(e.hasContent&&e.data||null)}catch(e){if(t)throw e}},abort:function(){t&&t()}}})),C.ajaxPrefilter((function(e){e.crossDomain&&(e.contents.script=!1)})),C.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return C.globalEval(e),e}}}),C.ajaxPrefilter("script",(function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")})),C.ajaxTransport("script",(function(e){var t,n;if(e.crossDomain||e.scriptAttrs)return{send:function(r,i){t=C("<script>").attr(e.scriptAttrs||{}).prop({charset:e.scriptCharset,src:e.url}).on("load error",n=function(e){t.remove(),n=null,e&&i("error"===e.type?404:200,e.type)}),_.head.appendChild(t[0])},abort:function(){n&&n()}}}));var Qt,Xt=[],Kt=/(=)\?(?=&|$)|\?\?/;C.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Xt.pop()||C.expando+"_"+Tt.guid++;return this[e]=!0,e}}),C.ajaxPrefilter("json jsonp",(function(e,t,r){var i,o,a,s=!1!==e.jsonp&&(Kt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Kt.test(e.data)&&"data");if(s||"jsonp"===e.dataTypes[0])return i=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,s?e[s]=e[s].replace(Kt,"$1"+i):!1!==e.jsonp&&(e.url+=(St.test(e.url)?"&":"?")+e.jsonp+"="+i),e.converters["script json"]=function(){return a||C.error(i+" was not called"),a[0]},e.dataTypes[0]="json",o=n[i],n[i]=function(){a=arguments},r.always((function(){void 0===o?C(n).removeProp(i):n[i]=o,e[i]&&(e.jsonpCallback=t.jsonpCallback,Xt.push(i)),a&&m(o)&&o(a[0]),a=o=void 0})),"script"})),g.createHTMLDocument=((Qt=_.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Qt.childNodes.length),C.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(g.createHTMLDocument?((r=(t=_.implementation.createHTMLDocument("")).createElement("base")).href=_.location.href,t.head.appendChild(r)):t=_),o=!n&&[],(i=j.exec(e))?[t.createElement(i[1])]:(i=xe([e],t,o),o&&o.length&&C(o).remove(),C.merge([],i.childNodes)));var r,i,o},C.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return s>-1&&(r=yt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),a.length>0&&C.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done((function(e){o=arguments,a.html(r?C("<div>").append(C.parseHTML(e)).find(r):e)})).always(n&&function(e,t){a.each((function(){n.apply(this,o||[e.responseText,t,e])}))}),this},C.expr.pseudos.animated=function(e){return C.grep(C.timers,(function(t){return e===t.elem})).length},C.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,c=C.css(e,"position"),l=C(e),f={};"static"===c&&(e.style.position="relative"),s=l.offset(),o=C.css(e,"top"),u=C.css(e,"left"),("absolute"===c||"fixed"===c)&&(o+u).indexOf("auto")>-1?(a=(r=l.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,C.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):("number"==typeof f.top&&(f.top+="px"),"number"==typeof f.left&&(f.left+="px"),l.css(f))}},C.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each((function(t){C.offset.setOffset(this,e,t)}));var t,n,r=this[0];return r?r.getClientRects().length?(t=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:t.top+n.pageYOffset,left:t.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===C.css(r,"position"))t=r.getBoundingClientRect();else{for(t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;e&&(e===n.body||e===n.documentElement)&&"static"===C.css(e,"position");)e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=C(e).offset()).top+=C.css(e,"borderTopWidth",!0),i.left+=C.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-C.css(r,"marginTop",!0),left:t.left-i.left-C.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map((function(){for(var e=this.offsetParent;e&&"static"===C.css(e,"position");)e=e.offsetParent;return e||oe}))}}),C.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},(function(e,t){var n="pageYOffset"===t;C.fn[e]=function(r){return W(this,(function(e,r,i){var o;if(y(e)?o=e:9===e.nodeType&&(o=e.defaultView),void 0===i)return o?o[t]:e[r];o?o.scrollTo(n?o.pageXOffset:i,n?i:o.pageYOffset):e[r]=i}),e,r,arguments.length)}})),C.each(["top","left"],(function(e,t){C.cssHooks[t]=Ve(g.pixelPosition,(function(e,n){if(n)return n=ze(e,t),He.test(n)?C(e).position()[t]+"px":n}))})),C.each({Height:"height",Width:"width"},(function(e,t){C.each({padding:"inner"+e,content:t,"":"outer"+e},(function(n,r){C.fn[r]=function(i,o){var a=arguments.length&&(n||"boolean"!=typeof i),s=n||(!0===i||!0===o?"margin":"border");return W(this,(function(t,n,i){var o;return y(t)?0===r.indexOf("outer")?t["inner"+e]:t.document.documentElement["client"+e]:9===t.nodeType?(o=t.documentElement,Math.max(t.body["scroll"+e],o["scroll"+e],t.body["offset"+e],o["offset"+e],o["client"+e])):void 0===i?C.css(t,n,s):C.style(t,n,i,s)}),t,a?i:void 0,a)}}))})),C.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],(function(e,t){C.fn[t]=function(e){return this.on(t,e)}})),C.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),C.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),(function(e,t){C.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}));var Yt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;C.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||C.guid++,i},C.holdReady=function(e){e?C.readyWait++:C.ready(!0)},C.isArray=Array.isArray,C.parseJSON=JSON.parse,C.nodeName=O,C.isFunction=m,C.isWindow=y,C.camelCase=X,C.type=x,C.now=Date.now,C.isNumeric=function(e){var t=C.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},C.trim=function(e){return null==e?"":(e+"").replace(Yt,"")},void 0===(r=function(){return C}.apply(t,[]))||(e.exports=r);var Jt=n.jQuery,Gt=n.$;return C.noConflict=function(e){return n.$===C&&(n.$=Gt),e&&n.jQuery===C&&(n.jQuery=Jt),C},void 0===i&&(n.jQuery=n.$=C),C}))},function(e,t,n){"use strict";e.exports=function(e,t){return function(){for(var n=new Array(arguments.length),r=0;r<n.length;r++)n[r]=arguments[r];return e.apply(t,n)}}},function(e,t,n){"use strict";var r=n(0);function i(e){return encodeURIComponent(e).replace(/%40/gi,"@").replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}e.exports=function(e,t,n){if(!t)return e;var o;if(n)o=n(t);else if(r.isURLSearchParams(t))o=t.toString();else{var a=[];r.forEach(t,(function(e,t){null!=e&&(r.isArray(e)?t+="[]":e=[e],r.forEach(e,(function(e){r.isDate(e)?e=e.toISOString():r.isObject(e)&&(e=JSON.stringify(e)),a.push(i(t)+"="+i(e))})))})),o=a.join("&")}if(o){var s=e.indexOf("#");-1!==s&&(e=e.slice(0,s)),e+=(-1===e.indexOf("?")?"?":"&")+o}return e}},function(e,t,n){"use strict";e.exports=function(e){return!(!e||!e.__CANCEL__)}},function(e,t,n){"use strict";(function(t){var r=n(0),i=n(25),o={"Content-Type":"application/x-www-form-urlencoded"};function a(e,t){!r.isUndefined(e)&&r.isUndefined(e["Content-Type"])&&(e["Content-Type"]=t)}var s,u={adapter:(("undefined"!=typeof XMLHttpRequest||void 0!==t&&"[object process]"===Object.prototype.toString.call(t))&&(s=n(9)),s),transformRequest:[function(e,t){return i(t,"Accept"),i(t,"Content-Type"),r.isFormData(e)||r.isArrayBuffer(e)||r.isBuffer(e)||r.isStream(e)||r.isFile(e)||r.isBlob(e)?e:r.isArrayBufferView(e)?e.buffer:r.isURLSearchParams(e)?(a(t,"application/x-www-form-urlencoded;charset=utf-8"),e.toString()):r.isObject(e)?(a(t,"application/json;charset=utf-8"),JSON.stringify(e)):e}],transformResponse:[function(e){if("string"==typeof e)try{e=JSON.parse(e)}catch(e){}return e}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,validateStatus:function(e){return e>=200&&e<300}};u.headers={common:{Accept:"application/json, text/plain, */*"}},r.forEach(["delete","get","head"],(function(e){u.headers[e]={}})),r.forEach(["post","put","patch"],(function(e){u.headers[e]=r.merge(o)})),e.exports=u}).call(this,n(8))},function(e,t){var n,r,i=e.exports={};function o(){throw new Error("setTimeout has not been defined")}function a(){throw new Error("clearTimeout has not been defined")}function s(e){if(n===setTimeout)return setTimeout(e,0);if((n===o||!n)&&setTimeout)return n=setTimeout,setTimeout(e,0);try{return n(e,0)}catch(t){try{return n.call(null,e,0)}catch(t){return n.call(this,e,0)}}}!function(){try{n="function"==typeof setTimeout?setTimeout:o}catch(e){n=o}try{r="function"==typeof clearTimeout?clearTimeout:a}catch(e){r=a}}();var u,c=[],l=!1,f=-1;function d(){l&&u&&(l=!1,u.length?c=u.concat(c):f=-1,c.length&&p())}function p(){if(!l){var e=s(d);l=!0;for(var t=c.length;t;){for(u=c,c=[];++f<t;)u&&u[f].run();f=-1,t=c.length}u=null,l=!1,function(e){if(r===clearTimeout)return clearTimeout(e);if((r===a||!r)&&clearTimeout)return r=clearTimeout,clearTimeout(e);try{r(e)}catch(t){try{return r.call(null,e)}catch(t){return r.call(this,e)}}}(e)}}function h(e,t){this.fun=e,this.array=t}function v(){}i.nextTick=function(e){var t=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];c.push(new h(e,t)),1!==c.length||l||s(p)},h.prototype.run=function(){this.fun.apply(null,this.array)},i.title="browser",i.browser=!0,i.env={},i.argv=[],i.version="",i.versions={},i.on=v,i.addListener=v,i.once=v,i.off=v,i.removeListener=v,i.removeAllListeners=v,i.emit=v,i.prependListener=v,i.prependOnceListener=v,i.listeners=function(e){return[]},i.binding=function(e){throw new Error("process.binding is not supported")},i.cwd=function(){return"/"},i.chdir=function(e){throw new Error("process.chdir is not supported")},i.umask=function(){return 0}},function(e,t,n){"use strict";var r=n(0),i=n(26),o=n(5),a=n(28),s=n(31),u=n(32),c=n(10);e.exports=function(e){return new Promise((function(t,l){var f=e.data,d=e.headers;r.isFormData(f)&&delete d["Content-Type"];var p=new XMLHttpRequest;if(e.auth){var h=e.auth.username||"",v=e.auth.password||"";d.Authorization="Basic "+btoa(h+":"+v)}var g=a(e.baseURL,e.url);if(p.open(e.method.toUpperCase(),o(g,e.params,e.paramsSerializer),!0),p.timeout=e.timeout,p.onreadystatechange=function(){if(p&&4===p.readyState&&(0!==p.status||p.responseURL&&0===p.responseURL.indexOf("file:"))){var n="getAllResponseHeaders"in p?s(p.getAllResponseHeaders()):null,r={data:e.responseType&&"text"!==e.responseType?p.response:p.responseText,status:p.status,statusText:p.statusText,headers:n,config:e,request:p};i(t,l,r),p=null}},p.onabort=function(){p&&(l(c("Request aborted",e,"ECONNABORTED",p)),p=null)},p.onerror=function(){l(c("Network Error",e,null,p)),p=null},p.ontimeout=function(){var t="timeout of "+e.timeout+"ms exceeded";e.timeoutErrorMessage&&(t=e.timeoutErrorMessage),l(c(t,e,"ECONNABORTED",p)),p=null},r.isStandardBrowserEnv()){var m=n(33),y=(e.withCredentials||u(g))&&e.xsrfCookieName?m.read(e.xsrfCookieName):void 0;y&&(d[e.xsrfHeaderName]=y)}if("setRequestHeader"in p&&r.forEach(d,(function(e,t){void 0===f&&"content-type"===t.toLowerCase()?delete d[t]:p.setRequestHeader(t,e)})),r.isUndefined(e.withCredentials)||(p.withCredentials=!!e.withCredentials),e.responseType)try{p.responseType=e.responseType}catch(t){if("json"!==e.responseType)throw t}"function"==typeof e.onDownloadProgress&&p.addEventListener("progress",e.onDownloadProgress),"function"==typeof e.onUploadProgress&&p.upload&&p.upload.addEventListener("progress",e.onUploadProgress),e.cancelToken&&e.cancelToken.promise.then((function(e){p&&(p.abort(),l(e),p=null)})),void 0===f&&(f=null),p.send(f)}))}},function(e,t,n){"use strict";var r=n(27);e.exports=function(e,t,n,i,o){var a=new Error(e);return r(a,t,n,i,o)}},function(e,t,n){"use strict";var r=n(0);e.exports=function(e,t){t=t||{};var n={},i=["url","method","params","data"],o=["headers","auth","proxy"],a=["baseURL","url","transformRequest","transformResponse","paramsSerializer","timeout","withCredentials","adapter","responseType","xsrfCookieName","xsrfHeaderName","onUploadProgress","onDownloadProgress","maxContentLength","validateStatus","maxRedirects","httpAgent","httpsAgent","cancelToken","socketPath"];r.forEach(i,(function(e){void 0!==t[e]&&(n[e]=t[e])})),r.forEach(o,(function(i){r.isObject(t[i])?n[i]=r.deepMerge(e[i],t[i]):void 0!==t[i]?n[i]=t[i]:r.isObject(e[i])?n[i]=r.deepMerge(e[i]):void 0!==e[i]&&(n[i]=e[i])})),r.forEach(a,(function(r){void 0!==t[r]?n[r]=t[r]:void 0!==e[r]&&(n[r]=e[r])}));var s=i.concat(o).concat(a),u=Object.keys(t).filter((function(e){return-1===s.indexOf(e)}));return r.forEach(u,(function(r){void 0!==t[r]?n[r]=t[r]:void 0!==e[r]&&(n[r]=e[r])})),n}},function(e,t,n){"use strict";function r(e){this.message=e}r.prototype.toString=function(){return"Cancel"+(this.message?": "+this.message:"")},r.prototype.__CANCEL__=!0,e.exports=r},function(e,t,n){n(14),e.exports=n(41)},function(e,t,n){n(15),window.Vue=n(36),Vue.component("example-component",n(40).default);new Vue({el:"#app"})},function(e,t,n){window._=n(16);try{window.Popper=n(2).default,window.$=window.jQuery=n(3),n(18)}catch(e){}window.axios=n(19),window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest"},function(e,t,n){(function(e,r){var i;(function(){var o="Expected a function",a="__lodash_placeholder__",s=[["ary",128],["bind",1],["bindKey",2],["curry",8],["curryRight",16],["flip",512],["partial",32],["partialRight",64],["rearg",256]],u="[object Arguments]",c="[object Array]",l="[object Boolean]",f="[object Date]",d="[object Error]",p="[object Function]",h="[object GeneratorFunction]",v="[object Map]",g="[object Number]",m="[object Object]",y="[object RegExp]",_="[object Set]",b="[object String]",w="[object Symbol]",x="[object WeakMap]",C="[object ArrayBuffer]",E="[object DataView]",T="[object Float32Array]",S="[object Float64Array]",A="[object Int8Array]",k="[object Int16Array]",O="[object Int32Array]",j="[object Uint8Array]",N="[object Uint16Array]",D="[object Uint32Array]",$=/\b__p \+= '';/g,L=/\b(__p \+=) '' \+/g,I=/(__e\(.*?\)|\b__t\)) \+\n'';/g,R=/&(?:amp|lt|gt|quot|#39);/g,P=/[&<>"']/g,M=RegExp(R.source),F=RegExp(P.source),q=/<%-([\s\S]+?)%>/g,H=/<%([\s\S]+?)%>/g,B=/<%=([\s\S]+?)%>/g,U=/\.|\[(?:[^[\]]*|(["'])(?:(?!\1)[^\\]|\\.)*?\1)\]/,W=/^\w*$/,z=/[^.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|$))/g,V=/[\\^$.*+?()[\]{}|]/g,Q=RegExp(V.source),X=/^\s+|\s+$/g,K=/^\s+/,Y=/\s+$/,J=/\{(?:\n\/\* \[wrapped with .+\] \*\/)?\n?/,G=/\{\n\/\* \[wrapped with (.+)\] \*/,Z=/,? & /,ee=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g,te=/\\(\\)?/g,ne=/\$\{([^\\}]*(?:\\.[^\\}]*)*)\}/g,re=/\w*$/,ie=/^[-+]0x[0-9a-f]+$/i,oe=/^0b[01]+$/i,ae=/^\[object .+?Constructor\]$/,se=/^0o[0-7]+$/i,ue=/^(?:0|[1-9]\d*)$/,ce=/[\xc0-\xd6\xd8-\xf6\xf8-\xff\u0100-\u017f]/g,le=/($^)/,fe=/['\n\r\u2028\u2029\\]/g,de="\\u0300-\\u036f\\ufe20-\\ufe2f\\u20d0-\\u20ff",pe="\\xac\\xb1\\xd7\\xf7\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf\\u2000-\\u206f \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",he="[\\ud800-\\udfff]",ve="["+pe+"]",ge="["+de+"]",me="\\d+",ye="[\\u2700-\\u27bf]",_e="[a-z\\xdf-\\xf6\\xf8-\\xff]",be="[^\\ud800-\\udfff"+pe+me+"\\u2700-\\u27bfa-z\\xdf-\\xf6\\xf8-\\xffA-Z\\xc0-\\xd6\\xd8-\\xde]",we="\\ud83c[\\udffb-\\udfff]",xe="[^\\ud800-\\udfff]",Ce="(?:\\ud83c[\\udde6-\\uddff]){2}",Ee="[\\ud800-\\udbff][\\udc00-\\udfff]",Te="[A-Z\\xc0-\\xd6\\xd8-\\xde]",Se="(?:"+_e+"|"+be+")",Ae="(?:"+Te+"|"+be+")",ke="(?:"+ge+"|"+we+")"+"?",Oe="[\\ufe0e\\ufe0f]?"+ke+("(?:\\u200d(?:"+[xe,Ce,Ee].join("|")+")[\\ufe0e\\ufe0f]?"+ke+")*"),je="(?:"+[ye,Ce,Ee].join("|")+")"+Oe,Ne="(?:"+[xe+ge+"?",ge,Ce,Ee,he].join("|")+")",De=RegExp("['’]","g"),$e=RegExp(ge,"g"),Le=RegExp(we+"(?="+we+")|"+Ne+Oe,"g"),Ie=RegExp([Te+"?"+_e+"+(?:['’](?:d|ll|m|re|s|t|ve))?(?="+[ve,Te,"$"].join("|")+")",Ae+"+(?:['’](?:D|LL|M|RE|S|T|VE))?(?="+[ve,Te+Se,"$"].join("|")+")",Te+"?"+Se+"+(?:['’](?:d|ll|m|re|s|t|ve))?",Te+"+(?:['’](?:D|LL|M|RE|S|T|VE))?","\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])","\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",me,je].join("|"),"g"),Re=RegExp("[\\u200d\\ud800-\\udfff"+de+"\\ufe0e\\ufe0f]"),Pe=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/,Me=["Array","Buffer","DataView","Date","Error","Float32Array","Float64Array","Function","Int8Array","Int16Array","Int32Array","Map","Math","Object","Promise","RegExp","Set","String","Symbol","TypeError","Uint8Array","Uint8ClampedArray","Uint16Array","Uint32Array","WeakMap","_","clearTimeout","isFinite","parseInt","setTimeout"],Fe=-1,qe={};qe[T]=qe[S]=qe[A]=qe[k]=qe[O]=qe[j]=qe["[object Uint8ClampedArray]"]=qe[N]=qe[D]=!0,qe[u]=qe[c]=qe[C]=qe[l]=qe[E]=qe[f]=qe[d]=qe[p]=qe[v]=qe[g]=qe[m]=qe[y]=qe[_]=qe[b]=qe[x]=!1;var He={};He[u]=He[c]=He[C]=He[E]=He[l]=He[f]=He[T]=He[S]=He[A]=He[k]=He[O]=He[v]=He[g]=He[m]=He[y]=He[_]=He[b]=He[w]=He[j]=He["[object Uint8ClampedArray]"]=He[N]=He[D]=!0,He[d]=He[p]=He[x]=!1;var Be={"\\":"\\","'":"'","\n":"n","\r":"r","\u2028":"u2028","\u2029":"u2029"},Ue=parseFloat,We=parseInt,ze="object"==typeof e&&e&&e.Object===Object&&e,Ve="object"==typeof self&&self&&self.Object===Object&&self,Qe=ze||Ve||Function("return this")(),Xe=t&&!t.nodeType&&t,Ke=Xe&&"object"==typeof r&&r&&!r.nodeType&&r,Ye=Ke&&Ke.exports===Xe,Je=Ye&&ze.process,Ge=function(){try{var e=Ke&&Ke.require&&Ke.require("util").types;return e||Je&&Je.binding&&Je.binding("util")}catch(e){}}(),Ze=Ge&&Ge.isArrayBuffer,et=Ge&&Ge.isDate,tt=Ge&&Ge.isMap,nt=Ge&&Ge.isRegExp,rt=Ge&&Ge.isSet,it=Ge&&Ge.isTypedArray;function ot(e,t,n){switch(n.length){case 0:return e.call(t);case 1:return e.call(t,n[0]);case 2:return e.call(t,n[0],n[1]);case 3:return e.call(t,n[0],n[1],n[2])}return e.apply(t,n)}function at(e,t,n,r){for(var i=-1,o=null==e?0:e.length;++i<o;){var a=e[i];t(r,a,n(a),e)}return r}function st(e,t){for(var n=-1,r=null==e?0:e.length;++n<r&&!1!==t(e[n],n,e););return e}function ut(e,t){for(var n=null==e?0:e.length;n--&&!1!==t(e[n],n,e););return e}function ct(e,t){for(var n=-1,r=null==e?0:e.length;++n<r;)if(!t(e[n],n,e))return!1;return!0}function lt(e,t){for(var n=-1,r=null==e?0:e.length,i=0,o=[];++n<r;){var a=e[n];t(a,n,e)&&(o[i++]=a)}return o}function ft(e,t){return!!(null==e?0:e.length)&&wt(e,t,0)>-1}function dt(e,t,n){for(var r=-1,i=null==e?0:e.length;++r<i;)if(n(t,e[r]))return!0;return!1}function pt(e,t){for(var n=-1,r=null==e?0:e.length,i=Array(r);++n<r;)i[n]=t(e[n],n,e);return i}function ht(e,t){for(var n=-1,r=t.length,i=e.length;++n<r;)e[i+n]=t[n];return e}function vt(e,t,n,r){var i=-1,o=null==e?0:e.length;for(r&&o&&(n=e[++i]);++i<o;)n=t(n,e[i],i,e);return n}function gt(e,t,n,r){var i=null==e?0:e.length;for(r&&i&&(n=e[--i]);i--;)n=t(n,e[i],i,e);return n}function mt(e,t){for(var n=-1,r=null==e?0:e.length;++n<r;)if(t(e[n],n,e))return!0;return!1}var yt=Tt("length");function _t(e,t,n){var r;return n(e,(function(e,n,i){if(t(e,n,i))return r=n,!1})),r}function bt(e,t,n,r){for(var i=e.length,o=n+(r?1:-1);r?o--:++o<i;)if(t(e[o],o,e))return o;return-1}function wt(e,t,n){return t==t?function(e,t,n){var r=n-1,i=e.length;for(;++r<i;)if(e[r]===t)return r;return-1}(e,t,n):bt(e,Ct,n)}function xt(e,t,n,r){for(var i=n-1,o=e.length;++i<o;)if(r(e[i],t))return i;return-1}function Ct(e){return e!=e}function Et(e,t){var n=null==e?0:e.length;return n?kt(e,t)/n:NaN}function Tt(e){return function(t){return null==t?void 0:t[e]}}function St(e){return function(t){return null==e?void 0:e[t]}}function At(e,t,n,r,i){return i(e,(function(e,i,o){n=r?(r=!1,e):t(n,e,i,o)})),n}function kt(e,t){for(var n,r=-1,i=e.length;++r<i;){var o=t(e[r]);void 0!==o&&(n=void 0===n?o:n+o)}return n}function Ot(e,t){for(var n=-1,r=Array(e);++n<e;)r[n]=t(n);return r}function jt(e){return function(t){return e(t)}}function Nt(e,t){return pt(t,(function(t){return e[t]}))}function Dt(e,t){return e.has(t)}function $t(e,t){for(var n=-1,r=e.length;++n<r&&wt(t,e[n],0)>-1;);return n}function Lt(e,t){for(var n=e.length;n--&&wt(t,e[n],0)>-1;);return n}function It(e,t){for(var n=e.length,r=0;n--;)e[n]===t&&++r;return r}var Rt=St({"À":"A","Á":"A","Â":"A","Ã":"A","Ä":"A","Å":"A","à":"a","á":"a","â":"a","ã":"a","ä":"a","å":"a","Ç":"C","ç":"c","Ð":"D","ð":"d","È":"E","É":"E","Ê":"E","Ë":"E","è":"e","é":"e","ê":"e","ë":"e","Ì":"I","Í":"I","Î":"I","Ï":"I","ì":"i","í":"i","î":"i","ï":"i","Ñ":"N","ñ":"n","Ò":"O","Ó":"O","Ô":"O","Õ":"O","Ö":"O","Ø":"O","ò":"o","ó":"o","ô":"o","õ":"o","ö":"o","ø":"o","Ù":"U","Ú":"U","Û":"U","Ü":"U","ù":"u","ú":"u","û":"u","ü":"u","Ý":"Y","ý":"y","ÿ":"y","Æ":"Ae","æ":"ae","Þ":"Th","þ":"th","ß":"ss","Ā":"A","Ă":"A","Ą":"A","ā":"a","ă":"a","ą":"a","Ć":"C","Ĉ":"C","Ċ":"C","Č":"C","ć":"c","ĉ":"c","ċ":"c","č":"c","Ď":"D","Đ":"D","ď":"d","đ":"d","Ē":"E","Ĕ":"E","Ė":"E","Ę":"E","Ě":"E","ē":"e","ĕ":"e","ė":"e","ę":"e","ě":"e","Ĝ":"G","Ğ":"G","Ġ":"G","Ģ":"G","ĝ":"g","ğ":"g","ġ":"g","ģ":"g","Ĥ":"H","Ħ":"H","ĥ":"h","ħ":"h","Ĩ":"I","Ī":"I","Ĭ":"I","Į":"I","İ":"I","ĩ":"i","ī":"i","ĭ":"i","į":"i","ı":"i","Ĵ":"J","ĵ":"j","Ķ":"K","ķ":"k","ĸ":"k","Ĺ":"L","Ļ":"L","Ľ":"L","Ŀ":"L","Ł":"L","ĺ":"l","ļ":"l","ľ":"l","ŀ":"l","ł":"l","Ń":"N","Ņ":"N","Ň":"N","Ŋ":"N","ń":"n","ņ":"n","ň":"n","ŋ":"n","Ō":"O","Ŏ":"O","Ő":"O","ō":"o","ŏ":"o","ő":"o","Ŕ":"R","Ŗ":"R","Ř":"R","ŕ":"r","ŗ":"r","ř":"r","Ś":"S","Ŝ":"S","Ş":"S","Š":"S","ś":"s","ŝ":"s","ş":"s","š":"s","Ţ":"T","Ť":"T","Ŧ":"T","ţ":"t","ť":"t","ŧ":"t","Ũ":"U","Ū":"U","Ŭ":"U","Ů":"U","Ű":"U","Ų":"U","ũ":"u","ū":"u","ŭ":"u","ů":"u","ű":"u","ų":"u","Ŵ":"W","ŵ":"w","Ŷ":"Y","ŷ":"y","Ÿ":"Y","Ź":"Z","Ż":"Z","Ž":"Z","ź":"z","ż":"z","ž":"z","Ĳ":"IJ","ĳ":"ij","Œ":"Oe","œ":"oe","ŉ":"'n","ſ":"s"}),Pt=St({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"});function Mt(e){return"\\"+Be[e]}function Ft(e){return Re.test(e)}function qt(e){var t=-1,n=Array(e.size);return e.forEach((function(e,r){n[++t]=[r,e]})),n}function Ht(e,t){return function(n){return e(t(n))}}function Bt(e,t){for(var n=-1,r=e.length,i=0,o=[];++n<r;){var s=e[n];s!==t&&s!==a||(e[n]=a,o[i++]=n)}return o}function Ut(e){var t=-1,n=Array(e.size);return e.forEach((function(e){n[++t]=e})),n}function Wt(e){var t=-1,n=Array(e.size);return e.forEach((function(e){n[++t]=[e,e]})),n}function zt(e){return Ft(e)?function(e){var t=Le.lastIndex=0;for(;Le.test(e);)++t;return t}(e):yt(e)}function Vt(e){return Ft(e)?function(e){return e.match(Le)||[]}(e):function(e){return e.split("")}(e)}var Qt=St({"&amp;":"&","&lt;":"<","&gt;":">","&quot;":'"',"&#39;":"'"});var Xt=function e(t){var n,r=(t=null==t?Qe:Xt.defaults(Qe.Object(),t,Xt.pick(Qe,Me))).Array,i=t.Date,de=t.Error,pe=t.Function,he=t.Math,ve=t.Object,ge=t.RegExp,me=t.String,ye=t.TypeError,_e=r.prototype,be=pe.prototype,we=ve.prototype,xe=t["__core-js_shared__"],Ce=be.toString,Ee=we.hasOwnProperty,Te=0,Se=(n=/[^.]+$/.exec(xe&&xe.keys&&xe.keys.IE_PROTO||""))?"Symbol(src)_1."+n:"",Ae=we.toString,ke=Ce.call(ve),Oe=Qe._,je=ge("^"+Ce.call(Ee).replace(V,"\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,"$1.*?")+"$"),Ne=Ye?t.Buffer:void 0,Le=t.Symbol,Re=t.Uint8Array,Be=Ne?Ne.allocUnsafe:void 0,ze=Ht(ve.getPrototypeOf,ve),Ve=ve.create,Xe=we.propertyIsEnumerable,Ke=_e.splice,Je=Le?Le.isConcatSpreadable:void 0,Ge=Le?Le.iterator:void 0,yt=Le?Le.toStringTag:void 0,St=function(){try{var e=Zi(ve,"defineProperty");return e({},"",{}),e}catch(e){}}(),Kt=t.clearTimeout!==Qe.clearTimeout&&t.clearTimeout,Yt=i&&i.now!==Qe.Date.now&&i.now,Jt=t.setTimeout!==Qe.setTimeout&&t.setTimeout,Gt=he.ceil,Zt=he.floor,en=ve.getOwnPropertySymbols,tn=Ne?Ne.isBuffer:void 0,nn=t.isFinite,rn=_e.join,on=Ht(ve.keys,ve),an=he.max,sn=he.min,un=i.now,cn=t.parseInt,ln=he.random,fn=_e.reverse,dn=Zi(t,"DataView"),pn=Zi(t,"Map"),hn=Zi(t,"Promise"),vn=Zi(t,"Set"),gn=Zi(t,"WeakMap"),mn=Zi(ve,"create"),yn=gn&&new gn,_n={},bn=Ao(dn),wn=Ao(pn),xn=Ao(hn),Cn=Ao(vn),En=Ao(gn),Tn=Le?Le.prototype:void 0,Sn=Tn?Tn.valueOf:void 0,An=Tn?Tn.toString:void 0;function kn(e){if(Wa(e)&&!$a(e)&&!(e instanceof Dn)){if(e instanceof Nn)return e;if(Ee.call(e,"__wrapped__"))return ko(e)}return new Nn(e)}var On=function(){function e(){}return function(t){if(!Ua(t))return{};if(Ve)return Ve(t);e.prototype=t;var n=new e;return e.prototype=void 0,n}}();function jn(){}function Nn(e,t){this.__wrapped__=e,this.__actions__=[],this.__chain__=!!t,this.__index__=0,this.__values__=void 0}function Dn(e){this.__wrapped__=e,this.__actions__=[],this.__dir__=1,this.__filtered__=!1,this.__iteratees__=[],this.__takeCount__=4294967295,this.__views__=[]}function $n(e){var t=-1,n=null==e?0:e.length;for(this.clear();++t<n;){var r=e[t];this.set(r[0],r[1])}}function Ln(e){var t=-1,n=null==e?0:e.length;for(this.clear();++t<n;){var r=e[t];this.set(r[0],r[1])}}function In(e){var t=-1,n=null==e?0:e.length;for(this.clear();++t<n;){var r=e[t];this.set(r[0],r[1])}}function Rn(e){var t=-1,n=null==e?0:e.length;for(this.__data__=new In;++t<n;)this.add(e[t])}function Pn(e){var t=this.__data__=new Ln(e);this.size=t.size}function Mn(e,t){var n=$a(e),r=!n&&Da(e),i=!n&&!r&&Pa(e),o=!n&&!r&&!i&&Ga(e),a=n||r||i||o,s=a?Ot(e.length,me):[],u=s.length;for(var c in e)!t&&!Ee.call(e,c)||a&&("length"==c||i&&("offset"==c||"parent"==c)||o&&("buffer"==c||"byteLength"==c||"byteOffset"==c)||ao(c,u))||s.push(c);return s}function Fn(e){var t=e.length;return t?e[Rr(0,t-1)]:void 0}function qn(e,t){return Eo(mi(e),Kn(t,0,e.length))}function Hn(e){return Eo(mi(e))}function Bn(e,t,n){(void 0!==n&&!Oa(e[t],n)||void 0===n&&!(t in e))&&Qn(e,t,n)}function Un(e,t,n){var r=e[t];Ee.call(e,t)&&Oa(r,n)&&(void 0!==n||t in e)||Qn(e,t,n)}function Wn(e,t){for(var n=e.length;n--;)if(Oa(e[n][0],t))return n;return-1}function zn(e,t,n,r){return er(e,(function(e,i,o){t(r,e,n(e),o)})),r}function Vn(e,t){return e&&yi(t,bs(t),e)}function Qn(e,t,n){"__proto__"==t&&St?St(e,t,{configurable:!0,enumerable:!0,value:n,writable:!0}):e[t]=n}function Xn(e,t){for(var n=-1,i=t.length,o=r(i),a=null==e;++n<i;)o[n]=a?void 0:vs(e,t[n]);return o}function Kn(e,t,n){return e==e&&(void 0!==n&&(e=e<=n?e:n),void 0!==t&&(e=e>=t?e:t)),e}function Yn(e,t,n,r,i,o){var a,s=1&t,c=2&t,d=4&t;if(n&&(a=i?n(e,r,i,o):n(e)),void 0!==a)return a;if(!Ua(e))return e;var x=$a(e);if(x){if(a=function(e){var t=e.length,n=new e.constructor(t);t&&"string"==typeof e[0]&&Ee.call(e,"index")&&(n.index=e.index,n.input=e.input);return n}(e),!s)return mi(e,a)}else{var $=no(e),L=$==p||$==h;if(Pa(e))return fi(e,s);if($==m||$==u||L&&!i){if(a=c||L?{}:io(e),!s)return c?function(e,t){return yi(e,to(e),t)}(e,function(e,t){return e&&yi(t,ws(t),e)}(a,e)):function(e,t){return yi(e,eo(e),t)}(e,Vn(a,e))}else{if(!He[$])return i?e:{};a=function(e,t,n){var r=e.constructor;switch(t){case C:return di(e);case l:case f:return new r(+e);case E:return function(e,t){var n=t?di(e.buffer):e.buffer;return new e.constructor(n,e.byteOffset,e.byteLength)}(e,n);case T:case S:case A:case k:case O:case j:case"[object Uint8ClampedArray]":case N:case D:return pi(e,n);case v:return new r;case g:case b:return new r(e);case y:return function(e){var t=new e.constructor(e.source,re.exec(e));return t.lastIndex=e.lastIndex,t}(e);case _:return new r;case w:return i=e,Sn?ve(Sn.call(i)):{}}var i}(e,$,s)}}o||(o=new Pn);var I=o.get(e);if(I)return I;o.set(e,a),Ka(e)?e.forEach((function(r){a.add(Yn(r,t,n,r,e,o))})):za(e)&&e.forEach((function(r,i){a.set(i,Yn(r,t,n,i,e,o))}));var R=x?void 0:(d?c?Vi:zi:c?ws:bs)(e);return st(R||e,(function(r,i){R&&(r=e[i=r]),Un(a,i,Yn(r,t,n,i,e,o))})),a}function Jn(e,t,n){var r=n.length;if(null==e)return!r;for(e=ve(e);r--;){var i=n[r],o=t[i],a=e[i];if(void 0===a&&!(i in e)||!o(a))return!1}return!0}function Gn(e,t,n){if("function"!=typeof e)throw new ye(o);return bo((function(){e.apply(void 0,n)}),t)}function Zn(e,t,n,r){var i=-1,o=ft,a=!0,s=e.length,u=[],c=t.length;if(!s)return u;n&&(t=pt(t,jt(n))),r?(o=dt,a=!1):t.length>=200&&(o=Dt,a=!1,t=new Rn(t));e:for(;++i<s;){var l=e[i],f=null==n?l:n(l);if(l=r||0!==l?l:0,a&&f==f){for(var d=c;d--;)if(t[d]===f)continue e;u.push(l)}else o(t,f,r)||u.push(l)}return u}kn.templateSettings={escape:q,evaluate:H,interpolate:B,variable:"",imports:{_:kn}},kn.prototype=jn.prototype,kn.prototype.constructor=kn,Nn.prototype=On(jn.prototype),Nn.prototype.constructor=Nn,Dn.prototype=On(jn.prototype),Dn.prototype.constructor=Dn,$n.prototype.clear=function(){this.__data__=mn?mn(null):{},this.size=0},$n.prototype.delete=function(e){var t=this.has(e)&&delete this.__data__[e];return this.size-=t?1:0,t},$n.prototype.get=function(e){var t=this.__data__;if(mn){var n=t[e];return"__lodash_hash_undefined__"===n?void 0:n}return Ee.call(t,e)?t[e]:void 0},$n.prototype.has=function(e){var t=this.__data__;return mn?void 0!==t[e]:Ee.call(t,e)},$n.prototype.set=function(e,t){var n=this.__data__;return this.size+=this.has(e)?0:1,n[e]=mn&&void 0===t?"__lodash_hash_undefined__":t,this},Ln.prototype.clear=function(){this.__data__=[],this.size=0},Ln.prototype.delete=function(e){var t=this.__data__,n=Wn(t,e);return!(n<0)&&(n==t.length-1?t.pop():Ke.call(t,n,1),--this.size,!0)},Ln.prototype.get=function(e){var t=this.__data__,n=Wn(t,e);return n<0?void 0:t[n][1]},Ln.prototype.has=function(e){return Wn(this.__data__,e)>-1},Ln.prototype.set=function(e,t){var n=this.__data__,r=Wn(n,e);return r<0?(++this.size,n.push([e,t])):n[r][1]=t,this},In.prototype.clear=function(){this.size=0,this.__data__={hash:new $n,map:new(pn||Ln),string:new $n}},In.prototype.delete=function(e){var t=Ji(this,e).delete(e);return this.size-=t?1:0,t},In.prototype.get=function(e){return Ji(this,e).get(e)},In.prototype.has=function(e){return Ji(this,e).has(e)},In.prototype.set=function(e,t){var n=Ji(this,e),r=n.size;return n.set(e,t),this.size+=n.size==r?0:1,this},Rn.prototype.add=Rn.prototype.push=function(e){return this.__data__.set(e,"__lodash_hash_undefined__"),this},Rn.prototype.has=function(e){return this.__data__.has(e)},Pn.prototype.clear=function(){this.__data__=new Ln,this.size=0},Pn.prototype.delete=function(e){var t=this.__data__,n=t.delete(e);return this.size=t.size,n},Pn.prototype.get=function(e){return this.__data__.get(e)},Pn.prototype.has=function(e){return this.__data__.has(e)},Pn.prototype.set=function(e,t){var n=this.__data__;if(n instanceof Ln){var r=n.__data__;if(!pn||r.length<199)return r.push([e,t]),this.size=++n.size,this;n=this.__data__=new In(r)}return n.set(e,t),this.size=n.size,this};var er=wi(ur),tr=wi(cr,!0);function nr(e,t){var n=!0;return er(e,(function(e,r,i){return n=!!t(e,r,i)})),n}function rr(e,t,n){for(var r=-1,i=e.length;++r<i;){var o=e[r],a=t(o);if(null!=a&&(void 0===s?a==a&&!Ja(a):n(a,s)))var s=a,u=o}return u}function ir(e,t){var n=[];return er(e,(function(e,r,i){t(e,r,i)&&n.push(e)})),n}function or(e,t,n,r,i){var o=-1,a=e.length;for(n||(n=oo),i||(i=[]);++o<a;){var s=e[o];t>0&&n(s)?t>1?or(s,t-1,n,r,i):ht(i,s):r||(i[i.length]=s)}return i}var ar=xi(),sr=xi(!0);function ur(e,t){return e&&ar(e,t,bs)}function cr(e,t){return e&&sr(e,t,bs)}function lr(e,t){return lt(t,(function(t){return qa(e[t])}))}function fr(e,t){for(var n=0,r=(t=si(t,e)).length;null!=e&&n<r;)e=e[So(t[n++])];return n&&n==r?e:void 0}function dr(e,t,n){var r=t(e);return $a(e)?r:ht(r,n(e))}function pr(e){return null==e?void 0===e?"[object Undefined]":"[object Null]":yt&&yt in ve(e)?function(e){var t=Ee.call(e,yt),n=e[yt];try{e[yt]=void 0;var r=!0}catch(e){}var i=Ae.call(e);r&&(t?e[yt]=n:delete e[yt]);return i}(e):function(e){return Ae.call(e)}(e)}function hr(e,t){return e>t}function vr(e,t){return null!=e&&Ee.call(e,t)}function gr(e,t){return null!=e&&t in ve(e)}function mr(e,t,n){for(var i=n?dt:ft,o=e[0].length,a=e.length,s=a,u=r(a),c=1/0,l=[];s--;){var f=e[s];s&&t&&(f=pt(f,jt(t))),c=sn(f.length,c),u[s]=!n&&(t||o>=120&&f.length>=120)?new Rn(s&&f):void 0}f=e[0];var d=-1,p=u[0];e:for(;++d<o&&l.length<c;){var h=f[d],v=t?t(h):h;if(h=n||0!==h?h:0,!(p?Dt(p,v):i(l,v,n))){for(s=a;--s;){var g=u[s];if(!(g?Dt(g,v):i(e[s],v,n)))continue e}p&&p.push(v),l.push(h)}}return l}function yr(e,t,n){var r=null==(e=go(e,t=si(t,e)))?e:e[So(Fo(t))];return null==r?void 0:ot(r,e,n)}function _r(e){return Wa(e)&&pr(e)==u}function br(e,t,n,r,i){return e===t||(null==e||null==t||!Wa(e)&&!Wa(t)?e!=e&&t!=t:function(e,t,n,r,i,o){var a=$a(e),s=$a(t),p=a?c:no(e),h=s?c:no(t),x=(p=p==u?m:p)==m,T=(h=h==u?m:h)==m,S=p==h;if(S&&Pa(e)){if(!Pa(t))return!1;a=!0,x=!1}if(S&&!x)return o||(o=new Pn),a||Ga(e)?Ui(e,t,n,r,i,o):function(e,t,n,r,i,o,a){switch(n){case E:if(e.byteLength!=t.byteLength||e.byteOffset!=t.byteOffset)return!1;e=e.buffer,t=t.buffer;case C:return!(e.byteLength!=t.byteLength||!o(new Re(e),new Re(t)));case l:case f:case g:return Oa(+e,+t);case d:return e.name==t.name&&e.message==t.message;case y:case b:return e==t+"";case v:var s=qt;case _:var u=1&r;if(s||(s=Ut),e.size!=t.size&&!u)return!1;var c=a.get(e);if(c)return c==t;r|=2,a.set(e,t);var p=Ui(s(e),s(t),r,i,o,a);return a.delete(e),p;case w:if(Sn)return Sn.call(e)==Sn.call(t)}return!1}(e,t,p,n,r,i,o);if(!(1&n)){var A=x&&Ee.call(e,"__wrapped__"),k=T&&Ee.call(t,"__wrapped__");if(A||k){var O=A?e.value():e,j=k?t.value():t;return o||(o=new Pn),i(O,j,n,r,o)}}if(!S)return!1;return o||(o=new Pn),function(e,t,n,r,i,o){var a=1&n,s=zi(e),u=s.length,c=zi(t).length;if(u!=c&&!a)return!1;var l=u;for(;l--;){var f=s[l];if(!(a?f in t:Ee.call(t,f)))return!1}var d=o.get(e),p=o.get(t);if(d&&p)return d==t&&p==e;var h=!0;o.set(e,t),o.set(t,e);var v=a;for(;++l<u;){f=s[l];var g=e[f],m=t[f];if(r)var y=a?r(m,g,f,t,e,o):r(g,m,f,e,t,o);if(!(void 0===y?g===m||i(g,m,n,r,o):y)){h=!1;break}v||(v="constructor"==f)}if(h&&!v){var _=e.constructor,b=t.constructor;_==b||!("constructor"in e)||!("constructor"in t)||"function"==typeof _&&_ instanceof _&&"function"==typeof b&&b instanceof b||(h=!1)}return o.delete(e),o.delete(t),h}(e,t,n,r,i,o)}(e,t,n,r,br,i))}function wr(e,t,n,r){var i=n.length,o=i,a=!r;if(null==e)return!o;for(e=ve(e);i--;){var s=n[i];if(a&&s[2]?s[1]!==e[s[0]]:!(s[0]in e))return!1}for(;++i<o;){var u=(s=n[i])[0],c=e[u],l=s[1];if(a&&s[2]){if(void 0===c&&!(u in e))return!1}else{var f=new Pn;if(r)var d=r(c,l,u,e,t,f);if(!(void 0===d?br(l,c,3,r,f):d))return!1}}return!0}function xr(e){return!(!Ua(e)||(t=e,Se&&Se in t))&&(qa(e)?je:ae).test(Ao(e));var t}function Cr(e){return"function"==typeof e?e:null==e?Vs:"object"==typeof e?$a(e)?Or(e[0],e[1]):kr(e):tu(e)}function Er(e){if(!fo(e))return on(e);var t=[];for(var n in ve(e))Ee.call(e,n)&&"constructor"!=n&&t.push(n);return t}function Tr(e){if(!Ua(e))return function(e){var t=[];if(null!=e)for(var n in ve(e))t.push(n);return t}(e);var t=fo(e),n=[];for(var r in e)("constructor"!=r||!t&&Ee.call(e,r))&&n.push(r);return n}function Sr(e,t){return e<t}function Ar(e,t){var n=-1,i=Ia(e)?r(e.length):[];return er(e,(function(e,r,o){i[++n]=t(e,r,o)})),i}function kr(e){var t=Gi(e);return 1==t.length&&t[0][2]?ho(t[0][0],t[0][1]):function(n){return n===e||wr(n,e,t)}}function Or(e,t){return uo(e)&&po(t)?ho(So(e),t):function(n){var r=vs(n,e);return void 0===r&&r===t?gs(n,e):br(t,r,3)}}function jr(e,t,n,r,i){e!==t&&ar(t,(function(o,a){if(i||(i=new Pn),Ua(o))!function(e,t,n,r,i,o,a){var s=yo(e,n),u=yo(t,n),c=a.get(u);if(c)return void Bn(e,n,c);var l=o?o(s,u,n+"",e,t,a):void 0,f=void 0===l;if(f){var d=$a(u),p=!d&&Pa(u),h=!d&&!p&&Ga(u);l=u,d||p||h?$a(s)?l=s:Ra(s)?l=mi(s):p?(f=!1,l=fi(u,!0)):h?(f=!1,l=pi(u,!0)):l=[]:Qa(u)||Da(u)?(l=s,Da(s)?l=as(s):Ua(s)&&!qa(s)||(l=io(u))):f=!1}f&&(a.set(u,l),i(l,u,r,o,a),a.delete(u));Bn(e,n,l)}(e,t,a,n,jr,r,i);else{var s=r?r(yo(e,a),o,a+"",e,t,i):void 0;void 0===s&&(s=o),Bn(e,a,s)}}),ws)}function Nr(e,t){var n=e.length;if(n)return ao(t+=t<0?n:0,n)?e[t]:void 0}function Dr(e,t,n){t=t.length?pt(t,(function(e){return $a(e)?function(t){return fr(t,1===e.length?e[0]:e)}:e})):[Vs];var r=-1;return t=pt(t,jt(Yi())),function(e,t){var n=e.length;for(e.sort(t);n--;)e[n]=e[n].value;return e}(Ar(e,(function(e,n,i){return{criteria:pt(t,(function(t){return t(e)})),index:++r,value:e}})),(function(e,t){return function(e,t,n){var r=-1,i=e.criteria,o=t.criteria,a=i.length,s=n.length;for(;++r<a;){var u=hi(i[r],o[r]);if(u){if(r>=s)return u;var c=n[r];return u*("desc"==c?-1:1)}}return e.index-t.index}(e,t,n)}))}function $r(e,t,n){for(var r=-1,i=t.length,o={};++r<i;){var a=t[r],s=fr(e,a);n(s,a)&&Hr(o,si(a,e),s)}return o}function Lr(e,t,n,r){var i=r?xt:wt,o=-1,a=t.length,s=e;for(e===t&&(t=mi(t)),n&&(s=pt(e,jt(n)));++o<a;)for(var u=0,c=t[o],l=n?n(c):c;(u=i(s,l,u,r))>-1;)s!==e&&Ke.call(s,u,1),Ke.call(e,u,1);return e}function Ir(e,t){for(var n=e?t.length:0,r=n-1;n--;){var i=t[n];if(n==r||i!==o){var o=i;ao(i)?Ke.call(e,i,1):Zr(e,i)}}return e}function Rr(e,t){return e+Zt(ln()*(t-e+1))}function Pr(e,t){var n="";if(!e||t<1||t>9007199254740991)return n;do{t%2&&(n+=e),(t=Zt(t/2))&&(e+=e)}while(t);return n}function Mr(e,t){return wo(vo(e,t,Vs),e+"")}function Fr(e){return Fn(Os(e))}function qr(e,t){var n=Os(e);return Eo(n,Kn(t,0,n.length))}function Hr(e,t,n,r){if(!Ua(e))return e;for(var i=-1,o=(t=si(t,e)).length,a=o-1,s=e;null!=s&&++i<o;){var u=So(t[i]),c=n;if("__proto__"===u||"constructor"===u||"prototype"===u)return e;if(i!=a){var l=s[u];void 0===(c=r?r(l,u,s):void 0)&&(c=Ua(l)?l:ao(t[i+1])?[]:{})}Un(s,u,c),s=s[u]}return e}var Br=yn?function(e,t){return yn.set(e,t),e}:Vs,Ur=St?function(e,t){return St(e,"toString",{configurable:!0,enumerable:!1,value:Us(t),writable:!0})}:Vs;function Wr(e){return Eo(Os(e))}function zr(e,t,n){var i=-1,o=e.length;t<0&&(t=-t>o?0:o+t),(n=n>o?o:n)<0&&(n+=o),o=t>n?0:n-t>>>0,t>>>=0;for(var a=r(o);++i<o;)a[i]=e[i+t];return a}function Vr(e,t){var n;return er(e,(function(e,r,i){return!(n=t(e,r,i))})),!!n}function Qr(e,t,n){var r=0,i=null==e?r:e.length;if("number"==typeof t&&t==t&&i<=2147483647){for(;r<i;){var o=r+i>>>1,a=e[o];null!==a&&!Ja(a)&&(n?a<=t:a<t)?r=o+1:i=o}return i}return Xr(e,t,Vs,n)}function Xr(e,t,n,r){var i=0,o=null==e?0:e.length;if(0===o)return 0;for(var a=(t=n(t))!=t,s=null===t,u=Ja(t),c=void 0===t;i<o;){var l=Zt((i+o)/2),f=n(e[l]),d=void 0!==f,p=null===f,h=f==f,v=Ja(f);if(a)var g=r||h;else g=c?h&&(r||d):s?h&&d&&(r||!p):u?h&&d&&!p&&(r||!v):!p&&!v&&(r?f<=t:f<t);g?i=l+1:o=l}return sn(o,4294967294)}function Kr(e,t){for(var n=-1,r=e.length,i=0,o=[];++n<r;){var a=e[n],s=t?t(a):a;if(!n||!Oa(s,u)){var u=s;o[i++]=0===a?0:a}}return o}function Yr(e){return"number"==typeof e?e:Ja(e)?NaN:+e}function Jr(e){if("string"==typeof e)return e;if($a(e))return pt(e,Jr)+"";if(Ja(e))return An?An.call(e):"";var t=e+"";return"0"==t&&1/e==-1/0?"-0":t}function Gr(e,t,n){var r=-1,i=ft,o=e.length,a=!0,s=[],u=s;if(n)a=!1,i=dt;else if(o>=200){var c=t?null:Pi(e);if(c)return Ut(c);a=!1,i=Dt,u=new Rn}else u=t?[]:s;e:for(;++r<o;){var l=e[r],f=t?t(l):l;if(l=n||0!==l?l:0,a&&f==f){for(var d=u.length;d--;)if(u[d]===f)continue e;t&&u.push(f),s.push(l)}else i(u,f,n)||(u!==s&&u.push(f),s.push(l))}return s}function Zr(e,t){return null==(e=go(e,t=si(t,e)))||delete e[So(Fo(t))]}function ei(e,t,n,r){return Hr(e,t,n(fr(e,t)),r)}function ti(e,t,n,r){for(var i=e.length,o=r?i:-1;(r?o--:++o<i)&&t(e[o],o,e););return n?zr(e,r?0:o,r?o+1:i):zr(e,r?o+1:0,r?i:o)}function ni(e,t){var n=e;return n instanceof Dn&&(n=n.value()),vt(t,(function(e,t){return t.func.apply(t.thisArg,ht([e],t.args))}),n)}function ri(e,t,n){var i=e.length;if(i<2)return i?Gr(e[0]):[];for(var o=-1,a=r(i);++o<i;)for(var s=e[o],u=-1;++u<i;)u!=o&&(a[o]=Zn(a[o]||s,e[u],t,n));return Gr(or(a,1),t,n)}function ii(e,t,n){for(var r=-1,i=e.length,o=t.length,a={};++r<i;){var s=r<o?t[r]:void 0;n(a,e[r],s)}return a}function oi(e){return Ra(e)?e:[]}function ai(e){return"function"==typeof e?e:Vs}function si(e,t){return $a(e)?e:uo(e,t)?[e]:To(ss(e))}var ui=Mr;function ci(e,t,n){var r=e.length;return n=void 0===n?r:n,!t&&n>=r?e:zr(e,t,n)}var li=Kt||function(e){return Qe.clearTimeout(e)};function fi(e,t){if(t)return e.slice();var n=e.length,r=Be?Be(n):new e.constructor(n);return e.copy(r),r}function di(e){var t=new e.constructor(e.byteLength);return new Re(t).set(new Re(e)),t}function pi(e,t){var n=t?di(e.buffer):e.buffer;return new e.constructor(n,e.byteOffset,e.length)}function hi(e,t){if(e!==t){var n=void 0!==e,r=null===e,i=e==e,o=Ja(e),a=void 0!==t,s=null===t,u=t==t,c=Ja(t);if(!s&&!c&&!o&&e>t||o&&a&&u&&!s&&!c||r&&a&&u||!n&&u||!i)return 1;if(!r&&!o&&!c&&e<t||c&&n&&i&&!r&&!o||s&&n&&i||!a&&i||!u)return-1}return 0}function vi(e,t,n,i){for(var o=-1,a=e.length,s=n.length,u=-1,c=t.length,l=an(a-s,0),f=r(c+l),d=!i;++u<c;)f[u]=t[u];for(;++o<s;)(d||o<a)&&(f[n[o]]=e[o]);for(;l--;)f[u++]=e[o++];return f}function gi(e,t,n,i){for(var o=-1,a=e.length,s=-1,u=n.length,c=-1,l=t.length,f=an(a-u,0),d=r(f+l),p=!i;++o<f;)d[o]=e[o];for(var h=o;++c<l;)d[h+c]=t[c];for(;++s<u;)(p||o<a)&&(d[h+n[s]]=e[o++]);return d}function mi(e,t){var n=-1,i=e.length;for(t||(t=r(i));++n<i;)t[n]=e[n];return t}function yi(e,t,n,r){var i=!n;n||(n={});for(var o=-1,a=t.length;++o<a;){var s=t[o],u=r?r(n[s],e[s],s,n,e):void 0;void 0===u&&(u=e[s]),i?Qn(n,s,u):Un(n,s,u)}return n}function _i(e,t){return function(n,r){var i=$a(n)?at:zn,o=t?t():{};return i(n,e,Yi(r,2),o)}}function bi(e){return Mr((function(t,n){var r=-1,i=n.length,o=i>1?n[i-1]:void 0,a=i>2?n[2]:void 0;for(o=e.length>3&&"function"==typeof o?(i--,o):void 0,a&&so(n[0],n[1],a)&&(o=i<3?void 0:o,i=1),t=ve(t);++r<i;){var s=n[r];s&&e(t,s,r,o)}return t}))}function wi(e,t){return function(n,r){if(null==n)return n;if(!Ia(n))return e(n,r);for(var i=n.length,o=t?i:-1,a=ve(n);(t?o--:++o<i)&&!1!==r(a[o],o,a););return n}}function xi(e){return function(t,n,r){for(var i=-1,o=ve(t),a=r(t),s=a.length;s--;){var u=a[e?s:++i];if(!1===n(o[u],u,o))break}return t}}function Ci(e){return function(t){var n=Ft(t=ss(t))?Vt(t):void 0,r=n?n[0]:t.charAt(0),i=n?ci(n,1).join(""):t.slice(1);return r[e]()+i}}function Ei(e){return function(t){return vt(qs(Ds(t).replace(De,"")),e,"")}}function Ti(e){return function(){var t=arguments;switch(t.length){case 0:return new e;case 1:return new e(t[0]);case 2:return new e(t[0],t[1]);case 3:return new e(t[0],t[1],t[2]);case 4:return new e(t[0],t[1],t[2],t[3]);case 5:return new e(t[0],t[1],t[2],t[3],t[4]);case 6:return new e(t[0],t[1],t[2],t[3],t[4],t[5]);case 7:return new e(t[0],t[1],t[2],t[3],t[4],t[5],t[6])}var n=On(e.prototype),r=e.apply(n,t);return Ua(r)?r:n}}function Si(e){return function(t,n,r){var i=ve(t);if(!Ia(t)){var o=Yi(n,3);t=bs(t),n=function(e){return o(i[e],e,i)}}var a=e(t,n,r);return a>-1?i[o?t[a]:a]:void 0}}function Ai(e){return Wi((function(t){var n=t.length,r=n,i=Nn.prototype.thru;for(e&&t.reverse();r--;){var a=t[r];if("function"!=typeof a)throw new ye(o);if(i&&!s&&"wrapper"==Xi(a))var s=new Nn([],!0)}for(r=s?r:n;++r<n;){var u=Xi(a=t[r]),c="wrapper"==u?Qi(a):void 0;s=c&&co(c[0])&&424==c[1]&&!c[4].length&&1==c[9]?s[Xi(c[0])].apply(s,c[3]):1==a.length&&co(a)?s[u]():s.thru(a)}return function(){var e=arguments,r=e[0];if(s&&1==e.length&&$a(r))return s.plant(r).value();for(var i=0,o=n?t[i].apply(this,e):r;++i<n;)o=t[i].call(this,o);return o}}))}function ki(e,t,n,i,o,a,s,u,c,l){var f=128&t,d=1&t,p=2&t,h=24&t,v=512&t,g=p?void 0:Ti(e);return function m(){for(var y=arguments.length,_=r(y),b=y;b--;)_[b]=arguments[b];if(h)var w=Ki(m),x=It(_,w);if(i&&(_=vi(_,i,o,h)),a&&(_=gi(_,a,s,h)),y-=x,h&&y<l){var C=Bt(_,w);return Ii(e,t,ki,m.placeholder,n,_,C,u,c,l-y)}var E=d?n:this,T=p?E[e]:e;return y=_.length,u?_=mo(_,u):v&&y>1&&_.reverse(),f&&c<y&&(_.length=c),this&&this!==Qe&&this instanceof m&&(T=g||Ti(T)),T.apply(E,_)}}function Oi(e,t){return function(n,r){return function(e,t,n,r){return ur(e,(function(e,i,o){t(r,n(e),i,o)})),r}(n,e,t(r),{})}}function ji(e,t){return function(n,r){var i;if(void 0===n&&void 0===r)return t;if(void 0!==n&&(i=n),void 0!==r){if(void 0===i)return r;"string"==typeof n||"string"==typeof r?(n=Jr(n),r=Jr(r)):(n=Yr(n),r=Yr(r)),i=e(n,r)}return i}}function Ni(e){return Wi((function(t){return t=pt(t,jt(Yi())),Mr((function(n){var r=this;return e(t,(function(e){return ot(e,r,n)}))}))}))}function Di(e,t){var n=(t=void 0===t?" ":Jr(t)).length;if(n<2)return n?Pr(t,e):t;var r=Pr(t,Gt(e/zt(t)));return Ft(t)?ci(Vt(r),0,e).join(""):r.slice(0,e)}function $i(e){return function(t,n,i){return i&&"number"!=typeof i&&so(t,n,i)&&(n=i=void 0),t=ns(t),void 0===n?(n=t,t=0):n=ns(n),function(e,t,n,i){for(var o=-1,a=an(Gt((t-e)/(n||1)),0),s=r(a);a--;)s[i?a:++o]=e,e+=n;return s}(t,n,i=void 0===i?t<n?1:-1:ns(i),e)}}function Li(e){return function(t,n){return"string"==typeof t&&"string"==typeof n||(t=os(t),n=os(n)),e(t,n)}}function Ii(e,t,n,r,i,o,a,s,u,c){var l=8&t;t|=l?32:64,4&(t&=~(l?64:32))||(t&=-4);var f=[e,t,i,l?o:void 0,l?a:void 0,l?void 0:o,l?void 0:a,s,u,c],d=n.apply(void 0,f);return co(e)&&_o(d,f),d.placeholder=r,xo(d,e,t)}function Ri(e){var t=he[e];return function(e,n){if(e=os(e),(n=null==n?0:sn(rs(n),292))&&nn(e)){var r=(ss(e)+"e").split("e");return+((r=(ss(t(r[0]+"e"+(+r[1]+n)))+"e").split("e"))[0]+"e"+(+r[1]-n))}return t(e)}}var Pi=vn&&1/Ut(new vn([,-0]))[1]==1/0?function(e){return new vn(e)}:Js;function Mi(e){return function(t){var n=no(t);return n==v?qt(t):n==_?Wt(t):function(e,t){return pt(t,(function(t){return[t,e[t]]}))}(t,e(t))}}function Fi(e,t,n,i,s,u,c,l){var f=2&t;if(!f&&"function"!=typeof e)throw new ye(o);var d=i?i.length:0;if(d||(t&=-97,i=s=void 0),c=void 0===c?c:an(rs(c),0),l=void 0===l?l:rs(l),d-=s?s.length:0,64&t){var p=i,h=s;i=s=void 0}var v=f?void 0:Qi(e),g=[e,t,n,i,s,p,h,u,c,l];if(v&&function(e,t){var n=e[1],r=t[1],i=n|r,o=i<131,s=128==r&&8==n||128==r&&256==n&&e[7].length<=t[8]||384==r&&t[7].length<=t[8]&&8==n;if(!o&&!s)return e;1&r&&(e[2]=t[2],i|=1&n?0:4);var u=t[3];if(u){var c=e[3];e[3]=c?vi(c,u,t[4]):u,e[4]=c?Bt(e[3],a):t[4]}(u=t[5])&&(c=e[5],e[5]=c?gi(c,u,t[6]):u,e[6]=c?Bt(e[5],a):t[6]);(u=t[7])&&(e[7]=u);128&r&&(e[8]=null==e[8]?t[8]:sn(e[8],t[8]));null==e[9]&&(e[9]=t[9]);e[0]=t[0],e[1]=i}(g,v),e=g[0],t=g[1],n=g[2],i=g[3],s=g[4],!(l=g[9]=void 0===g[9]?f?0:e.length:an(g[9]-d,0))&&24&t&&(t&=-25),t&&1!=t)m=8==t||16==t?function(e,t,n){var i=Ti(e);return function o(){for(var a=arguments.length,s=r(a),u=a,c=Ki(o);u--;)s[u]=arguments[u];var l=a<3&&s[0]!==c&&s[a-1]!==c?[]:Bt(s,c);if((a-=l.length)<n)return Ii(e,t,ki,o.placeholder,void 0,s,l,void 0,void 0,n-a);var f=this&&this!==Qe&&this instanceof o?i:e;return ot(f,this,s)}}(e,t,l):32!=t&&33!=t||s.length?ki.apply(void 0,g):function(e,t,n,i){var o=1&t,a=Ti(e);return function t(){for(var s=-1,u=arguments.length,c=-1,l=i.length,f=r(l+u),d=this&&this!==Qe&&this instanceof t?a:e;++c<l;)f[c]=i[c];for(;u--;)f[c++]=arguments[++s];return ot(d,o?n:this,f)}}(e,t,n,i);else var m=function(e,t,n){var r=1&t,i=Ti(e);return function t(){var o=this&&this!==Qe&&this instanceof t?i:e;return o.apply(r?n:this,arguments)}}(e,t,n);return xo((v?Br:_o)(m,g),e,t)}function qi(e,t,n,r){return void 0===e||Oa(e,we[n])&&!Ee.call(r,n)?t:e}function Hi(e,t,n,r,i,o){return Ua(e)&&Ua(t)&&(o.set(t,e),jr(e,t,void 0,Hi,o),o.delete(t)),e}function Bi(e){return Qa(e)?void 0:e}function Ui(e,t,n,r,i,o){var a=1&n,s=e.length,u=t.length;if(s!=u&&!(a&&u>s))return!1;var c=o.get(e),l=o.get(t);if(c&&l)return c==t&&l==e;var f=-1,d=!0,p=2&n?new Rn:void 0;for(o.set(e,t),o.set(t,e);++f<s;){var h=e[f],v=t[f];if(r)var g=a?r(v,h,f,t,e,o):r(h,v,f,e,t,o);if(void 0!==g){if(g)continue;d=!1;break}if(p){if(!mt(t,(function(e,t){if(!Dt(p,t)&&(h===e||i(h,e,n,r,o)))return p.push(t)}))){d=!1;break}}else if(h!==v&&!i(h,v,n,r,o)){d=!1;break}}return o.delete(e),o.delete(t),d}function Wi(e){return wo(vo(e,void 0,Lo),e+"")}function zi(e){return dr(e,bs,eo)}function Vi(e){return dr(e,ws,to)}var Qi=yn?function(e){return yn.get(e)}:Js;function Xi(e){for(var t=e.name+"",n=_n[t],r=Ee.call(_n,t)?n.length:0;r--;){var i=n[r],o=i.func;if(null==o||o==e)return i.name}return t}function Ki(e){return(Ee.call(kn,"placeholder")?kn:e).placeholder}function Yi(){var e=kn.iteratee||Qs;return e=e===Qs?Cr:e,arguments.length?e(arguments[0],arguments[1]):e}function Ji(e,t){var n,r,i=e.__data__;return("string"==(r=typeof(n=t))||"number"==r||"symbol"==r||"boolean"==r?"__proto__"!==n:null===n)?i["string"==typeof t?"string":"hash"]:i.map}function Gi(e){for(var t=bs(e),n=t.length;n--;){var r=t[n],i=e[r];t[n]=[r,i,po(i)]}return t}function Zi(e,t){var n=function(e,t){return null==e?void 0:e[t]}(e,t);return xr(n)?n:void 0}var eo=en?function(e){return null==e?[]:(e=ve(e),lt(en(e),(function(t){return Xe.call(e,t)})))}:iu,to=en?function(e){for(var t=[];e;)ht(t,eo(e)),e=ze(e);return t}:iu,no=pr;function ro(e,t,n){for(var r=-1,i=(t=si(t,e)).length,o=!1;++r<i;){var a=So(t[r]);if(!(o=null!=e&&n(e,a)))break;e=e[a]}return o||++r!=i?o:!!(i=null==e?0:e.length)&&Ba(i)&&ao(a,i)&&($a(e)||Da(e))}function io(e){return"function"!=typeof e.constructor||fo(e)?{}:On(ze(e))}function oo(e){return $a(e)||Da(e)||!!(Je&&e&&e[Je])}function ao(e,t){var n=typeof e;return!!(t=null==t?9007199254740991:t)&&("number"==n||"symbol"!=n&&ue.test(e))&&e>-1&&e%1==0&&e<t}function so(e,t,n){if(!Ua(n))return!1;var r=typeof t;return!!("number"==r?Ia(n)&&ao(t,n.length):"string"==r&&t in n)&&Oa(n[t],e)}function uo(e,t){if($a(e))return!1;var n=typeof e;return!("number"!=n&&"symbol"!=n&&"boolean"!=n&&null!=e&&!Ja(e))||(W.test(e)||!U.test(e)||null!=t&&e in ve(t))}function co(e){var t=Xi(e),n=kn[t];if("function"!=typeof n||!(t in Dn.prototype))return!1;if(e===n)return!0;var r=Qi(n);return!!r&&e===r[0]}(dn&&no(new dn(new ArrayBuffer(1)))!=E||pn&&no(new pn)!=v||hn&&"[object Promise]"!=no(hn.resolve())||vn&&no(new vn)!=_||gn&&no(new gn)!=x)&&(no=function(e){var t=pr(e),n=t==m?e.constructor:void 0,r=n?Ao(n):"";if(r)switch(r){case bn:return E;case wn:return v;case xn:return"[object Promise]";case Cn:return _;case En:return x}return t});var lo=xe?qa:ou;function fo(e){var t=e&&e.constructor;return e===("function"==typeof t&&t.prototype||we)}function po(e){return e==e&&!Ua(e)}function ho(e,t){return function(n){return null!=n&&(n[e]===t&&(void 0!==t||e in ve(n)))}}function vo(e,t,n){return t=an(void 0===t?e.length-1:t,0),function(){for(var i=arguments,o=-1,a=an(i.length-t,0),s=r(a);++o<a;)s[o]=i[t+o];o=-1;for(var u=r(t+1);++o<t;)u[o]=i[o];return u[t]=n(s),ot(e,this,u)}}function go(e,t){return t.length<2?e:fr(e,zr(t,0,-1))}function mo(e,t){for(var n=e.length,r=sn(t.length,n),i=mi(e);r--;){var o=t[r];e[r]=ao(o,n)?i[o]:void 0}return e}function yo(e,t){if(("constructor"!==t||"function"!=typeof e[t])&&"__proto__"!=t)return e[t]}var _o=Co(Br),bo=Jt||function(e,t){return Qe.setTimeout(e,t)},wo=Co(Ur);function xo(e,t,n){var r=t+"";return wo(e,function(e,t){var n=t.length;if(!n)return e;var r=n-1;return t[r]=(n>1?"& ":"")+t[r],t=t.join(n>2?", ":" "),e.replace(J,"{\n/* [wrapped with "+t+"] */\n")}(r,function(e,t){return st(s,(function(n){var r="_."+n[0];t&n[1]&&!ft(e,r)&&e.push(r)})),e.sort()}(function(e){var t=e.match(G);return t?t[1].split(Z):[]}(r),n)))}function Co(e){var t=0,n=0;return function(){var r=un(),i=16-(r-n);if(n=r,i>0){if(++t>=800)return arguments[0]}else t=0;return e.apply(void 0,arguments)}}function Eo(e,t){var n=-1,r=e.length,i=r-1;for(t=void 0===t?r:t;++n<t;){var o=Rr(n,i),a=e[o];e[o]=e[n],e[n]=a}return e.length=t,e}var To=function(e){var t=Ca(e,(function(e){return 500===n.size&&n.clear(),e})),n=t.cache;return t}((function(e){var t=[];return 46===e.charCodeAt(0)&&t.push(""),e.replace(z,(function(e,n,r,i){t.push(r?i.replace(te,"$1"):n||e)})),t}));function So(e){if("string"==typeof e||Ja(e))return e;var t=e+"";return"0"==t&&1/e==-1/0?"-0":t}function Ao(e){if(null!=e){try{return Ce.call(e)}catch(e){}try{return e+""}catch(e){}}return""}function ko(e){if(e instanceof Dn)return e.clone();var t=new Nn(e.__wrapped__,e.__chain__);return t.__actions__=mi(e.__actions__),t.__index__=e.__index__,t.__values__=e.__values__,t}var Oo=Mr((function(e,t){return Ra(e)?Zn(e,or(t,1,Ra,!0)):[]})),jo=Mr((function(e,t){var n=Fo(t);return Ra(n)&&(n=void 0),Ra(e)?Zn(e,or(t,1,Ra,!0),Yi(n,2)):[]})),No=Mr((function(e,t){var n=Fo(t);return Ra(n)&&(n=void 0),Ra(e)?Zn(e,or(t,1,Ra,!0),void 0,n):[]}));function Do(e,t,n){var r=null==e?0:e.length;if(!r)return-1;var i=null==n?0:rs(n);return i<0&&(i=an(r+i,0)),bt(e,Yi(t,3),i)}function $o(e,t,n){var r=null==e?0:e.length;if(!r)return-1;var i=r-1;return void 0!==n&&(i=rs(n),i=n<0?an(r+i,0):sn(i,r-1)),bt(e,Yi(t,3),i,!0)}function Lo(e){return(null==e?0:e.length)?or(e,1):[]}function Io(e){return e&&e.length?e[0]:void 0}var Ro=Mr((function(e){var t=pt(e,oi);return t.length&&t[0]===e[0]?mr(t):[]})),Po=Mr((function(e){var t=Fo(e),n=pt(e,oi);return t===Fo(n)?t=void 0:n.pop(),n.length&&n[0]===e[0]?mr(n,Yi(t,2)):[]})),Mo=Mr((function(e){var t=Fo(e),n=pt(e,oi);return(t="function"==typeof t?t:void 0)&&n.pop(),n.length&&n[0]===e[0]?mr(n,void 0,t):[]}));function Fo(e){var t=null==e?0:e.length;return t?e[t-1]:void 0}var qo=Mr(Ho);function Ho(e,t){return e&&e.length&&t&&t.length?Lr(e,t):e}var Bo=Wi((function(e,t){var n=null==e?0:e.length,r=Xn(e,t);return Ir(e,pt(t,(function(e){return ao(e,n)?+e:e})).sort(hi)),r}));function Uo(e){return null==e?e:fn.call(e)}var Wo=Mr((function(e){return Gr(or(e,1,Ra,!0))})),zo=Mr((function(e){var t=Fo(e);return Ra(t)&&(t=void 0),Gr(or(e,1,Ra,!0),Yi(t,2))})),Vo=Mr((function(e){var t=Fo(e);return t="function"==typeof t?t:void 0,Gr(or(e,1,Ra,!0),void 0,t)}));function Qo(e){if(!e||!e.length)return[];var t=0;return e=lt(e,(function(e){if(Ra(e))return t=an(e.length,t),!0})),Ot(t,(function(t){return pt(e,Tt(t))}))}function Xo(e,t){if(!e||!e.length)return[];var n=Qo(e);return null==t?n:pt(n,(function(e){return ot(t,void 0,e)}))}var Ko=Mr((function(e,t){return Ra(e)?Zn(e,t):[]})),Yo=Mr((function(e){return ri(lt(e,Ra))})),Jo=Mr((function(e){var t=Fo(e);return Ra(t)&&(t=void 0),ri(lt(e,Ra),Yi(t,2))})),Go=Mr((function(e){var t=Fo(e);return t="function"==typeof t?t:void 0,ri(lt(e,Ra),void 0,t)})),Zo=Mr(Qo);var ea=Mr((function(e){var t=e.length,n=t>1?e[t-1]:void 0;return n="function"==typeof n?(e.pop(),n):void 0,Xo(e,n)}));function ta(e){var t=kn(e);return t.__chain__=!0,t}function na(e,t){return t(e)}var ra=Wi((function(e){var t=e.length,n=t?e[0]:0,r=this.__wrapped__,i=function(t){return Xn(t,e)};return!(t>1||this.__actions__.length)&&r instanceof Dn&&ao(n)?((r=r.slice(n,+n+(t?1:0))).__actions__.push({func:na,args:[i],thisArg:void 0}),new Nn(r,this.__chain__).thru((function(e){return t&&!e.length&&e.push(void 0),e}))):this.thru(i)}));var ia=_i((function(e,t,n){Ee.call(e,n)?++e[n]:Qn(e,n,1)}));var oa=Si(Do),aa=Si($o);function sa(e,t){return($a(e)?st:er)(e,Yi(t,3))}function ua(e,t){return($a(e)?ut:tr)(e,Yi(t,3))}var ca=_i((function(e,t,n){Ee.call(e,n)?e[n].push(t):Qn(e,n,[t])}));var la=Mr((function(e,t,n){var i=-1,o="function"==typeof t,a=Ia(e)?r(e.length):[];return er(e,(function(e){a[++i]=o?ot(t,e,n):yr(e,t,n)})),a})),fa=_i((function(e,t,n){Qn(e,n,t)}));function da(e,t){return($a(e)?pt:Ar)(e,Yi(t,3))}var pa=_i((function(e,t,n){e[n?0:1].push(t)}),(function(){return[[],[]]}));var ha=Mr((function(e,t){if(null==e)return[];var n=t.length;return n>1&&so(e,t[0],t[1])?t=[]:n>2&&so(t[0],t[1],t[2])&&(t=[t[0]]),Dr(e,or(t,1),[])})),va=Yt||function(){return Qe.Date.now()};function ga(e,t,n){return t=n?void 0:t,Fi(e,128,void 0,void 0,void 0,void 0,t=e&&null==t?e.length:t)}function ma(e,t){var n;if("function"!=typeof t)throw new ye(o);return e=rs(e),function(){return--e>0&&(n=t.apply(this,arguments)),e<=1&&(t=void 0),n}}var ya=Mr((function(e,t,n){var r=1;if(n.length){var i=Bt(n,Ki(ya));r|=32}return Fi(e,r,t,n,i)})),_a=Mr((function(e,t,n){var r=3;if(n.length){var i=Bt(n,Ki(_a));r|=32}return Fi(t,r,e,n,i)}));function ba(e,t,n){var r,i,a,s,u,c,l=0,f=!1,d=!1,p=!0;if("function"!=typeof e)throw new ye(o);function h(t){var n=r,o=i;return r=i=void 0,l=t,s=e.apply(o,n)}function v(e){return l=e,u=bo(m,t),f?h(e):s}function g(e){var n=e-c;return void 0===c||n>=t||n<0||d&&e-l>=a}function m(){var e=va();if(g(e))return y(e);u=bo(m,function(e){var n=t-(e-c);return d?sn(n,a-(e-l)):n}(e))}function y(e){return u=void 0,p&&r?h(e):(r=i=void 0,s)}function _(){var e=va(),n=g(e);if(r=arguments,i=this,c=e,n){if(void 0===u)return v(c);if(d)return li(u),u=bo(m,t),h(c)}return void 0===u&&(u=bo(m,t)),s}return t=os(t)||0,Ua(n)&&(f=!!n.leading,a=(d="maxWait"in n)?an(os(n.maxWait)||0,t):a,p="trailing"in n?!!n.trailing:p),_.cancel=function(){void 0!==u&&li(u),l=0,r=c=i=u=void 0},_.flush=function(){return void 0===u?s:y(va())},_}var wa=Mr((function(e,t){return Gn(e,1,t)})),xa=Mr((function(e,t,n){return Gn(e,os(t)||0,n)}));function Ca(e,t){if("function"!=typeof e||null!=t&&"function"!=typeof t)throw new ye(o);var n=function(){var r=arguments,i=t?t.apply(this,r):r[0],o=n.cache;if(o.has(i))return o.get(i);var a=e.apply(this,r);return n.cache=o.set(i,a)||o,a};return n.cache=new(Ca.Cache||In),n}function Ea(e){if("function"!=typeof e)throw new ye(o);return function(){var t=arguments;switch(t.length){case 0:return!e.call(this);case 1:return!e.call(this,t[0]);case 2:return!e.call(this,t[0],t[1]);case 3:return!e.call(this,t[0],t[1],t[2])}return!e.apply(this,t)}}Ca.Cache=In;var Ta=ui((function(e,t){var n=(t=1==t.length&&$a(t[0])?pt(t[0],jt(Yi())):pt(or(t,1),jt(Yi()))).length;return Mr((function(r){for(var i=-1,o=sn(r.length,n);++i<o;)r[i]=t[i].call(this,r[i]);return ot(e,this,r)}))})),Sa=Mr((function(e,t){return Fi(e,32,void 0,t,Bt(t,Ki(Sa)))})),Aa=Mr((function(e,t){return Fi(e,64,void 0,t,Bt(t,Ki(Aa)))})),ka=Wi((function(e,t){return Fi(e,256,void 0,void 0,void 0,t)}));function Oa(e,t){return e===t||e!=e&&t!=t}var ja=Li(hr),Na=Li((function(e,t){return e>=t})),Da=_r(function(){return arguments}())?_r:function(e){return Wa(e)&&Ee.call(e,"callee")&&!Xe.call(e,"callee")},$a=r.isArray,La=Ze?jt(Ze):function(e){return Wa(e)&&pr(e)==C};function Ia(e){return null!=e&&Ba(e.length)&&!qa(e)}function Ra(e){return Wa(e)&&Ia(e)}var Pa=tn||ou,Ma=et?jt(et):function(e){return Wa(e)&&pr(e)==f};function Fa(e){if(!Wa(e))return!1;var t=pr(e);return t==d||"[object DOMException]"==t||"string"==typeof e.message&&"string"==typeof e.name&&!Qa(e)}function qa(e){if(!Ua(e))return!1;var t=pr(e);return t==p||t==h||"[object AsyncFunction]"==t||"[object Proxy]"==t}function Ha(e){return"number"==typeof e&&e==rs(e)}function Ba(e){return"number"==typeof e&&e>-1&&e%1==0&&e<=9007199254740991}function Ua(e){var t=typeof e;return null!=e&&("object"==t||"function"==t)}function Wa(e){return null!=e&&"object"==typeof e}var za=tt?jt(tt):function(e){return Wa(e)&&no(e)==v};function Va(e){return"number"==typeof e||Wa(e)&&pr(e)==g}function Qa(e){if(!Wa(e)||pr(e)!=m)return!1;var t=ze(e);if(null===t)return!0;var n=Ee.call(t,"constructor")&&t.constructor;return"function"==typeof n&&n instanceof n&&Ce.call(n)==ke}var Xa=nt?jt(nt):function(e){return Wa(e)&&pr(e)==y};var Ka=rt?jt(rt):function(e){return Wa(e)&&no(e)==_};function Ya(e){return"string"==typeof e||!$a(e)&&Wa(e)&&pr(e)==b}function Ja(e){return"symbol"==typeof e||Wa(e)&&pr(e)==w}var Ga=it?jt(it):function(e){return Wa(e)&&Ba(e.length)&&!!qe[pr(e)]};var Za=Li(Sr),es=Li((function(e,t){return e<=t}));function ts(e){if(!e)return[];if(Ia(e))return Ya(e)?Vt(e):mi(e);if(Ge&&e[Ge])return function(e){for(var t,n=[];!(t=e.next()).done;)n.push(t.value);return n}(e[Ge]());var t=no(e);return(t==v?qt:t==_?Ut:Os)(e)}function ns(e){return e?(e=os(e))===1/0||e===-1/0?17976931348623157e292*(e<0?-1:1):e==e?e:0:0===e?e:0}function rs(e){var t=ns(e),n=t%1;return t==t?n?t-n:t:0}function is(e){return e?Kn(rs(e),0,4294967295):0}function os(e){if("number"==typeof e)return e;if(Ja(e))return NaN;if(Ua(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=Ua(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(X,"");var n=oe.test(e);return n||se.test(e)?We(e.slice(2),n?2:8):ie.test(e)?NaN:+e}function as(e){return yi(e,ws(e))}function ss(e){return null==e?"":Jr(e)}var us=bi((function(e,t){if(fo(t)||Ia(t))yi(t,bs(t),e);else for(var n in t)Ee.call(t,n)&&Un(e,n,t[n])})),cs=bi((function(e,t){yi(t,ws(t),e)})),ls=bi((function(e,t,n,r){yi(t,ws(t),e,r)})),fs=bi((function(e,t,n,r){yi(t,bs(t),e,r)})),ds=Wi(Xn);var ps=Mr((function(e,t){e=ve(e);var n=-1,r=t.length,i=r>2?t[2]:void 0;for(i&&so(t[0],t[1],i)&&(r=1);++n<r;)for(var o=t[n],a=ws(o),s=-1,u=a.length;++s<u;){var c=a[s],l=e[c];(void 0===l||Oa(l,we[c])&&!Ee.call(e,c))&&(e[c]=o[c])}return e})),hs=Mr((function(e){return e.push(void 0,Hi),ot(Cs,void 0,e)}));function vs(e,t,n){var r=null==e?void 0:fr(e,t);return void 0===r?n:r}function gs(e,t){return null!=e&&ro(e,t,gr)}var ms=Oi((function(e,t,n){null!=t&&"function"!=typeof t.toString&&(t=Ae.call(t)),e[t]=n}),Us(Vs)),ys=Oi((function(e,t,n){null!=t&&"function"!=typeof t.toString&&(t=Ae.call(t)),Ee.call(e,t)?e[t].push(n):e[t]=[n]}),Yi),_s=Mr(yr);function bs(e){return Ia(e)?Mn(e):Er(e)}function ws(e){return Ia(e)?Mn(e,!0):Tr(e)}var xs=bi((function(e,t,n){jr(e,t,n)})),Cs=bi((function(e,t,n,r){jr(e,t,n,r)})),Es=Wi((function(e,t){var n={};if(null==e)return n;var r=!1;t=pt(t,(function(t){return t=si(t,e),r||(r=t.length>1),t})),yi(e,Vi(e),n),r&&(n=Yn(n,7,Bi));for(var i=t.length;i--;)Zr(n,t[i]);return n}));var Ts=Wi((function(e,t){return null==e?{}:function(e,t){return $r(e,t,(function(t,n){return gs(e,n)}))}(e,t)}));function Ss(e,t){if(null==e)return{};var n=pt(Vi(e),(function(e){return[e]}));return t=Yi(t),$r(e,n,(function(e,n){return t(e,n[0])}))}var As=Mi(bs),ks=Mi(ws);function Os(e){return null==e?[]:Nt(e,bs(e))}var js=Ei((function(e,t,n){return t=t.toLowerCase(),e+(n?Ns(t):t)}));function Ns(e){return Fs(ss(e).toLowerCase())}function Ds(e){return(e=ss(e))&&e.replace(ce,Rt).replace($e,"")}var $s=Ei((function(e,t,n){return e+(n?"-":"")+t.toLowerCase()})),Ls=Ei((function(e,t,n){return e+(n?" ":"")+t.toLowerCase()})),Is=Ci("toLowerCase");var Rs=Ei((function(e,t,n){return e+(n?"_":"")+t.toLowerCase()}));var Ps=Ei((function(e,t,n){return e+(n?" ":"")+Fs(t)}));var Ms=Ei((function(e,t,n){return e+(n?" ":"")+t.toUpperCase()})),Fs=Ci("toUpperCase");function qs(e,t,n){return e=ss(e),void 0===(t=n?void 0:t)?function(e){return Pe.test(e)}(e)?function(e){return e.match(Ie)||[]}(e):function(e){return e.match(ee)||[]}(e):e.match(t)||[]}var Hs=Mr((function(e,t){try{return ot(e,void 0,t)}catch(e){return Fa(e)?e:new de(e)}})),Bs=Wi((function(e,t){return st(t,(function(t){t=So(t),Qn(e,t,ya(e[t],e))})),e}));function Us(e){return function(){return e}}var Ws=Ai(),zs=Ai(!0);function Vs(e){return e}function Qs(e){return Cr("function"==typeof e?e:Yn(e,1))}var Xs=Mr((function(e,t){return function(n){return yr(n,e,t)}})),Ks=Mr((function(e,t){return function(n){return yr(e,n,t)}}));function Ys(e,t,n){var r=bs(t),i=lr(t,r);null!=n||Ua(t)&&(i.length||!r.length)||(n=t,t=e,e=this,i=lr(t,bs(t)));var o=!(Ua(n)&&"chain"in n&&!n.chain),a=qa(e);return st(i,(function(n){var r=t[n];e[n]=r,a&&(e.prototype[n]=function(){var t=this.__chain__;if(o||t){var n=e(this.__wrapped__),i=n.__actions__=mi(this.__actions__);return i.push({func:r,args:arguments,thisArg:e}),n.__chain__=t,n}return r.apply(e,ht([this.value()],arguments))})})),e}function Js(){}var Gs=Ni(pt),Zs=Ni(ct),eu=Ni(mt);function tu(e){return uo(e)?Tt(So(e)):function(e){return function(t){return fr(t,e)}}(e)}var nu=$i(),ru=$i(!0);function iu(){return[]}function ou(){return!1}var au=ji((function(e,t){return e+t}),0),su=Ri("ceil"),uu=ji((function(e,t){return e/t}),1),cu=Ri("floor");var lu,fu=ji((function(e,t){return e*t}),1),du=Ri("round"),pu=ji((function(e,t){return e-t}),0);return kn.after=function(e,t){if("function"!=typeof t)throw new ye(o);return e=rs(e),function(){if(--e<1)return t.apply(this,arguments)}},kn.ary=ga,kn.assign=us,kn.assignIn=cs,kn.assignInWith=ls,kn.assignWith=fs,kn.at=ds,kn.before=ma,kn.bind=ya,kn.bindAll=Bs,kn.bindKey=_a,kn.castArray=function(){if(!arguments.length)return[];var e=arguments[0];return $a(e)?e:[e]},kn.chain=ta,kn.chunk=function(e,t,n){t=(n?so(e,t,n):void 0===t)?1:an(rs(t),0);var i=null==e?0:e.length;if(!i||t<1)return[];for(var o=0,a=0,s=r(Gt(i/t));o<i;)s[a++]=zr(e,o,o+=t);return s},kn.compact=function(e){for(var t=-1,n=null==e?0:e.length,r=0,i=[];++t<n;){var o=e[t];o&&(i[r++]=o)}return i},kn.concat=function(){var e=arguments.length;if(!e)return[];for(var t=r(e-1),n=arguments[0],i=e;i--;)t[i-1]=arguments[i];return ht($a(n)?mi(n):[n],or(t,1))},kn.cond=function(e){var t=null==e?0:e.length,n=Yi();return e=t?pt(e,(function(e){if("function"!=typeof e[1])throw new ye(o);return[n(e[0]),e[1]]})):[],Mr((function(n){for(var r=-1;++r<t;){var i=e[r];if(ot(i[0],this,n))return ot(i[1],this,n)}}))},kn.conforms=function(e){return function(e){var t=bs(e);return function(n){return Jn(n,e,t)}}(Yn(e,1))},kn.constant=Us,kn.countBy=ia,kn.create=function(e,t){var n=On(e);return null==t?n:Vn(n,t)},kn.curry=function e(t,n,r){var i=Fi(t,8,void 0,void 0,void 0,void 0,void 0,n=r?void 0:n);return i.placeholder=e.placeholder,i},kn.curryRight=function e(t,n,r){var i=Fi(t,16,void 0,void 0,void 0,void 0,void 0,n=r?void 0:n);return i.placeholder=e.placeholder,i},kn.debounce=ba,kn.defaults=ps,kn.defaultsDeep=hs,kn.defer=wa,kn.delay=xa,kn.difference=Oo,kn.differenceBy=jo,kn.differenceWith=No,kn.drop=function(e,t,n){var r=null==e?0:e.length;return r?zr(e,(t=n||void 0===t?1:rs(t))<0?0:t,r):[]},kn.dropRight=function(e,t,n){var r=null==e?0:e.length;return r?zr(e,0,(t=r-(t=n||void 0===t?1:rs(t)))<0?0:t):[]},kn.dropRightWhile=function(e,t){return e&&e.length?ti(e,Yi(t,3),!0,!0):[]},kn.dropWhile=function(e,t){return e&&e.length?ti(e,Yi(t,3),!0):[]},kn.fill=function(e,t,n,r){var i=null==e?0:e.length;return i?(n&&"number"!=typeof n&&so(e,t,n)&&(n=0,r=i),function(e,t,n,r){var i=e.length;for((n=rs(n))<0&&(n=-n>i?0:i+n),(r=void 0===r||r>i?i:rs(r))<0&&(r+=i),r=n>r?0:is(r);n<r;)e[n++]=t;return e}(e,t,n,r)):[]},kn.filter=function(e,t){return($a(e)?lt:ir)(e,Yi(t,3))},kn.flatMap=function(e,t){return or(da(e,t),1)},kn.flatMapDeep=function(e,t){return or(da(e,t),1/0)},kn.flatMapDepth=function(e,t,n){return n=void 0===n?1:rs(n),or(da(e,t),n)},kn.flatten=Lo,kn.flattenDeep=function(e){return(null==e?0:e.length)?or(e,1/0):[]},kn.flattenDepth=function(e,t){return(null==e?0:e.length)?or(e,t=void 0===t?1:rs(t)):[]},kn.flip=function(e){return Fi(e,512)},kn.flow=Ws,kn.flowRight=zs,kn.fromPairs=function(e){for(var t=-1,n=null==e?0:e.length,r={};++t<n;){var i=e[t];r[i[0]]=i[1]}return r},kn.functions=function(e){return null==e?[]:lr(e,bs(e))},kn.functionsIn=function(e){return null==e?[]:lr(e,ws(e))},kn.groupBy=ca,kn.initial=function(e){return(null==e?0:e.length)?zr(e,0,-1):[]},kn.intersection=Ro,kn.intersectionBy=Po,kn.intersectionWith=Mo,kn.invert=ms,kn.invertBy=ys,kn.invokeMap=la,kn.iteratee=Qs,kn.keyBy=fa,kn.keys=bs,kn.keysIn=ws,kn.map=da,kn.mapKeys=function(e,t){var n={};return t=Yi(t,3),ur(e,(function(e,r,i){Qn(n,t(e,r,i),e)})),n},kn.mapValues=function(e,t){var n={};return t=Yi(t,3),ur(e,(function(e,r,i){Qn(n,r,t(e,r,i))})),n},kn.matches=function(e){return kr(Yn(e,1))},kn.matchesProperty=function(e,t){return Or(e,Yn(t,1))},kn.memoize=Ca,kn.merge=xs,kn.mergeWith=Cs,kn.method=Xs,kn.methodOf=Ks,kn.mixin=Ys,kn.negate=Ea,kn.nthArg=function(e){return e=rs(e),Mr((function(t){return Nr(t,e)}))},kn.omit=Es,kn.omitBy=function(e,t){return Ss(e,Ea(Yi(t)))},kn.once=function(e){return ma(2,e)},kn.orderBy=function(e,t,n,r){return null==e?[]:($a(t)||(t=null==t?[]:[t]),$a(n=r?void 0:n)||(n=null==n?[]:[n]),Dr(e,t,n))},kn.over=Gs,kn.overArgs=Ta,kn.overEvery=Zs,kn.overSome=eu,kn.partial=Sa,kn.partialRight=Aa,kn.partition=pa,kn.pick=Ts,kn.pickBy=Ss,kn.property=tu,kn.propertyOf=function(e){return function(t){return null==e?void 0:fr(e,t)}},kn.pull=qo,kn.pullAll=Ho,kn.pullAllBy=function(e,t,n){return e&&e.length&&t&&t.length?Lr(e,t,Yi(n,2)):e},kn.pullAllWith=function(e,t,n){return e&&e.length&&t&&t.length?Lr(e,t,void 0,n):e},kn.pullAt=Bo,kn.range=nu,kn.rangeRight=ru,kn.rearg=ka,kn.reject=function(e,t){return($a(e)?lt:ir)(e,Ea(Yi(t,3)))},kn.remove=function(e,t){var n=[];if(!e||!e.length)return n;var r=-1,i=[],o=e.length;for(t=Yi(t,3);++r<o;){var a=e[r];t(a,r,e)&&(n.push(a),i.push(r))}return Ir(e,i),n},kn.rest=function(e,t){if("function"!=typeof e)throw new ye(o);return Mr(e,t=void 0===t?t:rs(t))},kn.reverse=Uo,kn.sampleSize=function(e,t,n){return t=(n?so(e,t,n):void 0===t)?1:rs(t),($a(e)?qn:qr)(e,t)},kn.set=function(e,t,n){return null==e?e:Hr(e,t,n)},kn.setWith=function(e,t,n,r){return r="function"==typeof r?r:void 0,null==e?e:Hr(e,t,n,r)},kn.shuffle=function(e){return($a(e)?Hn:Wr)(e)},kn.slice=function(e,t,n){var r=null==e?0:e.length;return r?(n&&"number"!=typeof n&&so(e,t,n)?(t=0,n=r):(t=null==t?0:rs(t),n=void 0===n?r:rs(n)),zr(e,t,n)):[]},kn.sortBy=ha,kn.sortedUniq=function(e){return e&&e.length?Kr(e):[]},kn.sortedUniqBy=function(e,t){return e&&e.length?Kr(e,Yi(t,2)):[]},kn.split=function(e,t,n){return n&&"number"!=typeof n&&so(e,t,n)&&(t=n=void 0),(n=void 0===n?4294967295:n>>>0)?(e=ss(e))&&("string"==typeof t||null!=t&&!Xa(t))&&!(t=Jr(t))&&Ft(e)?ci(Vt(e),0,n):e.split(t,n):[]},kn.spread=function(e,t){if("function"!=typeof e)throw new ye(o);return t=null==t?0:an(rs(t),0),Mr((function(n){var r=n[t],i=ci(n,0,t);return r&&ht(i,r),ot(e,this,i)}))},kn.tail=function(e){var t=null==e?0:e.length;return t?zr(e,1,t):[]},kn.take=function(e,t,n){return e&&e.length?zr(e,0,(t=n||void 0===t?1:rs(t))<0?0:t):[]},kn.takeRight=function(e,t,n){var r=null==e?0:e.length;return r?zr(e,(t=r-(t=n||void 0===t?1:rs(t)))<0?0:t,r):[]},kn.takeRightWhile=function(e,t){return e&&e.length?ti(e,Yi(t,3),!1,!0):[]},kn.takeWhile=function(e,t){return e&&e.length?ti(e,Yi(t,3)):[]},kn.tap=function(e,t){return t(e),e},kn.throttle=function(e,t,n){var r=!0,i=!0;if("function"!=typeof e)throw new ye(o);return Ua(n)&&(r="leading"in n?!!n.leading:r,i="trailing"in n?!!n.trailing:i),ba(e,t,{leading:r,maxWait:t,trailing:i})},kn.thru=na,kn.toArray=ts,kn.toPairs=As,kn.toPairsIn=ks,kn.toPath=function(e){return $a(e)?pt(e,So):Ja(e)?[e]:mi(To(ss(e)))},kn.toPlainObject=as,kn.transform=function(e,t,n){var r=$a(e),i=r||Pa(e)||Ga(e);if(t=Yi(t,4),null==n){var o=e&&e.constructor;n=i?r?new o:[]:Ua(e)&&qa(o)?On(ze(e)):{}}return(i?st:ur)(e,(function(e,r,i){return t(n,e,r,i)})),n},kn.unary=function(e){return ga(e,1)},kn.union=Wo,kn.unionBy=zo,kn.unionWith=Vo,kn.uniq=function(e){return e&&e.length?Gr(e):[]},kn.uniqBy=function(e,t){return e&&e.length?Gr(e,Yi(t,2)):[]},kn.uniqWith=function(e,t){return t="function"==typeof t?t:void 0,e&&e.length?Gr(e,void 0,t):[]},kn.unset=function(e,t){return null==e||Zr(e,t)},kn.unzip=Qo,kn.unzipWith=Xo,kn.update=function(e,t,n){return null==e?e:ei(e,t,ai(n))},kn.updateWith=function(e,t,n,r){return r="function"==typeof r?r:void 0,null==e?e:ei(e,t,ai(n),r)},kn.values=Os,kn.valuesIn=function(e){return null==e?[]:Nt(e,ws(e))},kn.without=Ko,kn.words=qs,kn.wrap=function(e,t){return Sa(ai(t),e)},kn.xor=Yo,kn.xorBy=Jo,kn.xorWith=Go,kn.zip=Zo,kn.zipObject=function(e,t){return ii(e||[],t||[],Un)},kn.zipObjectDeep=function(e,t){return ii(e||[],t||[],Hr)},kn.zipWith=ea,kn.entries=As,kn.entriesIn=ks,kn.extend=cs,kn.extendWith=ls,Ys(kn,kn),kn.add=au,kn.attempt=Hs,kn.camelCase=js,kn.capitalize=Ns,kn.ceil=su,kn.clamp=function(e,t,n){return void 0===n&&(n=t,t=void 0),void 0!==n&&(n=(n=os(n))==n?n:0),void 0!==t&&(t=(t=os(t))==t?t:0),Kn(os(e),t,n)},kn.clone=function(e){return Yn(e,4)},kn.cloneDeep=function(e){return Yn(e,5)},kn.cloneDeepWith=function(e,t){return Yn(e,5,t="function"==typeof t?t:void 0)},kn.cloneWith=function(e,t){return Yn(e,4,t="function"==typeof t?t:void 0)},kn.conformsTo=function(e,t){return null==t||Jn(e,t,bs(t))},kn.deburr=Ds,kn.defaultTo=function(e,t){return null==e||e!=e?t:e},kn.divide=uu,kn.endsWith=function(e,t,n){e=ss(e),t=Jr(t);var r=e.length,i=n=void 0===n?r:Kn(rs(n),0,r);return(n-=t.length)>=0&&e.slice(n,i)==t},kn.eq=Oa,kn.escape=function(e){return(e=ss(e))&&F.test(e)?e.replace(P,Pt):e},kn.escapeRegExp=function(e){return(e=ss(e))&&Q.test(e)?e.replace(V,"\\$&"):e},kn.every=function(e,t,n){var r=$a(e)?ct:nr;return n&&so(e,t,n)&&(t=void 0),r(e,Yi(t,3))},kn.find=oa,kn.findIndex=Do,kn.findKey=function(e,t){return _t(e,Yi(t,3),ur)},kn.findLast=aa,kn.findLastIndex=$o,kn.findLastKey=function(e,t){return _t(e,Yi(t,3),cr)},kn.floor=cu,kn.forEach=sa,kn.forEachRight=ua,kn.forIn=function(e,t){return null==e?e:ar(e,Yi(t,3),ws)},kn.forInRight=function(e,t){return null==e?e:sr(e,Yi(t,3),ws)},kn.forOwn=function(e,t){return e&&ur(e,Yi(t,3))},kn.forOwnRight=function(e,t){return e&&cr(e,Yi(t,3))},kn.get=vs,kn.gt=ja,kn.gte=Na,kn.has=function(e,t){return null!=e&&ro(e,t,vr)},kn.hasIn=gs,kn.head=Io,kn.identity=Vs,kn.includes=function(e,t,n,r){e=Ia(e)?e:Os(e),n=n&&!r?rs(n):0;var i=e.length;return n<0&&(n=an(i+n,0)),Ya(e)?n<=i&&e.indexOf(t,n)>-1:!!i&&wt(e,t,n)>-1},kn.indexOf=function(e,t,n){var r=null==e?0:e.length;if(!r)return-1;var i=null==n?0:rs(n);return i<0&&(i=an(r+i,0)),wt(e,t,i)},kn.inRange=function(e,t,n){return t=ns(t),void 0===n?(n=t,t=0):n=ns(n),function(e,t,n){return e>=sn(t,n)&&e<an(t,n)}(e=os(e),t,n)},kn.invoke=_s,kn.isArguments=Da,kn.isArray=$a,kn.isArrayBuffer=La,kn.isArrayLike=Ia,kn.isArrayLikeObject=Ra,kn.isBoolean=function(e){return!0===e||!1===e||Wa(e)&&pr(e)==l},kn.isBuffer=Pa,kn.isDate=Ma,kn.isElement=function(e){return Wa(e)&&1===e.nodeType&&!Qa(e)},kn.isEmpty=function(e){if(null==e)return!0;if(Ia(e)&&($a(e)||"string"==typeof e||"function"==typeof e.splice||Pa(e)||Ga(e)||Da(e)))return!e.length;var t=no(e);if(t==v||t==_)return!e.size;if(fo(e))return!Er(e).length;for(var n in e)if(Ee.call(e,n))return!1;return!0},kn.isEqual=function(e,t){return br(e,t)},kn.isEqualWith=function(e,t,n){var r=(n="function"==typeof n?n:void 0)?n(e,t):void 0;return void 0===r?br(e,t,void 0,n):!!r},kn.isError=Fa,kn.isFinite=function(e){return"number"==typeof e&&nn(e)},kn.isFunction=qa,kn.isInteger=Ha,kn.isLength=Ba,kn.isMap=za,kn.isMatch=function(e,t){return e===t||wr(e,t,Gi(t))},kn.isMatchWith=function(e,t,n){return n="function"==typeof n?n:void 0,wr(e,t,Gi(t),n)},kn.isNaN=function(e){return Va(e)&&e!=+e},kn.isNative=function(e){if(lo(e))throw new de("Unsupported core-js use. Try https://npms.io/search?q=ponyfill.");return xr(e)},kn.isNil=function(e){return null==e},kn.isNull=function(e){return null===e},kn.isNumber=Va,kn.isObject=Ua,kn.isObjectLike=Wa,kn.isPlainObject=Qa,kn.isRegExp=Xa,kn.isSafeInteger=function(e){return Ha(e)&&e>=-9007199254740991&&e<=9007199254740991},kn.isSet=Ka,kn.isString=Ya,kn.isSymbol=Ja,kn.isTypedArray=Ga,kn.isUndefined=function(e){return void 0===e},kn.isWeakMap=function(e){return Wa(e)&&no(e)==x},kn.isWeakSet=function(e){return Wa(e)&&"[object WeakSet]"==pr(e)},kn.join=function(e,t){return null==e?"":rn.call(e,t)},kn.kebabCase=$s,kn.last=Fo,kn.lastIndexOf=function(e,t,n){var r=null==e?0:e.length;if(!r)return-1;var i=r;return void 0!==n&&(i=(i=rs(n))<0?an(r+i,0):sn(i,r-1)),t==t?function(e,t,n){for(var r=n+1;r--;)if(e[r]===t)return r;return r}(e,t,i):bt(e,Ct,i,!0)},kn.lowerCase=Ls,kn.lowerFirst=Is,kn.lt=Za,kn.lte=es,kn.max=function(e){return e&&e.length?rr(e,Vs,hr):void 0},kn.maxBy=function(e,t){return e&&e.length?rr(e,Yi(t,2),hr):void 0},kn.mean=function(e){return Et(e,Vs)},kn.meanBy=function(e,t){return Et(e,Yi(t,2))},kn.min=function(e){return e&&e.length?rr(e,Vs,Sr):void 0},kn.minBy=function(e,t){return e&&e.length?rr(e,Yi(t,2),Sr):void 0},kn.stubArray=iu,kn.stubFalse=ou,kn.stubObject=function(){return{}},kn.stubString=function(){return""},kn.stubTrue=function(){return!0},kn.multiply=fu,kn.nth=function(e,t){return e&&e.length?Nr(e,rs(t)):void 0},kn.noConflict=function(){return Qe._===this&&(Qe._=Oe),this},kn.noop=Js,kn.now=va,kn.pad=function(e,t,n){e=ss(e);var r=(t=rs(t))?zt(e):0;if(!t||r>=t)return e;var i=(t-r)/2;return Di(Zt(i),n)+e+Di(Gt(i),n)},kn.padEnd=function(e,t,n){e=ss(e);var r=(t=rs(t))?zt(e):0;return t&&r<t?e+Di(t-r,n):e},kn.padStart=function(e,t,n){e=ss(e);var r=(t=rs(t))?zt(e):0;return t&&r<t?Di(t-r,n)+e:e},kn.parseInt=function(e,t,n){return n||null==t?t=0:t&&(t=+t),cn(ss(e).replace(K,""),t||0)},kn.random=function(e,t,n){if(n&&"boolean"!=typeof n&&so(e,t,n)&&(t=n=void 0),void 0===n&&("boolean"==typeof t?(n=t,t=void 0):"boolean"==typeof e&&(n=e,e=void 0)),void 0===e&&void 0===t?(e=0,t=1):(e=ns(e),void 0===t?(t=e,e=0):t=ns(t)),e>t){var r=e;e=t,t=r}if(n||e%1||t%1){var i=ln();return sn(e+i*(t-e+Ue("1e-"+((i+"").length-1))),t)}return Rr(e,t)},kn.reduce=function(e,t,n){var r=$a(e)?vt:At,i=arguments.length<3;return r(e,Yi(t,4),n,i,er)},kn.reduceRight=function(e,t,n){var r=$a(e)?gt:At,i=arguments.length<3;return r(e,Yi(t,4),n,i,tr)},kn.repeat=function(e,t,n){return t=(n?so(e,t,n):void 0===t)?1:rs(t),Pr(ss(e),t)},kn.replace=function(){var e=arguments,t=ss(e[0]);return e.length<3?t:t.replace(e[1],e[2])},kn.result=function(e,t,n){var r=-1,i=(t=si(t,e)).length;for(i||(i=1,e=void 0);++r<i;){var o=null==e?void 0:e[So(t[r])];void 0===o&&(r=i,o=n),e=qa(o)?o.call(e):o}return e},kn.round=du,kn.runInContext=e,kn.sample=function(e){return($a(e)?Fn:Fr)(e)},kn.size=function(e){if(null==e)return 0;if(Ia(e))return Ya(e)?zt(e):e.length;var t=no(e);return t==v||t==_?e.size:Er(e).length},kn.snakeCase=Rs,kn.some=function(e,t,n){var r=$a(e)?mt:Vr;return n&&so(e,t,n)&&(t=void 0),r(e,Yi(t,3))},kn.sortedIndex=function(e,t){return Qr(e,t)},kn.sortedIndexBy=function(e,t,n){return Xr(e,t,Yi(n,2))},kn.sortedIndexOf=function(e,t){var n=null==e?0:e.length;if(n){var r=Qr(e,t);if(r<n&&Oa(e[r],t))return r}return-1},kn.sortedLastIndex=function(e,t){return Qr(e,t,!0)},kn.sortedLastIndexBy=function(e,t,n){return Xr(e,t,Yi(n,2),!0)},kn.sortedLastIndexOf=function(e,t){if(null==e?0:e.length){var n=Qr(e,t,!0)-1;if(Oa(e[n],t))return n}return-1},kn.startCase=Ps,kn.startsWith=function(e,t,n){return e=ss(e),n=null==n?0:Kn(rs(n),0,e.length),t=Jr(t),e.slice(n,n+t.length)==t},kn.subtract=pu,kn.sum=function(e){return e&&e.length?kt(e,Vs):0},kn.sumBy=function(e,t){return e&&e.length?kt(e,Yi(t,2)):0},kn.template=function(e,t,n){var r=kn.templateSettings;n&&so(e,t,n)&&(t=void 0),e=ss(e),t=ls({},t,r,qi);var i,o,a=ls({},t.imports,r.imports,qi),s=bs(a),u=Nt(a,s),c=0,l=t.interpolate||le,f="__p += '",d=ge((t.escape||le).source+"|"+l.source+"|"+(l===B?ne:le).source+"|"+(t.evaluate||le).source+"|$","g"),p="//# sourceURL="+(Ee.call(t,"sourceURL")?(t.sourceURL+"").replace(/\s/g," "):"lodash.templateSources["+ ++Fe+"]")+"\n";e.replace(d,(function(t,n,r,a,s,u){return r||(r=a),f+=e.slice(c,u).replace(fe,Mt),n&&(i=!0,f+="' +\n__e("+n+") +\n'"),s&&(o=!0,f+="';\n"+s+";\n__p += '"),r&&(f+="' +\n((__t = ("+r+")) == null ? '' : __t) +\n'"),c=u+t.length,t})),f+="';\n";var h=Ee.call(t,"variable")&&t.variable;h||(f="with (obj) {\n"+f+"\n}\n"),f=(o?f.replace($,""):f).replace(L,"$1").replace(I,"$1;"),f="function("+(h||"obj")+") {\n"+(h?"":"obj || (obj = {});\n")+"var __t, __p = ''"+(i?", __e = _.escape":"")+(o?", __j = Array.prototype.join;\nfunction print() { __p += __j.call(arguments, '') }\n":";\n")+f+"return __p\n}";var v=Hs((function(){return pe(s,p+"return "+f).apply(void 0,u)}));if(v.source=f,Fa(v))throw v;return v},kn.times=function(e,t){if((e=rs(e))<1||e>9007199254740991)return[];var n=4294967295,r=sn(e,4294967295);e-=4294967295;for(var i=Ot(r,t=Yi(t));++n<e;)t(n);return i},kn.toFinite=ns,kn.toInteger=rs,kn.toLength=is,kn.toLower=function(e){return ss(e).toLowerCase()},kn.toNumber=os,kn.toSafeInteger=function(e){return e?Kn(rs(e),-9007199254740991,9007199254740991):0===e?e:0},kn.toString=ss,kn.toUpper=function(e){return ss(e).toUpperCase()},kn.trim=function(e,t,n){if((e=ss(e))&&(n||void 0===t))return e.replace(X,"");if(!e||!(t=Jr(t)))return e;var r=Vt(e),i=Vt(t);return ci(r,$t(r,i),Lt(r,i)+1).join("")},kn.trimEnd=function(e,t,n){if((e=ss(e))&&(n||void 0===t))return e.replace(Y,"");if(!e||!(t=Jr(t)))return e;var r=Vt(e);return ci(r,0,Lt(r,Vt(t))+1).join("")},kn.trimStart=function(e,t,n){if((e=ss(e))&&(n||void 0===t))return e.replace(K,"");if(!e||!(t=Jr(t)))return e;var r=Vt(e);return ci(r,$t(r,Vt(t))).join("")},kn.truncate=function(e,t){var n=30,r="...";if(Ua(t)){var i="separator"in t?t.separator:i;n="length"in t?rs(t.length):n,r="omission"in t?Jr(t.omission):r}var o=(e=ss(e)).length;if(Ft(e)){var a=Vt(e);o=a.length}if(n>=o)return e;var s=n-zt(r);if(s<1)return r;var u=a?ci(a,0,s).join(""):e.slice(0,s);if(void 0===i)return u+r;if(a&&(s+=u.length-s),Xa(i)){if(e.slice(s).search(i)){var c,l=u;for(i.global||(i=ge(i.source,ss(re.exec(i))+"g")),i.lastIndex=0;c=i.exec(l);)var f=c.index;u=u.slice(0,void 0===f?s:f)}}else if(e.indexOf(Jr(i),s)!=s){var d=u.lastIndexOf(i);d>-1&&(u=u.slice(0,d))}return u+r},kn.unescape=function(e){return(e=ss(e))&&M.test(e)?e.replace(R,Qt):e},kn.uniqueId=function(e){var t=++Te;return ss(e)+t},kn.upperCase=Ms,kn.upperFirst=Fs,kn.each=sa,kn.eachRight=ua,kn.first=Io,Ys(kn,(lu={},ur(kn,(function(e,t){Ee.call(kn.prototype,t)||(lu[t]=e)})),lu),{chain:!1}),kn.VERSION="4.17.19",st(["bind","bindKey","curry","curryRight","partial","partialRight"],(function(e){kn[e].placeholder=kn})),st(["drop","take"],(function(e,t){Dn.prototype[e]=function(n){n=void 0===n?1:an(rs(n),0);var r=this.__filtered__&&!t?new Dn(this):this.clone();return r.__filtered__?r.__takeCount__=sn(n,r.__takeCount__):r.__views__.push({size:sn(n,4294967295),type:e+(r.__dir__<0?"Right":"")}),r},Dn.prototype[e+"Right"]=function(t){return this.reverse()[e](t).reverse()}})),st(["filter","map","takeWhile"],(function(e,t){var n=t+1,r=1==n||3==n;Dn.prototype[e]=function(e){var t=this.clone();return t.__iteratees__.push({iteratee:Yi(e,3),type:n}),t.__filtered__=t.__filtered__||r,t}})),st(["head","last"],(function(e,t){var n="take"+(t?"Right":"");Dn.prototype[e]=function(){return this[n](1).value()[0]}})),st(["initial","tail"],(function(e,t){var n="drop"+(t?"":"Right");Dn.prototype[e]=function(){return this.__filtered__?new Dn(this):this[n](1)}})),Dn.prototype.compact=function(){return this.filter(Vs)},Dn.prototype.find=function(e){return this.filter(e).head()},Dn.prototype.findLast=function(e){return this.reverse().find(e)},Dn.prototype.invokeMap=Mr((function(e,t){return"function"==typeof e?new Dn(this):this.map((function(n){return yr(n,e,t)}))})),Dn.prototype.reject=function(e){return this.filter(Ea(Yi(e)))},Dn.prototype.slice=function(e,t){e=rs(e);var n=this;return n.__filtered__&&(e>0||t<0)?new Dn(n):(e<0?n=n.takeRight(-e):e&&(n=n.drop(e)),void 0!==t&&(n=(t=rs(t))<0?n.dropRight(-t):n.take(t-e)),n)},Dn.prototype.takeRightWhile=function(e){return this.reverse().takeWhile(e).reverse()},Dn.prototype.toArray=function(){return this.take(4294967295)},ur(Dn.prototype,(function(e,t){var n=/^(?:filter|find|map|reject)|While$/.test(t),r=/^(?:head|last)$/.test(t),i=kn[r?"take"+("last"==t?"Right":""):t],o=r||/^find/.test(t);i&&(kn.prototype[t]=function(){var t=this.__wrapped__,a=r?[1]:arguments,s=t instanceof Dn,u=a[0],c=s||$a(t),l=function(e){var t=i.apply(kn,ht([e],a));return r&&f?t[0]:t};c&&n&&"function"==typeof u&&1!=u.length&&(s=c=!1);var f=this.__chain__,d=!!this.__actions__.length,p=o&&!f,h=s&&!d;if(!o&&c){t=h?t:new Dn(this);var v=e.apply(t,a);return v.__actions__.push({func:na,args:[l],thisArg:void 0}),new Nn(v,f)}return p&&h?e.apply(this,a):(v=this.thru(l),p?r?v.value()[0]:v.value():v)})})),st(["pop","push","shift","sort","splice","unshift"],(function(e){var t=_e[e],n=/^(?:push|sort|unshift)$/.test(e)?"tap":"thru",r=/^(?:pop|shift)$/.test(e);kn.prototype[e]=function(){var e=arguments;if(r&&!this.__chain__){var i=this.value();return t.apply($a(i)?i:[],e)}return this[n]((function(n){return t.apply($a(n)?n:[],e)}))}})),ur(Dn.prototype,(function(e,t){var n=kn[t];if(n){var r=n.name+"";Ee.call(_n,r)||(_n[r]=[]),_n[r].push({name:t,func:n})}})),_n[ki(void 0,2).name]=[{name:"wrapper",func:void 0}],Dn.prototype.clone=function(){var e=new Dn(this.__wrapped__);return e.__actions__=mi(this.__actions__),e.__dir__=this.__dir__,e.__filtered__=this.__filtered__,e.__iteratees__=mi(this.__iteratees__),e.__takeCount__=this.__takeCount__,e.__views__=mi(this.__views__),e},Dn.prototype.reverse=function(){if(this.__filtered__){var e=new Dn(this);e.__dir__=-1,e.__filtered__=!0}else(e=this.clone()).__dir__*=-1;return e},Dn.prototype.value=function(){var e=this.__wrapped__.value(),t=this.__dir__,n=$a(e),r=t<0,i=n?e.length:0,o=function(e,t,n){var r=-1,i=n.length;for(;++r<i;){var o=n[r],a=o.size;switch(o.type){case"drop":e+=a;break;case"dropRight":t-=a;break;case"take":t=sn(t,e+a);break;case"takeRight":e=an(e,t-a)}}return{start:e,end:t}}(0,i,this.__views__),a=o.start,s=o.end,u=s-a,c=r?s:a-1,l=this.__iteratees__,f=l.length,d=0,p=sn(u,this.__takeCount__);if(!n||!r&&i==u&&p==u)return ni(e,this.__actions__);var h=[];e:for(;u--&&d<p;){for(var v=-1,g=e[c+=t];++v<f;){var m=l[v],y=m.iteratee,_=m.type,b=y(g);if(2==_)g=b;else if(!b){if(1==_)continue e;break e}}h[d++]=g}return h},kn.prototype.at=ra,kn.prototype.chain=function(){return ta(this)},kn.prototype.commit=function(){return new Nn(this.value(),this.__chain__)},kn.prototype.next=function(){void 0===this.__values__&&(this.__values__=ts(this.value()));var e=this.__index__>=this.__values__.length;return{done:e,value:e?void 0:this.__values__[this.__index__++]}},kn.prototype.plant=function(e){for(var t,n=this;n instanceof jn;){var r=ko(n);r.__index__=0,r.__values__=void 0,t?i.__wrapped__=r:t=r;var i=r;n=n.__wrapped__}return i.__wrapped__=e,t},kn.prototype.reverse=function(){var e=this.__wrapped__;if(e instanceof Dn){var t=e;return this.__actions__.length&&(t=new Dn(this)),(t=t.reverse()).__actions__.push({func:na,args:[Uo],thisArg:void 0}),new Nn(t,this.__chain__)}return this.thru(Uo)},kn.prototype.toJSON=kn.prototype.valueOf=kn.prototype.value=function(){return ni(this.__wrapped__,this.__actions__)},kn.prototype.first=kn.prototype.head,Ge&&(kn.prototype[Ge]=function(){return this}),kn}();Qe._=Xt,void 0===(i=function(){return Xt}.call(t,n,t,r))||(r.exports=i)}).call(this)}).call(this,n(1),n(17)(e))},function(e,t){e.exports=function(e){return e.webpackPolyfill||(e.deprecate=function(){},e.paths=[],e.children||(e.children=[]),Object.defineProperty(e,"loaded",{enumerable:!0,get:function(){return e.l}}),Object.defineProperty(e,"id",{enumerable:!0,get:function(){return e.i}}),e.webpackPolyfill=1),e}},function(e,t,n){!function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),e}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function a(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function s(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?a(Object(n),!0).forEach((function(t){o(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function u(e){var n=this,r=!1;return t(this).one(c.TRANSITION_END,(function(){r=!0})),setTimeout((function(){r||c.triggerTransitionEnd(n)}),e),this}t=t&&Object.prototype.hasOwnProperty.call(t,"default")?t.default:t,n=n&&Object.prototype.hasOwnProperty.call(n,"default")?n.default:n;var c={TRANSITION_END:"bsTransitionEnd",getUID:function(e){do{e+=~~(1e6*Math.random())}while(document.getElementById(e));return e},getSelectorFromElement:function(e){var t=e.getAttribute("data-target");if(!t||"#"===t){var n=e.getAttribute("href");t=n&&"#"!==n?n.trim():""}try{return document.querySelector(t)?t:null}catch(e){return null}},getTransitionDurationFromElement:function(e){if(!e)return 0;var n=t(e).css("transition-duration"),r=t(e).css("transition-delay"),i=parseFloat(n),o=parseFloat(r);return i||o?(n=n.split(",")[0],r=r.split(",")[0],1e3*(parseFloat(n)+parseFloat(r))):0},reflow:function(e){return e.offsetHeight},triggerTransitionEnd:function(e){t(e).trigger("transitionend")},supportsTransitionEnd:function(){return Boolean("transitionend")},isElement:function(e){return(e[0]||e).nodeType},typeCheckConfig:function(e,t,n){for(var r in n)if(Object.prototype.hasOwnProperty.call(n,r)){var i=n[r],o=t[r],a=o&&c.isElement(o)?"element":null==(s=o)?""+s:{}.toString.call(s).match(/\s([a-z]+)/i)[1].toLowerCase();if(!new RegExp(i).test(a))throw new Error(e.toUpperCase()+': Option "'+r+'" provided type "'+a+'" but expected type "'+i+'".')}var s},findShadowRoot:function(e){if(!document.documentElement.attachShadow)return null;if("function"==typeof e.getRootNode){var t=e.getRootNode();return t instanceof ShadowRoot?t:null}return e instanceof ShadowRoot?e:e.parentNode?c.findShadowRoot(e.parentNode):null},jQueryDetection:function(){if(void 0===t)throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1===e[0]&&9===e[1]&&e[2]<1||e[0]>=4)throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")}};c.jQueryDetection(),t.fn.emulateTransitionEnd=u,t.event.special[c.TRANSITION_END]={bindType:"transitionend",delegateType:"transitionend",handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}};var l="alert",f=t.fn[l],d=function(){function e(e){this._element=e}var n=e.prototype;return n.close=function(e){var t=this._element;e&&(t=this._getRootElement(e)),this._triggerCloseEvent(t).isDefaultPrevented()||this._removeElement(t)},n.dispose=function(){t.removeData(this._element,"bs.alert"),this._element=null},n._getRootElement=function(e){var n=c.getSelectorFromElement(e),r=!1;return n&&(r=document.querySelector(n)),r||(r=t(e).closest(".alert")[0]),r},n._triggerCloseEvent=function(e){var n=t.Event("close.bs.alert");return t(e).trigger(n),n},n._removeElement=function(e){var n=this;if(t(e).removeClass("show"),t(e).hasClass("fade")){var r=c.getTransitionDurationFromElement(e);t(e).one(c.TRANSITION_END,(function(t){return n._destroyElement(e,t)})).emulateTransitionEnd(r)}else this._destroyElement(e)},n._destroyElement=function(e){t(e).detach().trigger("closed.bs.alert").remove()},e._jQueryInterface=function(n){return this.each((function(){var r=t(this),i=r.data("bs.alert");i||(i=new e(this),r.data("bs.alert",i)),"close"===n&&i[n](this)}))},e._handleDismiss=function(e){return function(t){t&&t.preventDefault(),e.close(this)}},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),e}();t(document).on("click.bs.alert.data-api",'[data-dismiss="alert"]',d._handleDismiss(new d)),t.fn[l]=d._jQueryInterface,t.fn[l].Constructor=d,t.fn[l].noConflict=function(){return t.fn[l]=f,d._jQueryInterface};var p=t.fn.button,h=function(){function e(e){this._element=e}var n=e.prototype;return n.toggle=function(){var e=!0,n=!0,r=t(this._element).closest('[data-toggle="buttons"]')[0];if(r){var i=this._element.querySelector('input:not([type="hidden"])');if(i){if("radio"===i.type)if(i.checked&&this._element.classList.contains("active"))e=!1;else{var o=r.querySelector(".active");o&&t(o).removeClass("active")}e&&("checkbox"!==i.type&&"radio"!==i.type||(i.checked=!this._element.classList.contains("active")),t(i).trigger("change")),i.focus(),n=!1}}this._element.hasAttribute("disabled")||this._element.classList.contains("disabled")||(n&&this._element.setAttribute("aria-pressed",!this._element.classList.contains("active")),e&&t(this._element).toggleClass("active"))},n.dispose=function(){t.removeData(this._element,"bs.button"),this._element=null},e._jQueryInterface=function(n){return this.each((function(){var r=t(this).data("bs.button");r||(r=new e(this),t(this).data("bs.button",r)),"toggle"===n&&r[n]()}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),e}();t(document).on("click.bs.button.data-api",'[data-toggle^="button"]',(function(e){var n=e.target,r=n;if(t(n).hasClass("btn")||(n=t(n).closest(".btn")[0]),!n||n.hasAttribute("disabled")||n.classList.contains("disabled"))e.preventDefault();else{var i=n.querySelector('input:not([type="hidden"])');if(i&&(i.hasAttribute("disabled")||i.classList.contains("disabled")))return void e.preventDefault();"LABEL"===r.tagName&&i&&"checkbox"===i.type&&e.preventDefault(),h._jQueryInterface.call(t(n),"toggle")}})).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',(function(e){var n=t(e.target).closest(".btn")[0];t(n).toggleClass("focus",/^focus(in)?$/.test(e.type))})),t(window).on("load.bs.button.data-api",(function(){for(var e=[].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')),t=0,n=e.length;t<n;t++){var r=e[t],i=r.querySelector('input:not([type="hidden"])');i.checked||i.hasAttribute("checked")?r.classList.add("active"):r.classList.remove("active")}for(var o=0,a=(e=[].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length;o<a;o++){var s=e[o];"true"===s.getAttribute("aria-pressed")?s.classList.add("active"):s.classList.remove("active")}})),t.fn.button=h._jQueryInterface,t.fn.button.Constructor=h,t.fn.button.noConflict=function(){return t.fn.button=p,h._jQueryInterface};var v="carousel",g=".bs.carousel",m=t.fn[v],y={interval:5e3,keyboard:!0,slide:!1,pause:"hover",wrap:!0,touch:!0},_={interval:"(number|boolean)",keyboard:"boolean",slide:"(boolean|string)",pause:"(string|boolean)",wrap:"boolean",touch:"boolean"},b={TOUCH:"touch",PEN:"pen"},w=function(){function e(e,t){this._items=null,this._interval=null,this._activeElement=null,this._isPaused=!1,this._isSliding=!1,this.touchTimeout=null,this.touchStartX=0,this.touchDeltaX=0,this._config=this._getConfig(t),this._element=e,this._indicatorsElement=this._element.querySelector(".carousel-indicators"),this._touchSupported="ontouchstart"in document.documentElement||navigator.maxTouchPoints>0,this._pointerEvent=Boolean(window.PointerEvent||window.MSPointerEvent),this._addEventListeners()}var n=e.prototype;return n.next=function(){this._isSliding||this._slide("next")},n.nextWhenVisible=function(){!document.hidden&&t(this._element).is(":visible")&&"hidden"!==t(this._element).css("visibility")&&this.next()},n.prev=function(){this._isSliding||this._slide("prev")},n.pause=function(e){e||(this._isPaused=!0),this._element.querySelector(".carousel-item-next, .carousel-item-prev")&&(c.triggerTransitionEnd(this._element),this.cycle(!0)),clearInterval(this._interval),this._interval=null},n.cycle=function(e){e||(this._isPaused=!1),this._interval&&(clearInterval(this._interval),this._interval=null),this._config.interval&&!this._isPaused&&(this._interval=setInterval((document.visibilityState?this.nextWhenVisible:this.next).bind(this),this._config.interval))},n.to=function(e){var n=this;this._activeElement=this._element.querySelector(".active.carousel-item");var r=this._getItemIndex(this._activeElement);if(!(e>this._items.length-1||e<0))if(this._isSliding)t(this._element).one("slid.bs.carousel",(function(){return n.to(e)}));else{if(r===e)return this.pause(),void this.cycle();var i=e>r?"next":"prev";this._slide(i,this._items[e])}},n.dispose=function(){t(this._element).off(g),t.removeData(this._element,"bs.carousel"),this._items=null,this._config=null,this._element=null,this._interval=null,this._isPaused=null,this._isSliding=null,this._activeElement=null,this._indicatorsElement=null},n._getConfig=function(e){return e=s(s({},y),e),c.typeCheckConfig(v,e,_),e},n._handleSwipe=function(){var e=Math.abs(this.touchDeltaX);if(!(e<=40)){var t=e/this.touchDeltaX;this.touchDeltaX=0,t>0&&this.prev(),t<0&&this.next()}},n._addEventListeners=function(){var e=this;this._config.keyboard&&t(this._element).on("keydown.bs.carousel",(function(t){return e._keydown(t)})),"hover"===this._config.pause&&t(this._element).on("mouseenter.bs.carousel",(function(t){return e.pause(t)})).on("mouseleave.bs.carousel",(function(t){return e.cycle(t)})),this._config.touch&&this._addTouchEventListeners()},n._addTouchEventListeners=function(){var e=this;if(this._touchSupported){var n=function(t){e._pointerEvent&&b[t.originalEvent.pointerType.toUpperCase()]?e.touchStartX=t.originalEvent.clientX:e._pointerEvent||(e.touchStartX=t.originalEvent.touches[0].clientX)},r=function(t){e._pointerEvent&&b[t.originalEvent.pointerType.toUpperCase()]&&(e.touchDeltaX=t.originalEvent.clientX-e.touchStartX),e._handleSwipe(),"hover"===e._config.pause&&(e.pause(),e.touchTimeout&&clearTimeout(e.touchTimeout),e.touchTimeout=setTimeout((function(t){return e.cycle(t)}),500+e._config.interval))};t(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel",(function(e){return e.preventDefault()})),this._pointerEvent?(t(this._element).on("pointerdown.bs.carousel",(function(e){return n(e)})),t(this._element).on("pointerup.bs.carousel",(function(e){return r(e)})),this._element.classList.add("pointer-event")):(t(this._element).on("touchstart.bs.carousel",(function(e){return n(e)})),t(this._element).on("touchmove.bs.carousel",(function(t){return function(t){t.originalEvent.touches&&t.originalEvent.touches.length>1?e.touchDeltaX=0:e.touchDeltaX=t.originalEvent.touches[0].clientX-e.touchStartX}(t)})),t(this._element).on("touchend.bs.carousel",(function(e){return r(e)})))}},n._keydown=function(e){if(!/input|textarea/i.test(e.target.tagName))switch(e.which){case 37:e.preventDefault(),this.prev();break;case 39:e.preventDefault(),this.next()}},n._getItemIndex=function(e){return this._items=e&&e.parentNode?[].slice.call(e.parentNode.querySelectorAll(".carousel-item")):[],this._items.indexOf(e)},n._getItemByDirection=function(e,t){var n="next"===e,r="prev"===e,i=this._getItemIndex(t),o=this._items.length-1;if((r&&0===i||n&&i===o)&&!this._config.wrap)return t;var a=(i+("prev"===e?-1:1))%this._items.length;return-1===a?this._items[this._items.length-1]:this._items[a]},n._triggerSlideEvent=function(e,n){var r=this._getItemIndex(e),i=this._getItemIndex(this._element.querySelector(".active.carousel-item")),o=t.Event("slide.bs.carousel",{relatedTarget:e,direction:n,from:i,to:r});return t(this._element).trigger(o),o},n._setActiveIndicatorElement=function(e){if(this._indicatorsElement){var n=[].slice.call(this._indicatorsElement.querySelectorAll(".active"));t(n).removeClass("active");var r=this._indicatorsElement.children[this._getItemIndex(e)];r&&t(r).addClass("active")}},n._slide=function(e,n){var r,i,o,a=this,s=this._element.querySelector(".active.carousel-item"),u=this._getItemIndex(s),l=n||s&&this._getItemByDirection(e,s),f=this._getItemIndex(l),d=Boolean(this._interval);if("next"===e?(r="carousel-item-left",i="carousel-item-next",o="left"):(r="carousel-item-right",i="carousel-item-prev",o="right"),l&&t(l).hasClass("active"))this._isSliding=!1;else if(!this._triggerSlideEvent(l,o).isDefaultPrevented()&&s&&l){this._isSliding=!0,d&&this.pause(),this._setActiveIndicatorElement(l);var p=t.Event("slid.bs.carousel",{relatedTarget:l,direction:o,from:u,to:f});if(t(this._element).hasClass("slide")){t(l).addClass(i),c.reflow(l),t(s).addClass(r),t(l).addClass(r);var h=parseInt(l.getAttribute("data-interval"),10);h?(this._config.defaultInterval=this._config.defaultInterval||this._config.interval,this._config.interval=h):this._config.interval=this._config.defaultInterval||this._config.interval;var v=c.getTransitionDurationFromElement(s);t(s).one(c.TRANSITION_END,(function(){t(l).removeClass(r+" "+i).addClass("active"),t(s).removeClass("active "+i+" "+r),a._isSliding=!1,setTimeout((function(){return t(a._element).trigger(p)}),0)})).emulateTransitionEnd(v)}else t(s).removeClass("active"),t(l).addClass("active"),this._isSliding=!1,t(this._element).trigger(p);d&&this.cycle()}},e._jQueryInterface=function(n){return this.each((function(){var r=t(this).data("bs.carousel"),i=s(s({},y),t(this).data());"object"==typeof n&&(i=s(s({},i),n));var o="string"==typeof n?n:i.slide;if(r||(r=new e(this,i),t(this).data("bs.carousel",r)),"number"==typeof n)r.to(n);else if("string"==typeof o){if(void 0===r[o])throw new TypeError('No method named "'+o+'"');r[o]()}else i.interval&&i.ride&&(r.pause(),r.cycle())}))},e._dataApiClickHandler=function(n){var r=c.getSelectorFromElement(this);if(r){var i=t(r)[0];if(i&&t(i).hasClass("carousel")){var o=s(s({},t(i).data()),t(this).data()),a=this.getAttribute("data-slide-to");a&&(o.interval=!1),e._jQueryInterface.call(t(i),o),a&&t(i).data("bs.carousel").to(a),n.preventDefault()}}},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return y}}]),e}();t(document).on("click.bs.carousel.data-api","[data-slide], [data-slide-to]",w._dataApiClickHandler),t(window).on("load.bs.carousel.data-api",(function(){for(var e=[].slice.call(document.querySelectorAll('[data-ride="carousel"]')),n=0,r=e.length;n<r;n++){var i=t(e[n]);w._jQueryInterface.call(i,i.data())}})),t.fn[v]=w._jQueryInterface,t.fn[v].Constructor=w,t.fn[v].noConflict=function(){return t.fn[v]=m,w._jQueryInterface};var x="collapse",C=t.fn[x],E={toggle:!0,parent:""},T={toggle:"boolean",parent:"(string|element)"},S=function(){function e(e,t){this._isTransitioning=!1,this._element=e,this._config=this._getConfig(t),this._triggerArray=[].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#'+e.id+'"],[data-toggle="collapse"][data-target="#'+e.id+'"]'));for(var n=[].slice.call(document.querySelectorAll('[data-toggle="collapse"]')),r=0,i=n.length;r<i;r++){var o=n[r],a=c.getSelectorFromElement(o),s=[].slice.call(document.querySelectorAll(a)).filter((function(t){return t===e}));null!==a&&s.length>0&&(this._selector=a,this._triggerArray.push(o))}this._parent=this._config.parent?this._getParent():null,this._config.parent||this._addAriaAndCollapsedClass(this._element,this._triggerArray),this._config.toggle&&this.toggle()}var n=e.prototype;return n.toggle=function(){t(this._element).hasClass("show")?this.hide():this.show()},n.show=function(){var n,r,i=this;if(!(this._isTransitioning||t(this._element).hasClass("show")||(this._parent&&0===(n=[].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter((function(e){return"string"==typeof i._config.parent?e.getAttribute("data-parent")===i._config.parent:e.classList.contains("collapse")}))).length&&(n=null),n&&(r=t(n).not(this._selector).data("bs.collapse"))&&r._isTransitioning))){var o=t.Event("show.bs.collapse");if(t(this._element).trigger(o),!o.isDefaultPrevented()){n&&(e._jQueryInterface.call(t(n).not(this._selector),"hide"),r||t(n).data("bs.collapse",null));var a=this._getDimension();t(this._element).removeClass("collapse").addClass("collapsing"),this._element.style[a]=0,this._triggerArray.length&&t(this._triggerArray).removeClass("collapsed").attr("aria-expanded",!0),this.setTransitioning(!0);var s="scroll"+(a[0].toUpperCase()+a.slice(1)),u=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,(function(){t(i._element).removeClass("collapsing").addClass("collapse show"),i._element.style[a]="",i.setTransitioning(!1),t(i._element).trigger("shown.bs.collapse")})).emulateTransitionEnd(u),this._element.style[a]=this._element[s]+"px"}}},n.hide=function(){var e=this;if(!this._isTransitioning&&t(this._element).hasClass("show")){var n=t.Event("hide.bs.collapse");if(t(this._element).trigger(n),!n.isDefaultPrevented()){var r=this._getDimension();this._element.style[r]=this._element.getBoundingClientRect()[r]+"px",c.reflow(this._element),t(this._element).addClass("collapsing").removeClass("collapse show");var i=this._triggerArray.length;if(i>0)for(var o=0;o<i;o++){var a=this._triggerArray[o],s=c.getSelectorFromElement(a);null!==s&&(t([].slice.call(document.querySelectorAll(s))).hasClass("show")||t(a).addClass("collapsed").attr("aria-expanded",!1))}this.setTransitioning(!0),this._element.style[r]="";var u=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,(function(){e.setTransitioning(!1),t(e._element).removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")})).emulateTransitionEnd(u)}}},n.setTransitioning=function(e){this._isTransitioning=e},n.dispose=function(){t.removeData(this._element,"bs.collapse"),this._config=null,this._parent=null,this._element=null,this._triggerArray=null,this._isTransitioning=null},n._getConfig=function(e){return(e=s(s({},E),e)).toggle=Boolean(e.toggle),c.typeCheckConfig(x,e,T),e},n._getDimension=function(){return t(this._element).hasClass("width")?"width":"height"},n._getParent=function(){var n,r=this;c.isElement(this._config.parent)?(n=this._config.parent,void 0!==this._config.parent.jquery&&(n=this._config.parent[0])):n=document.querySelector(this._config.parent);var i='[data-toggle="collapse"][data-parent="'+this._config.parent+'"]',o=[].slice.call(n.querySelectorAll(i));return t(o).each((function(t,n){r._addAriaAndCollapsedClass(e._getTargetFromElement(n),[n])})),n},n._addAriaAndCollapsedClass=function(e,n){var r=t(e).hasClass("show");n.length&&t(n).toggleClass("collapsed",!r).attr("aria-expanded",r)},e._getTargetFromElement=function(e){var t=c.getSelectorFromElement(e);return t?document.querySelector(t):null},e._jQueryInterface=function(n){return this.each((function(){var r=t(this),i=r.data("bs.collapse"),o=s(s(s({},E),r.data()),"object"==typeof n&&n?n:{});if(!i&&o.toggle&&"string"==typeof n&&/show|hide/.test(n)&&(o.toggle=!1),i||(i=new e(this,o),r.data("bs.collapse",i)),"string"==typeof n){if(void 0===i[n])throw new TypeError('No method named "'+n+'"');i[n]()}}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return E}}]),e}();t(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',(function(e){"A"===e.currentTarget.tagName&&e.preventDefault();var n=t(this),r=c.getSelectorFromElement(this),i=[].slice.call(document.querySelectorAll(r));t(i).each((function(){var e=t(this),r=e.data("bs.collapse")?"toggle":n.data();S._jQueryInterface.call(e,r)}))})),t.fn[x]=S._jQueryInterface,t.fn[x].Constructor=S,t.fn[x].noConflict=function(){return t.fn[x]=C,S._jQueryInterface};var A="dropdown",k=t.fn[A],O=new RegExp("38|40|27"),j={offset:0,flip:!0,boundary:"scrollParent",reference:"toggle",display:"dynamic",popperConfig:null},N={offset:"(number|string|function)",flip:"boolean",boundary:"(string|element)",reference:"(string|element)",display:"string",popperConfig:"(null|object)"},D=function(){function e(e,t){this._element=e,this._popper=null,this._config=this._getConfig(t),this._menu=this._getMenuElement(),this._inNavbar=this._detectNavbar(),this._addEventListeners()}var r=e.prototype;return r.toggle=function(){if(!this._element.disabled&&!t(this._element).hasClass("disabled")){var n=t(this._menu).hasClass("show");e._clearMenus(),n||this.show(!0)}},r.show=function(r){if(void 0===r&&(r=!1),!(this._element.disabled||t(this._element).hasClass("disabled")||t(this._menu).hasClass("show"))){var i={relatedTarget:this._element},o=t.Event("show.bs.dropdown",i),a=e._getParentFromElement(this._element);if(t(a).trigger(o),!o.isDefaultPrevented()){if(!this._inNavbar&&r){if(void 0===n)throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");var s=this._element;"parent"===this._config.reference?s=a:c.isElement(this._config.reference)&&(s=this._config.reference,void 0!==this._config.reference.jquery&&(s=this._config.reference[0])),"scrollParent"!==this._config.boundary&&t(a).addClass("position-static"),this._popper=new n(s,this._menu,this._getPopperConfig())}"ontouchstart"in document.documentElement&&0===t(a).closest(".navbar-nav").length&&t(document.body).children().on("mouseover",null,t.noop),this._element.focus(),this._element.setAttribute("aria-expanded",!0),t(this._menu).toggleClass("show"),t(a).toggleClass("show").trigger(t.Event("shown.bs.dropdown",i))}}},r.hide=function(){if(!this._element.disabled&&!t(this._element).hasClass("disabled")&&t(this._menu).hasClass("show")){var n={relatedTarget:this._element},r=t.Event("hide.bs.dropdown",n),i=e._getParentFromElement(this._element);t(i).trigger(r),r.isDefaultPrevented()||(this._popper&&this._popper.destroy(),t(this._menu).toggleClass("show"),t(i).toggleClass("show").trigger(t.Event("hidden.bs.dropdown",n)))}},r.dispose=function(){t.removeData(this._element,"bs.dropdown"),t(this._element).off(".bs.dropdown"),this._element=null,this._menu=null,null!==this._popper&&(this._popper.destroy(),this._popper=null)},r.update=function(){this._inNavbar=this._detectNavbar(),null!==this._popper&&this._popper.scheduleUpdate()},r._addEventListeners=function(){var e=this;t(this._element).on("click.bs.dropdown",(function(t){t.preventDefault(),t.stopPropagation(),e.toggle()}))},r._getConfig=function(e){return e=s(s(s({},this.constructor.Default),t(this._element).data()),e),c.typeCheckConfig(A,e,this.constructor.DefaultType),e},r._getMenuElement=function(){if(!this._menu){var t=e._getParentFromElement(this._element);t&&(this._menu=t.querySelector(".dropdown-menu"))}return this._menu},r._getPlacement=function(){var e=t(this._element.parentNode),n="bottom-start";return e.hasClass("dropup")?n=t(this._menu).hasClass("dropdown-menu-right")?"top-end":"top-start":e.hasClass("dropright")?n="right-start":e.hasClass("dropleft")?n="left-start":t(this._menu).hasClass("dropdown-menu-right")&&(n="bottom-end"),n},r._detectNavbar=function(){return t(this._element).closest(".navbar").length>0},r._getOffset=function(){var e=this,t={};return"function"==typeof this._config.offset?t.fn=function(t){return t.offsets=s(s({},t.offsets),e._config.offset(t.offsets,e._element)||{}),t}:t.offset=this._config.offset,t},r._getPopperConfig=function(){var e={placement:this._getPlacement(),modifiers:{offset:this._getOffset(),flip:{enabled:this._config.flip},preventOverflow:{boundariesElement:this._config.boundary}}};return"static"===this._config.display&&(e.modifiers.applyStyle={enabled:!1}),s(s({},e),this._config.popperConfig)},e._jQueryInterface=function(n){return this.each((function(){var r=t(this).data("bs.dropdown");if(r||(r=new e(this,"object"==typeof n?n:null),t(this).data("bs.dropdown",r)),"string"==typeof n){if(void 0===r[n])throw new TypeError('No method named "'+n+'"');r[n]()}}))},e._clearMenus=function(n){if(!n||3!==n.which&&("keyup"!==n.type||9===n.which))for(var r=[].slice.call(document.querySelectorAll('[data-toggle="dropdown"]')),i=0,o=r.length;i<o;i++){var a=e._getParentFromElement(r[i]),s=t(r[i]).data("bs.dropdown"),u={relatedTarget:r[i]};if(n&&"click"===n.type&&(u.clickEvent=n),s){var c=s._menu;if(t(a).hasClass("show")&&!(n&&("click"===n.type&&/input|textarea/i.test(n.target.tagName)||"keyup"===n.type&&9===n.which)&&t.contains(a,n.target))){var l=t.Event("hide.bs.dropdown",u);t(a).trigger(l),l.isDefaultPrevented()||("ontouchstart"in document.documentElement&&t(document.body).children().off("mouseover",null,t.noop),r[i].setAttribute("aria-expanded","false"),s._popper&&s._popper.destroy(),t(c).removeClass("show"),t(a).removeClass("show").trigger(t.Event("hidden.bs.dropdown",u)))}}}},e._getParentFromElement=function(e){var t,n=c.getSelectorFromElement(e);return n&&(t=document.querySelector(n)),t||e.parentNode},e._dataApiKeydownHandler=function(n){if(!(/input|textarea/i.test(n.target.tagName)?32===n.which||27!==n.which&&(40!==n.which&&38!==n.which||t(n.target).closest(".dropdown-menu").length):!O.test(n.which))&&!this.disabled&&!t(this).hasClass("disabled")){var r=e._getParentFromElement(this),i=t(r).hasClass("show");if(i||27!==n.which){if(n.preventDefault(),n.stopPropagation(),!i||i&&(27===n.which||32===n.which))return 27===n.which&&t(r.querySelector('[data-toggle="dropdown"]')).trigger("focus"),void t(this).trigger("click");var o=[].slice.call(r.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter((function(e){return t(e).is(":visible")}));if(0!==o.length){var a=o.indexOf(n.target);38===n.which&&a>0&&a--,40===n.which&&a<o.length-1&&a++,a<0&&(a=0),o[a].focus()}}}},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return j}},{key:"DefaultType",get:function(){return N}}]),e}();t(document).on("keydown.bs.dropdown.data-api",'[data-toggle="dropdown"]',D._dataApiKeydownHandler).on("keydown.bs.dropdown.data-api",".dropdown-menu",D._dataApiKeydownHandler).on("click.bs.dropdown.data-api keyup.bs.dropdown.data-api",D._clearMenus).on("click.bs.dropdown.data-api",'[data-toggle="dropdown"]',(function(e){e.preventDefault(),e.stopPropagation(),D._jQueryInterface.call(t(this),"toggle")})).on("click.bs.dropdown.data-api",".dropdown form",(function(e){e.stopPropagation()})),t.fn[A]=D._jQueryInterface,t.fn[A].Constructor=D,t.fn[A].noConflict=function(){return t.fn[A]=k,D._jQueryInterface};var $=t.fn.modal,L={backdrop:!0,keyboard:!0,focus:!0,show:!0},I={backdrop:"(boolean|string)",keyboard:"boolean",focus:"boolean",show:"boolean"},R=function(){function e(e,t){this._config=this._getConfig(t),this._element=e,this._dialog=e.querySelector(".modal-dialog"),this._backdrop=null,this._isShown=!1,this._isBodyOverflowing=!1,this._ignoreBackdropClick=!1,this._isTransitioning=!1,this._scrollbarWidth=0}var n=e.prototype;return n.toggle=function(e){return this._isShown?this.hide():this.show(e)},n.show=function(e){var n=this;if(!this._isShown&&!this._isTransitioning){t(this._element).hasClass("fade")&&(this._isTransitioning=!0);var r=t.Event("show.bs.modal",{relatedTarget:e});t(this._element).trigger(r),this._isShown||r.isDefaultPrevented()||(this._isShown=!0,this._checkScrollbar(),this._setScrollbar(),this._adjustDialog(),this._setEscapeEvent(),this._setResizeEvent(),t(this._element).on("click.dismiss.bs.modal",'[data-dismiss="modal"]',(function(e){return n.hide(e)})),t(this._dialog).on("mousedown.dismiss.bs.modal",(function(){t(n._element).one("mouseup.dismiss.bs.modal",(function(e){t(e.target).is(n._element)&&(n._ignoreBackdropClick=!0)}))})),this._showBackdrop((function(){return n._showElement(e)})))}},n.hide=function(e){var n=this;if(e&&e.preventDefault(),this._isShown&&!this._isTransitioning){var r=t.Event("hide.bs.modal");if(t(this._element).trigger(r),this._isShown&&!r.isDefaultPrevented()){this._isShown=!1;var i=t(this._element).hasClass("fade");if(i&&(this._isTransitioning=!0),this._setEscapeEvent(),this._setResizeEvent(),t(document).off("focusin.bs.modal"),t(this._element).removeClass("show"),t(this._element).off("click.dismiss.bs.modal"),t(this._dialog).off("mousedown.dismiss.bs.modal"),i){var o=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,(function(e){return n._hideModal(e)})).emulateTransitionEnd(o)}else this._hideModal()}}},n.dispose=function(){[window,this._element,this._dialog].forEach((function(e){return t(e).off(".bs.modal")})),t(document).off("focusin.bs.modal"),t.removeData(this._element,"bs.modal"),this._config=null,this._element=null,this._dialog=null,this._backdrop=null,this._isShown=null,this._isBodyOverflowing=null,this._ignoreBackdropClick=null,this._isTransitioning=null,this._scrollbarWidth=null},n.handleUpdate=function(){this._adjustDialog()},n._getConfig=function(e){return e=s(s({},L),e),c.typeCheckConfig("modal",e,I),e},n._triggerBackdropTransition=function(){var e=this;if("static"===this._config.backdrop){var n=t.Event("hidePrevented.bs.modal");if(t(this._element).trigger(n),n.defaultPrevented)return;this._element.classList.add("modal-static");var r=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,(function(){e._element.classList.remove("modal-static")})).emulateTransitionEnd(r),this._element.focus()}else this.hide()},n._showElement=function(e){var n=this,r=t(this._element).hasClass("fade"),i=this._dialog?this._dialog.querySelector(".modal-body"):null;this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE||document.body.appendChild(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),t(this._dialog).hasClass("modal-dialog-scrollable")&&i?i.scrollTop=0:this._element.scrollTop=0,r&&c.reflow(this._element),t(this._element).addClass("show"),this._config.focus&&this._enforceFocus();var o=t.Event("shown.bs.modal",{relatedTarget:e}),a=function(){n._config.focus&&n._element.focus(),n._isTransitioning=!1,t(n._element).trigger(o)};if(r){var s=c.getTransitionDurationFromElement(this._dialog);t(this._dialog).one(c.TRANSITION_END,a).emulateTransitionEnd(s)}else a()},n._enforceFocus=function(){var e=this;t(document).off("focusin.bs.modal").on("focusin.bs.modal",(function(n){document!==n.target&&e._element!==n.target&&0===t(e._element).has(n.target).length&&e._element.focus()}))},n._setEscapeEvent=function(){var e=this;this._isShown?t(this._element).on("keydown.dismiss.bs.modal",(function(t){e._config.keyboard&&27===t.which?(t.preventDefault(),e.hide()):e._config.keyboard||27!==t.which||e._triggerBackdropTransition()})):this._isShown||t(this._element).off("keydown.dismiss.bs.modal")},n._setResizeEvent=function(){var e=this;this._isShown?t(window).on("resize.bs.modal",(function(t){return e.handleUpdate(t)})):t(window).off("resize.bs.modal")},n._hideModal=function(){var e=this;this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._isTransitioning=!1,this._showBackdrop((function(){t(document.body).removeClass("modal-open"),e._resetAdjustments(),e._resetScrollbar(),t(e._element).trigger("hidden.bs.modal")}))},n._removeBackdrop=function(){this._backdrop&&(t(this._backdrop).remove(),this._backdrop=null)},n._showBackdrop=function(e){var n=this,r=t(this._element).hasClass("fade")?"fade":"";if(this._isShown&&this._config.backdrop){if(this._backdrop=document.createElement("div"),this._backdrop.className="modal-backdrop",r&&this._backdrop.classList.add(r),t(this._backdrop).appendTo(document.body),t(this._element).on("click.dismiss.bs.modal",(function(e){n._ignoreBackdropClick?n._ignoreBackdropClick=!1:e.target===e.currentTarget&&n._triggerBackdropTransition()})),r&&c.reflow(this._backdrop),t(this._backdrop).addClass("show"),!e)return;if(!r)return void e();var i=c.getTransitionDurationFromElement(this._backdrop);t(this._backdrop).one(c.TRANSITION_END,e).emulateTransitionEnd(i)}else if(!this._isShown&&this._backdrop){t(this._backdrop).removeClass("show");var o=function(){n._removeBackdrop(),e&&e()};if(t(this._element).hasClass("fade")){var a=c.getTransitionDurationFromElement(this._backdrop);t(this._backdrop).one(c.TRANSITION_END,o).emulateTransitionEnd(a)}else o()}else e&&e()},n._adjustDialog=function(){var e=this._element.scrollHeight>document.documentElement.clientHeight;!this._isBodyOverflowing&&e&&(this._element.style.paddingLeft=this._scrollbarWidth+"px"),this._isBodyOverflowing&&!e&&(this._element.style.paddingRight=this._scrollbarWidth+"px")},n._resetAdjustments=function(){this._element.style.paddingLeft="",this._element.style.paddingRight=""},n._checkScrollbar=function(){var e=document.body.getBoundingClientRect();this._isBodyOverflowing=Math.round(e.left+e.right)<window.innerWidth,this._scrollbarWidth=this._getScrollbarWidth()},n._setScrollbar=function(){var e=this;if(this._isBodyOverflowing){var n=[].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top")),r=[].slice.call(document.querySelectorAll(".sticky-top"));t(n).each((function(n,r){var i=r.style.paddingRight,o=t(r).css("padding-right");t(r).data("padding-right",i).css("padding-right",parseFloat(o)+e._scrollbarWidth+"px")})),t(r).each((function(n,r){var i=r.style.marginRight,o=t(r).css("margin-right");t(r).data("margin-right",i).css("margin-right",parseFloat(o)-e._scrollbarWidth+"px")}));var i=document.body.style.paddingRight,o=t(document.body).css("padding-right");t(document.body).data("padding-right",i).css("padding-right",parseFloat(o)+this._scrollbarWidth+"px")}t(document.body).addClass("modal-open")},n._resetScrollbar=function(){var e=[].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"));t(e).each((function(e,n){var r=t(n).data("padding-right");t(n).removeData("padding-right"),n.style.paddingRight=r||""}));var n=[].slice.call(document.querySelectorAll(".sticky-top"));t(n).each((function(e,n){var r=t(n).data("margin-right");void 0!==r&&t(n).css("margin-right",r).removeData("margin-right")}));var r=t(document.body).data("padding-right");t(document.body).removeData("padding-right"),document.body.style.paddingRight=r||""},n._getScrollbarWidth=function(){var e=document.createElement("div");e.className="modal-scrollbar-measure",document.body.appendChild(e);var t=e.getBoundingClientRect().width-e.clientWidth;return document.body.removeChild(e),t},e._jQueryInterface=function(n,r){return this.each((function(){var i=t(this).data("bs.modal"),o=s(s(s({},L),t(this).data()),"object"==typeof n&&n?n:{});if(i||(i=new e(this,o),t(this).data("bs.modal",i)),"string"==typeof n){if(void 0===i[n])throw new TypeError('No method named "'+n+'"');i[n](r)}else o.show&&i.show(r)}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return L}}]),e}();t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',(function(e){var n,r=this,i=c.getSelectorFromElement(this);i&&(n=document.querySelector(i));var o=t(n).data("bs.modal")?"toggle":s(s({},t(n).data()),t(this).data());"A"!==this.tagName&&"AREA"!==this.tagName||e.preventDefault();var a=t(n).one("show.bs.modal",(function(e){e.isDefaultPrevented()||a.one("hidden.bs.modal",(function(){t(r).is(":visible")&&r.focus()}))}));R._jQueryInterface.call(t(n),o,this)})),t.fn.modal=R._jQueryInterface,t.fn.modal.Constructor=R,t.fn.modal.noConflict=function(){return t.fn.modal=$,R._jQueryInterface};var P=["background","cite","href","itemtype","longdesc","poster","src","xlink:href"],M={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]},F=/^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,q=/^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;function H(e,t,n){if(0===e.length)return e;if(n&&"function"==typeof n)return n(e);for(var r=(new window.DOMParser).parseFromString(e,"text/html"),i=Object.keys(t),o=[].slice.call(r.body.querySelectorAll("*")),a=function(e,n){var r=o[e],a=r.nodeName.toLowerCase();if(-1===i.indexOf(r.nodeName.toLowerCase()))return r.parentNode.removeChild(r),"continue";var s=[].slice.call(r.attributes),u=[].concat(t["*"]||[],t[a]||[]);s.forEach((function(e){(function(e,t){var n=e.nodeName.toLowerCase();if(-1!==t.indexOf(n))return-1===P.indexOf(n)||Boolean(e.nodeValue.match(F)||e.nodeValue.match(q));for(var r=t.filter((function(e){return e instanceof RegExp})),i=0,o=r.length;i<o;i++)if(n.match(r[i]))return!0;return!1})(e,u)||r.removeAttribute(e.nodeName)}))},s=0,u=o.length;s<u;s++)a(s);return r.body.innerHTML}var B="tooltip",U=t.fn[B],W=new RegExp("(^|\\s)bs-tooltip\\S+","g"),z=["sanitize","whiteList","sanitizeFn"],V={animation:"boolean",template:"string",title:"(string|element|function)",trigger:"string",delay:"(number|object)",html:"boolean",selector:"(string|boolean)",placement:"(string|function)",offset:"(number|string|function)",container:"(string|element|boolean)",fallbackPlacement:"(string|array)",boundary:"(string|element)",sanitize:"boolean",sanitizeFn:"(null|function)",whiteList:"object",popperConfig:"(null|object)"},Q={AUTO:"auto",TOP:"top",RIGHT:"right",BOTTOM:"bottom",LEFT:"left"},X={animation:!0,template:'<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,selector:!1,placement:"top",offset:0,container:!1,fallbackPlacement:"flip",boundary:"scrollParent",sanitize:!0,sanitizeFn:null,whiteList:M,popperConfig:null},K={HIDE:"hide.bs.tooltip",HIDDEN:"hidden.bs.tooltip",SHOW:"show.bs.tooltip",SHOWN:"shown.bs.tooltip",INSERTED:"inserted.bs.tooltip",CLICK:"click.bs.tooltip",FOCUSIN:"focusin.bs.tooltip",FOCUSOUT:"focusout.bs.tooltip",MOUSEENTER:"mouseenter.bs.tooltip",MOUSELEAVE:"mouseleave.bs.tooltip"},Y=function(){function e(e,t){if(void 0===n)throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");this._isEnabled=!0,this._timeout=0,this._hoverState="",this._activeTrigger={},this._popper=null,this.element=e,this.config=this._getConfig(t),this.tip=null,this._setListeners()}var r=e.prototype;return r.enable=function(){this._isEnabled=!0},r.disable=function(){this._isEnabled=!1},r.toggleEnabled=function(){this._isEnabled=!this._isEnabled},r.toggle=function(e){if(this._isEnabled)if(e){var n=this.constructor.DATA_KEY,r=t(e.currentTarget).data(n);r||(r=new this.constructor(e.currentTarget,this._getDelegateConfig()),t(e.currentTarget).data(n,r)),r._activeTrigger.click=!r._activeTrigger.click,r._isWithActiveTrigger()?r._enter(null,r):r._leave(null,r)}else{if(t(this.getTipElement()).hasClass("show"))return void this._leave(null,this);this._enter(null,this)}},r.dispose=function(){clearTimeout(this._timeout),t.removeData(this.element,this.constructor.DATA_KEY),t(this.element).off(this.constructor.EVENT_KEY),t(this.element).closest(".modal").off("hide.bs.modal",this._hideModalHandler),this.tip&&t(this.tip).remove(),this._isEnabled=null,this._timeout=null,this._hoverState=null,this._activeTrigger=null,this._popper&&this._popper.destroy(),this._popper=null,this.element=null,this.config=null,this.tip=null},r.show=function(){var e=this;if("none"===t(this.element).css("display"))throw new Error("Please use show on visible elements");var r=t.Event(this.constructor.Event.SHOW);if(this.isWithContent()&&this._isEnabled){t(this.element).trigger(r);var i=c.findShadowRoot(this.element),o=t.contains(null!==i?i:this.element.ownerDocument.documentElement,this.element);if(r.isDefaultPrevented()||!o)return;var a=this.getTipElement(),s=c.getUID(this.constructor.NAME);a.setAttribute("id",s),this.element.setAttribute("aria-describedby",s),this.setContent(),this.config.animation&&t(a).addClass("fade");var u="function"==typeof this.config.placement?this.config.placement.call(this,a,this.element):this.config.placement,l=this._getAttachment(u);this.addAttachmentClass(l);var f=this._getContainer();t(a).data(this.constructor.DATA_KEY,this),t.contains(this.element.ownerDocument.documentElement,this.tip)||t(a).appendTo(f),t(this.element).trigger(this.constructor.Event.INSERTED),this._popper=new n(this.element,a,this._getPopperConfig(l)),t(a).addClass("show"),"ontouchstart"in document.documentElement&&t(document.body).children().on("mouseover",null,t.noop);var d=function(){e.config.animation&&e._fixTransition();var n=e._hoverState;e._hoverState=null,t(e.element).trigger(e.constructor.Event.SHOWN),"out"===n&&e._leave(null,e)};if(t(this.tip).hasClass("fade")){var p=c.getTransitionDurationFromElement(this.tip);t(this.tip).one(c.TRANSITION_END,d).emulateTransitionEnd(p)}else d()}},r.hide=function(e){var n=this,r=this.getTipElement(),i=t.Event(this.constructor.Event.HIDE),o=function(){"show"!==n._hoverState&&r.parentNode&&r.parentNode.removeChild(r),n._cleanTipClass(),n.element.removeAttribute("aria-describedby"),t(n.element).trigger(n.constructor.Event.HIDDEN),null!==n._popper&&n._popper.destroy(),e&&e()};if(t(this.element).trigger(i),!i.isDefaultPrevented()){if(t(r).removeClass("show"),"ontouchstart"in document.documentElement&&t(document.body).children().off("mouseover",null,t.noop),this._activeTrigger.click=!1,this._activeTrigger.focus=!1,this._activeTrigger.hover=!1,t(this.tip).hasClass("fade")){var a=c.getTransitionDurationFromElement(r);t(r).one(c.TRANSITION_END,o).emulateTransitionEnd(a)}else o();this._hoverState=""}},r.update=function(){null!==this._popper&&this._popper.scheduleUpdate()},r.isWithContent=function(){return Boolean(this.getTitle())},r.addAttachmentClass=function(e){t(this.getTipElement()).addClass("bs-tooltip-"+e)},r.getTipElement=function(){return this.tip=this.tip||t(this.config.template)[0],this.tip},r.setContent=function(){var e=this.getTipElement();this.setElementContent(t(e.querySelectorAll(".tooltip-inner")),this.getTitle()),t(e).removeClass("fade show")},r.setElementContent=function(e,n){"object"!=typeof n||!n.nodeType&&!n.jquery?this.config.html?(this.config.sanitize&&(n=H(n,this.config.whiteList,this.config.sanitizeFn)),e.html(n)):e.text(n):this.config.html?t(n).parent().is(e)||e.empty().append(n):e.text(t(n).text())},r.getTitle=function(){var e=this.element.getAttribute("data-original-title");return e||(e="function"==typeof this.config.title?this.config.title.call(this.element):this.config.title),e},r._getPopperConfig=function(e){var t=this;return s(s({},{placement:e,modifiers:{offset:this._getOffset(),flip:{behavior:this.config.fallbackPlacement},arrow:{element:".arrow"},preventOverflow:{boundariesElement:this.config.boundary}},onCreate:function(e){e.originalPlacement!==e.placement&&t._handlePopperPlacementChange(e)},onUpdate:function(e){return t._handlePopperPlacementChange(e)}}),this.config.popperConfig)},r._getOffset=function(){var e=this,t={};return"function"==typeof this.config.offset?t.fn=function(t){return t.offsets=s(s({},t.offsets),e.config.offset(t.offsets,e.element)||{}),t}:t.offset=this.config.offset,t},r._getContainer=function(){return!1===this.config.container?document.body:c.isElement(this.config.container)?t(this.config.container):t(document).find(this.config.container)},r._getAttachment=function(e){return Q[e.toUpperCase()]},r._setListeners=function(){var e=this;this.config.trigger.split(" ").forEach((function(n){if("click"===n)t(e.element).on(e.constructor.Event.CLICK,e.config.selector,(function(t){return e.toggle(t)}));else if("manual"!==n){var r="hover"===n?e.constructor.Event.MOUSEENTER:e.constructor.Event.FOCUSIN,i="hover"===n?e.constructor.Event.MOUSELEAVE:e.constructor.Event.FOCUSOUT;t(e.element).on(r,e.config.selector,(function(t){return e._enter(t)})).on(i,e.config.selector,(function(t){return e._leave(t)}))}})),this._hideModalHandler=function(){e.element&&e.hide()},t(this.element).closest(".modal").on("hide.bs.modal",this._hideModalHandler),this.config.selector?this.config=s(s({},this.config),{},{trigger:"manual",selector:""}):this._fixTitle()},r._fixTitle=function(){var e=typeof this.element.getAttribute("data-original-title");(this.element.getAttribute("title")||"string"!==e)&&(this.element.setAttribute("data-original-title",this.element.getAttribute("title")||""),this.element.setAttribute("title",""))},r._enter=function(e,n){var r=this.constructor.DATA_KEY;(n=n||t(e.currentTarget).data(r))||(n=new this.constructor(e.currentTarget,this._getDelegateConfig()),t(e.currentTarget).data(r,n)),e&&(n._activeTrigger["focusin"===e.type?"focus":"hover"]=!0),t(n.getTipElement()).hasClass("show")||"show"===n._hoverState?n._hoverState="show":(clearTimeout(n._timeout),n._hoverState="show",n.config.delay&&n.config.delay.show?n._timeout=setTimeout((function(){"show"===n._hoverState&&n.show()}),n.config.delay.show):n.show())},r._leave=function(e,n){var r=this.constructor.DATA_KEY;(n=n||t(e.currentTarget).data(r))||(n=new this.constructor(e.currentTarget,this._getDelegateConfig()),t(e.currentTarget).data(r,n)),e&&(n._activeTrigger["focusout"===e.type?"focus":"hover"]=!1),n._isWithActiveTrigger()||(clearTimeout(n._timeout),n._hoverState="out",n.config.delay&&n.config.delay.hide?n._timeout=setTimeout((function(){"out"===n._hoverState&&n.hide()}),n.config.delay.hide):n.hide())},r._isWithActiveTrigger=function(){for(var e in this._activeTrigger)if(this._activeTrigger[e])return!0;return!1},r._getConfig=function(e){var n=t(this.element).data();return Object.keys(n).forEach((function(e){-1!==z.indexOf(e)&&delete n[e]})),"number"==typeof(e=s(s(s({},this.constructor.Default),n),"object"==typeof e&&e?e:{})).delay&&(e.delay={show:e.delay,hide:e.delay}),"number"==typeof e.title&&(e.title=e.title.toString()),"number"==typeof e.content&&(e.content=e.content.toString()),c.typeCheckConfig(B,e,this.constructor.DefaultType),e.sanitize&&(e.template=H(e.template,e.whiteList,e.sanitizeFn)),e},r._getDelegateConfig=function(){var e={};if(this.config)for(var t in this.config)this.constructor.Default[t]!==this.config[t]&&(e[t]=this.config[t]);return e},r._cleanTipClass=function(){var e=t(this.getTipElement()),n=e.attr("class").match(W);null!==n&&n.length&&e.removeClass(n.join(""))},r._handlePopperPlacementChange=function(e){this.tip=e.instance.popper,this._cleanTipClass(),this.addAttachmentClass(this._getAttachment(e.placement))},r._fixTransition=function(){var e=this.getTipElement(),n=this.config.animation;null===e.getAttribute("x-placement")&&(t(e).removeClass("fade"),this.config.animation=!1,this.hide(),this.show(),this.config.animation=n)},e._jQueryInterface=function(n){return this.each((function(){var r=t(this).data("bs.tooltip"),i="object"==typeof n&&n;if((r||!/dispose|hide/.test(n))&&(r||(r=new e(this,i),t(this).data("bs.tooltip",r)),"string"==typeof n)){if(void 0===r[n])throw new TypeError('No method named "'+n+'"');r[n]()}}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return X}},{key:"NAME",get:function(){return B}},{key:"DATA_KEY",get:function(){return"bs.tooltip"}},{key:"Event",get:function(){return K}},{key:"EVENT_KEY",get:function(){return".bs.tooltip"}},{key:"DefaultType",get:function(){return V}}]),e}();t.fn[B]=Y._jQueryInterface,t.fn[B].Constructor=Y,t.fn[B].noConflict=function(){return t.fn[B]=U,Y._jQueryInterface};var J="popover",G=t.fn[J],Z=new RegExp("(^|\\s)bs-popover\\S+","g"),ee=s(s({},Y.Default),{},{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'}),te=s(s({},Y.DefaultType),{},{content:"(string|element|function)"}),ne={HIDE:"hide.bs.popover",HIDDEN:"hidden.bs.popover",SHOW:"show.bs.popover",SHOWN:"shown.bs.popover",INSERTED:"inserted.bs.popover",CLICK:"click.bs.popover",FOCUSIN:"focusin.bs.popover",FOCUSOUT:"focusout.bs.popover",MOUSEENTER:"mouseenter.bs.popover",MOUSELEAVE:"mouseleave.bs.popover"},re=function(e){var n,r;function o(){return e.apply(this,arguments)||this}r=e,(n=o).prototype=Object.create(r.prototype),n.prototype.constructor=n,n.__proto__=r;var a=o.prototype;return a.isWithContent=function(){return this.getTitle()||this._getContent()},a.addAttachmentClass=function(e){t(this.getTipElement()).addClass("bs-popover-"+e)},a.getTipElement=function(){return this.tip=this.tip||t(this.config.template)[0],this.tip},a.setContent=function(){var e=t(this.getTipElement());this.setElementContent(e.find(".popover-header"),this.getTitle());var n=this._getContent();"function"==typeof n&&(n=n.call(this.element)),this.setElementContent(e.find(".popover-body"),n),e.removeClass("fade show")},a._getContent=function(){return this.element.getAttribute("data-content")||this.config.content},a._cleanTipClass=function(){var e=t(this.getTipElement()),n=e.attr("class").match(Z);null!==n&&n.length>0&&e.removeClass(n.join(""))},o._jQueryInterface=function(e){return this.each((function(){var n=t(this).data("bs.popover"),r="object"==typeof e?e:null;if((n||!/dispose|hide/.test(e))&&(n||(n=new o(this,r),t(this).data("bs.popover",n)),"string"==typeof e)){if(void 0===n[e])throw new TypeError('No method named "'+e+'"');n[e]()}}))},i(o,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return ee}},{key:"NAME",get:function(){return J}},{key:"DATA_KEY",get:function(){return"bs.popover"}},{key:"Event",get:function(){return ne}},{key:"EVENT_KEY",get:function(){return".bs.popover"}},{key:"DefaultType",get:function(){return te}}]),o}(Y);t.fn[J]=re._jQueryInterface,t.fn[J].Constructor=re,t.fn[J].noConflict=function(){return t.fn[J]=G,re._jQueryInterface};var ie="scrollspy",oe=t.fn[ie],ae={offset:10,method:"auto",target:""},se={offset:"number",method:"string",target:"(string|element)"},ue=function(){function e(e,n){var r=this;this._element=e,this._scrollElement="BODY"===e.tagName?window:e,this._config=this._getConfig(n),this._selector=this._config.target+" .nav-link,"+this._config.target+" .list-group-item,"+this._config.target+" .dropdown-item",this._offsets=[],this._targets=[],this._activeTarget=null,this._scrollHeight=0,t(this._scrollElement).on("scroll.bs.scrollspy",(function(e){return r._process(e)})),this.refresh(),this._process()}var n=e.prototype;return n.refresh=function(){var e=this,n=this._scrollElement===this._scrollElement.window?"offset":"position",r="auto"===this._config.method?n:this._config.method,i="position"===r?this._getScrollTop():0;this._offsets=[],this._targets=[],this._scrollHeight=this._getScrollHeight(),[].slice.call(document.querySelectorAll(this._selector)).map((function(e){var n,o=c.getSelectorFromElement(e);if(o&&(n=document.querySelector(o)),n){var a=n.getBoundingClientRect();if(a.width||a.height)return[t(n)[r]().top+i,o]}return null})).filter((function(e){return e})).sort((function(e,t){return e[0]-t[0]})).forEach((function(t){e._offsets.push(t[0]),e._targets.push(t[1])}))},n.dispose=function(){t.removeData(this._element,"bs.scrollspy"),t(this._scrollElement).off(".bs.scrollspy"),this._element=null,this._scrollElement=null,this._config=null,this._selector=null,this._offsets=null,this._targets=null,this._activeTarget=null,this._scrollHeight=null},n._getConfig=function(e){if("string"!=typeof(e=s(s({},ae),"object"==typeof e&&e?e:{})).target&&c.isElement(e.target)){var n=t(e.target).attr("id");n||(n=c.getUID(ie),t(e.target).attr("id",n)),e.target="#"+n}return c.typeCheckConfig(ie,e,se),e},n._getScrollTop=function(){return this._scrollElement===window?this._scrollElement.pageYOffset:this._scrollElement.scrollTop},n._getScrollHeight=function(){return this._scrollElement.scrollHeight||Math.max(document.body.scrollHeight,document.documentElement.scrollHeight)},n._getOffsetHeight=function(){return this._scrollElement===window?window.innerHeight:this._scrollElement.getBoundingClientRect().height},n._process=function(){var e=this._getScrollTop()+this._config.offset,t=this._getScrollHeight(),n=this._config.offset+t-this._getOffsetHeight();if(this._scrollHeight!==t&&this.refresh(),e>=n){var r=this._targets[this._targets.length-1];this._activeTarget!==r&&this._activate(r)}else{if(this._activeTarget&&e<this._offsets[0]&&this._offsets[0]>0)return this._activeTarget=null,void this._clear();for(var i=this._offsets.length;i--;)this._activeTarget!==this._targets[i]&&e>=this._offsets[i]&&(void 0===this._offsets[i+1]||e<this._offsets[i+1])&&this._activate(this._targets[i])}},n._activate=function(e){this._activeTarget=e,this._clear();var n=this._selector.split(",").map((function(t){return t+'[data-target="'+e+'"],'+t+'[href="'+e+'"]'})),r=t([].slice.call(document.querySelectorAll(n.join(","))));r.hasClass("dropdown-item")?(r.closest(".dropdown").find(".dropdown-toggle").addClass("active"),r.addClass("active")):(r.addClass("active"),r.parents(".nav, .list-group").prev(".nav-link, .list-group-item").addClass("active"),r.parents(".nav, .list-group").prev(".nav-item").children(".nav-link").addClass("active")),t(this._scrollElement).trigger("activate.bs.scrollspy",{relatedTarget:e})},n._clear=function(){[].slice.call(document.querySelectorAll(this._selector)).filter((function(e){return e.classList.contains("active")})).forEach((function(e){return e.classList.remove("active")}))},e._jQueryInterface=function(n){return this.each((function(){var r=t(this).data("bs.scrollspy");if(r||(r=new e(this,"object"==typeof n&&n),t(this).data("bs.scrollspy",r)),"string"==typeof n){if(void 0===r[n])throw new TypeError('No method named "'+n+'"');r[n]()}}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return ae}}]),e}();t(window).on("load.bs.scrollspy.data-api",(function(){for(var e=[].slice.call(document.querySelectorAll('[data-spy="scroll"]')),n=e.length;n--;){var r=t(e[n]);ue._jQueryInterface.call(r,r.data())}})),t.fn[ie]=ue._jQueryInterface,t.fn[ie].Constructor=ue,t.fn[ie].noConflict=function(){return t.fn[ie]=oe,ue._jQueryInterface};var ce=t.fn.tab,le=function(){function e(e){this._element=e}var n=e.prototype;return n.show=function(){var e=this;if(!(this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE&&t(this._element).hasClass("active")||t(this._element).hasClass("disabled"))){var n,r,i=t(this._element).closest(".nav, .list-group")[0],o=c.getSelectorFromElement(this._element);if(i){var a="UL"===i.nodeName||"OL"===i.nodeName?"> li > .active":".active";r=(r=t.makeArray(t(i).find(a)))[r.length-1]}var s=t.Event("hide.bs.tab",{relatedTarget:this._element}),u=t.Event("show.bs.tab",{relatedTarget:r});if(r&&t(r).trigger(s),t(this._element).trigger(u),!u.isDefaultPrevented()&&!s.isDefaultPrevented()){o&&(n=document.querySelector(o)),this._activate(this._element,i);var l=function(){var n=t.Event("hidden.bs.tab",{relatedTarget:e._element}),i=t.Event("shown.bs.tab",{relatedTarget:r});t(r).trigger(n),t(e._element).trigger(i)};n?this._activate(n,n.parentNode,l):l()}}},n.dispose=function(){t.removeData(this._element,"bs.tab"),this._element=null},n._activate=function(e,n,r){var i=this,o=(!n||"UL"!==n.nodeName&&"OL"!==n.nodeName?t(n).children(".active"):t(n).find("> li > .active"))[0],a=r&&o&&t(o).hasClass("fade"),s=function(){return i._transitionComplete(e,o,r)};if(o&&a){var u=c.getTransitionDurationFromElement(o);t(o).removeClass("show").one(c.TRANSITION_END,s).emulateTransitionEnd(u)}else s()},n._transitionComplete=function(e,n,r){if(n){t(n).removeClass("active");var i=t(n.parentNode).find("> .dropdown-menu .active")[0];i&&t(i).removeClass("active"),"tab"===n.getAttribute("role")&&n.setAttribute("aria-selected",!1)}if(t(e).addClass("active"),"tab"===e.getAttribute("role")&&e.setAttribute("aria-selected",!0),c.reflow(e),e.classList.contains("fade")&&e.classList.add("show"),e.parentNode&&t(e.parentNode).hasClass("dropdown-menu")){var o=t(e).closest(".dropdown")[0];if(o){var a=[].slice.call(o.querySelectorAll(".dropdown-toggle"));t(a).addClass("active")}e.setAttribute("aria-expanded",!0)}r&&r()},e._jQueryInterface=function(n){return this.each((function(){var r=t(this),i=r.data("bs.tab");if(i||(i=new e(this),r.data("bs.tab",i)),"string"==typeof n){if(void 0===i[n])throw new TypeError('No method named "'+n+'"');i[n]()}}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),e}();t(document).on("click.bs.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',(function(e){e.preventDefault(),le._jQueryInterface.call(t(this),"show")})),t.fn.tab=le._jQueryInterface,t.fn.tab.Constructor=le,t.fn.tab.noConflict=function(){return t.fn.tab=ce,le._jQueryInterface};var fe=t.fn.toast,de={animation:"boolean",autohide:"boolean",delay:"number"},pe={animation:!0,autohide:!0,delay:500},he=function(){function e(e,t){this._element=e,this._config=this._getConfig(t),this._timeout=null,this._setListeners()}var n=e.prototype;return n.show=function(){var e=this,n=t.Event("show.bs.toast");if(t(this._element).trigger(n),!n.isDefaultPrevented()){this._config.animation&&this._element.classList.add("fade");var r=function(){e._element.classList.remove("showing"),e._element.classList.add("show"),t(e._element).trigger("shown.bs.toast"),e._config.autohide&&(e._timeout=setTimeout((function(){e.hide()}),e._config.delay))};if(this._element.classList.remove("hide"),c.reflow(this._element),this._element.classList.add("showing"),this._config.animation){var i=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,r).emulateTransitionEnd(i)}else r()}},n.hide=function(){if(this._element.classList.contains("show")){var e=t.Event("hide.bs.toast");t(this._element).trigger(e),e.isDefaultPrevented()||this._close()}},n.dispose=function(){clearTimeout(this._timeout),this._timeout=null,this._element.classList.contains("show")&&this._element.classList.remove("show"),t(this._element).off("click.dismiss.bs.toast"),t.removeData(this._element,"bs.toast"),this._element=null,this._config=null},n._getConfig=function(e){return e=s(s(s({},pe),t(this._element).data()),"object"==typeof e&&e?e:{}),c.typeCheckConfig("toast",e,this.constructor.DefaultType),e},n._setListeners=function(){var e=this;t(this._element).on("click.dismiss.bs.toast",'[data-dismiss="toast"]',(function(){return e.hide()}))},n._close=function(){var e=this,n=function(){e._element.classList.add("hide"),t(e._element).trigger("hidden.bs.toast")};if(this._element.classList.remove("show"),this._config.animation){var r=c.getTransitionDurationFromElement(this._element);t(this._element).one(c.TRANSITION_END,n).emulateTransitionEnd(r)}else n()},e._jQueryInterface=function(n){return this.each((function(){var r=t(this),i=r.data("bs.toast");if(i||(i=new e(this,"object"==typeof n&&n),r.data("bs.toast",i)),"string"==typeof n){if(void 0===i[n])throw new TypeError('No method named "'+n+'"');i[n](this)}}))},i(e,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"DefaultType",get:function(){return de}},{key:"Default",get:function(){return pe}}]),e}();t.fn.toast=he._jQueryInterface,t.fn.toast.Constructor=he,t.fn.toast.noConflict=function(){return t.fn.toast=fe,he._jQueryInterface},e.Alert=d,e.Button=h,e.Carousel=w,e.Collapse=S,e.Dropdown=D,e.Modal=R,e.Popover=re,e.Scrollspy=ue,e.Tab=le,e.Toast=he,e.Tooltip=Y,e.Util=c,Object.defineProperty(e,"__esModule",{value:!0})}(t,n(3),n(2))},function(e,t,n){e.exports=n(20)},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(21),a=n(11);function s(e){var t=new o(e),n=i(o.prototype.request,t);return r.extend(n,o.prototype,t),r.extend(n,t),n}var u=s(n(7));u.Axios=o,u.create=function(e){return s(a(u.defaults,e))},u.Cancel=n(12),u.CancelToken=n(34),u.isCancel=n(6),u.all=function(e){return Promise.all(e)},u.spread=n(35),e.exports=u,e.exports.default=u},function(e,t,n){"use strict";var r=n(0),i=n(5),o=n(22),a=n(23),s=n(11);function u(e){this.defaults=e,this.interceptors={request:new o,response:new o}}u.prototype.request=function(e){"string"==typeof e?(e=arguments[1]||{}).url=arguments[0]:e=e||{},(e=s(this.defaults,e)).method?e.method=e.method.toLowerCase():this.defaults.method?e.method=this.defaults.method.toLowerCase():e.method="get";var t=[a,void 0],n=Promise.resolve(e);for(this.interceptors.request.forEach((function(e){t.unshift(e.fulfilled,e.rejected)})),this.interceptors.response.forEach((function(e){t.push(e.fulfilled,e.rejected)}));t.length;)n=n.then(t.shift(),t.shift());return n},u.prototype.getUri=function(e){return e=s(this.defaults,e),i(e.url,e.params,e.paramsSerializer).replace(/^\?/,"")},r.forEach(["delete","get","head","options"],(function(e){u.prototype[e]=function(t,n){return this.request(r.merge(n||{},{method:e,url:t}))}})),r.forEach(["post","put","patch"],(function(e){u.prototype[e]=function(t,n,i){return this.request(r.merge(i||{},{method:e,url:t,data:n}))}})),e.exports=u},function(e,t,n){"use strict";var r=n(0);function i(){this.handlers=[]}i.prototype.use=function(e,t){return this.handlers.push({fulfilled:e,rejected:t}),this.handlers.length-1},i.prototype.eject=function(e){this.handlers[e]&&(this.handlers[e]=null)},i.prototype.forEach=function(e){r.forEach(this.handlers,(function(t){null!==t&&e(t)}))},e.exports=i},function(e,t,n){"use strict";var r=n(0),i=n(24),o=n(6),a=n(7);function s(e){e.cancelToken&&e.cancelToken.throwIfRequested()}e.exports=function(e){return s(e),e.headers=e.headers||{},e.data=i(e.data,e.headers,e.transformRequest),e.headers=r.merge(e.headers.common||{},e.headers[e.method]||{},e.headers),r.forEach(["delete","get","head","post","put","patch","common"],(function(t){delete e.headers[t]})),(e.adapter||a.adapter)(e).then((function(t){return s(e),t.data=i(t.data,t.headers,e.transformResponse),t}),(function(t){return o(t)||(s(e),t&&t.response&&(t.response.data=i(t.response.data,t.response.headers,e.transformResponse))),Promise.reject(t)}))}},function(e,t,n){"use strict";var r=n(0);e.exports=function(e,t,n){return r.forEach(n,(function(n){e=n(e,t)})),e}},function(e,t,n){"use strict";var r=n(0);e.exports=function(e,t){r.forEach(e,(function(n,r){r!==t&&r.toUpperCase()===t.toUpperCase()&&(e[t]=n,delete e[r])}))}},function(e,t,n){"use strict";var r=n(10);e.exports=function(e,t,n){var i=n.config.validateStatus;!i||i(n.status)?e(n):t(r("Request failed with status code "+n.status,n.config,null,n.request,n))}},function(e,t,n){"use strict";e.exports=function(e,t,n,r,i){return e.config=t,n&&(e.code=n),e.request=r,e.response=i,e.isAxiosError=!0,e.toJSON=function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:this.config,code:this.code}},e}},function(e,t,n){"use strict";var r=n(29),i=n(30);e.exports=function(e,t){return e&&!r(t)?i(e,t):t}},function(e,t,n){"use strict";e.exports=function(e){return/^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(e)}},function(e,t,n){"use strict";e.exports=function(e,t){return t?e.replace(/\/+$/,"")+"/"+t.replace(/^\/+/,""):e}},function(e,t,n){"use strict";var r=n(0),i=["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"];e.exports=function(e){var t,n,o,a={};return e?(r.forEach(e.split("\n"),(function(e){if(o=e.indexOf(":"),t=r.trim(e.substr(0,o)).toLowerCase(),n=r.trim(e.substr(o+1)),t){if(a[t]&&i.indexOf(t)>=0)return;a[t]="set-cookie"===t?(a[t]?a[t]:[]).concat([n]):a[t]?a[t]+", "+n:n}})),a):a}},function(e,t,n){"use strict";var r=n(0);e.exports=r.isStandardBrowserEnv()?function(){var e,t=/(msie|trident)/i.test(navigator.userAgent),n=document.createElement("a");function i(e){var r=e;return t&&(n.setAttribute("href",r),r=n.href),n.setAttribute("href",r),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:"/"===n.pathname.charAt(0)?n.pathname:"/"+n.pathname}}return e=i(window.location.href),function(t){var n=r.isString(t)?i(t):t;return n.protocol===e.protocol&&n.host===e.host}}():function(){return!0}},function(e,t,n){"use strict";var r=n(0);e.exports=r.isStandardBrowserEnv()?{write:function(e,t,n,i,o,a){var s=[];s.push(e+"="+encodeURIComponent(t)),r.isNumber(n)&&s.push("expires="+new Date(n).toGMTString()),r.isString(i)&&s.push("path="+i),r.isString(o)&&s.push("domain="+o),!0===a&&s.push("secure"),document.cookie=s.join("; ")},read:function(e){var t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove:function(e){this.write(e,"",Date.now()-864e5)}}:{write:function(){},read:function(){return null},remove:function(){}}},function(e,t,n){"use strict";var r=n(12);function i(e){if("function"!=typeof e)throw new TypeError("executor must be a function.");var t;this.promise=new Promise((function(e){t=e}));var n=this;e((function(e){n.reason||(n.reason=new r(e),t(n.reason))}))}i.prototype.throwIfRequested=function(){if(this.reason)throw this.reason},i.source=function(){var e;return{token:new i((function(t){e=t})),cancel:e}},e.exports=i},function(e,t,n){"use strict";e.exports=function(e){return function(t){return e.apply(null,t)}}},function(e,t,n){e.exports=n(37)},function(e,t,n){"use strict";(function(t,n){var r=Object.freeze({});function i(e){return null==e}function o(e){return null!=e}function a(e){return!0===e}function s(e){return"string"==typeof e||"number"==typeof e||"symbol"==typeof e||"boolean"==typeof e}function u(e){return null!==e&&"object"==typeof e}var c=Object.prototype.toString;function l(e){return"[object Object]"===c.call(e)}function f(e){var t=parseFloat(String(e));return t>=0&&Math.floor(t)===t&&isFinite(e)}function d(e){return o(e)&&"function"==typeof e.then&&"function"==typeof e.catch}function p(e){return null==e?"":Array.isArray(e)||l(e)&&e.toString===c?JSON.stringify(e,null,2):String(e)}function h(e){var t=parseFloat(e);return isNaN(t)?e:t}function v(e,t){for(var n=Object.create(null),r=e.split(","),i=0;i<r.length;i++)n[r[i]]=!0;return t?function(e){return n[e.toLowerCase()]}:function(e){return n[e]}}var g=v("slot,component",!0),m=v("key,ref,slot,slot-scope,is");function y(e,t){if(e.length){var n=e.indexOf(t);if(n>-1)return e.splice(n,1)}}var _=Object.prototype.hasOwnProperty;function b(e,t){return _.call(e,t)}function w(e){var t=Object.create(null);return function(n){return t[n]||(t[n]=e(n))}}var x=/-(\w)/g,C=w((function(e){return e.replace(x,(function(e,t){return t?t.toUpperCase():""}))})),E=w((function(e){return e.charAt(0).toUpperCase()+e.slice(1)})),T=/\B([A-Z])/g,S=w((function(e){return e.replace(T,"-$1").toLowerCase()})),A=Function.prototype.bind?function(e,t){return e.bind(t)}:function(e,t){function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}return n._length=e.length,n};function k(e,t){t=t||0;for(var n=e.length-t,r=new Array(n);n--;)r[n]=e[n+t];return r}function O(e,t){for(var n in t)e[n]=t[n];return e}function j(e){for(var t={},n=0;n<e.length;n++)e[n]&&O(t,e[n]);return t}function N(e,t,n){}var D=function(e,t,n){return!1},$=function(e){return e};function L(e,t){if(e===t)return!0;var n=u(e),r=u(t);if(!n||!r)return!n&&!r&&String(e)===String(t);try{var i=Array.isArray(e),o=Array.isArray(t);if(i&&o)return e.length===t.length&&e.every((function(e,n){return L(e,t[n])}));if(e instanceof Date&&t instanceof Date)return e.getTime()===t.getTime();if(i||o)return!1;var a=Object.keys(e),s=Object.keys(t);return a.length===s.length&&a.every((function(n){return L(e[n],t[n])}))}catch(e){return!1}}function I(e,t){for(var n=0;n<e.length;n++)if(L(e[n],t))return n;return-1}function R(e){var t=!1;return function(){t||(t=!0,e.apply(this,arguments))}}var P="data-server-rendered",M=["component","directive","filter"],F=["beforeCreate","created","beforeMount","mounted","beforeUpdate","updated","beforeDestroy","destroyed","activated","deactivated","errorCaptured","serverPrefetch"],q={optionMergeStrategies:Object.create(null),silent:!1,productionTip:!1,devtools:!1,performance:!1,errorHandler:null,warnHandler:null,ignoredElements:[],keyCodes:Object.create(null),isReservedTag:D,isReservedAttr:D,isUnknownElement:D,getTagNamespace:N,parsePlatformTagName:$,mustUseProp:D,async:!0,_lifecycleHooks:F},H=/a-zA-Z\u00B7\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u037D\u037F-\u1FFF\u200C-\u200D\u203F-\u2040\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD/;function B(e,t,n,r){Object.defineProperty(e,t,{value:n,enumerable:!!r,writable:!0,configurable:!0})}var U,W=new RegExp("[^"+H.source+".$_\\d]"),z="__proto__"in{},V="undefined"!=typeof window,Q="undefined"!=typeof WXEnvironment&&!!WXEnvironment.platform,X=Q&&WXEnvironment.platform.toLowerCase(),K=V&&window.navigator.userAgent.toLowerCase(),Y=K&&/msie|trident/.test(K),J=K&&K.indexOf("msie 9.0")>0,G=K&&K.indexOf("edge/")>0,Z=(K&&K.indexOf("android"),K&&/iphone|ipad|ipod|ios/.test(K)||"ios"===X),ee=(K&&/chrome\/\d+/.test(K),K&&/phantomjs/.test(K),K&&K.match(/firefox\/(\d+)/)),te={}.watch,ne=!1;if(V)try{var re={};Object.defineProperty(re,"passive",{get:function(){ne=!0}}),window.addEventListener("test-passive",null,re)}catch(r){}var ie=function(){return void 0===U&&(U=!V&&!Q&&void 0!==t&&t.process&&"server"===t.process.env.VUE_ENV),U},oe=V&&window.__VUE_DEVTOOLS_GLOBAL_HOOK__;function ae(e){return"function"==typeof e&&/native code/.test(e.toString())}var se,ue="undefined"!=typeof Symbol&&ae(Symbol)&&"undefined"!=typeof Reflect&&ae(Reflect.ownKeys);se="undefined"!=typeof Set&&ae(Set)?Set:function(){function e(){this.set=Object.create(null)}return e.prototype.has=function(e){return!0===this.set[e]},e.prototype.add=function(e){this.set[e]=!0},e.prototype.clear=function(){this.set=Object.create(null)},e}();var ce=N,le=0,fe=function(){this.id=le++,this.subs=[]};fe.prototype.addSub=function(e){this.subs.push(e)},fe.prototype.removeSub=function(e){y(this.subs,e)},fe.prototype.depend=function(){fe.target&&fe.target.addDep(this)},fe.prototype.notify=function(){for(var e=this.subs.slice(),t=0,n=e.length;t<n;t++)e[t].update()},fe.target=null;var de=[];function pe(e){de.push(e),fe.target=e}function he(){de.pop(),fe.target=de[de.length-1]}var ve=function(e,t,n,r,i,o,a,s){this.tag=e,this.data=t,this.children=n,this.text=r,this.elm=i,this.ns=void 0,this.context=o,this.fnContext=void 0,this.fnOptions=void 0,this.fnScopeId=void 0,this.key=t&&t.key,this.componentOptions=a,this.componentInstance=void 0,this.parent=void 0,this.raw=!1,this.isStatic=!1,this.isRootInsert=!0,this.isComment=!1,this.isCloned=!1,this.isOnce=!1,this.asyncFactory=s,this.asyncMeta=void 0,this.isAsyncPlaceholder=!1},ge={child:{configurable:!0}};ge.child.get=function(){return this.componentInstance},Object.defineProperties(ve.prototype,ge);var me=function(e){void 0===e&&(e="");var t=new ve;return t.text=e,t.isComment=!0,t};function ye(e){return new ve(void 0,void 0,void 0,String(e))}function _e(e){var t=new ve(e.tag,e.data,e.children&&e.children.slice(),e.text,e.elm,e.context,e.componentOptions,e.asyncFactory);return t.ns=e.ns,t.isStatic=e.isStatic,t.key=e.key,t.isComment=e.isComment,t.fnContext=e.fnContext,t.fnOptions=e.fnOptions,t.fnScopeId=e.fnScopeId,t.asyncMeta=e.asyncMeta,t.isCloned=!0,t}var be=Array.prototype,we=Object.create(be);["push","pop","shift","unshift","splice","sort","reverse"].forEach((function(e){var t=be[e];B(we,e,(function(){for(var n=[],r=arguments.length;r--;)n[r]=arguments[r];var i,o=t.apply(this,n),a=this.__ob__;switch(e){case"push":case"unshift":i=n;break;case"splice":i=n.slice(2)}return i&&a.observeArray(i),a.dep.notify(),o}))}));var xe=Object.getOwnPropertyNames(we),Ce=!0;function Ee(e){Ce=e}var Te=function(e){var t;this.value=e,this.dep=new fe,this.vmCount=0,B(e,"__ob__",this),Array.isArray(e)?(z?(t=we,e.__proto__=t):function(e,t,n){for(var r=0,i=n.length;r<i;r++){var o=n[r];B(e,o,t[o])}}(e,we,xe),this.observeArray(e)):this.walk(e)};function Se(e,t){var n;if(u(e)&&!(e instanceof ve))return b(e,"__ob__")&&e.__ob__ instanceof Te?n=e.__ob__:Ce&&!ie()&&(Array.isArray(e)||l(e))&&Object.isExtensible(e)&&!e._isVue&&(n=new Te(e)),t&&n&&n.vmCount++,n}function Ae(e,t,n,r,i){var o=new fe,a=Object.getOwnPropertyDescriptor(e,t);if(!a||!1!==a.configurable){var s=a&&a.get,u=a&&a.set;s&&!u||2!==arguments.length||(n=e[t]);var c=!i&&Se(n);Object.defineProperty(e,t,{enumerable:!0,configurable:!0,get:function(){var t=s?s.call(e):n;return fe.target&&(o.depend(),c&&(c.dep.depend(),Array.isArray(t)&&function e(t){for(var n=void 0,r=0,i=t.length;r<i;r++)(n=t[r])&&n.__ob__&&n.__ob__.dep.depend(),Array.isArray(n)&&e(n)}(t))),t},set:function(t){var r=s?s.call(e):n;t===r||t!=t&&r!=r||s&&!u||(u?u.call(e,t):n=t,c=!i&&Se(t),o.notify())}})}}function ke(e,t,n){if(Array.isArray(e)&&f(t))return e.length=Math.max(e.length,t),e.splice(t,1,n),n;if(t in e&&!(t in Object.prototype))return e[t]=n,n;var r=e.__ob__;return e._isVue||r&&r.vmCount?n:r?(Ae(r.value,t,n),r.dep.notify(),n):(e[t]=n,n)}function Oe(e,t){if(Array.isArray(e)&&f(t))e.splice(t,1);else{var n=e.__ob__;e._isVue||n&&n.vmCount||b(e,t)&&(delete e[t],n&&n.dep.notify())}}Te.prototype.walk=function(e){for(var t=Object.keys(e),n=0;n<t.length;n++)Ae(e,t[n])},Te.prototype.observeArray=function(e){for(var t=0,n=e.length;t<n;t++)Se(e[t])};var je=q.optionMergeStrategies;function Ne(e,t){if(!t)return e;for(var n,r,i,o=ue?Reflect.ownKeys(t):Object.keys(t),a=0;a<o.length;a++)"__ob__"!==(n=o[a])&&(r=e[n],i=t[n],b(e,n)?r!==i&&l(r)&&l(i)&&Ne(r,i):ke(e,n,i));return e}function De(e,t,n){return n?function(){var r="function"==typeof t?t.call(n,n):t,i="function"==typeof e?e.call(n,n):e;return r?Ne(r,i):i}:t?e?function(){return Ne("function"==typeof t?t.call(this,this):t,"function"==typeof e?e.call(this,this):e)}:t:e}function $e(e,t){var n=t?e?e.concat(t):Array.isArray(t)?t:[t]:e;return n?function(e){for(var t=[],n=0;n<e.length;n++)-1===t.indexOf(e[n])&&t.push(e[n]);return t}(n):n}function Le(e,t,n,r){var i=Object.create(e||null);return t?O(i,t):i}je.data=function(e,t,n){return n?De(e,t,n):t&&"function"!=typeof t?e:De(e,t)},F.forEach((function(e){je[e]=$e})),M.forEach((function(e){je[e+"s"]=Le})),je.watch=function(e,t,n,r){if(e===te&&(e=void 0),t===te&&(t=void 0),!t)return Object.create(e||null);if(!e)return t;var i={};for(var o in O(i,e),t){var a=i[o],s=t[o];a&&!Array.isArray(a)&&(a=[a]),i[o]=a?a.concat(s):Array.isArray(s)?s:[s]}return i},je.props=je.methods=je.inject=je.computed=function(e,t,n,r){if(!e)return t;var i=Object.create(null);return O(i,e),t&&O(i,t),i},je.provide=De;var Ie=function(e,t){return void 0===t?e:t};function Re(e,t,n){if("function"==typeof t&&(t=t.options),function(e,t){var n=e.props;if(n){var r,i,o={};if(Array.isArray(n))for(r=n.length;r--;)"string"==typeof(i=n[r])&&(o[C(i)]={type:null});else if(l(n))for(var a in n)i=n[a],o[C(a)]=l(i)?i:{type:i};e.props=o}}(t),function(e,t){var n=e.inject;if(n){var r=e.inject={};if(Array.isArray(n))for(var i=0;i<n.length;i++)r[n[i]]={from:n[i]};else if(l(n))for(var o in n){var a=n[o];r[o]=l(a)?O({from:o},a):{from:a}}}}(t),function(e){var t=e.directives;if(t)for(var n in t){var r=t[n];"function"==typeof r&&(t[n]={bind:r,update:r})}}(t),!t._base&&(t.extends&&(e=Re(e,t.extends,n)),t.mixins))for(var r=0,i=t.mixins.length;r<i;r++)e=Re(e,t.mixins[r],n);var o,a={};for(o in e)s(o);for(o in t)b(e,o)||s(o);function s(r){var i=je[r]||Ie;a[r]=i(e[r],t[r],n,r)}return a}function Pe(e,t,n,r){if("string"==typeof n){var i=e[t];if(b(i,n))return i[n];var o=C(n);if(b(i,o))return i[o];var a=E(o);return b(i,a)?i[a]:i[n]||i[o]||i[a]}}function Me(e,t,n,r){var i=t[e],o=!b(n,e),a=n[e],s=He(Boolean,i.type);if(s>-1)if(o&&!b(i,"default"))a=!1;else if(""===a||a===S(e)){var u=He(String,i.type);(u<0||s<u)&&(a=!0)}if(void 0===a){a=function(e,t,n){if(b(t,"default")){var r=t.default;return e&&e.$options.propsData&&void 0===e.$options.propsData[n]&&void 0!==e._props[n]?e._props[n]:"function"==typeof r&&"Function"!==Fe(t.type)?r.call(e):r}}(r,i,e);var c=Ce;Ee(!0),Se(a),Ee(c)}return a}function Fe(e){var t=e&&e.toString().match(/^\s*function (\w+)/);return t?t[1]:""}function qe(e,t){return Fe(e)===Fe(t)}function He(e,t){if(!Array.isArray(t))return qe(t,e)?0:-1;for(var n=0,r=t.length;n<r;n++)if(qe(t[n],e))return n;return-1}function Be(e,t,n){pe();try{if(t)for(var r=t;r=r.$parent;){var i=r.$options.errorCaptured;if(i)for(var o=0;o<i.length;o++)try{if(!1===i[o].call(r,e,t,n))return}catch(e){We(e,r,"errorCaptured hook")}}We(e,t,n)}finally{he()}}function Ue(e,t,n,r,i){var o;try{(o=n?e.apply(t,n):e.call(t))&&!o._isVue&&d(o)&&!o._handled&&(o.catch((function(e){return Be(e,r,i+" (Promise/async)")})),o._handled=!0)}catch(e){Be(e,r,i)}return o}function We(e,t,n){if(q.errorHandler)try{return q.errorHandler.call(null,e,t,n)}catch(t){t!==e&&ze(t,null,"config.errorHandler")}ze(e,t,n)}function ze(e,t,n){if(!V&&!Q||"undefined"==typeof console)throw e;console.error(e)}var Ve,Qe=!1,Xe=[],Ke=!1;function Ye(){Ke=!1;var e=Xe.slice(0);Xe.length=0;for(var t=0;t<e.length;t++)e[t]()}if("undefined"!=typeof Promise&&ae(Promise)){var Je=Promise.resolve();Ve=function(){Je.then(Ye),Z&&setTimeout(N)},Qe=!0}else if(Y||"undefined"==typeof MutationObserver||!ae(MutationObserver)&&"[object MutationObserverConstructor]"!==MutationObserver.toString())Ve=void 0!==n&&ae(n)?function(){n(Ye)}:function(){setTimeout(Ye,0)};else{var Ge=1,Ze=new MutationObserver(Ye),et=document.createTextNode(String(Ge));Ze.observe(et,{characterData:!0}),Ve=function(){Ge=(Ge+1)%2,et.data=String(Ge)},Qe=!0}function tt(e,t){var n;if(Xe.push((function(){if(e)try{e.call(t)}catch(e){Be(e,t,"nextTick")}else n&&n(t)})),Ke||(Ke=!0,Ve()),!e&&"undefined"!=typeof Promise)return new Promise((function(e){n=e}))}var nt=new se;function rt(e){!function e(t,n){var r,i,o=Array.isArray(t);if(!(!o&&!u(t)||Object.isFrozen(t)||t instanceof ve)){if(t.__ob__){var a=t.__ob__.dep.id;if(n.has(a))return;n.add(a)}if(o)for(r=t.length;r--;)e(t[r],n);else for(r=(i=Object.keys(t)).length;r--;)e(t[i[r]],n)}}(e,nt),nt.clear()}var it=w((function(e){var t="&"===e.charAt(0),n="~"===(e=t?e.slice(1):e).charAt(0),r="!"===(e=n?e.slice(1):e).charAt(0);return{name:e=r?e.slice(1):e,once:n,capture:r,passive:t}}));function ot(e,t){function n(){var e=arguments,r=n.fns;if(!Array.isArray(r))return Ue(r,null,arguments,t,"v-on handler");for(var i=r.slice(),o=0;o<i.length;o++)Ue(i[o],null,e,t,"v-on handler")}return n.fns=e,n}function at(e,t,n,r,o,s){var u,c,l,f;for(u in e)c=e[u],l=t[u],f=it(u),i(c)||(i(l)?(i(c.fns)&&(c=e[u]=ot(c,s)),a(f.once)&&(c=e[u]=o(f.name,c,f.capture)),n(f.name,c,f.capture,f.passive,f.params)):c!==l&&(l.fns=c,e[u]=l));for(u in t)i(e[u])&&r((f=it(u)).name,t[u],f.capture)}function st(e,t,n){var r;e instanceof ve&&(e=e.data.hook||(e.data.hook={}));var s=e[t];function u(){n.apply(this,arguments),y(r.fns,u)}i(s)?r=ot([u]):o(s.fns)&&a(s.merged)?(r=s).fns.push(u):r=ot([s,u]),r.merged=!0,e[t]=r}function ut(e,t,n,r,i){if(o(t)){if(b(t,n))return e[n]=t[n],i||delete t[n],!0;if(b(t,r))return e[n]=t[r],i||delete t[r],!0}return!1}function ct(e){return s(e)?[ye(e)]:Array.isArray(e)?function e(t,n){var r,u,c,l,f=[];for(r=0;r<t.length;r++)i(u=t[r])||"boolean"==typeof u||(l=f[c=f.length-1],Array.isArray(u)?u.length>0&&(lt((u=e(u,(n||"")+"_"+r))[0])&&lt(l)&&(f[c]=ye(l.text+u[0].text),u.shift()),f.push.apply(f,u)):s(u)?lt(l)?f[c]=ye(l.text+u):""!==u&&f.push(ye(u)):lt(u)&&lt(l)?f[c]=ye(l.text+u.text):(a(t._isVList)&&o(u.tag)&&i(u.key)&&o(n)&&(u.key="__vlist"+n+"_"+r+"__"),f.push(u)));return f}(e):void 0}function lt(e){return o(e)&&o(e.text)&&!1===e.isComment}function ft(e,t){if(e){for(var n=Object.create(null),r=ue?Reflect.ownKeys(e):Object.keys(e),i=0;i<r.length;i++){var o=r[i];if("__ob__"!==o){for(var a=e[o].from,s=t;s;){if(s._provided&&b(s._provided,a)){n[o]=s._provided[a];break}s=s.$parent}if(!s&&"default"in e[o]){var u=e[o].default;n[o]="function"==typeof u?u.call(t):u}}}return n}}function dt(e,t){if(!e||!e.length)return{};for(var n={},r=0,i=e.length;r<i;r++){var o=e[r],a=o.data;if(a&&a.attrs&&a.attrs.slot&&delete a.attrs.slot,o.context!==t&&o.fnContext!==t||!a||null==a.slot)(n.default||(n.default=[])).push(o);else{var s=a.slot,u=n[s]||(n[s]=[]);"template"===o.tag?u.push.apply(u,o.children||[]):u.push(o)}}for(var c in n)n[c].every(pt)&&delete n[c];return n}function pt(e){return e.isComment&&!e.asyncFactory||" "===e.text}function ht(e,t,n){var i,o=Object.keys(t).length>0,a=e?!!e.$stable:!o,s=e&&e.$key;if(e){if(e._normalized)return e._normalized;if(a&&n&&n!==r&&s===n.$key&&!o&&!n.$hasNormal)return n;for(var u in i={},e)e[u]&&"$"!==u[0]&&(i[u]=vt(t,u,e[u]))}else i={};for(var c in t)c in i||(i[c]=gt(t,c));return e&&Object.isExtensible(e)&&(e._normalized=i),B(i,"$stable",a),B(i,"$key",s),B(i,"$hasNormal",o),i}function vt(e,t,n){var r=function(){var e=arguments.length?n.apply(null,arguments):n({});return(e=e&&"object"==typeof e&&!Array.isArray(e)?[e]:ct(e))&&(0===e.length||1===e.length&&e[0].isComment)?void 0:e};return n.proxy&&Object.defineProperty(e,t,{get:r,enumerable:!0,configurable:!0}),r}function gt(e,t){return function(){return e[t]}}function mt(e,t){var n,r,i,a,s;if(Array.isArray(e)||"string"==typeof e)for(n=new Array(e.length),r=0,i=e.length;r<i;r++)n[r]=t(e[r],r);else if("number"==typeof e)for(n=new Array(e),r=0;r<e;r++)n[r]=t(r+1,r);else if(u(e))if(ue&&e[Symbol.iterator]){n=[];for(var c=e[Symbol.iterator](),l=c.next();!l.done;)n.push(t(l.value,n.length)),l=c.next()}else for(a=Object.keys(e),n=new Array(a.length),r=0,i=a.length;r<i;r++)s=a[r],n[r]=t(e[s],s,r);return o(n)||(n=[]),n._isVList=!0,n}function yt(e,t,n,r){var i,o=this.$scopedSlots[e];o?(n=n||{},r&&(n=O(O({},r),n)),i=o(n)||t):i=this.$slots[e]||t;var a=n&&n.slot;return a?this.$createElement("template",{slot:a},i):i}function _t(e){return Pe(this.$options,"filters",e)||$}function bt(e,t){return Array.isArray(e)?-1===e.indexOf(t):e!==t}function wt(e,t,n,r,i){var o=q.keyCodes[t]||n;return i&&r&&!q.keyCodes[t]?bt(i,r):o?bt(o,e):r?S(r)!==t:void 0}function xt(e,t,n,r,i){if(n&&u(n)){var o;Array.isArray(n)&&(n=j(n));var a=function(a){if("class"===a||"style"===a||m(a))o=e;else{var s=e.attrs&&e.attrs.type;o=r||q.mustUseProp(t,s,a)?e.domProps||(e.domProps={}):e.attrs||(e.attrs={})}var u=C(a),c=S(a);u in o||c in o||(o[a]=n[a],i&&((e.on||(e.on={}))["update:"+a]=function(e){n[a]=e}))};for(var s in n)a(s)}return e}function Ct(e,t){var n=this._staticTrees||(this._staticTrees=[]),r=n[e];return r&&!t||Tt(r=n[e]=this.$options.staticRenderFns[e].call(this._renderProxy,null,this),"__static__"+e,!1),r}function Et(e,t,n){return Tt(e,"__once__"+t+(n?"_"+n:""),!0),e}function Tt(e,t,n){if(Array.isArray(e))for(var r=0;r<e.length;r++)e[r]&&"string"!=typeof e[r]&&St(e[r],t+"_"+r,n);else St(e,t,n)}function St(e,t,n){e.isStatic=!0,e.key=t,e.isOnce=n}function At(e,t){if(t&&l(t)){var n=e.on=e.on?O({},e.on):{};for(var r in t){var i=n[r],o=t[r];n[r]=i?[].concat(i,o):o}}return e}function kt(e,t,n,r){t=t||{$stable:!n};for(var i=0;i<e.length;i++){var o=e[i];Array.isArray(o)?kt(o,t,n):o&&(o.proxy&&(o.fn.proxy=!0),t[o.key]=o.fn)}return r&&(t.$key=r),t}function Ot(e,t){for(var n=0;n<t.length;n+=2){var r=t[n];"string"==typeof r&&r&&(e[t[n]]=t[n+1])}return e}function jt(e,t){return"string"==typeof e?t+e:e}function Nt(e){e._o=Et,e._n=h,e._s=p,e._l=mt,e._t=yt,e._q=L,e._i=I,e._m=Ct,e._f=_t,e._k=wt,e._b=xt,e._v=ye,e._e=me,e._u=kt,e._g=At,e._d=Ot,e._p=jt}function Dt(e,t,n,i,o){var s,u=this,c=o.options;b(i,"_uid")?(s=Object.create(i))._original=i:(s=i,i=i._original);var l=a(c._compiled),f=!l;this.data=e,this.props=t,this.children=n,this.parent=i,this.listeners=e.on||r,this.injections=ft(c.inject,i),this.slots=function(){return u.$slots||ht(e.scopedSlots,u.$slots=dt(n,i)),u.$slots},Object.defineProperty(this,"scopedSlots",{enumerable:!0,get:function(){return ht(e.scopedSlots,this.slots())}}),l&&(this.$options=c,this.$slots=this.slots(),this.$scopedSlots=ht(e.scopedSlots,this.$slots)),c._scopeId?this._c=function(e,t,n,r){var o=Ft(s,e,t,n,r,f);return o&&!Array.isArray(o)&&(o.fnScopeId=c._scopeId,o.fnContext=i),o}:this._c=function(e,t,n,r){return Ft(s,e,t,n,r,f)}}function $t(e,t,n,r,i){var o=_e(e);return o.fnContext=n,o.fnOptions=r,t.slot&&((o.data||(o.data={})).slot=t.slot),o}function Lt(e,t){for(var n in t)e[C(n)]=t[n]}Nt(Dt.prototype);var It={init:function(e,t){if(e.componentInstance&&!e.componentInstance._isDestroyed&&e.data.keepAlive){var n=e;It.prepatch(n,n)}else(e.componentInstance=function(e,t){var n={_isComponent:!0,_parentVnode:e,parent:t},r=e.data.inlineTemplate;return o(r)&&(n.render=r.render,n.staticRenderFns=r.staticRenderFns),new e.componentOptions.Ctor(n)}(e,Kt)).$mount(t?e.elm:void 0,t)},prepatch:function(e,t){var n=t.componentOptions;!function(e,t,n,i,o){var a=i.data.scopedSlots,s=e.$scopedSlots,u=!!(a&&!a.$stable||s!==r&&!s.$stable||a&&e.$scopedSlots.$key!==a.$key),c=!!(o||e.$options._renderChildren||u);if(e.$options._parentVnode=i,e.$vnode=i,e._vnode&&(e._vnode.parent=i),e.$options._renderChildren=o,e.$attrs=i.data.attrs||r,e.$listeners=n||r,t&&e.$options.props){Ee(!1);for(var l=e._props,f=e.$options._propKeys||[],d=0;d<f.length;d++){var p=f[d],h=e.$options.props;l[p]=Me(p,h,t,e)}Ee(!0),e.$options.propsData=t}n=n||r;var v=e.$options._parentListeners;e.$options._parentListeners=n,Xt(e,n,v),c&&(e.$slots=dt(o,i.context),e.$forceUpdate())}(t.componentInstance=e.componentInstance,n.propsData,n.listeners,t,n.children)},insert:function(e){var t,n=e.context,r=e.componentInstance;r._isMounted||(r._isMounted=!0,Zt(r,"mounted")),e.data.keepAlive&&(n._isMounted?((t=r)._inactive=!1,tn.push(t)):Gt(r,!0))},destroy:function(e){var t=e.componentInstance;t._isDestroyed||(e.data.keepAlive?function e(t,n){if(!(n&&(t._directInactive=!0,Jt(t))||t._inactive)){t._inactive=!0;for(var r=0;r<t.$children.length;r++)e(t.$children[r]);Zt(t,"deactivated")}}(t,!0):t.$destroy())}},Rt=Object.keys(It);function Pt(e,t,n,s,c){if(!i(e)){var l=n.$options._base;if(u(e)&&(e=l.extend(e)),"function"==typeof e){var f;if(i(e.cid)&&void 0===(e=function(e,t){if(a(e.error)&&o(e.errorComp))return e.errorComp;if(o(e.resolved))return e.resolved;var n=Ht;if(n&&o(e.owners)&&-1===e.owners.indexOf(n)&&e.owners.push(n),a(e.loading)&&o(e.loadingComp))return e.loadingComp;if(n&&!o(e.owners)){var r=e.owners=[n],s=!0,c=null,l=null;n.$on("hook:destroyed",(function(){return y(r,n)}));var f=function(e){for(var t=0,n=r.length;t<n;t++)r[t].$forceUpdate();e&&(r.length=0,null!==c&&(clearTimeout(c),c=null),null!==l&&(clearTimeout(l),l=null))},p=R((function(n){e.resolved=Bt(n,t),s?r.length=0:f(!0)})),h=R((function(t){o(e.errorComp)&&(e.error=!0,f(!0))})),v=e(p,h);return u(v)&&(d(v)?i(e.resolved)&&v.then(p,h):d(v.component)&&(v.component.then(p,h),o(v.error)&&(e.errorComp=Bt(v.error,t)),o(v.loading)&&(e.loadingComp=Bt(v.loading,t),0===v.delay?e.loading=!0:c=setTimeout((function(){c=null,i(e.resolved)&&i(e.error)&&(e.loading=!0,f(!1))}),v.delay||200)),o(v.timeout)&&(l=setTimeout((function(){l=null,i(e.resolved)&&h(null)}),v.timeout)))),s=!1,e.loading?e.loadingComp:e.resolved}}(f=e,l)))return function(e,t,n,r,i){var o=me();return o.asyncFactory=e,o.asyncMeta={data:t,context:n,children:r,tag:i},o}(f,t,n,s,c);t=t||{},wn(e),o(t.model)&&function(e,t){var n=e.model&&e.model.prop||"value",r=e.model&&e.model.event||"input";(t.attrs||(t.attrs={}))[n]=t.model.value;var i=t.on||(t.on={}),a=i[r],s=t.model.callback;o(a)?(Array.isArray(a)?-1===a.indexOf(s):a!==s)&&(i[r]=[s].concat(a)):i[r]=s}(e.options,t);var p=function(e,t,n){var r=t.options.props;if(!i(r)){var a={},s=e.attrs,u=e.props;if(o(s)||o(u))for(var c in r){var l=S(c);ut(a,u,c,l,!0)||ut(a,s,c,l,!1)}return a}}(t,e);if(a(e.options.functional))return function(e,t,n,i,a){var s=e.options,u={},c=s.props;if(o(c))for(var l in c)u[l]=Me(l,c,t||r);else o(n.attrs)&&Lt(u,n.attrs),o(n.props)&&Lt(u,n.props);var f=new Dt(n,u,a,i,e),d=s.render.call(null,f._c,f);if(d instanceof ve)return $t(d,n,f.parent,s);if(Array.isArray(d)){for(var p=ct(d)||[],h=new Array(p.length),v=0;v<p.length;v++)h[v]=$t(p[v],n,f.parent,s);return h}}(e,p,t,n,s);var h=t.on;if(t.on=t.nativeOn,a(e.options.abstract)){var v=t.slot;t={},v&&(t.slot=v)}!function(e){for(var t=e.hook||(e.hook={}),n=0;n<Rt.length;n++){var r=Rt[n],i=t[r],o=It[r];i===o||i&&i._merged||(t[r]=i?Mt(o,i):o)}}(t);var g=e.options.name||c;return new ve("vue-component-"+e.cid+(g?"-"+g:""),t,void 0,void 0,void 0,n,{Ctor:e,propsData:p,listeners:h,tag:c,children:s},f)}}}function Mt(e,t){var n=function(n,r){e(n,r),t(n,r)};return n._merged=!0,n}function Ft(e,t,n,r,c,l){return(Array.isArray(n)||s(n))&&(c=r,r=n,n=void 0),a(l)&&(c=2),function(e,t,n,r,s){if(o(n)&&o(n.__ob__))return me();if(o(n)&&o(n.is)&&(t=n.is),!t)return me();var c,l,f;(Array.isArray(r)&&"function"==typeof r[0]&&((n=n||{}).scopedSlots={default:r[0]},r.length=0),2===s?r=ct(r):1===s&&(r=function(e){for(var t=0;t<e.length;t++)if(Array.isArray(e[t]))return Array.prototype.concat.apply([],e);return e}(r)),"string"==typeof t)?(l=e.$vnode&&e.$vnode.ns||q.getTagNamespace(t),c=q.isReservedTag(t)?new ve(q.parsePlatformTagName(t),n,r,void 0,void 0,e):n&&n.pre||!o(f=Pe(e.$options,"components",t))?new ve(t,n,r,void 0,void 0,e):Pt(f,n,e,r,t)):c=Pt(t,n,e,r);return Array.isArray(c)?c:o(c)?(o(l)&&function e(t,n,r){if(t.ns=n,"foreignObject"===t.tag&&(n=void 0,r=!0),o(t.children))for(var s=0,u=t.children.length;s<u;s++){var c=t.children[s];o(c.tag)&&(i(c.ns)||a(r)&&"svg"!==c.tag)&&e(c,n,r)}}(c,l),o(n)&&function(e){u(e.style)&&rt(e.style),u(e.class)&&rt(e.class)}(n),c):me()}(e,t,n,r,c)}var qt,Ht=null;function Bt(e,t){return(e.__esModule||ue&&"Module"===e[Symbol.toStringTag])&&(e=e.default),u(e)?t.extend(e):e}function Ut(e){return e.isComment&&e.asyncFactory}function Wt(e){if(Array.isArray(e))for(var t=0;t<e.length;t++){var n=e[t];if(o(n)&&(o(n.componentOptions)||Ut(n)))return n}}function zt(e,t){qt.$on(e,t)}function Vt(e,t){qt.$off(e,t)}function Qt(e,t){var n=qt;return function r(){null!==t.apply(null,arguments)&&n.$off(e,r)}}function Xt(e,t,n){qt=e,at(t,n||{},zt,Vt,Qt,e),qt=void 0}var Kt=null;function Yt(e){var t=Kt;return Kt=e,function(){Kt=t}}function Jt(e){for(;e&&(e=e.$parent);)if(e._inactive)return!0;return!1}function Gt(e,t){if(t){if(e._directInactive=!1,Jt(e))return}else if(e._directInactive)return;if(e._inactive||null===e._inactive){e._inactive=!1;for(var n=0;n<e.$children.length;n++)Gt(e.$children[n]);Zt(e,"activated")}}function Zt(e,t){pe();var n=e.$options[t],r=t+" hook";if(n)for(var i=0,o=n.length;i<o;i++)Ue(n[i],e,null,e,r);e._hasHookEvent&&e.$emit("hook:"+t),he()}var en=[],tn=[],nn={},rn=!1,on=!1,an=0,sn=0,un=Date.now;if(V&&!Y){var cn=window.performance;cn&&"function"==typeof cn.now&&un()>document.createEvent("Event").timeStamp&&(un=function(){return cn.now()})}function ln(){var e,t;for(sn=un(),on=!0,en.sort((function(e,t){return e.id-t.id})),an=0;an<en.length;an++)(e=en[an]).before&&e.before(),t=e.id,nn[t]=null,e.run();var n=tn.slice(),r=en.slice();an=en.length=tn.length=0,nn={},rn=on=!1,function(e){for(var t=0;t<e.length;t++)e[t]._inactive=!0,Gt(e[t],!0)}(n),function(e){for(var t=e.length;t--;){var n=e[t],r=n.vm;r._watcher===n&&r._isMounted&&!r._isDestroyed&&Zt(r,"updated")}}(r),oe&&q.devtools&&oe.emit("flush")}var fn=0,dn=function(e,t,n,r,i){this.vm=e,i&&(e._watcher=this),e._watchers.push(this),r?(this.deep=!!r.deep,this.user=!!r.user,this.lazy=!!r.lazy,this.sync=!!r.sync,this.before=r.before):this.deep=this.user=this.lazy=this.sync=!1,this.cb=n,this.id=++fn,this.active=!0,this.dirty=this.lazy,this.deps=[],this.newDeps=[],this.depIds=new se,this.newDepIds=new se,this.expression="","function"==typeof t?this.getter=t:(this.getter=function(e){if(!W.test(e)){var t=e.split(".");return function(e){for(var n=0;n<t.length;n++){if(!e)return;e=e[t[n]]}return e}}}(t),this.getter||(this.getter=N)),this.value=this.lazy?void 0:this.get()};dn.prototype.get=function(){var e;pe(this);var t=this.vm;try{e=this.getter.call(t,t)}catch(e){if(!this.user)throw e;Be(e,t,'getter for watcher "'+this.expression+'"')}finally{this.deep&&rt(e),he(),this.cleanupDeps()}return e},dn.prototype.addDep=function(e){var t=e.id;this.newDepIds.has(t)||(this.newDepIds.add(t),this.newDeps.push(e),this.depIds.has(t)||e.addSub(this))},dn.prototype.cleanupDeps=function(){for(var e=this.deps.length;e--;){var t=this.deps[e];this.newDepIds.has(t.id)||t.removeSub(this)}var n=this.depIds;this.depIds=this.newDepIds,this.newDepIds=n,this.newDepIds.clear(),n=this.deps,this.deps=this.newDeps,this.newDeps=n,this.newDeps.length=0},dn.prototype.update=function(){this.lazy?this.dirty=!0:this.sync?this.run():function(e){var t=e.id;if(null==nn[t]){if(nn[t]=!0,on){for(var n=en.length-1;n>an&&en[n].id>e.id;)n--;en.splice(n+1,0,e)}else en.push(e);rn||(rn=!0,tt(ln))}}(this)},dn.prototype.run=function(){if(this.active){var e=this.get();if(e!==this.value||u(e)||this.deep){var t=this.value;if(this.value=e,this.user)try{this.cb.call(this.vm,e,t)}catch(e){Be(e,this.vm,'callback for watcher "'+this.expression+'"')}else this.cb.call(this.vm,e,t)}}},dn.prototype.evaluate=function(){this.value=this.get(),this.dirty=!1},dn.prototype.depend=function(){for(var e=this.deps.length;e--;)this.deps[e].depend()},dn.prototype.teardown=function(){if(this.active){this.vm._isBeingDestroyed||y(this.vm._watchers,this);for(var e=this.deps.length;e--;)this.deps[e].removeSub(this);this.active=!1}};var pn={enumerable:!0,configurable:!0,get:N,set:N};function hn(e,t,n){pn.get=function(){return this[t][n]},pn.set=function(e){this[t][n]=e},Object.defineProperty(e,n,pn)}var vn={lazy:!0};function gn(e,t,n){var r=!ie();"function"==typeof n?(pn.get=r?mn(t):yn(n),pn.set=N):(pn.get=n.get?r&&!1!==n.cache?mn(t):yn(n.get):N,pn.set=n.set||N),Object.defineProperty(e,t,pn)}function mn(e){return function(){var t=this._computedWatchers&&this._computedWatchers[e];if(t)return t.dirty&&t.evaluate(),fe.target&&t.depend(),t.value}}function yn(e){return function(){return e.call(this,this)}}function _n(e,t,n,r){return l(n)&&(r=n,n=n.handler),"string"==typeof n&&(n=e[n]),e.$watch(t,n,r)}var bn=0;function wn(e){var t=e.options;if(e.super){var n=wn(e.super);if(n!==e.superOptions){e.superOptions=n;var r=function(e){var t,n=e.options,r=e.sealedOptions;for(var i in n)n[i]!==r[i]&&(t||(t={}),t[i]=n[i]);return t}(e);r&&O(e.extendOptions,r),(t=e.options=Re(n,e.extendOptions)).name&&(t.components[t.name]=e)}}return t}function xn(e){this._init(e)}function Cn(e){return e&&(e.Ctor.options.name||e.tag)}function En(e,t){return Array.isArray(e)?e.indexOf(t)>-1:"string"==typeof e?e.split(",").indexOf(t)>-1:(n=e,"[object RegExp]"===c.call(n)&&e.test(t));var n}function Tn(e,t){var n=e.cache,r=e.keys,i=e._vnode;for(var o in n){var a=n[o];if(a){var s=Cn(a.componentOptions);s&&!t(s)&&Sn(n,o,r,i)}}}function Sn(e,t,n,r){var i=e[t];!i||r&&i.tag===r.tag||i.componentInstance.$destroy(),e[t]=null,y(n,t)}!function(e){e.prototype._init=function(e){var t=this;t._uid=bn++,t._isVue=!0,e&&e._isComponent?function(e,t){var n=e.$options=Object.create(e.constructor.options),r=t._parentVnode;n.parent=t.parent,n._parentVnode=r;var i=r.componentOptions;n.propsData=i.propsData,n._parentListeners=i.listeners,n._renderChildren=i.children,n._componentTag=i.tag,t.render&&(n.render=t.render,n.staticRenderFns=t.staticRenderFns)}(t,e):t.$options=Re(wn(t.constructor),e||{},t),t._renderProxy=t,t._self=t,function(e){var t=e.$options,n=t.parent;if(n&&!t.abstract){for(;n.$options.abstract&&n.$parent;)n=n.$parent;n.$children.push(e)}e.$parent=n,e.$root=n?n.$root:e,e.$children=[],e.$refs={},e._watcher=null,e._inactive=null,e._directInactive=!1,e._isMounted=!1,e._isDestroyed=!1,e._isBeingDestroyed=!1}(t),function(e){e._events=Object.create(null),e._hasHookEvent=!1;var t=e.$options._parentListeners;t&&Xt(e,t)}(t),function(e){e._vnode=null,e._staticTrees=null;var t=e.$options,n=e.$vnode=t._parentVnode,i=n&&n.context;e.$slots=dt(t._renderChildren,i),e.$scopedSlots=r,e._c=function(t,n,r,i){return Ft(e,t,n,r,i,!1)},e.$createElement=function(t,n,r,i){return Ft(e,t,n,r,i,!0)};var o=n&&n.data;Ae(e,"$attrs",o&&o.attrs||r,null,!0),Ae(e,"$listeners",t._parentListeners||r,null,!0)}(t),Zt(t,"beforeCreate"),function(e){var t=ft(e.$options.inject,e);t&&(Ee(!1),Object.keys(t).forEach((function(n){Ae(e,n,t[n])})),Ee(!0))}(t),function(e){e._watchers=[];var t=e.$options;t.props&&function(e,t){var n=e.$options.propsData||{},r=e._props={},i=e.$options._propKeys=[];e.$parent&&Ee(!1);var o=function(o){i.push(o);var a=Me(o,t,n,e);Ae(r,o,a),o in e||hn(e,"_props",o)};for(var a in t)o(a);Ee(!0)}(e,t.props),t.methods&&function(e,t){for(var n in e.$options.props,t)e[n]="function"!=typeof t[n]?N:A(t[n],e)}(e,t.methods),t.data?function(e){var t=e.$options.data;l(t=e._data="function"==typeof t?function(e,t){pe();try{return e.call(t,t)}catch(e){return Be(e,t,"data()"),{}}finally{he()}}(t,e):t||{})||(t={});for(var n,r=Object.keys(t),i=e.$options.props,o=(e.$options.methods,r.length);o--;){var a=r[o];i&&b(i,a)||(void 0,36!==(n=(a+"").charCodeAt(0))&&95!==n&&hn(e,"_data",a))}Se(t,!0)}(e):Se(e._data={},!0),t.computed&&function(e,t){var n=e._computedWatchers=Object.create(null),r=ie();for(var i in t){var o=t[i],a="function"==typeof o?o:o.get;r||(n[i]=new dn(e,a||N,N,vn)),i in e||gn(e,i,o)}}(e,t.computed),t.watch&&t.watch!==te&&function(e,t){for(var n in t){var r=t[n];if(Array.isArray(r))for(var i=0;i<r.length;i++)_n(e,n,r[i]);else _n(e,n,r)}}(e,t.watch)}(t),function(e){var t=e.$options.provide;t&&(e._provided="function"==typeof t?t.call(e):t)}(t),Zt(t,"created"),t.$options.el&&t.$mount(t.$options.el)}}(xn),function(e){Object.defineProperty(e.prototype,"$data",{get:function(){return this._data}}),Object.defineProperty(e.prototype,"$props",{get:function(){return this._props}}),e.prototype.$set=ke,e.prototype.$delete=Oe,e.prototype.$watch=function(e,t,n){if(l(t))return _n(this,e,t,n);(n=n||{}).user=!0;var r=new dn(this,e,t,n);if(n.immediate)try{t.call(this,r.value)}catch(e){Be(e,this,'callback for immediate watcher "'+r.expression+'"')}return function(){r.teardown()}}}(xn),function(e){var t=/^hook:/;e.prototype.$on=function(e,n){var r=this;if(Array.isArray(e))for(var i=0,o=e.length;i<o;i++)r.$on(e[i],n);else(r._events[e]||(r._events[e]=[])).push(n),t.test(e)&&(r._hasHookEvent=!0);return r},e.prototype.$once=function(e,t){var n=this;function r(){n.$off(e,r),t.apply(n,arguments)}return r.fn=t,n.$on(e,r),n},e.prototype.$off=function(e,t){var n=this;if(!arguments.length)return n._events=Object.create(null),n;if(Array.isArray(e)){for(var r=0,i=e.length;r<i;r++)n.$off(e[r],t);return n}var o,a=n._events[e];if(!a)return n;if(!t)return n._events[e]=null,n;for(var s=a.length;s--;)if((o=a[s])===t||o.fn===t){a.splice(s,1);break}return n},e.prototype.$emit=function(e){var t=this._events[e];if(t){t=t.length>1?k(t):t;for(var n=k(arguments,1),r='event handler for "'+e+'"',i=0,o=t.length;i<o;i++)Ue(t[i],this,n,this,r)}return this}}(xn),function(e){e.prototype._update=function(e,t){var n=this,r=n.$el,i=n._vnode,o=Yt(n);n._vnode=e,n.$el=i?n.__patch__(i,e):n.__patch__(n.$el,e,t,!1),o(),r&&(r.__vue__=null),n.$el&&(n.$el.__vue__=n),n.$vnode&&n.$parent&&n.$vnode===n.$parent._vnode&&(n.$parent.$el=n.$el)},e.prototype.$forceUpdate=function(){this._watcher&&this._watcher.update()},e.prototype.$destroy=function(){var e=this;if(!e._isBeingDestroyed){Zt(e,"beforeDestroy"),e._isBeingDestroyed=!0;var t=e.$parent;!t||t._isBeingDestroyed||e.$options.abstract||y(t.$children,e),e._watcher&&e._watcher.teardown();for(var n=e._watchers.length;n--;)e._watchers[n].teardown();e._data.__ob__&&e._data.__ob__.vmCount--,e._isDestroyed=!0,e.__patch__(e._vnode,null),Zt(e,"destroyed"),e.$off(),e.$el&&(e.$el.__vue__=null),e.$vnode&&(e.$vnode.parent=null)}}}(xn),function(e){Nt(e.prototype),e.prototype.$nextTick=function(e){return tt(e,this)},e.prototype._render=function(){var e,t=this,n=t.$options,r=n.render,i=n._parentVnode;i&&(t.$scopedSlots=ht(i.data.scopedSlots,t.$slots,t.$scopedSlots)),t.$vnode=i;try{Ht=t,e=r.call(t._renderProxy,t.$createElement)}catch(n){Be(n,t,"render"),e=t._vnode}finally{Ht=null}return Array.isArray(e)&&1===e.length&&(e=e[0]),e instanceof ve||(e=me()),e.parent=i,e}}(xn);var An=[String,RegExp,Array],kn={KeepAlive:{name:"keep-alive",abstract:!0,props:{include:An,exclude:An,max:[String,Number]},created:function(){this.cache=Object.create(null),this.keys=[]},destroyed:function(){for(var e in this.cache)Sn(this.cache,e,this.keys)},mounted:function(){var e=this;this.$watch("include",(function(t){Tn(e,(function(e){return En(t,e)}))})),this.$watch("exclude",(function(t){Tn(e,(function(e){return!En(t,e)}))}))},render:function(){var e=this.$slots.default,t=Wt(e),n=t&&t.componentOptions;if(n){var r=Cn(n),i=this.include,o=this.exclude;if(i&&(!r||!En(i,r))||o&&r&&En(o,r))return t;var a=this.cache,s=this.keys,u=null==t.key?n.Ctor.cid+(n.tag?"::"+n.tag:""):t.key;a[u]?(t.componentInstance=a[u].componentInstance,y(s,u),s.push(u)):(a[u]=t,s.push(u),this.max&&s.length>parseInt(this.max)&&Sn(a,s[0],s,this._vnode)),t.data.keepAlive=!0}return t||e&&e[0]}}};!function(e){var t={get:function(){return q}};Object.defineProperty(e,"config",t),e.util={warn:ce,extend:O,mergeOptions:Re,defineReactive:Ae},e.set=ke,e.delete=Oe,e.nextTick=tt,e.observable=function(e){return Se(e),e},e.options=Object.create(null),M.forEach((function(t){e.options[t+"s"]=Object.create(null)})),e.options._base=e,O(e.options.components,kn),function(e){e.use=function(e){var t=this._installedPlugins||(this._installedPlugins=[]);if(t.indexOf(e)>-1)return this;var n=k(arguments,1);return n.unshift(this),"function"==typeof e.install?e.install.apply(e,n):"function"==typeof e&&e.apply(null,n),t.push(e),this}}(e),function(e){e.mixin=function(e){return this.options=Re(this.options,e),this}}(e),function(e){e.cid=0;var t=1;e.extend=function(e){e=e||{};var n=this,r=n.cid,i=e._Ctor||(e._Ctor={});if(i[r])return i[r];var o=e.name||n.options.name,a=function(e){this._init(e)};return(a.prototype=Object.create(n.prototype)).constructor=a,a.cid=t++,a.options=Re(n.options,e),a.super=n,a.options.props&&function(e){var t=e.options.props;for(var n in t)hn(e.prototype,"_props",n)}(a),a.options.computed&&function(e){var t=e.options.computed;for(var n in t)gn(e.prototype,n,t[n])}(a),a.extend=n.extend,a.mixin=n.mixin,a.use=n.use,M.forEach((function(e){a[e]=n[e]})),o&&(a.options.components[o]=a),a.superOptions=n.options,a.extendOptions=e,a.sealedOptions=O({},a.options),i[r]=a,a}}(e),function(e){M.forEach((function(t){e[t]=function(e,n){return n?("component"===t&&l(n)&&(n.name=n.name||e,n=this.options._base.extend(n)),"directive"===t&&"function"==typeof n&&(n={bind:n,update:n}),this.options[t+"s"][e]=n,n):this.options[t+"s"][e]}}))}(e)}(xn),Object.defineProperty(xn.prototype,"$isServer",{get:ie}),Object.defineProperty(xn.prototype,"$ssrContext",{get:function(){return this.$vnode&&this.$vnode.ssrContext}}),Object.defineProperty(xn,"FunctionalRenderContext",{value:Dt}),xn.version="2.6.11";var On=v("style,class"),jn=v("input,textarea,option,select,progress"),Nn=function(e,t,n){return"value"===n&&jn(e)&&"button"!==t||"selected"===n&&"option"===e||"checked"===n&&"input"===e||"muted"===n&&"video"===e},Dn=v("contenteditable,draggable,spellcheck"),$n=v("events,caret,typing,plaintext-only"),Ln=v("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"),In="http://www.w3.org/1999/xlink",Rn=function(e){return":"===e.charAt(5)&&"xlink"===e.slice(0,5)},Pn=function(e){return Rn(e)?e.slice(6,e.length):""},Mn=function(e){return null==e||!1===e};function Fn(e,t){return{staticClass:qn(e.staticClass,t.staticClass),class:o(e.class)?[e.class,t.class]:t.class}}function qn(e,t){return e?t?e+" "+t:e:t||""}function Hn(e){return Array.isArray(e)?function(e){for(var t,n="",r=0,i=e.length;r<i;r++)o(t=Hn(e[r]))&&""!==t&&(n&&(n+=" "),n+=t);return n}(e):u(e)?function(e){var t="";for(var n in e)e[n]&&(t&&(t+=" "),t+=n);return t}(e):"string"==typeof e?e:""}var Bn={svg:"http://www.w3.org/2000/svg",math:"http://www.w3.org/1998/Math/MathML"},Un=v("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template,blockquote,iframe,tfoot"),Wn=v("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,foreignObject,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",!0),zn=function(e){return Un(e)||Wn(e)};function Vn(e){return Wn(e)?"svg":"math"===e?"math":void 0}var Qn=Object.create(null),Xn=v("text,number,password,search,email,tel,url");function Kn(e){return"string"==typeof e?document.querySelector(e)||document.createElement("div"):e}var Yn=Object.freeze({createElement:function(e,t){var n=document.createElement(e);return"select"!==e||t.data&&t.data.attrs&&void 0!==t.data.attrs.multiple&&n.setAttribute("multiple","multiple"),n},createElementNS:function(e,t){return document.createElementNS(Bn[e],t)},createTextNode:function(e){return document.createTextNode(e)},createComment:function(e){return document.createComment(e)},insertBefore:function(e,t,n){e.insertBefore(t,n)},removeChild:function(e,t){e.removeChild(t)},appendChild:function(e,t){e.appendChild(t)},parentNode:function(e){return e.parentNode},nextSibling:function(e){return e.nextSibling},tagName:function(e){return e.tagName},setTextContent:function(e,t){e.textContent=t},setStyleScope:function(e,t){e.setAttribute(t,"")}}),Jn={create:function(e,t){Gn(t)},update:function(e,t){e.data.ref!==t.data.ref&&(Gn(e,!0),Gn(t))},destroy:function(e){Gn(e,!0)}};function Gn(e,t){var n=e.data.ref;if(o(n)){var r=e.context,i=e.componentInstance||e.elm,a=r.$refs;t?Array.isArray(a[n])?y(a[n],i):a[n]===i&&(a[n]=void 0):e.data.refInFor?Array.isArray(a[n])?a[n].indexOf(i)<0&&a[n].push(i):a[n]=[i]:a[n]=i}}var Zn=new ve("",{},[]),er=["create","activate","update","remove","destroy"];function tr(e,t){return e.key===t.key&&(e.tag===t.tag&&e.isComment===t.isComment&&o(e.data)===o(t.data)&&function(e,t){if("input"!==e.tag)return!0;var n,r=o(n=e.data)&&o(n=n.attrs)&&n.type,i=o(n=t.data)&&o(n=n.attrs)&&n.type;return r===i||Xn(r)&&Xn(i)}(e,t)||a(e.isAsyncPlaceholder)&&e.asyncFactory===t.asyncFactory&&i(t.asyncFactory.error))}function nr(e,t,n){var r,i,a={};for(r=t;r<=n;++r)o(i=e[r].key)&&(a[i]=r);return a}var rr={create:ir,update:ir,destroy:function(e){ir(e,Zn)}};function ir(e,t){(e.data.directives||t.data.directives)&&function(e,t){var n,r,i,o=e===Zn,a=t===Zn,s=ar(e.data.directives,e.context),u=ar(t.data.directives,t.context),c=[],l=[];for(n in u)r=s[n],i=u[n],r?(i.oldValue=r.value,i.oldArg=r.arg,ur(i,"update",t,e),i.def&&i.def.componentUpdated&&l.push(i)):(ur(i,"bind",t,e),i.def&&i.def.inserted&&c.push(i));if(c.length){var f=function(){for(var n=0;n<c.length;n++)ur(c[n],"inserted",t,e)};o?st(t,"insert",f):f()}if(l.length&&st(t,"postpatch",(function(){for(var n=0;n<l.length;n++)ur(l[n],"componentUpdated",t,e)})),!o)for(n in s)u[n]||ur(s[n],"unbind",e,e,a)}(e,t)}var or=Object.create(null);function ar(e,t){var n,r,i=Object.create(null);if(!e)return i;for(n=0;n<e.length;n++)(r=e[n]).modifiers||(r.modifiers=or),i[sr(r)]=r,r.def=Pe(t.$options,"directives",r.name);return i}function sr(e){return e.rawName||e.name+"."+Object.keys(e.modifiers||{}).join(".")}function ur(e,t,n,r,i){var o=e.def&&e.def[t];if(o)try{o(n.elm,e,n,r,i)}catch(r){Be(r,n.context,"directive "+e.name+" "+t+" hook")}}var cr=[Jn,rr];function lr(e,t){var n=t.componentOptions;if(!(o(n)&&!1===n.Ctor.options.inheritAttrs||i(e.data.attrs)&&i(t.data.attrs))){var r,a,s=t.elm,u=e.data.attrs||{},c=t.data.attrs||{};for(r in o(c.__ob__)&&(c=t.data.attrs=O({},c)),c)a=c[r],u[r]!==a&&fr(s,r,a);for(r in(Y||G)&&c.value!==u.value&&fr(s,"value",c.value),u)i(c[r])&&(Rn(r)?s.removeAttributeNS(In,Pn(r)):Dn(r)||s.removeAttribute(r))}}function fr(e,t,n){e.tagName.indexOf("-")>-1?dr(e,t,n):Ln(t)?Mn(n)?e.removeAttribute(t):(n="allowfullscreen"===t&&"EMBED"===e.tagName?"true":t,e.setAttribute(t,n)):Dn(t)?e.setAttribute(t,function(e,t){return Mn(t)||"false"===t?"false":"contenteditable"===e&&$n(t)?t:"true"}(t,n)):Rn(t)?Mn(n)?e.removeAttributeNS(In,Pn(t)):e.setAttributeNS(In,t,n):dr(e,t,n)}function dr(e,t,n){if(Mn(n))e.removeAttribute(t);else{if(Y&&!J&&"TEXTAREA"===e.tagName&&"placeholder"===t&&""!==n&&!e.__ieph){var r=function(t){t.stopImmediatePropagation(),e.removeEventListener("input",r)};e.addEventListener("input",r),e.__ieph=!0}e.setAttribute(t,n)}}var pr={create:lr,update:lr};function hr(e,t){var n=t.elm,r=t.data,a=e.data;if(!(i(r.staticClass)&&i(r.class)&&(i(a)||i(a.staticClass)&&i(a.class)))){var s=function(e){for(var t=e.data,n=e,r=e;o(r.componentInstance);)(r=r.componentInstance._vnode)&&r.data&&(t=Fn(r.data,t));for(;o(n=n.parent);)n&&n.data&&(t=Fn(t,n.data));return function(e,t){return o(e)||o(t)?qn(e,Hn(t)):""}(t.staticClass,t.class)}(t),u=n._transitionClasses;o(u)&&(s=qn(s,Hn(u))),s!==n._prevClass&&(n.setAttribute("class",s),n._prevClass=s)}}var vr,gr,mr,yr,_r,br,wr={create:hr,update:hr},xr=/[\w).+\-_$\]]/;function Cr(e){var t,n,r,i,o,a=!1,s=!1,u=!1,c=!1,l=0,f=0,d=0,p=0;for(r=0;r<e.length;r++)if(n=t,t=e.charCodeAt(r),a)39===t&&92!==n&&(a=!1);else if(s)34===t&&92!==n&&(s=!1);else if(u)96===t&&92!==n&&(u=!1);else if(c)47===t&&92!==n&&(c=!1);else if(124!==t||124===e.charCodeAt(r+1)||124===e.charCodeAt(r-1)||l||f||d){switch(t){case 34:s=!0;break;case 39:a=!0;break;case 96:u=!0;break;case 40:d++;break;case 41:d--;break;case 91:f++;break;case 93:f--;break;case 123:l++;break;case 125:l--}if(47===t){for(var h=r-1,v=void 0;h>=0&&" "===(v=e.charAt(h));h--);v&&xr.test(v)||(c=!0)}}else void 0===i?(p=r+1,i=e.slice(0,r).trim()):g();function g(){(o||(o=[])).push(e.slice(p,r).trim()),p=r+1}if(void 0===i?i=e.slice(0,r).trim():0!==p&&g(),o)for(r=0;r<o.length;r++)i=Er(i,o[r]);return i}function Er(e,t){var n=t.indexOf("(");if(n<0)return'_f("'+t+'")('+e+")";var r=t.slice(0,n),i=t.slice(n+1);return'_f("'+r+'")('+e+(")"!==i?","+i:i)}function Tr(e,t){console.error("[Vue compiler]: "+e)}function Sr(e,t){return e?e.map((function(e){return e[t]})).filter((function(e){return e})):[]}function Ar(e,t,n,r,i){(e.props||(e.props=[])).push(Rr({name:t,value:n,dynamic:i},r)),e.plain=!1}function kr(e,t,n,r,i){(i?e.dynamicAttrs||(e.dynamicAttrs=[]):e.attrs||(e.attrs=[])).push(Rr({name:t,value:n,dynamic:i},r)),e.plain=!1}function Or(e,t,n,r){e.attrsMap[t]=n,e.attrsList.push(Rr({name:t,value:n},r))}function jr(e,t,n,r,i,o,a,s){(e.directives||(e.directives=[])).push(Rr({name:t,rawName:n,value:r,arg:i,isDynamicArg:o,modifiers:a},s)),e.plain=!1}function Nr(e,t,n){return n?"_p("+t+',"'+e+'")':e+t}function Dr(e,t,n,i,o,a,s,u){var c;(i=i||r).right?u?t="("+t+")==='click'?'contextmenu':("+t+")":"click"===t&&(t="contextmenu",delete i.right):i.middle&&(u?t="("+t+")==='click'?'mouseup':("+t+")":"click"===t&&(t="mouseup")),i.capture&&(delete i.capture,t=Nr("!",t,u)),i.once&&(delete i.once,t=Nr("~",t,u)),i.passive&&(delete i.passive,t=Nr("&",t,u)),i.native?(delete i.native,c=e.nativeEvents||(e.nativeEvents={})):c=e.events||(e.events={});var l=Rr({value:n.trim(),dynamic:u},s);i!==r&&(l.modifiers=i);var f=c[t];Array.isArray(f)?o?f.unshift(l):f.push(l):c[t]=f?o?[l,f]:[f,l]:l,e.plain=!1}function $r(e,t,n){var r=Lr(e,":"+t)||Lr(e,"v-bind:"+t);if(null!=r)return Cr(r);if(!1!==n){var i=Lr(e,t);if(null!=i)return JSON.stringify(i)}}function Lr(e,t,n){var r;if(null!=(r=e.attrsMap[t]))for(var i=e.attrsList,o=0,a=i.length;o<a;o++)if(i[o].name===t){i.splice(o,1);break}return n&&delete e.attrsMap[t],r}function Ir(e,t){for(var n=e.attrsList,r=0,i=n.length;r<i;r++){var o=n[r];if(t.test(o.name))return n.splice(r,1),o}}function Rr(e,t){return t&&(null!=t.start&&(e.start=t.start),null!=t.end&&(e.end=t.end)),e}function Pr(e,t,n){var r=n||{},i=r.number,o="$$v";r.trim&&(o="(typeof $$v === 'string'? $$v.trim(): $$v)"),i&&(o="_n("+o+")");var a=Mr(t,o);e.model={value:"("+t+")",expression:JSON.stringify(t),callback:"function ($$v) {"+a+"}"}}function Mr(e,t){var n=function(e){if(e=e.trim(),vr=e.length,e.indexOf("[")<0||e.lastIndexOf("]")<vr-1)return(yr=e.lastIndexOf("."))>-1?{exp:e.slice(0,yr),key:'"'+e.slice(yr+1)+'"'}:{exp:e,key:null};for(gr=e,yr=_r=br=0;!qr();)Hr(mr=Fr())?Ur(mr):91===mr&&Br(mr);return{exp:e.slice(0,_r),key:e.slice(_r+1,br)}}(e);return null===n.key?e+"="+t:"$set("+n.exp+", "+n.key+", "+t+")"}function Fr(){return gr.charCodeAt(++yr)}function qr(){return yr>=vr}function Hr(e){return 34===e||39===e}function Br(e){var t=1;for(_r=yr;!qr();)if(Hr(e=Fr()))Ur(e);else if(91===e&&t++,93===e&&t--,0===t){br=yr;break}}function Ur(e){for(var t=e;!qr()&&(e=Fr())!==t;);}var Wr,zr="__r";function Vr(e,t,n){var r=Wr;return function i(){null!==t.apply(null,arguments)&&Kr(e,i,n,r)}}var Qr=Qe&&!(ee&&Number(ee[1])<=53);function Xr(e,t,n,r){if(Qr){var i=sn,o=t;t=o._wrapper=function(e){if(e.target===e.currentTarget||e.timeStamp>=i||e.timeStamp<=0||e.target.ownerDocument!==document)return o.apply(this,arguments)}}Wr.addEventListener(e,t,ne?{capture:n,passive:r}:n)}function Kr(e,t,n,r){(r||Wr).removeEventListener(e,t._wrapper||t,n)}function Yr(e,t){if(!i(e.data.on)||!i(t.data.on)){var n=t.data.on||{},r=e.data.on||{};Wr=t.elm,function(e){if(o(e.__r)){var t=Y?"change":"input";e[t]=[].concat(e.__r,e[t]||[]),delete e.__r}o(e.__c)&&(e.change=[].concat(e.__c,e.change||[]),delete e.__c)}(n),at(n,r,Xr,Kr,Vr,t.context),Wr=void 0}}var Jr,Gr={create:Yr,update:Yr};function Zr(e,t){if(!i(e.data.domProps)||!i(t.data.domProps)){var n,r,a=t.elm,s=e.data.domProps||{},u=t.data.domProps||{};for(n in o(u.__ob__)&&(u=t.data.domProps=O({},u)),s)n in u||(a[n]="");for(n in u){if(r=u[n],"textContent"===n||"innerHTML"===n){if(t.children&&(t.children.length=0),r===s[n])continue;1===a.childNodes.length&&a.removeChild(a.childNodes[0])}if("value"===n&&"PROGRESS"!==a.tagName){a._value=r;var c=i(r)?"":String(r);ei(a,c)&&(a.value=c)}else if("innerHTML"===n&&Wn(a.tagName)&&i(a.innerHTML)){(Jr=Jr||document.createElement("div")).innerHTML="<svg>"+r+"</svg>";for(var l=Jr.firstChild;a.firstChild;)a.removeChild(a.firstChild);for(;l.firstChild;)a.appendChild(l.firstChild)}else if(r!==s[n])try{a[n]=r}catch(e){}}}}function ei(e,t){return!e.composing&&("OPTION"===e.tagName||function(e,t){var n=!0;try{n=document.activeElement!==e}catch(e){}return n&&e.value!==t}(e,t)||function(e,t){var n=e.value,r=e._vModifiers;if(o(r)){if(r.number)return h(n)!==h(t);if(r.trim)return n.trim()!==t.trim()}return n!==t}(e,t))}var ti={create:Zr,update:Zr},ni=w((function(e){var t={},n=/:(.+)/;return e.split(/;(?![^(]*\))/g).forEach((function(e){if(e){var r=e.split(n);r.length>1&&(t[r[0].trim()]=r[1].trim())}})),t}));function ri(e){var t=ii(e.style);return e.staticStyle?O(e.staticStyle,t):t}function ii(e){return Array.isArray(e)?j(e):"string"==typeof e?ni(e):e}var oi,ai=/^--/,si=/\s*!important$/,ui=function(e,t,n){if(ai.test(t))e.style.setProperty(t,n);else if(si.test(n))e.style.setProperty(S(t),n.replace(si,""),"important");else{var r=li(t);if(Array.isArray(n))for(var i=0,o=n.length;i<o;i++)e.style[r]=n[i];else e.style[r]=n}},ci=["Webkit","Moz","ms"],li=w((function(e){if(oi=oi||document.createElement("div").style,"filter"!==(e=C(e))&&e in oi)return e;for(var t=e.charAt(0).toUpperCase()+e.slice(1),n=0;n<ci.length;n++){var r=ci[n]+t;if(r in oi)return r}}));function fi(e,t){var n=t.data,r=e.data;if(!(i(n.staticStyle)&&i(n.style)&&i(r.staticStyle)&&i(r.style))){var a,s,u=t.elm,c=r.staticStyle,l=r.normalizedStyle||r.style||{},f=c||l,d=ii(t.data.style)||{};t.data.normalizedStyle=o(d.__ob__)?O({},d):d;var p=function(e,t){for(var n,r={},i=e;i.componentInstance;)(i=i.componentInstance._vnode)&&i.data&&(n=ri(i.data))&&O(r,n);(n=ri(e.data))&&O(r,n);for(var o=e;o=o.parent;)o.data&&(n=ri(o.data))&&O(r,n);return r}(t);for(s in f)i(p[s])&&ui(u,s,"");for(s in p)(a=p[s])!==f[s]&&ui(u,s,null==a?"":a)}}var di={create:fi,update:fi},pi=/\s+/;function hi(e,t){if(t&&(t=t.trim()))if(e.classList)t.indexOf(" ")>-1?t.split(pi).forEach((function(t){return e.classList.add(t)})):e.classList.add(t);else{var n=" "+(e.getAttribute("class")||"")+" ";n.indexOf(" "+t+" ")<0&&e.setAttribute("class",(n+t).trim())}}function vi(e,t){if(t&&(t=t.trim()))if(e.classList)t.indexOf(" ")>-1?t.split(pi).forEach((function(t){return e.classList.remove(t)})):e.classList.remove(t),e.classList.length||e.removeAttribute("class");else{for(var n=" "+(e.getAttribute("class")||"")+" ",r=" "+t+" ";n.indexOf(r)>=0;)n=n.replace(r," ");(n=n.trim())?e.setAttribute("class",n):e.removeAttribute("class")}}function gi(e){if(e){if("object"==typeof e){var t={};return!1!==e.css&&O(t,mi(e.name||"v")),O(t,e),t}return"string"==typeof e?mi(e):void 0}}var mi=w((function(e){return{enterClass:e+"-enter",enterToClass:e+"-enter-to",enterActiveClass:e+"-enter-active",leaveClass:e+"-leave",leaveToClass:e+"-leave-to",leaveActiveClass:e+"-leave-active"}})),yi=V&&!J,_i="transition",bi="animation",wi="transition",xi="transitionend",Ci="animation",Ei="animationend";yi&&(void 0===window.ontransitionend&&void 0!==window.onwebkittransitionend&&(wi="WebkitTransition",xi="webkitTransitionEnd"),void 0===window.onanimationend&&void 0!==window.onwebkitanimationend&&(Ci="WebkitAnimation",Ei="webkitAnimationEnd"));var Ti=V?window.requestAnimationFrame?window.requestAnimationFrame.bind(window):setTimeout:function(e){return e()};function Si(e){Ti((function(){Ti(e)}))}function Ai(e,t){var n=e._transitionClasses||(e._transitionClasses=[]);n.indexOf(t)<0&&(n.push(t),hi(e,t))}function ki(e,t){e._transitionClasses&&y(e._transitionClasses,t),vi(e,t)}function Oi(e,t,n){var r=Ni(e,t),i=r.type,o=r.timeout,a=r.propCount;if(!i)return n();var s=i===_i?xi:Ei,u=0,c=function(){e.removeEventListener(s,l),n()},l=function(t){t.target===e&&++u>=a&&c()};setTimeout((function(){u<a&&c()}),o+1),e.addEventListener(s,l)}var ji=/\b(transform|all)(,|$)/;function Ni(e,t){var n,r=window.getComputedStyle(e),i=(r[wi+"Delay"]||"").split(", "),o=(r[wi+"Duration"]||"").split(", "),a=Di(i,o),s=(r[Ci+"Delay"]||"").split(", "),u=(r[Ci+"Duration"]||"").split(", "),c=Di(s,u),l=0,f=0;return t===_i?a>0&&(n=_i,l=a,f=o.length):t===bi?c>0&&(n=bi,l=c,f=u.length):f=(n=(l=Math.max(a,c))>0?a>c?_i:bi:null)?n===_i?o.length:u.length:0,{type:n,timeout:l,propCount:f,hasTransform:n===_i&&ji.test(r[wi+"Property"])}}function Di(e,t){for(;e.length<t.length;)e=e.concat(e);return Math.max.apply(null,t.map((function(t,n){return $i(t)+$i(e[n])})))}function $i(e){return 1e3*Number(e.slice(0,-1).replace(",","."))}function Li(e,t){var n=e.elm;o(n._leaveCb)&&(n._leaveCb.cancelled=!0,n._leaveCb());var r=gi(e.data.transition);if(!i(r)&&!o(n._enterCb)&&1===n.nodeType){for(var a=r.css,s=r.type,c=r.enterClass,l=r.enterToClass,f=r.enterActiveClass,d=r.appearClass,p=r.appearToClass,v=r.appearActiveClass,g=r.beforeEnter,m=r.enter,y=r.afterEnter,_=r.enterCancelled,b=r.beforeAppear,w=r.appear,x=r.afterAppear,C=r.appearCancelled,E=r.duration,T=Kt,S=Kt.$vnode;S&&S.parent;)T=S.context,S=S.parent;var A=!T._isMounted||!e.isRootInsert;if(!A||w||""===w){var k=A&&d?d:c,O=A&&v?v:f,j=A&&p?p:l,N=A&&b||g,D=A&&"function"==typeof w?w:m,$=A&&x||y,L=A&&C||_,I=h(u(E)?E.enter:E),P=!1!==a&&!J,M=Pi(D),F=n._enterCb=R((function(){P&&(ki(n,j),ki(n,O)),F.cancelled?(P&&ki(n,k),L&&L(n)):$&&$(n),n._enterCb=null}));e.data.show||st(e,"insert",(function(){var t=n.parentNode,r=t&&t._pending&&t._pending[e.key];r&&r.tag===e.tag&&r.elm._leaveCb&&r.elm._leaveCb(),D&&D(n,F)})),N&&N(n),P&&(Ai(n,k),Ai(n,O),Si((function(){ki(n,k),F.cancelled||(Ai(n,j),M||(Ri(I)?setTimeout(F,I):Oi(n,s,F)))}))),e.data.show&&(t&&t(),D&&D(n,F)),P||M||F()}}}function Ii(e,t){var n=e.elm;o(n._enterCb)&&(n._enterCb.cancelled=!0,n._enterCb());var r=gi(e.data.transition);if(i(r)||1!==n.nodeType)return t();if(!o(n._leaveCb)){var a=r.css,s=r.type,c=r.leaveClass,l=r.leaveToClass,f=r.leaveActiveClass,d=r.beforeLeave,p=r.leave,v=r.afterLeave,g=r.leaveCancelled,m=r.delayLeave,y=r.duration,_=!1!==a&&!J,b=Pi(p),w=h(u(y)?y.leave:y),x=n._leaveCb=R((function(){n.parentNode&&n.parentNode._pending&&(n.parentNode._pending[e.key]=null),_&&(ki(n,l),ki(n,f)),x.cancelled?(_&&ki(n,c),g&&g(n)):(t(),v&&v(n)),n._leaveCb=null}));m?m(C):C()}function C(){x.cancelled||(!e.data.show&&n.parentNode&&((n.parentNode._pending||(n.parentNode._pending={}))[e.key]=e),d&&d(n),_&&(Ai(n,c),Ai(n,f),Si((function(){ki(n,c),x.cancelled||(Ai(n,l),b||(Ri(w)?setTimeout(x,w):Oi(n,s,x)))}))),p&&p(n,x),_||b||x())}}function Ri(e){return"number"==typeof e&&!isNaN(e)}function Pi(e){if(i(e))return!1;var t=e.fns;return o(t)?Pi(Array.isArray(t)?t[0]:t):(e._length||e.length)>1}function Mi(e,t){!0!==t.data.show&&Li(t)}var Fi=function(e){var t,n,r={},u=e.modules,c=e.nodeOps;for(t=0;t<er.length;++t)for(r[er[t]]=[],n=0;n<u.length;++n)o(u[n][er[t]])&&r[er[t]].push(u[n][er[t]]);function l(e){var t=c.parentNode(e);o(t)&&c.removeChild(t,e)}function f(e,t,n,i,s,u,l){if(o(e.elm)&&o(u)&&(e=u[l]=_e(e)),e.isRootInsert=!s,!function(e,t,n,i){var s=e.data;if(o(s)){var u=o(e.componentInstance)&&s.keepAlive;if(o(s=s.hook)&&o(s=s.init)&&s(e,!1),o(e.componentInstance))return d(e,t),p(n,e.elm,i),a(u)&&function(e,t,n,i){for(var a,s=e;s.componentInstance;)if(o(a=(s=s.componentInstance._vnode).data)&&o(a=a.transition)){for(a=0;a<r.activate.length;++a)r.activate[a](Zn,s);t.push(s);break}p(n,e.elm,i)}(e,t,n,i),!0}}(e,t,n,i)){var f=e.data,v=e.children,g=e.tag;o(g)?(e.elm=e.ns?c.createElementNS(e.ns,g):c.createElement(g,e),y(e),h(e,v,t),o(f)&&m(e,t),p(n,e.elm,i)):a(e.isComment)?(e.elm=c.createComment(e.text),p(n,e.elm,i)):(e.elm=c.createTextNode(e.text),p(n,e.elm,i))}}function d(e,t){o(e.data.pendingInsert)&&(t.push.apply(t,e.data.pendingInsert),e.data.pendingInsert=null),e.elm=e.componentInstance.$el,g(e)?(m(e,t),y(e)):(Gn(e),t.push(e))}function p(e,t,n){o(e)&&(o(n)?c.parentNode(n)===e&&c.insertBefore(e,t,n):c.appendChild(e,t))}function h(e,t,n){if(Array.isArray(t))for(var r=0;r<t.length;++r)f(t[r],n,e.elm,null,!0,t,r);else s(e.text)&&c.appendChild(e.elm,c.createTextNode(String(e.text)))}function g(e){for(;e.componentInstance;)e=e.componentInstance._vnode;return o(e.tag)}function m(e,n){for(var i=0;i<r.create.length;++i)r.create[i](Zn,e);o(t=e.data.hook)&&(o(t.create)&&t.create(Zn,e),o(t.insert)&&n.push(e))}function y(e){var t;if(o(t=e.fnScopeId))c.setStyleScope(e.elm,t);else for(var n=e;n;)o(t=n.context)&&o(t=t.$options._scopeId)&&c.setStyleScope(e.elm,t),n=n.parent;o(t=Kt)&&t!==e.context&&t!==e.fnContext&&o(t=t.$options._scopeId)&&c.setStyleScope(e.elm,t)}function _(e,t,n,r,i,o){for(;r<=i;++r)f(n[r],o,e,t,!1,n,r)}function b(e){var t,n,i=e.data;if(o(i))for(o(t=i.hook)&&o(t=t.destroy)&&t(e),t=0;t<r.destroy.length;++t)r.destroy[t](e);if(o(t=e.children))for(n=0;n<e.children.length;++n)b(e.children[n])}function w(e,t,n){for(;t<=n;++t){var r=e[t];o(r)&&(o(r.tag)?(x(r),b(r)):l(r.elm))}}function x(e,t){if(o(t)||o(e.data)){var n,i=r.remove.length+1;for(o(t)?t.listeners+=i:t=function(e,t){function n(){0==--n.listeners&&l(e)}return n.listeners=t,n}(e.elm,i),o(n=e.componentInstance)&&o(n=n._vnode)&&o(n.data)&&x(n,t),n=0;n<r.remove.length;++n)r.remove[n](e,t);o(n=e.data.hook)&&o(n=n.remove)?n(e,t):t()}else l(e.elm)}function C(e,t,n,r){for(var i=n;i<r;i++){var a=t[i];if(o(a)&&tr(e,a))return i}}function E(e,t,n,s,u,l){if(e!==t){o(t.elm)&&o(s)&&(t=s[u]=_e(t));var d=t.elm=e.elm;if(a(e.isAsyncPlaceholder))o(t.asyncFactory.resolved)?A(e.elm,t,n):t.isAsyncPlaceholder=!0;else if(a(t.isStatic)&&a(e.isStatic)&&t.key===e.key&&(a(t.isCloned)||a(t.isOnce)))t.componentInstance=e.componentInstance;else{var p,h=t.data;o(h)&&o(p=h.hook)&&o(p=p.prepatch)&&p(e,t);var v=e.children,m=t.children;if(o(h)&&g(t)){for(p=0;p<r.update.length;++p)r.update[p](e,t);o(p=h.hook)&&o(p=p.update)&&p(e,t)}i(t.text)?o(v)&&o(m)?v!==m&&function(e,t,n,r,a){for(var s,u,l,d=0,p=0,h=t.length-1,v=t[0],g=t[h],m=n.length-1,y=n[0],b=n[m],x=!a;d<=h&&p<=m;)i(v)?v=t[++d]:i(g)?g=t[--h]:tr(v,y)?(E(v,y,r,n,p),v=t[++d],y=n[++p]):tr(g,b)?(E(g,b,r,n,m),g=t[--h],b=n[--m]):tr(v,b)?(E(v,b,r,n,m),x&&c.insertBefore(e,v.elm,c.nextSibling(g.elm)),v=t[++d],b=n[--m]):tr(g,y)?(E(g,y,r,n,p),x&&c.insertBefore(e,g.elm,v.elm),g=t[--h],y=n[++p]):(i(s)&&(s=nr(t,d,h)),i(u=o(y.key)?s[y.key]:C(y,t,d,h))?f(y,r,e,v.elm,!1,n,p):tr(l=t[u],y)?(E(l,y,r,n,p),t[u]=void 0,x&&c.insertBefore(e,l.elm,v.elm)):f(y,r,e,v.elm,!1,n,p),y=n[++p]);d>h?_(e,i(n[m+1])?null:n[m+1].elm,n,p,m,r):p>m&&w(t,d,h)}(d,v,m,n,l):o(m)?(o(e.text)&&c.setTextContent(d,""),_(d,null,m,0,m.length-1,n)):o(v)?w(v,0,v.length-1):o(e.text)&&c.setTextContent(d,""):e.text!==t.text&&c.setTextContent(d,t.text),o(h)&&o(p=h.hook)&&o(p=p.postpatch)&&p(e,t)}}}function T(e,t,n){if(a(n)&&o(e.parent))e.parent.data.pendingInsert=t;else for(var r=0;r<t.length;++r)t[r].data.hook.insert(t[r])}var S=v("attrs,class,staticClass,staticStyle,key");function A(e,t,n,r){var i,s=t.tag,u=t.data,c=t.children;if(r=r||u&&u.pre,t.elm=e,a(t.isComment)&&o(t.asyncFactory))return t.isAsyncPlaceholder=!0,!0;if(o(u)&&(o(i=u.hook)&&o(i=i.init)&&i(t,!0),o(i=t.componentInstance)))return d(t,n),!0;if(o(s)){if(o(c))if(e.hasChildNodes())if(o(i=u)&&o(i=i.domProps)&&o(i=i.innerHTML)){if(i!==e.innerHTML)return!1}else{for(var l=!0,f=e.firstChild,p=0;p<c.length;p++){if(!f||!A(f,c[p],n,r)){l=!1;break}f=f.nextSibling}if(!l||f)return!1}else h(t,c,n);if(o(u)){var v=!1;for(var g in u)if(!S(g)){v=!0,m(t,n);break}!v&&u.class&&rt(u.class)}}else e.data!==t.text&&(e.data=t.text);return!0}return function(e,t,n,s){if(!i(t)){var u,l=!1,d=[];if(i(e))l=!0,f(t,d);else{var p=o(e.nodeType);if(!p&&tr(e,t))E(e,t,d,null,null,s);else{if(p){if(1===e.nodeType&&e.hasAttribute(P)&&(e.removeAttribute(P),n=!0),a(n)&&A(e,t,d))return T(t,d,!0),e;u=e,e=new ve(c.tagName(u).toLowerCase(),{},[],void 0,u)}var h=e.elm,v=c.parentNode(h);if(f(t,d,h._leaveCb?null:v,c.nextSibling(h)),o(t.parent))for(var m=t.parent,y=g(t);m;){for(var _=0;_<r.destroy.length;++_)r.destroy[_](m);if(m.elm=t.elm,y){for(var x=0;x<r.create.length;++x)r.create[x](Zn,m);var C=m.data.hook.insert;if(C.merged)for(var S=1;S<C.fns.length;S++)C.fns[S]()}else Gn(m);m=m.parent}o(v)?w([e],0,0):o(e.tag)&&b(e)}}return T(t,d,l),t.elm}o(e)&&b(e)}}({nodeOps:Yn,modules:[pr,wr,Gr,ti,di,V?{create:Mi,activate:Mi,remove:function(e,t){!0!==e.data.show?Ii(e,t):t()}}:{}].concat(cr)});J&&document.addEventListener("selectionchange",(function(){var e=document.activeElement;e&&e.vmodel&&Qi(e,"input")}));var qi={inserted:function(e,t,n,r){"select"===n.tag?(r.elm&&!r.elm._vOptions?st(n,"postpatch",(function(){qi.componentUpdated(e,t,n)})):Hi(e,t,n.context),e._vOptions=[].map.call(e.options,Wi)):("textarea"===n.tag||Xn(e.type))&&(e._vModifiers=t.modifiers,t.modifiers.lazy||(e.addEventListener("compositionstart",zi),e.addEventListener("compositionend",Vi),e.addEventListener("change",Vi),J&&(e.vmodel=!0)))},componentUpdated:function(e,t,n){if("select"===n.tag){Hi(e,t,n.context);var r=e._vOptions,i=e._vOptions=[].map.call(e.options,Wi);i.some((function(e,t){return!L(e,r[t])}))&&(e.multiple?t.value.some((function(e){return Ui(e,i)})):t.value!==t.oldValue&&Ui(t.value,i))&&Qi(e,"change")}}};function Hi(e,t,n){Bi(e,t,n),(Y||G)&&setTimeout((function(){Bi(e,t,n)}),0)}function Bi(e,t,n){var r=t.value,i=e.multiple;if(!i||Array.isArray(r)){for(var o,a,s=0,u=e.options.length;s<u;s++)if(a=e.options[s],i)o=I(r,Wi(a))>-1,a.selected!==o&&(a.selected=o);else if(L(Wi(a),r))return void(e.selectedIndex!==s&&(e.selectedIndex=s));i||(e.selectedIndex=-1)}}function Ui(e,t){return t.every((function(t){return!L(t,e)}))}function Wi(e){return"_value"in e?e._value:e.value}function zi(e){e.target.composing=!0}function Vi(e){e.target.composing&&(e.target.composing=!1,Qi(e.target,"input"))}function Qi(e,t){var n=document.createEvent("HTMLEvents");n.initEvent(t,!0,!0),e.dispatchEvent(n)}function Xi(e){return!e.componentInstance||e.data&&e.data.transition?e:Xi(e.componentInstance._vnode)}var Ki={model:qi,show:{bind:function(e,t,n){var r=t.value,i=(n=Xi(n)).data&&n.data.transition,o=e.__vOriginalDisplay="none"===e.style.display?"":e.style.display;r&&i?(n.data.show=!0,Li(n,(function(){e.style.display=o}))):e.style.display=r?o:"none"},update:function(e,t,n){var r=t.value;!r!=!t.oldValue&&((n=Xi(n)).data&&n.data.transition?(n.data.show=!0,r?Li(n,(function(){e.style.display=e.__vOriginalDisplay})):Ii(n,(function(){e.style.display="none"}))):e.style.display=r?e.__vOriginalDisplay:"none")},unbind:function(e,t,n,r,i){i||(e.style.display=e.__vOriginalDisplay)}}},Yi={name:String,appear:Boolean,css:Boolean,mode:String,type:String,enterClass:String,leaveClass:String,enterToClass:String,leaveToClass:String,enterActiveClass:String,leaveActiveClass:String,appearClass:String,appearActiveClass:String,appearToClass:String,duration:[Number,String,Object]};function Ji(e){var t=e&&e.componentOptions;return t&&t.Ctor.options.abstract?Ji(Wt(t.children)):e}function Gi(e){var t={},n=e.$options;for(var r in n.propsData)t[r]=e[r];var i=n._parentListeners;for(var o in i)t[C(o)]=i[o];return t}function Zi(e,t){if(/\d-keep-alive$/.test(t.tag))return e("keep-alive",{props:t.componentOptions.propsData})}var eo=function(e){return e.tag||Ut(e)},to=function(e){return"show"===e.name},no={name:"transition",props:Yi,abstract:!0,render:function(e){var t=this,n=this.$slots.default;if(n&&(n=n.filter(eo)).length){var r=this.mode,i=n[0];if(function(e){for(;e=e.parent;)if(e.data.transition)return!0}(this.$vnode))return i;var o=Ji(i);if(!o)return i;if(this._leaving)return Zi(e,i);var a="__transition-"+this._uid+"-";o.key=null==o.key?o.isComment?a+"comment":a+o.tag:s(o.key)?0===String(o.key).indexOf(a)?o.key:a+o.key:o.key;var u=(o.data||(o.data={})).transition=Gi(this),c=this._vnode,l=Ji(c);if(o.data.directives&&o.data.directives.some(to)&&(o.data.show=!0),l&&l.data&&!function(e,t){return t.key===e.key&&t.tag===e.tag}(o,l)&&!Ut(l)&&(!l.componentInstance||!l.componentInstance._vnode.isComment)){var f=l.data.transition=O({},u);if("out-in"===r)return this._leaving=!0,st(f,"afterLeave",(function(){t._leaving=!1,t.$forceUpdate()})),Zi(e,i);if("in-out"===r){if(Ut(o))return c;var d,p=function(){d()};st(u,"afterEnter",p),st(u,"enterCancelled",p),st(f,"delayLeave",(function(e){d=e}))}}return i}}},ro=O({tag:String,moveClass:String},Yi);function io(e){e.elm._moveCb&&e.elm._moveCb(),e.elm._enterCb&&e.elm._enterCb()}function oo(e){e.data.newPos=e.elm.getBoundingClientRect()}function ao(e){var t=e.data.pos,n=e.data.newPos,r=t.left-n.left,i=t.top-n.top;if(r||i){e.data.moved=!0;var o=e.elm.style;o.transform=o.WebkitTransform="translate("+r+"px,"+i+"px)",o.transitionDuration="0s"}}delete ro.mode;var so={Transition:no,TransitionGroup:{props:ro,beforeMount:function(){var e=this,t=this._update;this._update=function(n,r){var i=Yt(e);e.__patch__(e._vnode,e.kept,!1,!0),e._vnode=e.kept,i(),t.call(e,n,r)}},render:function(e){for(var t=this.tag||this.$vnode.data.tag||"span",n=Object.create(null),r=this.prevChildren=this.children,i=this.$slots.default||[],o=this.children=[],a=Gi(this),s=0;s<i.length;s++){var u=i[s];u.tag&&null!=u.key&&0!==String(u.key).indexOf("__vlist")&&(o.push(u),n[u.key]=u,(u.data||(u.data={})).transition=a)}if(r){for(var c=[],l=[],f=0;f<r.length;f++){var d=r[f];d.data.transition=a,d.data.pos=d.elm.getBoundingClientRect(),n[d.key]?c.push(d):l.push(d)}this.kept=e(t,null,c),this.removed=l}return e(t,null,o)},updated:function(){var e=this.prevChildren,t=this.moveClass||(this.name||"v")+"-move";e.length&&this.hasMove(e[0].elm,t)&&(e.forEach(io),e.forEach(oo),e.forEach(ao),this._reflow=document.body.offsetHeight,e.forEach((function(e){if(e.data.moved){var n=e.elm,r=n.style;Ai(n,t),r.transform=r.WebkitTransform=r.transitionDuration="",n.addEventListener(xi,n._moveCb=function e(r){r&&r.target!==n||r&&!/transform$/.test(r.propertyName)||(n.removeEventListener(xi,e),n._moveCb=null,ki(n,t))})}})))},methods:{hasMove:function(e,t){if(!yi)return!1;if(this._hasMove)return this._hasMove;var n=e.cloneNode();e._transitionClasses&&e._transitionClasses.forEach((function(e){vi(n,e)})),hi(n,t),n.style.display="none",this.$el.appendChild(n);var r=Ni(n);return this.$el.removeChild(n),this._hasMove=r.hasTransform}}}};xn.config.mustUseProp=Nn,xn.config.isReservedTag=zn,xn.config.isReservedAttr=On,xn.config.getTagNamespace=Vn,xn.config.isUnknownElement=function(e){if(!V)return!0;if(zn(e))return!1;if(e=e.toLowerCase(),null!=Qn[e])return Qn[e];var t=document.createElement(e);return e.indexOf("-")>-1?Qn[e]=t.constructor===window.HTMLUnknownElement||t.constructor===window.HTMLElement:Qn[e]=/HTMLUnknownElement/.test(t.toString())},O(xn.options.directives,Ki),O(xn.options.components,so),xn.prototype.__patch__=V?Fi:N,xn.prototype.$mount=function(e,t){return function(e,t,n){var r;return e.$el=t,e.$options.render||(e.$options.render=me),Zt(e,"beforeMount"),r=function(){e._update(e._render(),n)},new dn(e,r,N,{before:function(){e._isMounted&&!e._isDestroyed&&Zt(e,"beforeUpdate")}},!0),n=!1,null==e.$vnode&&(e._isMounted=!0,Zt(e,"mounted")),e}(this,e=e&&V?Kn(e):void 0,t)},V&&setTimeout((function(){q.devtools&&oe&&oe.emit("init",xn)}),0);var uo,co=/\{\{((?:.|\r?\n)+?)\}\}/g,lo=/[-.*+?^${}()|[\]\/\\]/g,fo=w((function(e){var t=e[0].replace(lo,"\\$&"),n=e[1].replace(lo,"\\$&");return new RegExp(t+"((?:.|\\n)+?)"+n,"g")})),po={staticKeys:["staticClass"],transformNode:function(e,t){t.warn;var n=Lr(e,"class");n&&(e.staticClass=JSON.stringify(n));var r=$r(e,"class",!1);r&&(e.classBinding=r)},genData:function(e){var t="";return e.staticClass&&(t+="staticClass:"+e.staticClass+","),e.classBinding&&(t+="class:"+e.classBinding+","),t}},ho={staticKeys:["staticStyle"],transformNode:function(e,t){t.warn;var n=Lr(e,"style");n&&(e.staticStyle=JSON.stringify(ni(n)));var r=$r(e,"style",!1);r&&(e.styleBinding=r)},genData:function(e){var t="";return e.staticStyle&&(t+="staticStyle:"+e.staticStyle+","),e.styleBinding&&(t+="style:("+e.styleBinding+"),"),t}},vo=v("area,base,br,col,embed,frame,hr,img,input,isindex,keygen,link,meta,param,source,track,wbr"),go=v("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr,source"),mo=v("address,article,aside,base,blockquote,body,caption,col,colgroup,dd,details,dialog,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,legend,li,menuitem,meta,optgroup,option,param,rp,rt,source,style,summary,tbody,td,tfoot,th,thead,title,tr,track"),yo=/^\s*([^\s"'<>\/=]+)(?:\s*(=)\s*(?:"([^"]*)"+|'([^']*)'+|([^\s"'=<>`]+)))?/,_o=/^\s*((?:v-[\w-]+:|@|:|#)\[[^=]+\][^\s"'<>\/=]*)(?:\s*(=)\s*(?:"([^"]*)"+|'([^']*)'+|([^\s"'=<>`]+)))?/,bo="[a-zA-Z_][\\-\\.0-9_a-zA-Z"+H.source+"]*",wo="((?:"+bo+"\\:)?"+bo+")",xo=new RegExp("^<"+wo),Co=/^\s*(\/?)>/,Eo=new RegExp("^<\\/"+wo+"[^>]*>"),To=/^<!DOCTYPE [^>]+>/i,So=/^<!\--/,Ao=/^<!\[/,ko=v("script,style,textarea",!0),Oo={},jo={"&lt;":"<","&gt;":">","&quot;":'"',"&amp;":"&","&#10;":"\n","&#9;":"\t","&#39;":"'"},No=/&(?:lt|gt|quot|amp|#39);/g,Do=/&(?:lt|gt|quot|amp|#39|#10|#9);/g,$o=v("pre,textarea",!0),Lo=function(e,t){return e&&$o(e)&&"\n"===t[0]};function Io(e,t){var n=t?Do:No;return e.replace(n,(function(e){return jo[e]}))}var Ro,Po,Mo,Fo,qo,Ho,Bo,Uo,Wo=/^@|^v-on:/,zo=/^v-|^@|^:|^#/,Vo=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,Qo=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,Xo=/^\(|\)$/g,Ko=/^\[.*\]$/,Yo=/:(.*)$/,Jo=/^:|^\.|^v-bind:/,Go=/\.[^.\]]+(?=[^\]]*$)/g,Zo=/^v-slot(:|$)|^#/,ea=/[\r\n]/,ta=/\s+/g,na=w((function(e){return(uo=uo||document.createElement("div")).innerHTML=e,uo.textContent})),ra="_empty_";function ia(e,t,n){return{type:1,tag:e,attrsList:t,attrsMap:la(t),rawAttrsMap:{},parent:n,children:[]}}function oa(e,t){var n,r;(r=$r(n=e,"key"))&&(n.key=r),e.plain=!e.key&&!e.scopedSlots&&!e.attrsList.length,function(e){var t=$r(e,"ref");t&&(e.ref=t,e.refInFor=function(e){for(var t=e;t;){if(void 0!==t.for)return!0;t=t.parent}return!1}(e))}(e),function(e){var t;"template"===e.tag?(t=Lr(e,"scope"),e.slotScope=t||Lr(e,"slot-scope")):(t=Lr(e,"slot-scope"))&&(e.slotScope=t);var n=$r(e,"slot");if(n&&(e.slotTarget='""'===n?'"default"':n,e.slotTargetDynamic=!(!e.attrsMap[":slot"]&&!e.attrsMap["v-bind:slot"]),"template"===e.tag||e.slotScope||kr(e,"slot",n,function(e,t){return e.rawAttrsMap[":"+t]||e.rawAttrsMap["v-bind:"+t]||e.rawAttrsMap[t]}(e,"slot"))),"template"===e.tag){var r=Ir(e,Zo);if(r){var i=ua(r),o=i.name,a=i.dynamic;e.slotTarget=o,e.slotTargetDynamic=a,e.slotScope=r.value||ra}}else{var s=Ir(e,Zo);if(s){var u=e.scopedSlots||(e.scopedSlots={}),c=ua(s),l=c.name,f=c.dynamic,d=u[l]=ia("template",[],e);d.slotTarget=l,d.slotTargetDynamic=f,d.children=e.children.filter((function(e){if(!e.slotScope)return e.parent=d,!0})),d.slotScope=s.value||ra,e.children=[],e.plain=!1}}}(e),function(e){"slot"===e.tag&&(e.slotName=$r(e,"name"))}(e),function(e){var t;(t=$r(e,"is"))&&(e.component=t),null!=Lr(e,"inline-template")&&(e.inlineTemplate=!0)}(e);for(var i=0;i<Mo.length;i++)e=Mo[i](e,t)||e;return function(e){var t,n,r,i,o,a,s,u,c=e.attrsList;for(t=0,n=c.length;t<n;t++)if(r=i=c[t].name,o=c[t].value,zo.test(r))if(e.hasBindings=!0,(a=ca(r.replace(zo,"")))&&(r=r.replace(Go,"")),Jo.test(r))r=r.replace(Jo,""),o=Cr(o),(u=Ko.test(r))&&(r=r.slice(1,-1)),a&&(a.prop&&!u&&"innerHtml"===(r=C(r))&&(r="innerHTML"),a.camel&&!u&&(r=C(r)),a.sync&&(s=Mr(o,"$event"),u?Dr(e,'"update:"+('+r+")",s,null,!1,0,c[t],!0):(Dr(e,"update:"+C(r),s,null,!1,0,c[t]),S(r)!==C(r)&&Dr(e,"update:"+S(r),s,null,!1,0,c[t])))),a&&a.prop||!e.component&&Bo(e.tag,e.attrsMap.type,r)?Ar(e,r,o,c[t],u):kr(e,r,o,c[t],u);else if(Wo.test(r))r=r.replace(Wo,""),(u=Ko.test(r))&&(r=r.slice(1,-1)),Dr(e,r,o,a,!1,0,c[t],u);else{var l=(r=r.replace(zo,"")).match(Yo),f=l&&l[1];u=!1,f&&(r=r.slice(0,-(f.length+1)),Ko.test(f)&&(f=f.slice(1,-1),u=!0)),jr(e,r,i,o,f,u,a,c[t])}else kr(e,r,JSON.stringify(o),c[t]),!e.component&&"muted"===r&&Bo(e.tag,e.attrsMap.type,r)&&Ar(e,r,"true",c[t])}(e),e}function aa(e){var t;if(t=Lr(e,"v-for")){var n=function(e){var t=e.match(Vo);if(t){var n={};n.for=t[2].trim();var r=t[1].trim().replace(Xo,""),i=r.match(Qo);return i?(n.alias=r.replace(Qo,"").trim(),n.iterator1=i[1].trim(),i[2]&&(n.iterator2=i[2].trim())):n.alias=r,n}}(t);n&&O(e,n)}}function sa(e,t){e.ifConditions||(e.ifConditions=[]),e.ifConditions.push(t)}function ua(e){var t=e.name.replace(Zo,"");return t||"#"!==e.name[0]&&(t="default"),Ko.test(t)?{name:t.slice(1,-1),dynamic:!0}:{name:'"'+t+'"',dynamic:!1}}function ca(e){var t=e.match(Go);if(t){var n={};return t.forEach((function(e){n[e.slice(1)]=!0})),n}}function la(e){for(var t={},n=0,r=e.length;n<r;n++)t[e[n].name]=e[n].value;return t}var fa=/^xmlns:NS\d+/,da=/^NS\d+:/;function pa(e){return ia(e.tag,e.attrsList.slice(),e.parent)}var ha,va,ga=[po,ho,{preTransformNode:function(e,t){if("input"===e.tag){var n,r=e.attrsMap;if(!r["v-model"])return;if((r[":type"]||r["v-bind:type"])&&(n=$r(e,"type")),r.type||n||!r["v-bind"]||(n="("+r["v-bind"]+").type"),n){var i=Lr(e,"v-if",!0),o=i?"&&("+i+")":"",a=null!=Lr(e,"v-else",!0),s=Lr(e,"v-else-if",!0),u=pa(e);aa(u),Or(u,"type","checkbox"),oa(u,t),u.processed=!0,u.if="("+n+")==='checkbox'"+o,sa(u,{exp:u.if,block:u});var c=pa(e);Lr(c,"v-for",!0),Or(c,"type","radio"),oa(c,t),sa(u,{exp:"("+n+")==='radio'"+o,block:c});var l=pa(e);return Lr(l,"v-for",!0),Or(l,":type",n),oa(l,t),sa(u,{exp:i,block:l}),a?u.else=!0:s&&(u.elseif=s),u}}}}],ma={expectHTML:!0,modules:ga,directives:{model:function(e,t,n){var r=t.value,i=t.modifiers,o=e.tag,a=e.attrsMap.type;if(e.component)return Pr(e,r,i),!1;if("select"===o)!function(e,t,n){var r='var $$selectedVal = Array.prototype.filter.call($event.target.options,function(o){return o.selected}).map(function(o){var val = "_value" in o ? o._value : o.value;return '+(n&&n.number?"_n(val)":"val")+"});";Dr(e,"change",r=r+" "+Mr(t,"$event.target.multiple ? $$selectedVal : $$selectedVal[0]"),null,!0)}(e,r,i);else if("input"===o&&"checkbox"===a)!function(e,t,n){var r=n&&n.number,i=$r(e,"value")||"null",o=$r(e,"true-value")||"true",a=$r(e,"false-value")||"false";Ar(e,"checked","Array.isArray("+t+")?_i("+t+","+i+")>-1"+("true"===o?":("+t+")":":_q("+t+","+o+")")),Dr(e,"change","var $$a="+t+",$$el=$event.target,$$c=$$el.checked?("+o+"):("+a+");if(Array.isArray($$a)){var $$v="+(r?"_n("+i+")":i)+",$$i=_i($$a,$$v);if($$el.checked){$$i<0&&("+Mr(t,"$$a.concat([$$v])")+")}else{$$i>-1&&("+Mr(t,"$$a.slice(0,$$i).concat($$a.slice($$i+1))")+")}}else{"+Mr(t,"$$c")+"}",null,!0)}(e,r,i);else if("input"===o&&"radio"===a)!function(e,t,n){var r=n&&n.number,i=$r(e,"value")||"null";Ar(e,"checked","_q("+t+","+(i=r?"_n("+i+")":i)+")"),Dr(e,"change",Mr(t,i),null,!0)}(e,r,i);else if("input"===o||"textarea"===o)!function(e,t,n){var r=e.attrsMap.type,i=n||{},o=i.lazy,a=i.number,s=i.trim,u=!o&&"range"!==r,c=o?"change":"range"===r?zr:"input",l="$event.target.value";s&&(l="$event.target.value.trim()"),a&&(l="_n("+l+")");var f=Mr(t,l);u&&(f="if($event.target.composing)return;"+f),Ar(e,"value","("+t+")"),Dr(e,c,f,null,!0),(s||a)&&Dr(e,"blur","$forceUpdate()")}(e,r,i);else if(!q.isReservedTag(o))return Pr(e,r,i),!1;return!0},text:function(e,t){t.value&&Ar(e,"textContent","_s("+t.value+")",t)},html:function(e,t){t.value&&Ar(e,"innerHTML","_s("+t.value+")",t)}},isPreTag:function(e){return"pre"===e},isUnaryTag:vo,mustUseProp:Nn,canBeLeftOpenTag:go,isReservedTag:zn,getTagNamespace:Vn,staticKeys:function(e){return e.reduce((function(e,t){return e.concat(t.staticKeys||[])}),[]).join(",")}(ga)},ya=w((function(e){return v("type,tag,attrsList,attrsMap,plain,parent,children,attrs,start,end,rawAttrsMap"+(e?","+e:""))}));var _a=/^([\w$_]+|\([^)]*?\))\s*=>|^function(?:\s+[\w$]+)?\s*\(/,ba=/\([^)]*?\);*$/,wa=/^[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['[^']*?']|\["[^"]*?"]|\[\d+]|\[[A-Za-z_$][\w$]*])*$/,xa={esc:27,tab:9,enter:13,space:32,up:38,left:37,right:39,down:40,delete:[8,46]},Ca={esc:["Esc","Escape"],tab:"Tab",enter:"Enter",space:[" ","Spacebar"],up:["Up","ArrowUp"],left:["Left","ArrowLeft"],right:["Right","ArrowRight"],down:["Down","ArrowDown"],delete:["Backspace","Delete","Del"]},Ea=function(e){return"if("+e+")return null;"},Ta={stop:"$event.stopPropagation();",prevent:"$event.preventDefault();",self:Ea("$event.target !== $event.currentTarget"),ctrl:Ea("!$event.ctrlKey"),shift:Ea("!$event.shiftKey"),alt:Ea("!$event.altKey"),meta:Ea("!$event.metaKey"),left:Ea("'button' in $event && $event.button !== 0"),middle:Ea("'button' in $event && $event.button !== 1"),right:Ea("'button' in $event && $event.button !== 2")};function Sa(e,t){var n=t?"nativeOn:":"on:",r="",i="";for(var o in e){var a=Aa(e[o]);e[o]&&e[o].dynamic?i+=o+","+a+",":r+='"'+o+'":'+a+","}return r="{"+r.slice(0,-1)+"}",i?n+"_d("+r+",["+i.slice(0,-1)+"])":n+r}function Aa(e){if(!e)return"function(){}";if(Array.isArray(e))return"["+e.map((function(e){return Aa(e)})).join(",")+"]";var t=wa.test(e.value),n=_a.test(e.value),r=wa.test(e.value.replace(ba,""));if(e.modifiers){var i="",o="",a=[];for(var s in e.modifiers)if(Ta[s])o+=Ta[s],xa[s]&&a.push(s);else if("exact"===s){var u=e.modifiers;o+=Ea(["ctrl","shift","alt","meta"].filter((function(e){return!u[e]})).map((function(e){return"$event."+e+"Key"})).join("||"))}else a.push(s);return a.length&&(i+=function(e){return"if(!$event.type.indexOf('key')&&"+e.map(ka).join("&&")+")return null;"}(a)),o&&(i+=o),"function($event){"+i+(t?"return "+e.value+"($event)":n?"return ("+e.value+")($event)":r?"return "+e.value:e.value)+"}"}return t||n?e.value:"function($event){"+(r?"return "+e.value:e.value)+"}"}function ka(e){var t=parseInt(e,10);if(t)return"$event.keyCode!=="+t;var n=xa[e],r=Ca[e];return"_k($event.keyCode,"+JSON.stringify(e)+","+JSON.stringify(n)+",$event.key,"+JSON.stringify(r)+")"}var Oa={on:function(e,t){e.wrapListeners=function(e){return"_g("+e+","+t.value+")"}},bind:function(e,t){e.wrapData=function(n){return"_b("+n+",'"+e.tag+"',"+t.value+","+(t.modifiers&&t.modifiers.prop?"true":"false")+(t.modifiers&&t.modifiers.sync?",true":"")+")"}},cloak:N},ja=function(e){this.options=e,this.warn=e.warn||Tr,this.transforms=Sr(e.modules,"transformCode"),this.dataGenFns=Sr(e.modules,"genData"),this.directives=O(O({},Oa),e.directives);var t=e.isReservedTag||D;this.maybeComponent=function(e){return!!e.component||!t(e.tag)},this.onceId=0,this.staticRenderFns=[],this.pre=!1};function Na(e,t){var n=new ja(t);return{render:"with(this){return "+(e?Da(e,n):'_c("div")')+"}",staticRenderFns:n.staticRenderFns}}function Da(e,t){if(e.parent&&(e.pre=e.pre||e.parent.pre),e.staticRoot&&!e.staticProcessed)return $a(e,t);if(e.once&&!e.onceProcessed)return La(e,t);if(e.for&&!e.forProcessed)return Ra(e,t);if(e.if&&!e.ifProcessed)return Ia(e,t);if("template"!==e.tag||e.slotTarget||t.pre){if("slot"===e.tag)return function(e,t){var n=e.slotName||'"default"',r=qa(e,t),i="_t("+n+(r?","+r:""),o=e.attrs||e.dynamicAttrs?Ua((e.attrs||[]).concat(e.dynamicAttrs||[]).map((function(e){return{name:C(e.name),value:e.value,dynamic:e.dynamic}}))):null,a=e.attrsMap["v-bind"];return!o&&!a||r||(i+=",null"),o&&(i+=","+o),a&&(i+=(o?"":",null")+","+a),i+")"}(e,t);var n;if(e.component)n=function(e,t,n){var r=t.inlineTemplate?null:qa(t,n,!0);return"_c("+e+","+Pa(t,n)+(r?","+r:"")+")"}(e.component,e,t);else{var r;(!e.plain||e.pre&&t.maybeComponent(e))&&(r=Pa(e,t));var i=e.inlineTemplate?null:qa(e,t,!0);n="_c('"+e.tag+"'"+(r?","+r:"")+(i?","+i:"")+")"}for(var o=0;o<t.transforms.length;o++)n=t.transforms[o](e,n);return n}return qa(e,t)||"void 0"}function $a(e,t){e.staticProcessed=!0;var n=t.pre;return e.pre&&(t.pre=e.pre),t.staticRenderFns.push("with(this){return "+Da(e,t)+"}"),t.pre=n,"_m("+(t.staticRenderFns.length-1)+(e.staticInFor?",true":"")+")"}function La(e,t){if(e.onceProcessed=!0,e.if&&!e.ifProcessed)return Ia(e,t);if(e.staticInFor){for(var n="",r=e.parent;r;){if(r.for){n=r.key;break}r=r.parent}return n?"_o("+Da(e,t)+","+t.onceId+++","+n+")":Da(e,t)}return $a(e,t)}function Ia(e,t,n,r){return e.ifProcessed=!0,function e(t,n,r,i){if(!t.length)return i||"_e()";var o=t.shift();return o.exp?"("+o.exp+")?"+a(o.block)+":"+e(t,n,r,i):""+a(o.block);function a(e){return r?r(e,n):e.once?La(e,n):Da(e,n)}}(e.ifConditions.slice(),t,n,r)}function Ra(e,t,n,r){var i=e.for,o=e.alias,a=e.iterator1?","+e.iterator1:"",s=e.iterator2?","+e.iterator2:"";return e.forProcessed=!0,(r||"_l")+"(("+i+"),function("+o+a+s+"){return "+(n||Da)(e,t)+"})"}function Pa(e,t){var n="{",r=function(e,t){var n=e.directives;if(n){var r,i,o,a,s="directives:[",u=!1;for(r=0,i=n.length;r<i;r++){o=n[r],a=!0;var c=t.directives[o.name];c&&(a=!!c(e,o,t.warn)),a&&(u=!0,s+='{name:"'+o.name+'",rawName:"'+o.rawName+'"'+(o.value?",value:("+o.value+"),expression:"+JSON.stringify(o.value):"")+(o.arg?",arg:"+(o.isDynamicArg?o.arg:'"'+o.arg+'"'):"")+(o.modifiers?",modifiers:"+JSON.stringify(o.modifiers):"")+"},")}return u?s.slice(0,-1)+"]":void 0}}(e,t);r&&(n+=r+","),e.key&&(n+="key:"+e.key+","),e.ref&&(n+="ref:"+e.ref+","),e.refInFor&&(n+="refInFor:true,"),e.pre&&(n+="pre:true,"),e.component&&(n+='tag:"'+e.tag+'",');for(var i=0;i<t.dataGenFns.length;i++)n+=t.dataGenFns[i](e);if(e.attrs&&(n+="attrs:"+Ua(e.attrs)+","),e.props&&(n+="domProps:"+Ua(e.props)+","),e.events&&(n+=Sa(e.events,!1)+","),e.nativeEvents&&(n+=Sa(e.nativeEvents,!0)+","),e.slotTarget&&!e.slotScope&&(n+="slot:"+e.slotTarget+","),e.scopedSlots&&(n+=function(e,t,n){var r=e.for||Object.keys(t).some((function(e){var n=t[e];return n.slotTargetDynamic||n.if||n.for||Ma(n)})),i=!!e.if;if(!r)for(var o=e.parent;o;){if(o.slotScope&&o.slotScope!==ra||o.for){r=!0;break}o.if&&(i=!0),o=o.parent}var a=Object.keys(t).map((function(e){return Fa(t[e],n)})).join(",");return"scopedSlots:_u(["+a+"]"+(r?",null,true":"")+(!r&&i?",null,false,"+function(e){for(var t=5381,n=e.length;n;)t=33*t^e.charCodeAt(--n);return t>>>0}(a):"")+")"}(e,e.scopedSlots,t)+","),e.model&&(n+="model:{value:"+e.model.value+",callback:"+e.model.callback+",expression:"+e.model.expression+"},"),e.inlineTemplate){var o=function(e,t){var n=e.children[0];if(n&&1===n.type){var r=Na(n,t.options);return"inlineTemplate:{render:function(){"+r.render+"},staticRenderFns:["+r.staticRenderFns.map((function(e){return"function(){"+e+"}"})).join(",")+"]}"}}(e,t);o&&(n+=o+",")}return n=n.replace(/,$/,"")+"}",e.dynamicAttrs&&(n="_b("+n+',"'+e.tag+'",'+Ua(e.dynamicAttrs)+")"),e.wrapData&&(n=e.wrapData(n)),e.wrapListeners&&(n=e.wrapListeners(n)),n}function Ma(e){return 1===e.type&&("slot"===e.tag||e.children.some(Ma))}function Fa(e,t){var n=e.attrsMap["slot-scope"];if(e.if&&!e.ifProcessed&&!n)return Ia(e,t,Fa,"null");if(e.for&&!e.forProcessed)return Ra(e,t,Fa);var r=e.slotScope===ra?"":String(e.slotScope),i="function("+r+"){return "+("template"===e.tag?e.if&&n?"("+e.if+")?"+(qa(e,t)||"undefined")+":undefined":qa(e,t)||"undefined":Da(e,t))+"}",o=r?"":",proxy:true";return"{key:"+(e.slotTarget||'"default"')+",fn:"+i+o+"}"}function qa(e,t,n,r,i){var o=e.children;if(o.length){var a=o[0];if(1===o.length&&a.for&&"template"!==a.tag&&"slot"!==a.tag){var s=n?t.maybeComponent(a)?",1":",0":"";return""+(r||Da)(a,t)+s}var u=n?function(e,t){for(var n=0,r=0;r<e.length;r++){var i=e[r];if(1===i.type){if(Ha(i)||i.ifConditions&&i.ifConditions.some((function(e){return Ha(e.block)}))){n=2;break}(t(i)||i.ifConditions&&i.ifConditions.some((function(e){return t(e.block)})))&&(n=1)}}return n}(o,t.maybeComponent):0,c=i||Ba;return"["+o.map((function(e){return c(e,t)})).join(",")+"]"+(u?","+u:"")}}function Ha(e){return void 0!==e.for||"template"===e.tag||"slot"===e.tag}function Ba(e,t){return 1===e.type?Da(e,t):3===e.type&&e.isComment?(r=e,"_e("+JSON.stringify(r.text)+")"):"_v("+(2===(n=e).type?n.expression:Wa(JSON.stringify(n.text)))+")";var n,r}function Ua(e){for(var t="",n="",r=0;r<e.length;r++){var i=e[r],o=Wa(i.value);i.dynamic?n+=i.name+","+o+",":t+='"'+i.name+'":'+o+","}return t="{"+t.slice(0,-1)+"}",n?"_d("+t+",["+n.slice(0,-1)+"])":t}function Wa(e){return e.replace(/\u2028/g,"\\u2028").replace(/\u2029/g,"\\u2029")}function za(e,t){try{return new Function(e)}catch(n){return t.push({err:n,code:e}),N}}function Va(e){var t=Object.create(null);return function(n,r,i){(r=O({},r)).warn,delete r.warn;var o=r.delimiters?String(r.delimiters)+n:n;if(t[o])return t[o];var a=e(n,r),s={},u=[];return s.render=za(a.render,u),s.staticRenderFns=a.staticRenderFns.map((function(e){return za(e,u)})),t[o]=s}}new RegExp("\\b"+"do,if,for,let,new,try,var,case,else,with,await,break,catch,class,const,super,throw,while,yield,delete,export,import,return,switch,default,extends,finally,continue,debugger,function,arguments".split(",").join("\\b|\\b")+"\\b");var Qa,Xa,Ka=(Qa=function(e,t){var n=function(e,t){Ro=t.warn||Tr,Ho=t.isPreTag||D,Bo=t.mustUseProp||D,Uo=t.getTagNamespace||D,t.isReservedTag,Mo=Sr(t.modules,"transformNode"),Fo=Sr(t.modules,"preTransformNode"),qo=Sr(t.modules,"postTransformNode"),Po=t.delimiters;var n,r,i=[],o=!1!==t.preserveWhitespace,a=t.whitespace,s=!1,u=!1;function c(e){if(l(e),s||e.processed||(e=oa(e,t)),i.length||e===n||n.if&&(e.elseif||e.else)&&sa(n,{exp:e.elseif,block:e}),r&&!e.forbidden)if(e.elseif||e.else)a=e,(c=function(e){for(var t=e.length;t--;){if(1===e[t].type)return e[t];e.pop()}}(r.children))&&c.if&&sa(c,{exp:a.elseif,block:a});else{if(e.slotScope){var o=e.slotTarget||'"default"';(r.scopedSlots||(r.scopedSlots={}))[o]=e}r.children.push(e),e.parent=r}var a,c;e.children=e.children.filter((function(e){return!e.slotScope})),l(e),e.pre&&(s=!1),Ho(e.tag)&&(u=!1);for(var f=0;f<qo.length;f++)qo[f](e,t)}function l(e){if(!u)for(var t;(t=e.children[e.children.length-1])&&3===t.type&&" "===t.text;)e.children.pop()}return function(e,t){for(var n,r,i=[],o=t.expectHTML,a=t.isUnaryTag||D,s=t.canBeLeftOpenTag||D,u=0;e;){if(n=e,r&&ko(r)){var c=0,l=r.toLowerCase(),f=Oo[l]||(Oo[l]=new RegExp("([\\s\\S]*?)(</"+l+"[^>]*>)","i")),d=e.replace(f,(function(e,n,r){return c=r.length,ko(l)||"noscript"===l||(n=n.replace(/<!\--([\s\S]*?)-->/g,"$1").replace(/<!\[CDATA\[([\s\S]*?)]]>/g,"$1")),Lo(l,n)&&(n=n.slice(1)),t.chars&&t.chars(n),""}));u+=e.length-d.length,e=d,S(l,u-c,u)}else{var p=e.indexOf("<");if(0===p){if(So.test(e)){var h=e.indexOf("--\x3e");if(h>=0){t.shouldKeepComment&&t.comment(e.substring(4,h),u,u+h+3),C(h+3);continue}}if(Ao.test(e)){var v=e.indexOf("]>");if(v>=0){C(v+2);continue}}var g=e.match(To);if(g){C(g[0].length);continue}var m=e.match(Eo);if(m){var y=u;C(m[0].length),S(m[1],y,u);continue}var _=E();if(_){T(_),Lo(_.tagName,e)&&C(1);continue}}var b=void 0,w=void 0,x=void 0;if(p>=0){for(w=e.slice(p);!(Eo.test(w)||xo.test(w)||So.test(w)||Ao.test(w)||(x=w.indexOf("<",1))<0);)p+=x,w=e.slice(p);b=e.substring(0,p)}p<0&&(b=e),b&&C(b.length),t.chars&&b&&t.chars(b,u-b.length,u)}if(e===n){t.chars&&t.chars(e);break}}function C(t){u+=t,e=e.substring(t)}function E(){var t=e.match(xo);if(t){var n,r,i={tagName:t[1],attrs:[],start:u};for(C(t[0].length);!(n=e.match(Co))&&(r=e.match(_o)||e.match(yo));)r.start=u,C(r[0].length),r.end=u,i.attrs.push(r);if(n)return i.unarySlash=n[1],C(n[0].length),i.end=u,i}}function T(e){var n=e.tagName,u=e.unarySlash;o&&("p"===r&&mo(n)&&S(r),s(n)&&r===n&&S(n));for(var c=a(n)||!!u,l=e.attrs.length,f=new Array(l),d=0;d<l;d++){var p=e.attrs[d],h=p[3]||p[4]||p[5]||"",v="a"===n&&"href"===p[1]?t.shouldDecodeNewlinesForHref:t.shouldDecodeNewlines;f[d]={name:p[1],value:Io(h,v)}}c||(i.push({tag:n,lowerCasedTag:n.toLowerCase(),attrs:f,start:e.start,end:e.end}),r=n),t.start&&t.start(n,f,c,e.start,e.end)}function S(e,n,o){var a,s;if(null==n&&(n=u),null==o&&(o=u),e)for(s=e.toLowerCase(),a=i.length-1;a>=0&&i[a].lowerCasedTag!==s;a--);else a=0;if(a>=0){for(var c=i.length-1;c>=a;c--)t.end&&t.end(i[c].tag,n,o);i.length=a,r=a&&i[a-1].tag}else"br"===s?t.start&&t.start(e,[],!0,n,o):"p"===s&&(t.start&&t.start(e,[],!1,n,o),t.end&&t.end(e,n,o))}S()}(e,{warn:Ro,expectHTML:t.expectHTML,isUnaryTag:t.isUnaryTag,canBeLeftOpenTag:t.canBeLeftOpenTag,shouldDecodeNewlines:t.shouldDecodeNewlines,shouldDecodeNewlinesForHref:t.shouldDecodeNewlinesForHref,shouldKeepComment:t.comments,outputSourceRange:t.outputSourceRange,start:function(e,o,a,l,f){var d=r&&r.ns||Uo(e);Y&&"svg"===d&&(o=function(e){for(var t=[],n=0;n<e.length;n++){var r=e[n];fa.test(r.name)||(r.name=r.name.replace(da,""),t.push(r))}return t}(o));var p,h=ia(e,o,r);d&&(h.ns=d),"style"!==(p=h).tag&&("script"!==p.tag||p.attrsMap.type&&"text/javascript"!==p.attrsMap.type)||ie()||(h.forbidden=!0);for(var v=0;v<Fo.length;v++)h=Fo[v](h,t)||h;s||(function(e){null!=Lr(e,"v-pre")&&(e.pre=!0)}(h),h.pre&&(s=!0)),Ho(h.tag)&&(u=!0),s?function(e){var t=e.attrsList,n=t.length;if(n)for(var r=e.attrs=new Array(n),i=0;i<n;i++)r[i]={name:t[i].name,value:JSON.stringify(t[i].value)},null!=t[i].start&&(r[i].start=t[i].start,r[i].end=t[i].end);else e.pre||(e.plain=!0)}(h):h.processed||(aa(h),function(e){var t=Lr(e,"v-if");if(t)e.if=t,sa(e,{exp:t,block:e});else{null!=Lr(e,"v-else")&&(e.else=!0);var n=Lr(e,"v-else-if");n&&(e.elseif=n)}}(h),function(e){null!=Lr(e,"v-once")&&(e.once=!0)}(h)),n||(n=h),a?c(h):(r=h,i.push(h))},end:function(e,t,n){var o=i[i.length-1];i.length-=1,r=i[i.length-1],c(o)},chars:function(e,t,n){if(r&&(!Y||"textarea"!==r.tag||r.attrsMap.placeholder!==e)){var i,c,l,f=r.children;(e=u||e.trim()?"script"===(i=r).tag||"style"===i.tag?e:na(e):f.length?a?"condense"===a&&ea.test(e)?"":" ":o?" ":"":"")&&(u||"condense"!==a||(e=e.replace(ta," ")),!s&&" "!==e&&(c=function(e,t){var n=t?fo(t):co;if(n.test(e)){for(var r,i,o,a=[],s=[],u=n.lastIndex=0;r=n.exec(e);){(i=r.index)>u&&(s.push(o=e.slice(u,i)),a.push(JSON.stringify(o)));var c=Cr(r[1].trim());a.push("_s("+c+")"),s.push({"@binding":c}),u=i+r[0].length}return u<e.length&&(s.push(o=e.slice(u)),a.push(JSON.stringify(o))),{expression:a.join("+"),tokens:s}}}(e,Po))?l={type:2,expression:c.expression,tokens:c.tokens,text:e}:" "===e&&f.length&&" "===f[f.length-1].text||(l={type:3,text:e}),l&&f.push(l))}},comment:function(e,t,n){if(r){var i={type:3,text:e,isComment:!0};r.children.push(i)}}}),n}(e.trim(),t);!1!==t.optimize&&function(e,t){e&&(ha=ya(t.staticKeys||""),va=t.isReservedTag||D,function e(t){if(t.static=function(e){return 2!==e.type&&(3===e.type||!(!e.pre&&(e.hasBindings||e.if||e.for||g(e.tag)||!va(e.tag)||function(e){for(;e.parent;){if("template"!==(e=e.parent).tag)return!1;if(e.for)return!0}return!1}(e)||!Object.keys(e).every(ha))))}(t),1===t.type){if(!va(t.tag)&&"slot"!==t.tag&&null==t.attrsMap["inline-template"])return;for(var n=0,r=t.children.length;n<r;n++){var i=t.children[n];e(i),i.static||(t.static=!1)}if(t.ifConditions)for(var o=1,a=t.ifConditions.length;o<a;o++){var s=t.ifConditions[o].block;e(s),s.static||(t.static=!1)}}}(e),function e(t,n){if(1===t.type){if((t.static||t.once)&&(t.staticInFor=n),t.static&&t.children.length&&(1!==t.children.length||3!==t.children[0].type))return void(t.staticRoot=!0);if(t.staticRoot=!1,t.children)for(var r=0,i=t.children.length;r<i;r++)e(t.children[r],n||!!t.for);if(t.ifConditions)for(var o=1,a=t.ifConditions.length;o<a;o++)e(t.ifConditions[o].block,n)}}(e,!1))}(n,t);var r=Na(n,t);return{ast:n,render:r.render,staticRenderFns:r.staticRenderFns}},function(e){function t(t,n){var r=Object.create(e),i=[],o=[];if(n)for(var a in n.modules&&(r.modules=(e.modules||[]).concat(n.modules)),n.directives&&(r.directives=O(Object.create(e.directives||null),n.directives)),n)"modules"!==a&&"directives"!==a&&(r[a]=n[a]);r.warn=function(e,t,n){(n?o:i).push(e)};var s=Qa(t.trim(),r);return s.errors=i,s.tips=o,s}return{compile:t,compileToFunctions:Va(t)}})(ma),Ya=(Ka.compile,Ka.compileToFunctions);function Ja(e){return(Xa=Xa||document.createElement("div")).innerHTML=e?'<a href="\n"/>':'<div a="\n"/>',Xa.innerHTML.indexOf("&#10;")>0}var Ga=!!V&&Ja(!1),Za=!!V&&Ja(!0),es=w((function(e){var t=Kn(e);return t&&t.innerHTML})),ts=xn.prototype.$mount;xn.prototype.$mount=function(e,t){if((e=e&&Kn(e))===document.body||e===document.documentElement)return this;var n=this.$options;if(!n.render){var r=n.template;if(r)if("string"==typeof r)"#"===r.charAt(0)&&(r=es(r));else{if(!r.nodeType)return this;r=r.innerHTML}else e&&(r=function(e){if(e.outerHTML)return e.outerHTML;var t=document.createElement("div");return t.appendChild(e.cloneNode(!0)),t.innerHTML}(e));if(r){var i=Ya(r,{outputSourceRange:!1,shouldDecodeNewlines:Ga,shouldDecodeNewlinesForHref:Za,delimiters:n.delimiters,comments:n.comments},this),o=i.render,a=i.staticRenderFns;n.render=o,n.staticRenderFns=a}}return ts.call(this,e,t)},xn.compile=Ya,e.exports=xn}).call(this,n(1),n(38).setImmediate)},function(e,t,n){(function(e){var r=void 0!==e&&e||"undefined"!=typeof self&&self||window,i=Function.prototype.apply;function o(e,t){this._id=e,this._clearFn=t}t.setTimeout=function(){return new o(i.call(setTimeout,r,arguments),clearTimeout)},t.setInterval=function(){return new o(i.call(setInterval,r,arguments),clearInterval)},t.clearTimeout=t.clearInterval=function(e){e&&e.close()},o.prototype.unref=o.prototype.ref=function(){},o.prototype.close=function(){this._clearFn.call(r,this._id)},t.enroll=function(e,t){clearTimeout(e._idleTimeoutId),e._idleTimeout=t},t.unenroll=function(e){clearTimeout(e._idleTimeoutId),e._idleTimeout=-1},t._unrefActive=t.active=function(e){clearTimeout(e._idleTimeoutId);var t=e._idleTimeout;t>=0&&(e._idleTimeoutId=setTimeout((function(){e._onTimeout&&e._onTimeout()}),t))},n(39),t.setImmediate="undefined"!=typeof self&&self.setImmediate||void 0!==e&&e.setImmediate||this&&this.setImmediate,t.clearImmediate="undefined"!=typeof self&&self.clearImmediate||void 0!==e&&e.clearImmediate||this&&this.clearImmediate}).call(this,n(1))},function(e,t,n){(function(e,t){!function(e,n){"use strict";if(!e.setImmediate){var r,i,o,a,s,u=1,c={},l=!1,f=e.document,d=Object.getPrototypeOf&&Object.getPrototypeOf(e);d=d&&d.setTimeout?d:e,"[object process]"==={}.toString.call(e.process)?r=function(e){t.nextTick((function(){h(e)}))}:!function(){if(e.postMessage&&!e.importScripts){var t=!0,n=e.onmessage;return e.onmessage=function(){t=!1},e.postMessage("","*"),e.onmessage=n,t}}()?e.MessageChannel?((o=new MessageChannel).port1.onmessage=function(e){h(e.data)},r=function(e){o.port2.postMessage(e)}):f&&"onreadystatechange"in f.createElement("script")?(i=f.documentElement,r=function(e){var t=f.createElement("script");t.onreadystatechange=function(){h(e),t.onreadystatechange=null,i.removeChild(t),t=null},i.appendChild(t)}):r=function(e){setTimeout(h,0,e)}:(a="setImmediate$"+Math.random()+"$",s=function(t){t.source===e&&"string"==typeof t.data&&0===t.data.indexOf(a)&&h(+t.data.slice(a.length))},e.addEventListener?e.addEventListener("message",s,!1):e.attachEvent("onmessage",s),r=function(t){e.postMessage(a+t,"*")}),d.setImmediate=function(e){"function"!=typeof e&&(e=new Function(""+e));for(var t=new Array(arguments.length-1),n=0;n<t.length;n++)t[n]=arguments[n+1];var i={callback:e,args:t};return c[u]=i,r(u),u++},d.clearImmediate=p}function p(e){delete c[e]}function h(e){if(l)setTimeout(h,0,e);else{var t=c[e];if(t){l=!0;try{!function(e){var t=e.callback,n=e.args;switch(n.length){case 0:t();break;case 1:t(n[0]);break;case 2:t(n[0],n[1]);break;case 3:t(n[0],n[1],n[2]);break;default:t.apply(void 0,n)}}(t)}finally{p(e),l=!1}}}}}("undefined"==typeof self?void 0===e?this:e:self)}).call(this,n(1),n(8))},function(e,t,n){"use strict";n.r(t);var r=function(e,t,n,r,i,o,a,s){var u,c="function"==typeof e?e.options:e;if(t&&(c.render=t,c.staticRenderFns=n,c._compiled=!0),r&&(c.functional=!0),o&&(c._scopeId="data-v-"+o),a?(u=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),i&&i.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(a)},c._ssrRegister=u):i&&(u=s?function(){i.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:i),u)if(c.functional){c._injectStyles=u;var l=c.render;c.render=function(e,t){return u.call(t),l(e,t)}}else{var f=c.beforeCreate;c.beforeCreate=f?[].concat(f,u):[u]}return{exports:e,options:c}}({mounted:function(){console.log("Component mounted.")}},(function(){var e=this.$createElement;this._self._c;return this._m(0)}),[function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"container"},[t("div",{staticClass:"row justify-content-center"},[t("div",{staticClass:"col-md-8"},[t("div",{staticClass:"card"},[t("div",{staticClass:"card-header"},[this._v("Example Component")]),this._v(" "),t("div",{staticClass:"card-body"},[this._v("\n                    I'm an example component.\n                ")])])])])])}],!1,null,null,null);t.default=r.exports},function(e,t){}]);
```

## File: public/js/app.js.LICENSE.txt
```
/*!
  * Bootstrap v4.5.0 (https://getbootstrap.com/)
  * Copyright 2011-2020 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */

/*!
 * Sizzle CSS Selector Engine v2.3.5
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://js.foundation/
 *
 * Date: 2020-03-14
 */

/*!
 * Vue.js v2.6.11
 * (c) 2014-2019 Evan You
 * Released under the MIT License.
 */

/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */

/**
 * @license
 * Lodash <https://lodash.com/>
 * Copyright OpenJS Foundation and other contributors <https://openjsf.org/>
 * Released under MIT license <https://lodash.com/license>
 * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
 * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
 */

/**!
 * @fileOverview Kickass library to create and place poppers near their reference elements.
 * @version 1.16.1
 * @license
 * Copyright (c) 2016 Federico Zivolo and contributors
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
```

## File: public/mix-manifest.json
```json
{
    "/js/app.js": "/js/app.js",
    "/css/app.css": "/css/app.css"
}
```

## File: public/robots.txt
```
User-agent: *
Disallow:
```

## File: README.md
```markdown
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**

### Community Sponsors

<a href="https://op.gg"><img src="http://opgg-static.akamaized.net/icon/t.rectangle.png" width="150"></a>

- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
```

## File: resources/js/app.js
```javascript
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
```

## File: resources/js/bootstrap.js
```javascript
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
```

## File: resources/js/components/ExampleComponent.vue
```vue
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
```

## File: resources/lang/en/auth.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];
```

## File: resources/lang/en/pagination.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    'previous' => '&laquo; Previous',
    'next' => 'Next &raquo;',

];
```

## File: resources/lang/en/passwords.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => 'Your password has been reset!',
    'sent' => 'We have emailed your password reset link!',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",

];
```

## File: resources/lang/en/validation.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
```

## File: resources/lang/es.json
```json
{
    "E-Mail Address": "Correo electrónico",
    "Password": "Contraseña",
    "Remember Me": "Recuérdame",
    "Login": "Acceder",
    "Forgot Your Password?": "¿Olvidaste tu contraseña?",
    "Register": "Registro",
    "Name": "Nombre",
    "Confirm Password": "Confirmar contraseña",
    "Reset Password": "Restablecer contraseña",
    "Reset Password Notification": "Aviso para restablecer contraseña",
    "You are receiving this email because we received a password reset request for your account.": "Estás recibiendo este email porque se ha solicitado un cambio de contraseña para tu cuenta.",
    "This password reset link will expire in :count minutes.": "Este enlace para restablecer la contraseña caduca en :count minutos.",
    "If you did not request a password reset, no further action is required.": "Si no has solicitado un cambio de contraseña, puedes ignorar o eliminar este e-mail.",
    "Please confirm your password before continuing.": "Por favor confirme su contraseña antes de continuar.",
    "Regards": "Saludos",
    "Whoops!": "¡Ups!",
    "Hello!": "¡Hola!",
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser: [:actionURL](:actionURL)": "Si tienes problemas haciendo click en el botón \":actionText\", copia y pega el siguiente\nenlace en tu navegador: [:actionURL](:actionURL)",
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser: [:displayableActionUrl](:actionURL)": "Si tienes problemas haciendo click en el botón \":actionText\", copia y pega el siguiente\nenlace en tu navegador: [:displayableActionUrl](:actionURL)",
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser:": "Si tienes problemas haciendo click en el botón \":actionText\", copia y pega el siguiente\nenlace en tu navegador:",
    "Send Password Reset Link": "Enviar enlace para restablecer contraseña",
    "Logout": "Cerrar sesión",
    "Verify Email Address": "Confirmar correo electrónico",
    "Please click the button below to verify your email address.": "Por favor pulsa el siguiente botón para confirmar tu correo electrónico.",
    "If you did not create an account, no further action is required.": "Si no has creado ninguna cuenta, puedes ignorar o eliminar este e-mail.",
    "Verify Your Email Address": "Confirma tu correo electrónico",
    "A fresh verification link has been sent to your email address.": "Se ha enviado un nuevo enlace de verificación a tu correo electrónico.",
    "Before proceeding, please check your email for a verification link.": "Antes de poder continuar, por favor, confirma tu correo electrónico con el enlace que te hemos enviado.",
    "If you did not receive the email": "Si no has recibido el email",
    "click here to request another": "pulsa aquí para que te enviemos otro",
    "All rights reserved.":  "Todos los derechos reservados."
}
```

## File: resources/lang/es/auth.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Estas credenciales no coinciden con nuestros registros.',
    'throttle' => 'Demasiados intentos de acceso. Por favor inténtelo de nuevo en :seconds segundos.',

];
```

## File: resources/lang/es/pagination.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    'previous' => '&laquo; Anterior',
    'next'     => 'Siguiente &raquo;',

];
```

## File: resources/lang/es/passwords.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => '¡Su contraseña ha sido restablecida!',
    'sent' => '¡Recordatorio de contraseña enviado!',
    'token' => 'Este token de restablecimiento de contraseña es inválido.',
    'user' => 'No se ha encontrado un usuario con esa dirección de correo.',
    'throttled' => 'Por favor espere antes de volver a intentarlo.',
    'password' => 'Las contraseñas deben tener al menos seis caracteres y coincidir con la confirmación.'
];
```

## File: resources/lang/es/validation.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_equals'          => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser una dirección de correo válida.',
    'ends_with'            => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'exists'               => 'El campo :attribute seleccionado no existe.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener más de :value caracteres.',
        'array'   => 'El campo :attribute debe contener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o más caracteres.',
        'array'   => 'El campo :attribute debe contener :value o más elementos.',
    ],
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener menos de :value caracteres.',
        'array'   => 'El campo :attribute debe contener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o menos caracteres.',
        'array'   => 'El campo :attribute debe contener :value o menos elementos.',
    ],
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file'    => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'string'  => 'El campo :attribute no debe contener más de :max caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del campo :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with'          => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El valor del campo :attribute ya está en uso.',
    'uploaded'             => 'El campo :attribute no se pudo subir.',
    'url'                  => 'El formato del campo :attribute es inválido.',
    'uuid'                 => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
```

## File: resources/sass/_variables.scss
```scss
// Body
$body-bg: #f8fafc;

// Typography
$font-family-sans-serif: 'Nunito', sans-serif;
$font-size-base: 0.9rem;
$line-height-base: 1.6;

// Colors
$blue: #3490dc;
$indigo: #6574cd;
$purple: #9561e2;
$pink: #f66d9b;
$red: #e3342f;
$orange: #f6993f;
$yellow: #ffed4a;
$green: #38c172;
$teal: #4dc0b5;
$cyan: #6cb2eb;
```

## File: resources/sass/app.scss
```scss
// Fonts
@import url('https://fonts.googleapis.com/css?family=Nunito');

// Variables
@import 'variables';

// Bootstrap
@import '~bootstrap/scss/bootstrap';
```

## File: resources/views/auth/login.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/auth/passwords/confirm.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/auth/passwords/email.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/auth/passwords/reset.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/auth/register.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/auth/verify.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/custom/message.blade.php
```php
@if (session('status_success'))
        
        <div class="alert alert-success alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status_success') }}
        </div>
    @endif

    @if ($errors->any())
        
        <div class="alert alert-danger alert-dismissible" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
```

## File: resources/views/home.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/role/show.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('role.destroy', $role->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger float-right">Delete</button>
                    </form>
                    <a style="margin-right:15px;" href="{{ route('role.edit', $role->id) }}" class="btn btn-outline-info btn float-right">Edit</a>
                    <h2>Show Role {{ $role->id }}</h2>
                    
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" placeholder="name" 
                                    name="name" value="{{ old('name', $role->name) }}"
                                    readonly
                                >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="slug" placeholder="slug" 
                                    name="slug" value="{{ old('slug', $role->slug) }}"
                                    readonly    
                                >
                            </div>
                            
                            <div class="form-group" >
                                <textarea readonly class="form-control" id="description" name="description" rows="3" placeholder="Descripcion" >{{old('description', $role->description)}}</textarea>
                            </div>
                            
                            <h4>Full Access</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input disabled type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                    @if($role['full-access'] == "yes")
                                        checked
                                    @elseif(old('full-access') == "yes")
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Yes</label>
                            </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input disabled type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                                    @if($role['full-access'] == 'no')
                                        checked
                                    @elseif(old('full-access') == "no")
                                        checked
                                    @endif
                                    readonly
                                    
                                >
                                <label class="custom-control-label" for="fullaccessno"  >No</label>
                            </div>
                            
                            <hr>
                            
                            <h4>Permissions List</h4>
                            
                            @foreach ( $permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                <input 
                                    disabled
                                    type="checkbox" 
                                    class="custom-control-input" 
                                    name="permission[]" 
                                    id="permission_{{ $permission->id }}" 
                                    value="{{ $permission->id }}"
                                    @if(is_array(old('permission')) && in_array("$permission->id", old('permission'))  )
                                        checked
                                    @elseif(is_array($permission_role) && in_array("$permission->id", $permission_role)  )
                                    checked
                                    @endif
                                    
                                >
                                <label class="custom-control-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->id . " " }}<strong>{{ $permission->name }}</strong> {{  "-" }}<em>{{ $permission->description }}</em>
                                </label>
                                </div>
                            @endforeach
                            
                            <hr>

                            <a style="margin-right:15px;" href="{{ route('role.index') }}" class="btn btn-secondary btn-sm float-left">Back</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/user/edit.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" placeholder="name" 
                                    name="name" value="{{ old('name', $user->name) }}"
                                >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="email" placeholder="email" 
                                    name="email" value="{{ old('email', $user->email) }}">
                            </div>
                            
                            <hr>
                            
                            <h5>Role</h5>
                            <div class="form-group">
                                <select class="form-control" name="roles" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @isset($user->roles[0]->name)
                                                @if($role->name == $user->roles[0]->name)
                                                selected
                                                @endif
                                            @endisset
                                        >{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-success float-right" value="Save">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/user/show.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger float-right">Delete</button>
                    </form>
                    <a style="margin-right:15px;" href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-info btn float-right">Edit</a>
                    <h2>Show User {{ $user->id }}</h2>
                    
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" placeholder="name" 
                                    name="name" value="{{ old('name', $user->name) }}"
                                disabled >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="email" placeholder="email" 
                                    name="email" value="{{ old('email', $user->email) }}"
                                disabled >
                            </div>
                            
                            <hr>
                            
                            <h5>Role</h5>
                            <div class="form-group">
                                <select disabled class="form-control" name="roles" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @isset($user->roles[0]->name)
                                                @if($role->name == $user->roles[0]->name)
                                                selected
                                                @endif
                                            @endisset
                                        >
                                            @isset($user->roles[0]->name)
                                                {{ $role->name }}
                                            @endisset
                                            @empty($user->roles[0]->name)
                                                <p>N/A</p>
                                            @endempty
                                            
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/welcome.blade.php
```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
```

## File: routes/api.php
```php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
```

## File: routes/channels.php
```php
<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
```

## File: routes/console.php
```php
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
```

## File: server.php
```php
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
```

## File: storage/app/.gitignore
```
*
!public/
!.gitignore
```

## File: storage/app/public/.gitignore
```
*
!.gitignore
```

## File: storage/framework/.gitignore
```
config.php
routes.php
schedule-*
compiled.php
services.json
events.scanned.php
routes.scanned.php
down
```

## File: storage/framework/cache/.gitignore
```
*
!data/
!.gitignore
```

## File: storage/framework/cache/data/.gitignore
```
*
!.gitignore
```

## File: storage/framework/sessions/.gitignore
```
*
!.gitignore
```

## File: storage/framework/testing/.gitignore
```
*
!.gitignore
```

## File: storage/framework/views/.gitignore
```
*
!.gitignore
```

## File: storage/logs/.gitignore
```
*
!.gitignore
```

## File: tests/CreatesApplication.php
```php
<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
```

## File: tests/Feature/ExampleTest.php
```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

## File: tests/TestCase.php
```php
<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
```

## File: tests/Unit/ExampleTest.php
```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
```

## File: webpack.mix.js
```javascript
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
```

## File: app/ArgusPermission/Models/Permission.php
```php
<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{


    //fillable propertie
    protected $fillable = [
        'name', 'slug', 'description',
    ];




    public function roles(){
        return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimesTamps();
    }
}
```

## File: app/Http/Controllers/UserController.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\User;

class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        //Gate::authorize('haveaccess','user.index');
        $this->authorize('haveaccess','user.index');
        $users = User::with('roles')->orderBy('id', 'Desc')->paginate(2);
        return view('user.index', compact('users'));
        
    }


    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show']]);
        $roles = Role::orderBy('id')->get();
        return view('user.show', compact('user','roles'));
    }


    public function edit(user $user)
    {
        //$this->authorize('haveaccess','role.edit');
        $this->authorize('update', [$user, ['user.edit','userown.edit']]);
        
        $roles = Role::orderBy('id')->get();
        return view('user.edit', compact('roles','user'));
    }


    public function update(Request $request, User $user)
    {
        //$this->authorize('haveaccess','role.edit');
        

        //validation
        $request->validate([
            'name' => 'required|max:50|unique:users,name,'.$user->id,
            'email' => 'required|max:50|unique:users,email,'.$user->id
            
        ]);
    
        //update user
        $user->update($request->all());
    
        //sync user with his roles
        $user->roles()->sync($request->get('roles'));
        

        return redirect()->route('user.index')->with('status_success', 'User updated successfully');
    }


    public function destroy(User $user)
    {
        //$this->authorize('haveaccess','user.destroy');
        $this->authorize('haveaccess','user.destroy');
        
        $user->delete();
        return redirect()->route('user.index')->with('status_success', 'User successfully removed');
    }


}
```

## File: app/Providers/EventServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        Registered::class => [
            'App\Listeners\RegisteredEvent',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
```

## File: composer.json
```json
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The Laravel Framework.",
    "keywords": [
        "framework",
        "laravel"
    ],
    "license": "MIT",
    "require": {
        "php": "^7.2.5",
        "fideloper/proxy": "^4.2",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^6.3",
        "laravel/framework": "^7.0",
        "laravel/tinker": "^2.0",
        "laravel/ui": "^2.1",
        "laraveles/spanish": "^1.5"
    },
    "require-dev": {
        "facade/ignition": "^2.0",
        "fzaninotto/faker": "^1.9.1",
        "mockery/mockery": "^1.3.1",
        "nunomaduro/collision": "^4.1",
        "phpunit/phpunit": "^8.5"
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "minimum-stability": "dev",
    "prefer-stable": true,
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi"
        ]
    }
}
```

## File: config/app.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
```

## File: database/migrations/2020_07_14_111250_create_roles_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->enum('full-access', ['yes', 'no'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
```

## File: database/seeds/DatabaseSeeder.php
```php
<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $this->call(ArgusPermissionsInfoSeeder::class);
    }
}
```

## File: resources/views/role/edit.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Role</h2>
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" placeholder="name" 
                                    name="name" value="{{ old('name', $role->name) }}"
                                >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    id="slug" placeholder="slug" 
                                    name="slug" value="{{ old('slug', $role->slug) }}">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripcion" >{{old('description', $role->description)}}</textarea>
                            </div>
                            
                            <h4>Full Access</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                    @if($role['full-access'] == "yes")
                                        checked
                                    @elseif(old('full-access') == "yes")
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Yes</label>
                            </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                                    @if($role['full-access'] == 'no')
                                        checked
                                    @elseif(old('full-access') == "no")
                                        checked
                                    @endif
                                    
                                >
                                <label class="custom-control-label" for="fullaccessno"  >No</label>
                            </div>
                            
                            <hr>
                            
                            <h4>Permissions List</h4>
                            
                            @foreach ( $permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                <input 
                                    type="checkbox" 
                                    class="custom-control-input" 
                                    name="permission[]" 
                                    id="permission_{{ $permission->id }}" 
                                    value="{{ $permission->id }}"
                                    @if(is_array(old('permission')) && in_array("$permission->id", old('permission'))  )
                                        checked
                                    @elseif(is_array($permission_role) && in_array("$permission->id", $permission_role)  )
                                    checked
                                    @endif
                                >
                                <label class="custom-control-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->id . " " }}<strong>{{ $permission->name }}</strong> {{  "-" }}<em>{{ $permission->description }}</em>
                                </label>
                                </div>
                            @endforeach
                            
                            <hr>
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-success float-right" value="Save">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/user/index.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List of Users</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role/s</th>
                                <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($users as $user)
                                
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @isset($user->roles[0]->name)
                                                {{ $user->roles[0]->name}}
                                            @endisset
                                            @empty($user->roles[0]->name)
                                                <p>N/A</p>
                                            @endempty
                                        </td>
                                        <td>
                                            @can('view', [$user, ['user.show','userown.show']])
                                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-light btn-sm">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('update', [$user, ['user.edit','userown.edit']])
                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess', 'user.destroy')
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                        <td></td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    <hr>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: app/ArgusPermission/Models/Role.php
```php
<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    //fillable propertie

    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    /*Cuando seleccionemos rol y llamemos a esta funcion automaticamente nos devolvera a todos los usuarios relacionados con este rol*/

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\ArgusPermission\Models\Permission')->withTimesTamps();
    }
}
```

## File: app/Providers/AuthServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class, //DECLARO LA PILITICA VINCULANDOLA CON LA CLASE USER
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //new gate using the function havePermission getting $permission for the route in web.php
        Gate::define('haveaccess',function(User $user, $permission){
            return $user->havePermission($permission);
        });
    }
}
```

## File: app/User.php
```php
<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\ArgusPermission\Traits\UserTrait;


class User extends Authenticatable
{
    use Notifiable, UserTrait;
    

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

## File: resources/views/layouts/app.blade.php
```php
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('haveaccess', 'role.index')
                            <li class="nav-item"><a href="{{ route('role.index') }}" class="nav-link">Role</a></li>
                        @endcan

                        @can('haveaccess', 'user.index')
                            <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link">User</a></li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
```

## File: database/seeds/ArgusPermissionsInfoSeeder.php
```php
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;

class ArgusPermissionsInfoSeeder extends Seeder
{


    public function run()
    {

        //Truncate tables/Limpiamos las tablas
        DB::statement("SET foreign_key_checks=0");//pausar las foreign key
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        Permission::truncate();
        Role::truncate();
        DB::statement("SET foreign_key_checks=1");//reactivamos las foreign key


        //User admin
        $useradmin = User::where('email', 'Argus@admin.com')->first();
        if($useradmin){
            $useradmin->delete();
        }
        $useradmin = User::create([
            'name' => 'ArgusAdmin',
            'email' => 'Argus@admin.com',
            'password' => Hash::make('lovecode00')
        ]);



        //Rol admin
        $roladmin=Role::create([
            'name' => 'Admin', 
            'slug' => 'admin', 
            'description' => 'Administrador', 
            'full-access' => 'yes'
        ]);

        //Rol Registered Users
        $roluser=Role::create([
            'name' => 'Registered Users', 
            'slug' => 'registereduser', 
            'description' => 'Registered Users', 
            'full-access' => 'no'
        ]);

        //Creamos la relacion entre la tabla users y roles para nuestro usuario admin
        $useradmin->roles()->sync([$roladmin->id]);

        //Permissions
        $permission_all =[];


        //Permission role
        $permission = Permission::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'A user can list roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'A user can see role',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'A user can create roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'A user can Edit roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'A user can destroy roles',
        ]);
        $permission_all[] =$permission->id;


        //Permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list users',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'A user can see user',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'A user can Edit users',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'A user can destroy users',
        ]);
        $permission_all[] =$permission->id;

        //New
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'A user can see own user',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'A user can Edit own user',
        ]);
        $permission_all[] =$permission->id;



        // $permission = Permission::create([
        //     'name' => 'Create user',
        //     'slug' => 'user.create',
        //     'description' => 'A user can create users',
        // ]);
        // $permission_all[] =$permission->id;

        //Creamos la relacion entre la tabla permissions y roles para nuestro rol admin
        //$roladmin->permissions()->sync( $permission_all );

    }
}
```

## File: resources/views/role/create.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Create New Role</h2>
                </div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="container">
                            
                            <h3>Required data</h3>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ old('name') }}">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="slug" placeholder="slug" name="slug" value="{{ old('slug') }}">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripcion" >
                                    {{ old('description') }}
                                </textarea>
                            </div>
                            
                            <h4>Full Access</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                    @if(old('full-access') == "yes")
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Yes</label>
                            </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                                    @if(old('full-access') == 'no')
                                        checked
                                    @endif
                                    @if(!old('full-access'))
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="fullaccessno"  >No</label>
                            </div>
                            
                            <hr>
                            
                            <h4>Permissions</h4>
                            
                            @foreach ( $permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                <input 
                                    type="checkbox" 
                                    class="custom-control-input" 
                                    name="permission[]" 
                                    id="permission_{{ $permission->id }}" 
                                    value="{{ $permission->id }}"
                                    @if(is_array(old('permission')) && in_array("$permission->id", old('permission'))  )
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->id . " " }}<strong>{{ $permission->name }}</strong> {{  "-" }}<em>{{ $permission->description }}</em>
                                </label>
                                </div>
                            @endforeach
                            
                            <hr>
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-success float-right" value="Save">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: resources/views/role/index.blade.php
```php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>List of Roles</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Description</th>
                                <th scope="col">Full-Access</th>
                                @can('haveaccess', 'role.create')
                                    <th colspan="3"><a href="{{ route('role.create')}}" class="btn btn-warning  btn-sm float-right">New</a></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($roles as $role)
                                    <tr>
                                        <th>{{ $role->id }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->slug }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>{{ $role['full-access'] }}</td>
                                        <td>
                                            @can('haveaccess', 'role.show')
                                                <a href="{{ route('role.show', $role->id) }}" class="btn btn-light btn-sm">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess', 'role.edit')
                                                <a href="{{ route('role.edit', $role->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess', 'role.destroy')
                                                <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    <hr>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

## File: routes/web.php
```php
<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $user = User::find(2);
    //$user->roles()->sync([2]);
    //return $user->havePermission('role.index');
    Gate::authorize('haveaccess','role.index');
    return $user;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/user', 'UserController', [
    'except' =>[
        'crete',
        'store'
    ]
])->names('user');
```

## File: app/Http/Controllers/RoleController.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{


    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        Gate::authorize('haveaccess','role.index');
        $roles = Role::orderBy('id', 'Desc')->paginate(2);
        return view('role.index', compact('roles'));
    }


    public function create()
    {
        Gate::authorize('haveaccess','role.create');
        $permissions = Permission::get();
        return view('role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        Gate::authorize('haveaccess','role.create');
        //validacion
        $request->validate([
            'name' => 'required|max:50|unique:roles,name',
            'slug' => 'required|max:50|unique:roles,slug',
            'full-access' => 'required|in:yes,no'
            
        ]);
    
        //Create role
        $role =Role::create($request->all());
    
        //if($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        //}

        return redirect()->route('role.index')->with('status_success', 'Role saved successfully');
    
        
    }


    public function show(Role $role)
    {
        $this->authorize('haveaccess','role.show');
        $permission_role=[];
        foreach($role->permissions as $permission){
            $permission_role[]=$permission->id;
        }
        
        
        $permissions = Permission::get();
        return view('role.show', compact('permissions','role','permission_role'));
    }


    public function edit(Role $role)
    {
        $this->authorize('haveaccess','role.edit');
        $permission_role=[];
        foreach($role->permissions as $permission){
            $permission_role[]=$permission->id;
        }
        
        
        $permissions = Permission::get();
        return view('role.edit', compact('permissions','role','permission_role'));

    }


    public function update(Request $request, Role $role)
    {
        $this->authorize('haveaccess','role.edit');
        //validacion
        $request->validate([
            'name' => 'required|max:50|unique:roles,name,'.$role->id,
            'slug' => 'required|max:50|unique:roles,slug,'.$role->id,
            'full-access' => 'required|in:yes,no'
            
        ]);
    
        //update role
        $role->update($request->all());
    
        //if($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        //}

        return redirect()->route('role.index')->with('status_success', 'Role updated successfully');
    
        
    }


    public function destroy(Role $role)
    {
        $this->authorize('haveaccess','role.destroy');
        $role->delete();
        return redirect()->route('role.index')->with('status_success', 'Role successfully removed');
    }
    
}
```
