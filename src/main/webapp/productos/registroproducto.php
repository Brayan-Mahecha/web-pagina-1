<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'astroenergy';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into productos (ProNombre, ProPrecio, Prodetalle, ProFoto, ProidProveedor) VALUES ('$_REQUEST[nombre]', '$_REQUEST[precio]', '$_REQUEST[detalle]', '$imgContent', '$_REQUEST[idproveedor]')");
        if($insert){
            echo'<script type="text/javascript">alert("File uploaded successfully.");
			window.location="regproductos.php";</script>';
        }else{
			echo'<script type="text/javascript">alert("File upload failed, please try again.")
			window.location="regproductos.php";</script>';
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>