<?php if(!session_id()) session_start();

define( 'BASEDIR', dirname(__FILE__) );

require 'includes/DB.php';
require 'models/Orders.php';

$orders = new Orders();
$limit = 1;
$activePage = (isset($_GET['page']) ? $_GET['page'] : 1);

$start = ceil(($activePage * $limit) - $limit);

$ordersList = $orders->list($start, $limit);
$totalRows = $orders->getTotalRows();
$maxPages = ceil($totalRows/$limit);

?>
<!DOCTYPE html>
<html>
<head>
    <title>List Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-xs-12 pt-5">
            <?php include BASEDIR . '/views/orders/list.php'; ?>
        </div>
    </div>
</div>
</body>
</html>