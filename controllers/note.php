<?php

$config = require('config.php');

$db = new Database($config['database']);

// Get the id from the query
$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->fetch();
$heading = 'Note';

require "views/note.view.php";