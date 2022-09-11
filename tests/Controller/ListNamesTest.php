<?php

namespace Controller;

use App\Controller\ListNames;
use App\Model\File;
use App\Model\ListOfFiles;

class ListNamesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider fileSamples
     * @return void
     */
    public function testListNames_withValidFiles_returnListOfName($data, $val): void
    {
        $this->assertEquals($data, $val);
    }

    public function fileSamples(): array
    {
        return [
           [ListNames::getFileName(new File(10, 'docs', new ListOfFiles())), ['docs']],
           [ListNames::getFileName((new File(0, 'docs', new ListOfFiles(new File(12, 'doc1', new ListOfFiles()))))), ['docs', 'doc1']],
            [ListNames::getFileName(
                new File(0, 'docs', new ListOfFiles(
                    new File(0, 'doc1', new ListOfFiles(
                        new File(12, 'doc2', new ListOfFiles())
                    ))
                ))
            ), ['docs', 'doc1', 'doc2']]
        ];
    }
}
