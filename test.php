
<?php include('connection.php');
?>


<html>
<head><title>test page</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
<a href='home.php'>Home</a>
<?php

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $info=$_POST['info'];
    
$image=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$uploc='\img\';

$sql= 'INSERT INTO card ('image', 'title', 'info') VALUES ('$image','$title','$info)';

                if($conn->query($sql)==true){
             $movefile= move_uploaded_file($tmpname,$uploc.$image);

    echo 'data inserted succesfully';
    
}
  else{
      echo 'eror';
  }     
}

?>
<div class='container'>

<div class='row mt-3'>
    
    <?php 

        $sql2 = 'SELECT * FROM card';

        $query = $conn->query($sql2);
    
    
    while ($data = mysqli_fetch_array($query)){

            $id = $data['id'];

            $image= $data['image'];

            $title = $data['title'];
            $info = $data['info'];
            
                                    
        ?>
        
     <div class='col-md-3' style='width: 12rem;'> 
       
      <div class='card'>
        <div class='card-body'>
        
        
        

  <img class='card-img-top'  src='img/<?php echo $image;  ?>' style='width: 120px;
  height: 110px; ' alt='$image'>


    <h6 class='card-title'><?php echo $title; ?></h6>

    <p class='card-text'style='width: 10rem;'><?php echo $info; ?></p>

    <a href='#'  class='btn btn-primary text-center'>See Profile Details</a>
  
        
        
        
         
          
        </div>
      </div>
      
   </div>
      
          
    
    
   <?php }
 ?>  
 </div>
    
<div class='card p-2' style='width: 10rem;'>
<form action='user_blog.php' method='POST' enctype='multipart/form-data'>

  Select image to upload:
<br><br>
  <input type='file' name='image'><br><br>
<input type='text'style='width: 8rem;' name='title'placeholder='Title'><br><br>
<textarea style='width: 8rem;' type='text' name='info'placeholder='enter description here'></textarea><br><br>
  <input style='width: 8rem;' class='btn btn-primary text-center' type='submit' value='submit' name='submit'>
</form>
</div>
</div>
</div>

</body>
</html>



























