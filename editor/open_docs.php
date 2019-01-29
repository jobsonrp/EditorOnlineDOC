<?php
if(isset($_POST['enter'])){
  $entrar = $_POST['enter'];
}elseif(isset($_POST['enterNew'])){
  $entrar = $entrarNew;
}elseif(isset($_POST['enterSave'])){
  $entrar = $entrarSave;
}elseif(isset($_POST['enterUp'])){
  $entrar = $entrarUp;
}

if (isset($entrar)) {
  if(isset($_POST['nomeArquivo'])){
    $nome=$_POST['nomeArquivo'];
  }elseif(isset($_SESSION["nome"])){
    $nome = $_SESSION["nome"];
  }else{
    $nome=$nomeArquivo;
  }
  include("connect.inc");
  $verifica = mysqli_query($connect,"SELECT * FROM arquivos WHERE nome = '$nome' ") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
      echo"<script language='javascript' type='text/javascript'>alert('Arquivo não existe.');window.location.href='index.php';</script>";
      die();
    }else{
      $registro=mysqli_fetch_row($verifica);
      $_SESSION["nome"] = $registro[1];
      $_SESSION["conteudo"] = $registro[2];
    }
    mysqli_close($connect);
}
?>