<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            
            include('admin/connection.php');
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $file_name = $_POST['fileupload'];
            $sql = "UPDATE logo ". "SET  ". 
               " fileupload = $file_name WHERE id=3" ;
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
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
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>