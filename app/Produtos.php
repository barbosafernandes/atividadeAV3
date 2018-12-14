<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class Produtos extends Model {

	public $timestamps = false;
        protected $fillable = array('nome', 'valor', 'quantidade', 'descricao', 'tamanho', 'categoria_id');
        
        public function Categoria(){
            return $this->belongsTo('App\Categoria');
        }
}


