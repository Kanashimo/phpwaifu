<p align="center"><img src="https://i.imgur.com/aUkPocx.png" width="400" alt="phpwaifu."></p>
<p align="center">
# About phpwaifu
Phpwaifu is API library for [waifu.pics](https://github.com/Waifu-pics/waifu-api "waifu.pics"), a platform and API for anime images. Now everyone can enjoy waifus on your website! I made it for fun but feel free to use it anywhere. In the future maybe I will add more features.
## Installation
Install phpwaifu via Composer:
```
composer require kanashimo/phpwaifu
```
## Usage
```php
// Require autoloader
require __DIR__ . '/vendor/autoload.php';

// Create phpwaifu instance
$phpwaifu = new \Kanashimo\phpwaifu\phpwaifu();

//  Make a request
$request = $phpwaifu->request([
    "type" => "sfw",
    "category" => "waifu"
]);
//  Output image URL
echo $request;
```
## Types and categories
Types and categories list is available at official [waifu.pics documentation](https://waifu.pics/docs "waifu.pics documentation")
## Error handling
```php
// Require autoloader
require __DIR__ . '/vendor/autoload.php';

// Create phpwaifu instance
$phpwaifu = new \Kanashimo\phpwaifu\phpwaifu();

//  Make a request
$request = $phpwaifu->request([
    "type" => "sfw",
    "category" => "waifu"
]);
// Print information about the error or output image URL if everything works
if($phpwaifu->err){
    echo $phpwaifu->err;
} else {
    echo $request;
}
```