<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Simple form</title>
  </head>
  <body>
  <?php 
            $name = $surname = $email = $impactcourse = $info = "";
            $nameErr = $surnameErr = $emailErr = $impactcourseErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                // $name = test_input($_POST["name"]);

                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } else {
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }                      
                }

                // $surname = test_input($_POST["surname"]);

                if (empty($_POST["surname"])) {
                    $surnameErr = "Surname is required";
                  } else {
                    $surname = test_input($_POST["surname"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
                        $surnameErr = "Only letters and white space allowed";
                    }                      
                }
                
                // $email = test_input($_POST["email"]);

                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }                      
                }
                
                // $impactcourse = test_input($_POST["impactcourse"]);

                if (empty($_POST["impactcourse"])) {
                    $impactcourseErr = "You must specify a course";
                  } else {
                    $impactcourse = test_input($_POST["impactcourse"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$impactcourse)) {
                        $impactcourseErr = "Only letters and white space allowed";
                    }                      
                }

                $info = test_input($_POST["info"]);
            }
              
              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <p><span>* required field</span></p>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            
            Name: <input type="text" name = "name" value="<?php echo $name;?>">
            <span> * <?php echo $nameErr;?></span>
            <br><br>
            
            Surname: <input type="text" name = "surname" value="<?php echo $surname;?>">
            <span> * <?php echo $surnameErr;?></span>
            <br><br>
            
            Email: <input type="text" name = "email"  value="<?php echo $email;?>">
            <span> * <?php echo $emailErr;?></span>
            <br><br>

            Impact Course: <input type="text" name = "impactcourse"  value="<?php echo $impactcourse;?>">
            <span> * <?php echo $impactcourseErr;?></span>
            <br><br>

            Additional Info: <textarea name="info" cols="50" rows="5"></textarea>
            <br><br>
            <input type="submit">
        </form>

        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $surname;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $impactcourse;
            echo "<br>";
            echo $info;
        ?>
       
  </body>
</html>



