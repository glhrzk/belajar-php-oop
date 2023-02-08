<?php

/**
 * final class, jika sudah dibuat final class maka tidak bisa di turunkan lagi classnya.
 */

class SocialMedia
{
    public string $name;
}


class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
}
