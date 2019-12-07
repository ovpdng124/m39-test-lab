<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories List</title>
    <link rel="stylesheet" href="view/bootstrap4/css/bootstrap.min.css">
    <script src="view/bootstrap4/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <h1 class="text-center">LIST ALL CATEGORIES</h1>
    <table class="table table-striped text-center">
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>View Details</th>
        </tr>

        <?php $count = 1;
        foreach ($categoryList as $value):?>
            <tr>
                <td><?php echo $value['categoryID']; ?></td>
                <td><?php echo $value['categoryName']; ?></td>
                <td><a href="index.php?action=detailProductList&categoryID=<?php echo $value['categoryID']; ?>">View Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!--<button class="btn ml-3" onclick="window.location.href='index.php?action=customerList'">Customer List</button>-->
<!--<button class="btn ml-3" onclick="window.location.href='index.php?action=rentalList'">Rental List</button>-->
<!--<button class="btn ml-3" onclick="window.location.href='index.php?action=addRentalForm'">Add Rental</button>-->
</body>
</html>