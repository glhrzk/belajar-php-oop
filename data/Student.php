<?php

class Student
{
    public string $id;
    public string $name;
    public string $value;
    private string $sample;

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }


    // fungsi untuk menghapus / mengunset propertie, bisa beberapa propertie sekaligus
    // ketika clone digunakan

    public function __clone()
    {
        unset($this->sample);
    }


    // magic function, yaitu merubah behavior fungction yang ada sebelumnya.
    // magic fungtion beberapa di antaranya toString toArray Construct Destruct
    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }


    // invoke, kemampuan membuat object menjadi seperti function ketika dipanggil.
    // tetapi yang dipanggil adalah si function invoke
    public function __invoke(...$argument): void
    {
        $join = join(",", $argument);
        echo "Invoke student with argument $join";
    }


    // debug info adalah parent dari vardump, kita bisa mengoveride fungsi dari vardump
    // jadi ketika kita menggunakan var_dump maka akan teroveride dengan fungsi dibawah
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "glhrzk",
            "version" => "1.0.1"
        ];
    }
}
