<?php
//Creating Database Connection

class Database{
	
	public function __construct(){
		//$this->con = mysqli_connect('localhost','root','');
		$this->db  = new PDO('mysql:host=localhost;dbname=contact','root','');
		//print_r($this->con) ;
		///print_r($this->db);
		
		if($this->db ){
			//echo 'Connected';
			//var_dump($db);
			//return $db;
		}else{
			echo 'Not Connected';
		}
	}
}
$obj = new Database; //Creating object of database 
//Creating Class for database connection and for all CRUD methods
class contactsService extends Database {
	 public $db = NULL;
	
	 public function select_all_record($table){
		 
		 $sql = "SELECT * FROM ".$table;
		 $query = $this->db->query($sql);
		 
		 if($query){
			return $query;
		 }
		 else{
			 echo 'Null Value';
		 }
	 }
	 public function select_record($table, $where){
		 $sql = "";
		 $condition = "";
		 foreach($where as $key => $value){
			 //id = '5' AND name = 'something'
			 $condition .= $key ."= '".$value."' AND ";
		 }
		 $condition = substr($condition, 0, -5); //It will remove last 5 string which is AND
		 $sql .="SELECT * FROM ".$table." WHERE ".$condition;
		 if($row = $this->db->query($sql)){
			return $row;
		 }
	 }
	public function update_record($table, $where, $fields){
		 $sql = "";
		 $condition = "";
		 $field_value = "";
		 foreach($where as $key => $value){
			 $condition .= $key ."= '".$value."' AND ";
		 }
		 $condition = substr($condition, 0, -5);
		 foreach ($fields as $key => $field){
			 $field_value .= $key ."= '".$field."' , ";
		 }
		 $field_value = substr($field_value, 0, -3);
		 //UPDATE table SET name ='' , phone = '' WHERE id = ''
		 $sql .= " UPDATE ".$table." SET ".$field_value." WHERE ".$condition;
		 if($row = $this->db->query($sql)){
			 return true;
		 }
	 }
	public function delete_record($table, $where){
		 $sql = "";
		 $condition = "";
		 foreach($where as $key => $value){
			 $condition .= $key ."= '".$value."' AND ";
		 }
		 $condition  = substr($condition, 0, -5);
		 //DELETE FROM users WHERE lName = 'Hassan'
		 $sql  = "DELETE FROM ".$table." WHERE ".$condition;
		 if($row = $this->db->query($sql)){
			 return true;
		 }
	 }
	public function insert_record($table,$fileds){
		 $sql = "";
		 $sql .= "INSERT INTO ".$table;
		 $sql .= " (".implode(",", array_keys($fileds)).") VALUES";
		 $sql .= "('".implode("','", array_values($fileds))."')";
		 
		 $query = $this->db->prepare($sql);
		 
		 if($query){
			 
			$query = $this->db->query($sql);
			//echo 'Data Inserted '. $this->db->lastInsertId() ;
			 return true;
		}
	 }
	
}

?>