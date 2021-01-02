<?php if(!session_id()) session_start();

 require 'includes/DB.php';

/**
 * Models
 */
 require 'models/Orders.php';

 /**
  * Plugins
  */
require 'includes/Alerts.php';
$alerts = new Alerts();

 /**
 * Controllers
 */
 require 'controllers/OrdersController.php';

 $ordersController = new OrdersController();
 $action = $ordersController->handleInsert();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-xs-12 pt-5">
            <?php $alerts->print(); ?>
            <?php include 'views/orders/create.php'; ?>
        </div>
    </div>
</div>
</body>
</html>