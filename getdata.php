<?php
    require('connect.php');

    $getDetails = "SELECT id, concat(first_name,' ',last_name) as name FROM test.datatables_demo";
    $details    = mysqli_query($con, $getDetails);

    $response = array();
    if(mysqli_num_rows($details) > 0)
    {
        while($row = mysqli_fetch_assoc($details))
        {
            $response[$row['id']] = $row['name'];
        }
    }

    echo json_encode($response);
?>