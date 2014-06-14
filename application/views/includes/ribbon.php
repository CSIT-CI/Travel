
				<nav>
					<ul class="profile-nav">
						<li class="active"><a href="#" title="My Account">My Account</a></li>
						<?php if(!isset($_SESSION['user']))
						{
						?>
						<li><?php echo anchor('travel/login','Login'); ?></li>
						<?php 
						}
						?>
						
						
						
						<li><a href="my_account.html" title="Settings">Settings</a></li>
					</ul>
					<ul class="lang-nav">
						<li class="active"><a href="#" title="English (US)">English (US)</a></li>
						<li><a href="#" title="English (UK)">English (UK)</a></li>
						<li><a href="#" title="Deutsch">Deutsch</a></li>
						<li><a href="#" title="Italiano">Italiano</a></li>
						<li><a href="#" title="Русский">Русский</a></li>
					</ul>
					<ul class="currency-nav">
						<li class="active"><a href="#" title="$US Dollar">$US Dollar</a></li>
						<li><a href="#" title="€ Euro">€ Euro</a></li>
						<li><a href="#" title="£ Pound">£ Pound</a></li>
					</ul>
				</nav>