<?php

// sekarang kita buat error error mana yang akan dijadikan exception
/**
 * contoh dibawah kita membuat/mendifine 4 exception dengan class exception dan class validationException (turunan dari class exception)
 */


function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is null");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Username is null");
    } elseif (trim($request->username) == "") {
        throw new Exception("Username is empty");
    } elseif (trim($request->password) == "") {
        throw new Exception("Password is empty");
    }
}
