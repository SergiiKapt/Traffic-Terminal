<?php

namespace DB;

class Db
{
    protected $file;

    public function __construct($table)
    {
        $this->file = file($table);
    }

    public function getRows()
    {
        return $this->file;
    }
}


