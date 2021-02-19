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
        'nama','alamat','tahun_masuk','divisi_id'
    ];
    public function divisi()
    {
        return $this->belongsTo(divisi::class, 'divisi_id');
    }
}
