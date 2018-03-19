<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

  public function __construct() {
		$this->middleware('autorizador');
	}

  function lista(){
    $produtos = Produto::all();
    return view('produtos/listagem')->with('produtos', $produtos);
  }

  function visualizar($id){
    $produto = Produto::find($id);
    if(empty($produto)) {
        return "Esse produto não existe";
    }
    return view('produtos/visualizar')->with('produto', $produto);
  }

  public function formulario(){
    $categorias = Categoria::all();
    return view('produtos/formulario')->with('categorias', $categorias);
  }

  function salvar(ProdutoRequest $request){
    $params = $request->all();
    $produto = new Produto($params);
    $produto->save();
    return redirect('/produtos')->withInput();
  }

  function deletar($id){
    $produto = Produto::find($id);
    $produto->delete();
    return redirect()->action('ProdutoController@lista')->with('produto', $produto);
  }

  function getProdutos(){
    $produtos = Produto::all();
    return response()->json($produtos);
  }

}


?>
