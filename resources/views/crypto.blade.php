<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    
	$con= mysqli_connect('localhost','itfalcon_currency_user','TDNAD}KtH*,*','itfalcon_registration');
	if (!$con) {
	die("Database connection failed due to".mysqli_connect_error());
	}else{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$cnic = $_POST['cnic'];
	$dob = $_POST['day'].$_POST['month'].$_POST['year'];
	$gender = $_POST['gender'];
	$education = $_POST['education'];
	$address = $_POST['address'];
	$sqli ="INSERT INTO `bitcoin_reg` (`name`,`email`,`number`,`cnic`,`dob`,`gender`,`education`,`address`, `create_at`) VALUES ('$name','$email','$number','$cnic','$dob','$gender','$education','$address',  current_timestamp());";
	}
	
	

	// echo $sqli;

	if ($con->query($sqli)==true) {
		// header ("Location: bitcoin.php");
	}else
	echo "Error: $sqli <br> $con->error";

	$con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Bitcoin</title>
	<meta charset="utf-8">
  <link href="{{URL::to('public/image/favicon.png')}}" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./public/css/bitcoin.css">
	<link rel="stylesheet" type="text/css" href="./publiccss/bootstrap.min.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="css/reset.css" />-->
    <!--	<link rel="stylesheet" href="css/style.css" />-->
	<!-- Latest compiled Fontaweasom -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="container-fluid banner">
		<div class="row title">
			<div class="col-sm-12 col-md-12 col-lg-12 ">
					<h1>ABOUT BITCOIN</h1>
			</div>	
		</div>
	</div>

	<div class="container">
		<div class="row info">
			<div class="title">
				<h2>What is Bitcoins meaning ?</h2>
			</div>
			<div class="content">
				<p>Bitcoin is a new currency that was created in 2009 by an unknown person using the alias Satoshi Nakamoto. Transactions are made with no middle men – meaning, no banks! Bitcoin can be used to book hotels on Expedia, shop for furniture on Overstock and buy Xbox games. But much of the hype is about getting rich by trading it. The price of bitcoin skyrocketed into the thousands in 2017.</p><br>
				
				<p>Bitcoins can be used to buy merchandise anonymously. In addition, international payments are easy and cheap because bitcoins are not tied to any country or subject to regulation. Small businesses may like them because there are no credit card fees. Some people just buy bitcoins as an investment, hoping that they’ll go up in value.</p>
			</div>
		</div>
	</div>

		<div class="container-fluid price-bg">
		<div class="row">
			<!-- <div class="col-sm-12 col-md-12 col-lg-12 "> -->
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 ">
						<div class="price col-sm-6 col-md-6 col-lg-3">
							<div class="p1">
								<h2>Bitcoin Price</h2>
								<h3>60,450 USD</h3>
							</div>
						</div>
						<div class="price col-sm-6 col-md-6 col-lg-3">
							<div class="p2">
								<h2>Ethereum Price</h2>
								<h3>2250.35 USD</h3>
							</div>
						</div>
						<div class="price col-sm-6 col-md-6 col-lg-3">
							<div class="p3">
								<h2>BNB Price</h2>
								<h3>635.70 USD</h3>
							</div>
						</div>
						<div class="price col-sm-6 col-md-6 col-lg-3">
							<div class="p4">
								<h2>BTCST Price</h2>
								<h3>88.78 USD</h3>
							</div>
						</div>
					</div>
					</div>
				</div>
				
			<!-- </div> -->
		</div>
	</div>

	<div class="container">
		<div class="row info">
			<div class="title">
				<h2>How legal is Bitcoin ?</h2>
			</div>
			<div class="content">
				<p>Currently we did not hear that Bitcoin is flagged as illegal by any by legislation in any jurisdiction. Still there are some jurisdictions (for example as Argenti- na) which severely restrict or ban all foreign currency regardless which type. And at the same time some other jurisdictions (for example Thailand) limit the licensing of certain entities such as Bitcoin exchanges.</p><br>
				
				<p>Bitcoin Legal | Regulators from different jurisdictions are in the process to provide users and businesses with restrictions, laws and rules on how to integrate this new technology with the formal, regulated financial system. The best example for this is a bureau in the United States Treasury Department called the Financial Crimes Enforcement Network (FinCEN), which published non-binding guidance on how it characterizes specific activities regarding virtual curren- cies.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row legal-info">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="title">
					<h3>Legal Information about Bitcoin</h3>

				</div>
				<div class="info-ques">
					<ul>
					<li><i class="fas fa-fighter-jet"></i> How legal is Bitcoin?</li>
					<li><i class="fas fa-fighter-jet"></i> Is it possible to use Bitcoin for illegal activities?</li>
					<li><i class="fas fa-fighter-jet"></i> Can Bitcoin be regulated?</li>
					<li><i class="fas fa-fighter-jet"></i> How does Bitcoin work with taxes?</li>
					<li><i class="fas fa-fighter-jet"></i> Is there with Bitcoin consumer protection?</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="info-img">
					<img src="./public/images/digital_currency/crypto1.png">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row info">
			<div class="title">
				<h2>What are Bitcoin Wallets ?</h2>
			</div>
			<div class="content">
				<p>A wallet stores the information necessary to transact bitcoins. While wallets are often described as a place to hold] or store bitcoins, due to the nature of the system, bitcoins are inseparable from the block chain transaction ledger. A better way to describe a wallet is something that “stores the digital credentials for your bitcoin holdings and allows you to access (and spend) them. Bitcoin uses public-key cryptography, in which two cryptographic keys, one public and one private, are generated. At its most basic, a wallet is a collection of these keys.</p><br>
				
				<p>There are several types of wallets. Software wallets connect to the network and allow spending bitcoins in addition to holding the credentials that prove ownership. Software wallets can be split further in two categories: full clients and lightweight clients.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row market">
			<div class="market-img col-sm-12 col-md-7 col-lg-8">
				<img src="./public/images/digital_currency/market.jpg">
			</div>
			<div class=" col-sm-12 col-md-5 col-lg-4">
				<div class="bg">
				<div class="title">
					<p>Currency Market</p>
				</div>
				<ul class="list">
					<li>
						<div><img src="./public/images/digital_currency/btc.png"> BTC-USD  <span> $ 60,450 </span><small>(+4.07%)</small></div>
					</li>
					<li>
						<div><img src="./public/images/digital_currency/eth.png"> ETH-USD  <span> $ 2,250 </span><small>(-7.02%)</small></div>
					</li>
					<li>
						<div><img src="./public/images/digital_currency/bnd.png"> BNB-USD  <span> $ 645.50 </span><small>(+14.05%)</small></div>
					</li>
					<li>
						<div><img src="./public/images/digital_currency/btcst.png"> BTCST-USD  <span> $ 80.79 </span><small>(-6.07%)</small></div>
					</li>
					<li class="last">
						<div><img src="./public/images/digital_currency/zec.png"> ZEC-USD  <span> $ 220.84 </span><small>(+21.08%)</small></div>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row info">
			<div class="title">
				<h2>Acquiring Bitcoins</h2>
			</div>
			<div class="content">
				<h4>Buy on an Exchange</h4>
				<p>Many marketplaces called “bitcoin exchanges” allow people to buy or sell bitcoins using different currencies. Coinbase is a leading exchange, along with Bitstamp and Bitfinex. But security can be a concern: bitcoins worth tens of millions of dollars were stolen from Bitfinex when it was hacked in 2016.</p><br>
				
				<p>Bitcoin Legal | Regulators from different jurisdictions are in the process to provide users and businesses with restrictions, laws and rules on how to integrate this new technology with the formal, regulated financial system. The best example for this is a bureau in the United States Treasury Department called the Financial Crimes Enforcement Network (FinCEN), which published non-binding guidance on how it characterizes specific activities regarding virtual curren- cies.</p>
			</div>
		</div>

		<div class="row info marg">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="title">
					<h4><b>Transfers</b></h4>
				</div>
				<div class="content">
					<p>People can send bitcoins to each other using mobile apps or their computers. It’s similar to sending cash digitally.</p><br>
					
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="title">
					<h4><b>Mining</b></h4>
				</div>
				<div class="content">
					<p>People compete to “mine” bitcoins using computers to solve complex math puzzles. This is how bitcoins are created. Currently, a winner is rewarded with 12.5 bitcoins roughly every 10 minutes..</p><br>
					
				</div>
			</div>
		</div>

		<div class="row info">
			<div class="title">
				<h2>Owning Bitcoins</h2>
			</div>
			<div class="content">
				<p>Bitcoins are stored in a “digital wallet,” which exists either in the cloud or on a user’s computer. The wallet is a kind of virtual bank account that allows users to send or receive bitcoins, pay for goods or save their money. Unlike bank accounts, bitcoin wallets are not insured by the FDIC.</p><br>
			
			</div>
		</div>

	</div>

	<div class="container">
		<div class="row wedo">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="title">
					<h2>What We Do?</h2>
				</div>
				<div class="wedo-info">
					<ul>
					<li><i class="fas fa-fighter-jet"></i> How legal is Bitcoin?</li>
					<li><i class="fas fa-fighter-jet"></i> Is it possible to use Bitcoin for illegal activities?</li>
					<li><i class="fas fa-fighter-jet"></i> Can Bitcoin be regulated?</li>
					<li><i class="fas fa-fighter-jet"></i> How does Bitcoin work with taxes?</li>
					<li><i class="fas fa-fighter-jet"></i> Is there with Bitcoin consumer protection?</li>
					</ul>
					<!-- <button class="signup-btn" data-toggle="modal" data-target="#myModal"><a>Registered Now</a></button> -->
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="wedo-img">
					<img src="./public/images/digital_currency/mobile1.png">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row signup-sec">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1>It’s never too late to get started. Buy, store and learn about Bitcoin and Ethereum now.</h1>
				<!-- <h4>Signup Now And Get Started</h4> -->
				<!-- <button class="signup-btn" data-toggle="modal" data-target="#myModal"><a>Registered Now</a></button> -->
			</div>
		</div>
	</div>





