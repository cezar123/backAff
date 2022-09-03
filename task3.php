<?php

namespace SessionProvider;

if (! session_id()) {
    session_start();
}

function appendRand(): void
{
    if (isset($_COOKIE['data'])) {
        $data = $_COOKIE['data'];
    } else {
        $data = "";
    }

    $data .= rand(0, 9);
    $_SESSION['data'] = $data;
}

appendRand();
echo $_SESSION['data'];
