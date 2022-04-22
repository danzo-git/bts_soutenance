<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    // protected $fillable=['nom','prenom','domaine','service','contacts','theme','service'];
    protected $fillable=['matricule','id_session','type_stagiaire','libelle','nom','prenom','date_naissance','filiere','etablissement','status','id_encadreur'];
                public function encadreur(){
                
                    return $this->belongsTo(Encadreur::class, 'id_encadreur','id');
                
                }
                public function session(){
                    
                    return $this->belongsTo(Session::class, 'id_session','id');
                    
                }
}
