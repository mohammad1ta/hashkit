# Hashkit

<div>
  <!-- Version -->
  <a href="https://marktext.github.io/website">
    <img src="https://badge.fury.io/gh/mohammad1ta%2Fhashkit.svg" alt="website">
  </a>
  <!-- Stars -->
  <a href="https://github.com/mohammad1ta/hashkit">
    <img src="https://img.shields.io/github/stars/mohammad1ta/hashkit.svg" alt="Stars">
  </a>
</div>

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
