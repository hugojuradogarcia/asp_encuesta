<?php 

require_once('db_abstract_model.php'); 

class Comments extends DbAbstractModel{

	public 	$rows_dimension_comments 	= array();
	public 	$rowComments = 0;

	
	function __construct()
	{
		$this->db_name = 'YallaYa_Exercise';
	}

	function __destruct()
	{
		unset($this);
	}

	// SELECT COMMENTS
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
	}

	// INSERT COMMENTS
	public function setComments( $comments_data = array() )
	{
			
		foreach ( $comments_data as $campo=>$valor ):
			$$campo = $valor;
		endforeach;

		$this->query = "
			INSERT INTO 	Comments
			( TitleComments, TextComments, NameComments, EmailComments, DateComments, Articles_idArticles )
			VALUES 
			( '$TitleComments', '$TextComments', '$NameComments', '$EmailComments', '$DateComments', '$Articles_idArticles')";
		$this->execute_single_query();

	}

}


?>