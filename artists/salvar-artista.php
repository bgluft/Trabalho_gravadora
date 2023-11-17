<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $name = $_POST["name"];
            $band_artist = $_POST["band_artist"];
            $birth_formation = $_POST["birth_formation"];

            $sql = "INSERT INTO artists (name, band_artist, birth_formation) 
            VALUES ('{$name}', '{$band_artist}', '{$birth_formation}')";

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Banda/Artista cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            } else {
                print "<script>alert('Não foi possível fazer cadastro');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            }
        break;

        case 'editar':
            $name = $_POST["name"];
            $band_artist = $_POST["band_artist"];
            $birth_formation = $_POST["birth_formation"];
            
            $sql = "UPDATE artists SET name='{$name}', band_artist='{$band_artist}', birth_formation='{$birth_formation}' WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Banda/Artista editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            } else {
                print "<script>alert('Não foi possível editar cadastro');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            }
        break;

        case 'excluir':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM artists WHERE id=$id";
        
            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-artista';</script>";
            }
            break;
        
    }