<?php

namespace App\Models;
use DateTimeInterface;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_barang extends Model
{
    use HasFactory;

protected $table = 'data_barang';
protected $primaryKey = 'id_barang';
protected $guarded = [];

protected function serializeDate(DateTimeInterface $date)
{
    return $date->format('Y-m-d H:i');
}

public function Peminjaman()
    {
        return $this->hasOne('App\Models\Peminjaman');
    }

}

