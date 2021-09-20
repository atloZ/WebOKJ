<?php

class adatbazis
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "webapp";

    public $conn = "";
    public $sql = "";
    public $row = "";
    public $result = "";

    public function __construct()
    {
        self::db_connect();
    }

    public function __destruct()
    {
        self::db_close();
    }

    public function db_connect()
    {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }    
    }

    public function db_close()
    {
        $this->conn->close();
    }

    public function db_select() {
		$this->sql = "SELECT * FROM `users` WHERE 1";
		$this->result = $this->conn->query($this->sql);
        
		if ($this->result->num_rows > 0) {
            // output data of each row
            while($this->row = $this->result->fetch_assoc()) {
                $this->row[] = $this->row;
            }
		} else {
            echo "0 results";
		}
	}
    
    public function db_insert($user_name, $user_password)
    {
        $this->sql = "INSERT INTO `users`(`user_name`, `user_pass`) VALUES ('$user_name','$user_password');";

        if ($this->conn->query($this->sql)) {
            return true;
        } 
        
        return false;
    }

    public function db_update($id, $user_name, $user_password)
    {
        $this->sql = "UPDATE `users` SET `user_name`='$user_name',`user_pass`='$user_password' WHERE `user_id` = $id;";

        if ($this->conn->query($this->sql)) {
            return true;
        } 
        
        return false;
    }
    public function db_delete($id)
    {
        $this->sql = "DELETE FROM `users` WHERE `user_id` = $id;";

        if ($this->conn->query($this->sql)) {
            return true;
        } 
        
        return false;
    }
}
