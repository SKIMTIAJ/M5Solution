
<footer>
	<div class="get-IN-touch-main-div">
		<h3 class="how-work-txt" style="color:#f2cf46;"> Get In Touch </h3>
		<div class="row get-IN-touch-sub-div" style=" margin: 2% 2%;">
			<div class="col-lg-6 col-md-6 in-touch-img"></div>
			<div class="col-lg-6 col-md-6 in-touch-form-div">
				<form class="form-group in-touch-form" action="for-test.php" method="post">
					<fieldset>
						<legend class="legend">Get in touch with Our team</legend>
						<input class="form-control" type="text" name="Name" placeholder="Name" required="">
						<input class="form-control" type="email" name="Email" placeholder="Email" required="">
						<input class="form-control" type="tel" name="Phoneno" placeholder="Phone No" required="">
						<!-- <input class="form-control" type="text" name="Remark" placeholder="Comment" style="height: 100px;"> -->
						<textarea class="form-control" name="message">Comment</textarea>
						<button class="btn btn-primary" type="submit">Submit</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="touch-class container-fluid">
		<div class="col-lg-3 col-md-3 footer-div">
			<h3 class="footer-h"> Important Link</h3>
			<ul class="footer-ul">
				<li><a href="#"> Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Protfolio</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="#">Service</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 footer-div">
			<h3 class="footer-h"> Office Address</h3>
			<ul class="footer-ul">
				<li><a href="#"><i  class="fa fa-map-marker" style="color: black; margin: 2px;"></i> Chiner park, Atghora, near new EidGah kolkata - 700136</a>
				</li>
				<li><a href="#"><i class="fa fa-envelope-open" style="color: black; margin: 2px;"></i>  Email</a></li>
				<li><a href="#"><i class="fa fa-phone" style="color: black; margin: 2px;"></i>  +91 8420046494</a></li>
				<li><a href="#"><i class="fa fa-phone" style="color: black; margin: 2px;"></i>  +91 8250839319</a></li>
			</ul>
		</div>
		<div class="col-lg-5 col-md-5 footer-div" style="float:right; padding: 2% 3%;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.773352594394!2d88.43928954986418!3d22.62493728508309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDM3JzI5LjgiTiA4OMKwMjYnMjkuMyJF!5e0!3m2!1sen!2sin!4v1576676457085!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
	<div class="container-fluid" style="height: 80px;">
		<div class="social-div"> 
			<h5 class="col-lg-2 col-md-2 col-sm-3 follow-text">Follow Us</h5>
			<ul class="social-ul col-lg-3 col-md-3 col-sm-4 follow-icon" style="margin: 0%">
				<!-- <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-official fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play fa-lg"></i></a></li> -->

				<li><a href="#"><i class="fab fa-facebook-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-official fa-lg"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-square fa-lg"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube fa-lg"></i></a></li>
			</ul>
		</div>
		<div>
			<div class="copyrightClass" style="color:#000; clear:both; text-align: center; color: #807272;">Copyright © 2020 M5Solution.com. All Right Reserved</div>
		</div>
	</div>
</footer>


<script>
var infoCount = 0;
var infoDivs = document.getElementsByClassName("div-information");
$(document).ready(function(){
infoDivs = document.getElementsByClassName("div-information");
  setInterval(showDivInformation,3000);
});
function showDivInformation(){
	//infoDivs[infoCount].classList.add("animated ounceOutLeft");
	//Thread.sleep(1000);
	infoDivs[infoCount].classList.add('animated', 'zoomIn','hideClass');

	infoCount++;
	if(infoCount==infoDivs.length){
		infoCount=0;
	}
	infoDivs[infoCount].classList.remove('hideClass');

}
$(window).on("scroll", function(){
	if ($(window).scrollTop()) {
		$('.header-first-child').addClass('black-h');
	}else{
		$('.header-first-child').removeClass('black-h');
	}
})

function menuLoad(){
		var menu = document.getElementById('main-nav');
		if (menu.style.display === "none") {
			menu.style.display = "block";
		}else{
			menu.style.display = "none";
		}

	}

	/*function menuLoad() {
  	document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	*/

	window.onscroll = function() {headerChange()};
	function headerChange(){
		/*if (document.body.scrollTop > 10 || document.documntElement.body.scrollTop > 10) {
			document.getElementById("mainHeader").style.background = "green";
		}else{
			document.getElementById("mainHeader").style.background = "green";
		}*/
			/*document.getElementById("mainHeader").IdName = "header-color";*/
			//document.getElementById("mainHeader").style.color = "#000"; 
		//document.getElementById("mainHeader").style.background = "green";
	    count = 0;
		//setInterval(howDivChange,200)
	}
    //var count = 0;

    //setInterval(howDivChange,200)


</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>