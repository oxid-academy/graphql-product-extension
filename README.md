
## About

This module is extending the Storefront Product object by adding two new fields: `itemNumber` and `subtitle`.
### itemNumber
A wrapper for the field `oxarticles__oxartnum` and shows the basic functionality.

### subtitle
Represent a custom field of the table `oxarticles_oxartnum`. To keep things simple an existing field is taken and the
value just changed.

## Install

```shell
composer require oxid-academy/graphql-product-extension
vendor/bin/oe-console oe:module:activate oe_graphql_storefront
vendor/bin/oe-console oe:module:activate oxac_graphql_productextension
```
  
[ ! ] The module oxid-academy/graphql-product must be deactivated:  
```shell
vendor/bin/oe-console oe:module:deactivate oxac_graphql_product
```


## Usage


You can use your favourite GraphQL client to explore the API, if you do not already have one installed, you may use 
[Altair GraphQL Client](https://altair.sirmuel.design/).
    
### Query
URL: `http://localhost/graphql/?shp=1&lang=0`
#### Request
```
query {
  product (productId: "05848170643ab0deb9914566391c0c63") {
    itemNumber,
    subtitle
  }
}
```
#### Response
```
{
  "data": {
    "product": {
      "itemNumber": "1402",
      "subtitle": "sadsadasd <-> dsadasdas"
    }
  }
}
```

## Sources

- Background knowledge about the architecture of the module and the GraphQL Modules, since it differs to the eShop
  Framework.  
  https://madewithlove.com/blog/software-engineering/hexagonal-architecture-demystified/
- The GraohQL Module documentation contains a tutorial which describes how to write own queries and mutations. Based of
  this documentation this example module was written.  
  https://docs.oxid-esales.com/interfaces/graphql/en/latest/tutorials/introduction.html
