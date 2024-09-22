<?php
// include "includes/navBar.php";
include 'includes/connect.php';
?>
<?php
$sql = "SELECT * FROM file_upload";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download pdf</title>
</head>
<body>
    <div class="container">
        <h1>Download PDF</h1>
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>File Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$row["file_name"]."</td>";
                    echo '<td><a href="uploads/'.$row['file_name'].'"class = "btn">Download</a></td>';
                    echo "</tr>";
                    $count++;
                }
            }else{
                echo "<tr><td>No records found</td></tr>";
            }
            ?>
        </tbody>
    </div>
</body>
</html>