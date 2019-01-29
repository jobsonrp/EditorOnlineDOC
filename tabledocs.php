<?php
$table = "arquivos";
include("connect.inc");
$result = mysqli_query($connect,"SELECT * FROM $table") or die("erro ao selecionar");
while($reg=mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td><img src='images/doc_blue.png' alt='' width='24' height='24'><font color='#0E0F98'> DOC</font></img></td>";
    echo "<td>$reg[1]</td>";
    echo "</tr>";
}
mysqli_close($connect);
?>