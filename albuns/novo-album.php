<h1>Novo album!</h1>
<form action="?page=novo-album" method="post">
    <input type="hidden" name="acao" value="novo-album">
    <div class="mb-3">
        <label>Nome do Album</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="number" id="release_data" min="1900" max="2030" name="release_data" class="form-control">
    </div>
    <div class="mb-3">
        <label>Genero</label>
        <input type="text" name="genre" class="form-control">
    </div>
    <div class="mb-3">
        <label>Artista</label>
        <input type="text" name="artist" class="form-control">
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>
</form>