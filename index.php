<?php

$page = $_GET['do'];
include "./pages.php";


// main page or new page

$header_page = "header1";
$main_page = "main1";
$article_page = "article1";
$footer_page = "footer1";


foreach ($mas as $value) {

if ($value['urlpg'] == $page)
{
$header_page = $value['head'];
$main_page = $value['main'];
$article_page = $value['artic'];
$footer_page = $value['foot'];
}

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    /> -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    	<link href="./css/slick.css" rel="stylesheet" />
	    <link href="./css/slick-theme.css" rel="stylesheet" />
      
	    <script src="./js/slickNEW.js"></script>



    <title>SteliKyiv</title>
  </head>

<body>
  <main class="main-content">
<header>
<?php 
include "./header/header.php";
?>
</header>

<main>
<?php 
include "./main/main.php";
?>
</main>

<footer>
<?php 
include "./footer/footer.php";
?>
</footer>

</body>
   </main>
</html>
