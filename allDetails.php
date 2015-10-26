<!DOCTYPE html>
<?php session_start();if(isset($_SESSION['info'])){ ?>
<html ><!--<![endif]--><head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Apt</title>
<head>
<?php
	
/**
 *
 * @author tribhuvan
 *        
 */	
		include_once('database/Insert.php');
		include_once('database/Select.php');		
		$getAlpha = new Select;
		$companydetails = array();
    
        $companydetails = $getAlpha->selectAccountDetails($_GET['comid']);
		$selectAccountDetailsByCsuite = $getAlpha->selectAccountDetailsByCsuite($_GET['comid']);
		
		/*$companydetails = $getAlpha->selectWhere('companydetails','comid',$_GET['comid']);
		$ryc = $getAlpha->selectWhere('range_of_years_of_contract','comid',$_GET['comid']);
		$cio_cpo = $getAlpha->selectWhere('cio_cpo','comid',$_GET['comid']);
		$contract_renewal_data = $getAlpha->selectWhere('contract_renewal_data','comid',$_GET['comid']);
		$data_center = $getAlpha->selectWhere('data_center','comid',$_GET['comid']);
		$metrics = $getAlpha->selectWhere('metrics','comid',$_GET['comid']);
		$rankings_history = $getAlpha->selectWhere('rankings_history','comid',$_GET['comid']);
		$sbu_revenue_of_cg = $getAlpha->selectWhere('sbu_revenue_of_cg','comid',$_GET['comid']);
		$recievables_and_payables = $getAlpha->selectWhere('recievables_and_payables','comid',$_GET['comid']);
		$capgemini_positioning = $getAlpha->selectWhere('capgemini_positioning','comid',$_GET['comid']);
		$cost_saving_business_growth_mna = $getAlpha->selectWhere('cost_saving_business_growth_mna','comid',$_GET['comid']);
	//	$companydetailsyear=$getAlpha->selectLike('companydetails', 'account_name', $companydetails[0]['account_name']);*/
//print_r($companydetails);
		?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style type="text/css">
	
	.accordion-container {
			width: 100%;
			margin: 0px 0 10px;
			float: left;
			
	}
	.accordion-toggle {
		position: relative;
		display: block;
		padding: 1px;
	    background: #f5f5f5;
		color: #fff;
		text-decoration: none;
		height:35px;
	}
	.accordion-toggle > span{padding-left:50px;display:inline-block;width:100%;height:35px;line-height:35px;font-weight:bold;}

	.toggle-icon{
	
       
		color: #287042;
		background:url(images/BG/NewDesignBG/Accordion_Shrink.png) top left no-repeat ;
	
	}
.openAcordian {
		
        
		color: #c0681a;
		background:url(images/BG/NewDesignBG/Accordion_Expand.png) top left no-repeat;
 
	}

	.rightBar{float:right;height:36px;width:5px;padding:0px;background:#287042;}

	.accordion-content {
		display: none;
		padding: 15px;
		overflow: auto;
	}
	
	.txtHead{
		 height:30px;
		  line-height: 30px;
		  text-transform: uppercase;
		  font-weight: bold;
	}
	
	.tblTxt{
		
		  width: 165px;

	}
	
	.tbltxtVal{
		
		  width: 171px;
	}
	.brdrNone{
		border:none;
	}
	.brdrBttm{
		
		border-bottom:1px solid #8A8A8A;
	}
	
	/* media query for mobile */
	@media (max-width: 767px) {
		.content {
			width: auto;
		}
		.accordion-content {
			padding: 10px 0;
			overflow: inherit;
		}
	}
</style>
<link rel="stylesheet"  href="css/screen.css" type="text/css" media="all">
<link rel="stylesheet"  href="css/style.css" type="text/css" media="all">
<?php include 'externalLinks.php'; ?>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function () {
	
    $('.accordion-toggle').on('click', function(event){

    	event.preventDefault();
    	// create accordion variables
    	var accordion = $(this);
    	var accordionContent = accordion.next('.accordion-content');
    	var accordionToggleIcon = $(this).children('.toggle-icon');
    	var accordionRightbar = accordionToggleIcon.children('.rightBar');	
    	// toggle accordion link open class
			
    	accordionToggleIcon.toggleClass("openAcordian");
	
    	// toggle accordion content
    	accordionContent.slideToggle(250);
    	
    	// change plus/minus icon
    	if (accordionToggleIcon.hasClass("openAcordian")) {
			//alert($(".toggle-icon span").text());
    		accordionRightbar.css({'background':'#c0681a'});
    	} else {
			//alert($(".toggle-icon span").text());
    		accordionRightbar.css({'background':'#287042'});
    	}
    });
});
</script>
    <style>
.label {
         z-index: 1 !important;
     }

    .highcharts-tooltip span {
       
        background-color:white;
        border:1px solid green;
        opacity:1;
        z-index:9999 !important;
       padding:5px;margin:0px;
    }

    .tooltip {
        padding:0px;
    }
</style>
 <script src="js/highcharts.js"></script>
                  <script src="js/highcharts-more.js"></script>
                  <script src="js/exporting.js"></script>
                  <script src="js/black-theme.js"></script>
                <script>
                $(function () {
    $('#container').highcharts({

        chart: {
            type: 'scatter',
            zoomType: '',
			plotBackgroundImage:"images/BG/plus.png",
        },
		navigation: {
	
      buttonOptions: {
		   enabled: false,
         symbolStroke: '#DDDDDD',
         theme: {
            fill: '#505053'
         }
      }
   },plotOptions: {
				series: { 
                    
					dataLabels: {
						enabled: true,
						useHTML:true,
						formatter:function(){
							//console.log(this);
							return "<div class='labeltext'><span style='text-align:center;font-size:10px;color:#000;'>"+this.point.options.customParam+"</span></div>";
						}
					}
				}
			},
			 tooltip: {
                 borderWidth: 0,
            backgroundColor: "rgba(255,255,255,0)",
            borderRadius: 0,
            shadow: false,
            useHTML: true,
            percentageDecimals: 0,
            backgroundColor: "rgba(255,255,255,1)",
       style: {
                padding: 5,margin:0,
                fontWeight: 'bold'
            },
					formatter: function () {
						return '<div style="color:#000 !important;">Company Name: '+this.point.options.customParam+'<br/><b>CPS: ' + this.x + '</b><br/><b>CAS: ' + this.y + '</b></div>';
					},
					useHTML: true
				},
credits: {
          enabled: false
      },
            title: {
                text: 'Quadrant View',
            
            },
    series: [{
		
			name: '<?php echo($companydetails[0]['account_name']); ?>',
            data: [{x:<?php echo($companydetails[0]['CG_in_senario1']); ?>, y:<?php echo($companydetails[0]['CI_in_senario1']); ?>,customParam:'<?php echo($companydetails[0]['account_name']); ?>'}]
        }]
    });
});
                
                </script>
</head>
<body>
<?php include 'header.php'; ?>


<main id="main" style="height: 586px;">
  <section id="content">
    <article class="object">
      <div class="box">
        <div class="wrapper" >
          <div class="object-details">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
              <tr>
			  
                <td valign="top" width="18%" bgcolor="#FFF" bordercolor="#CCC">
                  <img class="imgLogo" src="company images/<?php echo($companydetails[0]['comid']); ?>.png" width="100%"/>
                
				</td>
                <td valign="middle" width="35%" style="padding-left:25px;"><div class="inner">
                    <dl class="object-options">
                      <dt>Account Name:</dt>
                      <dd><?php echo($companydetails[0]['account_name']); ?></dd>
                      <dt>Account's Parent Name:</dt>
                      <dd><?php echo($companydetails[0]['parent_name']); ?></dd>
                      <dt>Account's HQ:</dt>
                      <dd><?php echo($companydetails[0]['hq']); ?></dd>
                      <dt>Latest Account Revenue:</dt>
                      <dd>&euro;NAMn</dd>
                      <dt>Latest Parent Revenue:</dt>
                       <dd>&euro;<?php echo($companydetails[0]['revenue_annual']); ?>Mn</dd>
                      <dt>Industry:</dt>
                      <dd><?php echo($companydetails[0]['account_industry']); ?></dd>
                      <dt>ITO Budget:</dt>
                      <dd>&euro;<?php echo($companydetails[0]['it_budget']); ?>Mn</dd>
                      <dt>No. of Employees:</dt>
                      <dd><?php echo($companydetails[0]['employees_latest_year']); ?></dd>
                      <dt>CIO Name:</dt>
                       <dd><?php echo($companydetails[0]['New_CIO']); ?></dd>
                      <dt>CFO Name:</dt>
                       <dd><?php echo "NA" ?></dd>
                      <dt>APT Rank:</dt>
                      <dd><?php echo($companydetails[0]['Latest_Rank']); ?></dd>
					  <dt>Website :</dt>
                      <dd><a href="https://www.google.co.in/?gfe_rd=cr&ei=t4AXVsi0Koze8gfA1aeYBg#q=<?php echo($companydetails[0]['account_name']); ?>&safe=active" target="_blank">Click here</a></dd>
                    </dl>
                   
                    <!--<div class="btn-container"> <span class="btn btn-arrow"> <a href="reports/Apt.pdf" title="" target="_blank" download data-hover="Download" class="animate"><span>Generate Report</span>  </a> </span> </div>-->
                  </div></td>
                <td width="45%" valign="top">
               
                <div id="container" style="height: 300px; min-width: 100%; margin: 0 auto"></div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>
      <div class="entry-content object-content object">
        <div class="wrapper">
          <div  class="contnt">
          
          <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon openAcordian">Business Overview<span class="rightBar" style="background:#cb8446"></span></span>
                
				</div>
				<div class="accordion-content"  style="display:block;">
				  
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
					 <tr>
					  <td class="tblTxt">Account Name</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($companydetails[0]['account_name']); ?></td>
					  </tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Account's Parent Name</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['parent_name']); ?></td>
					  <td class="tblTxt">Other Key Subsidiary of the Same Parent</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['other_accounts']); ?></td>
					</tr>
					<tr class="brdrBttm">
                      <td class="tblTxt">HQ - Account </td>
					  <td class="tbltxtVal">NA</td>
					  <td class="tblTxt">HQ - <?php echo($companydetails[0]['parent_or_account']); ?>  </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['hq']); ?></td>
					
					</tr>
                    <tr class="brdrBttm">
                    <td class="tblTxt">Account Address</td>
					  <td class="tbltxtVal">NA</td>
                       <td class="tblTxt">Account Business Description</td>
					  <td class="tbltxtVal">NA</td>
                    </tr>
                    <tr class="brdrBttm">
					 <td class="tblTxt" >Account Product & Services</td>
					  <td class="tbltxtVal" >NA</td>
                      <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Business Description</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['business_description']); ?></td>
					</tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Product & Services</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Product_Services']); ?></td>
                      <td class="tblTxt">Account CEO</td>
					  <td class="tbltxtVal">NA</td>
                    </tr>
					<tr class="brdrBttm">
					 <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> CEO</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['ceo']); ?></td>
                       <td class="tblTxt">Account Industry</td>
					  <td class="tbltxtVal">NA</td>
					</tr>
					<tr class="brdrBttm">
                      <td class="tblTxt">Account Secondary Industry</td>
					  <td class="tbltxtVal">NA</td>
					  <td class="tblTxt"> Gartner Industry</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['gartner_industry']); ?></td>
					  
					</tr>
                   
                    <tr class="brdrBttm">
                       <td class="tblTxt">Account's Capgemini Sector</td>
					  <td class="tbltxtVal">NA</td>
					  <td class="tblTxt">Account Trading Status</td>
					  <td class="tbltxtVal">NA</td>
					  
					</tr>
                    
                    <tr class="brdrBttm">
                     <td class="tblTxt">Name of Exchange</td>
					  <td class="tbltxtVal"><?php if($companydetails[0]['listing_stock_exchange']=='Listed' || $companydetails[0]['listing_stock_exchange']=='Unlisted'){ echo "NA"; }else{echo $companydetails[0]['listing_stock_exchange'];} ?></td>
					  <td class="tblTxt">Part of Top 250 Companies at the Exchange</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['part_of_top250companies']); ?></td>
					</tr>
                    <tr>
                    <td class="tblTxt"> Geographic Focus</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($companydetails[0]['geographic_focus']); ?></td>
                    </tr>
				  </table>
		
				</div>
			</div>
          
          
          
          
           <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Key Financial Statistics<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
				   
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
					
                    <tr class="brdrBttm">
					  <td class="tblTxt">Latest Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['latest_financial_year']); ?></td>
					  <td class="tblTxt">Fiscal Year Ending Month</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['fisical_year_ending_month']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Account Revenue Latest Year </td>
					  <td class="tbltxtVal">NA </td>
                      <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Revenue Latest Year </td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['revenue_annual']); ?>Mn </td>
					</tr>
                    <tr class="brdrBttm">
                    <td class="tblTxt">Account Revenue Previous Year </td>
					  <td class="tbltxtVal">NA </td>
                      <td class="tblTxt">Parent Revenue Previous Year </td>
					  <td class="tbltxtVal">NA </td>
                    </tr>
                    <tr class="brdrBttm">
                     <td class="tblTxt">Account Revenue Trend </td>
					  <td class="tbltxtVal">NA </td>
                    <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Revenue Trend</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['revenue_trend']); ?></td>
                      </tr>
                    
                    
                     <tr class="brdrBttm">
                     <td class="tblTxt">Account Operating Profit Latest Year </td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Operating Profit Latest Year </td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['operating_profit']); ?>Mn </td>
					 
					 </tr>
                     <tr class="brdrBttm">
                     <td class="tblTxt">Account Operating Profit Previous Year </td>
					  <td class="tbltxtVal">NA </td>
                      <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Operating Profit Previous Year</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['operating_profit_previous_year']); ?>Mn </td>
                     </tr>
                     <tr class="brdrBttm">
                    <td class="tblTxt">Account Operating Profit Trend</td>
					  <td class="tbltxtVal">NA </td>
                      <td class="tblTxt">Parent Operating Profit Trend</td>
					  <td class="tbltxtVal">NA </td>
                    </tr>
                     <tr class="brdrBttm">
                      <td class="tblTxt">Account Net Profit Latest Year </td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Net Profit Latest Year </td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['net_profit']); ?>Mn </td>
                       	</tr>
                        <tr class="brdrBttm">
                        <td class="tblTxt">Account Net Profit Previous Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Net Profit Previous Year</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['net_profit_previous_year']); ?>Mn </td>
						</tr>
                         	<tr class="brdrBttm"> <td class="tblTxt">Account Net Profit Trend</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Net Profit Trend </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['net_profit_trend']); ?> </td>
                       </tr>
                    <tr class="brdrBttm"> 
                    <td class="tblTxt">Account Days Receivables Outstanding Latest Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Receivables Outstanding Latest Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_recievables_outstanding']); ?> </td>
					
                    </tr>
                      <tr class="brdrBttm">
                      <td class="tblTxt">Account Days Receivables Pervious Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Receivables Pervious Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_recievables_pervious_year']); ?> </td>
                     	</tr>
                     <tr class="brdrBttm">
                      <td class="tblTxt">Account Days Receivables Outstanding Trend</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Receivables Outstanding Trend</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_recievables_outstanding_trend']); ?> </td>
					 </tr>
                       <tr class="brdrBttm">
                        <td class="tblTxt">Account Days Payables Outstanding Latest Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Payables Outstanding Latest Year </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_payables_outstanding']); ?> </td>
                      
					</tr>
                      <tr class="brdrBttm">
                       <td class="tblTxt">Account Days Payables Pervious Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Payables Pervious Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_payables_pervious_year']); ?> </td>
                      </tr>
                       <tr class="brdrBttm">
                       <td class="tblTxt">Account Days Payables Outstanding Trend</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Payables Outstanding Trend </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_payables_outstanding_trend']); ?> </td>
                     </tr>
                     <tr class="brdrBttm">
                      <td class="tblTxt">Account Days Sales of Inventory Latest Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Sales of Inventory Latest Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_sales_of_Inventory']); ?> </td>
					</tr>
                        <tr class="brdrBttm">
                        <td class="tblTxt">Account Days Sales of Inventory Previous Year</td>
					  <td class="tbltxtVal">NA </td>
					  <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Days Sales of Inventory Previous Year </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['days_sales_of_inventory_previous_year']); ?> </td>
                     
					 
					</tr>
                    <tr class="brdrBttm">
                     <td class="tblTxt">Account Days Sales of Inventory Trend</td>
					  <td class="tbltxtVal">NA </td>
                      <td class="tblTxt">Parent Days Sales of Inventory Trend</td>
					  <td class="tbltxtVal">NA </td>
                      </tr>
                    <tr class="brdrBttm">
                    <td class="tblTxt">Account Employees Latest Year</td>
					  <td class="tbltxtVal">NA </td>
                     <td class="tblTxt"><?php echo($companydetails[0]['parent_or_account']); ?> Employees Latest Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['employees_latest_year']); ?> </td>
                    </tr>

				  </table>
				
				</div>
			</div>
              
              
               <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Key IT Statistics<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
				   
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
					
					<tr class="brdrBttm">
					  <td class="tblTxt">IT Budget</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['it_budget']); ?></td>
					  <td class="tblTxt">Alleviate Test Status</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['alleviate_test_status']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">IT Infrastructure Budget</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['it_infrastructure_budget']); ?>Mn </td>
					  <td class="tblTxt">Number of contracts between 6 months and 3 years</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['number_of_contracts between 6 months and 3 years']); ?></td>
					</tr>
                      	<tr class="brdrBttm">
					  <td class="tblTxt">Number of Contracts between 3 and 4 years</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['number_of_Contracts between 3 and 4 years']); ?>Mn </td>
					  <td class="tblTxt">Number of Contracts between 4 and 5 years</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['number_of_contracts between 4 and 5 years']); ?>Mn </td>
					</tr>
                        	<tr class="brdrBttm">
					  <td class="tblTxt">Size of contracts between 6 months and 3 years</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['size_of_contracts_between_6_months_and_3_years']); ?>Mn </td>
					  <td class="tblTxt">Size of Contracts between 3 and 4 years</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[0]['size_of_contracts_between_3_and_4_years']); ?>Mn </td>
					</tr>
                         	<tr class="brdrBttm">
					  <td class="tblTxt">Size of Contracts between 4 and 5 years</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['size_of_contracts_between_4_and_5_years']); ?> </td>
					  <td class="tblTxt">Number of Incumbent Vendors</td>
					  <td class="tbltxtVal">  <?php 
   $vendors = array();
    for($x=0; $x<count($companydetails);$x++){ 
         $vendors[$x] = $companydetails[$x]['vendor'];
        } 
    echo count(array_unique($vendors));
   ?></td>
					</tr>
                      <tr >
					  <td class="tblTxt">Name of Incumbent Vendors</td>
					  <td class="tbltxtVal" colspan="3">
                          <?php 
   $vendors = array();$vendor= array();
    for($x=0; $x<count($companydetails);$x++){ 
         $vendors[$x] = $companydetails[$x]['vendor'];
    } 
    $vendor = array_values(array_unique($vendors));
   for($y=0; $y<count($vendor);$y++){
      echo $vendor[$y].", ";
    }
    
   ?>
                          
                          
                          </td>
				
					</tr>
                   
				  </table>
				
				</div>
			</div>
          
          
          
          
          
		  <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Key ITO Executives<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content" >
				<?php 
					for($x=0;$x<count($selectAccountDetailsByCsuite);$x++){
						?>
                        <?php 
					if($selectAccountDetailsByCsuite[$x]['csuite_title']=='CIO'){ ?>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                       <tr>
					  <td class="tblTxt">Country <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Name</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($selectAccountDetailsByCsuite[$x]['name']); ?></td>
					  </tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Location</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['location']); ?></td>
                      <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> IT Strategy</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['it_strategy']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Linkedin Link</td>
					  <td class="tbltxtVal"><a href="<?php echo($selectAccountDetailsByCsuite[$x]['linkedin_link']); ?>" target="_blank"><img class="linkedinImg" height='22' width='22'/></a></td>
                      <td class="tblTxt"> Email</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['email']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Contact Number</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['contact_number']); ?></td>
                      <td class="tblTxt">Status of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_of_change']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt"><?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Status Change Period</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_change_period']); ?></td>
                       <td class="tblTxt">Date of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['date_of_change']); ?></td>
					</tr>
					
                     </table>
                      <?php }
						  if($selectAccountDetailsByCsuite[$x]['csuite_title']=='CPO'){ ?>
                         <table width="100%" border="0" cellspacing="0" cellpadding="0" >  
                       <tr class="brdrBttm">
					  <td class="tblTxt">Country <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Name</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($selectAccountDetailsByCsuite[$x]['name']); ?></td>
					  </tr>
					<tr class="brdrBttm">
					  <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Vendor Strategy</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['it_strategy']); ?></td>
					  <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Location</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['location']); ?></td>
                      
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Linkedin Link</td>
					  <td class="tbltxtVal"><a href="<?php echo($selectAccountDetailsByCsuite[$x]['linkedin_link']); ?>" target="_blank"><img class="linkedinImg" height='22' width='22'/></a></td>
                      <td class="tblTxt"> Email</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['email']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Contact Number</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['contact_number']); ?></td>
                      <td class="tblTxt">Status of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_of_change']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt"><?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Status Change Period</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_change_period']); ?></td>
                       <td class="tblTxt">Date of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['date_of_change']); ?></td>
					</tr>
					</table>
                      <?php }if($selectAccountDetailsByCsuite[$x]['csuite_title']=='CFO'){ ?>
                       <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                      <tr>
					  <td class="tblTxt">Country <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Name</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($selectAccountDetailsByCsuite[$x]['name']); ?></td>
					  </tr>
					<tr class="brdrBttm">
					  <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Outsourcing Strategy</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['it_strategy']); ?></td>
					  <td class="tblTxt"> <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Location</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['location']); ?></td>
                      
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Linkedin Link</td>
					  <td class="tbltxtVal"><a href="<?php echo($selectAccountDetailsByCsuite[$x]['linkedin_link']); ?>" target="_blank"><img class="linkedinImg" height='22' width='22'/></a></td>
                      <td class="tblTxt"> Email</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['email']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt">Contact Number</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['contact_number']); ?></td>
                      <td class="tblTxt">Status of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_of_change']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  
					  <td class="tblTxt"><?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Status Change Period</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['status_change_period']); ?></td>
                       <td class="tblTxt">Date of <?php echo $selectAccountDetailsByCsuite[$x]['csuite_title']; ?> Change</td>
					  <td class="tbltxtVal"><?php echo($selectAccountDetailsByCsuite[$x]['date_of_change']); ?></td>
					</tr>
					</table><?php }}?>
					  
					
				
				 
				</div>
			</div>
			
              
              
              <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Business and Operation IT Triggers<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
				
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
		  <tr><td colspan="2" align="center"><strong>IT Strategy & Operational Transformation</strong></td></td></tr>
					  <tr class="brdrBttm">
					  <td class="tblTxt"  >Status of Implicit Demand  for Infra IT through IT Strategy & Operational Transformation</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[0]['status_of_implicit_demand_for_infra_it_through_it_strategy_n_op']); ?></td>
					  </tr>
                      <tr class="brdrBttm">
                      <td class="tblTxt" >Details of Operational  Transformation Initiatives</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[0]['details_of_operational_transformation_initiatives']); ?></td>
					 </tr>
					<tr class="brdrBttm" >
					  <td class="tblTxt" >Status of Explicit Demand  for Infra IT through IT Strategy & Operational Transformation</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[0]['status_of_explicit_demand_for_infra_it_through_it_strategy_n_op']); ?></td>
					  </tr>
                      <tr class="brdrBttm" >
                      <td class="tblTxt" >Details of Infra- Specific IT Strategy & Operational  Transformation Initiatives</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[0]['details_of_infra_specific_itStrategy_n_operational_transforma']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt" >Capgemini Infrastructure Solution Tags - IT Strategy</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[0]['capgemini_infrastructure_solution_tags_it_strategy']); ?></td>
					 
                      
					</tr>
                    <tr><td colspan="2" align="center"><strong>Business Strategy</strong></td></td></tr>
					<tr class="brdrBttm">
                    <td class="tblTxt">Status of Implicit Demand  for Infra IT through Business Strategy</td>
					  <td class="tbltxtVal">NA</td>
					
						   </tr>
                       <tr class="brdrBttm">
                       <td class="tblTxt">Details of Strategic Business Initiatives</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['details_of_strategic_business_initiatives']); ?></td>
						</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Status of Explicit Demand  for Infra IT through Business Strategy</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['status_of_explicit_demand_for_infra_it_through_business_strate']); ?></td>
					 </tr>
                     <tr class="class="brdrBttm"">
                      <td class="tblTxt">Details of Infra- Specific Strategic Business Initiatives</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['details_of_infra_specitic_strategic_business_initiatives']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Capgemini Infrastructure Solution Tags - Business Strategy </td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['capgemini_infrastructure_solution_tags_business_strategy']); ?></td>
					</tr>
                       <tr class="brdrBttm">
                    <td class="tblTxt" ><strong>Key IT Implementation Buzz for Account</strong>	</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['key_it_implementation_buzz_for_account']); ?></td>
				
                    </tr>
                     <tr><td colspan="2"><strong>Date Centre Details</strong></td></td></tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt">Data Centre Location</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Data_Center_Location']); ?></td>
					  </tr>
                      
                         <tr class="brdrBttm">
					  <td class="tblTxt">Data Centre Status</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Data_Center_Status']); ?></td>
					  </tr>
                      
                        <tr class="brdrBttm">
					  <td class="tblTxt">Data Centre Service Provider</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Data_Center_Service_Provider']); ?></td>
					  </tr>
               <tr><td colspan="2" align="center"><strong>M&As </strong></td></td></tr>
                  
                  <tr class="brdrBttm">
					  <td class="tblTxt">Status of M&A in last 6 months</td>
					  <td class="tbltxtVal">NA</td>
					  </tr>
                  <tr class="brdrBttm">
					  <td class="tblTxt">M&A Details</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['mna_details']); ?></td>
					  </tr>
                      <tr class="brdrBttm">
                      <td class="tblTxt">M&A Location</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['mna_location']); ?></td>
					 </tr>
                      <tr><td colspan="2"><strong>Divestments</strong></td></td></tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Status of Divestment in last 6 months</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['status_of_divestment_in_last_6_months']); ?></td>
					  
					</tr>
                    <tr class="brdrBttm">
                    <td class="tblTxt">Divestment Details</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['divestment_details']); ?></td>
					
                    </tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Divestment Location</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['divestment_location']); ?></td>
					  	</tr>
                        
					 
						<!--<td class="tblTxt">Capgemini Relationship with IT Advisor
	</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($companydetails[0]['status_of_implicit_demand_for_infra_it_through_it_strategy_n_op']); ?></td>-->
					</tr>
				  </table>
				 
				</div>
			</div>
              
              
              
              <div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Expiring Contract Details<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
                
				<?php for($w=0;$w<count($companydetails);$w++){?>
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
	  
					<tr class="brdrBttm">
                    <td class="tblTxt"><strong>Contract Number </strong></td>
					  <td class="tbltxtVal" style="font-size:17px !important;"><strong><?php echo($w+1); ?></strong></td>
					  <td class="tblTxt">Account Name</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['account_name']); ?></td>
					  
					</tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt">Account's Parent Name</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['parent_name']); ?></td>
					  <td class="tblTxt">Other Key Subsidiary of the Same Parent</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['other_accounts']); ?></td> 
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Signing Country</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Signing_Country_or_Actual_sigining_country']); ?></td>
					  <td class="tblTxt">Geographic Coverage</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Geographic_Coverage']); ?></td>
					</tr>
                    <tr class="brdrBttm">
                      <td class="tblTxt">Name of Incumbent Vendors</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['vendor']); ?></td>
					  <td class="tblTxt">Total Contract Value</td>
					  <td class="tbltxtVal">&euro;<?php echo($companydetails[$w]['Total_Contract_Value']); ?>Mn</td>
					</tr>
					<tr class="brdrBttm">
                     <td class="tblTxt">Contract Start Date</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Contract_Start_Date']); ?></td>
					   <td class="tblTxt">Contract End Date</td>
					   <td class="tbltxtVal"><?php echo($companydetails[$w]['Contract_End_Date']); ?></td>
                       
					</tr>
					
					<tr class="brdrBttm">
                     <td class="tblTxt">Renewal Year</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Renewal_Year']); ?></td>
					 
					 <td class="tblTxt">Renewal Month</td>
					   <td class="tbltxtVal"><?php echo($companydetails[$w]['Renewal_Month']); ?></td>
					</tr>
					
					<tr class="brdrBttm"><td class="tblTxt" >Contract Description</td>
					  <td class="tbltxtVal" ><?php echo($companydetails[$w]['Contract_Description']); ?></td>
                     <td class="tblTxt">Infrastructure Contract Description</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Infrastructure_Contract_Description']); ?></td>
                   
					 
					 
					</tr>
					<tr class="brdrBttm"> <td class="tblTxt">Contract Service Category</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Contract_Service_Category']); ?></td>
                      <td class="tblTxt">Contract Award Type</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Contract_Award_Type']); ?></td>
                    </tr>
					<tr class="brdrBttm"><td class="tblTxt">Relevant SBU for Contract</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Relevant_SBU_for_Contract']); ?></td>
                    <td class="tblTxt">Infrastructure Contract Qualification</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Infrastructure_Contract_Qualification']); ?></td>
                    
                    
					  
					</tr>
					<tr class="brdrBttm">
                    
                    <td class="tblTxt">Comments on Renewal Contracts</td>
					  <td class="tbltxtVal"><?php echo($companydetails[$w]['Comments_on_Renewal_Contracts']); ?></td>
                      <td class="tblTxt"><!--Ranking Band--></td>
					  <td class="tbltxtVal"><?php //echo($companydetails[$w]['Ranking_Band']); ?></td>
					</tr>
				 </table>
				  <?php }?>
				</div>
			</div>
              
              
              
              
			<div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Capgemini  Relationship History with Account<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
				
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
				 
					<tr class="brdrBttm">
					  <td class="tblTxt">Account Status</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['account_status']); ?></td>
					  <td class="tblTxt">Capgemini  Relationship with IT Advisor</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['capgemini_relationship_with_it_advisor']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt" colspan="2"><strong>Capgemini Total Revenue for the Account</strong></td>
					  <td class="tbltxtVal" colspan="2"><?php echo($companydetails[0]['capgemini_total_revenue_for_the_account']); ?></td>
					</tr>
                    <tr class="brdrBttm">
                    <td colspan="4" style="border-left:1px solid #CCC;margin-top:20px;">
                   <table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" style=" border-bottom:0px">
  <tr>
    <td><b>Infrastructure Revenue</b></td>
    <td><b>AppsOne Revenue</b></td>
    <td><b>AppsTwo Revenue</b></td>
    <td><b>BPO Revenue</b></td>
    <td><b>Consulting Revenue</b></td>
    <td><b>Sogeti Revenue</b></td>
  </tr>
  <tr>
    <td> &euro;<?php echo($companydetails[0]['infra_revenue']); ?>Mn</td>
    <td> &euro;<?php echo($companydetails[0]['appsone_revenue']); ?>Mn</td>
    <td>&euro;<?php echo($companydetails[0]['appstwo_revenue']); ?>Mn</td>
    <td>&euro;<?php echo($companydetails[0]['bpo_revenue']); ?>Mn</td>
    <td>&euro;<?php echo($companydetails[0]['consulting_revenue']); ?>Mn</td>
    <td>&euro;<?php echo($companydetails[0]['sogeti_revenue']); ?>Mn</td>
  </tr>
