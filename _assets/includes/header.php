	<?php $current_page = basename($_SERVER['SCRIPT_FILENAME']); ?>

	<header>
		
		<div class="connect-bar">
			
			<div class="container">
				
				<div class="row">
					
					<div class="twelve columns">
						
						<a href="contact.php">
							<span class="icon"><svg id="apply" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve"><path fill="#FFFFFF" d="M15 0C6.7 0 0 6.7 0 15c0 8.3 6.7 15 15 15s15-6.7 15-15C30 6.7 23.3 0 15 0zM15 28.5C7.6 28.5 1.5 22.4 1.5 15 1.5 7.6 7.6 1.5 15 1.5c3.4 0 6.4 1.2 8.8 3.3L13 18.2l-3.9-5.4 -3.2 2.8 6.9 10.2 14-17.5c1.1 2 1.7 4.2 1.7 6.6C28.5 22.4 22.4 28.5 15 28.5z"/></svg></span>
							Apply <span class="u-hide-up-to-phablet">&nbsp;for Work</span>
						</a>
						
						<div class="social u-pull-right">
							
							<a href="https://www.facebook.com/green.jobworks">
								<span class="icon"><svg id="facebook" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve"><g><path fill="#FFFFFF" d="M15 1.5c7.4 0 13.5 6.1 13.5 13.5S22.4 28.5 15 28.5 1.5 22.4 1.5 15 7.6 1.5 15 1.5M15 0C6.7 0 0 6.7 0 15s6.7 15 15 15 15-6.7 15-15S23.3 0 15 0L15 0z"/></g><path id="f" fill="#FFFFFF" d="M16.1 26.6V16.2h3.3l0.5-3.4h-3.8v-2.5c0-1.1 0.3-1.9 1.9-1.9l2 0 0.5-3.4c-0.4 0-1.6-0.2-3-0.2 -2.9 0-5 1.8-5 5.1v2.8H9.3v3.4h3.3v10.4H16.1z"/></svg></span>
							</a>
														
							<a href="https://www.linkedin.com/company/green-jobworks">
								<span class="icon"><svg id="linkedin" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve"><g><path fill="#FFFFFF" d="M15 1.5c7.4 0 13.5 6.1 13.5 13.5S22.4 28.5 15 28.5 1.5 22.4 1.5 15 7.6 1.5 15 1.5M15 0C6.7 0 0 6.7 0 15s6.7 15 15 15 15-6.7 15-15S23.3 0 15 0L15 0z"/></g><g><path fill="#FFFFFF" d="M11.4 8.1c0 1.2-0.9 2.1-2.1 2.1 -1.2 0-2.1-0.9-2.1-2.1C7.2 6.9 8.2 6 9.3 6 10.5 6 11.4 6.9 11.4 8.1z"/><rect x="7.5" y="10.8" fill="#FFFFFF" width="3.6" height="12.5"/><path fill="#FFFFFF" d="M16 11.9L16 11.9c0.8-1.1 2-1.5 3.3-1.5 3.4 0 4.3 2.4 4.3 5.3v7.6H20v-6.6c0-1.5 0.1-3.4-1.9-3.4 -2.1 0-2.1 2.4-2.1 3.9v6.2h-3.6V10.8H16V11.9z"/></g></svg></span>
							</a>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>


		<div class="nav-outer-wrap">
			
			<nav class="nav-inner-wrap">
				
				<div class="navigation">
					
					<input type="checkbox" id="nav" />
					<label for="nav"></label>
					
					<div class="mobile-language-wrap">
						<a href="#" class="eng-mobile active">EN</a>
						<a href="#" class="esp-mobile">ES</a>
					</div>
					
					<ul>
						<li><a <?php if ($current_page == 'about.php') { echo 'class="active"';} ?> href="about.php">About Us</a></li>
						<li><a <?php if ($current_page == 'services.php' || $current_page == 'offsite.php') { echo 'class="active"';} ?> href="services.php">Services</a></li>
						<li><a <?php if ($current_page == 'customers.php') { echo 'class="active"';} ?> href="customers.php">Customers</a></li>
						<li><a <?php if ($current_page == 'contact.php' || $current_page == 'thanks.php') { echo 'class="active"';} ?> href="contact.php">Contact</a></li>
						<li><a class="active" href="#">EN</a><a href="#">ES</a></li>
					</ul>
				
					<div class="brand">
						
						 <?php 
							if ($current_page == 'index.php') { 
							 	echo '<div class="logo">';
							} else { 
							 	echo '<a class="logo" href="index.php">';
							} 
						?> 
							
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" viewBox="0 0 200 60" xml:space="preserve"><metadata><x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c067 79.157747, 2015/03/30-23:40:42        "><rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:Description rdf:about=""/></rdf:RDF></x:xmpmeta></metadata><path d="M14.1 55.5V51H10l-0.5-3.1h8.2v9.7c-0.7 0.9-3.2 2.4-7.1 2.4C1.8 60 0.2 53.2 0 49c0-2.3 0.6-10.8 10.4-10.9 4.5-0.1 6.2 1.7 6.2 1.7L16 43.2c0 0-2.3-1.7-5.6-1.7 -3.3 0-6.2 2.4-6.3 7.6 -0.1 5.1 3.1 7.5 6.4 7.5C13.7 56.6 14.1 55.5 14.1 55.5" fill="#73BF45"/><path d="M62.9 44.9h-3.2v14.5h3.7v-9.8c2.2-2.3 5.2-2.4 5.2 0v9.8h3.7V49c0-5.4-6.3-5.7-9.3-1.7V44.9z" fill="#73BF45"/><path d="M23.5 44.9h-3.2v14.5h3.7v-8.2c1.2-2.1 3.7-3.2 5.1-3.1l-0.4-3.5c-2.9 0.3-3.8 1.7-5.1 3.5V44.9z" fill="#73BF45"/><path d="M37.1 57.2c2.3 0 5-1.9 5-1.9l0.5 2.8c0 0-2.9 1.9-5.8 1.9 -3.9 0-7.2-2.9-7.2-7.1 0-4.2 1.6-8.2 6.6-8.2 4.5 0 6.5 2.7 6.5 8.2h-9.3C33.1 54 33.9 57.2 37.1 57.2M33.3 50.5h5.7c0 0-0.2-3.3-2.9-3.3C34.4 47.2 33.3 49.1 33.3 50.5" fill="#73BF45"/><path d="M51.8 57.2c2.3 0 5-1.9 5-1.9l0.5 2.8c0 0-2.9 1.9-5.8 1.9 -3.9 0-7.2-2.9-7.2-7.1 0-4.2 1.6-8.2 6.6-8.2 4.5 0 6.5 2.7 6.5 8.2h-9.3C47.7 54 48.5 57.2 51.8 57.2M48 50.5h5.7c0 0-0.2-3.3-2.9-3.3C49 47.2 48 49.1 48 50.5" fill="#73BF45"/><path d="M167.2 44.9h-3.2v14.5h3.7v-8.2c1.2-2.1 3.7-3.2 5.1-3.1l-0.4-3.5c-2.9 0.3-3.8 1.7-5.1 3.5V44.9z" fill="#231F20"/><path d="M86.8 54V38.7h3.9v16.5c0 1.6-2.2 3.8-3.4 4.1 -2.7 0.7-5.5 0-5.5 0l-0.4-3.2c0 0 3.1 0.6 4.1 0C86.1 55.8 86.8 54.8 86.8 54" fill="#231F20"/><path d="M92.4 52.2c0-5.1 3.2-7.6 7-7.6 3.8 0 7 2.5 7 7.6 0 3-1.2 7.4-7 7.4C94 59.7 92.4 55.6 92.4 52.2M99.4 47.3c-1.6 0-3.4 1.3-3.4 4.5 0 3.6 1.6 4.9 3.4 4.9 1.8 0 3.4-1 3.4-4.9C102.8 48.6 101.1 47.3 99.4 47.3" fill="#231F20"/><path d="M148 52.2c0-5.1 3.2-7.6 7-7.6 3.8 0 7 2.5 7 7.6 0 3-1.2 7.4-7 7.4C149.6 59.7 148 55.6 148 52.2M155 47.3c-1.6 0-3.4 1.3-3.4 4.5 0 3.6 1.6 4.9 3.4 4.9 1.8 0 3.4-1 3.4-4.9C158.4 48.6 156.6 47.3 155 47.3" fill="#231F20"/><path d="M108 58.7V38.3l3.6-0.6v8.9c0 0 1.9-2 4.1-2 2.2 0 5.6 1.4 5.6 7.5 0 3.9-2 7.5-7.4 7.5C110.7 59.7 108 58.7 108 58.7M114 56.8c2.9 0 4-2.3 4-4.6 0-2.3-1.1-4.3-3-4.3 -1.8 0-3.3 1.8-3.3 1.8v6.8C111.6 56.4 112.6 56.8 114 56.8" fill="#231F20"/><polygon points="145.4 38.7 149.4 38.7 143.5 59.4 139.6 59.4 134.8 44.6 130.2 59.4 126.3 59.4 120.5 39.2 124.7 38.4 128.6 53.1 133.1 38.7 137.3 38.8 141.5 53.2 " fill="#231F20"/><polygon points="177.6 50.8 177.6 37.7 173.9 38.4 173.9 59.4 177.6 59.4 177.6 52.5 183.1 59.7 186.9 59.4 181.1 51.4 186.4 44.9 182.5 44.9 " fill="#231F20"/><path d="M198.4 48.4l0.6-2.6c0 0-2.9-1.1-5.2-1.1 -2.3 0-5.5 1.3-5.5 4.4 0 3.1 2.3 3.6 4.4 4.2 0.6 0.2 3.8 0.6 3.8 2.2 0 0.6-0.8 1.5-2.7 1.5 -2.8 0-5.3-1.5-5.3-1.5l-0.3 2.7c0 0 1.8 1.5 5.4 1.5 5.7 0 6.4-2.7 6.4-4.6 0-3-3.1-4-5-4.4 -1-0.2-3.4-0.8-3.3-2.2 0-0.7 1.2-1.1 2.3-1.1C195.1 47.3 198.4 48.4 198.4 48.4" fill="#231F20"/><defs><path id="SVGID_1_" d="M2.5 31.7C4 30.1 14.6 22.8 31 31.8c8.7 4.4 24.4 4.5 26.8 0.6 0-1-2.1-1-4.4-3.4 -6.6-7.4-14.1-14.6-25.8-14.6 -0.1 0-0.2 0-0.3 0C18.3 14.4 5.6 15.3 2.5 31.7"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_"/></clipPath><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-295.35" y1="338.71" x2="-295.01" y2="338.71" gradientTransform="matrix(0 62.7778 62.7778 0 -21233.166 18555.6074)"><stop offset="0" stop-color="#73BF45"/><stop offset="0.09" stop-color="#73BF45"/><stop offset="0.38" stop-color="#6CB745"/><stop offset="0.73" stop-color="#5DAB46"/><stop offset="1" stop-color="#5DAB46"/></linearGradient><rect x="2.5" y="14.4" width="55.2" height="22" style="clip-path:url(#SVGID_2_);fill:url(#SVGID_3_)"/><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-295.41" y1="337.35" x2="-295.08" y2="337.35" gradientTransform="matrix(0 118.4597 118.4597 0 -39925.9766 34994.1562)"><stop offset="0" stop-color="#73BF45"/><stop offset="0.82" stop-color="#73BF45"/><stop offset="0.84" stop-color="#6FBA45"/><stop offset="0.98" stop-color="#5DAB46"/><stop offset="1" stop-color="#5DAB46"/></linearGradient><path d="M64.4 32.2c-3.7-0.3-5.3-2.2-5.3-3C59.4 14.4 44.4 0 28.7 0c-7.9 0-16 3.6-22.5 12.7 -0.1 0.1-0.1 0.2-0.2 0.3 0 0 0-0.1 0.1-0.1C24-4.4 54.1 7.7 58.1 27.9c-1.9-0.4-9.7-18.5-27.2-18.3C8.1 9.9 2.6 27.2 2.4 33.5c3.3-2.2 7.1-2.5 10.1-2.5 13 0 16.6 8.4 35.1 8.4 7.1 0 22.1-2.7 22.1-5.9C69.7 32.5 66.4 32.3 64.4 32.2z" fill="url(#SVGID_4_)"/><linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="-295.41" y1="337.06" x2="-295.08" y2="337.06" gradientTransform="matrix(0 118.4597 118.4597 0 -39925.9766 34994.1562)"><stop offset="0" stop-color="#73BF45"/><stop offset="0.82" stop-color="#73BF45"/><stop offset="0.84" stop-color="#6FBA45"/><stop offset="0.98" stop-color="#5DAB46"/><stop offset="1" stop-color="#5DAB46"/></linearGradient><path d="M2.2 33.7C2.2 33.7 2.2 33.7 2.2 33.7L2.2 33.7C2.2 33.7 2.2 33.7 2.2 33.7z" fill="url(#SVGID_5_)"/><path d="M2.4 33.6C2.4 33.6 2.4 33.6 2.4 33.6c-0.1 0-0.1 0-0.2 0.1L2.4 33.6z" fill="#FFF"/><defs><path id="SVGID_6_" d="M2.5 31.6C4 30 14.6 22.7 31 31.7c8.7 4.4 24.4 4.5 26.8 0.6 0-1-2.1-1-4.4-3.4 -6.6-7.4-14.1-14.6-25.8-14.6 -0.1 0-0.2 0-0.3 0C18.3 14.2 5.6 15.1 2.5 31.6"/></defs><clipPath id="SVGID_7_"><use xlink:href="#SVGID_6_"/></clipPath><linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="-295.35" y1="338.71" x2="-295.02" y2="338.71" gradientTransform="matrix(0 62.7778 62.7778 0 -21233.166 18555.6074)"><stop offset="0" stop-color="#73BF45"/><stop offset="0.09" stop-color="#73BF45"/><stop offset="0.38" stop-color="#6CB745"/><stop offset="0.73" stop-color="#5DAB46"/><stop offset="1" stop-color="#5DAB46"/></linearGradient><rect x="2.5" y="14.2" width="55.2" height="22" style="clip-path:url(#SVGID_7_);fill:url(#SVGID_8_)"/></svg>
							
						 <?php 
							if ($current_page == 'index.php') { 
							 	echo '</div>';
							} else { 
							 	echo '</a>';
							} 
						?> 

					</div>
				
				</div>
				
			</nav>

		</div>

	</header>  
