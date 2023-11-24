<h1>Genêros</h1>

<?php
    $sql = "SELECT * FROM genres";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Name</th>";
        print "<th></th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->name . "</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar-genero&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-genero&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
        </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
<div class="d-flex justify-content-center">
<button  onclick="location.href='?page=cadastrar-genero'" class="btn btn-primary">Adicionar</button>
</div>