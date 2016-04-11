<?php

include 'dbConnect.php';

$table ='host';

$primaryKey= 'h_id';

$columns = array(
    array( 'db' => 'name', 'dt' => 0 ),
    array( 'db' => 'preference',  'dt' => 1 ),
    array( 'db' => 'interests',   'dt' => 2 ),
    array( 'db' => 'interest_nationality',     'dt' => 3 ),
    array( 'db' => 'vegan',     'dt' => 4 )
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
