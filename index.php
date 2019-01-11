<?php
  include("db.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <table class="table table-serious">
    <thead>
        <th>Name</th>
        <th>Start At</th>
        <th>Stop At</th>
        <th>Location</th>
      </thead>
      <tbody>
  <?php
      
      //print_r($conn);
      $sql = "SELECT * from tasks";

      if(!($query = mysqli_query($conn, $sql))){
        die(mysqli_error($conn));
      }

      print_r($query);

      if(mysqli_num_rows($query)==0)
            {
                echo "no rows in the table";

            }
      else{
         while($row = mysqli_fetch_assoc($query)){
          
          echo "<tr>";


              echo "<td>".$row["name"]."</td>";
              echo "<td>".$row["starttime"]."</td>";
              echo "<td>".$row["stoptime"]."</td>";
              echo "<td>".$row["location"]."</td>";
               echo "<td><a href='delete.php?taskid=".$row["taskid"]."'>Delete</a></td>"; 
             echo "</tr>"; 
         }

       }


  ?>
 </div>

</tbody>
</table>
</html>