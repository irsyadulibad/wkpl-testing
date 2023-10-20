<?php

namespace Test;

// Meload class WordCount yang telah dibuat pada folder /src
use App\WordCount;

// Meload abstract class dari PHPUnit
use PHPUnit\Framework\TestCase;

class WordCountTest extends TestCase
{
    /**
     * Test untuk menghitung apakah fungsi countWords telah sesuai
     *
     * Kelas wordcount diinisialisasi menggunakan fungsi new WordCount
     * Kemudian memanggil fungsi countWords dengan parameter kalimat
     * Jumlah kata ditest harus sejumlah 4 dengan assertion
     */
    public function testCountWords()
    {
        $wc = new WordCount;
        $sentence = "My name is Irsyad";

        $wordCount = $wc->countWords($sentence);
        $this->assertEquals(4, $wordCount);
    }
}
