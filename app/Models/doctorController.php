<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorController extends Model
{
    use HasFactory;
    protected $table='doctor_controllers';
    protected $fillable=[
        'name','bio','img'
    ];
}
