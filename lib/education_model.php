<?php 

require_once('db_abstract_model.php'); 

class Education extends DbAbstractModel{

	public 	$rows_dimension_education 	= array();

	
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
	public function setEducation( $education_data = array() )
	{
			
		foreach ( $education_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		$this->query = "
						INSERT INTO 	aspen_educacion
						( asp_bachi , asp_bachi_tiempo , asp_uni , asp_uni_tiempo , asp_maestria , asp_maestria_tiempo , 
						  asp_esp , asp_esp_tiempo , asp_diplo , asp_diplo_tiempo , asp_docto , asp_docto_tiempo , 
						  aspen_empleados_asp_idempleado )
						VALUES 
						( '$asp_bachi' , '$asp_bachi_tiempo' , '$asp_uni' , '$asp_uni_tiempo' , '$asp_maestria' , '$asp_maestria_tiempo' , 
						  '$asp_esp' , '$asp_esp_tiempo' , '$asp_diplo' , '$asp_diplo_tiempo' , '$asp_docto' , '$asp_docto_tiempo' ,
						  '$aspen_empleados_asp_idempleado')
						 ";
		$this->execute_single_query();

	}

}


?>