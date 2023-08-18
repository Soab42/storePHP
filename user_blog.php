<!DOCTYPE html>

<html>

<head>

	<title>homepage</title>

	<?php include('script.php') ?>

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



<div class="col-sm-9">


	<?php include('test.php'); ?>

</div>
</div>

<!------footer start------->

<div class="container bg-success text-end fs-8 text-white">

			<?php include('footer.php'); ?>

		</div>



		<!------footer Menu end------->

		

				

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>



</body>

</html>

