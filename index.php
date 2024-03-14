<?php
 $page = basename($_SERVER['REQUEST_URI']); 
 // =================END======================//

 if ($page == '' || $page == '/' || $page == 'SMS') {


     $title = "Home";
     $content = "View/Home.php";

 }elseif($page =='about'){


     $title = "About";
     $content = "View/About.php";

 } elseif($page =='Software+License'){

    // http://localhost/CodeSplitting/about
    $title = "Software License";
    $content = "View/Software.php";

} else{
     // http://localhost/CodeSplitting/anything-here
     $title = "Page not found";
     $content = "View/404.php";
 }


 include 'View/Components/navbar.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    <link rel="icon" href="IMG/logo.ico">

    <title>
        <?= $title; ?>
    </title>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

 

<body class = " bg-gray-200">


<main class = "">

<div class="px-4 sm:ml-64 mx-8 my-8">
   <div class="p-3 mx-auto">
        <?php
            
            if ($content) {
                include $content;
            }
        ?>
</div>
        </div>
    </main>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 
    <script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>