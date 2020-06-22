<?php

    $parent = dirname($_SERVER['REQUEST_URI']);
    header("Location: $parent/");

?>