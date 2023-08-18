<?php

    require ('connection.php');

    require ('prod_con.php');

?>

<html>

    <head>

        <title>Edit Store Product</title>

        <?php include('script.php'); ?>

            

            </head>

            <body>

            <div class="container fluid">

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

            $sql = "SELECT * from store_product  WHERE stp_id =$get_id  ";

            $query = $conn->query($sql);

            $data= mysqli_fetch_array($query);

            $stp_id     = $data['stp_id'];

            $stp_name   = $data['stp_name'];

            $stp_quantity   = $data['stp_quantity'];

            $stp_edate  = $data['stp_edate'];

        }

    ?>

    <?php 

            if(isset($_GET['stp_name'])){

                $new_stp_name = $_GET['stp_name'];

                $new_stp_quantity = $_GET['stp_quantity'];

                $new_stp_edate = $_GET['stp_edate'];

                $new_stp_id = $_GET['stp_id'];



                $sql1 = "UPDATE store_product  Set

                stp_name        = '$new_stp_name',

                stp_quantity    = '$new_stp_quantity',

                stp_edate       =  '$new_stp_edate'

                WHERE stp_id = $new_stp_id";

                 if ($conn->query($sql1) === TRUE){

                    header('location:list_store.php');

                    } else {

                    echo "Error: " . $sql . "<br>" . $conn->error;

                    }

            }

    

    

    

    

    

    

    ?>

        <?php

            $sql2= "SELECT * FROM product_list";

            $query1 = $conn->query($sql2);  

            ?>

       <h1>Store Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        Product Name<br> <br>

        <select name="stp_name">

               <?php 

                    while($data= mysqli_fetch_array($query1)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                  ?>

            <option value="<?php echo $stp_name; ?>,<?php if($prod_id==$stp_name){echo 'selcted';} ?>"> <?php echo $prod_name;?> 

            </option>";

                   

                    <?php }

                ?>

            </select><br> <br>













            Store Quantity<br> <br>

            <input type="text" name="stp_quantity" value="<?php echo $stp_quantity ?>"><br> <br>



            Product Entry Date<br> <br>

            <input type="date" name="stp_edate" value="<?php echo $stp_edate ?>"><br> <br>

            <input type="text" name="stp_id" value="<?php echo $stp_id ?> "hidden>

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