<?php
ECHO "under construction";


/*
$sql = "SELECT Lastname FROM Persons ORDER BY LastName;";
$sql .= "SELECT Country FROM Customers";

// Execute multi query
if (mysqli_multi_query($con,$sql))
{
  do
    {
    // Store first result set
    if ($result=mysqli_store_result($con)) {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        printf("%s\n",$row[0]);
        }
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}

*/

mysqli_close($dbc);
?>
