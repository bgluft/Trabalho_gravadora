<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gravadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Gravadora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=listar-artista">Artista</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=listar-genero">Genêros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=listar-album">Albuns</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=listar-musica">Músicas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
          case "cadastrar-artista":
            include("artists/cadastrar-artista.php");
          break;
          case "listar-artista":
            include("artists/listar-artista.php");
          break;
          case "salvar-artista":
            include("artists/salvar-artista.php");
          break;
          case "editar-artista":
            include("artists/editar-artista.php");
          break;
          case "cadastrar-genero":
            include("genres/cadastrar-genero.php");
          break;
          case "editar-genero":
            include("genres/editar-genero.php");
          break;
          case "listar-genero":
            include("genres/listar-genero.php");
          break;
          case "salvar-genero":
            include("genres/salvar-genero.php");
          break;
          case "cadastrar-album":
            include("albuns/cadastrar-album.php");
          break;
          case "editar-album":
            include("albuns/editar-album.php");
          break;
          case "listar-album":
            include("albuns/listar-album.php");
          break;
          case "salvar-album":
            include("albuns/salvar-album.php");
          break;
          case "cadastrar-musica":
            include("musics/cadastrar-musica.php");
          break;
          case "editar-musica":
            include("musics/editar-musica.php");
          break;
          case "listar-musica":
            include("musics/listar-musica.php");
          break;
          case "salvar-musica":
            include("musics/salvar-musica.php");
          break;
          default:
          print "<h1>Bem vindos!</h1>";
      }
      ?>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>