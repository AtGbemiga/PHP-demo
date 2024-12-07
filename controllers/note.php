<?php

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$heading = "Notes";
// require 'functions.php';
require "views/note.view.php";