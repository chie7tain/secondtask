<?php

//##### Database online
//define("DB_NAME", "blankstr_money");
//define("DB_HOSTNAME", "localhost");
//define("DB_USERNAME", "blankstr_money");
//define("DB_PASSWORD", "dsz1mvt631f6");

##### Database localhost
define("DB_NAME", "avengers");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");


//database connection
$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);

if (!$link) {
    die("could not connect to database: " . mysqli_error($link));
} else {
    $db_select = mysqli_select_db($link, DB_NAME);
    if (!$db_select) {
        die("could not connect to database: " . mysqli_error($link));
    }
}