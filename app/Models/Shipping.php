<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;//change
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Shipping extends Model
{
    use HasFactory;

    protected $guarded = [];

    use Notifiable;//change
}
