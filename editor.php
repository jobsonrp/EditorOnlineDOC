<?php
session_start();

include 'editor/upload_docs.php';
include 'editor/save_docs.php';
include 'editor/new_docs.php';
include 'editor/open_docs.php';

$nomeArquivo = $_SESSION["nome"];
$conteudoArquivo = $_SESSION["conteudo"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>MyDOCs - Editor Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript" src="js/tinyeditor.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/favicon.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table#t01 {
  border: 8px solid #dddddd;
  background-color: #dddddd;
}

table#t02 {
  border: 0px solid #dddddd;
  background-color: #ffffff;
}

a.dcontexto {
	position: relative;
	font: 12px arial, verdana, helvetica, sans-serif;
	padding: 10;
	color: #039;
	text-decoration: none;
	z-index: 24;
}
a.dcontexto:hover {
	background: transparent;
	z-index: 25;
}
a.dcontexto span {
	display: none;
}
a.dcontexto:hover span {
	display: block;
	position: absolute;
	width: 150px;
	top: 3em;
	text-align: justify;
	left: -9em;
	font: 14px arial, verdana, helvetica, sans-serif;
	padding: 5px 10px;
	border: 1px solid #000;
	background: #000;
	color: #fff;
}

</style>

</head>
<body>

<form id="editorDOC" method="POST" action="">
    <nav class="navbar navbar-dark" style="background-color:#0088D4;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color:#F5F5F5;">MyDOCs</a>
        </div>
        
        <p class="navbar-text" style="color:#F5F5F5;">
          Nome do Documento:
          <input style="color:#000000;" id="nomeArquivo" name="nomeArquivo" type='text' value='<?php echo "$nomeArquivo"; ?>' readonly="true"/>
        </p>

        <p class="navbar-text">&nbsp;&nbsp;</p>

        <p class="navbar-text" style="color:#F5F5F5;">Save DOC</p>

        <a class="dcontexto" href="index.php" style="color:#F5F5F5;">
                <button class="btn btn-default navbar-btn" id="enterSave" name="enterSave" type="submit" onClick="editor.post();escondeInfo();">
                    <img src="images/save_cinza.png" width="24" height="24"
                    onMouseOver="this.src='images/save.png'"
                    onMouseOut="this.src='images/save_cinza.png'"/>
                </button>
                <span>Save DOC to Server</span>
        </a>

        <ul class="nav navbar-nav navbar-right">
          <li>
          <p class="navbar-text" style="color:#F5F5F5;">Close Editor</p>
          </li>
          <li>
              <a class="dcontexto" href="index.php" style="color:#F5F5F5;">
                <img src="images/out.png" width="24" height="24"
                    onMouseOver="this.src='images/out_red.png'"
                    onMouseOut="this.src='images/out.png'"/>
                    <span>Back to Home</span>
              </a>
          </li>
        </ul>
      </div>
    </nav>
    <textarea name="input" id="input" style="width:600px; height:200px"></textarea>
    <input id='conteudoArquivo' name='conteudoArquivo' type='text' value='<?php echo "$conteudoArquivo"; ?>' hidden />
</form>  

  <div id=infobd name=infobd>
      <button class="alert alert-success btn-block" type="button" onclick="escondeInfo();" >
        <table>
          <tr>
            <td align="center">
            Documento Salvo
            </td>
            <td align="right">
              x
            </td>
          </tr>
        </table>
      </button>
  </div>

<script type="text/javascript" src="js/createTiny.js"></script>

<script>
function mostraInfo() {
    var x = document.getElementById('infobd');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    }
}
</script>

<script>
function escondeInfo() {
    var x = document.getElementById('infobd');
        x.style.display = 'none';
}
</script>
</body>
</html>