</table>
 
                    </td>
                    </tr>
                     <tr class="brdrBttm">
                      <td class="tblTxt">Wallet Share</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Wallet_Share']); ?></td>
                      <td class="tblTxt">Capgemini Relationship Business Depth</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Capgemini_Relationship_Business_depth']); ?></td>
                    </tr>
                    <tr class="brdrBttm">
                    <td class="tblTxt">Relationship on Win-Loss Insights</td>
					  <td class="tbltxtVal">NA</td>
                     <td class="tblTxt">OTACE Score</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['OTACE_Score']); ?></td>
                    
                    </tr>
					<tr class="brdrBttm">
                     <td class="tblTxt">Incumbent SBU</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Incumbent_SBU']); ?></td>
					  <td class="tblTxt">Infrastructure Service Offered</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Infrastructure_Service_Offered']); ?></td>
					  
					</tr>
					<tr class="brdrBttm"><td class="tblTxt">Apps Service Offered</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Apps_Service_Offered']); ?></td>
					  <td class="tblTxt">BPO Service Offered</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['BPO_Service_Offered']); ?></td>
					 
					</tr>
					<tr class="brdrBttm"> <td class="tblTxt">Consulting Service Offered</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Consulting_Service_Offered']); ?></td>
					  <td class="tblTxt">Strategic Account</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($companydetails[0]['Strategic_Account']); ?></td>
					 
					</tr>
                    <tr>
                    <td colspan="4"><strong>Key Capgemini Executives for Account</strong></td>
                    </tr>
					<tr class="brdrBttm">
                    <td class="tblTxt">Executive Sponsor</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Executive_Sponsor']); ?></td>
					  <td class="tblTxt">Account Executive 1</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Account_Executive_1']); ?></td>
					  
					</tr>
					<tr>
                    <td class="tblTxt">Account Executive 2</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Account_Executive_2']); ?></td>
					  <td class="tblTxt">Business Development Executive</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Business_Develoment_Executive']); ?></td>
					</tr>
                     <tr>
                     <td colspan="4"><strong>Interaction History</strong></td>
                    </tr>
					<tr class="brdrBttm">
                    <td class="tblTxt">Last Interaction Date with Account</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Last_Interaction_Date_with_Account']); ?></td>
					  <td class="tblTxt">Interaction Conversation History</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Interaction_Conversation_History']); ?></td>
					</tr>
					
				  </table>
				  
				</div>
			</div>
			
			
			
			
			
			
			
			<div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Account Prioritisation Metrics<span class="rightBar"></span>
                
				</div>
				<div class="accordion-content">
				
				
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
			  
					<tr class="brdrBttm">
					  <td class="tblTxt">Last Updated</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Last_Update']); ?></td>
					  <td class="tblTxt">Latest Rank</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Latest_Rank']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Previous Rank</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Previous_Rank']); ?></td>
					  <td class="tblTxt">Ranking Trend</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Ranking_Trend_voltility']); ?></td>
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Ranking Movement Justification</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Ranking_Movement_Justification']); ?></td>
					  <td class="tblTxt">Account Total Score</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Score_in_senario1']); ?></td>
					</tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt" colspan="4"><strong>Account Attractiveness Score</strong></td>
					  
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Contract Number</td>
					  <td class="tbltxtVal"><?php 
   $vendors = array();
    for($x=0; $x<count($companydetails);$x++){ 
         $vendors[$x] = $companydetails[$x]['vendor'];
        } 
    echo count(array_unique($vendors));
   ?></td>
					  <td class="tblTxt">Contract Size</td>
					  <td class="tbltxtVal">
					 &euro;<?php 
   $tcv=0;
    for($x=0; $x<count($companydetails);$x++){ 
         $tcv = $companydetails[$x]['Total_Contract_Value']+$tcv;
        } 
    echo $tcv;
   ?>Mn
                      </td>
					</tr >
                   
                    <tr class="brdrBttm">
					  <td class="tblTxt" >Geography of Decision Makers</td>
					  <td class="tbltxtVal" colspan="3"><?php echo($companydetails[0]['Geography_of_Decision_Makers']); ?></td>
                      </tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">New CIO</td>
					  <td class="tbltxtVal brdrNone"><?php echo($companydetails[0]['New_CIO']); ?></td>
                      <td class="tblTxt">New CPO</td>
					  <td class="tbltxtVal brdrNone"><?php echo($companydetails[0]['New_CPO']); ?></td>
					</tr >
                    <tr class="brdrBttm"> 
					  <td class="tblTxt">IT Budget</td>
					  <td class="tbltxtVal brdrNone">&euro;<?php echo($companydetails[0]['it_budget']); ?>Mn</td>
                      <td class="tblTxt">Account Revenue Latest Year</td>
					  <td class="tbltxtVal brdrNone">&euro;<?php echo($companydetails[0]['revenue_annual']); ?>Mn</td>
					</tr>
                    <tr class="brdrBttm"> 
					  <td class="tblTxt">Geographic Focus</td>
					  <td class="tbltxtVal brdrNone"><?php echo($companydetails[0]['geographic_focus']); ?></td>
                      <td class="tblTxt">Propensity to Outsource</td>
					  <td class="tbltxtVal brdrNone"><?php echo($companydetails[0]['Propensity_to_Outsource']); ?></td>
					</tr>
                    
                     <tr>
                    <td colspan="4"><strong>Capgemini  Positioning Score</strong></td>
                    </tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt">Industry Attractiveness</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Industry_Attractiveness']); ?></td>
					  <td class="tblTxt">Capgemini Relationship Business Depth</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Capgemini_Relationship_Business_depth']); ?></td>
					</tr>
                    <tr class="brdrBttm">
					  <td class="tblTxt">Wallet Share</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Wallet_Share']); ?></td>
                      <td class="tblTxt">Relationship on Win-Loss Insights</td>
					  <td class="tbltxtVal">NA</td>
					
					</tr>
                    <tr class="brdrBttm">
                     
					  <td class="tblTxt">OTACE Score</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['OTACE_Score']); ?></td>
                      <td class="tblTxt">Capgemini  Relationship with IT Advisor</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['capgemini_relationship_with_it_advisor']); ?></td>
					  
					</tr>
                   
				  </table>
				
				</div>
			</div>
		  
			
			<div class="accordion-container">
				<div class="accordion-toggle">
				<span class="toggle-icon">Top Three Opportunities for Account<span class="rightBar"></span></span>
				</div>
				<div class="accordion-content">
                
				
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
	  
					<tr class="brdrBttm">
					  <td class="tblTxt">Recommended Opportunity 1</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Recommended_Opportunity_1']); ?></td>
					  
					</tr>
					<tr class="brdrBttm">
					  <td class="tblTxt">Recommended Opportunity 2</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Recommended_Opportunity_2']); ?></td>
					 
					</tr>
                    <tr class="brdrBttm">
                      <td class="tblTxt">Recommended Opportunity 3</td>
					  <td class="tbltxtVal"><?php echo($companydetails[0]['Recommended_Opportunity_3']); ?></td>
					 
					</tr>
			
				  </table>
			
				</div>
			</div>
			
          </div>
          <!--<div class="content">
					<h3>energiekonzept</h3>
					<p><strong>Energieausweis in Erstellung</strong></p>
				</div>
			-->
          <div>
			<a href="listingdetails.php?viewby_as&asdummy"> 
				<input class="srch_btn" type="submit" value="Back" style="height: 30px;width: 80px;"/>
			</a> 
		  </div>
        </div>
      </div>
    </article>
  
  </section>
<?php include 'footer.php'; ?>
</main>


<!-- super cache --></body></html>
<?php }else{ 
$newURL="login.php";
header('Location: '.$newURL);
}
?>