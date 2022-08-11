<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Data_perusahaan extends Model
{
    use HasFactory;


     protected $table = 'data_perusahaans';
     
     protected $primaryKey = 'id';

      protected $guarded = [];
}
