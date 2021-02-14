<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="ddtf"></script>


<style>

.slider{
  width: 1250px;
  height: 405px;
  background-repeat: no-repeat;
  margin: auto;
  animation:slider 10s infinite;
  background: url(s2.jpg);
  border: 1px solid  black;
}

@keyframes slider{
  
  25%{
    background: url(s2.jpg);
  }
  50%{
    background: url(b2.jpg);
  }
  75%{
    background: url(s3.jpg);
  }
  100%{
    background: url(s5.jpg);
  }
  
}


ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  background-color: #ff6666;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

select{
  width: 60px;
  height: 40px;
  border-radius: 5px; 
  border: 1px solid black;
  background-color: pink;
}

option{
  background-color: white;
  width: 50px;

}

</style>

</head>

<body>

<?


?>
<div class="slider">  
  </div>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="register.php">Registration</a></li>
  <li><a href="donor_and_request_form.php">Donor and Requester form</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<br><br>
<center>
      <p><b>Blood Type</b></p>
      <select name="Blood Type" id="Blood Type">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="O-">O-</option>
        <option value="AB-">AB-</option>
 
 </select>
</center>

<div class="container" width="500px">
  <hr><center><h3>Data</h3></center></h3>
  <div class="rt">
    <form action="" method="post">
      
      <input type="text" name="valuetosearch" placeholder="Search Value"><br><br>
      <input type="submit" name="search" placeholder="Filter"><br><br>

    </form>
    <table class="table table-stripped" align="center">
      <tr>
      <th>Full Name</th>
      <th>Type</th>
      <th>Blood Group Type</th>
     
      </tr>
      <?php

                  if(isset($_POST['search']))
          {
                  $valuetosearch = $_POST['valuetosearch'];
                  $qry = "SELECT * FROM 'donor_request'";
                  $search_result = filterTable($qry);
          }
          else
          {
            //$qry = "SELECT * FROM 'donor_request'";
            //$search_result = filterTable($qry);
          }

          function filterTable($qry)
          {
               $conn =mysqli_connect("localhost","root","","resgistration");
               $filter_result = mysqli_query($conn,$qry);
               return $filter_result;
          }

       if (mysqli_num_rows($qry)) 
        {
          //  while ($row = mysqli_fetch_array($search_result)) :?>
                    <td><?php echo $row["full_name"];?>
                    <td><?php echo $row["type"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $row["blood_type"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    
        </tr>
          <?php
             
         // endwhile;
        }
        ?>

    </table><br>
    
  </div>
</div>

 
</body>
</html>