<?php

require('connection.php')

?>

<html>

<head>

    <title>Add Catagory</title>

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

        <div class="container-fluid"> <!------Left Menu Start------->

            <div class="row bg-light">



                <?php include('leftbar.php'); ?>



                <!------Left Menu end------->



                <div class="col-sm-7"><!------MAin Menu start------->

                    <?php

                    if (isset($_POST['cat_name'])) {

                        $cat_name = $_POST['cat_name'];
                        $cat_edate = $_POST['cat_edate'];
                        $image = $_FILES['image']['name'];
                        $tmpname = $_FILES['image']['tmp_name'];
                        $uploc = 'C:/xampp/htdocs/store';

                        $sql = "INSERT INTO cat_list (cat_name, cat_edate,image)

                                VALUES ('$cat_name', '$cat_edate', '$image')";

                        if ($conn->query($sql) === TRUE) {
                            $movefile = move_uploaded_file($tmpname, $uploc . $image);
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>";
                        }
                    }

                    ?>

                    <h1>Add Catagory</h1>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                        Catagory <br> <br>

                        <input class='form-control' type="text" name="cat_name"><br> <br>

                        Catagory Entry Date<br> <br>

                        <input class='form-control' type="date" name="cat_edate"><br> <br>
                        <input class='form-control' type="file" name="image"><br> <br>

                        <input class='form-control btn btn-success' type="submit" value="submit">

                    </form>

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