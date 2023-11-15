<h1>Listar album</h1>

<?php
    $sql = "SELECT * FROM albuns";
    
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
            print "<td>" . $row->name . "</td>";
            print "<td>" . $row->description . "</td>";
            print "<td>" . $row->release_date . "</td>";
            print "<td>" . $row->genre . "</td>";
            print "<td>" . $row->artist . "</td>";
            print "<td>
                       <button onclick=\"location.href='?page=editar-albuns&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

                       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
