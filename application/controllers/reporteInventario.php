<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ReporteInventario extends CI_Controller {
 
    public function index()
    {
        // Se carga el modelo alumno
        $this->load->model('modeloReporteInventario');
        // Se carga la libreria fpdf
        $this->load->library('pdf');
 
        // Se obtienen los alumnos de la base de datos
        $inventario = $this->modeloReporteInventario->obtenerInventario();
 
        // Creacion del PDF
 
        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
 
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Invenatio Florinet");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 11);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
 
        $this->pdf->Cell(30,7,'Tipo de Flor','TBL',0,'C','1');
        $this->pdf->Cell(25,7,'Precio','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Cantidad','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Provedor','TB',0,'L','1');
        $this->pdf->Cell(40,7,'Fecha Compra','TB',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($inventario as $flores) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(25,5,$inventario->nombreProducoto,'B',0,'L',0);
            $this->pdf->Cell(25,5,$inventario->precioCompra,'B',0,'L',0);
            $this->pdf->Cell(25,5,$inventario->cantidad,'B',0,'L',0);
            $this->pdf->Cell(40,5,$inventario->provedor,'B',0,'C',0);
            $this->pdf->Cell(25,5,$inventario->fechaCompra,'B',0,'L',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(5);
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
        $this->pdf->Output("Inventario florinet.pdf", 'I');
    }
}

