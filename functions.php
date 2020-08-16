<?php		
require_once('conf.php');	
require_once(DBAPP);		
$noticias = null;	
$noticia = null;

/**	 *  Listagem de noticias	 */	
function index() {	
    global $noticias;		
    $noticias = find_all('noticias');	
}

/**	 *  Cadastro de noticias	 */	
function add() {		  
    if (!empty($_POST['noticia'])) {	    	    		    
        $noticia = $_POST['noticia'];	    	    	    
        save('noticias', $noticia);	    
        header('location: index.php');	 
     }	
    }
    /**	 *	Atualizacao/Edicao de noticia	 */	
function edit() {		  	  
    if (isset($_GET['id'])) {		    
        $id = $_GET['id'];		    
        if (isset($_POST['noticia'])) {		      
             $noticia = $_POST['noticia'];	      	      
            update('noticias', $id, $noticia);	      
            header('location: index.php');	    } 
                else {		      
                global $noticia;	      
                $noticia = find('noticias', 
                $id);	    } 	  } 
                else {	    
            header('location: index.php');	  }	}

    /**	 *  Visualização de um noticia	 */	
function view($id = null) {	  
        global $noticia;	  
        $noticia = find('noticias', $id);	
    }
    /**	 *  Exclusão de um noticia	 */	
function delete($id = null) {		  
        global $noticia;	 
         $noticia = remove('noticias', $id);		 
    header('location: index.php');	}