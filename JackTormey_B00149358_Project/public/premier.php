<?php require_once '../templates/header.php';?>
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
    <div class="container">
        <div class="product">
            <img src="../images/club_jersey_1.jpg" alt="Club Jersey 1" style="width: 200px;height: 200px">
            <h3>Manchester United</h3>
            <p>€49.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="../images/club_jersey_3.jpg" alt="Club Jersey 3" style="width: 200px;height: 200px">
            <h3>Real Madrid</h3>
            <p>€59.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="../images/club_jersey_2.jpg" alt="Club Jersey 2" style="width: 200px;height: 200px">
            <h3>Barcelona</h3>
            <p>€39.99</p>
            <button>Add to Cart</button>
        </div>
    </div>
        <?php require_once '../templates/footer.php';?>