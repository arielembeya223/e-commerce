<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable=['product_id','demandeur','numero_demandeur'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
