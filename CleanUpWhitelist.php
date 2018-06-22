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

<?php
    foreach ($links as $link) {
        if ($result = $link->reap_async_query()) {
            print_r($result->fetch_row());
            mysqli_free_result($result);
            $processed++;
        }
    }
?>

The data is accessible via:
<?php
    foreach ($links as $link) {
        if ($result = $link->reap_async_query()) {
            //This works for SELECT
            if(is_object($result)){
                print_r($result->fetch_row());
                mysqli_free_result($result);
            }
            //This works for INSERT/UPDATE/DELETE
            else {
                print_r($link);
            }
            $processed++;
        }
    }
?>
