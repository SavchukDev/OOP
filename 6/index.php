<?php

require_once "File.php";

$file = new File(__DIR__ . '/file.txt');

$file->write('TEST');