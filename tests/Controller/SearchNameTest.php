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

    public function testSeachName_withOneFile_returnDataOfFile(): void {
        $search = new SearchName();
        $fileData = $search->findElement(
            'docs',
            new File(25, 'docs', new ListOfFiles())
        );

        $this->assertEquals(25, $fileData);
    }
}
