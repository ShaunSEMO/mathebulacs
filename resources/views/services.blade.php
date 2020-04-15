<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCS</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/cards.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/quick-hacks.css">
    <link rel="stylesheet" type="text/css" href="./css/input.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>


</head>

<body>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}"><img src="./images/logo.png" alt="logo"></a>
        </div>

        <ul id="nav-list">
            <li class="list-item bold"><a class="nav-links" href="index.html#Products-page">Products</a></li>
            <li class="list-item bold"><a class="nav-links" href="index.html#about-page">About</a></li>
            <li class="list-item bold"><a class="nav-links" href="index.html#Testimonial-page">Testimonials</a></li>
            <li class="list-item bold"><a class="nav-links" href="{{ url('/contact') }}">Contact Us</a></li>
            <button class="primary-butt normal-font no-margin-top nav-bar-butt-margin" onclick="window.location.href='{{ url('/services') }}'">Services</button>
        </ul>
    </nav>



    <div class="wrapper" id="background">

    </div>

    <div class="wrapper-overlay">
        <div class="serv-header-text">
            <h1 class="header-title about no-width">Cover yourself, family and extended family</h1>
            <p class="header-par margin-auto no-width">With our range of funeral cover policies tailored to suit your needs, budget and family size.</p>
        </div>

    </div>

    <div class="service-cards-holder">
        <div class="service-card plan-cards">
            <p class="payout bold price-top dark-bg">R 20 000</p>
            <p class="payout bold no-margin dark-bg">Family Plan</p>
            <!-- <img class="service-icon" src="./images/group-icon.png"> -->
            <div class="serv-img-container margin-auto"></div>
            <p class="plan service-title lage-text price-margin">Plan A</p>
            <p class="price lager-text bold"><sup>R</sup>180</p>
            <p class="per-month">Per month</p>
            <button class="primary-butt plan-butt" onclick="window.location.href='{{ url('/fam-a') }}'">Sign Up</button>
        </div>

        <div class="service-card plan-cards">
            <p class="payout bold price-top dark-bg">R 10 000</p>
            <p class="payout bold no-margin dark-bg">Family Plan</p>
            <!-- <img class="service-icon" src="./images/group-icon.png"> -->
            <div class="serv-img-container margin-auto"></div>
            <p class="plan service-title lage-text price-margin">Plan B</p>
            <p class="price lager-text bold"><sup>R</sup>150</p>
            <p class="per-month">Per month</p>
            <button class="primary-butt plan-butt" onclick="window.location.href='{{ url('/fam-a') }}'">Sign Up</button>
        </div>

        <div class="service-card plan-cards">
            <p class="payout bold price-top dark-bg">R 20 000</p>
            <p class="payout bold no-margin dark-bg">Individual Plan</p>
            <!-- <img class="service-icon" src="./images/group-icon.png"> -->
            <div class="serv-img-container-individual"></div>
            <p class="plan service-title lage-text price-margin-bottom">Plan A</p>
            <p class="smaller-text from">from</p>
            <p class="price lager-text bold"><sup>R</sup>70</p>
            <p class="per-month">Per month</p>
            <button class="primary-butt plan-butt" onclick="window.location.href='{{ url('/fam-a') }}'">Sign Up</button>
        </div>

        <div class="service-card plan-cards">
            <p class="payout bold price-top dark-bg">R 10 000</p>
            <p class="payout bold no-margin dark-bg">Individual Plan</p>
            <!-- <img class="service-icon" src="./images/group-icon.png"> -->
            <div class="serv-img-container-individual"></div>
            <p class="plan service-title lage-text price-margin-bottom">Plan B</p>
            <p class="smaller-text from">from</p>
            <p class="price lager-text bold"><sup>R</sup>40</p>
            <p class="per-month">Per month</p>
            <!-- <button class="primary-butt plan-butt">Sign Up</button> -->
            <button class="primary-butt plan-butt" onclick="window.location.href='{{ url('/fam-a') }}'">Sign Up</button>
        </div>

    </div>
    <div id="content">
        <div class="row1">
            <p><strong>Includes:</strong></p>
        </div>
        <div class="row1">
            <p><strong>Includes:</strong></p>
        </div>
        <div class="row1">
            <p><strong>Includes:</strong></p>
        </div>
        <div class="row1">
            <p><strong>Includes:</strong></p>
        </div>
        <div id="row2">
            <p>Applicant and Spouse benefit</p>
        </div>
        <div id="row2">
            <p>Applicant and Spouse benefit</p>
        </div>
        <div id="row2">
            <p>Applicant benefit</p>
        </div>
        <div id="row2">
            <p>Applicant benefit</p>
        </div>
        <div class="row3">
            <p>R10 000 Children benefit</p>
        </div>
        <div class="row3">
            <p>R5 000 Children benefit</p>
        </div>
        <div class="row3">
            <p>--</p>
        </div>
        <div class="row3">
            <p>--</p>
        </div>
        <div id="row2">
            <p>Covers up to 8 People</p>
        </div>
        <div id="row2">
            <p>Covers up to 8 People</p>
        </div>
        <div id="row2">
            <p>--</p>
        </div>
        <div id="row2">
            <p>--</p>
        </div>
        <div class="row3">
            <p>Free joining fee</p>
        </div>
        <div class="row3">
            <p>Free joining fee</p>
        </div>
        <div class="row3">
            <p>Free joining fee</p>
        </div>
        <div class="row3">
            <p>Free joining fee</p>
        </div>
        <div id="row2">
            <p>Only 2 months waiting<br> period for accidental death</p>
        </div>
        <div id="row2">
            <p>Only 2 months waiting<br> period for accidental death</p>
        </div>
        <div id="row2">
            <p>Only 2 months waiting<br> period for accidental death</p>
        </div>
        <div id="row2">
            <p>Only 2 months waiting<br> period for accidental death</p>
        </div>
        <div class="row7 no-text-align">
            <button class="primary-butt no-margin" onclick="window.location.href='{{ url('/fam-a') }}'">Learn More</button>
        </div>
        <div class="row7 no-text-align">
            <button class="primary-butt no-margin" onclick="window.location.href='{{ url('/fam-a') }}'">Learn More</button>
        </div>
        <div class="row7 no-text-align">
            <button class="primary-butt no-margin" onclick="window.location.href='{{ url('/fam-a') }}'">Learn More</button>
        </div>
        <div class="row7 no-text-align">
            <button class="primary-butt no-margin" onclick="window.location.href='{{ url('/fam-a') }}'">Learn More</button>
        </div>

    </div>

    <div id="faq-container">
        <div class="faq-title pad">
            <p>Frequently Asked Questions</p>
        </div>
        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">What is funeral cover?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-four" src="./images/up.svg">
                <img class="down arr-down-four" src="./images/down.svg">

            </div>
        </div>
        <div class="response pad four">
            <p class="resp-pad">A funeral cover is a form of insurance that pays a specified amount of money in an event of a death, ensuring that costs of a funeral will be covered so that families do not struggle financially during this difficult time.</p>
        </div>

        <div class="faq-item-contain pad">
            <div class="question">
                <p class="bold">Why do I need funeral cover?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-one" src="./images/up.svg">
                <img class="down arr-down-one" src="./images/down.svg">

            </div>
        </div>
        <div class="response pad one">
            <p class="resp-pad">You need a funeral cover so that you can be able to burry your loved one with dignity as death comes unexpectedly and unanounced it needs to find you prepared.</p>
        </div>

        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">Do you cover people with HIV?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-two" src="./images/up.svg">
                <img class="down arr-down-two" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad two">
            <p class="resp-pad">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="faq-item-contain pad">
            <div class="question">
                <p class="bold">Why should I be covered by Mathebula Community Society?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-three" src="./images/up.svg">
                <img class="down arr-down-three" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad three">
            <p class="resp-pad">It is affordable trustworthy and we deliver best services with mathebula community society it is more about you rather than us we care.</p>
        </div>

        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">When does my cover start?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-five" src="./images/up.svg">
                <img class="down arr-down-five" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad five">
            <p class="resp-pad">Your membeship starts on the first of the month after reciept of your first premium and cover commences after the relavant waiting period has expired.</p>
        </div>

        <div class="faq-item-contain pad">
            <div class="question">
                <p class="bold">How long will my cover last?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-six" src="./images/up.svg">
                <img class="down arr-down-six" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad six">
            <p class="resp-pad">Your funeral policy will remain active as long as you carry on paying the premium and will last for the entirety of your life up until you die, or until you stop making payments. If you are unable to make regular payments, your cover will
                be suspended.</p>
        </div>

        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">Can I reinstate my policy?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-seven" src="./images/up.svg">
                <img class="down arr-down-seven" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad seven">
            <p class="resp-pad">If your funeral insurance policy lapses or is suspended due to non-payment, it can be reinstated subject to specific terms and conditions. If you need to reinstate your policy, the same waiting periods will apply as if you have applied for
                funeral cover as a new policy</p>
        </div>

        <div class="faq-item-contain pad">
            <div class="question">
                <p class="bold">Who can I cover on my policy?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-eight" src="./images/up.svg">
                <img class="down arr-down-eight" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad eight">
            <p class="resp-pad">You can cover yourself, your spouse, and your childred. Additionally, you can get funeral cover for extended family, including your parents or parents-in-law, grandmothers or grandfathers and brothers or sisters</p>
        </div>

        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">Is there a limit to the number of people I can cover on my policy?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-nine" src="./images/up.svg">
                <img class="down arr-down-nine" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad nine">
            <p class="resp-pad">The limits will be discussed with you when initially take out the policy. But the most important point is whether you can afford the premium for all the people you want to cover on the policy. The more people you cover, the more expensive
                the policy</p>
        </div>

        <div class="faq-item-contain pad">
            <div class="question">
                <p class="bold">If my policy lapses, do I get a refund?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-ten" src="./images/up.svg">
                <img class="down arr-down-ten" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad ten">
            <p class="resp-pad">No, unfortunately, you will not receive a refund if your policy lapses. Cover is provided on a month-to-month basis and there are no surrender values when your policy lapses.</p>
        </div>

        <div class="faq-item-contain pad" id="shaded">
            <div class="question" id="shaded">
                <p class="bold">What documentation do I receive when I take out a policy?</p>
            </div>
            <div class="icon">
                <img class="up arr-up-eleven" src="./images/up.svg">
                <img class="down arr-down-eleven" src="./images/down.svg">
            </div>
        </div>
        <div class="response pad eleven">
            <p class="resp-pad">You should receive a policy document (participation certificate) that confirms a number of important points. For example, who is covered on your policy, the starting date of the policy, the applicable waiting periods, the amount you're covered
                for. </p>
        </div>

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

</body>

</html>