/* The PHP class "member" defines properties and methods for managing member information including full
name, email, and ID. */
<?php

// Require the hotro.php file for necessary functions
require_once("hotro.php");

// Define the member class
class member{
	
	private $fullname; // Property to store the full name of the member
	private $email; // Property to store the email of the member
	private $idmember; // Property to store the ID of the member
	private $status; // Property to store the status of the member
	
	// Constructor method to initialize member object with fullname and email
	public function __construct($fullname, $email){
        $this->fullname = $fullname; // Assign fullname parameter to fullname property
        $this->email = $email; // Assign email parameter to email property
        $this->idmember = idcontinue(); // Generate member ID using idcontinue function from hotro.php
    }
	
	// Destructor method to clean up object properties when it's destroyed
	public function __destruct(){
		$this->fullname = NULL; // Set fullname property to NULL
		$this->email = NULL; // Set email property to NULL
		$this->status = NULL; // Set status property to NULL
		$this->idmember = NULL; // Set idmember property to NULL
	}
	
	// Method to get the full name of the member
	public function get_fullname(){
		return $this->fullname;
	}
	
	// Method to get the email of the member
	public function get_email(){
		return $this->email;
	}
	
	// Method to get the ID of the member
	public function get_id(){
		return $this->idmember;
	}
}
?>
