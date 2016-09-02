<?php
date_default_timezone_set('Europe/London');
require_once('./vendor/autoload.php');
//require_once dirname(__FILE__) . '/vendor/phpoffice/phpexcel/Classes/PHPExcel.php';


$faker = Faker\Factory::create();

for( $i = 1; $i < 20; $i++ )
{
  $name = $faker->name;
  echo $name . '<br/>';
}

