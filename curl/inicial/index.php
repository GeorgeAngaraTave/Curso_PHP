<?php  
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client(['base_uri' => 'https://api.github.com/']);

$response = $client->request('GET', 'users');
//echo $response->getStatusCode();
// print_r($response->getHeader('content-type'));
$contents = $response->getBody()->getContents();

//echo '<pre>';
//print_r($contents);
$content_json = json_decode($contents, TRUE);
?>

<!DOCTYPE html>
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
        <h4>cURL</h4>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <table>
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Avatar</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($content_json as $users){?>
            <tr>
              <td><?php echo $users['login'] ?></td>
              <td><img src="<?php echo $users['avatar_url']; ?>"></td>
            </tr>
            <?php }?>
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