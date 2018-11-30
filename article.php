<?php
    include 'header.php';
?>

   
    <div class="container">
    <h1>Article page</h1>
   
    <br><br>
        <?php
            $title = mysqli_escape_string($conn,$_GET['title']);
            $timestamp = mysqli_escape_string($conn,$_GET['date']);

            $sql = "SELECT * FROM article WHERE title = '$title' AND ts = '$timestamp'";
            $result = mysqli_query($conn,$sql);
            //var_dump($result);
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