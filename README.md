# middleware

[сам middleware](my-app/app/Http/Middleware/CheckAuth.php)

регистрация в инициализаторе приложения:

```php
// my-app/bootstrap/app.php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'check-auth' => \App\Http\Middleware\CheckAuth::class,
    ]);
})
```

использование:

```php
// src/my-app/routes/web.php
Route::get('/is_auth', [App\Http\Controllers\HomeController::class, 'isAuth'])
    ->name('isAuth')
    ->middleware('check-auth');
```


