    <?php include("topbit.php");
    $find_sql = "SELECT * FROM `L2_Prac_game_details` JOIN L2_Prac_genre ON (L2_Prac_game_details.GenreID = L2_Prac_genre.GenreID) JOIN `L2_Prac_developer` ON (`L2_Prac_game_details`.`DeveloperID`=`L2_Prac_developer`.`DeveloperID`)
    ";

    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>

        <div class="box main">
            <h2>All Results</h2>
            
            <?php
            include ("results.php");
            ?>
            
        </div> <!-- / main -->
        
    <?php include("bottombit.php") ?>