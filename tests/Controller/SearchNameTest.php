<?php

use App\Controller\SearchName;
use App\Model\File;
use App\Model\ListOfFiles;
use PHPUnit\Framework\TestCase;

class SearchNameTest extends TestCase
{
    public function testSearchName_withInvalidData_returnException(): void
    {
        $this->expectException(Exception::class);
        $search = new SearchName();
        $search->findElement(
            'docs',
            new File(15, 'images', new ListOfFiles())
        );
    }

    /**
     * @dataProvider searchSamples
     */
    public function testSeachName_withOneFile_returnDataOfFile($search, $val): void
    {
        $this->assertEquals($val, $search);
    }

    public function searchSamples(): array
    {
        return [
            [
                (new SearchName())->findElement(
                    'docs',
                    new File(20, 'docs', new ListOfFiles())
                ),
                20
            ],
            [
                (new SearchName())->findElement(
                    'doc1',
                    new File(0, 'docs', new ListOfFiles(new File(12, 'doc1', new ListOfFiles())))
                ),
                12
            ]
        ];
    }
}
