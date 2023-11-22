<h1>Editar Album</h1>
<?php
    $sql = "SELECT * FROM albuns WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $album = $res->fetch_object();
    
    $sql = "SELECT * FROM genres";
    $genres = $conn->query($sql);

    $sql = "SELECT * FROM artists";
    $artists = $conn->query($sql);
    
    


?>
<form action="?page=salvar-album" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $album->id; ?>">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="name" value="<?php print $album->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="description" value="<?php print $album->description; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="number" id="ano" min="1900" max="2030" name="release_date" value="<?php print $album->release_date; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Genero</label>
        <select name="genre" class="form-control">
            <?php
                while($genre = $genres->fetch_object()){
                    if($genre->id = $album->genre){
                        print "<option selected value=$genre->id>$genre->name</option>";
                    } else {
                        print "<option value=$genre->id>$genre->name</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Artista/Banda</label>
        <select name="artist" class="form-control">
            <?php
                while($artist = $artists->fetch_object()){
                    if($artist->id = $album->artist){
                        print "<option selected value=$artist->id>$artist->name</option>";
                    } else {
                        print "<option value=$artist->id>$artist->name</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>