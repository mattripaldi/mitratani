<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Files\LocalTemporaryFile;
use Maatwebsite\Excel\Excel;
use App\pemeriksaan_lanjut;


class fasemasakExport  implements WithEvents
{
    
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function registerEvents(): array
    {
        return [
            BeforeWriting::class => function(BeforeWriting $event) {
                $templateFile = new LocalTemporaryFile(public_path('excel/fasemasak.xlsx'));
                $event->writer->reopen($templateFile, Excel::XLSX);
                $sheet1 = $event->writer->getSheetByIndex(0);

                $this->fasemasak($sheet1);
                
                $event->writer->getSheetByIndex(0)->export($event->getConcernable()); 

                return $event->getWriter()->getSheetByIndex(0);
            },
        ];
    }

    private function fasemasak($sheet){
            $data = pemeriksaan_lanjut::where('pemeriksaan_awal_id','=',$this->id)
            ->where('jenis_pemeriksaan','=','Masak')
            ->with('pemeriksaanawal.pesanan.lahan_pelanggan')
            ->first();
            $sheet->setCellValue('F23', $data->pemeriksaanawal->luas_areal);
            $sheet->setCellValue('F24', $data->pemeriksaanawal->pesanan->tgl_sebar);
            $sheet->setCellValue('F30', $data->isolasi_barat);
            $sheet->setCellValue('F31', $data->isolasi_utara);
            $sheet->setCellValue('F32', $data->barier);
            $sheet->setCellValue('K30', $data->isolasi_timur);
            $sheet->setCellValue('K31', $data->isolasi_selatan);
            $sheet->setCellValue('K32', $data->waktu);
            $sheet->setCellValue('L43', $data->inbrida_cvl1 == null? "0":$data->inbrida_cvl1);
            $sheet->setCellValue('L44', $data->inbrida_cvl2 == null? "0":$data->inbrida_cvl2);
            $sheet->setCellValue('L45', $data->inbrida_cvl3 == null? "0":$data->inbrida_cvl3);
            $sheet->setCellValue('L46', $data->inbrida_cvl4 == null? "0":$data->inbrida_cvl4);

    }




}
