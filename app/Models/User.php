<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='user';
    protected $id='id';
    protected $fillable=[
        'nama','alamat','tahun masuk','divisi_id'
    ];
}
