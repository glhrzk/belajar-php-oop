<?php


class ValidationUtil
{

    // function static validation tanpa reflection
    // dibuat static agar bisa langsung dipakai
    public static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is not set");
        } elseif (!isset($request->password)) {
            throw new ValidationException("password is not set");
        } elseif (is_null($request->username)) {
            throw new ValidationException("username is null");
        } elseif (is_null($request->password)) {
            throw new ValidationException("password is null");
        }
    }


    // function static validation dengan reflection
    // dibuat static agar bisa langsung dipakai
    // general, bisa dipakai di object hasil class manapun.
    public static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
                // dijadikan exception, dengan object request
            } elseif (!$property->getValue($request)) {
                throw new ValidationException("$property->name is null");
                // dijadikan exception, dengan object request
            }
        }
    }
}
