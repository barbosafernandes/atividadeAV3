<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
        
    protected  $fillable = array('name');


    public function Produtos(){
            return $this->hasMany('App\Produtos');
        }

}
