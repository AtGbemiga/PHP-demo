<?php

$config = require('config.php');

$db = new Database($config['database']);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->fetchAll();

$heading = "Notes";
// require 'functions.php';
require "views/notes.view.php";