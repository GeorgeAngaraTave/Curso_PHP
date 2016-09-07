<?php

/**
Function to remove disabled users
**/
function r(&$u)
{
  $cl_arr = [];
  foreach($u as $u_)
  {
    if($u_['d'] == false)
    {
      
      $cl_arr[] = $u_;
      
    }
  }

  $u = $cl_arr;

}

$u[] = [ 'n' => 'Bernardo', 'd' => true ];
$u[] = [ 'n' => 'Francisco', 'd' => false ];
$u[] = [ 'n' => 'Marco', 'd' => true ];
$u[] = [ 'n' => 'Daniel', 'd' => false ];
$u[] = [ 'n' => 'Bryan', 'd' => true ];
$u[] = [ 'n' => 'Omar', 'd' => false ];
$u[] = [ 'n' => 'Violeta', 'd' => true ];

r($u);

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
        <p class="lead">Legibilidad de código</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <div class="callout alert">
          <pre>
            <?php var_dump($u); ?>
          </pre>
        </div>

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