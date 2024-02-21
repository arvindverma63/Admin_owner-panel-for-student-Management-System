<?php
  include('config.php');

?>
  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title></title>
    <style type="text/css">
  .text-muted{
    margin-left: 2%;
    margin-bottom: 2%;
  }
 .card{
  margin-left: 10%;
  margin-right: 10%;
  margin-top: 3%;
 }
#Download{
   height: 50px;
   width: 150px;
   background-color: lightblue;
   color: black;
   border: none;
   border-radius: 10px;
}
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SvInfoTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notice</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fee Pay
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="make-payment.php">Make Payment</a></li>
            <li><a class="dropdown-item" href="see-payment.php">See Payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change-password.php">Change-Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>
    
      <?php 
                           $sql_query="select * from notice";
                           $result=mysqli_query($conn,$sql_query);
                           if($result->num_rows>0){
                            while($row=$result->fetch_assoc())
                            {
                              
                                               echo "<div class='card'>
                                                <div class='card-header'>
                                                  Notice
                                                </div>
                                                <div class='card-body'>
                                                  <h5 class='card-title'>Title: ".$row['title']."</h5>
                                                  <p class='card-text'>Body: ".$row['body']."</p>";
                                                echo "<a href='../noticeUploads/".$row['file']."' download='".$row['file']." class='btn btn-primary'>Download</a>
                                                </div>
                                                <small class='text-muted'><b>".$row['timestamp']."</b></small>
                                              </div>";                               
                                               }
                                             }
                                           

                                       
                            ?>

    
  </body>
  </html>