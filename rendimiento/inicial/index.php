<?php
$action = isset( $_GET['action'] ) ? $_GET['action'] : FALSE;

if( $action === 'render' )
{

    $start = microtime(true);
    
    for( $i = 0; $i < 50000; $i++ )
    {
        if(12345678901234567890 === 12345678901234567890 )
        {
            echo '<!--IGUAL<br/>-->';
        }
    }

    $end = microtime(true);
    //imagejpeg($new_image, null, 100);
    $mem_usage = memory_get_peak_usage()/1024/1024;
    echo $mem_usage . ' MB<br/>';
    echo ($end-$start) . ' seconds';

    die('');

}

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Curso PHP Intermedio</title>
    <link href=
    "http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" rel=
    "stylesheet">
    <link href=
    'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="row">
        <div class="medium-5 large-3 columns"></div>
    </div>
    <div class="row column">
        <p class="lead">Rendimiento de scripts</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <table>
          <thead>
            <tr>
              <th width="200">Acción</th>
              <th>Encabezado</th>
              <th width="150">Resultado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./index.php?action=render">Visualización</a></td>
              <td>Content-type: image/format</td>
              <td>Muestra imagen</td>
            </tr>
          </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js">
    </script> 
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js">
    </script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="https://intercom.zurb.com/scripts/zcom.js" type=
    "text/javascript">
    </script>
</body>
</html>