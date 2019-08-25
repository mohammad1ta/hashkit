# hashkit
Hash Encode - Decode package

# Installation
Get encode package by composer:

    composer require hash-kit/utility

# Usage
First, use method in your class:

    use Hashkit\Utility\Utility;
    
Then use by calling encode method:

    $hash = Utility::encode( $string );
    
*In above method, **$string** is optional.*
