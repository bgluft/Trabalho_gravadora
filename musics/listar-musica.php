<h1>Músicas</h1>

<?php
    $sql = "
        SELECT 
            m.id, m.name as music_name, ar.name as artist_name, al.name as album_name
        FROM
            musics as m
        INNER JOIN
            albuns as al
        ON
            m.album = al.id
        INNER JOIN
            artists as ar 
        ON
            al.artist = ar.id
        ";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Artista</th>";
        print "<th>Album</th>";
        print "<th></th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->music_name . "</td>";
            print "<td>" . $row->artist_name . "</td>";
            print "<td>" . $row->album_name . "</td>";
            print "<td>
                        <button onclick=\"location.href='?page=editar-musica&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-musica&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
<div class="d-flex justify-content-center">
<button  onclick="location.href='?page=cadastrar-musica'" class="btn btn-primary">Adicionar</button>
</div>