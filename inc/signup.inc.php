<?php 
$n = (isset($_GET['n']))? $_GET['n']:'email';
        switch ($n) {
            case 'Step-1':
                $page = './vws/signup-01.vws.php';
            break;
            case 'Step-2':
                $page = './vws/signup-02.vws.php';
            break;
            case 'Step-3':
                $page = './vws/signup-03.vws.php';
            break;
            default:
                $page = './vws/signup-01.vws.php';
            break;
} ?>