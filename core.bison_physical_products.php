<?php

class Core_bison_physical_products extends Core
{
  public function cartHasPhysicalProducts()
  {
    $bison = $this->addon->api('bison');

    // Return list of physical products in the cart
    $physical_products = array_filter($bison->getCartItems(), function($item) { 
        $entry = Content::get($item['url']);
        return !isset($entry['download_path']);  
      });

    // Check list for products
    return (!empty($physical_products));
  }

  public function cartHasDownloads()
  {
    $bison = $this->addon->api('bison');

    // Return list of downloads in the cart
    $download_products = array_filter($bison->getCartItems(), function($item) { 
        $entry = Content::get($item['url']);
        return isset($entry['download_path']);  
      });

    // Check list for products
    return (!empty($download_products));
  }

  public function orderHasPhysicalProducts()
  {
    $order_details = $this->addon->api('bison')->session->get('order_details');

    // Return list of physical products in the cart
    $physical_products = array_filter($order_details['items'], function($item) { 
        $entry = Content::get($item['url']);
        return !isset($entry['download_path']);  
      });

    // Check list for products
    return (!empty($physical_products));
  }

  public function orderHasDownloads()
  {
    $order_details = $this->addon->api('bison')->session->get('order_details');

    // Return list of downloads in the order
    $download_products = array_filter($order_details['items'], function($item) { 
        $entry = Content::get($item['url']);

        return isset($entry['download_path']);  
      });

    // Check list for products
    return (!empty($download_products));
  }

}
