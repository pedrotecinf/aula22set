<?php
/**
 * Created by PhpStorm.
 * User: anony
 * Date: 15/09/16
 * Time: 10:07
 */


$Host="LocalHost";

$USER="root";
$PASSWORD="root";

$DATABASE="ATV_PWEB";

$conn=new PDO('mysql:host='. $Host.';dbname='.$DATABASE, $USER, $PASSWORD);