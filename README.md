# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## API DOCS

### Products

#### Get product

(GET) baseurl/api/products/{id}

Example response:

{
 id: 1,
 name: "Product 1",
 quantity: 0
}

#### List products

(GET) baseurl/api/products

Example response:
[
{
 id: 1,
 name: "Product 1",
 quantity: 0
},
{
 id: 2,
 name: "Product 2",
 quantity: 2
}
]


### Movements
#### Store movement

(POST) baseurl/api/movements

Required parameters: 
* product_id
* quantity

Example:

await axios.post("baseurl/api/movements", [product_id: 1, quantity: -1])

await axios.post("baseurl/api/movements", [product_id: 1, quantity: 1])

