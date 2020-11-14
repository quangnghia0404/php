<?php 
     session_start();
     if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
         header("location:login.php");
     }
     if($_SESSION["user"] != 1){
        header("location:javascript://history.go(-1)");
     }
?>
<?php

            $connect = mysqli_connect("localhost", "root", "", "webmau");
            mysqli_set_charset($connect, 'UTF8');

			if(isset($_GET['delete_id'])  ){
				
				$delete_id = $_GET['delete_id'];
                $sql = "DELETE FROM users WHERE id =$delete_id";
                
				$query = mysqli_query($connect,$sql);
				header('location:danhsach.php');
				
			}
			
		?>