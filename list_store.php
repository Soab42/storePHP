<?php

    require ('connection.php');

    require ('prod_con.php');

?>

<html>

    <head>

        <title>List Of Store Product</title>

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

        $sql = "SELECT * FROM store_product";

        $query = $conn->query($sql);



        echo "<table class='table table-success table-striped'><tr class='table-success'><th>Sl No</th><th>product Name</th><th> Store Product Quantity</th><th>Entry Date</th><th>Action</th></tr>";



        while ($data = mysqli_fetch_array($query)){


            $sl = $sl+1;
            $stp_name = $data['stp_name'];

            $stp_quantity = $data['stp_quantity'];

            $stp_edate = $data['stp_edate'];

            $stp_id     = $data['stp_id'];



            echo "<tr class='table-success'>
                <td>$sl</td>

                <td >$data_list[$stp_name]</td>

                <td>$stp_quantity</td>

                <td>$stp_edate</td>

                <td> <a href='edit_store.php?id=$stp_id'type='button'class='btn btn-success'>Edit</a></td>

                </tr>";

          

        }

        echo "</table>";



        ?>



        <!-- <h1>Catagory List</h1> -->

   

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