<?php
$action = isset( $_GET['action'] ) ? $_GET['action'] : '';
$view = '';
if($action)
{
  switch($action)
  {
    case 'edit':
      if($_POST)
      {
        //incluye verde
        $view = 'edit_action.php';
      }else
      {
        //incluye formulario
        $view = 'form.php';
      }
    break;
    default:
      //nada
  }
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
        <div class="medium-5 large-3 columns">&nbsp;</div>
    </div>
    <div class="row column">
        <p class="lead">PHP Modular</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        
        <?php if($view){
            include($view);
          } ?>
        

        <table>
          <thead>
            <tr>
              <th width="200">Acción</th>
              <th>Nombre</th>
              <th width="150">Método</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./index.php?action=edit">Ver detalle</a></td>
              <td>Edición de Registro</td>
              <td>GET</td>
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