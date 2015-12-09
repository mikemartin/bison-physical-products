<?php

class Plugin_bison_physical_products extends Plugin
{
  public function index()
  {
    return $this->core->cartHasPhysicalProducts();
  } 

  public function has_downloads()
  {
    return $this->core->cartHasDownloads();
  }   

  public function order()
  {
    return $this->core->orderHasPhysicalProducts();
  }

  public function order_has_downloads()
  {
    return $this->core->orderHasDownloads();
  }
}
