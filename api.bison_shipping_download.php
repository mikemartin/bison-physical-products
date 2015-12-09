<?php

class API_bison_shipping_download extends API
{

  public function calculateShipping()
  {
    // Set the Shipping to Zero
    $shipping = 0;

    //Use Multiple Flat Rate method for physical products only
    if ($this->core->cartHasPhysicalProduct()) {
      $shipping = $this->calculateMultipleFlatRate();
    }

    return $shipping;
  }

  public function calculateMultipleFlatRate()
  {

    $bison = $this->addon->api('bison');

    // Get Shipping options from Bison config
    $shipping_options = array_get($bison->getBisonConfig(), 'shipping_options');
    $customer = $bison->getCustomerInfo();

    if ($customer['shipping_option'] != '') {
      $selected_option = $customer['shipping_option'];
    } else {
      $shipping_option_keys = array_keys($shipping_options);
      $selected_option = $shipping_option_keys[0];
    }

    $shipping = $shipping_options[$selected_option]['price'] * 100;

    return $shipping;
  }

}

