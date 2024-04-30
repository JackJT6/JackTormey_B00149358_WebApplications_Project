<?php require_once '../templates/header.php';?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
<title>Search Jerseys</title>
</head>
<body>
    <div class="container">
        <h2>Search Jerseys</h2>
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search jerseys..." required>
            <button type="submit">Search</button>
        </form>
    </div>
    <?php
    
    if (isset($_GET['query'])) {
        
        $search_query = $_GET['query'];
        
        require_once('config.php');
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM jerseys WHERE allJerseys LIKE :query";
        $statement = $connection->prepare($sql);
        
        $query_param = '%' . $search_query . '%'; 
        $statement->bindParam(':query', $query_param, PDO::PARAM_STR);
        
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<div class='container'>";
        echo "<h3>Search Results for: '$search_query'</h3>";
        if (count($result) > 0) {
            echo "<ul>";
            foreach ($result as $row) {
                echo "<li>" . htmlspecialchars($row['allJerseys']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No search results found.</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>


 <?php require_once '../templates/footer.php';?>