<?php
    require_once 'connection.php';

    $ph_field = $_GET['pk_nme'];
    $pk_val = $_GET['pk_val'];
    $table = $_GET['tbl'];


    $query = "DELETE FROM $table WHERE $ph_field = $pk_val";

    $s = oci_parse($con, $query);
    if (!$s) {
        $m = oci_error($con);
        trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
    }
    $r = oci_execute($s);
    if (!$r) {
        $m = oci_error($s);
        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
    }

    echo " deleted from $table where PK is $ph_field and PK value is $pk_val";

?>