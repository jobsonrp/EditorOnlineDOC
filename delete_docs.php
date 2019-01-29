<?php
$table = "arquivos";
if(isset($_POST['nomeArquivoDel'])){
  $nomeArquivo = $_POST['nomeArquivoDel'];
}

if(isset($_POST['enterDel'])){
  $entrarDel = $_POST['enterDel'];
}

if (isset($entrarDel)) {
    include("connect.inc");
    $sql = "DELETE FROM $table WHERE nome = '$nomeArquivo'";

    if (mysqli_query($connect, $sql)) {
        echo "Record deleted successfully";
        echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
  mysqli_close($connect);
}
?>