<?php include_once(dirname(dirname(__DIR__)).'/bin/fetchDataNOI.class.php');
if(class_exists('fetchDataNOI')):
	$fetchDataNOI = new fetchDataNOI();
	$translations = $fetchDataNOI->translations;
	$localizedLinks = $fetchDataNOI->localizedLinks;
	$cookie_config = $fetchDataNOI->cookie_config;
endif;
$link_it = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['it']) ? $localizedLinks['privacy']['it'] : '#';
$link_en = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['en']) ? $localizedLinks['privacy']['en'] : '#';
$link_de = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['de']) ? $localizedLinks['privacy']['de'] : '#'; ?>
<!DOCTYPE html>
<html class="body-scrollable" lang="en">
<head>
	<title>NOI Techpark Maps</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../src/css/style.css">
</head>
<?php $body_classes = array('default');
if(isset($_GET) && isset($_GET['totem']) && $_GET['totem'] == 1) :
	$body_classes[] = 'totem';
endif; ?>
<body class="<?php echo implode(' ',$body_classes); ?>">
	<div class="header">
		<div class="aux">
			<a class="logo" href="/">NOI Techpark Suedtirol/Alto Adige</a>
			<a href="/" class="main-site-title site-title">NOI Techpark Maps</a>
			<div class="language-selector-container">
				<div class="title-container">
					<span class="lang-close icon-close"><span class="icon translatable">Chiudi</span></span>
					<h2 class="translatable">Opzioni</h2>
				</div>
				<div class="language-container hide-on-mobile">
					<nav class="language-selector language-selector-desktop">
						<ul class="language-list">
							<li class="active"><a href="<?php echo $link_en; ?>" data-language="en" class="translatable language-tag">EN</a></li>
							<li><a href="<?php echo $link_it; ?>" data-language="it" class="translatable language-tag">IT</a></li>
							<li><a href="<?php echo $link_de; ?>" data-language="de" class="translatable language-tag">DE</a></li>
						</ul>
					</nav>
				</div>
				<div class="language-container hide-on-desktop">
					<p class="accent-color translatable">Scegli la lingua</p>
					<nav class="filters-dropdown dropdown language-selector">
						<span class="dropdown-trigger translatable language-tag" data-language="en">Inglese</span>
						<ul class="dropdown-list language-list">
							<li><a href="<?php echo $link_it; ?>" data-language="it" class="translatable language-tag">Italiano</a></li>
							<li><a href="<?php echo $link_de; ?>" data-language="de" class="translatable language-tag">Tedesco</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<span class="menu-trigger icon-hamburger"><span class="icon translatable">Menu</span></span>
			<span class="lang-trigger icon-lang"><span class="icon translatable">Lingua</span></span>			
		</div>
	</div>
	<div class="main-content">
		<div class="content">
		    <p>NOI Spa Via Volta 13/A
		        <br> I - 39100 Bolzano
		        <br> Tel. +39 0471 066 600
		        <br> Email: info@noi.bz.it
		        <br> VAT number: 02595720216
		        <br> Endowment capital: 110.740.000 €</p>

		    <p>NOI Spa, headquartered at Via Volta 13/A, Bolzano/Bozen (BZ), I-39100, has created this privacy policy in accordance with Articles 4 et seq. of the Regulation (EU) 2016/679 (General Data Protection Regulation) and all other laws and regulations applicable
		        to privacy (hereinafter also referred to as “applicable data protection re-gime”).</p>

		    <p>In particular, we advise you of the following:
		        <br> NOI Spa will utilize your personal data for the following purposes:</p>

		    <ul>
		        <li>to register your account;</li>
		        <li>to send you promotional material upon your corresponding request to do so;</li>
		        <li>to send you e-mails and newsletters;</li>
		        <li>correspondence;</li>
		        <li>IT updates and notifications;</li>
		        <li>finance management;</li>
		        <li>legal procedures: creation, exercise, and protection of rights;</li>
		        <li>adjustments to applicable law;</li>
		        <li>website optimization;</li>
		        <li>fulfillment of contractual obligations to the parties concerned, safeguarding of assets and management of debts.</li>
		    </ul>
		    <p>NOI Spa, headquartered at Via Volta 13/A, Bolzano/Bozen (BZ), I-39100, guarantees pursuant to statutory specifications that the processing of personal data will be carried out with consideration of the fundamental rights and freedoms as well as the
		        dignity of the data subject, with particular reference to confidentiality, personal identity and the right to the protection of personal data.</p>

		    <p>In relation to the aforementioned purposes, your personal data will be forwarded to the following persons/institutions, as required:</p>

		    <ul>
		        <li>to public administrative bodies and agencies, as provided by law</li>
		        <li>to credit institutes with which our company maintains business relationships for the management of accounts receivable/accounts payable and for the carrying out of financial intermediation</li>
		        <li>to all of those natural and/or legal, public and/or private persons (legal offices, administrative bodies, tax-consulting firms, judicial bodies, chambers of commerce, etc.) when the forwarding of it shall be necessary or prove expedient for the
		            carrying out of our activities, in accordance with the manner and objectives described above.</li>
		    </ul>
		    <p>Personal data processed by our agency are not disseminated. Processing of data may be carried out with or without the assistance of electronic, or in any case, automated means and encompasses everything necessary for the processing in question as
		        provided for in Art. 4, Paragraphs 1 and 2 of Regulation (EU) 2016/679. In all cases, data processing is carried out in compliance with all of the security measures that guarantee their security and confidentiality.</p>

		    <p>The data subject may, at any time, assert his or her rights in accordance with Chapter III of the Regulation (EU) 2016/679.
		        <br> In this context we advise you of your rights:</p>

		    <ul>
		        <li>the right not to provide your personal data (please note that we may not be able to offer you the benefits of our website in that case);</li>
		        <li>the right to obtain access to your personal data or a copy thereof together with information on the nature of the corresponding personal data, its processing, and its disclosure;</li>
		        <li>the right to obtain the rectification of any inaccurate personal data concerning you;</li>
		        <li>the right to obtain the following on legitimate grounds:
		            <br> - erasure of your personal data;
		            <br> - restriction of processing of your personal data;
		            <br> - the right to object to the processing of your personal data by or on behalf of us on legitimate grounds;
		            <br> - the right to obtain the transmission of personal data in a structured, commonly used and machine-readable for-mat to other controllers within the limits of the applicable purposes;
		            <br> - if we process your data based on your consent: the right to withdraw consent (provided that such withdrawal does not affect any lawful data processing prior to receipt of your withdrawal of consent, and that it does not affect the processing
		            of your personal data on grounds of another legal basis); and
		            <br> - the right to lodge a complaint with a supervisory authority in connection with the processing of your personal data by or on behalf of us.</li>
		    </ul>
		    <p>Your non-derogable rights shall remain unaffected. The aforementioned rights may be exercised by the data subject or a person nominated by him or her, by means of a request to the data controller: NOI Spa, Via Volta 13/A, I-39100 Bolzano (BZ) - Tel.
		        +39 0471 066 600 - Email: info@noi.bz.it</p>

		    <p>The controller of the processed data is:
		        <br> NOI Spa in the person of the legal representative
		        <br> Via Volta 13/A
		        <br> I-39100 Bolzano (BZ)
		        <br> Tel. +39 0471 066 600
		        <br> E-Mail: info@noi.bz.it
		        <br> N. REA: BZ-190350
		        <br> VAT number: IT 2595720216
		        <br> Tax code number: 02595720216
		        <br> Responsible party for website: NOI Spa</p>

		    <p>DATA PROTECTION OFFICER PURSUANT TO ART. 37 GDPR
		        <br> GRUPPO INQUIRIA SRL
		        <br> Tel. +39 0471 095085
		        <br> E-mail: info@inquiria.it
		        <br> PEC: inquiria@pec.it</p>

		    <h2>Information about Cookies</h2>

		    <p>Cookies are small text files that a website temporarily places, with help from the browser, onto the hard disk of a client’s computer in order to store little bits of information about the website. There are various types of cookies, which can be
		        divided into two categories: technical cookies and profiling cookies, the latter of which are used for marketing and promotional purposes.
		        <br> This website uses both technical and profiling cookies. Details regarding these cookies may be found below.
		        <br> Technical cookies are mainly relevant for the functionality of the website. This category of cookies includes navigation and/or session cookies, which enable user-friendly navigation around the website. In addition there are analytics cookies,
		        which collect information such as the number of website visitors and the manner in which traffic
		        <br> arrives at the website. The group of technical cookies also encompasses functional cookies, which enable the website to re-member selections you’ve made (for example, the filter settings you selected or an automatic language preference for the
		        website).
		        <br> In addition, there are cookies that detect the user’s settings, preferences and actions; a user profile is created through these cookies, which are called profiling cookies. This also allows advertising messages to be combined with the interests
		        of users, thus enabling advertising to be addressed to specific target groups. As soon as the user opens a web page that utilizes this latter form of cookies, a banner noting that the operator of the website uses cookies for marketing purposes
		        is displayed. The banner also informs the user that the site may allow third-party cookies.
		        <br> The banner links to a page with detailed information (where you are presently located), through which the user can decline the storage of cookies. The banner allows the user to give his or her explicit consent, and indicates that further navigation
		        on the website signifies automatic consent to the use of cookies.
		        <br> Clicking on the detailed information does not necessarily imply consent. The banner does not disappear after a certain time, but rather continues to be displayed until the user has either accepted cookies or has consciously navigated further.
		        We are legally required to record and store the user’s decision; thus, no banner will appear on subsequent visits to the website. In addition, the use of cookies may be declined either generally or selectively.
		        <br> If you do not want to accept our cookies, you can decline them through your web browser. The applicable function varies from browser to browser. Details may be found below. Please note that rejecting cookies completely will quite likely lead
		        to limitations in the website’s functioning.
		        <br> Below is a list of those technologies that we use our on sites, including their context, scope and type. It may happen that what are known as third-party cookies (cookies from other advertisers) are used.
		        <br> Further information may be found in the relevant section.
		        <br> You can also explicitly block the use of third-party cookies in the respective browser settings.</p>

		    <p>Overview of Cookies Used</p>

		    <ul>
		        <li>PHPSESSID: A technical cookie used for the management of information relating to navigating from one page to another (e.g. shopping cart)</li>
		        <li>_utmb: A Google Analytics cookie used for approximate tracking of the frequency of bounces on the pages</li>
		        <li>_utmz: A Google Analytics cookie used for tracking the provenance of a request (i.e. from a link, bookmark, or search engine)</li>
		        <li>_dc_gtm_UA-1480760-1: A Google Tag Manager cookie related to the use of Google Analytics</li>
		        <li>_ga: A general use Google Analytics cookie</li>
		        <li>cm_cookie_accept_noi_maps: A technical cookie used to manage the cookie disclaimer banners.</li>
		        <li>DoubleClick: Google ad server cookie</li>
		    </ul>
		    <h3>Profiling Cookies – Retargeting</h3>

		    <p>We emphasize that no personal data is stored through the profiling cookies used, and that usage profiles are not matched with personal data. It is not possible to identify individual persons through the profiling cookie; rather, only information that
		        enables the targeted compilation of anonymous information for interest-based marketing campaigns is stored.
		        <br> If you would like to stop profiling cookies from being placed, you can block them directly by using your browser set-tings (see descriptions below). Please note that for promotional reasons it is possible that the profiling cookies are transferred
		        to third parties or third-party systems such as Facebook, Google, Instagram and others. At this time, the privacy policy of their own systems is applied.</p>

		    <h3>Web Tracking – Google Analytics</h3>

		    <p>In order to continually improve and optimize our service, we use what are known as tracking technologies. This web-site uses Google Analytics, a web analytics service provided by Google Inc. (“Google”). Google Analytics uses cookies that enable the
		        analysis of your website usage, for the purpose of determining the attractiveness of our website and improving its performance and content. The information that the cookie generates about your usage of this website (including your IP address)
		        is transmitted to a Google server in the U.S. and stored there. On behalf of the operator of this site, Google uses this information to evaluate your use of the website, compiling reports about website activity and continuing to provide website-usage
		        and internet-related services to the website operator. In addition, Google may transmit this information to third parties when doing so is required by law and/or where such third par-ties process the information on behalf of Google and/or other
		        web-analytics service providers. Under no circumstances, however, will your IP address be associated with other data from Google and/or other web-analytics service providers.
		        <br> You may decline the use of cookies by selecting the relevant settings on your browser; please note, however, that in this case you may not be able to use all of this website’s features to their fullest extent. In addition, you can prevent the
		        data relating to your usage of the website generated by the cookie (incl. your IP address) from reaching Google as well as the processing of these data by Google, by downloading and installing the following browser plugin: tools.google.com/dlpage/gaoptout
		        <br> For general information about Google Analytics and data protection, please visit https://support.google.com/analyt-ics/answer/6004245?hl=en
		        <br> By using this website you consent to data processing by Google and/or other web-analytics services in the previously described manner and for the purposes outlined above.</p>

		    <h3>Google Adwords Remarketing</h3>

		    <p>We use Google Remarketing in order to retarget users on the Google Display Network. Google uses cookies, which are stored on your computer, for the purpose of analyzing how users utilize the website. The information that the cookie generates about
		        your usage of this website (including your IP address) is sent to a Google server in the U.S. and stored there. Google subsequently shortens your IP address by cutting off last three digits, thus making a clear assignment of the IP address impossible.
		        <br> Google adheres to the privacy policy of the US Safe Harbor agreement, and is registered with the Safe Harbor pro-gram of the US Department of Commerce.
		        <br> Google uses this information in order to evaluate your website usage, compile reports on website activity for web-site operators and continue to provide other services related to the website and the Internet. Google may also transfer this information
		        to third parties, where appropriate, to the extent that it is required by law or that these third par-ties process the information on Google's behalf.
		        <br> Third party providers, including Google, display ads on Internet sites. Third party providers, including Google, use stored cookies in order to display ads that are based on the user’s previous visits to this website.
		        <br> Under no circumstances will Google associate your IP address with any other data held by Google.
		        <br> You can disable Google’s use of cookies by visiting the page that allows you to disable Google’s ads. Please note, however, that you may not be able to use all features of this website to their fullest extent if you do so.
		        <br> By using this site you consent to the processing of data about you by Google in the manner described above, and for the purposes outlined above. The collection and storage of data can be denied at any time, with future effect.
		        <br> No remarketing will be used on sensitive-content sites with personally identifiable information.</p>

		    <h3>Google AdWords Conversion Tracking</h3>

		    <p>This website also uses Google Conversion Tracking. Here, a cookie is placed onto your computer by Google Adwords if you land on our website through a Google ad. These cookies expire after 30 days, and are not used for personal identification. If the
		        user visits certain pages of the website of an Adwords customer, and the cookie has not yet expired, Google and the customer can recognize that the user clicked on the ad and was redirected to this site. Each AdWords customer receives a different
		        cookie. Cookies thus cannot be tracked through the websites of Adwords customers. Information obtained using the conversion cookie is also used to generate conversion statistics for Ad-Words customers who have opted for conversion tracking. Adwords
		        customers know the total number of users who have clicked on their ad and have landed to the respective page with a conversion tracking tag. They do not, how-ever, receive information through which they can identify users personally. If you do
		        not wish to participate in the tracking process, you can also reject the cookie that must be placed to facilitate it; this may be done through a browser setting that generally disables the automatic placement of cookies.
		        <br> You can also disable conversion-tracking cookies by setting your browser to block cookies that originate from the domain www.googleadservices.com.</p>

		    <p><strong>Using Browser Settings to Block Cookies</strong></p>

		    <p>FIREFOX</p>

		    <ul>
		        <li>
		            <p>Click the Menu icon and choose Preferences.</p>
		        </li>
		        <li>
		            <p>Select the Privacy tab.</p>
		        </li>
		        <li>
		            <p>Under History, after “Firefox will:” select “Use custom settings for history.”</p>
		        </li>
		        <li>
		            <p>In the list of choices that now appears, uncheck “Accept cookies”</p>
		        </li>
		        <li>
		            <p>Click the OK button</p>
		        </li>
		    </ul>
		    <p>For more detailed information, please visit:
		        <br> https://support.mozilla.org/en-US/kb/block-websites-storing-site-preferences
		    </p>

		    <p>GOOGLE CHROME</p>

		    <ul>
		        <li>
		            <p>Click on the Menu icon, and then Settings.</p>
		        </li>
		        <li>
		            <p>Click “Show advanced settings” at the very bottom of the page.</p>
		        </li>
		        <li>
		            <p>In the Privacy section click on “Content settings”.</p>
		        </li>
		        <li>
		            <p>In the Cookies section, select “Block sites from setting any data”.</p>
		        </li>
		        <li>
		            <p>Click on the “Done” button.</p>
		        </li>
		    </ul>
		    <p>For detailed information, please visit:
		        <br> https://support.google.com/chrome/answer/95647
		    </p>

		    <p>INTERNET EXPLORER</p>

		    <ul>
		        <li>
		            <p>Under the Tools menu item, click “Internet Options” or if the menu bar is not displayed on the menu icon, select “Internet Options”.</p>
		        </li>
		        <li>
		            <p>Click the Privacy tab</p>
		        </li>
		        <li>
		            <p>By using the slider you can choose between several levels of cookie processing. If the regulator is at the top, all cookies are blocked; it is at the bottom, all are approved.</p>
		        </li>
		        <li>
		            <p>Click the OK button.</p>
		        </li>
		    </ul>
		    <p>For detailed information, please visit:
		        <br> http://windows.microsoft.com/windows7/blockenable-or-allow-cookies
		    </p>

		    <p>SAFARI</p>

		    <ul>
		        <li>
		            <p>Click Privacy in the Preferences area</p>
		        </li>
		        <li>
		            <p>In the Accept Cookies section, you can determine if and when Safari should save the cookies of websites. For more information, click the Help button (indicated by a question mark)</p>
		        </li>
		    </ul>
		    <p>For detailed information, please visit:
		        <br> https://support.apple.com/kb/PH5042?locale=en_US
		    </p>

		    <p>Third-party cookies are cookies that originate from a different provider than that of the website being visited by the user. When a user visits a website and another entity transmits cookies to that site, they are third-party cookies. Social Plugins
		        for Facebook, Twitter and Google+ are examples. The usual purpose of this is to make sharing of content on social network platforms easier.</p>

		    <p>For more details, please refer to the information pages for third parties.
		        <br> For the sake of transparency, we list all of the third parties that are associated with our above-mentioned websites and that use third-party cookies, and refer to the corresponding information pages:
		        <br> - Facebook Information: https://www.facebook.com/help/cookies/
		        <br> - Facebook Configuration: on your own personal account, in the Privacy section.
		        <br> - Twitter Information: https://support.twitter.com/articles/20170514
		        <br> - Twitter (Configuration): https://twitter.com/settings/security
		        <br> - Google and YouTube Information: http://www.google.de/intl/en/policies/technologies/cookies/
		        <br> - Google and YouTube (Configuration): http://www.google.de/intl/en/policies/technologies/managing/</p>

		    <p>Facebook Social Plugins</p>

		    <p>This website uses social plugins from the social networking site facebook.com (operated by Facebook Inc., 1601 South California Ave, Palo Alto, CA, 94304, USA). The plugins are recognizable by the presence of the Facebook logo or the phrase “Facebook
		        Social Plugin.”
		        <br> This plugin performs the following functions:</p>

		    <ul>
		        <li>Your browser establishes a direct connection to the Facebook servers.</li>
		        <li>The plugin content is transmitted from Facebook directly to your browser, and automatically integrates it into the plugin.</li>
		        <li>Facebook receives the information that you have visited this website and, if you are logged into Facebook, Facebook is able to associate your visit to the page with your Facebook account.</li>
		        <li>Your interaction with the plugin is forwarded directly from your browser to Facebook, where it is saved.</li>
		        <li>For more information about the purpose, extent and processing of your data, as well as your rights as regards this data, please see Facebook’s Data Protection Policy.</li>
		    </ul>
		    <p>The Facebook Social Plugin is disabled on this website and, as a result, no data is transmitted. To activate and use the Facebook Social Plugin, click once on the “F” or activation button. By activating the button, your data will be trans-mitted to
		        Facebook.</p>

		    <p>Google +1 Button</p>

		    <p>Questo sito utilizza "Pulsante Google +1", un social plugin del social network Google+ (Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA). This website uses the Google +1 button, a website plugin provided by the social network
		        Google+ (Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA, 94043, USA). The button is recognizable by the writing “+1” or the phrase “+1 Google.”
		        <br> This plugin performs the following functions:</p>

		    <ul>
		        <li>Your browser establishes a direct connection to the Google servers.</li>
		        <li>The plugin is loaded directly from Google into the website.</li>
		        <li>Depending on the circumstances, data such as the time the website page is called up, your IP address and other personal data are transmitted.</li>
		        <li>Your interaction with the plugin is forwarded directly from your browser to Google, where it is stored.</li>
		    </ul>
		    <p>For more information about the purpose, extent and processing of your data, as well as your rights as regards this data, please see the Google Data Protection Policy: https://developers.google.com/+/web/buttons-policy
		    <br> The Google +1 button is disabled on this website and, as a result, no data is transmitted. To activate and use the Google +1 button, click once on the “+1” or activation button. By activating the button, your data will be transmitted to Activation.</p>
		</div>
	</div>
	<div class="panel-footer-container">
		<span class="panel-footer-overlay"></span>
		<div class="panel-footer">
			<span class="logo hide-on-desktop">NOI Techpark Suedtirol/Alto Adige</span>
			<nav class="panel-menu">
				<ul>
					<li><a href="https://noi.bz.it/" target="_blank">NOI Techpark Website</a></li>
					<li><a class="link-translatable" data-link-traslation="privacy" href="<?php echo $link_en; ?>">Cookies & Privacy Policy</a></li>
					<li><a class="link-translatable" data-link-traslation="credits" href="<?php if(isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['en'])): echo $localizedLinks['credits']['en']; else: echo '#'; endif; ?>">Credits</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<span class="js-media-query-tester"></span>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
	<?php //Translations
	if($translations && !empty($translations)) : ?>
		var translations = <?php echo json_encode($translations); ?>;
	<?php endif;
	if($localizedLinks && !empty($localizedLinks)) : ?>
		var localizedLinks = <?php echo json_encode($localizedLinks); ?>;
	<?php endif;
	if($cookie_config && !empty($cookie_config)) : ?>
		var cookie_config = <?php echo json_encode($cookie_config); ?>;
	<?php endif; ?>
</script>
<?php include_once(dirname(dirname(__DIR__)).'/parts/google-tag-manager.php'); ?>
<script src='../../src/js/jquery.cookie-madeincima.js'></script>
<script src='../../src/js/utility-simple-page.js'></script>
</html>