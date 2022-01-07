<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "admin";
    public $timestamps = false;
    protected $fillable = [
        'id_admin',
        'nama_admin', 
        'email',
        'password'
    ];
}
