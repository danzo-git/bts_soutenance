<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encadreur extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable=['nom','prenom','type_encadreur','domaine','service','contacts','theme','service'];
    // protected $fillable=['nom','prenom','date_naissance','filiere','etablissement','status','id_session','id_encadreur'];
    public function stagiaire(){
        
        return $this->hasMany(Stagiaire::class, 'stagiaire',);
    }
}
