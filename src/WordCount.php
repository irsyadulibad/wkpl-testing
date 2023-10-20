<?php

namespace App;

class WordCount
{
    /**
     * Menghitung jumlah kata yang terdapat pada kalimat
     *
     * Fungsi ini menggunakan explode() untuk memisahkan kalimat menjadi array
     * Array tersebut berisi kata yang telah dipisah menggunakan spasi
     * Kemudian jumlah array kata dihitung menggunakan count()
     *
     * @param string $sentence - Kalimat yang akan dihitung
     * @return int - Jumlah kata
     */
    public function countWords(string $sentence): int
    {
        return count(explode(" ", $sentence));
    }
}
