<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car List</title>
    <link rel="stylesheet" href="view/bootstrap4/css/bootstrap.min.css">
    <script src="view/bootstrap4/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
    <h1 class="text-center">DETAIL OF OF THE PRODUCT</h1>
    <table class="table">
        <tr>
            <th>Product ID</th>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>

        <?php $count = 1;
        foreach ($detailProductList as $value):?>
            <tr>
                <td><?php echo $value['productID']; ?></td>
                <td><?php echo $value['categoryID']; ?></td>
                <td><?php echo $value['categoryName']; ?></td>
                <td><?php echo $value['productName']; ?></td>
                <td><?php echo $value['price']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<button class="btn ml-3" onclick="window.location.href='index.php'">Back</button>

</body>
</html>