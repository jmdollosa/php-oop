<?php

class Alerts {

    function success($message = '')
    {
        $_SESSION['alert'] = '<div class="alert alert-success">'. $message .'</div>';
    }

    function error($message = '')
    {
        $_SESSION['alert'] = '<div class="alert alert-danger">'. $message .'</div>';
    }

    function info($message = '')
    {
        $_SESSION['alert'] = '<div class="alert alert-info">'. $message .'</div>';
    }

    function warning($message = '')
    {
        $_SESSION['alert'] = '<div class="alert alert-warning">'. $message .'</div>';
    }

    function print()
    {
        if(isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    }

}