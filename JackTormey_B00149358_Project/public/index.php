<?php require_once '../templates/header.php';?>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>MyRetroJersey</title>
    <style>
        body {
            background-image: url('../images/background.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<?php require_once '../templates/navBar.php';?>
    <section>
      <div class="container">
          <div class="about-content">
            <p style="color:black;">
                Step back in time and rediscover the glory days of sports with our exclusive collection of retro jerseys. Welcome to our online store, where nostalgia meets style! 
                Indulge in the timeless charm of vintage designs and iconic team logos that evoke memories of classic games and legendary players. 
                Our carefully curated selection celebrates the rich history and heritage of sports. 
                Whether you're a passionate fan seeking to relive the magic or a fashion enthusiast embracing retro flair, our authentic jerseys are sure to make a statement. 
                Join us on a journey through sporting history and discover your perfect throwback jersey today.</p>
          </div>
</div>
<form action="logout.php" method="POST">
            <button class="logout-btn" type="submit">Logout</button>
        </form>
</section>
        <?php require_once '../templates/footer.php';?>
