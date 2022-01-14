<?php include "config.php" ; 

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $email=$_POST['email'];
    $city=$_POST['city'];

    //sql query
    $sql= "INSERT INTO user (username, email, city) VALUES ('$username','$email','$city')";
    //execute
    $result=$conn->query($sql);
    if($result==TRUE){
        echo "NEW RECORD CREATED SUCCESSFULLY." ;
    }else{
        echo "ERROR";
    }
    $conn->close();
}


?>

<!Doctype html>
<html>
<head>
<body>
    <div class="container">
        <div class="header">
            <h2>SignUp </h2>
    
        </div>
        <form action="" method="POST">
        <fieldset>
            <div>
                <label for="username"> Username:</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="email"> Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="city"> City:</label>
                <input type="text" name="city" required>
            </div>
          <br>
          <input type ="submit"  name="submit" value="submit">
</fieldset>
        </form>
    </div>
</body>
</head>
</html>
