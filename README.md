
# Bison Physical Products Shipping Add-on

# What is this

'bison_physical_products' is a custom shipping method add-on for [Bison](https://builtwithbison.com) that removes the shipping cost when there are no physical products in the cart.

If there are physical products in the cart than the shipping cost is calculated using the `multiple_flat_rate` method. 

This add-on also provides helper tags to show and hide shipping details during checkout.


# Installation

Copy the 'physical_products' folder to the `_add-ons` folder in your Statamic website.

In your Bison config, enter the add-on name for the shipping method

```
shipping_method` to `physical_products`
```

# Helpers tags

Use it for conditionals

```
{{ if {bison_physical_products} }}
  You have physical products in your cart
  {{ else }}
  You have no physical products in your cart
{{ /if}}

```

You might also want to show content when there are downloadable products in your cart.

```
{{ if {bison_physical_products:has_downloads} }}
  You have downloads in your cart
{{ /if}}

```
