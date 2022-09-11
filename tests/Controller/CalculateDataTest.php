<?php

use App\Controller\CalculateData;
use App\Model\File;
use App\Model\ListOfFiles;
use PHPUnit\Framework\TestCase;

final class CalculateDataTest extends TestCase
{
    /**
     * @dataProvider sizeCases
     */
    public function testCalculateData_withFileThatHasOneFile_returnTotalSize($size, $val) : void
    {
        $this->assertEquals($val, $size);
    }

    public function sizeCases() : array
    {
        return [
            [CalculateData::sumFilesSizes(new File(1, 'docs', new ListOfFiles())), 1],
            [CalculateData::sumFilesSizes(new File(2, 'docs', new ListOfFiles())), 2],
            [CalculateData::sumFilesSizes(new File(0, 'docs', new ListOfFiles(new File(1, 'docs', new ListOfFiles())))), 1]
        ];
    }
}