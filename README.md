# DShield [![DShield](https://img.shields.io/badge/Version-1.0-blue)](https://github.com/0x5151/dshield)
> A code for securing your strings

Encoder and Decoder your string with php

## Example
Encoder and Decoder :
```
<?php
include 'dshield.php';
$DShield = new DShield();

$encoded_string = $DShield->encode("Hello World");
// print_r($encoded_string);
$decoded_string = $DShield->decode($encoded_string); // Hello World
// print_r($decoded_string);
```
## Screenshot
[![DShield](https://raw.githubusercontent.com/0x5151/DShield/main/f206c5bc35e742b69e4d3409d906a2da.png)](https://github.com/0x5151/dshield)
