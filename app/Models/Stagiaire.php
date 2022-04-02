<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    // protected $fillable=['nom','prenom','domaine','service','contacts','theme','service'];
    protected $fillable=['matricule','id_session','libelle','nom','prenom','date_naissance','filiere','etablissement','status','id_encadreur'];
                public function encadreur(){
                
                    return $this->hasone(Encadreur::class, 'id','id_encadreur');
                
                }
                public function session(){
                    
                    return $this->hasone(Session::class, 'id','id_session');
                    
                }
}
