<?php
    include 'header.php';
?>

<div class="container">
    <h1>Search page</h1>
    <?php
    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql ="SELECT * FROM article WHERE title LIKE '%$search%' OR article LIKE '%$search%' OR author LIKE '%$search%' OR ts LIKE '%$search%'";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results found";

        if($queryResult>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div>
                <a href='article.php?title=".$row['title']."&date=".$row['ts']."'><h3>".$row['title']."</h3>
                <p>".$row['article']."</p>
                <p>".$row['author']."</p>
                <p>".$row['ts']."</p>
                </a>
            </div>";
            }
        }else {
            echo "No such result";
        }
    
    }
    ?>

</div>