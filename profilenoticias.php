<?php	    
require_once('functions.php');	    
index();	
?>	
<?php 
if (!empty($_SESSION['message'])) : 
?>		
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">			
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>			
<?php echo $_SESSION['message']; ?>		
</div>		
<?php 
clear_messages(); 
?>	
<?php 
endif; ?>	


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Portal Lumni</title>
  <link rel="stylesheet" href="css/princ.css">
  <link rel="stylesheet" href="icons/style.css" />
  <link rel="stylesheet" href="css/mob-menu.css">
  <link rel="stylesheet" href="css/vertical-menu.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/forum.css">
  <link rel="stylesheet" href="css/fs-busca.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/icon4.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
  <nav>
    <img src="img/logo.png" id="logo" alt="">
    <ul>
        <li class="nav-link"><a href="index.html">INÍCIO</a></li>
        <li class="nav-link"><a href="forum.html">FÓRUM</a></li>
        <li class="nav-link"><a href="loja.html">LOJA</a></li>
        <li class="nav-link"><a href="eventos.html">EVENTOS</a></li>
        <li class="nav-link"><a href="relatos.html">RELATOS</a></li>
        <li class="nav-link"><a href="sobre.html">SOBRE NÓS</a></li>
        <li class="secundary-menu">
            <form class="openBtn" action="" onclick="openSearch();">
                <input type="text" placeholder="Buscar no Fórum..." name="busca">
                <button type="submit"><i class="icon-B" id="lupa"></i></button>
            </form>
        </li>
        <li class="secundary-menu"><button><i class="icon-I sub-menu"></i></button></li>
        <li id="loja" class="secundary-menu"><button><i class="icon-M sub-menu"><sup>0</sup></i></li>

        <div class="dropdown">
            <li class="secundary-menu" id="forum-user"><button class="dropbtn" onclick="DropUser();"><img
                        src="img/perfil-forum.jpg" alt="">
                    <legend>Boby</legend><i class="fa fa-chevron-down" aria-hidden="true"></i>
                </button></li>
            <div id="myDropdown" class="dropdown-content">
                <a href="profile.html">Meu Perfil</a>
                <a href="#">Sair</a>
            </div>
          </nav>
  <!-- Menu Mobile -->
  <div id="mob-menu" class="container-mob-menu">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="list-menus">
      <a href="index.html">INÍCIO</a>
      <a href="forum.html">FÓRUM</a>
      <a href="loja.html">LOJA</a>
      <a href="eventos.html">EVENTOS</a>
      <a href="relatos.html">RELATOS</a>
      <a href="sobre.html">SOBRE NÓS</a>
    </div>
  </div>
  <!-- Menu Mobile de Busca Tela Cheia -->
  <div id="fullscreen-search" class="container-src">
    <span class="closebtn" onclick="closeSearch();">×</span>
    <div class="container-src-full">
      <form action="">
        <input type="text" placeholder="O que você procura?" name="search">
        <button type="submit"><i class="icon-B"></i></button>
      </form>
    </div> 
  </div>
  <main class="containerPerfil">
    <aside class="menuVertical">
    <ul>
      <a href="profile.html"><li>MEU PERFIL</li></a>
      <a href="profilenoticias.html"><li>HISTÓRICO DE NOTÍCIAS</li></a>
      <a href="profileprodutos.html"><li>HISTÓRICO DE PRODUTOS</li></a>
      <a href=""><li>PARCERIAS DE VENDA</li></a>
      <a href=""><li>GERENCIAR MODERADORES</li></a>
      <a href=""><li>AGENDA DE EVENTOS</li></a>
      <a href=""><li>PERMISSÕES DE USO</li></a>
      <a href=""><li>PROBLEMAS RELATADOS</li></a>
      <a href=""><li>LIXEIRA</li></a>
    </ul>
    </aside>
    <section class="containerNoticias">
        <ul class="cardsN">
                      <?php if ($noticias) : ?>
              <?php foreach ($noticias as $noticia) : ?>	
                <li href="view.php?id=<?php echo $noticia['id']; ?>">
                <table>
                      <tr><td><?php echo $noticia['titulo']; ?> </td></tr> 
              </table>
                  <div>
                    <label for=""><i class="fa fa-heart" aria-hidden="true"></i>0</label>
                    <label for=""><i class="fa fa-comment" aria-hidden="true"></i>0</label>
                    <label for=""><i class="fa fa-share" aria-hidden="true"></i>0</label>
                </div>
                <button class="alter"> <a href="editnoticia.php?id=<?php echo $noticia['id']; ?>">ALTERAR INFORMAÇÕES</a></button>
                <button class="trash"> <a href="delete.php?id=<?php echo $noticia['id']; ?>">EXCLUIR NOTÍCIA</button>
            </li>
            <?php 
                  endforeach;
                  ?>	
                  <?php else : ?>		
                  <tr>			
                  <td colspan="6">Nenhum registro encontrado.</td>		
                  </tr>	
                  <?php 
                  endif; 
                  ?>
            <li class="CardNew"><a href="cadastronoticia.html">
              <button class="ButtoNew">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
              <br>NOVA NOTÍCIA</button></a>
          </li>
        </ul>
    </section>
  </main>
  <footer>
    <ul class="social">
      <p>Siga nossas redes sociais:</p>
      <li><a href="https://www.facebook.com/Lumni-Quixad%C3%A1-100732148033586/?modal=admin_todo_tour" target="_blank"
          class="fa fa-facebook-official" style="font-size: 25px"></a></li>
      <li><a href="https://www.instagram.com/lumniqoficial/" target="_blank" class="fa fa-instagram"
          style="font-size: 25px"></a></li>
      <li><a href="https://www.youtube.com/channel/UCUl6dEKOFaK24zm76G0HDrw?view_as=subscriber" target="_blank"
          class="fa fa-youtube-play" style="font-size: 25px"></a></li>
    </ul>
    <br>
    <p id="copy">&copy; 2019 By Portal Lumni, Todos os direitos reservados</p>
  </footer>

  </div>
</body>
    <script src="js/mob-menu.js"></script>
    <script src="js/background-video.js"></script>
    <script src="js/fullscreen-search.js"></script>
    <script src="js/mostrar-modal.js"></script>
    <script src="js/user-dropdown.js"></script>
    <script src="js/control-menu-modal.js"></script>
</html>