<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'email', 
        'password',
        'ttl',
        'noHP',
        'alamat',
        'nik'
    ];

    public function mydoc()
    {
        return $this->hasMany(mydocs_model::class);
    }
}
