<?php
    include 'header.php';
?>

    <div class="container">
        <form class="form-inline my-2 my-lg-0 float-right" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit-search">Search</button>
        </form>
    </div>
    <br><br>

    <div class="container">
    <h1>Front page</h1>
    <h2>All Articles:</h2>
    <br><br>
        <?php
            $sql = "SELECT * FROM article";
            $result = mysqli_query($conn,$sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div>
                        <h3>".$row['title']."</h3>
                        <p>".$row['article']."</p>
                        <p>".$row['author']."</p>
                        <p>".$row['ts']."</p>
                    </div>";
                }
            }
        ?>
    </div>
    

</body>
</html>