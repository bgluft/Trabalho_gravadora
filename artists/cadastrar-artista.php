<h1>Nova banda/artista</h1>
<form action="?page=salvar-artista" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome: </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tipo: </label>
        <select name="band_artist" class="form-control">
            <option value="a">Artista</option>
            <option value="b">Banda</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Ano de nascimento / formação:</label>
        <input type="number" id="ano" min="1900" max="2030" name="birth_formation" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>

</form>