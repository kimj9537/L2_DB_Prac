
    <?php include("topbit.php");

        $find_sql = "SELECT * FROM `L2_prac_game_detail` ";
        $fnid_query = mysqli_query($dbconnect, $find_sql);
        $find_rs = mysqli_fetch_assoc($find_query);

?>

        <div class="box main">
            <h2>All Results</h2>
            
            <?php
            
            if($count < 1) {
                
                ?>
            <div class="error"></div>
            
                Sorry! There are no results that match your search.
                Please use the search box in the side bar to try again.
            
            <div/> <!-- end error -->
            
            <?php
            } // end no results if 
            
            else {
                do {
                    
                    
                }  // end results 'do'
            } // end else
            
            ?>
            
            

        </div> <!-- / main -->

    <?php include("bottombit.php") ?>
