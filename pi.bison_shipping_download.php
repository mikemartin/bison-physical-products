<?php

class Plugin_bison_shipping_download extends Plugin
{
  public function index()
  {
    $output = $this->core->cartHasPhysicalProduct();
    return $output;
  }   
}
