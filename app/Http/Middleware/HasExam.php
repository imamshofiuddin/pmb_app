<?php

namespace App\Http\Middleware;

use App\Models\DataSiswa;
use App\Models\Exam;
use Closure;
use Illuminate\Http\Request;

class HasExam
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
        if($request->session()->get('no_peserta') === null){
            return redirect()->route('exam');
        }

        return $next($request); 

    }
}
