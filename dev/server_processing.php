<?php

include 'dbConnect.php';

$table ='student';

$primaryKey= 'S_ID';

$columns = array(
    array( 'db' => 'name', 'dt' => 0 ),
    array( 'db' => 'age',  'dt' => 1 ),
    array( 'db' => 'gender',   'dt' => 2 ),
    array( 'db' => 'nationality',     'dt' => 3 ),
    array( 'db' => 'diet',     'dt' => 4 )
);


$sql_details = array(
    'user' => 'b3c438583f3e44',
    'pass' => '3cf27899',
    'db'   => 'friendshiplink',
    'host' => 'ap-cdbr-azure-east-c.cloudapp.net'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);
