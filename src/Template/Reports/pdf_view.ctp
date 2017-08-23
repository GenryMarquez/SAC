<?php
//echo $connection;
//importamos la libreria tcpdf
//require_once  ROOT. DS.  'vendor'. DS. 'tcpdf_min'. DS. 'tcpdf.php';

//creamos una clase para nuestro pdf en el cual declaramos el header y footer que utilizar
class xtcpdf extends TCPDF {
	//Header personalizado
	public function Header() {
	   // $escudo = 'img/tcpdf_logo.png';
	   // $this->Image($escudo, 25, 5, 15, '', 'PNG', '', '', false, 300, '', false, false, 0, false, false, false);   
	    
	    $this->SetFont('helvetica', 'B', 20);
	    $this->Cell(0, 0, 'Resultados', 0, false, 'C', 0, '', 0, false, 'T', 'M');

	    //$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	    
	}

	//footer personalizado
	public function Footer() {
	    // posicion
	    $this->SetY(-15);
	    // fuente
	    $this->SetFont('helvetica', 'I', 8);
	    // numero de pagina
	    $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'T');   
	    
	}

	public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(40, 35, 40, 45);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        print_r($header);
        /*foreach($data as $row) {
        	print_r($row);
            $this->Cell($w[0], 6, $row['nombre_detresultado'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row['result'], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, number_format($row['lower']), 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, number_format($row['upper']), 'LR', 0, 'R', $fill);
            $this->Cell($w[4], 6, number_format($row['unit']), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');*/
    }
}//termina la clase xtcpdf

//creamos una instancia del pdf
$pdf  = new xtcpdf ('P', 'mm', 'Letter', TRUE, 'UTF-8', FALSE);
 
 
$pdf->SetCreator('Hugo - Kiuvox');
$pdf->SetAuthor('Hugo Lizama');
$pdf->SetTitle('Ejemplo de PDF');
$pdf->SetSubject('Ejemplo de PDF');
 
 
//establecer margenes
$pdf->SetMargins(15, 25, 15);
$pdf->SetHeaderMargin(5);
 
//Indicamos la creación de nuevas paginas automaticas al crecer el contenido
$pdf->SetAutoPageBreak(true, 15);
 
//agregamos la primera hoja al pdf
//$pdf->AddPage ();
$pdf->AddPage('L', 'A5');
 
$pdf->SetFont ('helvetica', 'B', 10);
 
//agregamos un texto cualquiera para prueba

/*for($i=0; $i<100; $i++){
  $pdf->MultiCell(0, 0, $results, 0, 'L', false, 1, '', '', true, 0, false, true, 0, 'T', false);
}*/
//pr($results[0]['invoice']);
//$pdf->MultiCell(0, 0, 'Factura: '.$results[0]['invoice'], 0, 'L', false, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->Cell(45, 0, 'Factura: '.$results[0]['invoice'], 1, 1, 'L', 0, '', 1);
$pdf->Cell(45, 0, 'Nombre: '.$results[0]['nombre_paciente'], 1, 1, 'L', 0, '', 2);
$pdf->Cell(45, 0, 'Rif: '.$results[0]['rif_paciente'], 1, 1, 'L', 0, '', 3);
$pdf->Cell(45, 0, 'TEST CELL STRETCH: force spacing', 1, 1, 'L', 0, '', 4);
$pdf->Ln(5);


$header = array('Examen', 'Resultado', 'Inferior', 'Superior', 'Unidad');
//$data = $results;
$pdf->ColoredTable($header);
/*foreach ($results as $value) {
	//print_r($value['id_resxam']);
	$pdf->MultiCell(0, 0, $value['nombre_detresultado'].'   '.$value['result'].'   '.$value['lower'].'   '.$value['upper'].'   '.$value['unit'], 0, 'L', false, 1, '', '', true, 0, false, true, 0, 'T', false);
}*/
 
//Cerramos el pdf
$pdf->lastPage ();
 
//indicamos el nombre del pdf y que queremos forzarlo a descargar en el navegador
$pdf->Output('reporte.pdf', 'I');

?>