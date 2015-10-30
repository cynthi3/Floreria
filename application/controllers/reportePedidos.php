<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ReportePedidos extends CI_Controller {
 
    public function index()
    {
        // Se carga el modelo alumno
        $this->load->model('modeloReportePedidos');
        // Se carga la libreria fpdf
        $this->load->library('pdf');
 
        // Se obtienen los alumnos de la base de datos
        $pedidos = $this->modeloReportePedidos->obtenerPedidos();
 
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
        $this->pdf->SetTitle("Lista de Pedidos");
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
 
        $this->pdf->Cell(15,7,'Id. Pedido','TBL',0,'C','1');
        $this->pdf->Cell(25,7,'Id. Cliente','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Descripcion','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Direccion Entrega','TB',0,'L','1');
        $this->pdf->Cell(40,7,'Fecha Entrega','TB',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($pedidos as $pedidos) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(25,5,$pedidos->idpedido,'B',0,'L',0);
            $this->pdf->Cell(25,5,$pedidos->cliente_idcliente,'B',0,'L',0);
            $this->pdf->Cell(25,5,$pedidos->descripcion,'B',0,'L',0);
            $this->pdf->Cell(40,5,$pedidos->direccionEntrega,'B',0,'C',0);
            $this->pdf->Cell(25,5,$pedidos->fechaEntrega,'B',0,'L',0);
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
        $this->pdf->Output("Lista de pedidos.pdf", 'I');
    }
}