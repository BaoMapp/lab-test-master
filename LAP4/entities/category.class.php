/* The Category class in PHP defines properties and methods for managing categories, including saving a
category to a database and listing categories from the database. */
<?php
// Require the db.class.php file for the Db class
require_once("config/db.class.php");

// Define the Category class
class Category
{
    // Properties of the Category class
    public $cateId; // Category ID
    public $cateName; // Category Name
    public $cateDes; // Category Description

    // Constructor method for Category class
    public function __construct(
        $cate_name, // Category Name parameter
        $cate_des    // Category Description parameter
    ) {
        $this->cateName = $cate_name; // Assign Category Name parameter to cateName property
        $this->cateDes = $cate_des;   // Assign Category Description parameter to cateDes property
    }

    // Method to save category
    public function save()
    {
        $db = new Db(); // Create a new Db object

        // SQL query to insert category into the database
        $sql = "INSERT INTO category (CategoryName, Description) VALUES ('$this->cateName','$this->cateDes')";

        // Execute the query using query_execute function from Db class
        $result = $db->query_execute($sql);

        // Return the result of the query execution
        return $result;
    }

    // Method to list categories
    public static function list_category()
    {
        $db = new DB(); // Create a new Db object

        // SQL query to select all categories from the database
        $sql = "SELECT * FROM category";

        // Execute the query and get the result using select_to_array function from Db class
        $rs = $db->select_to_array($sql);

        // Return the result set
        return $rs;
    }
}
?>
