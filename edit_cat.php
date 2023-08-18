<?php

    require ('connection.php');

?>

<html>

    <head>

        <title>Edit Catagory</title>

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

                $id =  $_GET['id'];



                $sql1= "SELECT * from cat_list WHERE cat_id =$id  ";



                $query = $conn->query($sql1);



                $data= mysqli_fetch_array($query);



                $cat_id     = $data['cat_id'];

                $cat_name   = $data['cat_name'];

                $cat_edate  = $data['cat_edate'];
                
                $image= $data['image'];

               }





        if(isset($_POST['cat_name'])){

           $new_cat_name  = $_POST['cat_name'];

           $new_cat_edate = $_POST['cat_edate'];

           $new_cat_id    = $_POST['cat_id'];
           
$new_image=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$uploc='/storage/emulated/0/htdocs/php/img/';


           $sql= "UPDATE cat_list SET

                cat_name = '$new_cat_name',

                cat_edate = '$new_cat_edate',
               
               image = '$new_image'

                WHERE cat_id= $new_cat_id";

            if ($conn->query($sql) === TRUE){
                $movefile= move_uploaded_file($tmpname,$uploc.$image);

                header('location:list_cat.php');

                } else {

                echo "Error: " . $sql . "<br>" . $conn->error;

                }

        

        }







        ?>



        <h1>Edit Catagory</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

            Catagory <br> <br>

            <input type="text" name="cat_name" value="<?php echo $cat_name ?>"><br> <br>

            Catagory Entry Date<br> <br>

            <input type="date" name="cat_edate"value="<?php echo $cat_edate ?>"><br> <br>

            <!-- Catagory ID<br> <br> -->

            <input type="text" name="cat_id"value="<?php echo $cat_id ?>" hidden>
            <img class='card-img-top'src='img/<?php echo $image;  ?>' style='width: 120px;
  height: 110px; ' alt='$image'>

<input class='form-control'type="file" name='image'><br> <br>

            <input type="submit" value="Update">

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