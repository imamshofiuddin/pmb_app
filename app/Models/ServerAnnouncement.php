<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerAnnouncement extends Model
{
    use HasFactory;
    protected $table = 'announcement-server';
    protected $fillable = [
        'status'
    ];
}
