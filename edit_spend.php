<?php

    require ('connection.php');

    require ('prod_con.php');

?>

<html>

    <head>

        <title>Edit Spend Product</title>

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

            $get_id = $_GET['id'];

            $sql = "SELECT * from spend_product  WHERE spp_id =$get_id  ";

            $query = $conn->query($sql);

            $data= mysqli_fetch_array($query);

            $spp_id     = $data['spp_id'];

            $spp_name   = $data['spp_name'];

            $spp_quantity   = $data['spp_quantity'];

            $spp_edate  = $data['spp_edate'];

        }

    ?>

    <?php 

            if(isset($_GET['spp_name'])){

                $new_spp_name = $_GET['spp_name'];

                $new_spp_quantity = $_GET['spp_quantity'];

                $new_spp_edate = $_GET['spp_edate'];

                $new_spp_id = $_GET['spp_id'];



                $sql1 = "UPDATE spend_product  Set

                spp_name        = '$new_spp_name',

                spp_quantity    = '$new_spp_quantity',

                spp_edate       =  '$new_spp_edate'

                WHERE spp_id = $new_spp_id";

                 if ($conn->query($sql1) === TRUE){

                    header('location:list_spend.php');

                    } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;

                    }

            }

    

    ?>

        <?php

            $sql2= "SELECT * FROM product_list";

            $query1 = $conn->query($sql2);  

            ?>

       <h1>Spend Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        Product Name<br> <br>

        <select name="spp_name">

               <?php 

                    while($data= mysqli_fetch_array($query1)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                  ?>

            <option value="<?php echo $spp_name; ?>,<?php if($prod_id==$spp_name){echo 'selcted';} ?>"> <?php echo $prod_name;?> 

            </option>";

                   

                    <?php }

                ?>

            </select><br> <br>













            Store Quantity<br> <br>

            <input type="text" name="spp_quantity" value="<?php echo $spp_quantity ?>"><br> <br>



            Product Entry Date<br> <br>

            <input type="date" name="spp_edate" value="<?php echo $spp_edate ?>"><br> <br>

            <input type="text" name="spp_id" value="<?php echo $spp_id ?>" hidden>

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



</html>