<?php
// To create a constant, use the define() function
// Create a constant with a case-sensitive name:
define("name", "Akhtar Hussain");
echo name;


// Create a constant with a case-insensitive name:
define("Email", "akhtarhussain97@gmail.com");
echo Email;

/* 
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

*/

// You can also create a constant by using the const keyword.
// You can also create a constant by using the const keyword.

const firstName = "Mohammed";
const lastName = "Akhtar Hussain";
