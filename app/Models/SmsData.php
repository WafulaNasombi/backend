<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsData extends Model
{
    use HasFactory;

    protected $table ='sms_data';
    protected $fillable = ['phone_number', 'message'];
}
