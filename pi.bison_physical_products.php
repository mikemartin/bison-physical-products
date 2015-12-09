<?php

class Plugin_bison_physical_products extends Plugin
{
  public function index()
  {
    $output = $this->core->cartHasPhysicalProduct();
    return $output;
  } 

  public function has_downloads()
  {
    $output = $this->core->cartHasDownloads();
    return $output;
  }     
}
