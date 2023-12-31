<?php
    $sql = "SELECT * FROM artists";
    
    $artist = $conn->query($sql);
    
    $sql = "SELECT * FROM genres";

    $genre = $conn->query($sql);
?>

<h1>Novo álbum</h1>
<form action="?page=salvar-album" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do álbum:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição:</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano de lançamento:</label>
        <input type="number" id="release_date" min="1900" max="2030" name="release_date" class="form-control">
    </div>
    <div class="mb-3">
    <label for="genre">Gênero: </label>
        <select class="form-select" name="genre">
           <?php
                if ($genre->num_rows > 0){
                    print "<option selected></option>";
                    while($row = $genre->fetch_object()){
                        print "<option value=$row->id>$row->name</option>";
                    }
                } else {
                    print "<option>Nenhum gênero cadastrado</option>";
                }
            ?>
        </select>    
    </div>
    <div class="mb-3">
    <label for="artist">Artista: </label>
        <select class="form-select" name="artist">
           <?php
                if ($artist->num_rows > 0){
                    print "<option selected></option>";
                    while($row = $artist->fetch_object()){
                        print "<option value=$row->id>$row->name</option>";
                    }
                } else {
                    print "<option>Nenhum artista ou banda cadastrado</option>";
                }
                    ?>
        </select>    
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>
</form>
