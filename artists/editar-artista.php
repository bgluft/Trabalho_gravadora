<h1>Editar banda/artista</h1>
<?php
    $sql = "SELECT * FROM artists WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-artista" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
    <label>Tipo: </label>
        <select name="band_artist" class="form-control">
            <option <?php print $row->band_artist == "a"? "selected" : "" ?> value="a">Artista</option>
            <option <?php print $row->band_artist == "b"? "selected" : "" ?> value="b">Banda</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Ano de nascimento / formação:</label>
        <input type="number" id="ano" min="1900" max="2030" name="birth_formation" value="<?php print $row->birth_formation; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>