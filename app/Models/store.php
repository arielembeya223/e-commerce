<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use  App\Models\picture;
use Illuminate\Support\Facades\Storage;

class store extends Model implements Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $fillable = ['nom', 'description', 'picture_id', 'numero', 'email', 'password', 'remember_token'];
    public function products()
    {
        return $this->hasMany(product::class,'store_id');
    }
    //qui recupere la photo de profil de la boutique
    public function picture()
    {
        return $this->belongsTo(picture::class);
    }
    //affiche la photo de profil de la boutique
    public function profil(string $image):string
    {
      return Storage::disk('public')->url($image);
    }
    public function getAuthIdentifierName()
    {
        return 'id'; // ou le nom de la colonne d'identifiant de votre modèle
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
