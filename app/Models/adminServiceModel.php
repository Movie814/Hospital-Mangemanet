<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminServiceModel extends Model
{
    use HasFactory;
    protected $table='admin_service_models';
    protected $fillable=[
        'img','subtitle','title','discrip'
    ];
}
