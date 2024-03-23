/* The Product class in PHP defines properties and methods for managing product data including saving
and listing products in a database. */
<?php
// Require the db.class.php file for the Db class
require_once("db.class.php");

// Define the Product class
class Product
{
    // Properties of the Product class
    public $productID; // Product ID
    public $productName; // Product Name
    public $cateID; // Category ID
    public $price; // Price
    public $quantity; // Quantity
    public $description; // Description
    public $picture; // Picture

    // Constructor method for Product class
    public function __construct($pro_name, $cate_id, $price, $quantity, $desc, $picture)
    {
        // Assign constructor parameters to object properties
        $this->productName = $pro_name; // Product Name
        $this->cateID = $cate_id; // Category ID
        $this->price = $price; // Price
        $this->quantity = $quantity; // Quantity
        $this->description = $desc; // Description
        $this->picture = $picture; // Picture
    }

    // Method to save product
    public function save()
    {
        // Initialize $db object with class Db from file db.class.php
        $db = new Db();

        // SQL query to insert product into the database
        $sql = "INSERT INTO product (ProductName, CateID, Price, Quantity, Description, Picture) VALUES ('$this->productName', '$this->cateID', '$this->price', '$this->quantity', '$this->description', '$this->picture')";

        // Execute the query using query_execute function from Db class
        $result = $db->query_execute($sql);

        // Return the result of the query execution
        return $result;
    }

    // Method to list products
    public static function list_product()
    {
        // Create a new Db object
        $db = new DB();

        // SQL query to select all products from the database
        $sql = "SELECT * FROM product";

        // Execute the query and get the result using select_to_array function from Db class
        $rs = $db->select_to_array($sql);

        // Return the result set
        return $rs;
    }
}
?>
