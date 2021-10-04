<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Files\LocalTemporaryFile;
use Maatwebsite\Excel\Excel;
use App\PemeriksaanAwal;


class pendahuluanExport  implements WithEvents
{
    
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function registerEvents(): array
    {
        return [
            BeforeWriting::class => function(BeforeWriting $event) {
                $templateFile = new LocalTemporaryFile(public_path('excel/fasependahuluan.xlsx'));
                $event->writer->reopen($templateFile, Excel::XLSX);
                $sheet1 = $event->writer->getSheetByIndex(0);

                $this->pendahuluan($sheet1);
                
                $event->writer->getSheetByIndex(0)->export($event->getConcernable()); 

                return $event->getWriter()->getSheetByIndex(0);
            },
        ];
    }

    private function pendahuluan($sheet){
            $data = PemeriksaanAwal::where('id','=',$this->id)->with('pesanan')->first();
            $sheet->setCellValue('F23', $data->luas_areal);
            $sheet->setCellValue('F24', $data->pesanan->tgl_sebar);
            $sheet->setCellValue('G39', $data->letak_areal);
            $sheet->setCellValue('G40', $data->isolasi);
            $sheet->setCellValue('G41', $data->asal_jumlah_benih);
            $sheet->setCellValue('M39', $data->luas_areal);
            $sheet->setCellValue('M40', $data->sejarah_lapang);
            $sheet->setCellValue('M41', $data->asal_jumlah_benih);


    }




}
