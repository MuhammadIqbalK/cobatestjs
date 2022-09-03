<?php

namespace App\Models;
use DateTimeInterface;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

protected $table = 'peminjaman';
protected $primaryKey = 'kode_peminjaman';
protected $guarded = [];

protected function serializeDate(DateTimeInterface $date)
{
    return $date->format('Y-m-d H:i');
}

public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

public function Data_barang()
    {
        return $this->belongsTo('App\Models\Data_barang');
    }

}
