<?php
    $estateName = "";
    if(array_key_exists('estateName', $_POST)) {
        $estateName = $_POST['estateName'];
    }
?>

<form action="" method="post">
<input type="hidden" id="estateForSaleInput" name="estateForSaleInput">
<input type="hidden" id="queryResult" name="queryResult">
<input type="hidden" id="rawQuery" name="rawQuery" value="SELECT * FROM `Property` WHERE `estateName` LIKE '$estateName%' AND `markedSellingPrice` IS NOT NULL">
<input type="hidden" id="fieldName" name="fieldName" value="propertyId,ownerId,districtName,estateName,blockNumber,floorNumber,flatNumber,grossFloorArea,numberOfBedrooms,carParkProvided,markedSellingPrice,markedRentalPrice">

Estate For Sale

<br></br>

<?php
    echo "Estate name: <input type='text' name='estateName' value='$estateName'>";
?>

<br></br>
<input type="submit">
</form>
