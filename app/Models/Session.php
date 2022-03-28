<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable=['debut','fin','libelle'];
    public function stage(){
        return $this->hasMany(Stagiaire::class,'stagiaire');
    }
}
