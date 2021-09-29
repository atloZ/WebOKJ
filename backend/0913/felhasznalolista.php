<?php

$json_userlist = new db();
$json_userlist->connect();
$json_userlist->json_userlist();
$json_userlist->disconnect();

class db {

	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "webapp";

	public function connect() {
		// Create connection
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		// Check connection
		if ($this->conn->connect_error) {
		  die("Connection failed: " . $this->conn->connect_error);
		}

	}

	public function disconnect() {
		$this->conn->close();
	}

	public function select() {
		$this->sql = "SELECT user_id, user_name, user_password FROM users";
		$this->result = $this->conn->query($this->sql);

		if ($this->result->num_rows > 0) {
		  // output data of each row
		  while($this->row = $this->result->fetch_assoc()) {
		    echo "id: " . $this->row["user_id"]. " - Name: " . $this->row["user_name"]. " " . $this->row["user_password"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
	}

	public function user_insert($input_usernamem,$input_password) {
		$this->sql = "INSERT INTO `users`(`user_name`, `user_password`) VALUES ('$input_usernamem','$input_password')";
		if ($this->conn->query($this->sql)) {
			echo "Sikeres adatfelvétel!";
		} else {
			echo "Sikertelen adatfelvétel!";
		}
	}

	public function json_userlist() {
		$this->sql = "SELECT user_id, user_name, user_password FROM users";
		$this->result = $this->conn->query($this->sql);
		if ($this->result->num_rows > 0) {
			while($this->row = $this->result->fetch_assoc()) {
				$array[] = $this->row;
			}
		} else {
			//
		}
		echo json_encode($array);
	}	

}

?>