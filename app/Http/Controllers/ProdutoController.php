<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller {

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
    return view('produtos/formulario');
  }

  function salvar(Request $request){
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
