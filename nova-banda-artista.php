<h1>Nova banda/Artista</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Artista/Banda</label>
        <input type="text" name="band_artist" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano Nascimento</label>
        <input type="number" id="ano" min="1900" max="2030" name="birth_formation" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>