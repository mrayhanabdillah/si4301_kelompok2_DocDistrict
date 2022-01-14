<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel_model extends Model
{
    protected $primaryKey = 'id_artikel';
    protected $table = "artikel";
    public $timestamps = false;
    protected $fillable = [
        'id_admin',
        'judul_artikel', 
        'author_artikel',
        'desc_artikel'
    ];

    public function admin()
    {
        return $this->belongsTo(admin_model::class,'id_admin');
    }
}
