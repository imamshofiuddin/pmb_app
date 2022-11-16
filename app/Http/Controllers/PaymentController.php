<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function sendPay(Request $request){
        $request->validate([
            'fotoStruk' => 'required',
        ]);

        $payment = new Pembayaran();
        $request->file('fotoStruk')->move('upload/struk/',$request->file('fotoStruk')->getClientOriginalName());
        $payment->user_id = Auth::user()->id;
        $payment->foto = $request->file('fotoStruk')->getClientOriginalName();
        $payment->status = 'waiting';
        $payment->save();

        return redirect()->back();
    }

    public function payment(){  
        $data = Pembayaran::getPayment()->get();
        return view('admin.payment')->with('data',$data);
    }

    public function confirmPayment(Request $request){
        $payment = Pembayaran::where('user_id','=',$request->input('user_id'))->first();
        if(isset($_POST['acc'])){
            $payment->status = 'acc';
            $payment->update();
        } elseif(isset($_POST['deny'])) {
            $payment->status = 'deny';
            $payment->update();
        } elseif(isset($_POST['cancel'])){
            $payment->status = 'waiting';
            $payment->update(); 
        } else {
            $payment->delete(); 
        }

        return redirect()->back();
    }
}
