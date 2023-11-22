<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $name = $_POST["name"];
            $album= $_POST["album"];

            $sql = "INSERT INTO musics (name, album) 
            VALUES ('{$name}', '{$album}')";

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Musica cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            } else {
                print "<script>alert('Não foi possível fazer cadastro');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            }

        break;

        case 'editar':
            $name = $_POST["name"];
            $album = $_POST["album"];
            
            $sql = "UPDATE musics SET name='{$name}', album={$album} WHERE id=". $_POST['id'];

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Musica editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            } else {
                print "<script>alert('Não foi possível editar Musica');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            }
        break;

        case 'excluir':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM musics WHERE id=$id";
        
            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-musica';</script>";
            }
            break;
        
    }