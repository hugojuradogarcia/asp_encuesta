<?php 

require_once('db_abstract_model.php'); 

class PersonalData extends DbAbstractModel{

	public 	$rows_dimension_personal_data 	= array();

	
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
	public function getComments( $idArticles ){
		$this->query = "
				SELECT		*
				FROM 		Comments
				WHERE 		Articles_idArticles = '$idArticles'
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
	public function setPersonalData( $personal_data = array() )
	{
			
		foreach ( $personal_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		$this->query = "
						INSERT INTO 	aspen_empleados
						( asp_puesto , asp_ingreso , asp_edad , asp_date )
						VALUES 
						( '$asp_puesto', '$asp_ingreso', '$asp_edad', '$asp_date' )
						";
		$this->execute_single_query();

	}

}


?>