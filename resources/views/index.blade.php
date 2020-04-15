<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Mathebula Community Society</title>
	<meta name="referrer" content="origin">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/cards.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/input.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/buttons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/quick-hacks.css') }}">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:200&display=swap" rel="stylesheet"> 
</head>

<body>
  
	<nav>
		<div class="logo">
			<a href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="logo"></a>
		</div>

		<ul id="nav-list">
			<li class="list-item bold"><a class="nav-links" href="#Products-page">Products</a></li>
			<li class="list-item bold"><a class="nav-links" href="#about-page">About</a></li>
			<li class="list-item bold"><a class="nav-links" href="#Testimonial-page">Testimonials</a></li>
			<li class="list-item bold"><a class="nav-links" href="{{ url('contact') }}">Contact Us</a></li>
			<button class="primary-butt normal-font no-margin-top nav-bar-butt-margin" onclick="window.location.href='{{ url('/services') }}'">Services</button>
		</ul>
	</nav>

	<div id="header">
		<div id="header-text">
			<h1 class="header-title">Mathebula Community Society</h1>
			<p class="header-par">Because it is affordable and we deliver best services. With mathebula community society it is more about you than it is about us...</p>
			<div id="header-button">
				<button class="primary-butt longer-butt no-margin-left" onclick="window.location.href='{{ url('/services') }}'">Sign Up</button>
				<button class="sec-butt longer-butt"><a class="no-deco white" href="#about-page">Learn More</a></button>
			</div>
		</div>
		<div id="header-form">
			<p class="service-title">Let us call you</p>
			<p class="form-text">Simply fill in the form below and one of our experienced consultants will get in touch with you</p>
			<form action="https://formspree.io/call@mathebulacs.co.za" method="POST">
				<input class="header-form-input form-control" type="text" placeholder="Full name" name="Full-Name">
				<input class="header-form-input form-control" type="tel" placeholder="Contact number" maxlength ="10" name="Contact-Num">
				<input class="header-form-input form-control" type="email" placeholder="Email address" name="Email">
				<button type="submit" class="btn primary-butt no-margin-left">Submit</button>
			</form>
			
		</div>
	</div>


	<!-- ABOUT -->

	<p class="page-title about" id="about-page">About</p>
	<hr class="title-line">
	<div id="About-page">
		<div id="about-content">
			<h1 class="about-header">Get To Know Us</h1>
			
			<p id="about-par">Mathebula Community Society was founded by Clifford Thuseni Mathebula to not only provide professional 
			funeral services but also to change the lives of our clients by showing that we genuinely care and that their loss is our
			Looking at the country's current economic climate and how that affects the quality of life for most South Africans and more
			so the deaths of our people we felt it necessary to come up with dignified solutions that assist families to at the least 
			take the financial burden off their shoulders. loss too. <br></br><br></br>
			MCS is based in Gauteng and Limpopo but operates nationwide. It is managed and administered by a team of professionals with 
			the right expertise to meet the specified requirements by the range of our clients. It was established in 2019 to alleviate 
			the pressure experienced by Chief Funeral Officers and Funeral Cover Practitioners at South African Insurance Services and 
			has grown substantially from this original bare. It is a 100% black-owned company and has a Level 1 of B-BBEE status.</p>	

		</div>	
	</div>

	<!-- PRODUCTS -->
	<div id="Products-page">	
		<p class="page-title about">Products</p>
		<hr class="title-line">

		<div class="service-cards-holder2">
			<div class="service-card">
				<img class="service-icon" src="./images/group-icon.png">
				<p class="service-title">Family Cover</p>
				<p class="service-desc">Get funeral cover for you, your spouse and children from R150 p/m</p>
				<button class="primary-butt" onclick="window.location.href='{{ url('/services') }}'">Learn More</button>
			</div>
	
			<div class="service-card">
				<img class="service-icon" src="./images/oneperson.png">
				<p class="service-title">Individual Cover</p>
				<p class="service-desc">Get funeral cover for yourself from R40 p/m</p>
				<button class="primary-butt" onclick="window.location.href='{{ url('/services') }}'">Learn More</button>
			</div>
	
			<div class="service-card">
				<img class="service-icon" src="./images/group-icon.png">
				<p class="service-title">Add extended family</p>
				<p class="service-desc">Show love to your extended family by adding them to your funeral policy from R25 p/m</p>
				<button class="primary-butt" onclick="window.location.href='{{ url('/services') }}'">Learn More</button>
			</div>
		</div>

		<div id="service-image">
			<p class="slogan">A society that has your best interest at heart</p>
		</div>		

	</div>

	<!--- TESTIMONIALS -->

	<div id="Testimonial-page">
		
		<hr class="title-line title-margin-left">	
		<p class="page-title bold title-margin-left">What our customers say</p>

		<div class="testimonial-card-holder">
			<div class="testimonial-card">
				<div class="test-icon-container">
					<img class="test-icon" src="./images/pause.png">
				</div>
				<p class="test-message">"Mathebula community society is clear, simple and affordable, and that's why I trust them..."</p>
				<div class="test-person">
					<div class="test-person-image">
						<!-- <img src="./images/oneperson.png"> -->
					</div>
					<div class="test-person-name">
						<p class="name bold">Rivonia Mabasa</p>
						<p class="membership smaller-text">Member since 2019</p>
					</div>
				</div>
			</div>

			<div class="testimonial-card">
				<div class="test-icon-container">
					<img class="test-icon" src="./images/pause.png">
				</div>
				<p class="test-message">"MCS are professional and efficient and I know my family are in Good hands, I told my family,
					I don't need fancy funeral, vanga tirhisa mali switsongo for funeral vata kota nosala vahanya kahle"</p>
				<div class="test-person">
					<div class="test-person-image">
						<!-- <img src="./images/oneperson.png"> -->
					</div>
					<div class="test-person-name">
						<p class="name bold">Kateko Mtileni</p>
						<p class="membership smaller-text">Member since 2019</p>
					</div>
				</div>
			</div>

			<div class="testimonial-card">
				<div class="test-icon-container">
					<img class="test-icon" src="./images/pause.png">
				</div>
				<p class="test-message">"I Chose mathebula community society because its affordable and suits my budget...
					I will never stop Paying my  monthly premium, it is important as buying groceries"
				</p>
				<div class="test-person">
					<div class="test-person-image">
						<!-- <img src="./images/oneperson.png"> -->
					</div>
					<div class="test-person-name">
						<p class="name bold">Loveday Makhubele</p>
						<p class="membership smaller-text">Member since 2019</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- STATS-->
	<div id="stats-page">
		<div>
			<p class="header-title">30576</p>
			<p class="stats-small-text">Memebers</p>
		</div>
		<div>
			<p class="header-title">24</p>
			<p class="stats-small-text">Hour Claim Assistance</p>
		</div>
		<div>
			<p class="header-title">531</p>
			<p class="stats-small-text">Payouts Thus Far</p>
		</div>
	</div>

	<!-- TEAM -->
	<div id="team-page">

		<hr class="title-line title-margin-left">	
		<p class="page-title bold title-margin-left">Meet the team</p>

		<div class="team-container">
			<div class="team-card">
				<div class="team-card-image" id="team-image-1">
					<!-- <img src="./images/ingwe.png"> -->
				</div>
				<div class="team-card-container">
					<p class="name bold">Lucky Manganyi</p>
					<p class="membership smaller-text">Director</p>
				</div>
			</div>

			<div class="team-card">
				<div class="team-card-image" id="team-image-2">
					<!-- <img src="./images/ingwe.png"> -->
				</div>
				<div class="team-card-container">
					<p class="name bold">Clifford Mathebula</p>
					<p class="membership smaller-text">Founder and COO</p>
				</div>
			</div>
			<div class="team-card">
				<div class="team-card-image" id="team-image-3">
					<!-- <img src="./images/ingwe.png"> -->
				</div>
				<div class="team-card-container">
					<p class="name bold">Yvonne Mathebula</p>
					<p class="membership smaller-text">National Director</p>
				</div>
			</div>
			<div class="team-card">
				<div class="team-card-image" id="team-image-4">
					<!-- <img src="./images/ingwe.png"> -->
				</div>
				<div class="team-card-container">
					<p class="name bold">Ntsako Manganyi</p>
					<p class="membership smaller-text">Director</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- NEWS LETTER-->

	<div id="subscribe-page"> 

		<p class="sub-tittle">Subcribe to our newsletter</p>
		<p class="sub-par">Be the first to know of our new products and promos</p>
		<p id="privacy">See our privacy policy</p>

		<div id="subcribe-sec">
			<input class="sub-input" type="email" placeholder="Email Address">
			<button class="dark-butt butt-left button-border">Subscribe</button>
		</div>
		
	</div>


	<!-- FOOTER -->
	<div class="footer">

		<div class="top-footer-section">
			<div class=" " id="footer-socials">
				<ul>
					<p class="bold">Let's connect</p>
					<li class="footer-item"><p>Twitter</p></li>
					<li class="footer-item"><p>YouTube</p></li>
					<li class="footer-item"><p>Facebook</p></li>
					<li class="footer-item"><p>Instagram</p></li>
					<li class="footer-item"><p>info@mathebulacs.co.za</p></li>
				</ul>
			</div>

			<div class="footer-div footer-left-margin" id="footer-nav">
				<ul class=" ">
					<p class="bold">Company</p>
					<li class="footer-item"><p>Home</p></li>
					<li class="footer-item"><p>About</p></li>
					<li class="footer-item"><p>Sign Up</p></li>
					<li class="footer-item"><p>Products</p></li>
				</ul>
			</div>
			<div class="footer-div footer-left-margin"></div>
				<!-- <div class="logo-container"></div> -->
				<p class="footer-item under">Underwritten by Ingwe Life</p>
			<div id="footer-paymethod"></div>
		</div>
		
		<div class="bottom-footer-sec smaller-text">
			<p class="start">Copyright &copy; 2020 MCS</p>
			<p class="end">Designed and Developed by SwayDev</p>
		</div>
		
	</div>


<script type="text/javascript" src="js/main.js"></script>
</body>

</html>