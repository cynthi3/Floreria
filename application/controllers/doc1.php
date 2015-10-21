<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc1 extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('bookmarksModel');
    $this->load->library('pdf'); // Load library
    $this->pdf->fontpath = 'font/'; // Specify font folder
  }
  public function index()
  {
    // Se obtienen las compras de la base de datos
        $libros = $this->bookmarksModel->VerLibros();
    // Creacion del PDF
        // Agregamos una página
        $this->pdf->AddPage();
        //Se define un formato de fuente: Arial, negritas, tamaño 16
        $this->pdf->SetFont('Arial','B',16);
        //Se imprime el titulo del archivo
        $this->pdf->Cell(40,10,'Cantidad de Libros');
        //se define un salto de linea
        $this->pdf->Ln(30);
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetLeftMargin(10);
        $this->pdf->SetRightMargin(0);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $this->pdf->Cell(20,7,'ISBN','TBL',0,'L','1');
        $this->pdf->Cell(60,7,'Titulo','TB',0,'C','1');
        $this->pdf->Cell(35,7,'Autor','TB',0,'C','1');
        $this->pdf->Cell(35,7,'Editorial','TB',0,'C','1');
        $this->pdf->Cell(15,7,'Paginas','TB',0,'C','1');
        $this->pdf->Cell(15,7,'Precio','TBR',0,'C','1');
        $this->pdf->Cell(15,7,'Cantidad','TBR',0,'C','1');       
        $this->pdf->Ln();

        // La variable $x se utiliza para mostrar un número consecutivo
        foreach ($libros->result() as $row) {
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(20,5,$row->ISBN,'BL',0,'L',0);
            $this->pdf->Cell(60,5,$row->Titulo,'B',0,'L',0);
            $this->pdf->Cell(35,5,$row->Autor,'B',0,'L',0);
            $this->pdf->Cell(35,5,$row->Editorial,'B',0,'L',0);
            $this->pdf->Cell(15,5,$row->Paginas,'B',0,'C',0);
            $this->pdf->Cell(15,5,$row->Precio,'BR',0,'C',0);
            $this->pdf->Cell(15,5,$row->Cantidad,'BR',0,'C',0);
            //Se agrega un salto de linea
            $this->pdf->Ln();
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Lista de libros.pdf", 'I');
  }
  // More methods goes here
}
?>