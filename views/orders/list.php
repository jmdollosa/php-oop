<table class="table table-bordered table-condensed table-hover">
    <thead>
    <tr style="background: #f0f0f0;">
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if( !empty($ordersList) ) {
        foreach($ordersList as $order) { ?>
            <tr>
                <td><?= $order->order_id ?></td>
                <td><?= $order->name ?></td>
                <td><?= $order->amount ?></td>
                <td><?= $order->email ?></td>
                <td>

                </td>
            </tr>
        <?php }
    }
    ?>
    </tbody>
</table>

<?php
include BASEDIR . '/views/partial/pagination.php';
?>