<?php
//Model é a class que proteje o nosso banco de dados.
class Albuns extends Model {
    
    public function getList() {
        
        $array = array();
        
         
            $sql = "SELECT * FROM albuns";
            $sql = $this->db->query($sql);
        
            if($sql->rowCount() > 0) { 
                $array = $sql->fetchAll();
            }
            return $array;
          
        
       
    }
    
    public function getAlbum($slug) {
        $array = array();
        
        
             $sql = "SELECT * FROM albuns WHERE slug = :slug";
             $sql = $this->db->prepare($sql);
             $sql->bindValue(":slug", $slug);
             $sql->execute();
        
            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
                
            }
            return $array;
        
    }
  
}

