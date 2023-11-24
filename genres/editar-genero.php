<h1>Editar gênero</h1>

<?php
    $sql = "SELECT * FROM genres WHERE id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-genero" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>
</form>