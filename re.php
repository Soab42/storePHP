<?php

    require ('connection.php');


?>

<?php 
    


?>


        <?php

            $sql1= "SELECT * FROM product_list";

            $query = $conn->query($sql1);  

            ?>

       <h1>Spend Product</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        Product Name<br> <br>

        <select name="prod_name">

               <?php 

                    while($data= mysqli_fetch_array($query)){

                    $prod_id     = $data['prod_id'];

                    $prod_name   = $data['prod_name'];

                    echo "<option value='$prod_id'> $prod_name </option>";

                    }
                   

                ?>
                </select>
                <input type="submit" value="Generate Report">
                
        </form>
   <?php      
   
$stp_name= $_GET['prod_name'];
echo $stp_name;

$sql2='SELECT stp_name FROM store_product WHERE stp_name=1 GROUP BY stp_name;
$query2=$conn->query($sql2);

$data2=mysqli_fetch_array($query2);
$sum=$data2['stp_quantity'];

echo $sum;






       ?> 
        
                       