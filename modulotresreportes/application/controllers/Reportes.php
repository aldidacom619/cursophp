<?php 
/**
 * 
 */
class Reportes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->_is_logued_in();	    	
		$this->load->model('Usuarios_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pdf2');    	
		$this->load->helper('date'); 
	}
	function _is_logued_in()
	{
		$is_logued_in = $this->session->userdata('is_logued_in');
		if($is_logued_in != TRUE)
		{
			redirect('loguen');
		}
	}
	function index()
	{

	}
	function imprimirprueba()
	{
		
		    $pdf = new Pdf2();
            $pdf->AddPage('P','Letter',null,null);//CREACION DE PAGINA           
            $pdf->AddPage('P','Letter',null,null);//CREACION DE PAGINA        
	        $pdf->Output();
	}
	function imprimirusuarios()
	{		
		    $datos = $this->Usuarios_model->getusuarios();           
            $pdf = new Pdf2();
            $fecha_hoy = $pdf->fechacompleta();
            $fecha = date('Y-m-j H:i:s');
            $nuevafecha = strtotime ( 'hour' , strtotime ( $fecha ) ) ;
            $hora = date ( 'H:i:s' , $nuevafecha );
            $pdf->fecha = "Fecha Impresion:".$fecha_hoy ." Hrs:".$hora; 
            $pdf->xheader = 40;
            $pdf->yheader = 8;
            $pdf->cabecera = 1;           
            $sum = 0;
            $sum2 = 0;           
            $pdf->titulo = "REPORTE DE USUARIOS";
            $pdf->titulo1 = "";
            $pdf->moneda = "Bolivianos";            
            $pdf->AliasNbPages();
	        $pdf->SetAutoPageBreak(true, 40); 
	        $pdf->SetFont('Arial', 'B', 8);
	        $encabezados = array(
	            'Nro',
	            'NOMBRE',
	            'APELLIDO', 
	            'CORREO',
	            'TELEFONO'	            
	        );
	        $w = array(8,40,40,40,40);
	        foreach ($encabezados as $val){
	            $encabezados_[] = iconv('UTF-8', 'windows-1252', $val);
	        }	       
	        $pdf->setEncabezadoG($encabezados_);
	        $pdf->setWidthsG($w);	       
            $pdf->AddPage('P','Letter',null,null);//CREACION DE PAGINA           
	        $pdf->SetFont('Arial', '', 10);
	        $pdf->SetAligns(array('C','C','C','R','C'));
	        $pdf->SetFillColor(0);
	        $pdf->SetFillColor(255, 255, 255);
        	$pdf->SetTextColor(0);
        	$num = 1;
	        $pdf->SetDrawColor(255,255,255);
	        if(!empty($datos))
	        {
	            	foreach($datos as $valor)
		            {    		                 
		                 $s = array(
		                    $num++,
		                    iconv('UTF-8', 'windows-1252', $valor->nombre),
		                    iconv('UTF-8', 'windows-1252', $valor->apellido),
		                    iconv('UTF-8', 'windows-1252', $valor->correo),
		                    iconv('UTF-8', 'windows-1252', $valor->telefono),		                    
		                );

		                $pdf->Row($s, true, '', 5);	   
		            }
	        }
            $pdf->Ln(5);
            $pdf->Output();
	}
}
?>