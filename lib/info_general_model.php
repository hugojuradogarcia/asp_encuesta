<?php 

require_once('db_abstract_model.php'); 

class InfoGeneral extends DbAbstractModel{

	public 	$rows_dimension_info_general 	= array();


	
	function __construct()
	{
		$this->db_name = 'aspen_encuestas';
	}

	function __destruct()
	{
		unset($this);
	}

	

	// INSERT COMMENTS
	public function setInfoGeneral( $info_general_data = array() )
	{
			
		foreach ( $info_general_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		$this->query = "
						INSERT INTO 	aspen_inf_gral
						( asp_inmueble , asp_edo_civil , asp_dep_eco , asp_dep_conyuge_edad , asp_dep_hijos_edad , asp_dep_padres_edad , asp_dep_nietos_edad , 
						  asp_trab_conyuge , asp_trab_conyuge_monto , asp_trab_hijos , asp_trab_hijos_monto , asp_ing_fam_aspen , asp_ing_fam_otros , 
						  aspen_empleados_asp_idempleado)
						VALUES 
						( '$asp_inmueble' , '$asp_edo_civil' , '$asp_dep_eco' , '$asp_dep_conyuge_edad' , '$asp_dep_hijos_edad' , '$asp_dep_padres_edad' , '$asp_dep_nietos_edad' , 
						  '$asp_trab_conyuge' , '$asp_trab_conyuge_monto' , '$asp_trab_hijos' , '$asp_trab_hijos_monto' , '$asp_ing_fam_aspen' , '$asp_ing_fam_otros' ,
						  '$aspen_empleados_asp_idempleado')
						 ";
		$this->execute_single_query();

	}

}


?>