<!DOCTYPE HTML>
<?php 
session_start();
if($_SESSION['fullName'] !=null){ ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>25thcraft</title>
<link rel="stylesheet" type="text/css" href="Resources/css/style.css">
<link type="text/css" rel="stylesheet"  href="Resources/css/responsive.css" />
<link type="text/css" rel="stylesheet"  href="Resources/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css"
	href="Resources/css/bootstrap.min.css">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



<style>
.btn-link{
    color: #666;
	/* background-color: #fff;
	border-color: #fff; */
	font-size: 13px;
	font-weight: 400;
	text-decoration: none !important;
	}

input[type="checkbox"], input[type="radio"] {
    margin: 10px 2px 1px;
}

</style>

</head>

<body class="bgimage">


	
<?php include("header.php"); ?>
	<div class="topspace"></div>  <!-- space for header -->
	
	<!-- start of navigation bar --> 
	
	
	<!--<nav class="navbar navbar-default container navbar-inverse">
		<div class="container-fluid">
		
		
			<div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      </div>
     
      
    
			
			
				<div class="collapse navbar-collapse" id="mainnavbar" aria-expanded="false">
				<ul class="nav navbar-nav">
					<li><a data-toggle="pill" href="Alljobs.html">All Jobs</a></li>
					<li><a data-toggle="pill" href="iitmjobs.html">IIT/IIM Jobs</a></li>
					<li><a data-toggle="pill" href="govtjobs.html">Govt. Jobs</a></li>
					<li><a data-toggle="pill" href="intjobs.html">International Jobs</a></li>
				</ul>
				</div>
			</div>
		
	</nav>-->
	
	
<!-- end of navigation bar --> 

	
	
	
	<!-- start of main page -->
	
	<div class="container">


	<!-- search bar -->
					
			<div class="row">
	<div class="col-sm-10">
	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-search" aria-expanded="false">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> Advanced Search</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="nav-search">
      <ul class="nav navbar-nav">
      <li>
       <form class="navbar-form" role="search">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Skills,Designation,Companies...">
        </div></form>
         </li>
        <li>
         <form class="navbar-form" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Hyderabad">
        </div>
        </form>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experience<span class="caret"></span></a>
          <ul class="dropdown-menu scrollable-menu" role="menu">
          	 <li><a href="#">0 Year</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#">11</a></li>
            <li><a href="#">12</a></li>
            <li><a href="#">13</a></li>
            <li><a href="#">14</a></li>
            <li><a href="#">15</a></li>
            <li><a href="#">16</a></li>
            <li><a href="#">17</a></li>
            <li><a href="#">18</a></li>
            <li><a href="#">19</a></li>
            <li><a href="#">20</a></li>
            <li><a href="#">21</a></li>
            <li><a href="#">22</a></li>
            <li><a href="#">23</a></li>
            <li><a href="#">24</a></li>
            <li><a href="#">25</a></li>
            <li><a href="#">26</a></li>
            <li><a href="#">27</a></li>
            <li><a href="#">28</a></li>
            <li><a href="#">29</a></li>
            <li><a href="#">30</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salary<span class="caret"></span></a>
          <ul class="dropdown-menu scrollable-menu" role="menu">
          <li><a href="#"><1 Lac</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#">11</a></li>
            <li><a href="#">12</a></li>
            <li><a href="#">13</a></li>
            <li><a href="#">14</a></li>
            <li><a href="#">15</a></li>
            <li><a href="#">16</a></li>
            <li><a href="#">17</a></li>
            <li><a href="#">18</a></li>
            <li><a href="#">19</a></li>
            <li><a href="#">20</a></li>
            <li><a href="#">21</a></li>
            <li><a href="#">22</a></li>
            <li><a href="#">23</a></li>
            <li><a href="#">24</a></li>
            <li><a href="#">25</a></li>
            <li><a href="#">26</a></li>
            <li><a href="#">27</a></li>
            <li><a href="#">28</a></li>
            <li><a href="#">29</a></li>
            <li><a href="#">30</a></li>
            <li><a href="#">30+</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form" role="search">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>		
					
					
				
		<!-- search bar ends here -->
		
				
		<div class="row">
		
		<!-- <div class="row mainSearch noMargin noPadding">
					<form>
				<div class="col-md-6 noMargin">	
			<div class="col-sm-7 noMargin noPadding">
				<input class="form-control col-md-12 noMargin noPadding" id="" type="text" value="" placeholder="Skills,Designation,Companies">
			</div>
			<div class="col-sm-5 noMargin noPadding">
				<input class="form-control col-md-12 noMargin noPadding" type="text" value="" placeholder="Hyderabad">
			</div>
			</div>
			<div class="col-md-6">
			<div class="col-sm-4">
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle col-md-12" type="button"
						data-toggle="dropdown">
						Experience <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle col-md-12" type="button"
						data-toggle="dropdown">
						Salary <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#"> < 1</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-sm-4">
				<button type="button" class="btn btn-primary btn-md">Submit</button>
			</div>
			</div>
</form>
		</div> -->
		
		<!-- RIGHT NAVIGATION -->
		
			<div class="col-md-4 col-sm-12 rightnavxs">
				<div class="right-nav right-nav-sp" >
					
					
					<div class="row refine">Refine Results</div>
				<div class="right-nav right-nav-sp">
					<div class="row mt">
						<div class="freshness">Freshness</div>
						<div class="options">
							<select class="sdTxt">
								<option value="Last 30 days" >Last 30 days</option>
								<option value="Last 15 days">Last 15 days</option>
								<option value="Last 7 days" >Last 7 days</option>
								<option value="Last 3 days" >Last 3 days</option>
								<option value="Last 1 days" >Last 1 day</option>
							</select>
							<!-- <span class="glyphicon glyphicon-chevron-down"></span> -->
						</div>
					</div>
				</div>
				</div>
						<!-- LOCATION SECTION -->
						
				<div class="right-nav right-nav-sp">
					<div class="row refine mt">
						<div class="accordian side-head">
							<button type="button" class="btn btn-link"
								data-toggle="collapse" data-target="#demo"  data-spy="scroll" data-offset="50">
								<span class="glyphicon glyphicon-triangle-right"></span>Location <span class="badge">1200+</span>
							</button>
						</div>


						<div id="demo" class="collapse inlineText">
						
							<input type="checkbox" name="place"
								value="Hyderabad/Secunderabad"><span>Hyderabad/Secunderabad</span> <br>
							<input type="checkbox" name="place" value="Bengaluru/Bangalore">Bengaluru/Bangalore
							<br> <input type="checkbox" name="place" value="Chennai">Chennai<br>
							<input type="checkbox" name="place" value="Mumbai">Mumbai<br>
							<input type="checkbox" name="place"
								value="Delhi/NCR(National Capital Region)">Delhi/NCR(National
							Capital Region)
							
						</div>
						
					</div>
				</div>
				
				<!-- 	END OF LOCATION SECTION -->

				<!-- 	COMPANY SECTION -->
				<div class="right-nav right-nav-sp">
					<div class="row refine mt">
						<div class="side-head">
							<button type="button" class="btn btn-link"
								data-toggle="collapse" data-target="#comp">
								<span class="glyphicon glyphicon-triangle-right"></span>24 Crafts <span class="badge">120+</span>
								
							</button>
						</div>

						<div id="comp" class="collapse inlineText">
							<input type="checkbox">Direction Department <span class="badge">1200+</span><br>
							<input type="checkbox">Capgemini <span class="badge">544+</span> <br> 
							<input type="checkbox">Exibhitor <span class="badge">320+</span><br>
							<input type="checkbox">Field Publicity <span class="badge">1200+</span><br>
							<input type="checkbox">Film Distributor <span class="badge">544+</span><br> 
							<input type="checkbox">Film Processing Lab <span class="badge">320+</span><br>
							<input type="checkbox">Make Up Department <span class="badge">1200+</span><br>
							<input type="checkbox">Media Publicity <span class="badge">544+</span><br>
							<input type="checkbox">Music Department <span class="badge">320+</span><br>
							<input type="checkbox">OutDoor Unit <span class="badge">1200+</span><br>
							<input type="checkbox">Processing Lab <span class="badge">544+</span><br>
							<input type="checkbox">Publicity Designer <span class="badge">320+</span><br>
							<input type="checkbox">Costume Department <span class="badge">443+</span><br>
							<input type="checkbox">Producer <span class="badge">1113+</span><br>
							<input type="checkbox">Sets and Location <span class="badge">1315+</span><br>
							<input type="checkbox">Sound/Mixing Department <span class="badge">1113+</span><br>
							<input type="checkbox">Still Department <span class="badge">1113+</span><br>
							<input type="checkbox">Story Deaprtment <span class="badge">1553+</span><br>
							<input type="checkbox">Stunt/Fight Department <span class="badge">1113+</span><br>
							<input type="checkbox">Administrative Department <span class="badge">123+</span><br>
							<input type="checkbox">Art Department <span class="badge">1333+</span><br>
							<input type="checkbox">Artists <span class="badge">311+</span><br>
							<input type="checkbox">Choreographer <span class="badge">213+</span><br>
							<input type="checkbox">Cinematographer <span class="badge">1008+</span>
						</div>

					</div>
                   


				</div>
				
				<!-- END OF COMPANY SECTION  -->

				
			
					<!-- SALARY SECTION -->

				<div class="right-nav right-nav-sp" >
					<div class="row refine mt">
						<div class="side-head">
							<button type="button" class="btn btn-link"
								data-toggle="collapse" data-target="#sal">
								<span class="glyphicon glyphicon-triangle-right"></span>Salary <span class="badge">100+</span>
							</button>
						</div>
						<div id="sal" class="collapse inlineText">
							<input type="checkbox" name="salary" value="0-3 Lakhs">0-3
							Lakhs<br> <input type="checkbox" name="salary"
								value="3-6 Lakhs">3-6 Lakhs <br> <input
								type="checkbox" name="salary" value="6-10 Lakhs">6-10
							Lakhs<br> <input type="checkbox" name="salary"
								value="10-15 Lakhs">10-15 Lakhs<br> <input
								type="checkbox" name="salary" value="15-25 Lakhs">15-25
							Lakhs<br>

						</div>

					</div>


				</div>
				
			<!-- 	END OF SALARY SECTION -->


						<!-- EDUCATION SECTION -->
				<div class="right-nav right-nav-sp" >
					<div class="row refine mt">
						<div class="side-head">
							<button type="button" class="btn btn-link"
								data-toggle="collapse" data-target="#edu">
								<span class="glyphicon glyphicon-triangle-right"></span>Education <span class="badge">122+</span>
							</button>
						</div>
						<div id="edu" class="collapse inlineText">
							<input type="checkbox" name="education" value="Any Graduate">Any
							Graduate<br> <input type="checkbox" name="education"
								value="B.Tech/B.E">B.Tech/B.E <br> <input
								type="checkbox" name="education" value="Graduation Not Required">Graduation
							Not Required<br> <input type="checkbox" name="education"
								value="Any Postgraduate">Any Postgraduate<br> <input
								type="checkbox" name="education"
								value="Post Graduation Not Required">Post Graduation Not
							Required<br>

						</div>

					</div>


				</div>
			<!-- 	END OF EDUCATION SECTION -->
			
			</div>


				

						
						
						
					
				




		<!-- 	START OF MIDDLE CONTENT -->

			<div class="col-md-8 col-sm-12 col-xs-12 xspt">
				
				<div class="middle-content list org visible-md">
				  <div class="row">
				  
				  <div class="col-md-6 col-sm-6 col-xs-6 jobsml">1-50 of 21322 Jobs in Hyderabad</div>
				   <div class="col-md-4 col-sm-4 col-xs-4">Sort by:Relevance</div>
				    <div class="col-md-1 col-sm-1 col-xs-1"><a href="#"><i class="fa fa-bars"></i></a></div>
				     <div class="col-md-1 col-sm-1 col-xs-1 listml"><a href="#"><i class="fa fa-list"></i></a></div>
				      
				  
				  </div>
				</div>
				
				<!-- 1ST BLOCK -->
				<div class="middle-content">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								AWS(amazon Web Services)
							</div>
							<div class="org">ASAP Info Systems PVT Ltd</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">

						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org ">2-7 yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad,
								Bengaluru/Bangalore,Kolkata,Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Web Services,AWS,Amazon Web
								Services</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 3,00,000 - 8,00,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>

						</div>

					</div>
				</div> <!-- END OF 1ST BLOCK -->
				
				<!-- 2ND BLOCK -->
				<div class="middle-content middlemt" >
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Maximo Developer
							</div>
							<div class="org">ASAP Info Systems PVT Ltd</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml" >
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-7 yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad,
								Bengaluru/Bangalore,Kolkata,Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Maximo Developer</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div><!-- END OF 2ND BLOCK -->


					<!-- 3RD BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Accounts Associate(US Process)
							</div>
							<div class="org">Gobrah Management Consulting Services
								Pvt.Ltd</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5 yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Accounts Payable, accounts
								receivable, general ledger, payables,ap</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Urgent opening for Reputed IT
								Client Experience:2-5 yrs Role: US...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> Not Disclosed
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Ramya Reddy, Just
								Now</div>
						</div>
					</div>
				</div> <!-- END OF 3RD BLOCK -->


				<!-- 	4TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Urgent Openings for Tamil Speakers in Hyderabad Location
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="org">Adventures International Private Limited</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">0-2 yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Chennai</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">BPO, Customer Support,
								Communication Skills, bpo voice, call center voice...</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 1,50,000 - 1,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by jyotsna@adso.com,
								Just Now</div>
						</div>
					</div>
				</div><!-- 	4TH BLOCK -->

      <!-- 5TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Assistant Professor (Contract) - Material Science &
								Metallurgical Engineering
							</div>

						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="org">Indian Institute of Technology Hyderabad</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5 yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">HTML%,CSS,Javascript,OOPS
								Concepts,PHP,Bootstrap,Jquery</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div>  <!-- 5TH BLOCK -->

						<!-- 	<6TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Assistant Professor (Contract) - Physics
							</div>
							<div class="org">Indian Institute of Technology Hyderabad</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img" style="margin-left: -9px;">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">

						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">HTML%,CSS,Javascript,OOPS
								Concepts,PHP,Bootstrap,Jquery</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div>
<!-- 	<6TH BLOCK -->

<!-- 7TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								HTML Game Developer
							</div>
							<div class="org">CHRP - INDIA Private Limited</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">HTML%,CSS,Javascript,OOPS
								Concepts,PHP,Bootstrap,Jquery</div>
						</div>
						<div class="row space">

							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div>
				<!-- 7TH BLOCK -->

<!-- 8TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Opening For QA Engineer - Expected to Join Immediately
							</div>
							<div class="org">FTD India Pvt. Ltd</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">STLC, SDLC, Debugging, Quality
								Assurance / Testing, Software Testing...</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">1. Understand and follow all
								the standard procedures in QA team 2. Understand technology and
								domain ...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div>
<!-- 8TH BLOCK -->


<!-- <9TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Opportunity for Microsoft Dot Net Developers @ Hyderabad
							</div>
							<div class="org">Tech Mahindra Ltd.</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/tech.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">C#,.Net Version 3 and Above,
								MSBuild Scripting, MVC, Powershells</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Greetings from ASAP Infosystems
								My name is Ms. Lavanya, My specialty is to find Great & a...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div>
				<!-- <9TH BLOCK -->


<!-- 10TH BLOCK -->
				<div class="middle-content middlemt">
					<div class="row pl">
						<div class="col-md-9 col-sm-9 col-xs-9">
							<div class="compName compNRes">
								<span class="glyphicon glyphicon-fire" style="color: red;"></span>
								Client Support
							</div>
							<div class="org">Infobrain Technologies Pvt. Ltd.</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3 img imgml">
							<img class="imgRes" src="Resources/images/compIcons/amazon.gif"
								alt="company icon ">
						</div>
					</div>
					<div class="row right-nav-sp">
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">2-5yrs</div>
							<div class="col-md-9 col-sm-9 col-xs-9 org">Hyderabad/Secundrabad, Pune</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">KeySkills:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Client Servicing, Client
								Interaction, client Support</div>
						</div>
						<div class="row space">
							<div class="col-md-3 col-sm-3 col-xs-3 org">Job Description:</div>
							<div class="col-md-9 col-sm-9 col-xs-9 skill">Job Overview: Customer Support
								Rep The Client Support provides resolutions to client issues ...</div>
						</div>
						<div class="row space other">
							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<i class="fa fa-inr"></i> 2,50,000 - 7,50,000 P.A
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 posted">Posted by Lavanya, Just Now</div>
						</div>
					</div>
				</div><!-- 10TH BLOCK -->

			</div> <!-- END OF MIDDLE CONTENT -->

		</div>
	</div> <!-- end of main page -->
	
	





	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<script>
	
	
$(document).ready(function(){
  $("#demo").on("hide.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
  });
  
});

$(document).ready(function(){
	  $("#comp").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
$(document).ready(function(){
	  $("#ind").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
$(document).ready(function(){
	  $("#sal").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
});
$(document).ready(function(){
	  $("#edu").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
});
$(document).ready(function(){
	  $("#empty").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
$(document).ready(function(){
	  $("#jobty").on("hide.bs.collapse", function(){
	    $(".btn").html('<span class="glyphicon glyphicon-triangle-right"></span>');
	  });
	  
	});
</script>

</body>
</html>
<?php }else{ 
$newURL="index.php";
header('Location: '.$newURL);
}?>