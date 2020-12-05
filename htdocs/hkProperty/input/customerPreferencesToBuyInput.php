<?php
    $customerID = "";
    if(array_key_exists('customerID', $_POST)) {
        $customerID = $_POST['customerID'];
    }
?>

<form action="" method="post">
<input type="hidden" id="customerPreferencesToBuyInput" name="customerPreferencesToBuyInput">
<input type="hidden" id="queryResult" name="queryResult">
<input type="hidden" id="rawQuery" name="rawQuery" value="SELECT * FROM `Property` JOIN `Customer` WHERE `customerId` LIKE '$customerID' AND (`estateName` = `preferredEstate` OR `districtName` = `preferredDistrict`) AND `markedSellingPrice` <= `budgetForBuying`">
<input type="hidden" id="fieldName" name="fieldName" value="propertyId,ownerId,districtName,estateName,blockNumber,floorNumber,flatNumber,grossFloorArea,numberOfBedrooms,carParkProvided,markedSellingPrice,markedRentalPrice">

Customer's Preferences To Buy 

<br></br>

<?php
    echo "Customer ID: <input type='text' name='customerID' value='$customerID'>";
?>

<br></br>
<input type="submit">
</form>
