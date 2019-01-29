<?php
function parseWord($userDoc)
{
    $fileHandle = fopen($userDoc, "r");
    $word_text = @fread($fileHandle, filesize($userDoc));
    $line = "";
    $tam = filesize($userDoc);
    $nulos = 0;
    $caracteres = 0;
    for($i=0; $i<$tam; $i++)
    {
        $line .= $word_text[$i];
        if( $word_text[$i] == 0)
        {
            $nulos++;
        }
        else
        {
            $nulos=0;
            $caracteres++;
        }
        if( $nulos>1996)
        {
            break;
        }
    }
    $lines = explode(chr(0x0D),$line);
    $outtext = "";
    foreach($lines as $thisline)
    {
        $tam = strlen($thisline);
        if( !$tam )
        {
            continue;
        }
        $new_line = "";
        for($i=0; $i<$tam; $i++)
        {
            $onechar = $thisline[$i];
            if( $onechar > chr(240) )
            {
                continue;
            }

            if( $onechar >= chr(0x20) )
            {
                $caracteres++;
                $new_line .= $onechar;
            }

            if( $onechar == chr(0x14) )
            {
                $new_line .= "</a>";
            }

            if( $onechar == chr(0x07) )
            {
                $new_line .= "\t";
                if( isset($thisline[$i+1]) )
                {
                    if( $thisline[$i+1] == chr(0x07) )
                    {
                        $new_line .= "\n";
                    }
                }
            }
        }
        //troca por hiperlink
        $new_line = str_replace("HYPERLINK" ,"<a href=",$new_line);
        $new_line = str_replace("\o" ,">",$new_line);
        $new_line .= "\n";

        //link de imagens
        $new_line = str_replace("INCLUDEPICTURE" ,"<br><img src=",$new_line);
        $new_line = str_replace("\*" ,"><br>",$new_line);
        $new_line = str_replace("MERGEFORMATINET" ,"",$new_line);

        $outtext .= nl2br($new_line);
    }
    //Adicionado para extrair o conteudo do documento
    $result = str_replace("'",'"',$outtext);
    if (preg_match('/(?:<body[^>]*>)(.*)<\/body>/isU', $result, $matches)) {
      $body = $matches[1];
    }

 return $body;
}

if(isset($_POST['enterUp'])){
  $entrarUp = $_POST['enterUp'];
}

if (isset($entrarUp)) {
  //$filePath = 'documents/';                          // Usado com Servidor Online
  $filePath = '/home/jrocha/Documentos/ImporDoc/'; // Usado com Servidor Local
  if(isset($_POST['nomeArquivoUp'])){
    $nomeArquivo = $_POST['nomeArquivoUp'];
  }
  $text = parseWord($filePath.$nomeArquivo);
  $conteudoArquivo = $text;
  include("connect.inc");
  $sql="INSERT INTO arquivos (nome, conteudo) VALUES ('$nomeArquivo','$conteudoArquivo')";
  if (mysqli_query($connect, $sql)) {
      echo("<script language='JavaScript'>
      var x = document.getElementById('infobd');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      }
      </script>");
      $_SESSION["nome"] = $nomeArquivo;
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
  mysqli_close($connect);
}
?>