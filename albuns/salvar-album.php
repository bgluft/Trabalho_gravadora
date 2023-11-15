<?php
    switch ($_REQUEST["acao"]) {
        case 'novo-album':
            $name = $_POST["name"];
            $description = $_POST["description"];
            $release_date = $_POST["release_date"];
            $genre = $_POST["genre"];
            $artist = $_POST["artist"];

            $sql = "INSERT INTO albuns (name, description, release_date, genre, artist) 
            VALUES ('{$name}', '{$description}', '{$release_date}', '{$genre}','{$artist}')";

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Album cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            } else {
                print "<script>alert('Não foi possível fazer cadastro');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            }

        break;

        case 'novo-album':
            $name = $_POST["name"];
            $description = $_POST["description"];
            $release_date = $_POST["release_date"];
            $genre = $_POST["genre"];
            $artist = $_POST["artist"];
            
            $sql = "UPDATE artists SET name='{$name}', description='{$description}', release_date='{$release_date}, genre='{$genre}, artist='{$artist}' WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Album editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            } else {
                print "<script>alert('Não foi possível editar Album');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            }
        break;

        case 'excluir':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM albuns WHERE id=$id";
        
            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-album';</script>";
            }
            break;
        
    }