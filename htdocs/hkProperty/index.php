<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<form method="post"> 
    <input type="submit" name="estateForSaleInput" class="button" value="Estate For Sale" /> 
    <input type="submit" name="estateForRentInput" class="button" value="Estate For Rent" /> 
    <input type="submit" name="customerPreferencesToBuyInput" class="button" value="Customer’s preferences To Buy" /> 
    <input type="submit" name="customerPreferencesToRentInput" class="button" value="Customer’s preferences To Rent" /> 
    <input type="submit" name="propertyOwnerInput" class="button" value="Property owner" /> 
    <input type="submit" name="branchReportInput" class="button" value="Branch report" /> 
</form> 

<br></br>

<?php
    if(array_key_exists('estateForSaleInput', $_POST)) { 
        include 'input/estateForSaleInput.php'; 
    } 
    else if(array_key_exists('estateForRentInput', $_POST)) { 
        include 'input/estateForRentInput.php';  
    }
    else if(array_key_exists('customerPreferencesToBuyInput', $_POST)) { 
        include 'input/customerPreferencesToBuyInput.php';  
    }
    else if(array_key_exists('customerPreferencesToRentInput', $_POST)) { 
        include 'input/customerPreferencesToRentInput.php';  
    }
    else if(array_key_exists('propertyOwnerInput', $_POST)) { 
        include 'input/propertyOwnerInput.php';  
    }
    else if(array_key_exists('branchReportInput', $_POST)) { 
        include 'input/branchReportInput.php';  
    }
?>

<br></br>

<?php
    if(array_key_exists('queryResult', $_POST) ) { 
        include 'queryResult.php'; 
    }
?>

</body>
</html>
