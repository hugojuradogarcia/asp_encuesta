<?php 

require_once('db_abstract_model.php'); 

class PersonalData extends DbAbstractModel{

	public $rows_dimension_personal_data 	= array();
	public $num_max_id;
	
	function __construct()
	{
		$this->db_name = 'aspen_encuestas';
	}

	function __destruct()
	{
		unset($this);
	}

	// SELECT COMMENTS
	
	public function getMaxId(  ){
		$this->query = "
				SELECT		MAX( asp_idempleado) as asp_idempleado
				FROM 		aspen_empleados
			";
		$this->get_results_from_query();

		return ( $this->rows[0]["asp_idempleado"] );
	}

	// INSERT COMMENTS
	public function setPersonalData( $personal_data = array() )
	{
			
		foreach ( $personal_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		$this->query = "
						INSERT INTO 	aspen_empleados
						( asp_nombre , asp_puesto , asp_ingreso , asp_edad , asp_date , asp_pasaporte , asp_visa , asp_visa_paises )
						VALUES 
						( '$asp_nombre' , '$asp_puesto' , '$asp_ingreso', '$asp_edad' , '$asp_date' , '$asp_pasaporte' , '$asp_visa' , '$asp_visa_paises' )
						";
		$this->execute_single_query();

		$this->getMaxId();

	}

}


?>