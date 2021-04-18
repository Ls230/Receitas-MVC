<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request;
use App\Models\Receita;

class novaReceitaController extends Controller {

    function index(){
        $this->view('novaReceita');
    }

    function create(Request $request){
        $receita = new Receita();
 
        $data = [
            "nome_receita" => $request->post('nome'),
            
            "ingredientes" => $request->post('ingredientes'),

            "preparo" => $request->post('preparo'),

            "categoria" => $request->post('categoria'),
        ];
     
        $receita->add($data);
 
     }
}
?>