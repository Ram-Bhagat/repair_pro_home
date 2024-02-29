<footer>
	<div class="footer_bcg ">
		<div class="container">
			<div class="row paddingtb50">
				<div class="col-md-6 col-lg-4">
				<div class="footer_block1">
				<img src="images/footer-logo.png" alt="">
					<p>It is long established fact reader will be distracted readable its layout.It is long established fact reader will be distracted readable its layout.</p>
					<ul class="ss_icon">
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
				    </ul>
				</div>

				</div>
				<div class="col-md-6 col-lg-2">
					<div class="footer_block2">
						<h3>Service_link</h3>
						<ul class="service_list_footer">
							<li><a href="">Tablets & iPad Repair</a></li>
							<li><a href="">Smart Phone Repair</a></li>
							<li><a href="">Laptop & Desktp </a></li>
							<li><a href="">Gadget Repair</a></li>
							<li><a href="">Console Repair</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
				<div class="footer_block3">
					<h3>Contact Us</h3>
					<p>It is long established fact reader will be distracted readable its layout.</p>
					<address>
					
						Location: 1201 park street,<br>
						Avenue,<br>
						Phone: [88] 657 524 332 <br>
						Email: info@repairpro.com
					
					</address>
				</div>
				</div>
				<div class="col-md-6 col-lg-3">
				<div class="footer_block4">
					<h3>News letters</h3>
					<p>It is long established fact reader will be distracted readable its layout.</p>
					<form>
						<input type="email" id=mail placeholder="Enter Your Email">
						<input type="submit" id=" submit2" value="Subscribe" >
					</form>
				</div>
				</div>
			</div>
			<div class="footer_bottom">
			<p><span class="frm_name">Repair pro</span> &copy; copy 2017 All Rights Reserved </p>
			<a id="botm_btn" onclick="topFunction()" href="#to_top_btn">	&uarr;</a>
			</div>
		</div>
	</div>
</footer>

<!----main script page link--->
<script src="script/custom.js"></script>


<!-----toggel---tabs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--slider script--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




<script>
	//
// Tabs Toggler
//
( function( $ ) {
	// Variables
	const $tabLink = $( '#tabs-section .tab-link' );
	const $tabBody = $( '#tabs-section .tab-body' );
	let timerOpacity;

	// Toggle Class
	const init = () => {
		// Menu Click
		$tabLink.off( 'click' ).on( 'click', function( e ) {
			// Prevent Default
			e.preventDefault();
			e.stopPropagation();

			// Clear Timers
			window.clearTimeout( timerOpacity );

			// Toggle Class Logic
			// Remove Active Classes
			$tabLink.removeClass( 'active ' );
			$tabBody.removeClass( 'active ' );
			$tabBody.removeClass( 'active-content' );

			// Add Active Classes
			$( this ).addClass( 'active' );
			$( $( this ).attr( 'href' ) ).addClass( 'active' );

			// Opacity Transition Class
			timerOpacity = setTimeout( () => {
				$( $( this ).attr( 'href' ) ).addClass( 'active-content' );
			}, 50 );
		} );
	};

	// Document Ready
	$( function() {
		init();
	} );
}( jQuery ) );


</script>

<script>
	//mobile btn
	function displaylist(){
		var x = document.getElementById("mobile");
		var view = x.style.display;
		if(view=="block"){
			x.style.display = "none";
		}else{
			x.style.display = "block";
		}
		
	}
	function screensizechange() {
            var width = document.documentElement.clientWidth;
            if (width >= 768) {
                var x = document.getElementById("mobile");
                x.style.display = "block";
                x.style.display = "inline-flex";
            } else {
                var x = document.getElementById("mobile");
                x.style.display = "None";
            }      
        }
</script>

<!-- <script>
	function hellome(){
		
		var x = document.getElementById("mobile");
	    var view = document.style.transform;
		if(view == "translateX(0px)"){
			x.style.transform = "translateX(-400px)";
		}
		else{
			x.style.transform = "translateX(0px)";
		}
	}
</script> -->
<script>
	//scroll btn bottom to top
	// Get the button:
let mybutton = document.getElementById("botm_btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


</body>
</html>