<?php

    require ('connection.php')

?>

<html>

    <head>

        <title>Spend Product</title>

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

        if(isset($_GET['spp_name'])){

           $spp_name = $_GET['spp_name'];

           $spp_quantity = $_GET['spp_quantity'];

           $spp_edate = $_GET['spp_edate'];



           $sql = "INSERT INTO spend_product (spp_name,spp_quantity, spp_edate)

                    VALUES ('$spp_name' ,'$spp_quantity','$spp_edate')";



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

       <h1>Spend Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        Product Name<br> <br>

        <select name="spp_name">

               <?php 

                    while($data= mysqli_fetch_array($query)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                    echo "<option value='$prod_id'> $prod_name </option>";

                    }

                ?>

            </select><br> <br>

            Spend Quantity<br> <br>

            <input type="text" name="spp_quantity"><br> <br>



            Product Entry Date<br> <br>

            <input type="date" name="spp_edate"><br> <br>

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