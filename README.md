
## About

This module is extending the Storefront Product DataType by adding two new fields: `OxAcItemNumber` and `OxAcProductIdentifier`.

### OxAcItemNumber
A wrapper for the field `oxarticles.oxartnum` to show the basic functionality.

### OxAcProductIdentifier
Simulates a custom field by combining two existing fields into a new value.

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
  product (productId: "dc5ffdf380e15674b56dd562a7cb6aec") {
     title
     sku
     OxAcItemNumber
     OxAcProductIdentifier
  }
}
```
#### Response
```
{
  "data": {
    "product": {
      "title": "Kuyichi Ledergürtel JEVER",
      "sku": "3503",
      "OxAcItemNumber": "3503",
      "OxAcProductIdentifier": "3503--Kuyichi Ledergürtel JEVER"
    }
  }
}
```

## Sources

- Background knowledge about the architecture of the module and the GraphQL Modules, since it differs from the eShop
  Framework.  
  https://madewithlove.com/blog/software-engineering/hexagonal-architecture-demystified/
- The GraphQL Module documentation contains a tutorial which describes how to write own queries and mutations. Based on
  this documentation this example module was written.  
  https://docs.oxid-esales.com/interfaces/graphql/en/latest/tutorials/introduction.html
