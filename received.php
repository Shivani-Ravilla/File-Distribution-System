<!DOCTYPE html>
<html lang="en">

<head>
    <title>FILE DISTRIBUTION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">FILE</span> <span class="text-primary h4">DISTRIBUTION</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="upage.php">user page</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="l">admin</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="private.php">private file</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="shared.php">shared file</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">Contact</a>
                        </li>  -->
                    </ul>
                </div>
                <!-- <div class="navbar align-self-center d-flex"> -->
                    <!-- <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a> -->
                    <div  class="btn btn-warning text-white  radius-0 light-300">
                    <a class="nav-link" href="logout.php">logout</a>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </nav>
    <!-- Close Header -->
    <div class="m-3 text-uppercase text-primary">            
    <?php
        
        session_start();
         if(isset($_SESSION['id'])){
            echo "welcome - ".$_SESSION['id'];
         }else{
            echo "<script> window.location.href='index.php' </script>"; 
         }
        ?>
        </div>
        
    <table border="1px;" class="table">
            <tr>
                <th>filename</th>
                <th>description</th>
                <th>receivedfile</th>
                <th>Sender</th>
                <th>download</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            </tr>
            <?php
            include './dbconnection.php';
            $query="select *
            from sharedfile
            where receiver='{$_SESSION['id']}'";
            $result=mysqli_query($link,$query);
            while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['filename'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo  $row['uploadedfile'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><a href="uploads/<?php echo $row['uploadedfile'];?>">download</a></td>
            </tr>
            <?php
            
        }
            ?>
        </table>
        
    
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for Page Script -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // Slide
            $('.templatemo-slide-link').click(function() {
                var this_href = $(this).attr('href');
                $('#templatemo-slide-link-target img').attr('src', this_href);
                return false;
            });
            // End Slide
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>