<?php
/*
Template Name: Creative City Worship Page
*/
?>
<?php get_header(); ?>
	
	<div class="main__wrapper">
		<div class="tab__container main">
			<div class="tablink__container">
				<h3>Creative City Worship</h3>
				<ul class="tablink--ul">
					<li class="tablink--li"><a href="#wwa">Who We Are</a></li>
					<li class="tablink--li"><a href="#serv">Service</a></li>
					<li class="tablink--li"><a href="#pas">Pastor Walter</a></li>
					<li class="tablink--li"><a href="#lead">Leaders</a></li>
				</ul>
			</div>
			<div class="tabcontent__container">
				<div class="tabcontent" id="wwa">
					<h1>Creative City Worship</h1>
					<!-- <h3>
						<b>Creative City Worship</b> started with a bunch of people who are passionate about God and passionate to serve others. We strongly believe that our God-given talents should be used to serve the city we are in, so that people can come to know who Jesus is and can worship Him in spirit and in truth. 
						<br><br>
						We started our first <b>Creative City Worship</b> service on November 10th, 2013 with only 12 members. Having only a small amount of volunteers meant that everyone had to multi-task, and on every Sunday one person could have up to 3 ministries! But this has caused us to grow closer to one another and Sunday service became more than just an ordinary church service - it became our extended family gathering to worship God and rejoice in His presence. 
						<br><br>
						Ever since then we've had tremendous miracles in the house of God - new members were added, many volunteered to serve, and we've even been given the opportunity to dedicate 4 young children to God and to baptize our first member on Easter Sunday, 20 April 2014. 
						<br><br>
						We love God wholeheartedly and we pray that many people will be blessed through our ministry. To find out more about us - we welcome you to come visit our Sunday service at 10am.
						<br><br>
						God bless you
					</h3> -->
					<h3><?php echo get_option('shortname_whoweare'); ?></h3>					
				</div>
				<div class="tabcontent" id="serv">
					<h1>Creative City Worship</h1>
					<!-- <h3>
						<b>Weekly Service:</b><br>
						Sunday//10AM<br>
						at ARTSPACE<br>
						Artotel | Jl.Sunda No 3, Jakarta-Thamrin<br>
						<br>
						<b>Contact Person :</b><br>
						Linda - 087.777.147.525
					</h3> -->
					<h3><?php echo get_option('shortname_serviceaddress'); ?></h3>
					<br>
					<h1>Creative Kids</h1>
					<!-- <h3>
						<b>Vision Statement: </b><br>
						"To build a generation of children who has a firm foundation in
						the knowledge of God's Word, has good Christ-based character
						and are successful in their studies."<br>
						<br>
						<b>Mission Statement: </b><br>
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
						</ol>
					</h3> -->
					<h3><?php echo get_option('shortname_kids'); ?></h3>
				</div>
				<div class="tabcontent" id="pas">
					<h1>Pastor Walter Handojo</h1>
					<!-- <h3>
						Being the oldest son of a Pastor, naturally what Walter wanted to be when he grew up, was to be a drummer.<br>
						<br> 
						So during his college years in Melbourne, Australia, Walter formed a pop-rock band named Playground and they 
						played in most Indonesian social events in Melbourne. Playground was a huge success within the local Indonesian 
						community and Walter's love of music and music management grew strong.<br>
						<br>
						At the same time, Walter also ministered in his local church-Indonesian Praise Center in Melbourne-there he discovered 
						his talent as a Pastor when he became a Cell Group leader. After finishing his studies in Melbourne, 
						Walter came back for good to Jakarta and started full-time ministry as the Youth Pastor at his father's church, GBI Altar Filadelfia, in 2009.<br>
						When the opportunity came to open a church branch at Artotel-Thamrin, Walter's father appointed him to become the branch's 
						managing Pastor and allowed Walter to re-name and re-conceptualize the branch to suit Walter's calling as a Pastor.<br>
						<br> 
						On November 10th 2013, Creative City Worship opened its first service with Ps. Walter Handojo as its Pastor.
					</h3> -->
					<h3>
						<?php echo get_option('shortname_pastor'); ?>
					</h3>
				</div>
				<div class="tabcontent" id="lead"></div>
			</div>
		</div>    	
	</div>

</div><!-- /container -->
		
<?php get_footer(); ?>
		