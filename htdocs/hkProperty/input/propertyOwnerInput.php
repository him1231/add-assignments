<?php
    $propertyID = "";
    if(array_key_exists('propertyID', $_POST)) {
        $propertyID = $_POST['propertyID'];
    }
?>

<form action="" method="post">
<input type="hidden" id="propertyOwnerInput" name="propertyOwnerInput">
<input type="hidden" id="queryResult" name="queryResult">
<input type="hidden" id="rawQuery" name="rawQuery" value="SELECT * FROM `Owner` JOIN `Property` USING (`ownerId`) WHERE `propertyId` LIKE '$propertyID'">
<input type="hidden" id="fieldName" name="fieldName" value="ownerId,ownerName,ownerPhoneNumber">

Property Owner

<br></br>

<?php
    echo "Property ID: <input type='text' name='propertyID' value='$propertyID'>";
?>

<br></br>
<input type="submit">
</form>
