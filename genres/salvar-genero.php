<?php
    switch($_REQUEST['acao']){
        case "cadastrar":
            $name = $_POST['name'];

            $sql = "INSERT INTO genres (name) VALUES ('$name')";

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Gênero cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            } else {
                print "<script>alert('Não foi possível fazer cadastro');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            }
            break;
        case "editar":
            $name = $_POST['name'];

            $sql = "UPDATE genres SET name='$name' WHERE id=" . $_REQUEST['id'];

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Gênero editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            } else {
                print "<script>alert('Não foi possível editar cadastro');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            }
            break;
        case 'excluir':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM genres WHERE id=$id";
        
            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-genero';</script>";
            }
            break;
    }
?>