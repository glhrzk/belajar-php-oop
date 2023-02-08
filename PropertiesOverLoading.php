<?php

/**
 * overloading properties adalah kemampuan membuat propertie jika properti tersebut tidak ada di dalam class yang dipakai,
 * overloading bisa digunakan ketika get (memanggil), set (membuat), isset (mengecek), unset (mengundo/menghapus)
 * intinya jadi dinamis, kalau gk ada dia dibuat, dan nantinya bisa dipanggil jika disimpannya dalam array
 */

class Zero
{

    private array $properties = [];


    // ini properties magic function, tidak ada properties tapi di panggil.
    public function __get($name)
    {
        return $this->properties[$name];
        // echo "mengambil properties $name" . PHP_EOL;
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
        // echo "membuat properties $name, dengan data $value" . PHP_EOL;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
        // echo "Isset $name";
        // return false;
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
        // echo "Unset $name";
    }

    /**
     * separator ============================================================== separator
     */

    // ini properties fungtion, tidak ada function tapi di panggil.
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "galih";
$zero->lastName = "rizki";

echo $zero->firstName . PHP_EOL;
echo $zero->lastName . PHP_EOL;

var_dump($zero);

$zero->sayHello("galih");
Zero::sayHello("rzk");
