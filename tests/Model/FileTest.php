<?php

use App\Model\File;
use App\Model\ListOfFiles;
use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    public function testFIle_withValidData_proceedFileObjectWithParams(): void
    {
        $file = new File(15, "Images", new ListOfFiles());
        $this->assertTrue($file instanceof File);
        $this->assertEquals(15, $file->getData());
        $this->assertEquals('Images', $file->getName());
        $this->assertTrue($file->getLos() instanceof ListOfFiles);
        $this->assertEquals(new ListOfFiles(), $file->getLos());
    }
}
