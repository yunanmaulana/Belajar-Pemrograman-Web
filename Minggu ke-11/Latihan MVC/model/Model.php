<?php 

class Model { 

	private $dbh; //databse handler
	private $stmt;

	public function __construct()
	{
		//data source name
		$dsn = 'mysql:host=localhost;dbname=crud_pdo';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch( PDOException $e ) {
			die ( $e->getMassage() );
		}
	}

	public function getStudentList(){ 
	// here goes some hardcoded values to simulate the database
		$this->stmt = $this->dbh->prepare('SELECT * FROM sekolah');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		} 
		public function getTudent($id){ 
		// we use the previous function to get all the books 
		// and then we return the requested one. 
		// in a real life scenario this will be done through 
		// a database select command 
			$allStudents = $this->stmt->getSiswaList(); 
			return $allStudents[$id]; 
		} 
	} 
	?>