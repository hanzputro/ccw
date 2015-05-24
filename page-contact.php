<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
	
    <div class="main__wrapper">
        <div class="contact main">
            <div class="contact__left">
                <h3>Creative City Worship</h3>
                <h3 class="thin">
                    Every Sunday//10AM<br>
                    Artotel - Thamrin<br>
                    Jl.Sunda N0.3, Jakarta<br>
                    <br>
                    Contact Person :<br>
                    Linda - <i>087.777.147.525</i><br>
                </h3>
                <!--
                <?php 
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } 
                ?> 
                --> 
            </div>
    
            <div class="contact__right">
                <h1>Contact Us</h1>
                <div id="respond">
                    <?php echo $response; ?>
                    <form action="<?php the_permalink(); ?>" method="post">
                        <div class="form__wrapper">
                            <label for="name">Full Name</label>
                            <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                        </div>
                        <div class="form__wrapper">
                            <label for="message_email">Email</label>
                            <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                        </div>
                        <div class="form__wrapper">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="<?php echo esc_attr($_POST['phone']); ?>">
                        </div>
                        <div class="form__wrapper">
                            <label for="message_text">Message</label>
                            <textarea type="text" rows="5" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                        </div>
                        <div class="form__wrapper">
                            <label for="message_text">Verification</label>
                            <div class="verify"><input type="text" style="width: 40px; text-align:center;margin:0 0 4px 0;" name="message_human"></div>
                            <!-- <label class="verify" for="" style="">+ 3 = 5</label> -->
                        </div>
                        <input type="submit" class="send--button" name="send--button" value="SUBMIT">
                        <div style="clear:both;"></div>
                    </form>
                </div>
                <br><br>
                <h1>Our Map Location</h1>
                <div class="map__wrapper">
                    <div class="map">
                        <!-- load google map -->
                        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>                         
                        <div id="map-canvas"></div>
                    </div>
                    <div class="map__desc">
                        <h4>
                            Map to Artotel on Carfree Day Detour.<br>
                            <br>
                            From Jalan Kyai Haji Wahid Hasyim:<br>
                            <ul class="map__desc--ul">
                                <li class="map__desc--li">- turn right to Jalan Haji Agus Salim,</li>
                                <li class="map__desc--li">- turn left at Jalan Gereja Theresia,</li>
                                <li class="map__desc--li">- turn right at Jalan Yusuf Adiwinata,</li>
                                <li class="map__desc--li">- make a left at Jalan Haji Agus Salim,</li>
                                <li class="map__desc--li">- turn left at Jalan Sunda</li>
                            </ul>
                            Please drive safely.
                        </h4>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <br>
</div><!-- /container -->
		
<?php get_footer(); ?>
		