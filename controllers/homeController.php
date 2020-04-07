<?php
class homeController extends controller {

    public function index() 
	{              
        $dados = array();
        $link = new Link();

        $dados['msgErro'] = '';
        $dados['link_all'] = $link->getAll();                       //todos os links já gerados para alimentar tabela        

        if(isset($_POST['txtlink_original']))
        {
            if(!empty($_POST['txtlink_original']))
            {
                $txtlink_original = htmlspecialchars(addslashes($_POST['txtlink_original']));
                $link->salvar($txtlink_original);
                
                $dados['link_all'] = $link->getAll();                       //todos os links já gerados para alimentar tabela
                $this->loadTemplate('home', $dados);
                exit;
            }
            else
            {
                $_SESSION['msgErro']  = 'Campo Link Original não preenchido !';
                $dados['msgErro'] = $_SESSION['msgErro'];
                $_SESSION['msgErro'] = '';                
                
                $this->loadTemplate('home', $dados);
            }          
        }

        $this->loadTemplate('home', $dados);
    }

}