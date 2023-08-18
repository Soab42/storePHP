<?php

    require ('connection.php');

    require ('prod_con.php');

    error_reporting(E_ERROR | E_PARSE);

?>

<html>

    <head>

        <title>General Report</title>

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

        

                        <div class="col-sm-9"><!------MAin Menu start------->

        

        <?php

            $sql1= "SELECT * FROM product_list";

            $query = $conn->query($sql1);  

            ?>

      

      <div class=" ">

    <table class='table table-borderd text-center text-white  bg-success'>

        <th class='fs-3'>Generate Report</th></table>

        <br><br>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

       

        <div class='row'>

        <div class="col-6">

       

        <select name="prod_name" class="form-control ">

               <?php 

                    while($data= mysqli_fetch_array($query)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                    echo "<option value='$prod_id'> $prod_name </option>";

                    }

                     

                ?>

            </select>

        </div>

            <div class="col-3">

            <input class="btn btn-primary col-5" type="submit" value="submit"> <br><br>

            </div>

        </div>

        <br><br>

<div class='row'>

           <div class="col-5"> <?php 

            if(isset($_GET['prod_name'])){

                $stp_name = $_GET['prod_name'];

                $sql2= "SELECT * FROM store_product WHERE stp_name = $stp_name ";

                $query2= $conn->query($sql2);



                echo "<h5 class='text-center'>Store Product</h5>";

                echo "<table class='table table-bordered'><tr><th>#</th><th>Entry Date</th><th>Quantity</th></tr>";

                while ($data1 = mysqli_fetch_assoc($query2)){

                    $stp_edate= $data1['stp_edate'];

                    $stp_quantity= $data1['stp_quantity'];

                    $stp_name= $data1['stp_name'];

                    $sl =$sl+1;

                    

                    echo "

                    <tr>

                    <td>$sl</td>

                    <td>$stp_edate</td>

                    <td>$stp_quantity</td>

                    </tr>";



                    

                }

                

               echo "</table>";

            }

            ?>

</div>

<!-- <div class="w4 pr-2 mr-4  border-left border-info"></div> -->

<div class="col-1"> </div>

<div class="col-5">

            <?php 

            

            if(isset($_GET['prod_name'])){

                $spp_name = $_GET['prod_name'];

                $sql3= "SELECT * FROM spend_product WHERE spp_name = $spp_name ";

                $query3= $conn->query($sql3);



    

                echo "<h5 class='text-center'>Spend Product</h5>";

               

                echo "<table class='table table-bordered'><tr><th>#</th><th>Entry Date</th><th>Quantity</th></tr>";

                while ($data2 = mysqli_fetch_assoc($query3)){

                    $spp_edate= $data2['spp_edate'];

                    $spp_quantity= $data2['spp_quantity'];

                    $spp_name= $data2['spp_name'];

                    $sl2 =$sl2+1;

                    

                    echo "<tr><td>$sl2</td><td>$spp_edate</td><td>$spp_quantity</td></tr>";





                }

                

               echo "</table>";

            }

            ?>



</div>



<div class="col-5">

<?php

echo "<table class='table table-hover text-white bg-success'>";

if(isset($_GET['prod_name'])){

    $spp_name = $_GET['prod_name'];

$sql6= "SELECT stp_name,sum(stp_quantity)as stp_quantity FROM store_product WHERE stp_name = $stp_name ";

                    $query6= $conn->query($sql6);

                    $data6=mysqli_fetch_assoc($query6);

                    $stp_quantity= $data6['stp_quantity'];

                    echo "<tr>

                    <td></td>

                    <th class='col-sm-7' >Store Total</th>

                    <th class='col-sm-7'>$stp_quantity </th>";

                    echo "</table>";}

                    ?>

                   

</div>     

<div class="col-1"></div>

<div class="col-5 ">

<?php

echo "<table class='table table-hover text-white bg-success'>";

if(isset($_GET['prod_name'])){

    $spp_name = $_GET['prod_name'];                 

$sql7= "SELECT spp_name,sum(spp_quantity)as spp_quantity FROM spend_product WHERE spp_name = $spp_name ";

$query7= $conn->query($sql7);

$data7=mysqli_fetch_assoc($query7);

$spp_quantity= $data7['spp_quantity'];

echo "

                    <td></td>

                    <th class='col-sm-7'>Spend Total</th>

<th class='col-sm-7'>$spp_quantity </th>

    </tr>";

    echo "</table>";





$total=$stp_quantity-$spp_quantity;



}

	?>













</div>

<div class=" ">

    <table class='table table-borderd text-center text-white  bg-success'>

<?php

if (!empty($total)) {

echo "<th class='fs-1'>Stock quantity  $total</th>";

}

?>

</table>

</div>

</div>







</div>







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