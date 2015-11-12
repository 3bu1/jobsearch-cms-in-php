<!DOCTYPE html>
<html >
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=9">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>OppInsights</title>


	<script src="js/angular.min.js"></script>
  
<script>
function msieversion() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))) > 0)      // If Internet Explorer, return version number
                //alert("Best Viewd in Google chrome and IE 8+");
            
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
        }

if ( msieversion() <= 9 )
	alert("Please open in Chrome, Firefox or Internet Explorer 9 and above to access complete functionality")
     // document.write ( "This is Internet Explorer "+msieversion() );
</script>
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' href='css/style.css'>
  <!-- Include jQuery Popup Overlay -->

</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
 include 'externallink.php'; ?>
<div id="my_popup" style="display:none;" class="row">

   <div class="container signinForm">
	<div >
       <p style="font-size:14px;color:#f00;" id="notification"></p>
<form id="form_id" method="post" name="myform" action="sso/ssoTest.php" style="margin-top:20px;" class='form-horizontal'>
<!--label style="color:#FFF;font-size:25px;margin-bottom:20px; width:inherit;padding-bottom:20px;">Single Sign On</label-->
	<div ng-controller="CacheController">
    <button class="my_popup_close">x</button>
		<ul >
			
			<li class="col-sm-6 col-md-6">
				<span class="newTrans">UserName </span><br>
				<input type="Text" name="username" id="username" class="newReq" required ng-model="newCacheKey"/>
			</li>
			<li class="fltrt">
				<span class="newTrans">Password </span><br>
				<input type="password" name="password" id="password" class="newReq" required ng-model="newCacheValue"/>
			</li>
			<li class="fltlft margnTop">
				<span class="newTrans">SBU</span><br>
				<select class="newReq" name="globalsbu" id="globalsbu">
					<option value="INFRA">Infra</option>
					
				</select>
			</li>
			<li class="fltrt margnTop">
				<span class="newTrans">BU</span><br>
				<select class="newReq" name="bu" id="bu">
					<option>UK</option>
					<option>Nordic</option>
				</select>
			</li>
			<div class="clearBoth"></div>
			<li class="margnTop fltlft">
				<button type="submit" class="loginbutton" id="loginbutton" ng-click="put(newCacheKey, newCacheValue)">LOGIN</button>
			</li>
            	<li class="margnTop fltR" style="width:260px;">
				<span class="newTrans_4"><a href="mailto:abhishek.b.pandey@capgemini.com?subject=Access for APT&body=Hi Team, I am interested in gaining access to the Account Prioritization Tool. Please connect with me.&cc=arif.tolnur@capgemini.com">New User</a></span>
			</li>
            <div class="clearBoth"></div>
			<li class=" margnTop">
				<input type="checkbox" checked style=" height: auto;float:left; padding:5px;margin-right:10px;width:17px;height:17px;"/>
				<span class="newTrans" style="  margin-top: 4px;">Remember My Password</span>
			</li>
		</ul>
		
	</div>
			
</form>
</div>
       <div>
       
       </div>
</div>
    <!-- Add an optional button to close the popup -->
    

  </div>
	<div class="head">
			<div class="newWish">
				<div  style="float:left;padding-left:50px;width:16%;  height: 63px;font-size:3em;">  
				<!--<img src="images/Logo_Capgemini.png" width="180" height="100%" alt="Capgemini Logo"/>-->
                    25thCraft.Com
				
				</div>
				<div class="header-right"> 
					<img src="images/bangalore.JPG" width="auto" height="67" style="  margin-right: 25px;vertical-align:top;border:1px solid #CCC;">
                    <img src="images/chennai.JPG" width="auto" height="67" style="  margin-right: 25px;vertical-align:top;">
                  <img src="images/hyderabad.JPG" width="auto" height="67" style="  margin-right: 25px;vertical-align:top;">
				</div>
			</div>
	</div>

