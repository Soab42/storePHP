<!DOCTYPE html>

<html>

<head>

	<title>homepage</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

	<div class="container ">

		<!------navbar start------->

		<div class="container p-2 bg-success text-center fs-1  ">

			<!-- <h1 class=" text-info text-center">Store Manegement System</h1> -->

			<?php include('navbar.php'); ?>



				</div>

				<div>

					<?php include('menubar.php');?>

				</div>

		<!------navbar end------->

		

		<!------Left Menu start------->

							<div class="container-fluid">  <!------Left Menu Start------->

									<div class="row bg-light">

				

			<?php include('leftbar.php'); ?>

				

		<!------Left Menu end------->



						<div class="col-sm-9"><!------MAin Menu start------->

								<div class="row p-4 text-center">

								<div class="col-4 ">

								<a href="list_cat.php"><i class="fa fa-folder-open fa-4x text-success" aria-hidden="true"></i></a>

								<p>Catagory List</p> 

															

															</div>

					<div class="col-4 ">

				<a href="add_cat.php"> <i class="fa-solid fa-folder-plus fa-4x text-success"></i></a>

				<p>Add Catagory</p>

				</div>

					<div class="col-4">

						<a href="report.php">   </a>

						<a href="report.php"><i class="fa-solid fa-clipboard-list fa-4x text-success"></i></a>

						<p>Catagory Report</p>

					</div>

					

				</div>

<div class="h4 border-bottom border-info"></div>



				<div class="row p-4 text-center">

				<div class="col-4  ">

						<a href="list_prod.php"><i class="fa-solid fa-list-ol fa-4x text-success "></i></a>

						<p style="text-align:justify">Product List</p>

					</div>



					<div class="col-4 ">

						<a href="add_prod.php"><i class="fa-solid fa-cookie-bite fa-4x text-success"></i></a>

				<p>Add Product</p>



					</div>

					

					<div class="col-4">

						<a href="report.php"><i class="fa-solid fa-hat-wizard fa-4x text-success"></i></a>

						<p>Product Report</p>

					</div>

					



<div class="h4 border-bottom border-info"></div>



<div class="col-4 ">

					<a href="list_store.php"><i class="fa fa-folder-open fa-4x text-success" aria-hidden="true"></i></a>

					<p>Store Products List</p> 

					

					</div>

					<div class="col-4 ">

				<a href="add_store.php"> <i class="fa-solid fa-folder-plus fa-4x text-success"></i></a>

				<p>Add Store Products</p>

				</div>

					<div class="col-4">

						<a href="report.php">   </a>

						<a href="report.php"><i class="fa-solid fa-clipboard-list fa-4x text-success"></i></a>

						<p>Store Products Report</p>

					</div>

<div class="h4 border-bottom border-info"></div>



<div class="row p-4 text-center">

<div class="col-4  ">

						<a href="list_spend.php"><i class="fa-solid fa-list-ol fa-4x text-success "></i></a>

						<p style="text-align:justify">Spend Product List</p>

					</div>



					<div class="col-4 ">

						<a href="add_spend.php"><i class="fa-solid fa-cookie-bite fa-4x text-success"></i></a>

				<p>Add Spend Products</p>



					</div>

				

					<div class="col-4">

						<a href="report.php"><i class="fa-solid fa-hat-wizard fa-4x text-success"></i></a>

						<p>Spend Product Report</p>

					</div>

<div class="h4 border-bottom border-info"></div>

					<div class="col-3 ">

						<a href="report.php"><i class="fa-solid fa-person-military-to-person fa-4x text-success "></i></a>

						<p>Daily Report</p>

					</div>

					<div class="col-3  ">

						<a href="report.php"><i class="fa-solid fa-people-roof fa-4x text-success "></i></a>

						<p>Monthly Report</p>

					</div>



					<div class="col-3 ">

						<a href="User_list.php"><i class="fa-solid fa-face-smile fa-4x text-success"></i></a>

				<p>User List</p>



					</div>



					<div class="col-3 ">

						<a href="User_blog.php"><i class="fa-solid fa-server fa-4x text-success"></i></i></a>

				<p>User Blog</p>



					</div>





				</div>

				</div>

				   <!------Main Menu end------->

		<!------footer end------->

		<div class="container bg-success text-end fs-8 text-white">

			<!-- <p>copyright&copy; soab technology@2022</p>  include -->

			<?php include('footer.php'); ?>

		</div>



		<!------footer Menu end------->

		

				

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>



</body>

</html>

