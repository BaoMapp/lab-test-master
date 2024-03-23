/* The Db class in PHP establishes a connection to a MySQL database, executes query statements, and
returns results as arrays. */
<?php
// Define the Db class
class Db
{
    // Database connection variable
    protected static $connection;

    // Connection initialization function
    public function connect()
    {
        // Establish connection to the database
        $connection = mysqli_connect(
            "localhost", // Hostname
            "root",      // Username
            "",          // Password
            "demo_lap3"  // Database name
        );

        // Set charset to utf8
        mysqli_set_charset($connection, 'utf8');

        // Check if connection was successful
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
        }

        // Return the connection
        return $connection;
    }

    // Function to execute a query statement
    public function query_execute($queryString)
    {
        // Initialize connection
        $connection = $this->connect();

        // Execute query statement using mysqli query function
        $result = $connection->query($queryString);

        // Close connection
        $connection->close();

        // Return the result
        return $result;
    }

    // Function to return an array of result lists
    public function select_to_array($queryString)
    {
        $rows = array(); // Initialize array to store results
        $result = $this->query_execute($queryString); // Execute query

        // Check if result is false
        if ($result == false) return false;

        // Use while loop to fetch each row and add it to the array
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }

        // Return the array of results
        return $rows;
    }
}
?>
