/* The staff class extends the character class in PHP and includes properties for staff code and part,
along with methods to retrieve these values and generate a unique staff code. */
<?php
// Require the character.php file for the character class
require_once("character.php");

// Define the staff class which extends the character class
class staff extends character
{
    private $staffcode; // Property to store the staff code
    private $part; // Property to store the part

    // Constructor method for initializing staff object
    public function __contruct($fullname_staff, $countrycode, $part)
    {
        // Call the constructor of the parent class (character)
        parent::__construct($fullname_staff, $countrycode);

        // Initialize properties
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue(); // Generate staff code
    }

    // Method to get the staff code
    public function get_staffcode()
    {
        return $this->staffcode;
    }

    // Method to get the part
    public function get_part()
    {
        return $this->part;
    }

    // Private method to generate staff code
    private function staffcode_continue()
    {
        static $makecode = 1; // Initialize static variable to keep track of staff code
        return $makecode++; // Return current staff code and then increment it for the next call
    }
}
?>
