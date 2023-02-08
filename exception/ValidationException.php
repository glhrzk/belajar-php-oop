<?php

// exception adalah Hall eror, jadi kaya kita definisikan dulu errornya, semakin banyak semakin bagus (tapi menyesuaikan aja)
// biasanya jika kita ingin menggunakan exception kita harus mengimplement dari interface throw, tapi throw sangat panjang, maka kita bisa menggunakan turunan dari interface throw yaitu class exception

class ValidationException extends Exception
{
}