<div id="newBox">

	<div class="newHead" ng-app="tabApp" >
		<div  ng-controller="TabController">
			<div >
				<ul class="newLog" align="right">
                    <li class="newSign my_popup_open fltR" style="margin-right:40px;">SIGN IN</li>
                    <li class="newSign my_popup_open fltR" style="margin-right:20px;">SIGN UP</li>
                   
                    <li class="newSub" ng-class="{active: isSet(5)}">
						<a href ng-click="setTab(5); animate4='animate'">CONTACT US!</a>
					</li>
                    
                    <li class="newSub" ng-class="{active: isSet(4)}">
						<a href ng-click="setTab(4)">WHY US?</a>
					</li>
                    <li class="newSub" ng-class="{ active: isSet(3) }" >
						<a href ng-click="setTab(3)">PHOTOGRAPHY</a>
					</li>
                    
                    
					<li class="newSub" ng-class="{ active: isSet(2) }" >
						<a href ng-click="setTab(2)">NEWS</a>
					</li>
					<li class="newSub" ng-class="{ active: isSet(1) }" >
						<a href ng-click="setTab(1)">MOVIE JOBS</a>
					</li>
                    <li style="clear:both;"></li>
				</ul>
			</div>
            <div style="clear:both;"></div>
            <div class="PaneC">
            <div class="PaneL fltlft" >
			<div class="imageHolder animate-hide" ng-show="isSet(1)" style="display:block;">
						<img src="images/mainLogin.jpg" />
				</div>
				<div class="imageHolder animate-hide" ng-show="isSet(2)" style="display:block;">
						<img src="images/Dashboard.jpg" />
				</div>
    
				<div class="imageHolder ng-hide" ng-show="isSet(3)" >
						<img src="images/TopAccounts.jpg"/>
				</div>
				 <div class="imageHolder ng-hide" ng-show="isSet(4)">
						<img src="images/CompetitionLandscape.jpg" />
				</div>
				  <div class="imageHolder ng-hide" ng-show="isSet(5)" ng-class="animate4">
						<img src="images/OpportunityCalendar.jpg" />
				</div>
                <div class="imageHolder ng-hide" ng-show="isSet(6)" ng-class="animate5">
					<img src="images/ContractsDatabase.jpg" />
				</div>
                <div class="imageHolder ng-hide" ng-show="isSet(7)" ng-class="animate6">
					<img src="images/DecisionMakers.jpg" />
				</div>
            
    </div>
			<div class="PaneR fltR">
			<div ng-show="isSet(1)"  class="animate-hide" >
				<div class="hegt340">
					<p class="contR">Login</p>
					<p class="del_1">“ONE-STOP” RESEARCH AND ADVISORY SOLUTION</p>

					<p class="del_1">OppInsights delivers superior insights into target customer’s operations so that you can make informed decisions. 
					</p>
					<p class="del_1">In your endeavour to sales growth, we will help you to identify high-growth accounts using a sophisticated and methodical framework that compiles, refines and analyses data from an exhaustive list of sources. With OppInsights by your side, rest assured to gain limitless opportunities for success.</p>
                 </div>   

				</div>
				<div  ng-show="isSet(2)"  class="animate-hide ng-hide " >
				<div class="hegt340">
					<p class="contR">GTM DASHBOARD</p>
					<p class="del_1">Driving insights through amalgamation of external market data with internal Capgemini data.</p>

					<p class="del_1">GTM Dashboard enables you to plan and prioritize target accounts, by categorizing them into new logos and up-selling/cross-selling opportunities. 
					</p>
					<!--p class="del_1 txtBold">Now is the time to make every opportunity count.</p-->
                 </div>   

				</div>
				<div  ng-show="isSet(3)" class="animate-hide ng-hide ">
				<div class="hegt340">
					<p class="contR">League Table</p>
					
					<p class="del_1">OppInsights ranks target accounts based on their attractiveness to invest in Capgemini’s services and Capgemini’s positioning strength to grab the opportunities.</p>
				</div>	
				</div>
				<div ng-show="isSet(4)" class="animate-hide ng-hide ">
				<div class="hegt340">
					<p class="contR">competition landscape</p>
					<p class="del_1">Understand competitor’s sales strategy and its unique sales proposition, devise strategy to differentiate Capgemini services to strengthen its competitive positioning.</p>
				</div>	
				</div>
				<div  ng-show="isSet(5)" class="animate-hide ng-hide" ng-class="animate4">
				<div class="hegt340">
					<p class="contR">Opportunity Calendar</p>
					<p class="del_1">Rating renewals and providing constant opportunity tracking to fill sales funnel with high-potential accounts.</p>
				</div>	
				</div>
				<div  ng-show="isSet(6)" class="animate-hide ng-hide" ng-class="animate5">
				<div class="hegt340">
					<p class="contR">contact Database</p>
					<p class="del_1">Track the contracts that are coming up for renewal well within the timeframe when the accounts will renew them.</p>
				</div>	
				</div>
				<div  ng-show="isSet(7)" class="animate-hide ng-hide" ng-class="animate6">
				<div class="hegt340">
					<p class="contR">Decision-makers</p>
					<p class="del_1">Discover the contact details/profiles of decision makers, influencers, and power-bases.</p>
				</div>
				</div>
                <div class="clear"></div>
                <div id="carousel">
  <div class="btn-bar">
    <div id="buttons"><a id="prev" href="#">&larr;</a><a id="next" href="#">&rarr;</a> </div>
  </div>
  <div id="slides">
    <ul>
     <li class="slide">
 <span >BP plc (<b>82 &darr;</b>)</span><br>
     <abbr ><a href="">BP CIO Mike Gibbs to focus on operational <br>
