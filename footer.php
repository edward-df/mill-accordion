	<footer>
        <div class="wrapper">
            
            <div id="footer-primary">

                    <a href="http://www.intuit.com" target="_blank">
                        <img id="footer-logo" src="http://www.demandforce.com/_assets/images/logos/logo-intuit-100-blue.png"/>
                    </a>
                    <div id="tagline">simplify the business of life</div>
                    <p id="copyright">&copy; Intuit, Inc. All rights reserved. Intuit and QuickBooks are registered trademarks of Intuit, Inc. Terms and conditions, features, support, pricing, and service options subject to change without notice.</p>

            </div> <!-- end .footer-primary -->

            <!-- <div id="footer-secondary">
                
                <ul id="link-list">
                    <li><a href="http://about.intuit.com/legal/" target="_blank">Legal</a></li>
                    <li><a href="http://smallbusiness.intuit.com/small-business/privacy/index.jsp" target="_blank">Privacy</a></li>
                    <li><a href="http://security.intuit.com/" target="_blank">Security</a></li>
                </ul>

                <a class="logo-truste" href="http://clicktoverify.truste.com/pvr.php?page=validate&url=www.demandforce.com&sealid=101" target="_blank">
                    <img src="http://www.demandforce.com/_assets/images/logos/logo-truste.png" alt="TRUSTe Certified Privacy"/>
                </a>

            </div> -->

        </div> <!-- end .wrapper -->
    </footer>
	

	<div id="sub-menu">
		<div class="wrapper">
			<div id="footer-login">
				<div id="footer-demo" class="footer-btn">
					<a href="#">See a Demo</a>
				</div>
				<div id="footer-signup" class="footer-btn">
					<a href="#">Sign Up</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){

			var $outer = $('.outer'),
				$list = $('ul');

			$('.outer').on("click", function(){

				if ($(this).hasClass('moveup')) {
					$('ul li').children().removeClass('moveup');
				}
				else {
					$('ul li').children().removeClass('moveup');
					$(this).addClass('moveup');
				}

				//$(this).toggleClass('moveup');
			});
		});
	</script>

</body>
</html>