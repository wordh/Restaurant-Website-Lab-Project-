<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
   
        
        $Firstname = $mysqli->real_escape_string($_POST['Firstname']);
        $Lastname = $mysqli->real_escape_string($_POST['Lastname']);
        $Email = $mysqli->real_escape_string($_POST['Email']);
        $Password = md5($_POST['Password']);
        $Gender =$mysqli->real_escape_string($_POST['Gender']);
        $Address = $mysqli->real_escape_string($_POST['Address']);

    
        $_SESSION['Firstname'] = $Firstname;
        $_SESSION['Lastname'] = $Lastname;
        $_SESSION['Email'] = $Password;
        $_SESSION['Gender'] = $Gender;
        $_SESSION['Address'] = $Address;


          $sql = 
                "INSERT INTO users (Firstname, Lastname, Email, Password, Gender,Address ) "
                . "VALUES ('$Firstname','$Lastname', '$Email', '$Password', '$Gender','$Address')";
                
         if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration successful!"
                    . "Added $username to the database!";
                    //redirect the user to welcome.php
                    header("location: Login.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
            
        
    
}
?>