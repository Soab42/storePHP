<?php

    require ('connection.php')

?>

<html>

    <head>

        <title>Add Product</title>

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

        if(isset($_GET['prod_name'])){

           $prod_name = $_GET['prod_name'];

           $prod_cat = $_GET['prod_cat'];

           $prod_code = $_GET['prod_code'];

           $prod_edate = $_GET['prod_edate'];



           $sql = "INSERT INTO product_list (prod_name,prod_cat,prod_code, prod_edate)

                    VALUES ('$prod_name','$prod_cat' ,'$prod_code','$prod_edate')";



                    if ($conn->query($sql) === TRUE) {

                    echo "New record created successfully";

                    } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;

                    }

        }

        ?>

        <?php

            $sql1= "SELECT * FROM cat_list";



            $query = $conn->query($sql1);

        

        ?>





        <h1>Add Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

            Product <br> <br>

            <input class="form-control" type="text" name="prod_name"><br> <br>

            Product Catagory<br> <br>

            <select class="form-select form-select-md " name="prod_cat">

               <?php 

                    while($data= mysqli_fetch_array($query)){

                    $cat_id     = $data['cat_id'];

                    $cat_name   = $data['cat_name'];

                    echo "<option value='$cat_id'> $cat_name </option>";

                    }

                ?>

            </select><br> <br>

            Product Code<br> <br>

            <input class="form-control" type="text" name="prod_code"><br> <br>



            Product Entry Date<br> <br>

            <input  class="form-control"type="date" name="prod_edate"><br> <br>

            <input class="btn btn-primary col-12" type="button" type="submit" value="submit">

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