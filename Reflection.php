<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "glh";
// ValidationUtil::validate($loginRequest);

// ValidationUtil::validateReflection($loginRequest);

// berguna banget jika kita mempunya object dengan class yang berbeda, untuk pengecekan login, order dll
// jadi cukup buat satu bisa dipakai di semua object.


// pembuktian
class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "glh";
$register->address = "glh";
$register->email = "galihrizki@gmail.com";


// jika di test satu satu property diatas tanpa di sett atau dibuat null maka dia akan ketangkap exception, tinggal kita tangkap pakai try cath
ValidationUtil::validateReflection($register);
