<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Mathebula Community Society</title>
	<meta name="referrer" content="origin">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/cards.css">
    <link rel="stylesheet" type="text/css" href="./css/input.css">
    <link rel="stylesheet" type="text/css" href="./css/forms.css">
	<link rel="stylesheet" type="text/css" href="./css/buttons.css">
	<link rel="stylesheet" type="text/css" href="./css/quick-hacks.css">
    <!-- <script src="jquery-3.4.1.min.js"></script> -->
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <nav>
		<div class="logo">
			<a href="{{ url('/') }}"><img src="./images/logo.png" alt="logo"></a>
		</div>

		<ul id="nav-list">
			<li class="list-item bold"><a class="nav-links" href="#Products-page">Products</a></li>
			<li class="list-item bold"><a class="nav-links" href="#about-page">About</a></li>
			<li class="list-item bold"><a class="nav-links" href="#Testimonial-page">Testimonials</a></li>
			<li class="list-item bold"><a class="nav-links" href="{{ url('/contact') }}">Contact Us</a></li>
			<button class="primary-butt normal-font no-margin-top nav-bar-butt-margin" onclick="window.location.href='{{ url('/services') }}'">Services</button>
		</ul>
	</nav>

    <!---------------------------------FORM----------------------------------------->
      
    <div class="form-content">
        <div class="initial">
            <p class="page-title about" id="about-page">Application For Membership</p>
            <hr class="title-line">
        </div>

        <div class="signup-form container form">
        <form action="https://formspree.io/applications@mathebulacs.co.za" method="POST">

    <!----------------------------SELECT PLAN----------------------------------------->

            <div class="form-topic text-margin-bottom">
                <h3>Select Your Plan</h3>
            </div>

            <div class="radio-container text-margin-bottom">
                <div>
                    <input type="radio" name="plan"  value="Family-Plan-A" checked="checked" />
                    <label for="plan1">Family Plan A</label>
                </div>
                
                <div>
                    <input type="radio" name="plan" value="Family-Plan-B" />
                    <label for="plan1">Family Plan B</label>
                </div>
                
                <div>
                    <input type="radio" name="plan" value="Individual-Plan-A" />
                    <label for="plan1">Individual Plan A</label>
                </div>
                
                <div>
                    <input type="radio" name="plan" value="Individual-Plan-B" />
                    <label for="plan1">Individual Plan A</label>
                </div>
                
            </div>
                    
    <!-----------------------PERSONAL DETAILS----------------------------------------->
            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-topic text-margin-bottom">
                        <h3>Principal Member Details</h3>
                    </div>


                    <div class="row">
                        <div class="col-md-6 center">
                            <input type="text" class="form-control" id="fname" name="First-name" placeholder="First Name" required><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control' id="lname" name="Last-name" placeholder="Surnname" required><br>
                        </div>
                    </div>

                    <input type="text" class="form-control" name="ID Number" placeholder="ID Number" required><br>
                    <input type="date" class="form-control text-margin-bottom" name='Date-Of-Birth' placeholder="Date of Birth" required>
                </div>
            </div>
            

    <!-----------------------CONTACT DETAILS----------------------------------------->
        <div class="row start-hidden">
            <div class="form-group col-md-6 ">
                <h3 class="text-margin-bottom" >Contact Details</h3>
                <!-- <label for="lname">E-mail:</label><br> -->
                <input type="text" class="form-control" id="fname" name="Email" placeholder="Email"><br>
                <input type="address" class="form-control" id="fname" name="Number" placeholder="Address" required><br>

                <!-- <label for="lname">Phone Number:</label><br> -->
                <input type="text" class="form-control" id="fname" name="Number" placeholder="Contact Number (H)" required><br>
                <input type="text" class="form-control text-margin-bottom" id="fname" name="Number" placeholder="Contact Number (W)"><br>    
            </div>
        </div>
        <input type="checkbox" id="Cinfo-check" name="Account" required>
        <div class="declaration text-margin-bottom">
            <label for="Cinfo-check">Declaration by Applicant. I, the undersigned, declare that according to my knowledge the above information is correct and that I am obliged to abide by the terms and conditions summarized in the scheme information, I understand that failure to pay premiums on time will cause my policy to lapse. </label>
        </div>
            
    <!----------------------FAMILY DETAILS------------------------------------------------>
        <table class="table start-hidden no-border-top">
            <h3 class="title-margin-bottom" >Family details</h3>
            <thead class="thead-dark no-border-top">
                <tr>
                    <th class="no-border-top" scope="col">Full Name</th>
                    <th class="no-border-top" scope="col">Relationship</th>
                    <th class="no-border-top" scope="col">Date Of Birth</th>
                    <th class="no-border-top" scope="col">Id Number</th>
                </tr>
            </thead>
            <tbody class="no-border-top" >
                <tr class="no-border-top">
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Family-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Family-Member-Date-Of-Birth" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
            </tbody>
        </table>
        <input type="checkbox" id="Fam-info-check" name="Account" required>
        <div class="declaration text-margin-bottom">
            <label for="Fam-info-check">Declaration by Applicant. I, the undersigned, declare that according to my knowledge the above information is correct and that I am obliged to abide by the terms and conditions summarized in the scheme information, I understand that failure to pay premiums on time will cause my policy to lapse. </label>
        </div>




        <table class="table start-hidden no-border-top">
            <h3 class="title-margin-bottom"> Beneficiary Details</h3>
            <thead class="thead-dark no-border-top">
                <tr>
                    <th class="no-border-top" scope="col">Full Name</th>
                    <th class="no-border-top" scope="col">Relationship</th>
                    <th class="no-border-top" scope="col">Date Of Birth</th>
                    <th class="no-border-top" scope="col">Id Number</th>
                </tr>
            </thead>
            <tbody class="no-border-top text-margin-bottom extra-margin" >
                <tr class="no-border-top">
                    <td><input type="text" class="form-control" id="fname" name="Beneficiary-First-Name"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Beneficiary-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
            </tbody>
        </table>
        <input type="checkbox" id="Ben-info-check" name="Account" required>
        <div class="declaration text-margin-bottom">
            <label for="Ben-info-check">Declaration by Applicant. I, the undersigned, declare that according to my knowledge the above information is correct and that I am obliged to abide by the terms and conditions summarized in the scheme information, I understand that failure to pay premiums on time will cause my policy to lapse. </label>
        </div>

        <!-------------------------------Extended family members------------------------------------------------->

        <table class="table start-hidden no-border-top">
            <h3 class="title-margin-bottom" >Single and Extended Family details</h3>
            <thead class="thead-dark no-border-top">
                <tr>
                    <th class="no-border-top" scope="col">Full Name</th>
                    <th class="no-border-top" scope="col">Relationship</th>
                    <th class="no-border-top" scope="col">Date Of Birth</th>
                    <th class="no-border-top" scope="col">Id Number</th>
                </tr>
            </thead>
            <tbody class="no-border-top" >
                <tr class="no-border-top">
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="fname" name="Extend-Member-First-Name" ><br></td>
                    <td><input type="text" class="form-control" id="fname" name="Relationship" ><br></td>
                    <td><input type="date" class="form-control" id="fname" name="Extend-Member-ID-Number"><br></td>
                    <td><input type="text" class="form-control" id="fname" name="ID-Number"><br></td>
                </tr>
            </tbody>
        </table>
        <input type="checkbox" id="extended-check" name="Account" required>
        <div class="declaration text-margin-bottom">
            <label for="extended-check">Declaration by Applicant. I, the undersigned, declare that according to my knowledge the above information is correct and that I am obliged to abide by the terms and conditions summarized in the scheme information, I understand that failure to pay premiums on time will cause my policy to lapse. </label>
        </div>


        <!------------------------------------Acc Details-------------------------------------->
        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-topic text-margin-bottom">
                    <h3>Payment Method - Debit Order</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 center">
                        <input type="text" class="form-control" id="fname" name="Name-Of-Bank" placeholder="Name Of Bank"><br>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class='form-control' id="lname" name="Account-Holder" placeholder="Account Holder"><br>
                    </div>
                </div>

                <input type="text" class="form-control" name="Account-Type" placeholder="Account Type"><br>
                <input type="text" class="form-control text-margin-bottom" name='Account-Number' placeholder="Account Number">
                <div class="row">
                    <div class="col-md-6 center">
                        <input type="text" class="form-control" id="fname" name="Branch-Code" placeholder="Branch Code"><br>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class='form-control' id="lname" name="Town" placeholder="City/Town"><br>
                    </div>
                </div>
                <input type="checkbox" id="acc-check" name="Account" required>
                <label for="acc-check"><bold>Declaration by Applicant.</bold> I authorize Mathebula Community Society to arrange with my bank account for the amount above mentioned to be deducted from my account in accordance with the debit system. This authority may be cancelled by me giving Mathebula Community Society thirty days’ notice in writing sent by registered post, but I understand that I shall not be entitled to any refund of amounts which Mathebula Community Society have withdrawn while this authority was in force if such amounts were legally owing Mathebula Community Society.</label>

            </div>
        </div>

        <div><a href="terms.html" class="dark-bg bold pointer tsc">View Policy Terms & Conditions</a></div>
            
        <button type="submit" value="submit" class="btn btn-primary no-margin-left primary-butt">Submit</button>

    </form>
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


    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html