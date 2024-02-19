<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'description',
        'prix',
        'store_id',
        'picture_id',
        'eval'
    ];
    public function store(){

        return $this->belongsTo(store::class);
    
    }
    public function picture()
    {
        return $this->belongsTo(picture::class);
    }
    
    public function profil(string $image):string
    {
      return Storage::disk('public')->url($image);
    }
}
