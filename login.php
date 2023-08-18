<?php
session_start();
//-------------database connection----------------------------
    $conn = new mysqli('localhost','root','','mydbt');
    if (!$conn){
        echo 'Not connected';
    }

//----------for error messege of reload form without  data---------------
    $empmsg_en= "";
    $empmsg_pn= "";


//---------To get information of form by the user-----------------
    if (isset($_POST["submit"])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $md5password 	= md5($password); ///for password convet to md5 no so that admin cannot understand the password.


//---------if any form submited empty of form by the user show eror - ----------------

    if(empty($email)){
        $empmsg_en= "Fill the form";
    }
    if(empty($password)){
        $empmsg_pn= "Fill the form";
    }

    //-------if user form fill correctly then select the data from database 
    if(!empty($email) && !empty($password)){
        $sql= "SELECT * from user WHERE email='$email' and password='$md5password'";
        $query= $conn-> query($sql);
        
        if($query->num_rows> 0){
            $row = $query->fetch_assoc();     ///----for showing/print database information 
            $firstname = $row['firstname'];   ///----for showing/print database information 
			$lastname = $row['lastname'];     ///----for showing/print database information 

            $_SESSION['firstname']= $firstname;
            $_SESSION['lastname']= $lastname;

            header('location:dashbord.php');  ///----Auto transfer to that(dashbord.php) page 
        }
    }
}


?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

</head>
<body>
<div class='container'style="margin-top:150px">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4">
            <!-- login again -->
        <?php 
        if(isset($_GET['usercreated'])){
                     echo 'User Created Ssuccesfully.'; //get info from reg form and print success msg
                } 
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mt-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"value="<?php if (isset($_POST['submit'])){echo $email;} ?>"> 
                    <?php if (isset($_POST['submit'])){
                        echo $empmsg_en; }
                    ?>       
<!-- name should be table column name. php1 for auto fill form,php2 for error of empty form 
class should follow bootstrap name -->
                </div>
                <div class="mt-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                    <?php if (isset($_POST['submit'])){
                        echo $empmsg_pn; }
                    ?>
                </div>
                <div class="mt-2">
                    <button class="btn btn-success" name="submit">Login</button>
                    
                </div>
            </form>
            <h5>Don't have an account? <a href="user.php">Register</a></h5>
        </div>
        <div class="col-4">

        </div>
        
            
<!-- ahsjdkhsakjd -->

    </div>
</div>




</body>
    


</html>

