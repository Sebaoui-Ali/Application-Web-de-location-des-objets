<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\Auth;

// class IsUser
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle($request, Closure $next)
//     {
//         if (auth()->check() && auth()->user()->etat_compte == 1) {
//             return $next($request);
//         // return redirect('home')->with('error','You dont have admin access.');



//    }
//    $message = 'Your account has been suspended. Please contact administrator.';
//    auth()->logout();
//    return redirect()->route('login')->withMessage($message);



//     }
// }
