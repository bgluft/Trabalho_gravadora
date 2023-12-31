<h1>Bandas e artistas solo</h1>

<?php
    $sql = "SELECT * FROM artists";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Banda/Artista</th>";
        print "<th>Ano de nascimento/formação</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->name . "</td>";
            print "<td>" .($row->band_artist == 'a'? "Artista" : "Banda") . "</td>";
            print "<td>" . $row->birth_formation . "</td>";
            print "<td>
                       <button onclick=\"location.href='?page=editar-artista&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

                       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-artista&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
<div class="d-flex justify-content-center">
<button  onclick="location.href='?page=cadastrar-artista'" class="btn btn-primary">Adicionar</button>
</div>