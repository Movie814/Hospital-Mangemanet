<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collectedMediaModel extends Model
{
    use HasFactory;
    protected $table='collected_media_models';
    protected $fillable=[
        'title','link','img'
    ];
}
