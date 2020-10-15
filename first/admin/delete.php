
      <?php
         if(isset($_POST['delete'])) {
            include('admin/connection.php');
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $file_name = $_POST['fileupload'];
            
            $sql = "DELETE FROM logo WHERE fileupload = $file_name" ;
            $retval = mysqli_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
              
            <?php
         }
      ?>
	  
  <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">File upload ID</td>
                        <td><input name = "fileupload" type = "text" 
                           ></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "delete">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      