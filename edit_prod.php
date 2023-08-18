<?php

    require ('connection.php');

   

?>

<html>

    <head>

        <title>Edit Product</title>

        <?php include('script.php'); ?>

            

            </head>

            <body>

            <div class="container">

                <!------navbar start------->

                <div class="container-fluid p-2 bg-success ">

                    <!-- <h1 class=" text-info text-center">Store Manegement System</h1> -->

                    <?php include('navbar.php'); ?>

        

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

            if(isset($_GET['id'])){

                $get_id =  $_GET['id'];



                $sql1= "SELECT * from product_list WHERE prod_id =$get_id  ";



                $query = $conn->query($sql1);



                $data= mysqli_fetch_array($query);



                $prod_id    = $data['prod_id'];

                $prod_name  = $data['prod_name'];

                $prod_cat   = $data['prod_cat'];

                $prod_code  = $data['prod_code'];

                $prod_edate = $data['prod_edate'];

               }

               ?>

 <?php

        if(isset($_GET['prod_name'])){

           $new_prod_name   = $_GET['prod_name'];

           $new_prod_cat    = $_GET['prod_cat'];

           $new_prod_code   = $_GET['prod_code'];

           $new_prod_edate  = $_GET['prod_edate'];

           $new_prod_id     = $_GET['prod_id'];

           



           $sql= "UPDATE product_list SET

                 prod_id = '$new_prod_id',

                prod_name = '$new_prod_name',

                prod_cat = '$new_prod_cat',

                prod_code ='$new_prod_code',

                prod_edate ='$new_prod_edate'

                WHERE prod_id= $new_prod_id";

                

            if ($conn->query($sql) === TRUE){

                header('location:list_prod.php');

                } else {

                echo "Error: " . $sql . "<br>" . $conn->error;

                }

        

        }



?>

 <?php

        $sql2= "SELECT * FROM cat_list";



        $query1 = $conn->query($sql2);

    

         ?>

        <h1>Edit Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

            Product <br> <br>

            <input type="text" name="prod_name" value="<?php echo $prod_name ?>"><br> <br>

            Product Catagory<br> <br>

            <select name="prod_cat" ">

            <?php 

                    while($data= mysqli_fetch_array($query1)){

                    $cat_id     = $data['cat_id'];

                    $cat_name   = $data['cat_name'];

                ?>

                <option value='<?php echo $cat_id ?>'

                                <?php if($cat_id==$prod_cat){echo 'selected';

                                }

                ?>

                >

                <?php echo $cat_name ?> </option>

                  <?php  } ?>

            </select><br> <br>

            Product Code<br> <br>

            <input type="text" name="prod_code" value="<?php echo $prod_code ?>"><br> <br>



            Product Entry Date<br> <br>

            <input type="date" name="prod_edate" value="<?php echo $prod_edate ?>"><br> <br>

            <input type="text" name="prod_id" value="<?php echo $prod_id ?>"hidden>

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