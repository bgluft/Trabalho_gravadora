<h1>Listar album</h1>

<?php
    $sql = "
    SELECT
        al.id, al.name as album_name, al.description, al.release_date, g.name as genre_name,  ar.name as artist_name
    FROM
        albuns as al
    INNER JOIN
        genres as g
    ON
        g.id = al.genre
    INNER JOIN
        artists as ar
    ON
        al.artist = ar.id
 	";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Descrição</th>";
        print "<th>Data</th>";
        print "<th>Gênero</th>";
        print "<th>Artista</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->album_name . "</td>";
            print "<td>" . $row->description . "</td>";
            print "<td>" . $row->release_date . "</td>";
            print "<td>" . $row->genre_name . "</td>";
            print "<td>" . $row->artist_name . "</td>";
            print "<td>
                       <button onclick=\"location.href='?page=editar-album&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

                       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-album&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
<div class="d-flex justify-content-center">
<button  onclick="location.href='?page=cadastrar-album'" class="btn btn-primary">Adicionar</button>
</div>
