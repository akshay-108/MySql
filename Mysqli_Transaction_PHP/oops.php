<?php

class OOPCRUD
{
	private $conn;
	public function __construct()
	{

		// for ubuntu
		$servername="localhost";
		$username="akshay";
		$password="Akshay@147852369";
		$dbname="oopscrud";

		// // for windows
		// $servername="localhost";
		// $username="root";
		// $password="";
		// $dbname="oopscrud";
		$this->conn=new mysqli($servername,$username,$password,$dbname);
		$this->conn->autocommit(false); 

		//check connection
		if($this->conn->connect_error) 	
		{
			echo "Failed To connect database" . mysqli_connect_error();
		}
	}

	public function insertData($name,$email)
	{
		$this->conn->begin_transaction();
		try {
			$query="INSERT INTO person(name,email) VALUES ('$name','$email')";
			$res=mysqli_query($this->conn,$query);
			$this->conn->commit();
			return $res;
		} catch (Throwable $th) {
			$this->conn->rollback();
			echo $th;
		}
		
	}

	public function fetchData($record_per_page,$start_from)
	{
		$query="SELECT * FROM person LIMIT $start_from, $record_per_page";

		$result=mysqli_query($this->conn,$query);
		return $result;
	}

	public function getPage()
	{
		$page_query="SELECT * FROM person";
		$page_result=mysqli_query($this->conn,$page_query);
		$total_records=mysqli_num_rows($page_result);
		return $total_records;
	}
	
	public function fetchonerecord($id)
	{
		$query="select * from person where id=$id";
    	$exec=mysqli_query($this->conn,$query);
    	$res=mysqli_fetch_assoc($exec);
    	return $res;
	}

	public function updateData($name,$email,$id)
	{
		
	    // $query="update person set name='$name',email='$email' where id='$id'";
		$this->conn->begin_transaction();
		try {
			$query="UPDATE person SET name='$name', email='$email' WHERE id='$id'";
	    	$res=mysqli_query($this->conn,$query);
			$this->conn->commit();
			header('location:index.php');
	     
		} catch (Throwable $th) {
			$this->conn->rollback();
			// echo "<script>alert('rollback')</script>";
	        // $msg= "Error: " . $query . "<br>" . mysqli_error($this->conn);
	        echo $th;	
		}
	}

	public function delete($id)
	{
		$this->conn->begin_transaction();
		try {
			$query="DELETE FROM person WHERE id=$id";
			$res=mysqli_query($this->conn,$query);
			$this->conn->commit();
			return $res;

		} catch (Throwable $th) {
			$this->conn->rollback();
			echo $th;
		}
		
	}
}

?>