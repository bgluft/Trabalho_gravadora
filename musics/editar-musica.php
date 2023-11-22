<h1>Editar música!</h1>
<?php
    $sql = "SELECT * FROM musics";
    $res = $conn->query($sql);
    $music = $res->fetch_object();

    $sql =
    "SELECT
        al.id as id, al.name as album_name, ar.name as artist_name
    FROM 
        albuns as al
    INNER JOIN
        artists as ar
    ON
        al.artist = ar.id";

    $albuns = $conn->query($sql);
?>

<form action="?page=salvar-musica" method="post">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" class="form-control" value="<?php print $music->name; ?>">
    </div>
    <div class="mb-3">
        <label>Álbum:</label>
        <select name="album" class="form-control">
            <?php 
                while($album = $albuns->fetch_object()){
                    if ($album->id == $music->album){
                        print "<option value=$album->id selected>$album->album_name / $album->artist_name</option>";
                    } else {
                        print "<option value=$album->id>$album->album_name / $album->artist_name</option>";
                    }
                }
            ?>
        </select>
    </div>
</form>
