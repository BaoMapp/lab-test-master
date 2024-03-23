/* The PHP class "character" represents a character with properties for full name and country code,
along with methods to retrieve these properties. */
    <?php
// Define the character class representing a character with properties fullname and countrycode
class character
{
    private $fullname; // Property to store the full name of the character
    private $countrycode; // Property to store the country code of the character

    // Constructor method, accepts fullname and countrycode to assign to the corresponding properties
    public function __construct($fullname, $countrycode)
    {
        $this->fullname = $fullname;
        $this->countrycode = $countrycode;
    }

    // Method to get the fullname of the character
    public function get_fullname()
    {
        return $this->fullname;
    }

    // Method to get the countrycode of the character
    public function get_countrycode()
    {
        return $this->countrycode;
    }
}
?>
