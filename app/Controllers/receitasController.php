<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request;
use App\Models\Receita;

class receitasController extends Controller {
    
    public function index() {
        $receita = new Receita();

        $list = $receita->getAll();

        $this->view('receitas', ['list' => $list]);
    }

    function detalhes(Request $request){
        $receita = new Receita();
 
        $data = [
            "cod_receita" => $request->post('escolhido'),
        ];
     
        $receita = $receita->get($data);

        $this->view('detalhes', ['receita' => $receita]);
 
     }

    function create(Request $request){
       $prod = new Produto();

       $data = [
           "nome_prod" => $request->post('nome'),
           
           "valor_prod" => $request->post('valor'),
       ];
    
       $prod->add($data);

    }
}
