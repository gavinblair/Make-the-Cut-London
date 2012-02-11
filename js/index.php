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

  <title>DIY London - Budget App</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
	<!-- Facebook Open Graph data -->
	<meta property="og:title" content="DIY London Budget App" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.zoeandgavin.com/budgetapp" />
	<meta property="og:image" content="http://www.zoeandgavin.com/budgetapp/img/logo.jpg" />
	<meta property="og:site_name" content="DIY London Budget App" />

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

<body
	<?php if(!isset($_GET['tax'])) { ?>
		class="intro" >

  <div id="container">
		<header class="intro">
			<h1>Do it yourself - London - 2011 Budget App</h1>
		</header>
		<div id="main" class="intro">
				<p>Tired of hearing about services being cut across the city of London?</p>
				<p>Think you could do a better job with the budget?</p>
				<p>Here's your chance to do your best!</p>
				<hr />
				<p>To understand whether your taxes will increase or decrease based on your budget decisions, please fill out one of the following options:</p>
			<form id="intro" method="get" action="">
				<ol>
					<li><label for="tax">Enter your 2011 property taxes, found on your 2011 Property Tax Bill:</label> $<input type="text" name="tax" id="tax" value="2799" /></li>
					<li><label for="value">Enter your 2011 property taxes, found on your 2011 Property Tax Bill:</label> 
						<ul>
							<li><label for="value">Your Property's Current Value Assessment:</label> $<input type="text" name="value" id="value" /></li>
							<li><label for="rate">Your residential tax rate:</label> <input type="text" name="rate" id="rate" />%</li>
						</ul>
					<li><label for="tax">Don't have this information? No problem! Use the example Property Tax from 2011 of $2,799.</label></li>
				</ol>
				<input type="submit" value="start!" id="start" />
			</form>
		</div>
	<?php } else { ?>
		>
  <div id="container">
		<?php
			$tax = intval($_GET['tax']);
			$value = isset($_GET['value']) ? intval($_GET['value']) : 0;
			$rate = isset($_GET['rate']) ? intval($_GET['rate']) : 0;
			
			if($tax == 0 && $value > 0 && $rate > 0) {
				//calculate $tax based on $value and $rate
				/**/$tax = $value * $rate;
			} else if($tax == 0 && $value == 0 && $rate == 0) {
				//use the average tax
				$tax = 2799;
			}
			$originaltax = $tax;
		?>
		<header>
			<h1>Do it yourself - London - 2011 Budget App</h1>
			<h2><img src="img/house.gif" />Your 2010 taxes: <span>$<?php echo number_format($originaltax); ?></span></h2>
		</header>
		<div id="main" role="main">
			<form id="quiz" name="quiz" action="" method="post">
			<?php  
				$questions = array();
				$questions['culture']['question'] = "Are you interested in supporting the Library's plan to create programs directed at senior citizens? They are requesting funding for staffing needs and funding to make libraries in London safe, comfortable and inviting for older adults. <br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/Culture/bc_services_srs.pdf'>More Information</a>";
				$questions['culture']['increase'] = array(
					"Seniors Safe",
					"In Libraries",
					"Unrelated: shortage of knitting books in town",
					0.04
				);
				$questions['culture']['nochange'] = array(
					"Senior Citizens",
					"Go off the Books",
					"Refuse to pay late fees"
				);
				
				$questions['environmental']['question'] = "Would you like to see City-wide Green Bin implementation? Funding for this project would include green bin collection, weekly recycling collection and a modified garbage collection. <br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/other/GreenBin.pdf'>More Information</a>";
				$questions['environmental']['increase'] = array(
					"Green Light",
					"On Green Bins",
					"",
					0.42
				);
				$questions['environmental']['nochange'] = array(
					"Green Bin Program",
					"Trashed by City",
					""
				);
				$questions['parks-and-recreation']['question'] = "Would you support creating eight new soccer pitches in the City? These pitches would replace the loss of 15 other pitches being removed from use.<br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/Parks_Rec/bc-sportsservices.pdf'>More Information</a>";
				$questions['parks-and-recreation']['increase'] = array(
					"City gets",
					"Ball Rolling",
					"Soccer fans rejoice",
					0.48
				);
				$questions['parks-and-recreation']['nochange'] = array(
					"London",
					"Drops the Ball",
					"Streets overrun by angry soccer moms"
				);
				$questions['planning-and-development']['question'] = "Do you support increasing London's Planning Division staffing to match the size of Planning Divisions in other municipalities? This funding would support the hiring of five new staff members.<br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Budget/Budget_2012/pdfs/8_Planning_Department_Work_Plan_Staff_Requirements.pdf'>More Information</a>";
				$questions['planning-and-development']['increase'] = array(
					"Planning Division Hires",
					"Five New Grads",
					"London's Planning and Development office is growing",
					0.09
				);
				$questions['planning-and-development']['nochange'] = array(
					"New Development Staff",
					"Get the Boot",
					"Population influx in KW"
				);
				$questions['protective-services']['question'] = "Would you like to see the City's firefighters hire four new firefighters? A minimum of 15 firefighters on a firefighting attack team would allow them to assemble within eight minutes 90% of the time at a single family house fire.<br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/Protection/bc_staffing_aerialtrucks.pdf'>More Information</a>";
				$questions['protective-services']['increase'] = array(
					"Fire Department",
					"Is On Fire!",
					"...with record breaking response times - fastest in Ontario",
					0.09
				);
				$questions['protective-services']['nochange'] = array(
					"Firefighters getting",
					"Burnt Out",
					"Neighbourhood cat stuck in tree for 4 days"
				);
				$questions['social-and-health']['question'] = "Do you want to get rid of bed bugs in the Forest City? Funding would be used to implement a pest control program to reduce bed bugs at LMHC properties and to comply with provincial legislation.<br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/Social_Services/bc_pestcontrol.pdf'>More Information</a>";
				$questions['social-and-health']['increase'] = array(
					"Sleep Tight",
					"No More Bed Bugs to Bite",
					"London citizens sleep well, bed bugs bite no more",
					0.05
				);
				$questions['social-and-health']['nochange'] = array(
					"Sleep Tight",
					"Don't let the Bed Bugs Bite",
					"Lack of sleep causing Londoners to bug out"
				);
				$questions['transportation']['question'] = "Do you think it's a good idea to replace individual parking meters with Pay & Display terminals? The terminals would be implemented in high usage areas downtown.<br />&nbsp;<br /><a target='_blank' href='http://council.london.ca/meetings/Archives/Agendas/Environment%20and%20Transportation%20Committee%20Agendas/ETC%20Agendas%202009/2009-09-28%20Agenda/Item%205.pdf'>More Information</a>";
				$questions['transportation']['increase'] = array(
					"City Shells out Change",
					"For Parking Meters",
					"Old parking meters transformed into metal shrubberies",
					0.06
				);
				$questions['transportation']['nochange'] = array(
					"No Change",
					"For Parking Meters",
					"Citizens continue to pay for parking through parking meters"
				);
				$questions['corporate-services']['question'] = "Are you in favour of creating diversity programs to build more supportive workplaces that are representative of our community? Funding would support paid work placement programs, employee surveys, and community outreach initiatives.<br />&nbsp;<br /><a target='_blank' href='http://www.london.ca/Reference_Documents/PDFs/Corporate_Operational/bc_diversityprograms.pdf'>More Information</a>";
				$questions['corporate-services']['increase'] = array(
					"Working in London",
					"Just got better",
					"For foreign trained pro's, persons with disabilities, local grads",
					0.02
				);
				$questions['corporate-services']['nochange'] = array(
					"Unemployment",
					"On the Rise",
					"Non-diverse workplaces to blame"
				);
			?>
			
				<ol>
				<?php $i=1; foreach($questions as $key => $q): ?>
				<li id="<?php echo $key; ?>" <?php echo $i == 1? "class='current'" : ''; ?> ><h3><?php echo $i.". &nbsp;".ucwords(str_replace(array('-', 'and'), array(' ', '&'), $key)); ?></h3>
					<p><?php echo $q['question'];  $i++; ?></p>
					<input class="increase" type="radio" name="<?php echo $key; ?>" id="<?php echo $key; ?>-increase" value="increase" /><label  class="increase" for="<?php echo $key; ?>-increase">Increase</label>
					<input class="nochange" type="radio" name="<?php echo $key; ?>" id="<?php echo $key; ?>-nochange" value="nochange" /><label class="nochange" for="<?php echo $key; ?>-nochange">No Change</label>
					<?php if(count($q['increase']) > 0) { ?>
						<input type="hidden" name="percent<?php echo $key; ?>" id="<?php echo $key; ?>-percent" value="<?php echo $q['increase'][3]; ?>" />
						<p class="increase1 <?php echo $key; ?>"><?php echo $q['increase'][0]; ?></p>
						<p class="increase2 <?php echo $key; ?>"><?php echo $q['increase'][1]; ?></p>
						<p class="increase3 <?php echo $key; ?>"><?php echo $q['increase'][2]; ?></p>
					<?php } ?>
					<?php if(count($q['nochange']) > 0) { ?>
						<p class="nochange1 <?php echo $key; ?>"><?php echo $q['nochange'][0]; ?></p>
						<p class="nochange2 <?php echo $key; ?>"><?php echo $q['nochange'][1]; ?></p>
						<p class="nochange3 <?php echo $key; ?>"><?php echo $q['nochange'][2]; ?></p>
					<?php } ?>
					<br class="clear" />
				</li>
				<?php endforeach; ?>
		
				<!-- div id="closing">
					<h3>Like this? Then share it!</h3>
					<div class="fb-like" data-href="http://www.zoeandgavin.com/budgetapp" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="segoe ui"></div>
					<br /><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://zoeandgavin.com/budgetapp">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<br />
					<h3>Or check out the code</h3>
					<p></p>
					
				</div -->
				<div id="taxes">Total 2011 Taxes: <span>$<em id='totaltaxes'><?php echo number_format($originaltax); ?></em></span></div>
				<br class="clear" />
			</form>
		</div>
		<div id="fontPreload">.</div>
	<?php } ?>
  </div> <!--! end of #container -->
		<footer>
			Copyright &copy; 2012. All Rights reserved. Created by <a href="http://flavors.me/humanbeings">human beings</a>.
		</footer>
	<div id="greenscreen" class="hidden">
		<div id="dialog" class="hidden">
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
	</div>

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
    window._gaq = [['_setAccount','UA-28366082-1'],['_trackPageview'],['_trackPageLoadTime']];
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
