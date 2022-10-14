<!DOCTYPE html>
<html>
    <head>
       <title>Student Info</title>
   <style>
   table, th, td
   {
        border: 1px solid black;
        border-collapse: collapse;
    }

    </style>
    </head>
<body>

<?php
    $conn= mysqli_connect("localhost", "root","","practical");
    
    $sql = "SELECT * FROM sinfo";
    if($result = $conn->query($sql))
    {
        if($result->num_rows > 0)
        {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
                echo "<th>ROLL NO.</th>";
                echo "<th>NAME</th>";
                echo "<th>COURSE</th>";
                echo "<th>SEMESTER</th>";
                echo "<th>CONTACT</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = $result->fetch_array())
            {
                echo "<tr>";
                    echo "<td>" . $row['ROLL NO.'] . "</td>";
                    echo "<td>" . $row['NAME'] . "</td>";
                    echo "<td>" . $row['COURSE'] . "</td>";
                    echo "<td>" . $row['SEMESTER'] . "</td>";
                    echo "<td>" . $row['CONTACT'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";                            
            echo "</table>";
        $result->free();
        }
        else
        {
            echo '<em>No records were found.</em>';
        }
    } 
    else
    {
        echo "Oops! Something went wrong. Please try again later.";
    }

$mysqli->close();
?>
</body>
</html>