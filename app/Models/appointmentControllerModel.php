<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointmentControllerModel extends Model
{
    use HasFactory;
    protected $table='appointment_controller_models';
    protected $fillable=[
        'name','phone','email','date','category','drname','msg'
    ];
}
