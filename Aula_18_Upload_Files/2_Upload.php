<?php

$diretorio = "/Applications/XAMPP/xamppfiles/htdocs/LPW2/Aula_18_Upload_Files/Uploads/";
$arquivo = $diretorio . basename($_FILES["fileToUpload"]["name"]);

if(isset($_POST["submit"])) {
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $arquivo)) {
        echo "Upload do arquivo  ". basename( $_FILES["fileToUpload"]["name"]). " feito com sucesso .";
    } else {
        echo "Erro.";
    }
}

