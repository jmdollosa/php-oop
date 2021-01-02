<?php

class Orders extends DB {

    private $table = 'orders';

    public function list($start = 0, $limit = 10)
    {
        $res = $this->query( "SELECT * FROM orders LIMIT {$start}, {$limit}" );
        return $this->fetchResult($res);
    }

    public function getTotalRows()
    {
        $res = $this->query( "SELECT COUNT(order_id) as total FROM orders" );
        return $this->fetchObject($res)->total;
    }

    public function get($id)
    {
        $res = $this->query( "SELECT * FROM orders WHERE order_id = {$id}" );
        return $this->fetchObject( $res );
    }

    public function insert( $name = '', $amount = 0, $email = '' )
    {
        return $this->query( "INSERT INTO orders (name, amount, email) VALUES('{$name}', '{$amount}', '{$email}')" );
    }

    public function update( $id = 0, $name = '', $amount = 0, $email = '' )
    {
        return $this->query( "UPDATE orders SET name = '{$name}', amount = '{$amount}', email = '{$email}' WHERE order_id = {$id}" );
    }

    public function delete( $id = 0 )
    {
        return $this->query( "DELETE orders WHERE order_id = {$id}" );
    }

}