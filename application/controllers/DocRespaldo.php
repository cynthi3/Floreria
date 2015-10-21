<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('bookmarksModel');
    $this->load->library('pdf'); // Load library
    $this->pdf->fontpath = 'font/'; // Specify font folder
  }
  public function index()
  {
    // Generate PDF by saying hello to the world
    //$this->pdf->AddPage();
    
    //$this->pdf->Output("Ejemplo.pdf", 'I');
    // Se obtienen las compras de la base de datos
        $Libros = $this->bookmarksModel->VerLibros();
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
 
        $this->pdf->Cell(10,7,'NUM','TBL',0,'C','1');
        $this->pdf->Cell(30,7,'ISBN','TB',0,'L','1');
        $this->pdf->Cell(100,7,'Titulo','TB',0,'C','1');
        $this->pdf->Cell(55,7,'Nombre de usuario','TBR',0,'C','1');       
        $this->pdf->Ln();

        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($Libros->result() as $row) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(10,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(30,5,$row->ISBN,'B',0,'L',0);
            $this->pdf->Cell(100,5,$row->Titulo,'B',0,'L',0);
            $this->pdf->Cell(55,5,$row->Usuario,'BR',0,'L',0);
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
        $this->pdf->Output("Lista de libros comprados.pdf", 'I');
  }
  // More methods goes here
}
?>