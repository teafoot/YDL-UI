<?php
//md5 hash of "password"
$authArray = array(
    "user1"=>"5f4dcc3b5aa765d61d8327deb882cf99",
    "user2"=>"5f4dcc3b5aa765d61d8327deb882cf99",
);

//These folders will not be deleted when space is freed. IMPORTANT!
$whiteListedFolders = array(
    "js",
    "css",
    "php",
);

//Delete old folders after x hours
$hours = 0.5; // 0 to disable

//timezone
date_default_timezone_set('Europe/Berlin');

//adding these to the end of the youtube-dl command
$additionalParams = " --no-progress --no-warnings --embed-thumbnail --add-metadata";