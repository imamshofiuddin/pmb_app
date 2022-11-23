<?php

namespace App\Http\Middleware;

use App\Models\DataSiswa;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = DataSiswa::where('id_user','=', Auth::user()->id)->get();

        $dataCount = $data->count();

        if($dataCount > 0){
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
