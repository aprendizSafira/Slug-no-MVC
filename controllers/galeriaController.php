<?php
class galeriaController extends Controller {
    public function index() {
        $albuns = new Albuns();
      
      $dados = array(
          'albuns' => $albuns->getList()
      );
      
      $this->loadTemplete('galeria', $dados);
    }
    
    public function abrir($slug) {
      $albuns = new Albuns();
      
      $dados = array(
          'info' => $albuns->getAlbum($slug)     
      );
      
      $this->loadTemplete('album', $dados);
    }

}