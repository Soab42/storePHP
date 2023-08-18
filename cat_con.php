<?php
   
        $sql = "SELECT * FROM cat_list";
        $query = $conn->query($sql);
        
        
        $data_list=array();
        while($data = mysqli_fetch_array($query)){
            $cat_id = $data['cat_id'];
            $cat_name = $data['cat_name'];
            $data_list[$cat_id] =$cat_name;
        }
?>

        <!-- <h1>Catagory List</h1> -->
   
    

