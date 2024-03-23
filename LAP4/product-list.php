/* This PHP code snippet is displaying a list of products in a table format on a web page. Here's a
breakdown of what the code is doing: */
<?php
// Include the Product class file
require_once('entities/product.class.php');
?>

<?php
// Include the header.php file
include_once('header.php');

// Get the list of products
$prods = Product::list_product();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table border="1" class="table">
                <tr>
                    <td>Picture</td>
                    <td>Product Name</td>
                    <td>CateID</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                </tr>
                <?php
                // Loop through the list of products
                foreach ($prods as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['Picture'] ?></td>
                        <td><?php echo $item['ProductName'] ?></td>
                        <td><?php echo $item['CateID'] ?></td>
                        <td><?php echo $item['Price'] ?></td>
                        <td><?php echo $item['Quantity'] ?></td>
                        <td><?php echo $item['Description'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php
// Include the footer.php file
include_once('footer.php');
?>
