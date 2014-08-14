<?php

require 'tw-config.php'; // Define configuration constants
require 'core/tw-init.php'; // Set up environment

$tw = $dic->create('Talkwork\\App');

// constructor params: input, router, storage.
$tw = new \Talkwork\App($in,
    new \Talkwork\Router($in->route, DEF_MODULE, DEF_RESTYPE, DEF_RESID)
    //new \Talkwork\TwDB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_TBLPREFIX)
);
echo $tw->out();
