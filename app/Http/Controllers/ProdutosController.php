<?php
namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Request;
use App\Produtos;
use App\Categoria;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller{
    
    public function __construct() {
        $this->middleware('minha-middleware', ['except' => ['lista']]);
    }
    
    public function lista(){
        $produtos = Produtos::all();
        
        return view('produtos.Lista')->with('produtos', $produtos);
    }

    public function mostrar(){
        $id =  Request::route('id');
        $produto = Produtos::find($id);

        return view('produtos.Mostrar')->with('p', $produto);
    }
    
    public function delete($id){
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect()->action('ProdutosController@lista');
    }
    
    
    public function adiciona(ProdutoRequest $request){
//        $params = Request::all();
//        $Protudos = new Produtos($params);
        
        
        Produtos::create($request->all());
        
//        $Protudos->save();
        
        return redirect()->action('ProdutosController@lista')->withInput(Request::only('nome'));
    }
    
    public function novo(){
        $Categorias = Categoria::All();
        return view('produtos.novo')->with('Categorias', $Categorias);
    }
    
    public function alterar($id){
        $produto = Produtos::find($id);
        
        return view('produtos.alterar')->with('p', $produto);
    }
    
    public function update($id){
        Produtos::updated(Request::all(), $id);
        return redirect()->action('ProdutosController@lista');
    }
}