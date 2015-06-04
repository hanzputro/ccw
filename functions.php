<?php 
/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */

/*********************************************************/
/*                fix backslashes Annoyed                */
/*********************************************************/
$_POST = array_map( 'stripslashes_deep', $_POST );
$_GET = array_map( 'stripslashes_deep', $_GET );
$_COOKIE = array_map( 'stripslashes_deep', $_COOKIE );
$_REQUEST = array_map( 'stripslashes_deep', $_REQUEST );


/*********************************************************/
/*                      theme setup                     */
/*********************************************************/
function theme_setup() {
  wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_setup' );

function js_setup() {
  wp_register_script( 'jquery','','');
  wp_register_script('jquery2', get_template_directory_uri().'/assets/js/jquery-1.11.1.js', '', '') ;
  wp_register_script('venobox', get_template_directory_uri().'/assets/js/vendor/venobox.js', '', '') ;
  wp_register_script('scripts', get_template_directory_uri().'/assets/js/partial/scripts.js', '', '') ;

  wp_enqueue_script( array('jquery', 'jquery2', 'venobox', 'scripts'));   
}  
add_action('wp_enqueue_scripts', 'js_setup');




/*********************************************************/
/*                 Option theme setup                    */
/*********************************************************/
function theme_settings_init(){
register_setting( 'theme_settings', 'theme_settings' );
wp_enqueue_style("panel_style", get_template_directory_uri()."/panel.css", false, "1.0", "all");
}
/*---------------------------------------------------
add settings page to menu
----------------------------------------------------*/
function add_settings_page() {
add_menu_page( __( 'Theme Options' .'' ), __( 'Theme Options' .'' ), 'manage_options', 'settings', 'theme_settings_page');
}

/*---------------------------------------------------
add actions
----------------------------------------------------*/
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );
/* ----------------------------------------------------------
Declare vars
------------------------------------------------------------- */
// $themename = "Theme Name";
$themename = "";
$shortname = "shortname";
$categories = get_categories('hide_empty=0&orderby=name');
$all_cats = array();
foreach ($categories as $category_item ) {
$all_cats[$category_item->cat_ID] = $category_item->cat_name;
}
array_unshift($all_cats, "Select a category");
/* ---------------------------------------------------------
Declare options
----------------------------------------------------------- */
$theme_options = array (
  array( "name" => $themename." Options",
  "type" => "title"),
  /* ---------------------------------------------------------
  General section
  ----------------------------------------------------------- */
  // array( "name" => "General",
  // "type" => "section"),
  // array( "type" => "open"),

  // array( "name" => "Logo URL",
  // "desc" => "Enter the link to your logo image",
  // "id" => $shortname."_logo",
  // "type" => "text",
  // "std" => ""),

  // array( "name" => "Custom Favicon",
  // "desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
  // "id" => $shortname."_favicon",
  // "type" => "text",
  // "std" => get_bloginfo('url') ."/assets/images/favicon.ico"),
  // array( "type" => "close"),

  /* ---------------------------------------------------------
  Home section
  ----------------------------------------------------------- */
  array( 
    "name" => "Homepage",
    "type" => "section"),
  array( 
    "type" => "open"),
  array( 
    "name" => "Quote",
    "desc" => "",
    "id" => $shortname."_quote",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "Discovering and Maximizing Our God-Given TALENTS to Serve The CITY We Are In, and to Bring People to WORSHIP God in Spirit and in Truth"),
  array( 
    "type" => "close"),

   /* ---------------------------------------------------------
  CCW section
  ----------------------------------------------------------- */
  array( 
    "name" => "Creative City Worship Page",
    "type" => "section"),
  array( 
    "type" => "open"),
  array( 
    "name" => "Who We Are",
    "desc" => "",
    "id" => $shortname."_whoweare",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "<b>Creative City Worship</b> started with a bunch of people who are passionate about God and passionate to serve others. We strongly believe that our God-given talents should be used to serve the city we are in, so that people can come to know who Jesus is and can worship Him in spirit and in truth. 
            
            We started our first <b>Creative City Worship</b> service on November 10th, 2013 with only 12 members. Having only a small amount of volunteers meant that everyone had to multi-task, and on every Sunday one person could have up to 3 ministries! But this has caused us to grow closer to one another and Sunday service became more than just an ordinary church service - it became our extended family gathering to worship God and rejoice in His presence. 
            
            Ever since then we've had tremendous miracles in the house of God - new members were added, many volunteered to serve, and we've even been given the opportunity to dedicate 4 young children to God and to baptize our first member on Easter Sunday, 20 April 2014. 
          
            We love God wholeheartedly and we pray that many people will be blessed through our ministry. To find out more about us - we welcome you to come visit our Sunday service at 10am.
         
            God bless you"),
  
  array( 
    "name" => "Service Address",
    "desc" => "",
    "id" => $shortname."_serviceaddress",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "Weekly Service:
              Sunday//10AM
              at ARTSPACE
              Artotel | Jl.Sunda No 3, Jakarta-Thamrin

              Contact Person :
              Linda - 087.777.147.525"),

  array( 
    "name" => "Creative Kids",
    "desc" => "",
    "id" => $shortname."_kids",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "<b>Vision Statement: </b>
            &quot;To build a generation of children who has a firm foundation in
            the knowledge of God's Word, has good Christ-based character
            and are successful in their studies.&quot;
            
            <b>Mission Statement: </b>
            <ol>
              <li>Providing the truth of God's Word using simple stories and
                activities that the children will understand.</li>
              <li>Providing an atmosphere of love and joy every week during 
                Creative Kids' Sunday service.</li>
              <li>Enlisting Sunday School volunteers who love God and love 
                children, who can be good Christian role models for the 
                children they teach.</li>
              <li>Praying for the children' studies and giving them support   
                whenever able to.</li>
            </ol>"),

  array( 
    "name" => "Pastor Walter",
    "desc" => "",
    "id" => $shortname."_pastor",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "Being the oldest son of a Pastor, naturally what Walter wanted to be when he grew up, was to be a drummer.

              So during his college years in Melbourne, Australia, Walter formed a pop-rock band named Playground and they played in most Indonesian social events in Melbourne. Playground was a huge success within the local Indonesian community and Walter's love of music and music management grew strong.

              At the same time, Walter also ministered in his local church-Indonesian Praise Center in Melbourne-there he discovered his talent as a Pastor when he became a Cell Group leader. After finishing his studies in Melbourne, Walter came back for good to Jakarta and started full-time ministry as the Youth Pastor at his father's church, GBI Altar Filadelfia, in 2009.
              When the opportunity came to open a church branch at Artotel-Thamrin, Walter's father appointed him to become the branch's managing Pastor and allowed Walter to re-name and re-conceptualize the branch to suit Walter's calling as a Pastor.

              On November 10th 2013, Creative City Worship opened its first service with Ps. Walter Handojo as its Pastor."),

  array( 
    "type" => "close"),

  /* ---------------------------------------------------------
  Contact section
  ----------------------------------------------------------- */
  array( 
    "name" => "Contact Page",
    "type" => "section"),
  array( 
    "type" => "open"),
  array( 
    "name" => "Contact Address",
    "desc" => "",
    "id" => $shortname."_contactaddress",
    "type" => "textarea",
    "options" => $all_cats,
    "std" => "Weekly Service:
              Sunday//10AM
              at ARTSPACE
              Artotel | Jl.Sunda No 3, Jakarta-Thamrin

              Contact Person :
              Linda - 087.777.147.525"),
  array( 
    "type" => "close"),

  /* ---------------------------------------------------------
  Social Media section
  ----------------------------------------------------------- */
  array( 
    "name" => "Social Media",
    "type" => "section"),
  array( 
    "type" => "open"),
  array( 
    "name" => "Facebook",
    "desc" => "Enter the link to your facebook account",
    "id" => $shortname."_fblink",
    "type" => "text",
    "options" => $all_cats,
    "std" => "https://www.facebook.com/your_account"),
  array( 
    "name" => "Twitter",
    "desc" => "Enter the link to your twitter account",
    "id" => $shortname."_twitlink",
    "type" => "text",
    "options" => $all_cats,
    "std" => "https://www.twitter.com/your_account"),
  array( 
    "name" => "Path",
    "desc" => "Enter the link to your path account",
    "id" => $shortname."_pathlink",
    "type" => "text",
    "options" => $all_cats,
    "std" => "https://www.path.com/your_account"),
  array( 
    "name" => "Instagram",
    "desc" => "Enter the link to your instagram account",
    "id" => $shortname."_instagramlink",
    "type" => "text",
    "options" => $all_cats,
    "std" => "https://www.instagram.com/your_account"),
  array( 
    "type" => "close"),

  /* ---------------------------------------------------------
  Footer section
  ----------------------------------------------------------- */
  array( 
    "name" => "Footer",
    "type" => "section"),
  array( 
    "type" => "open"),
  array( 
    "name" => "Copyright",
    "desc" => "",
    "id" => $shortname."_copyright",
    "type" => "text",
    "options" => $all_cats,
    "std" => "Copyright 2014 Creative City Worship. All Right Reserved"),
  array( 
    "type" => "close")
);

/*---------------------------------------------------
Theme Panel Output
----------------------------------------------------*/
function theme_settings_page() {
  global $themename,$theme_options;
  $i=0;
  $message=''; 
  if ( 'save' == $_REQUEST['action'] ) {
   
    foreach ($theme_options as $value) {
      update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
   
    foreach ($theme_options as $value) {
      if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
    $message='saved';
  }
  else if( 'reset' == $_REQUEST['action'] ) {
     
    foreach ($theme_options as $value) {
      delete_option( $value['id'] ); }
    $message='reset';      
  }
 
  ?>
  <div class="wrap options_wrap">
    <div id="icon-options-general"></div>
    <h2><?php _e( ' Theme Options' ) //your admin panel title ?></h2>
    <?php
    if ( $message=='saved' ) 
      echo '<div class="updated settings-error" id="setting-error-settings_updated"><p>'.$themename.' settings saved.</strong></p></div>';
    if ( $message=='reset' ) 
      echo '<div class="updated settings-error" id="setting-error-settings_updated"><p>'.$themename.' settings reset.</strong></p></div>';
    ?>
    <!-- <ul>
      <li>View Documentation |</li>
      <li>Visit Support |</li>
      <li>Theme version 1.0 </li>
    </ul> -->
    <div class="content_options">
      <form method="post">
 
      <?php foreach ($theme_options as $value) {
     
        switch ( $value['type'] ) {
       
          case "open": ?>
            <?php break;
         
          case "close": ?>
            </div>
            </div><br />
            <?php break;
         
          case "title": ?>
            <div class="message">
              <!-- <p>To easily use the <?php echo $themename;?> theme options, you can use the options below.</p> -->
            </div>
            <?php break;
         
          case 'text': ?>
            <div class="option_input option_text">
                <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                <input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
                <small><?php echo $value['desc']; ?></small>
                <div class="clearfix"></div>
            </div>
            <?php break;
         
          case 'textarea': ?>
            <div class="option_input option_textarea">
            <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
            <textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
            <small><?php echo $value['desc']; ?></small>
            <div class="clearfix"></div>
            </div>
            <?php break;
         
          case 'select': ?>
            <div class="option_input option_select">
            <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <?php foreach ($value['options'] as $option) { ?>
                <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
            <?php } ?>
            </select>
            <small><?php echo $value['desc']; ?></small>
            <div class="clearfix"></div>
            </div>
            <?php break;
         
          case "checkbox": ?>
            <div class="option_input option_checkbox">
            <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
            <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
            <input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /> 
            <small><?php echo $value['desc']; ?></small>
            <div class="clearfix"></div>
            </div>
            <?php break;
         
          case "section": 
            $i++; ?>
              <div class="input_section">
              <div class="input_title">
              
              <h3><img src="<?php echo get_template_directory_uri();?>/assets/images/options.png" alt="">&nbsp;<?php echo $value['name']; ?></h3>
              <span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="button-primary" value="Save changes" /></span>
              <div class="clearfix"></div>
            </div>
            <div class="all_options">
            <?php break;
          
        }
      }?>
      <input type="hidden" name="action" value="save" />
      </form>
      <form method="post">
        <p class="submit">
        <input name="reset" type="submit" value="Reset" />
        <input type="hidden" name="action" value="reset" />
        </p>
      </form>
    </div>
    <div class="footer-credit">
      <center>
        <!-- <p>This theme was made by <a title="" href="" target="_blank" >Hanzputro</a>.</p> -->
      </center>
    </div>
  </div>
  <?php
}




/*********************************************************/
/*                 menu navigation setup               */
/*********************************************************/
function menu_setup() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'menu_setup' );

function set_option_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
      // 'another-menu' => __( 'Another Menu' ),
      // 'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'set_option_menu' );




/*********************************************************/
/*                  slider home setup                  */
/*********************************************************/
// add feature image first
add_theme_support('post-thumbnails');
// Create Slider Post Type
require( get_template_directory() . '/slider/slider_post_type.php' );
// Create Slider
require( get_template_directory() . '/slider/slider.php' );




/*********************************************************/
/*                   Gallery setup                       */
/*********************************************************/
remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'custom_gallery');

function custom_gallery($attr) {
  $post = get_post();
  static $instance = 0;
  $instance++;

  # hard-coding these values so that they can't be broken
  $attr['columns'] = 1;
  $attr['size'] = 'full';
  $attr['link'] = 'none';
  $attr['orderby'] = 'post__in';
  $attr['include'] = $attr['ids'];

  #Allow plugins/themes to override the default gallery template.
  $output = apply_filters('post_gallery', '', $attr);  

  if ( $output != '' )
    return $output;

  # We're trusting author input, so let's at least make sure it looks like a valid orderby statement
  if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
      unset( $attr['orderby'] );
  }

  extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'div',
    'icontag'    => 'div',
    'captiontag' => 'p',
    'columns'    => 1,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
  ), $attr));

  $id = intval($id);
  if ( 'RAND' == $order )
    $orderby = 'none';

  if ( !empty($include) ) {
    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }

  } elseif ( !empty($exclude) ) {
    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

  } else {
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  }

  if ( empty($attachments) )
    return '';
  $gallery_style = $gallery_div = '';

  if ( apply_filters( 'use_default_gallery_style', true ) )
    $gallery_style = "<!-- see gallery_shortcode() in functions.php -->";
    $gallery_div = "<div id='homepage-gallery-wrap' class='gallery gallery-columns-1 gallery-size-full'>";
    $output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );  

  foreach ( $attachments as $id => $attachment ) {
    $link = wp_get_attachment_link($id, 'full', true, false); //get hyperlink for images gallery
    $nonlink = wp_get_attachment_url($attachment->ID); //get src path img without link
    $output .= "<div class='homepage-gallery-item'>";
    $output .= "
      <div class='homepage-gallery-icon'>        
          <img src='$nonlink'/>
      </div>";

    if ( $captiontag && trim($attachment->post_excerpt) ) {
      $output .= "
        <p class='wp-caption-text homepage-gallery-caption'>
        " . wptexturize($attachment->post_excerpt) . "
        </p>";
    }
    $output .= "</div>";
  }

  $output .= "</div>\n";
  return $output;
}




/*********************************************************/
/*                 Form Contact Setup                   */
/*********************************************************/
// response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){
    global $response;

    if($type == "success"){
      $response = "<div class='success'>{$message}</div>";
    }
    else{
      $response = "<div class='error'>{$message}</div>";
    }
}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$phone = $_POST['phone'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$content_email = $phone  . "\r\n" . $message  . "\r\n";
$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

if (isset($_POST['send--button'])){
    if(empty($name) || empty($message) || empty($email) || empty($human) || empty($phone)){        
        my_contact_form_generate_response("error", $missing_content);
    }
    else{        
        if($human == 2 ){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                my_contact_form_generate_response("error", $email_invalid);
            }
            else{
                if(!empty($name) || !empty($message) || !empty($email) || !empty($human) || !empty($phone)){
                    $sent = wp_mail($to, $subject, strip_tags($content_email), $headers);
                    if($sent){
                        my_contact_form_generate_response("success", $message_sent); //message sent!
                    } 
                    else{
                        my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                    }   
                }                
            }     
        }
        else{            
            my_contact_form_generate_response("error", $not_human);
        }
    }
}