<?php

namespace App;

class WordCount
{
    public function countWords($sentence): int
    {
        return count(explode(" ", $sentence));
    }
}
