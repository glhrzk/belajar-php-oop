<?php

$matches = [];
$result = (bool)preg_match_all("/galih|rizki/i", "galih rizkiansyah", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|maneh|sia|bangsat|pantek/i", "***", "dasar lu anjing pantek bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Galih rizki, sedang belajar OOP PHP di programmer,zaman,now");
var_dump($result);
