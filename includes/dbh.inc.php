<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "eldererajinMenji99";
$dBName = "klik_database";

$conn = mysqli_connect($serverName, root, eldererajinMenji99, $dBName, 3307);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


