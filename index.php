<?php

use SwithError\SwithError;

require('./vendor/autoload.php');

(new SwithError([
    "message" => "plop",
    "title" => "controller truc introuvable"
]))->display();