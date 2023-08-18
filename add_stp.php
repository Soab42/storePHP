<?php

    require ('connection.php')

?>

<html>

    <head>

        <title>Store Product</title>

        <?php include('script.php'); ?>

            

            </head>

            <body>

            <div class="container">

                <!------navbar start------->

                <div class="container-fluid p-2 bg-success ">

                    <!-- <h1 class=" text-info text-center">Store Manegement System</h1> -->

                    <?php include('navbar.php'); ?>

                    <!-- <a href="home.php" class=" text-info text-center">Store Manegement System</a> -->

        

                </div>

                    <div class="h4 pb-2 mb-4  border-bottom border-info"></div>

                <!------navbar end------->

                

                <!------Left Menu start------->

                <div class="container-fluid">  <!------Left Menu Start------->

                    <div class="row bg-light">

                        

                    <?php include('leftbar.php'); ?>

                        

                <!------Left Menu end------->

        

                        <div class="col-sm-7"><!------MAin Menu start------->

                        <?php 

        if(isset($_GET['stp_name'])){

           $stp_name = $_GET['stp_name'];

           $stp_quantity = $_GET['stp_quantity'];

           $stp_edate = $_GET['stp_edate'];



           $sql = "INSERT INTO store_product (stp_name,stp_quantity, stp_edate)

                    VALUES ('$stp_name' ,'$stp_quantity','$stp_edate')";



                    if ($conn->query($sql) === TRUE) {

                    echo "New record created successfully";

                    } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;

                    }   }

       ?>

        <?php

            $sql1= "SELECT * FROM product_list";

            $query = $conn->query($sql1);  

            ?>

       <h1>Store Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        Product Name<br> <br>

        <select name="stp_name">

               <?php 

                    while($data= mysqli_fetch_array($query)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                    echo "<option value='$prod_id'> $prod_name </option>";

                    }

                ?>

            </select><br> <br>

            Store Quantity<br> <br>

            <input type="text" name="stp_quantity"><br> <br>



            Product Entry Date<br> <br>

            <input type="date" name="stp_edate"><br> <br>

            <input type="submit" value="submit">

        </form>

                  </div>				

                    </div>

                </div>    <!------Main Menu end------->

                <!------footer end------->

                <div class="container-fluid p-1 bg-success text-center fs-4 text-white">

                    <!-- <p>copyright&copy; soab technology@2022</p>  include -->

                    <?php include('footer.php'); ?>

                </div>

        

                <!------footer Menu end------->

                

                    

            </div>

       

    </body>



</html>