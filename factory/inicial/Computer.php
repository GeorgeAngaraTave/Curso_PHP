<?php
class Computer
{

  public $ram;
  public $hard_drive;
  public $monitor;
  public function __construct($ram, $hard_drive, $monitor)
  {
    $this->ram = $ram;
    $this->hard_drive = $hard_drive;
    $this->monitor = $monitor;
  }
}

class Ram
{
  //RAM size in GB
  private $size;
  public function __construct($ram_size)
  {
    $this->size = $ram_size;
  }
}

class HardDrive
{
  //HardDrive size in GB
  private $size;
  public function __construct($hard_drive_size)
  {
    $this->size = $hard_drive_size;
  }
}

class Monitor
{
  //Size in inches
  private $size;
  public function __construct($size)
  {
    $this->size = $size;
  }
}





