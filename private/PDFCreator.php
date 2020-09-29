<?php

require_once __DIR__ . '/vendor/autoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mpdf = new /Mpdf/Mpdf();

$data =
