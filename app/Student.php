<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';
  protected $fillable = ['identity_card', 'name', 'phone', 'email','birthdate'];

  Public function genders (){
    return $this->belongsTo('App\Gender', 'id_gender');
  }

  Public function tp_docs (){
    return $this->belongsTo('App\Tp_doc', 'id_tp_doc');
  }

}
