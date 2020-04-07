<?php
    class Link extends model{

        /* Retorna lista de todos os links */
        public function getAll() {
            $array = array();
            
            $sql = "SELECT * FROM tab_links ORDER BY id DESC";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            
            return $array;
        }
         
        /* Pega o Link usando o hash */
        public function getLinkHash($url_curta_hash)
        {
            $sql = "SELECT * FROM tab_links WHERE url_curta_hash=:url_curta_hash";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":url_curta_hash", $url_curta_hash);
            $sql->execute();

            if($sql->rowCount() > 0){
                return  $sql->fetch(PDO::FETCH_ASSOC);
            }

        }

         /* Pega o Link usando o ID */
         public function getLinkHashID($id)
         {
             $sql = "SELECT * FROM tab_links WHERE id=:id";
             $sql = $this->db->prepare($sql);
             $sql->bindValue(":id", $id);
             $sql->execute();
 
             if($sql->rowCount() > 0){
                 return  $sql->fetch(PDO::FETCH_ASSOC);
             }
 
         }

        /* Incluir Link e cria link Curto */
        public function salvar($url_original)
        {

            $sql =" INSERT INTO tab_links (
                        url_original,                        
                        url_curta_hash,
                        criado_em,
                        ip_criacao)
                    VALUES (
                        :url_original,                        
                        :url_curta_hash,
                        now(),
                        :ip_criacao);";
                   

            try
            {
            
                $url_curta_hash = '';
                $url_curta_completa = '';

              /* Pega a URL Original e Cria a URL Curta 
              OBS : AQUI FICA A CRITERIO DE CADA DESENVOLVEDOR CRIAR SUA LOGICA DE GERAÇÃO DE LINK CURTO, COMO É SOMENTE UM EXEMPLO
              FIZ UM RAND SOMENTE PARA TESTAR, MAS EM PRODUÇÃO PRECISA SER MELHOR TESTADO.
              */
              $caracteres_count = strlen($url_original);
              $round_time = rand(1,999).rand(1,64);
              $url_curta_hash = $caracteres_count .''.$round_time .''.rand(1,9);              
              /* ---------------------------------------*/


              $sql = $this->db->prepare($sql);
              $sql->bindValue(":url_original", $url_original);              
              $sql->bindValue(":url_curta_hash", $url_curta_hash);
              $sql->bindValue(":ip_criacao", $_SERVER['REMOTE_ADDR']);
              $sql->execute();

            }
            catch(PDOException $e)
            {
                echo "Erro salvar urls .: ".$e->getMessage();
                exit;
            }
          
        }


    

    }

?>