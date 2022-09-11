<?php

namespace App\Controller;

use App\Model\File;
use App\Model\ListOfFiles;

class CalculateData
{
    public static function sumFilesSizes(File $file) {
        if ($file->getData() > 0) {
            return $file->getData();
        } else {
            return self::sumFileLos($file->getLos());
        }
    }

    public static function sumFileLos(ListOfFiles $los) : int
    {
        if (count($los) == 0 || empty($los)) {
            return 0;
        } else {
            $size = self::sumFilesSizes($los[0]);
            unset($los[0]);
            return $size + self::sumFileLos($los);
        }
    }
}
