<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KTA_new extends Model
{
    protected $table = 'kta_new';
    public $timestamps = false;

    public function kta(){
      return $this->belongsTo('App\KTA','ktaid','id');
    }
}