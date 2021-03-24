<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyDOCs - Editor Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="images/favicon.ico">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 520px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #0088D4; /* E1A101; */
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MyDOCs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">   
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h3><font color='#F5F5F5'>Links Usados</font></h3>
      <p><a href="https://github.com/jessegreathouse/TinyEditor"><font color='#F5F5F5'>TinyEditor</font></a></p>
      <p><a href="https://www.w3schools.com/"><font color='#F5F5F5'>www.w3schools.com</font></a></p>
      <p><a href="https://getbootstrap.com/"><font color='#F5F5F5'>getbootstrap.com</font></a></p>
      <p><a href="https://stackoverflow.com/"><font color='#F5F5F5'>stackoverflow.com</font></a></p>
      <p><a href="https://www.tiny.cloud/docs/demo/full-featured/"><font color='#F5F5F5'>www.tiny.cloud/demo/full</font></a></p>
    </div>
    <div class="col-sm-6 text-left"> 
      <h1>Meus Documentos</h1>
      <hr>
        <table class="table table-striped">
            <tr>
                <th>Tipo</th>
                <th>Nome do Arquivo</th>
            </tr>

            <?php include 'tabledocs.php';?>

        </table>
    </div>
    <div class="col-sm-4 sidenav">
    <h3><font color='#F5F5F5'>Funcionalidades</font></h3>
        <form id="formNew" name="formNew" method="POST" action="editor.php">
            <div class="control-group">
                <div class="control">
                    <input class="form-control" id="nomeArquivoNew" name="nomeArquivoNew" type="text" placeholder="Nome do Novo Arquivo" required/>
                </div>
                <div class="controls">
                    <input class="btn btn-success btn-block" type="submit" value="Abrir Novo Documento" id="enterNew" name="enterNew"><br>
                </div>
            </div>
        </form>

        <form id="form1" name="form1" method="POST" action="editor.php">
            <div class="control-group">
                <div class="controls">
                <input class="form-control" id="nomeArquivo" name="nomeArquivo" type="text" placeholder="Nome do Arquivo" required/>
                </div>
                <div class="controls">
                <input class="btn btn-info btn-block" type="submit" value="Abrir Documento" id="enter" name="enter"><br>
                </div>
            </div>
        </form>

        <form id="formDel" name="formDel" method="POST" action="delete_docs.php">
            <div class="control-group">
                <div class="controls">
                <input class="form-control" id="nomeArquivoDel" name="nomeArquivoDel" type="text" placeholder="Nome do Arquivo" required/>
                </div>
                <div class="controls">
                <input class="btn btn-danger btn-block" type="submit" value="Ecluir Documento" id="enterDel" name="enterDel"><br>
                </div>
            </div>
        </form>

        <form id="formUpload" name="formUpload" method="POST" action="editor.php">
        <div class="control-group">
            <div class="controls">
                <input class="form-control" required type="file" id="nomeArquivoUp" name="nomeArquivoUp" type="text" accept=".doc,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
            </div>
            <div class="controls">
            <input class="btn btn-default btn-block" type="submit" value="Importar Documento" id="enterUp" name="enterUp"><br>
            </div>
        </div>
        </form>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; 2018 MyDOCs.com<p>
</footer>

</body>
</html>
