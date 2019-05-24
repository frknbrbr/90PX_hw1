<?php

namespace Acme;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class FileIO
{

    private $spreadsheet;
    private $writer;
    /**
     * fileIO constructor.
     */
    public function __construct()
    {
        $this->spreadsheet = new Spreadsheet();
        $this->writer = new Xlsx($this->spreadsheet);
    }

    public function createExcelFromUsers($users) {
        $sheet = $this->spreadsheet->getActiveSheet();
        for($i = 0; $i < count($users); $i++) {
            $sheet->setCellValue('A'.strval($i+1) , $users[$i]->getFullName());
            $sheet->setCellValue('B'.strval($i+1) , $users[$i]->getEmail());
            $sheet->setCellValue('C'.strval($i+1) , $users[$i]->getPassword());
        }
        $this->writer->save('userss.xlsx');
    }
}

