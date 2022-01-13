<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mydocs_model extends Model
{
    protected $primaryKey = 'id_mydoc';
    protected $table = "mydocument";
    public $timestamps = false;
    protected $fillable = [
        'id_mydoc',
        'id_doc', 
        'id_user',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(users_model::class,'id_user');
    }

    public function doc()
    {
        return $this->belongsTo(docs_model::class,'id_doc');
    }
}
