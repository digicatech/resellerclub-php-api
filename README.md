# Description
This client is used to interact with one of the following APIs:
 * ResellerClub ([Docs](https://resellerclub.webpropanel.com/kb/answer/751))
 
Available API requests: 
* Actions
* Billing
* Contacts
* Customers
* Dns
* Domains
* Orders
* Products
* Sslcert


## Installation
```console
composer require digicatech/resellerclub-php-api
```
OR GITHUB REPOSITORY

`composer.json`:
```
"repositories": [
      {
          "type": "vcs",
          "url":  "https://github.com/digicatech/resellerclub-php-api"
      }
  ],
  "require": {
    "digicatech/resellerclub-php-api": "dev-main"
  }
  ```


OR LOCAL PATH

`composer.json`:
```
"repositories": [
        {
            "type": "path",
            "url":  "resellerclub-php-api"
        }
],
"require": {
        "digicatech/resellerclub-php-api": "dev-main"
}
```



## Usage Example
`live mode`:
```php
use digicatech\ResellerClub\ResellerClub;

$resellerClub = new ResellerClub('<userId>', '<apiKey>');
$resellerClub->domains()->available(['google', 'example'], ['com', 'net']);
```


`test mode`:
```php
use digicatech\ResellerClub\ResellerClub;

$resellerClub = new ResellerClub('<userId>', '<apiKey>',true);
$resellerClub->domains()->available(['google', 'example'], ['com', 'net']);
```
Note: All functions return a raw response from API.


### Disclaimer
Many thanks to [Ahmet Bora](https://github.com/afbora "Ahmet Bora"). This repository based on his [ResellerClub PHP SDK](https://github.com/afbora/resellerclub-php-sdk "ResellerClub PHP SDK") repository.
