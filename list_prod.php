<?php

    require ('connection.php');

    require ('cat_con.php');

?>

<html>

    <head>

        <title>List Of Product</title>

        <?php include('script.php'); ?>

            

            </head>

            <body>

            <div class="container">

                <!------navbar start------->

                <div class="container bg-success ">

                    <!-- <h1 class=" text-info text-center">Store Manegement System</h1> -->

                    <?php include('navbar.php'); ?>

        

                </div>

                    <div class="h4 pb-2 mb-4  border-bottom border-info"></div>

                <!------navbar end------->

                

                <!------Left Menu start------->

                <div class="container">  <!------Left Menu Start------->

                    <div class="row bg-light">

                        

                    <?php include('leftbar.php'); ?>

                        

                <!------Left Menu end------->

        

                        <div class="col-sm-7"><!------MAin Menu start------->

                        <?php 

        $sql = "SELECT * FROM product_list";

        $query = $conn->query($sql);



        echo "<table class='table table-success table-striped'><tr> <th>Sl No</th><th>product Name</th><th>Product Catagory</th><th>Product Code</th><th>Entry Date</th><th>Action</th></tr>";



        while ($data = mysqli_fetch_array($query)){

            $prod_id = $data['prod_id'];

            $prod_name = $data['prod_name'];

            $prod_cat = $data['prod_cat'];

            $prod_code = $data['prod_code'];

            $prod_edate = $data['prod_edate'];
            $sl = $sl +1 ;

            echo "<tr>
                <td>$sl</td>

                <td>$prod_name</td>

                <td>$data_list[$prod_cat]</td>

                <td>$prod_code</td>

                <td>$prod_edate</td>

                <td> <a href='edit_prod.php?id=$prod_id'type='button' class='btn btn-danger btn-sx'>Edit</a></td>

                </tr>";

          

        };

        echo "</table>";



        ?>



        <!-- <h1>Catagory List</h1> -->

                  

                  </div>				

                    </div>

                </div>    <!------Main Menu end------->

                <!------footer end------->

                <div class="container- p-1 bg-success text-center fs-4 text-white">

                    <!-- <p>copyright&copy; soab technology@2022</p>  include -->

                    <?php include('footer.php'); ?>

                </div>

        

                <!------footer Menu end------->

                

                    

            </div>

   

    </body>



</html>