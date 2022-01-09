<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docs_model extends Model
{
    protected $primaryKey = 'id_doc';
    protected $table = "document";
    public $timestamps = false;
    protected $fillable = [
        'id_doc',
        'title_doc', 
        'desc_doc'
    ];
}
