if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<div class='container p-5'>";
        echo "<table  class='table'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th scope='col'>ID</th>";
                echo "<th scope='col'>Product name</th>";
                echo "<th scope='col'>Brand</th>";
                echo "<th scope='col'>Price</th>";
                echo "<th scope='col'>Quantity</th>";
            echo "</tr>";
            echo "</thead>";
        while($row = $result->fetch_array()){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['Product_id'] . "</td>";
                echo "<td>" . $row['Product_name'] . "</td>";
                echo "<td>" . $row['Brand'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        echo "</div>";
        // Free result set
        $result->free();
    } 