<!-- ==========================Modal Form================================= -->

	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="modal-title">REGISTERED TO JOIN US</h3>
	        </div>
	        <div class="modal-body">
	        	 
	          <!-- <p>Some text in the modal.</p> -->
		          <form action="bitcoin.php" method="POST" class="reg-form form-group" onsubmit="return validation()">

		          	<div class="row">
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your Full Name* </label><br>
							<input type="text" id="name" name="name" placeholder="Enter Your Full Name" class="form-control" >
							<span id="name1" class="text-danger font-weight-bold"></span>
						</div>
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your Email* </label><br>
							<input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control" >
							<span id="email1" class="text-danger font-weight-bold"></span>
						</div>
					</div>
					<div class="row">
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your Number* </label><br>
							<input type="number" id="number" name="number" placeholder="Enter Your Number" class="form-control" >
							<span id="number1" class="text-danger font-weight-bold"></span>
						</div>
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your CNIC Number* </label><br>
							<input type="number" id="cnic" name="cnic" placeholder="Enter Your CNIC Number" class="form-control" >
							<span id="cnic1" class="text-danger font-weight-bold"></span>
						</div>
					</div>
					<div class="row">
					<div class="input-holder">
				      
				      	<div class="row">
				      		<div class="col-sm-12 col-md-6 col-lg-6">
				      			<label>Date Of Birth* </label><br>
				      			<div class="col-sm-12 col-md-12 col-lg-12 flex">
							      <div class="col-sm-4 col-md-4 col-lg-4">
							      	<input type="text" id="day" name="day" size="2" maxlength="2" placeholder="DD" class="form-control"/>
							      </div>
							      <div class="col-sm-4 col-md-4 col-lg-4">
							      	<input type="text" id="month" name="month" size="2" maxlength="2" placeholder="MM" class="form-control"/>
							      </div>
							      <div class="col-sm-4 col-md-4 col-lg-4">
							      	<input type="text" id="year" name="year" size="4" maxlength="4" placeholder="YY" class="form-control"/>
							      </div>
							    </div>
							    <span id="day1" class="text-danger font-weight-bold"></span>
								<span id="month1" class="text-danger font-weight-bold"></span>
							    <span id="year1" class="text-danger font-weight-bold"></span>
						    </div>
						    <div class="col-sm-12 col-md-6 col-lg-6">
						    	<label>Gender* </label><br>
						    	<div class="col-sm-12 col-md-12 col-lg-12 flex">
						    		<div class="col-sm-6 col-md-5 col-lg-5">
						    			<b>Male</b> : <input id="gender" type="radio" name="gender" value="MALE">
						    		</div>
						    		<div class="col-sm-6 col-md-7 col-lg-7">
						    			<b>Female</b> : <input id="gender" type="radio" name="gender" value="FEMALE">
						    		</div> 
						    	</div>
						    	<span id="gender1" class="text-danger font-weight-bold"></span>
						    </div>
					    </div>	
				    </div>
				    </div>
					<div class="row">
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your Education* </label><br>
							<input type="text" id="education" name="education" placeholder="Enter Your Education" class="form-control" >
							<span id="education1" class="text-danger font-weight-bold"></span>
						</div>
						<div class="input-holder col-sm-12 col-md-6 col-lg-6">
							<label>Enter Your Address* </label><br>
							<input type="text" id="address" name="address" placeholder="Enter Your Address" class="form-control" >
							<span id="address1" class="text-danger font-weight-bold"></span>
						</div>
					</div>
					<div class="input-holder">
						<button type="submit" name="Submit" class="form-control button">Submit</button>
						<!-- <input type="submit" name="Submit" class="form-control button" > -->
					</div>
					
				</form>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  
	</div>


	<!-- ****************Registration form Validation Start**************** -->
	<script type="text/javascript">
		function validation(){
			var name1 = document.getElementById('name').value;
			var email1 = document.getElementById('email').value;
			var number1 = document.getElementById('number').value;
			var cnic1 = document.getElementById('cnic').value;

			var day1 = document.getElementById('day').value;
			var month1 = document.getElementById('month').value;
			var year1 = document.getElementById('year').value;

			var gender1 = document.getElementById('gender').value;
			var education1 = document.getElementById('education').value;
			var address1 = document.getElementById('address').value;

			//Full Name Field Validation
			if(name1 == ""){
				document.getElementById('name1').innerHTML = "**Please fill the first name field";
				return false;
			}
			if((name1.length <3 ) || (name.length >20)){
				document.getElementById('name1').innerHTML = "**name length must be between 4 and 20";
				return false;
			}
			if(!isNaN(name1)){
				document.getElementById('name1').innerHTML = "**Only characters are allowed";
				return false;
			}


			//Email Field Validation
			if(email1 == ""){
				document.getElementById('email1').innerHTML = "**Please fill the Email field";
				return false;
			}
			if(email1.indexOf('@') <= 0){
				document.getElementById('email1').innerHTML = "** @ At the invailed position";
				return false;
			}
			if((email1.charAt(email1.length-4) != '.' ) && (email1.charAt(email1.length-3)!= '.' ))
			{
				document.getElementById('email1').innerHTML = "** . At the invailed position ";
				return false;
			}

			//Number Field Validation
			if(number1 == ""){
				document.getElementById('number1').innerHTML = "**Please fill the  number field";
				return false;
			}
			if((number1.length <11 ) || (number.length >13)){
				document.getElementById('number1').innerHTML = "**Number length must be between 11 and 13";
				return false;
			}

			//CNIC Field Validation
			if(cnic1 == ""){
				document.getElementById('cnic1').innerHTML = "**Please fill the CNIC field";
				return false;
			}
			if((cnic1.length <13 ) || (cnic1.length >15)){
				document.getElementById('cnic1').innerHTML = "**CNIC length must be between 13 and 15";
				return false;
			}

			//DOB Field Validation
			if(day1 == ""){
				document.getElementById('day1').innerHTML = "**Please fill the DOB field";
				return false;
			}

			if(month1 == ""){
				document.getElementById('month1').innerHTML = "**Please fill the DOB field";
				return false;
			}

			if(year1 == ""){
				document.getElementById('year1').innerHTML = "**Please fill the DOB field";
				return false;
			}

			//DOB Field Validation
			if(gender1 == ""){
				document.getElementById('gender1').innerHTML = "**Please fill the gender field";
				return false;
			}

			//Education Field Validation
			if(education1 == ""){
				document.getElementById('education1').innerHTML = "**Please fill education field";
				return false;
			}
			if(!isNaN(education1)){
				document.getElementById('education1').innerHTML = "**Only characters are allowed";
				return false;
			}

			//Address Field Validation
			if(address1 == ""){
				document.getElementById('address1').innerHTML = "**Please fill address field";
				return false;
			}
			if(!isNaN(address1)){
				document.getElementById('address1').innerHTML = "**Only characters are allowed";
				return false;
			}
			
			// alert("Thanks For Registration!");
			swal("Congratulations!", "Registration Form Submitted Successfully!", "success");
		}
	</script>
	<!-- ****************Registration form Validation End**************** -->

</body>
</html>