<?php

require_once('connconfig.php');

if($dbc === false){
    die("Error: Far ikke kontakt med databasen." . mysqli_error());
}

//$id = mysqli_real_escape_string($dbc, $_REQUEST['palyerId']);

//Alternativ 1
$playerResult = "SELECT `identifier` FROM user_whitelist WHERE `delete` = 1";

$removeAddonAccountData = "DELETE FROM `addon_account_data` WHERE `owner` = $playerResult"
$removeAddonInventoryItems = "DELETE FROM `addon_inventory_items` WHERE `owner` = $playerResult"
$removeBilling = "DELETE FROM `billing` WHERE `identifier` = $playerResult"
$removeCharacters = "DELETE FROM `characters` WHERE `identifier` = $playerResult"
$removeDatastoreData = "DELETE FROM `datastore_data` WHERE `owner` = $playerResult"
$removeOwnedHangard = "DELETE FROM `owned_hangard` WHERE `owner` = $playerResult"
$removeOwnedProperties = "DELETE FROM `owned_properties` WHERE `owner` = $playerResult"
$removeOwnedVehicles = "DELETE FROM `owned_vehicles` WHERE `owner` = $playerResult"
$removePlayersTattoos = "DELETE FROM `playersTattoos` WHERE `identifier` = $playerResult"
$removeUser = "DELETE FROM `users` WHERE `identifier` = $playerResult"
$removeUserAccounts = "DELETE FROM `user_accounts` WHERE `identifier` = $playerResult"
$removeUserContacts = "DELETE FROM `user_contacts` WHERE `identifier` = $playerResult"
$resultUserHangard = "DELETE FROM `user_hangard` WHERE `identifier` = $playerResult"
$resultUserInventory = "DELETE FROM `user_inventory` WHERE `identifier` = $playerResult"
$resultUserLicenses = "DELETE FROM `user_licenses` WHERE `identifier` = $playerResult"


if(mysqli_query($dbc, $removeResult)){
    $removeAddonAccountData;
    $removeAddonInventoryItems;
    $removeBilling;
    $removeCharacters;
    $removeDatastoreData;
    $removeOwnedHangard;
    $removeOwnedProperties;
    $removeOwnedVehicles;
    $removePlayersTattoos;
    $removeUser;
    $removeUserAccounts;
    $removeUserContacts;
    $resultUserHangard;
    $resultUserInventory;
    $resultUserLicenses;
} else{
    echo "ERROR: Kan ikke kjore kommandoen $sql. " . mysqli_error($dbc);
}

//Alternativ 2
function removePlayer($dbc){
    $playerResult = "SELECT `identifier` FROM user_whitelist WHERE `delete` = 1";
    foreach ($dbc->mysqli_query($playerResult) as $value) {
        $value["DELETE FROM `addon_account_data` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `addon_inventory_items` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `billing` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `characters` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `datastore_data` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `owned_hangard` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `owned_properties` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `owned_vehicles` WHERE `owner` = $playerResult"];
        $value["DELETE FROM `playersTattoos` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `users` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `user_accounts` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `user_contacts` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `user_hangard` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `user_inventory` WHERE `identifier` = $playerResult"];
        $value["DELETE FROM `user_licenses` WHERE `identifier` = $playerResult"];
    }
}



mysqli_close($dbc);
?>
