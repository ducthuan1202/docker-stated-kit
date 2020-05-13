<?php
session_start();

$_rootPath = dirname(__DIR__);

include $_rootPath . "/vendor/autoload.php";

\App\Service\Something::say();