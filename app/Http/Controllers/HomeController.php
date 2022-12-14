<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role == 'admin'){
            return view('admin.home');
        } else {
            $paid = Pembayaran::where('user_id', Auth::user()->id)->first();
            if($paid != null && $paid->status == 'acc'){
                return view('student.home')->with('dashboard', true);
            }
            return view('student.home')->with('paid',$paid);
        }
    }
}
