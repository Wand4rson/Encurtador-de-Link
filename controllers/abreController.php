<?php
class abreController extends controller {


    public function index() 
	{                     
    }

    //Case passe pela URL o link ele irá já dar um redirect logo
    //http:encurtador.com/abre/link/123132131
    //Recupera o link original e da um redirect
    public function link($url_curta_hash) 
	{       
        if(!empty($url_curta_hash))
        {
            $link = new Link();
            $link_original = $link->getLinkHash($url_curta_hash); 
            
            //echo "<pre>";
            //print_r($link_original);
            //exit;        
            
            if (!empty($link_original))
            {
                header("Location:".$link_original['url_original']); //Encontrou Link
            }
            else
            {                
                header("Location:".BASE_URL.'?link_no'); //Não existe link
            }            
        }
        else
        {
            header("Location:".BASE_URL);
        }
    }



}