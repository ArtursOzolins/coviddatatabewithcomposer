<?php

namespace App;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\TabularDataReader;

class Statistics
{
    private string $path;
    private Reader $csvReader;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->csvReader = Reader::createFromPath($this->path, 'r');
        $this->csvReader->setDelimiter(';');
        $this->csvReader->setHeaderOffset(0);
    }

    public function getRecords(): TabularDataReader
    {
       return Statement::create()->process($this->csvReader);
    }
}
