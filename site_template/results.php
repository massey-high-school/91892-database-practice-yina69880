            <?php
            
            if($count < 1){
                
                ?>
            
            <div class="error">
            
                Sorry! There are no results that match your search.
                Please use the search box in the side bar to try again.
            
            </div>  <!-- end error -->
            
            <?php
            } // end no results if
            
            else {
                do
                {
                    
                    ?>
            
            <!-- Results go here -->
            <div class="results">
                
                <!-- Heading and subtitles -->
                
                <div class ="flex-container">
                    <div>               
                        <span class="sub_heading">
                            <a href="<?php echo $find_rs['URL']; ?>">
                                <?php echo $find_rs['Name']; ?>
                            </a>
                        </span> 
                    </div> <!-- / Title -->
                    
                    <?php
                        if($find_rs['Subtitle'] != "") 
                        
                        {
                        ?>
                    <div>
                        
                        &nbsp; &nbsp; | &nbsp; &nbsp;
                        
                        <?php echo $find_rs['Subtitle']; ?>
                        
                    </div> <!-- / subtitle -->
                    
                    <?php
                        }
                    ?>
                
                </div> 
                <!-- / Heading ans subtitles -->
                
                <!-- Ratings Area -->
                
                <div class="flex-container">
                    
                    <!-- Partial Satrs Original Source:
                    https://codepen.io/Bluetidepro/pen/GkpEa -->
                    <div class="star-ratings-sprite">
                        <span style="width:52%" class="star-ratings-sprite-rating"></span>

                
                    </div> <!-- / star raying div -->
            
                    <div class="actual-rating">
                        (<?php echo $find_rs['UserRating'] ?> based 
                        on <?php echo number_format($find_rs['Rating Count']) ?> 
                        ratings)
                        
                    </div> <!-- / text rating div -->
                    
                </div> <!-- / tatings flexbox -->
                
                <!--- /Ratings Area -->
                
                <!-- Price -->
                <?php
                    
                    if($find_rs['Price'] == 0) {
                        ?>
                    <p>Free!
                       <?php
                            if ($find_rs['In App'] == 1)
                                {
                                    ?>
                                        (In App Purchase)
                                    <?php
                                } // end In App if
                                
                              
                            ?>
                    </p>
                
                    <?php
                    } // end price if
                    
                    else {
                        
                        ?>
                    <b>Price:</b> $<?php echo $find_rs['Price']?>
                    <?php
                    } // end price else (dislplays cost)
                ?>
                
                <!-- / Price -->
            <p>
                <!-- Developer, Genre and Age... -->
                <b>Developer:</b> <?php echo $find_rs['Developer']?><br />
                <b>Genre:</b> <?php echo $find_rs['Genre']?><br />
                Suitable for ages <b><?php echo $find_rs['Age']?></b> and up
                
            </p>
            <p> 
                <i><?php echo $find_rs['Description']?></i>
            </p>

                
            </div> <!-- / results -->
            
            <br />
                   <?php 
                }  // end results 'do'
                
                while 
                    ($find_rs=mysqli_fetch_assoc($find_query));
                
            }  // end else
            
            ?>
