<?php

namespace App\Model;

use ArrayObject;
use App\Model\File;
use Exception;

class ListOfFiles extends ArrayObject
{
    public function __construct(File ...$file)
    {
        parent::__construct($file);
    }

    public function append(mixed $value): void
    {
        if ($value instanceof File) {
            parent::append($value);
        } else {
            throw new Exception("Cannot Append a non File Object to a " . __CLASS__);
        }
    }

    public function offsetSet(mixed $key, mixed $value): void
    {
        if ($value instanceof File) {
            parent::offsetSet($key, $value);
        } else {
            throw new Exception("Cannot add a non File Object to a " . __CLASS__);
        }
    }
}
