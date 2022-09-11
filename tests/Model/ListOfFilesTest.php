<?php

use App\Model\File;
use App\Model\ListOfFiles;
use PHPUnit\Framework\TestCase;

final class ListOfFilesTest extends TestCase
{
    /**
     * @dataProvider validFiles
     */
    public function testCreateListOfFiles_withVaildFiles_returnCollectionOfFiles($los): void
    {
        $this->assertTrue($los instanceof ListOfFiles);
    }

    public function validFiles(): array
    {
        return [
            [new ListOfFiles()],
            [new ListOfFiles(new File(10, "img", new ListOfFiles()))],
            [new ListOfFiles(new File(10, "img", new ListOfFiles(new File(12, 'docs', new ListOfFiles()))))]
        ];
    }
}
