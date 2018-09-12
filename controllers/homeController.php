<?php
class homeController extends Controller {
    
    public function index () {
        
        $dados = array(
            'nome' => 'Patricia',
            'idade' => '20 anos',
            'quantidade' => '5'
        );
        
        $this->loadTemplete('home', $dados);
    }
    
}
