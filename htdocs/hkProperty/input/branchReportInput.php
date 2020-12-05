<?php
    $branchID = "";
    if(array_key_exists('branchID', $_POST)) {
        $branchID = $_POST['branchID'];
    }
?>

<form action="" method="post">
<input type="hidden" id="branchReportInput" name="branchReportInput">
<input type="hidden" id="queryResult" name="queryResult">
<input type="hidden" id="rawQuery" name="rawQuery" value="
SELECT *, `rentalPrice` as `commission`, 'Rental' as `transactionType` FROM `Transaction` JOIN `Agent` USING (`agentId`) JOIN `Branch` USING (`branchID`) WHERE `branchID` LIKE '$branchID' AND `rentalPrice` IS NOT NULL 
UNION ALL 
SELECT *, `soldPrice` * 0.02 as `commission`, 'Sold' as `transactionType` FROM `Transaction` JOIN `Agent` USING (`agentId`) JOIN `Branch` USING (`branchID`) WHERE `branchID` LIKE '$branchID' AND `soldPrice` IS NOT NULL
">
<input type="hidden" id="fieldName" name="fieldName" value="transactionRef,transactionDate,transactionType,propertyId,soldPrice,rentalPrice,customerId,agentId,commission">

Branch Report

<br></br>

<?php
    echo "Branch ID: <input type='text' name='branchID' value='$branchID'>";
?>

<br></br>
<input type="submit">
</form>
