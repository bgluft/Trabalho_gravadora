<h1>Editar banda/Artista</h1>
<?php
    $sql = "SELECT * FROM artists WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Artista/Banda</label>
        <input type="text" name="band_artist" value="<?php print $row->band_artist; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano Nascimento</label>
        <input type="number" id="ano" min="1900" max="2030" name="birth_formation" value="<?php print $row->birth_formation; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>