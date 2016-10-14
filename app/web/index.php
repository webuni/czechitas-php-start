<?php

require_once __DIR__.'/../vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$response = new \Symfony\Component\HttpFoundation\Response();

$db = \RedBeanPHP\R::setup('sqlite:/'.__DIR__.'/../data.db')->getRedBean();

$mailer = new \Nette\Mail\SendmailMailer();
$message = new \Nette\Mail\Message();

$response->send();
