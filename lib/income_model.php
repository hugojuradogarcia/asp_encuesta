<?php 

require_once('db_abstract_model.php'); 

class Income extends DbAbstractModel{

	public 	$rows_dimension_income 	= array();

	
	function __construct()
	{
		$this->db_name = 'aspen_encuestas';
	}

	function __destruct()
	{
		unset($this);
	}

	// SELECT COMMENTS
	/*
	public function getPersonalData( $asp_nombre ){
		$this->query = "
				SELECT		*
				FROM 		aspen_encuestas
				WHERE 		asp_nombre = '$asp_nombre'
			";
		$this->get_results_from_query();
		$this->rowComments = count( $this->rows);

		$i = 0;
		if ( count( $this->rows ) > 0 ): 
			while ( $i < count( $this->rows ) ):
				$this->rows_dimension_comments[ $i ]["idComments"] 	 		= $this->rows[$i]["idComments"];
				$this->rows_dimension_comments[ $i ]["TitleComments"] 		= $this->rows[$i]["TitleComments"];
				$this->rows_dimension_comments[ $i ]["TextComments"] 		= $this->rows[$i]["TextComments"];
				$this->rows_dimension_comments[ $i ]["NameComments"] 		= $this->rows[$i]["NameComments"];
				$this->rows_dimension_comments[ $i ]["EmailComments"] 		= $this->rows[$i]["EmailComments"];
				$this->rows_dimension_comments[ $i ]["DateComments"] 		= $this->rows[$i]["DateComments"];
				$this->rows_dimension_comments[ $i ]["Articles_idArticles"] = $this->rows[$i]["Articles_idArticles"];
				
				$i ++;
			endwhile;
		endif;
	}*/

	// INSERT COMMENTS
	public function setIncome( $income_data = array() )
	{
			
		foreach ( $income_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		echo $this->query = "
						INSERT INTO 	aspen_egresos
						( asp_tel , asp_tel_monto , asp_movil , asp_movil_monto , asp_gas , asp_gas_monto , 
						  asp_predial , asp_predial_monto , asp_mant_carro , asp_mant_carro_monto , asp_ade_tarj , asp_ade_tarj_monto,
						  asp_ade_prestamo , asp_ade_prestamo_monto , asp_ade_auto , asp_ade_auto_monto,
						  asp_ade_ahorro , asp_gasto_mensual_monto , asp_ing_adicionales_monto ,
						  aspen_empleados_asp_idempleado )
						VALUES 
						( '$asp_tel' , '$asp_tel_monto' , '$asp_movil' , '$asp_movil_monto' , '$asp_gas' , '$asp_gas_monto' , 
						  '$asp_predial' , '$asp_predial_monto' , '$asp_mant_carro' , '$asp_mant_carro_monto' , '$asp_ade_tarj' , '$asp_ade_tarj_monto',
						  '$asp_ade_prestamo' , '$asp_ade_prestamo_monto' , '$asp_ade_auto' , '$asp_ade_auto_monto',
						  '$asp_ade_ahorro' , '$asp_gasto_mensual_monto' , '$asp_ing_adicionales_monto' ,
						  '$aspen_empleados_asp_idempleado' )
						 ";
		$this->execute_single_query();

	}

}


?>