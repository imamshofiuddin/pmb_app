<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'user_id',
        'foto',
        'status',
    ];

    static function getPayment() {
        $result=DB::table('users')->join('pembayaran','users.id','=','pembayaran.user_id');

        return $result;
    }
}
