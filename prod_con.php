<?php
   
        $sql = "SELECT * FROM product_list";
        $query = $conn->query($sql);
        
        
        $data_list=array();
        while($data = mysqli_fetch_array($query)){
            $prod_id = $data['prod_id'];
            $prod_name = $data['prod_name'];
            $data_list[$prod_id] =$prod_name;
        }
?>