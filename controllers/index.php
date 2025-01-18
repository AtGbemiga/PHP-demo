<?php

// Variables declared here will be available in the "required"

// echo $_SERVER['REQUEST_URI'];

// var_dump($_SERVER);
// The view will have access to all of the data in this file
view("index.view.php", [
  'heading' => 'Home'
]);


