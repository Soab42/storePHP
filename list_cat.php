<?php

require('connection.php')

?>

<html>

<head>

    <title>List Of Catagory</title>

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

        <div class="container-fluid"> <!------Left Menu Start------->

            <div class="row bg-light">



                <?php include('leftbar.php'); ?>



                <!------Left Menu end------->



                <div class="col-sm-9 "><!------MAin Menu start------->



                    <?php

                    $sql = "SELECT * FROM cat_list";

                    $query = $conn->query($sql);



                    echo "<table class='table table-success table-striped'><tr><th>#</th><th>Catagory Name</th><th>Entry Date</th><th>Image<th class='text-center'>Action</th></tr>";



                    while ($data = mysqli_fetch_array($query)) {

                        $cat_id = $data['cat_id'];

                        $cat_name = $data['cat_name'];

                        $cat_edate = $data['cat_edate'];
                        $image = $data['image'];

                        $sl = $sl + 1;
                        echo "<tr class='m-0'>

                <td>$sl</td> 

                <td>$cat_name</td> 

                <td>$cat_edate</td>
                <td><img class='card-img-top'src='img/$image';' style='width: 60px;
  height: 40px; ' alt='$image'></td>

        <td>   <a href='edit_cat.php?id=$cat_id'type='button' class='btn btn-danger btn-sx'>Edit</a>
                
<a href='delete.php?id=$cat_id'type='button' class='btn btn-danger btn-sx'>Delete</a></td>
                </tr>";
                    };

                    echo "</table>";



                    ?>



                    <!-- <h1>Catagory List</h1> -->


                </div>

            </div>

        </div> <!------Main Menu end------->

        <!------footer end------->

        <div class="container-fluid p-1 bg-success text-center fs-4 text-white">

            <!-- <p>copyright&copy; soab technology@2022</p>  include -->

            <?php include('footer.php'); ?>

        </div>



        <!------footer Menu end------->





    </div>
</body>



</html>