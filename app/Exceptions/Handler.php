<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Auth;
use Illuminate\Auth\AuthenticationException;
use Throwable;
use Exception;
use Request;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @param
     * @return void
     */
    // public function report(Exception $exception)
    // {
    //     parent::report($exception);
    // }
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if ($request->expectsJson()) 
    //     {
    //         return response()->json(['error' => 'Unauthenticated.'], 401);
    //     }
    //     if ($request->is('admin') || $request->is('admin/*')) 
    //     {
    //         return redirect()->guest(route('admin.login'));
    //     }
    //     return redirect()->guest (route('login'));
    // }
    
    /**
     * Register the exception handling callbacks for the application.
     *
     * @param
     * @param
     * @return
     */
    // public function render($request, Exception $exception)
    // {
    //     return parent:: render($request, $exception);
    // }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
