<?php

$getAllCustomers = $databaseobj->getAllCustomers();

while($getAllCustomer = mysqli_fetch_object($getAllCustomers)){
    $getAllCustomer->id;
}
