<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    protected $primaryKey = 'id_admin';
    protected $table = "admin";
    public $timestamps = false;
    protected $fillable = [
        'id_admin',
        'nama_admin', 
        'email',
        'password'
    ];

    public function artikel()
    {
        return $this->hasMany(artikel_model::class);
    }
}
