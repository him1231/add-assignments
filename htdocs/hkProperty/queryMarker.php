<?php
    if(array_key_exists('rawQuery', $_POST)) { 
        if(array_key_exists('estateForSaleInput', $_POST) || array_key_exists('estateForRentInput', $_POST)) { 
            $_POST['query'] = str_replace('$estateName', $_POST['estateName'], $_POST['rawQuery']);
        } else if(array_key_exists('customerPreferencesToBuyInput', $_POST) || array_key_exists('customerPreferencesToRentInput', $_POST)) { 
            $_POST['query'] = str_replace('$customerID', $_POST['customerID'], $_POST['rawQuery']);
        } else if(array_key_exists('propertyOwnerInput', $_POST)) { 
            $_POST['query'] = str_replace('$propertyID', $_POST['propertyID'], $_POST['rawQuery']);
        } else if(array_key_exists('branchReportInput', $_POST)) { 
            $_POST['query'] = str_replace('$branchID', $_POST['branchID'], $_POST['rawQuery']);
        }
    }
?>