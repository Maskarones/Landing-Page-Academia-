<?php
    include_once("form.php");
    if(isset($_GET["submitid"])){
        $nome=$_GET["nome"];
        $email=$_GET["email"];
        $tel=$_GET["tel"]; 
         $slq="INSERT INTO usuario_tb(NOME,EMAIL,TEL) 
         VALUES('$nome','$email','$tel')";
         mysqli_query($mysqli, $slq);
          mysqli_close($mysqli);
          header("Location:matricula.php?status=enviado");
    }
  ?>