effectiveness and competitive advantage <br>
due to oil industry slowdown</a></abbr> 
        
      </li>
      <li class="slide">
       
 <span >Royal plc (<b>22 &darr;</b>)</span><br>
     <abbr ><a href="">Reader will be distracted by the readable content <br>
of a page.It is a long established fact</a>  </abbr> 
        

</li>
      <li class="slide">
         
 <span >Capgemini (<b>62 &uarr;</b>)</span><br>
     <abbr ><a href="">That a reader will be distracted by the readable content of a page.</a></abbr> 
        
      </li>
    </ul>
  </div>
</div>
                
			</div>
            </div>
		</div>
	</div>
	 <div style="clear:both;"></div>
<div class="newFooter" style="background:#00488d;">
<nav class="fltlft">
  <img src="images/CG_Slogan.png" width="220" style="  margin-top: 4px; margin-left:50px;"></nav>
<nav class="floatright">
<ul> 
<li style="margin-right:35px;"><a href="mailto:abhishek.b.pandey@capgemini.com?subject=REQUEST FOR TRIAL&body=Hi Team, I am interested in gaining trial version to the Account Prioritization Tool.&cc=arif.tolnur@capgemini.com">REQUEST FOR TRIAL</a></li>
<li >|</li>
<li><a href="mailto:abhishek.b.pandey@capgemini.com?subject=SUBSCRIBE FOR SALES ALERTS&body=Hi Team, I am interested sales alerts.&cc=arif.tolnur@capgemini.com">SUBSCRIBE FOR SALES ALERTS</a></li>
<li >|</li>
<li> <a href="mailto:abhishek.b.pandey@capgemini.com?subject=Access for APT&body=Hi Team, I am interested in gaining access to the Account Prioritization Tool. Please connect with me.&cc=arif.tolnur@capgemini.com">CONTACT US</li>
</ul>
</nav>
</div>


</div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
	<script>
        $(document).ready(function(){
$("#loginbutton").click(function(event){
	//alert("1");
	  event.preventDefault();
	    $.post("sso/ssoTest.php",
	{
    	username : $("#username").val(),
    	password: $("#password").val(),
    	globalsbu : $("#globalsbu option:selected").val(),
	bu: $("#bu option:selected").val(),
	
	}
	,function(data,status){
        // alert(status+"####"+ data);    
        if(data.trim() == 'Done'){
       window.location.href = "listingdetails.php?viewby_as&asdummy";
            }else{
            $("#notification").empty().append(data);
            };
		});
  });
});
        
        
	$(document).ready(function(e) {
		//alert($(window).height());
        $(".PaneC").height($(window).height()-110);
    });
	$(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}


        
	</script>
    <script>
    angular.module('App', ['ngAnimate']);

		angular.module('tabApp',[]).controller('TabController', ['$scope', function($scope) {
			$scope.tab = 1;

			$scope.setTab = function(newTab){
				$scope.tab = newTab;
			};
			$scope.isSet = function (tabNum){
				return $scope.tab === tabNum;
			}
		}])

		angular.module('cacheExampleApp', []).
controller('CacheController', ['$scope', '$cacheFactory', function($scope, $cacheFactory) {
  $scope.keys = [];
  $scope.cache = $cacheFactory('cacheId');
  $scope.put = function(key, value) {
    if (angular.isUndefined($scope.cache.get(key))) {
      $scope.keys.push(key);
    }
    $scope.cache.put(key, angular.isUndefined(value) ? null : value);
  };
}]);
    </script>
	 <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.10/jquery.popupoverlay.js"></script>
	
  <script>
    $(document).ready(function() {

      // Initialize the plugin

        
        
$('#my_popup').popup({
  opacity: 0.7,
  transition: 'all 0.3s'
});
    });
  </script>
  
</body>
</html>