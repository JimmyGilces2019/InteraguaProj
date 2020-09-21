<?php

namespace App\Http\Controllers;
 
use App\Exports\EquipoExport;

class PDFController extends Controller
{
    public function PDFGenerate(){
        //PARAMETROS DE REPORTES
        //$tbl_reporte = \DB::table('TBL_CABECERA_REPORTE')
        //                 ->join('TBL_DETALLE_REPORTE','TBL_CABECERA_REPORTE.id_cabecera_reporte','=','TBL_DETALLE_REPORTE.id_cabecera_reporte')
        //                 ->select('TBL_CABECERA_REPORTE.titulo','TBL_DETALLE_REPORTE.detalle')
        //                 ->where('TBL_CABECERA_REPORTE.id_cabecera_reporte','=','1')->get();


        //TABLA DE INFORMACION 
        $TBL_CRONOGRAMA_MANTENIMIENTO = \DB::table('TBL_CRONOGRAMA_MANTENIMIENTO')->get(); 

        $pdf = \PDF::loadView('reports.prueba', ['TBL_CRONOGRAMA_MANTENIMIENTO'=>$TBL_CRONOGRAMA_MANTENIMIENTO]);

        //return $tbl_reporte;
        
        return $pdf->download('REP_MANT_EQPER_2020.pdf'); 
    }

    public function CSVGenerate(){ 
        return \Excel::download(new EquipoExport,'REP_CSV_FORMAT_EQUIPOS_TEST.csv');
    }
}