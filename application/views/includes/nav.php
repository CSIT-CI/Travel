
			<ul class="wrap">

				<li style="color:blue; text-transform:capitalize; font-family:arial;">

				<?php

				if(isset($_SESSION['user']))
				{
					echo "welcome".$_SESSION['user'];
				}

				?>

				</li>

				<li><?php echo anchor('travel/hotels','Hotels'); ?></a>
					<!-- <ul>
						<li><a href="#">Secondary navigation</a></li>
						<li><a href="#">example links</a></li>
						<li><a href="error.html">Error page</a></li>
						<li><a href="loading.html">Loading page</a></li>
					</ul> -->
				</li>

				<li><?php echo anchor('travel/flights','Flights'); ?></li>
				<li><?php echo anchor('travel/flight_hotel','Flight + Hotel'); ?></li>
				<li><?php //echo anchor('travel/selfcatering','Self Catering'); ?></li>
				<li><?php //echo anchor('travel/cruises','Cruises'); ?></li>
				<li><?php //echo anchor('travel/car_rental','Car Rental'); ?></li>
				<li><?php //echo anchor('travel/hot_deals','Hot Deals'); ?></li>
				<li><?php //echo anchor('travel/vacations','Vacations'); ?></li>
				<li><?php //echo anchor('travel/business_travel','Business Travel'); ?></li>
				<li><?php //echo anchor('travel/group_travel','Group Travel'); ?></li>
				<li><?php //echo anchor('travel/get_inspired','Get Inspired'); ?></li>



				<li><?php echo anchor('travel/travel_guide','Travel Guide'); ?>
					<ul>
						<li><?php echo anchor('travel/location','Location'); ?></li>
					</ul>
				</li>



				<?php if(isset($_SESSION['user']))
				{
				?>
				
				<li>
					<?php echo anchor('travel/logout','Logout'); ?>
				</li>
				
				<?php
				} 
				?>



			</ul>