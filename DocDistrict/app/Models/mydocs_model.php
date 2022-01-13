<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mydocs_model extends Model
{
    protected $primaryKey = 'id_mydoc';
    protected $table = "mydocument";
    protected $fillable = [
        'id_mydoc',
        'id_doc', 
        'id_user',
        'status'
    ];
}
