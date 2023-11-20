<?php
/* 
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
*/

// String: 
// A string can be any text inside quotes. You can use single or double quotes
$name = "Mohammed Akhtar Hussain"; // everything quoted inside "" is string.

// Integer: 
// An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
$age = 25; // non-decimal numbers in php are called integers

// Float: 
// A float (floating point number) is a number with a decimal point or a number in exponential form.
$CGPA = 3.5; // a decimal point number is called float/floating number in php

// Boolean:
// A Boolean represents two possible states: TRUE or FALSE.
$isMarried = false; // value of true or false is treated as boolean in php

// Array:
// An array stores multiple values in one single variable.
$subjects = array("Math", "Physics", "Chemistry", "Biology");

// Object:
// Classes and objects are the two main aspects of object-oriented programming. A class is a template for objects, and an object is an instance of a class. When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

class Address
{
  public $street;
  public $city;
  public $postCode;

  public function __construct($street, $city, $postCode)
  {
    $this->street = $street;
    $this->city = $city;
    $this->postCode = $postCode;
  }

  public function myAddress()
  {
    return "My Address is " . $this->street . "street, " . $this->city . "city " . $this->postCode;
  }
}

// NULL:
// Null is a special data type which can have only one value: NULL. A variable of data type NULL is a variable that has no value assigned to it.
$bloodGroup = null;
