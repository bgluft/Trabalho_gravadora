<h1>Editar Album</h1>
<?php
    $sql = "SELECT * FROM albuns WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-album" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="description" value="<?php print $row->description; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="number" id="ano" min="1900" max="2030" name="release_date" value="<?php print $row->release_date; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Genero</label>
        <input type="text" name="genre" value="" class="form-control">
    </div>
    <div class="mb-3">
        <label>Artista/Banda</label>
        <input type="text" name="band_artist" value="" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>