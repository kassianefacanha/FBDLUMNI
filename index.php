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
  <link rel="stylesheet" href="css/welcome.css">
  <link rel="stylesheet" href="css/vertical-menu.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/forum.css">
  <link rel="stylesheet" href="css/fs-busca.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/postnoticias.css">
  <link rel="stylesheet" href="css/slide-index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/icon4.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
  <nav>
    <img src="img/logo.png" id="logo" alt="">
    <ul>
        <li class="nav-link"><a href="index.html">INÍCIO</a></li>
        <li class="nav-link"><a href="">FÓRUM</a></li>
        <li class="nav-link"><a href="loja.html">LOJA</a></li>
        <li class="nav-link"><a href="eventos.html">EVENTOS</a></li>
        <li class="nav-link"><a href="relatos.html">RELATOS</a></li>
        <li class="nav-link"><a href="sobre.html">SOBRE NÓS</a></li>
        <li class="secundary-menu">
            <form class="openBtn" action="" onclick="openSearch();">
                <input type="text" placeholder="O que você procura?" name="busca">
                <button type="submit"><i class="icon-B" id="lupa"></i></button>
            </form>
        </li>
        
        <li class="secundary-menu"><button><i class="icon-I sub-menu"></i></button></li>
        <li id="loja" class="secundary-menu"><button><i class="icon-M sub-menu"><sup>0</sup></i></li>

        <div class="dropdown">
            <li class="secundary-menu" id="forum-user"><button class="dropbtn" onclick="DropUser();"><img
                        src="img/perfil-forum.jpg" alt="">
                    <legend>Boby</legend>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
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
  <section class="container-apresentacao">
    <div class="background-video">
    <video autoplay loop muted><source src="midia/presentation.mp4" type="video/mp4"></video>
    </div>
    <div class="info-presentation">
    <h2>BEM-VINDO AO</h2>
    <h1>PORTAL LUMNI</h1>
    <h3>A plataforma ufológica de Quixadá</h3>
    </div>
  </section>
  <section class="containerNoticias">
          <ul class="noticiaDestaque">
            <li class="miniaturaImg">
                <img src="img/notic04.png" alt="">
                <label for="">NOVO</label>
            </li>
            <li class="infoN">
              <h1>Série Ufológica do History grava Episódio em Quixadá</h1>
              <br>
              <p>Depois de relatos recentes de avistamentos de luzes misteriosas recorrentes no céu da
                Terra do Monólitos, a série mais completa de investigação e pesquisa sobre a misteriosidade
                ufológica no mundo escolheu a cidade de Quixadá para realização de um documentário com a população
                local, especialmente com a comunidade ufológica da região ...
                <br><br><br>
              </p>
              <p style="text-align:left; color: rgb(106, 106, 106);">Postado a 2 min</p>
              <button>VER NOTÍCIA COMPLETA</button>
            </li>
          </ul>
          <fieldset>
          <legend>NOTÍCIAS RECENTES</legend>

          <ul class="noticiasRecentes">
          <?php if ($noticias) : ?>
	        <?php foreach ($noticias as $noticia) : ?>	
            <li>
            <table>
                  <tr><td><?php echo $noticia['titulo']; ?> </td></tr> 
                  <tr><td><?php echo $noticia['autor']; ?> </td></tr> 
                  <tr> <td><a href="view.php?id=<?php echo $noticia['id']; ?>"> Visualizar</a></td>				</tr> 
            </table>          
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
          </ul>
          </fieldset>
  </section>
  <section class="promo-slider">
    <div id="slider" class="view-mob">
        <figure>
            <a href="loja.html"><img src="img/banneranuncio0.png" alt=""></a>
            <a href="loja.html"><img src="img/banneranuncio2.png" alt=""></a>
            <a href="loja.html"><img src="img/banneranuncio3.png" alt=""></a>
        </figure>
    </div>
</section>
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
