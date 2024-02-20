<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;
    protected $fillable=['store_id','content'];
    public function store()
    {
        return $this->belongsTo(store::class);
    }
}
