<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);


$sql = "UPDATE usuario set nome = '$nome' , email = '$email', senha = '$senha'
WHERE id = $id";

if ($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}
?>



<body>
  <div class="container">
    <div class="coluna">
      
        <hr>
          <a href="index.php" class="btn btn-primary">voltar</a>

      </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>