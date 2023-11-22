<?php
    $sql = 
    "SELECT
	    al.id, al.name as album, ar.name as artist 
    FROM 
	    albuns as al
    INNER JOIN
	    artists as ar
    ON
	    al.artist = ar.id";

    $album = $conn->query($sql);
?>

<h1>Cadastrar música:</h1>
<form action="?page=salvar-musica" method="post">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Álbum:</label>
        <select name="album" class="form-control">
        <?php
                    if ($album->num_rows > 0){
                        print "<option selected></option>";
                        while($row = $album->fetch_object()){
                            print "<option value=$row->id>$row->album / $row->artist</option>";
                        }
                    } else {
                        print "<option>Nenhum album cadastrado</option>";
                    }
                ?>
            </select>
    </div>
    <div class="mb-3">
        <button type="sumit" class="btn btn-primary">Enviar</button>
    </div>
</form>