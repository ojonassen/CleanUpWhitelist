<?php

require_once('connconfig2.php');

if($dbc === false){
    die("Error: Far ikke kontakt med databasen." . mysqli_error());
}

$query = "SELECT `identifier` FROM user_whitelist WHERE `delete` = 1";
if ($result = $dbc->query($query)) {
    while ($row = $result->fetch_row()) {
        printf("%s\n", $row[0]);
        $dbc->real_query("DELETE FROM `users` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `addon_account_data` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `addon_inventory_items` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `billing` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `characters` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `datastore_data` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `owned_hangard` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `owned_properties` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `owned_vehicles` WHERE `owner` = '$row[0]'");
        $dbc->real_query("DELETE FROM `playersTattoos` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `users` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `user_accounts` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `user_contacts` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `user_hangard` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `user_inventory` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("DELETE FROM `user_licenses` WHERE `identifier` = '$row[0]'");
        $dbc->real_query("UPDATE `user_whitelist` SET `delete`='2' WHERE  `identifier` = '$row[0]'");
    }
    $result->close();
}

mysqli_close($dbc);
?>
