<?php

namespace App\Model;

class File
{
    private int $data;
    private string $name;
    private ListOfFiles $los;

    public function __construct(int $data, string $name, ListOfFiles $los = null)
    {
        $this->data = $data;
        $this->name = $name;
        $this->los = $los;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLos() : ListOfFiles
    {
        return $this->los;
    }
}
