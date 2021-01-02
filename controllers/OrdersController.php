<?php

class OrdersController {

    function handleInsert()
    {
        $alert = new Alerts();

        if ( isset($_POST['action'])) {
            if ( $_POST['action'] === 'create-order' ) {


                $name = $_POST['name'];
                $amount = $_POST['amt'];
                $email = $_POST['email'];

                $orders = new Orders();
                $orders->insert( $name, $amount, $email );
                $alert->success( 'New order has been created successfully' );
            }

            return FALSE;
        }
    }

}