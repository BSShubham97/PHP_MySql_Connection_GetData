<?php include "config.php" ; 

//query to get users
$sql = "SELECT * FROM user";
//execute query
$result=$conn->query($sql);

?>

<!Doctype html>
<html>
    <head>
        <title> View </title>
</head>
<body>
    <div>
        <h2>User Info</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>

            <?php
                 if($result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['city']; ?></td>
            </tr>
    <?php
            }
                 }
?>



           </tbody>
        </table>
</div>
</body>
</html>
