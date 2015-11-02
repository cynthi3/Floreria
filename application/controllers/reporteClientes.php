<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ReporteClientes extends CI_Controller {
 
    public function index()
    {
        // Se carga el modelo alumno
        $this->load->model('modeloReporteClientes');
        // Se carga la libreria fpdf
        $this->load->library('Pdf');
 
        // Se obtienen los alumnos de la base de datos
        $clientes = $this->modeloReporteClientes->obtenerClientes();
 
        // Creacion del PDF
 
        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y mx  étodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
       
 
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
    $this->pdf->SetTitle("Lista de Clientes");  
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
 
        $this->pdf->Cell(15,7,'Id. Cliente','TBL',0,'C','1');
        $this->pdf->Cell(25,7,'Nombre','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Apellidos','TB',0,'L','1');
        $this->pdf->Cell(25,7,'Direccion','TB',0,'L','1');
        $this->pdf->Cell(40,7,'Tel. Celular','TB',0,'C','1');
        $this->pdf->Cell(40,7,'Tel. Casa','TB',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($clientes as $cliente) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(25,5,$cliente->idcliente,'B',0,'L',0);
            $this->pdf->Cell(25,5,$cliente->nombresCliente,'B',0,'L',0);
            $this->pdf->Cell(25,5,$cliente->apellidosCliente,'B',0,'L',0);
            $this->pdf->Cell(40,5,$cliente->direccionCliente,'B',0,'C',0);
            $this->pdf->Cell(25,5,$cliente->telefonoCelular,'B',0,'L',0);
            $this->pdf->Cell(25,5,$cliente->telefonoCasa,'B',0,'L',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(6);
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
        $this->pdf->Output("Lista de clientes.pdf", 'I');
    }
}