<?php require 'header.php'; ?>

	
	<div id="accordion">
			
		    <a href="#" class="cell active" >
		    	<div class="container">
		    		<img class="icon" src="images//screen-icon.png" />
			      	<h2>Automated Voice Calls</h2>
					<p class="tab-info" id="open">
						No longer worry about no-shows with Demandforce's complete suite of communication methods: text, email and now voice call.  Demandforce users can now reach 100% of their clients, which has resulted in a 13.8% increase in confirmations since the feature was released.

					</p>
				</div>
		    </a>
			<a href="#" class="cell inactive">
				<div class="container">
					<img class="icon" src="images//desktop-icon.png" />
					<h2>Demandforce Optimization</h2>
					<p class="tab-info">
						Our Customer Success team is helping current customers ensure their Demandforce system is aligned with their salon's goals for the New Year.  Get help with any features you would like to use in order to utilize Demandforce to its fullest potential!
					</p>
				</div>
			</a>
			<a href="#" class="cell inactive">
				<div class="container">
		    		<img class="icon" src="images//yelp-icon.png" />
					<h2>Yelp Online <br>Booking (Coming Soon)</h2>
					<p class="tab-info">
						Coming soon to your Demandforce is the ability for your clients to schedule an appointment directly from your Yelp profile page!  This will be added to the list of ways to get more clients into your salon, driving the goal of keeping your books full and your revenue strong.
					</p>
				</div>
			</a>
		
	</div>
	<script>
  	$(function(){
  		var scrn_width = $(window).width();
  		console.log(scrn_width);
  		if(scrn_width < 1100){
  			$('#accordion').children().removeClass('inactive');	
  			$('#accordion').children().removeClass('active');	
  		}else if(scrn_width >= 1100){
  			$('#accordion').children().first().addClass('active');
  			$('#tab-info').removeAttr('id')
  		};

		$('.cell').on('click', function(){
			var acrdn = $('#accordion');
			var tab = $(this);

			if(tab.hasClass('active')){
				// clicking an opened tab 
				acrdn.children().removeClass('inactive');
				tab.removeClass('active');
				$('.tab-info').removeClass('slideUp');
				$('.icon').removeClass('scale');
				$('.tab-info').removeAttr('id');

			}else {
				// clicking a closed tab
				tab.removeClass('inactive');
				acrdn.children().not(tab).removeClass('active');
				acrdn.children().not(tab).addClass('inactive');
				tab.addClass('active');
				$('.tab-info').addClass('slideUp');
				$('.icon').addClass('scale');
				$('.tab-info').removeAttr('id');
			};
			
		});

			


		
		
	});
  </script>
<?php require 'footer.php'; ?>
	
