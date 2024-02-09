<?php

namespace Geekbrains\Application1\Models;

class Date
{
    private string $date;

    public function __construct()
    {
        date('Y-m-d H:i:s', time())
        $this->date = 'date';
    }

    public function getDate() {
        return $this->date;
    }
}