/* This PHP code is creating a simple webpage structure. It includes the header.php file at the
beginning, which likely contains the HTML code for the header section of the webpage. Then, it
displays an unordered list with two list items, each containing a link to different product-related
pages. Finally, it includes the footer.php file, which probably contains the HTML code for the
footer section of the webpage. This code essentially assembles the header, content, and footer of
the webpage by including separate files for each section. */
<?php
// Include the header.php file
include_once("header.php");
?>

<ul>
    <li>
        <a href="product-list.php">List of products</a>
    </li>

    <li>
        <a href="product-add.php">More products</a>
    </li>
</ul>

<?php
// Include the footer.php file
include_once("footer.php");
?>
