<form method="POST">
	name: <br />
	<input type="text" name="input_name"><br />
	price: <br />
	<input type="number" name="input_price"><br />
	avaliable: <br />
	<select name="input_avaliable">
	  <option value="1">active</option>
	  <option value="0">inactive</option>
	</select>
	<input type="hidden" name="action" value="cmd_insert"><br />
	<input type="submit" value="kód">
</form>

<?php
	if (isset($_POST['action']) and $_POST['action']=='cmd_insert') {
		$product = new db();
		$product->connect();
		$product->product_insert($_POST['input_name'],
							$_POST['input_price'],
							$_POST['input_avaliable']);
		$product->disconnect();
}

$product = new db();
$product->connect();
$product->select();
$product->disconnect();

class product {
	public $input_name;
	public $input_price;
	public $input_avaliable;

	public function product_insert($input_name,$input_price,$input_avaliable) {
		echo $input_name . '<br />';
		echo $input_price . '<br />';
		echo $input_avaliable . '<br />';
	}


}

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
		$this->sql = "SELECT prod_id, prod_name, prod_price, prod_avaliable FROM products";
		$this->result = $this->conn->query($this->sql);

		if ($this->result->num_rows > 0) {
		  // output data of each row
		  while($this->row = $this->result->fetch_assoc()) {
		    echo "id: " . $this->row["prod_id"]. " - Name: " . $this->row["prod_name"]. " " . $this->row["prod_price"]. " " . $this->row["prod_avaliable"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
	}

	public function product_insert($input_name,$input_price,$input_avaliable) {
		$this->sql = "INSERT INTO `products`(`prod_name`, `prod_price`, `prod_avaliable`) VALUES ('$input_name','$input_price', '$input_avaliable')";
		if ($this->conn->query($this->sql)) {
			echo "Sikeres adatfelvétel!";
		} else {
			echo "Sikertelen adatfelvétel!";
		}
	}	

}


?>