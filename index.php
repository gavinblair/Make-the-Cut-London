<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Make the Cut London - Budget App</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
	<!-- Facebook Open Graph data -->
	<meta property="og:title" content="DIY London Budget App" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.zoeandgavin.com/makethecut" />
	<meta property="og:image" content="http://www.zoeandgavin.com/makethecut/img/logo.jpg" />
	<meta property="og:site_name" content="Make the Cut London - Budget App" />

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:700|PT+Sans:400|PT+Sans+Narrow|Righteous|Anton' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <div id="container">
		<header>
			<h1 onClick="choicelog('general', 'header');">Do it yourself - London - 2011 Budget App</h1>
			<?php 
			/*
			 *		facing a 1.46% tax increase
			 *	 	average taxes paid are 2799
			 *		tax increase of $40.8654
			 */ ?>
			<h2 onClick="choicelog('general', 'house');"><img src="img/house.gif" />Average 2012 Taxes: <span>$2,840</span></h2>
		</header>
		<div id="main" role="main">
			<form id="quiz" name="quiz" action="" method="post">
			<?php  
				$questions = array();
				
				//questions
				$questions['required-corporate-adjustment'] = array(
					'question' => "A matter pertaining to litigation or potential litigation with respect to funding related to local boards or commissions and advice that is subject to solicitor-client privilege, including communications necessary for that purpose, and for the purpose of providing instructions and directions to officers and employees of the Corporation.",
					'value' => 896000
				);
				$questions['community-services']['question'] = "	Group these ones together, because they aren�t expected to negatively impact services 
												<br />												In Camera Item (98K)
											<br />													Fire Operating Efficiencies (73K)
										<br />														In Camera Item (81K)
									<br />															Social Housing Act (150K)
								<br />																2012 Long Term Care Case Mix Index (150K)
							<br />																	This one voted as a pass, but has a 0K reduction? Don�t understand.";
				$questions['community-services'] = array(
					'question' => "Group these ones together, because they aren’t expected to negatively impact services
					<br />						In Camera Item (98K)
					<br />						Fire Operating Efficiencies (73K)
					<br />						In Camera Item (81K)
					<br />						Social Housing Act (150K)
					<br />						2012 Long Term Care Case Mix Index (150K)
					<br />						Voted seperately. This one voted as a pass, but has a 0K reduction? Don't understand.

<br /><br />											Passed. Votes not recorded.",
					'value' => 649000
				);
				$questions['operating-efficiencies'] = array(
					'question' => "In Camera Item (1,200K)
							<br />	
					Energy cost reduction &amp; revised forecast deficit to be offset by reserve fund (100K)
							<br />
					Reduced recycling costs at Material Recovery Facility 60k
							<br />				In Camera Item 15k
<br />
							<br />				Passed. Votes not recorded.",
					'value' => 1375000
				);
				$questions['provincial-regulations'] = array(
					'question' => "AODA- reduction in annual budget contribution from $1,060,000 to $560,000. This will reduce the permanent budget of $1,060,000 to $560,000. The newly released requirements from the province reflect the ongoing input of municipalities over the past several years. This has resulted in a change to the Built Environment Standard in that the province will not require retrofitting present infrastructure as originally predicted and will be required for new infrastructure therefore Lowering the original cost prediction

						<br /><br />					Vote Passed
						<br />					YEAS:  Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (8)
						<br />					NAYS:  Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, Armstrong (7)",
					'value' => 500000
				);
				$questions['revenue-rationalization'] = array(
					'question' => "<br />Vehicle& Equipment Reserve Fund contribution 500k
						Vehicle & Equipment Reserve Fund contribution 500k
Reduction ¡n internal equipment rental rates resulting in a reduced contribution to the Vehicle & Equipment Reserve Fund (Fleet). This is reviewed annually and could change in future years.
Energy Management Reserve Fund 100k
Elimination of contribution to Energy Management Reserve Fund recognizing that there are no planned draws against the reserve fund and 50.5 million has been allocated to the Facility Energy Management Capital Program from Federal Gas Tax.
Recycling Revenue 170k
2012 revenue projections for recyclable materials are becoming clearer. More up-to-date numbers suggest an improvement of between $2 and $4 per tonne for 2012. ln addition, Waste Diversion Ontario funding has increased for one year as funding reflects the low market revenue experienced in 2009 and 2010.
Building – subdivision revenue 45k
No impact. Since 2012 Draft Budget was submitted, the 2011 actual experience was higher than anticipated.
Parking Equipment 150k
One time - utilize Parking Reserve Fund funding
Parking Revenue 38k
 new convenience fee - paying tickets on line, Assumes 25,000 transactions/year @S1.50/transaction = $37,500 new revenue: Help offset cost of online service.

						<br /><br />			Vote Passed. 
						<br />			YEAS:  Fontana, Swan, Branscombe, Henderson, Bryant, Polhill, Orser, Baechler, M. Brown, Hubert, Van Meerbergen, D. Brown, Usher, White, Armstrong (15)",
					'value' => 1003000
				);
				$questions['grass-cutting'] = array(
					'question' => "Reduced grass cutting along roadsides will lead to reduced aesthetics. The City will not look and feel as attractive to existing and future business and residents which may impact economic prosperity initiatives for a strong economy. This cut rolls back 20% of the $450,000 added in 2011 to support improvements roadside maintenance resulting in increasing the time between service cycles and the reduced aesthetic of our city.
								<br /><br /> Vote Failed
								<br />			YEAS: Fontana, Swan, Henderson, Orser, Van Meerbergen, D. Brown (6)
								<br />			NAYS: Branscombe, Bryant, Polhill, Baechler, M. Brown, Hubert, Usher, White, Armstrong (9)",
					'value' => 90000
				);
				$questions['horticultural-features'] = array(
					'question' => "Horticultural features in parks and new communities will get less support and increase time between visits for service. This will result in reduced aesthetics of various features. Service levels for horticultural features in the city will decline incrementally to pre 2010 levels.

								<br /><br />			Vote Passed
								<br />			YEAS:  Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (8)
								<br />			NAYS:  Branscombe, Bryant, Baechler, M. Brown, Hubert,  Usher, Armstrong (7)",
					'value' => 75000
				);
				$questions['winter-park-garbage-pickup'] = array(
					'question' => "This cut excludes Springbank, Gibbons and Victoria Park. Currently Parks Operations manages a reduced number of garbage can in parks over the late fall and winter. The service is directed to historic areas where year round service was provided. Most park don't have winter collection. Survey of park garbage in the off season finds that the predominant waste is dog feces and in many locations nearby resident household waste is placed in and by park cans between regular street pick ups. The service level in winter is low with pick up once every three to four weeks. This service level at present is inadequate leading to overflowing cans, cans that are very heavy and unsightly. Garbage will continue to be collected at Springbank, Gibbons and Victoria Park. Some parks may see an increase in litter that will need to be picked up in the spring. Residents enjoying this service will likely voice their concerns over this loss which may lead to some of the litter concerns and requests to reinstate the service

								<br /><br />			Vote Passed
								<br />			YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (8)
								<br />			NAYS:  Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, Armstrong (7)",
					'value' => 75000
				);
				$questions['daytime-arena-closures'] = array(
					'question' => "Close all arenas until 3:30pm, except Nichols & Stronach.  ln prior years arena daytime hour closures were implemented to reduce costs at single pad arenas. This cut expands these closures for Monday to Fridays during the day to the rest of the arenas with the exception of Nichols and Stronach Arena and Community Centres. Senior skate, moms & tots programs and school athletic classes will be affected. Will result in decreased daytime activity in family and seniors, reduce neighbourhood convenience of use by location, decreased school activities and decreased recreational opportunities for daycare providers. Closure will be daily Monday to Friday until 3:30.

							<br /><br />				Vote Failed
							<br />				YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown (7)
							<br />				NAYS: Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, White, Armstrong (8)",
					'value' => 120000
				);
				$questions['community-center-hours'] = array(
					'question' => "Reduced Community Centre Hours on weekdays (Friday evenings), Saturdays (afternoons and evenings), Sundays (afternoons and evenings). Elimination of free community access support and cancellation of some drop-in programs.

								<br /><br />			Vote Failed
								<br />			YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown (7)
								<br />			NAYS:  Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, White, Armstrong (8)",
					'value' => 64000
				);
				$questions['outdoor-aquatics'] = array(
					'question' => "Overall service reduction in outdoor aquatics: Closure of park site wading pools; Evening closures at three outdoor pools. Closure of Park Site Wading Pools (50% of pools, 16% of bather use) (University Heights, Murray, Byron, Smith, and Silverwoods. This will affect a small number of users (2733) across the 5 wading pools. These are low utilization pools that are nearing the end of their useful life and will need capital repairs. Elimination of wading pools is noted in the Master plan and aquatic reports in the past. New spray pad investment and limited number of days available all impact use the use of wading pools. Additional Board of Health requirements will increase future operational costs. Closure of these last wading pools will avoid capital and increased operating costs in future years. 
					Evening closures at three unheated pools (Northridge, Byron, Southcrest) These three pools are not heated and have low evening use. Coverage can be provided by attending at the closest heated pool. This will result in the cancellation of recreational swims. Family pass purchases could be affected as families may not want to be limited to afternoon and weekend swims. While other heated pools are in close proximity users may not wish to drive to another facility outside their neighbourhood.

							<br /><br />				Vote Passed
							<br />				YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (8)
							<br />				NAYS:  Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, Armstrong (7)",
					'value' => 23000
				);
				$questions['veterans-memorial-parkway-project'] = array(
					'question' => "Eliminate service improvement capital project PD 1142 - Veterans Memorial Parkway - funded by capital levy Service improvement project reduced thereby reducing capital levy.

							<br /><br />				Vote Failed
							<br />				YEAS:  Swan, Henderson, Orser, Van Meerbergen (4)
							<br />				NAYS:  Fontana, Branscombe, Bryant, Polhill, Baechler, M. Brown, Hubert,  D. Brown, Usher, White, Armstrong (11)",
					'value' => 100000
				);
				$questions['snow-control'] = array(
					'question' => "Snow control budget - reduce 2012 growth and maintain at 2011 budget - risk to be
mitigated by severe weather reserve fund. Risk of using Severe Weather Reserve Fund to a greater extent in order to meet Minimum Maintenance Standards. A review of the service in 2012 will establish opportunities and risks for this service.

								<br /><br />			Vote Failed
								<br />			YEAS: Fontana, Swan, Henderson, Polhill, Van Meerbergen, D. Brown, White (7)
								<br />			NAYS: Branscombe, Bryant, Orser, Baechler, M. Brown, Hubert, Usher, Armstrong (8)",
					'value' => 162000
				);
				$questions['street-sweeping'] = array(
					'question' => "Reduce street sweeping. Aesthetic servlce reduction.
								<br /><br />			Vote Failed
								<br />			YEAS: Fontana, Swan, Polhill, Van Meerbergen, D. Brown (5)
								<br />			NAYS: Branscombe, Henderson, Bryant, Orser, Baechler, M. Brown, Hubert, Usher, White Armstrong (10)",
					'value' => 70000
				);
				$questions['road-patching'] = array(
					'question' => "Aesthetic service reduction. This assumes no capital reduction in Road Rehabilitation.

						<br /><br />				Vote Failed
						<br />				YEAS: Fontana, Swan (2)
						<br />				Nays: Branscombe, Henderson, Bryant, Polhill, Orser, Baechler, M. Brown, Hubert, Van Meerbergen, D. Brown, Usher, White, Armstrong (13)",
					'value' => 100000
				);
				
				$questions['waste-management'] = array(
					'question' => "Growth in 2012 budget for waste management services. Some to medium impact on the public anticipated. Significant optimization and efficiency activities in waste management services will be required to make up for the remainder of the reduction in growth dollars. Will also rely on favourable weather conditions.

								<br /><br />			Vote Failed
								<br />			YEAS: Fontana, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (7)
							<br />				NAYS: Swan, Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, Armstrong (8)",
					'value' => 180000
				);
				$questions['downtown-cleaning'] = array(
					'question' => "Eliminate downtown clean up afternoon shift (May - August). Aesthetic service reduction.

							<br /><br />				Vote Failed
							<br />				YEAS: Fontana, Polhill, Orser, White (4)
							<br />				NAYS: Swan, Branscombe, Henderson, Bryant, Baechler, M. Brown, Hubert, Van Meerbergen, D. Brown, Usher, Armstrong (11).",
					'value' => 40000
				);
				$questions['landfill-optimization'] = array(
					'question' => "Planned optimization and efficiency activities at the W12A landfill site will reduce some of the need for overtime. No impact on the public anticipated.

							<br /><br />				Vote Passed
							<br />				YEAS: Fontana, Swan, Branscombe, Henderson, Bryant, Polhill, Orser, Baechler, M. Brown, Hubert, Van Meerbergen, D. Brown, White, Armstrong (14)
							<br />				NAYS: Usher (1)",
					'value' => 35000
				);
				$questions['in-camera'] = array(
					'question' => "A matter pertaining to labour relations and employee negotiations, personal information about identifiable individuals, including municipal employees, with respect to employment related-matters, advice or recommendations of officers and employees of the Corporation including communications neccessary for that purpose, and for the purpose of providing instructions and directions to officers and employees of the Corporation.

							<br /><br />				Vote Failed
							<br />				YEAS: Swan, Branscombe, Bryant, Baechler, M. Brown, Usher, White (7)
							<br />				NAYS: Fontana, Henderson, Polhill, Orser, Hubert, Van Meerbergen, D. Brown, Armstrong (8)",
					'value' => 400000
				);
				$questions['in-camera-ii'] = array(
					'question' => "A matter pertaining to labour relations with respect to employment related-matters advice or recommendations of officers and employees of the Corporation including communications necessary for that purpose, and for the purpose of providing instructions and directions to officers and employees of the Corporation.

								<br /><br />			Vote Passed
								<br />			YEAS: Fontana, Swan, Henderson, Bryant,  Orser, Hubert, Van Meerbergen, D. Brown, White (9)
								<br />			NAYS: Branscombe, Polhill, Baechler, M. Brown, Usher, Armstrong (6)",
					'value' => 50000
				);
				$questions['downtown-sercurity-camera-program'] = array(
					'question' => "This reduction will eliminate the program.
							<br /><br />				Vote failed
							<br />				YEAS: Swan, Branscombe, Baechler (3)
							<br />				NAYS:  Fontana, Henderson, Bryant, Polhill, Orser, M. Brown, Hubert, Van Meerbergen, D. Brown, Usher, White, Armstrong (12)",
					'value' => 60000
				);
				$questions['bylaw-and-licensing-service'] = array(
					'question' => "Reduce customer service levels
									<br /><br />		Vote Failed
									<br />		YEAS: Henderson, Polhill, Van Meerbergen, D. Brown (4)
								<br />			NAYS: Fontana, Swan, Branscombe, Bryant, Orser, Baechler, M. Brown, Hubert, Usher, White, Armstrong (11)",
					'value' => 20000
				);
				$questions['culture-and-community-grants'] = array(
					'question' => "Reduction in city of London Grant budget. Overall budget for grants will be $3.5 million reduced from $3.7 million.
								<br /><br />				Vote Failed
								<br />				YEAS: Fontana, Branscombe, Henderson, Polhill, Orser, Van Meerbergen, D. Brown (7)
								<br />				NAYS: Bryant, Baechler, M. Brown, Hubert, Usher, White, Armstrong (7)
								<br />				Recused: Swan (1)",
					'value' => 250000
				);
				$questions['reserve-contribution-for-downtown'] = array(
					'question' => "Elimination of Downtown Development Charge residential exemption (Old East and SOHO)
								<br /><br />			Vote Failed 
								<br />			YEAS: Henderson, D. Brown, White, Armstrong (4)
								<br />			NAYS: Fontana, Swan, Branscombe, Bryant, Polhill, Orser, Baechler, M. Brown, Hubert, Van Meerbergen, Usher (11)",
					'value' => 50000
				);
				$questions['taxi-licensing'] = array(
					'question' => "Increase in limousine/taxi licensing fees, effective July 12, 2012 implementation. 
								<br />	<br />		Vote Passed
								<br />			YEAS: Fontana, Swan, Branscombe, Henderson, Bryant, Polhill, Orser, Baechler, M. Brown, Hubert, Van Meerbergen, White (12)
								<br />			NAYS: Usher, Armstrong (2)
								<br />			Recused:  D. Brown (1)",
					'value' => 20000
				);
				$questions['business-licensing'] = array(
					'question' => "Increase in revenue for Business Licensing due to increase in rates as well as licensing additional categories effective July 2012.
									<br /><br />		Vote Passed
									<br />		YEAS: Fontana, Swan, Branscombe, Henderson, Bryant, Polhill, Orser, Hubert, D. Brown, Usher White, Armstrong (12)
									<br />		NAYS: Baechler, M. Brown, Van Meerbergen (3)",
					'value' => 20000
				);
				$questions['in-camera-iii'] = array(
					'question' => "A matter pertaining to labour relations and employee negotiations, personal information about identifiable individuals, including municipal employees, with respect to employment related-matters, advice or recommendations of offìcers and employees of the Corporation including communications necessary for that purpose, and for the purpose of providing instructions and directions to officers and employees of the Corporation. 1M suggested cut, 1.5M approved.

								<br /><br />			Vote Passed
								<br />			YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brwon, White, Armstrong (9)
								<br />			NAYS: Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher (6)",
					'value' => 1500000
				);
				$questions['affordable-housing-reserve'] = array(
					'question' => "Reduce annual contribution fo New Affordable Housing Reserve from $2m to $1M. Reduction in annual contribution will reduce the City�s contribution towards the creation of new affordable housing units. 
											<br /><br />Vote Passed
										<br />	YEAS: Fontana, Swan, Henderson, Polhill, Orser, Van Meerbergen, D. Brown, White (8)
								<br />			NAYS: Branscombe, Bryant, Baechler, M. Brown, Hubert, Usher, Armstrong (7)",
					'value' => 1000000
				);
				$questions['in-camera-transportation-services'] = array(
					'question' => "A matter pertaining to labour relations and employee negotiations, (100) personal information about identifiable individuals, including municipal employees, with respect to employment related-matters, advice or recommendations of officers and employees of the Corporation including communications necessary for that purpose, and for the purpose of providing instructions and directions to officers and employees of the Corporation.

											<br /><br />Vote Passed
											<br />YEAS:  Swan, Branscombe, Bryant, Polhill, Orser, M. Brown, Hubert, Usher, White, Armstrong (10)
											<br />NAYS:  Fontana, Henderson, Baechler, Van Meerbergen, D. Brown (5)",
					'value' => 100000
				);
				$questions['reserve-contribution'] = array(
					'question' => "Added to agenda before closing meeting. 
											<br />That the 2012 Reserve Contribution BE REDUCED in the amount of an additional $1.37 million in order to off-set expenditures and result in a zero tax increase.
											<br />
											<br />Vote Passed
											<br />Yeas:  Fontana, Polhill, Armstrong, Swan, Orser, Henderson, Van Meerbergen, D. Brown, White (9)
											<br />Nays: Baechler, Branscombe, M. Brown, Hubert, Usher, Bryant (6)",
					'value' => 1370000
				);
				
			?>
			
				<ol>
				<li id="intro" class="current" ><h3>0% budget increase</h3>
					<p>Currently in development! You can help out by making suggestions in the public <a href="http://bitly.com/z2CxQs">google doc</a> or chatting with me on twitter (<a href="http://www.twiter.com/zoster">@zoster</a>)</p>
					<p>As the unfinalized 2012 budget currently sits, it would require a tax increase of 1.46%, or a $40.87 tax increase on the average municiple tax rate of $2,799. Our city council is committed to a 0% increase for the second year in a row, and asked the Civic Administration for a list of suggested cuts to bring the budget down to a 0% increase. </p>
					<p>Compare how you would cut the budget to how our council voted.</p>
					<input class="start" type="radio" name="start" id="startbtn" value="start" /><label  class="increase" for="startbtn" id="start" onClick="choicelog('start', 'start');" >Increase</label>
					<br class="clear" />
				</li>
				<?php $i=1; foreach($questions as $key => $q): ?>
				<li id="<?php echo $key; ?>" <?php //echo $i == 1? "class='current'" : ''; ?> ><h3><?php echo $i.". &nbsp;".ucwords(str_replace(array('-and', '-'), array('-&', ' '), $key)); echo ' - $'.number_format($q['value']); ?></h3>
					<p><?php echo $q['question'];  $i++; ?></p>
					<input type="hidden" name="percent<?php echo $key; ?>" id="<?php echo $key; ?>-percent" value="<?php echo $q['value']/476000000; ?>" />
					<input class="increase" type="radio" name="<?php echo $key; ?>" id="<?php echo $key; ?>-increase" value="cut" /><label  class="increase" for="<?php echo $key; ?>-increase"  onClick="choicelog('<?php echo $key;  ?>', 'cut');" >Increase</label>
					<input class="nochange" type="radio" name="<?php echo $key; ?>" id="<?php echo $key; ?>-nochange" value="keep" /><label class="nochange" for="<?php echo $key; ?>-nochange" onClick="choicelog('<?php echo $key;  ?>', 'keep');" >No Change</label>
					<br class="clear" />
				</li>
				<?php endforeach; ?>
				</ol>

				<h3 class="hidden summary">You didn't make the cut!</h3>
				<?php if(isset($_GET['round']) && (int)$_GET['round'] > 0) $round = (int)$_GET['round']+1; else $round=2 ?>
				<p class="hidden summary">You didn't acheive a 0% increase. <br />&nbsp;<br />You can <a href="http://www.zoeandgavin.com/makethecut?round=<?php echo $round; ?>" onClick="choicelog('general', 'try-again');" >try again</a>! Or, if you don't want London to make the cuts, you should talk to your councillor before the budget is finalized on February 21st.</p>
				<div id="taxes">Total 2012 Tax Increase: <span>$<em id='totaltaxes'>40.87</em></span></div>
				<br class="clear" />
			</form>
		</div>
		<div id="fontPreload">.</div>
  </div> <!--! end of #container -->
		<footer>
			Copyright &copy; 2012. All Rights reserved. Created by <a href="http://flavors.me/humanbeings" onClick="choicelog('general', 'human-beings');">human beings</a>.
		</footer>
	<!--div>
		<div>
			<p>Based on your budget decisions, your new taxes would be:</p>
			<div id="finaltaxes">$3,075</div>
			<p>(annually)</p>
			<br />
			<p>Have Your Say London!</p>
			<p class="links">
				For more information on the proposed Adds &amp; Cuts, visit:<br />
				<a href="http://www.london.ca/budget/Budget_2012/Adds_and_Cuts_List.pdf">http://www.london.ca/budget/Budget_2012/Adds_and_Cuts_List.pdf</a>
			</p>
			<p class="links">
				For more information on the proposed 2012 budget, and to get involved, visit:<br />
				<a href="http://www.london.ca/d.aspx?s=/budget/Budget_2012/budget12.htm">http://www.london.ca/d.aspx?s=/budget/Budget_2012/budget12.htm</a>
			</p>
		</div>
	</div-->

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UA-29115473-1'],['_trackPageview'],['_trackPageLoadTime'],['_trackEvent']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  
</body>
</html>
