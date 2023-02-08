<?php

/**
 * constructor adalah sebuah fungsi, yang dimana fungsi tersebut akan membuat class seolah olah menjadi fungsi
 * jadi gini, si class jadi wajib menggunakan paremeter saat dipanggil, layaknya fungsi yang mempunyai parameter
 * dan nilai dari paramter tersebut bisa digunakan menjadi data properties
 */

require_once "data/Person.php";

$glh = new Person("galih", "rajeg");

var_dump($glh);
