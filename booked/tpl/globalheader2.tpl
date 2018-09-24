<!DOCTYPE html>
{*
Copyright 2011-2016 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*}
<html lang="{$HtmlLang}" dir="{$HtmlTextDirection}">
<head>
	<title>{if $TitleKey neq ''}{translate key=$TitleKey args=$TitleArgs}{else}{$Title}{/if}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$Charset}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex"/>
	{if $ShouldLogout}
		<!--meta http-equiv="REFRESH"
			  content="{$SessionTimeoutSeconds};URL={$Path}logout.php?{QueryStringKeys::REDIRECT}={$smarty.server.REQUEST_URI|urlencode}"-->
	{/if}
	<link rel="icon" type="image/png" href="../../img/logo.png" />
	<!-- JavaScript -->
	{if $UseLocalJquery}
		{jsfile src="js/jquery-2.1.1.min.js"}
		{jsfile src="js/jquery-ui-1.10.4.custom.min.js"}
		{jsfile src="bootstrap/js/bootstrap.min.js"}
		{jsfile src="js/lodash.4.6.13.min.js"}
		{jsfile src="js/moment.min.js"}
		{jsfile src="js/jquery.form-3.09.min.js"}
		{jsfile src="js/jquery.blockUI-2.66.0.min.js"}
		{if $Qtip}
			{jsfile src="js/jquery.qtip.min.js"}
		{/if}
		{if $Validator}
			{jsfile src="js/bootstrapvalidator/bootstrapValidator.min.js"}
		{/if}
		{if $InlineEdit}
			{jsfile src="js/x-editable/js/bootstrap-editable.min.js"}
			{jsfile src="js/x-editable/wysihtml5/wysihtml5.js"}
			{jsfile src="js/wysihtml5/bootstrap3-wysihtml5.all.min.js"}
		{/if}
	{else}
		<script type="text/javascript"
				src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript"
				src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript"
				src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript"
				src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
	{if $Qtip}
		<script type="text/javascript"
				src="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
	{/if}
	{if $Validator}
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	{/if}

	{if $InlineEdit}
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/inputs-ext/wysihtml5/wysihtml5.js"></script>
		{jsfile src="js/wysihtml5/bootstrap3-wysihtml5.all.min.js"}
	{/if}
	{/if}
	{if $Select2}
		{jsfile src="js/select2.min.js"}
	{/if}
	{if $Timepicker}
		{jsfile src="js/jquery.timePicker.min.js"}
	{/if}
	{jsfile src="js/jquery-ui-timepicker-addon.js"}
	{jsfile src="phpscheduleit.js"}
	<!-- End JavaScript -->

	<!-- CSS -->
	{if $UseLocalJquery}
		{cssfile src="scripts/css/smoothness/jquery-ui-1.10.4.custom.min.css"}
		{cssfile src="css/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet"}
		{cssfile src="scripts/bootstrap/css/bootstrap.css" rel="stylesheet"}
		{if $Qtip}
			{cssfile src="css/jquery.qtip.min.css" rel="stylesheet"}
		{/if}
		{if $Validator}
			{cssfile src="css/bootstrapValidator.min.css" rel="stylesheet"}
		{/if}
		{if $InlineEdit}
			{cssfile src="scripts/js/x-editable/css/bootstrap-editable.css" rel="stylesheet"}
			{cssfile src="scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"}
		{/if}
	{else}
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css"
			  type="text/css"/>
		{if $Validator}
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"
				  type="text/css"/>
		{/if}
		{if $InlineEdit}
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css"
				  type="text/css"/>
			{cssfile src="scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"}
		{/if}
	{/if}
	{if $Select2}
		{cssfile src="scripts/css/select2/select2.min.css"}
		{cssfile src="scripts/css/select2/select2-bootstrap.min.css"}
	{/if}
	{if $Timepicker}
		{cssfile src="scripts/css/timePicker.css" rel="stylesheet"}
	{/if}
	{if $Fullcalendar}
		{cssfile src="scripts/css/fullcalendar.min.css"}
		<link rel='stylesheet' type='text/css' href='scripts/css/fullcalendar.print.css' media='print'/>
		{jsfile src="js/fullcalendar.js"}
	{/if}
	{cssfile src="scripts/css/jquery-ui-timepicker-addon.css"}
	{cssfile src="booked.css"}
	{if $cssFiles neq ''}
		{assign var='CssFileList' value=','|explode:$cssFiles}
		{foreach from=$CssFileList item=cssFile}
			{cssfile src=$cssFile}
		{/foreach}
	{/if}
	{cssfile src=$CssUrl}
	{if $CssExtensionFile neq ''}
		{cssfile src=$CssExtensionFile}
	{/if}

	{if $printCssFiles neq ''}
		{assign var='PrintCssFileList' value=','|explode:$printCssFiles}
		{foreach from=$PrintCssFileList item=cssFile}
			<link rel='stylesheet' type='text/css' href='{$Path}{$cssFile}' media='print'/>
		{/foreach}
	{/if}
	<link rel="stylesheet" href="../../../css/hamburgers.css">
	<link rel="stylesheet" type="text/css" href="../../../css/flaticon.css">
	<script src="../../../js/jquery.mmenu.all.js"></script>
	<link rel="stylesheet" href="../../../css/jquery.mmenu.all.css">
	<link rel="stylesheet" href="../../../css/styles.css">
	<script src="../../../js/classie.js"></script>
	<script src="https://use.fontawesome.com/445406f149.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- End CSS -->

	<style>
		.nav > li {
			margin-right: 0.85rem !important;
		}
		.nav > li a + div {
			top: 4.5rem;
		}
		.nav > li {
			padding-right: 0.5rem !important;
			padding-left: 0.5rem !important;
		}
		.nav > li > a {
			padding: 0 !important;
		}
		.nav > li.donate-link {
			margin-right: 1.9rem !important;
		}
		.nav > li:last-child {
			margin-right: 1.9rem !important;
		}
		@media only screen and (min-width: 1200px) {
			.nav > li.donate-link {
				margin-right: 0 !important;
			}
			.nav > li:last-child {
				margin-right: 0 !important;
				padding-right: 0 !important;
			}
		}
		header {
			width: 100%;
		}
		@media only screen and (min-width: 893px) {
			.mobile-display {
				display: none !important;
			}
		}
	</style>

</head>
<body id="my-wrapper">

<div id="main" class="container-fluid section-white" style="background-color: #878787">

{if $HideNavBar == false}

	<header class="Fixed">
	  <div class="social-container">
	    <div class="contact tablet-display">
				<a href="tel:+15738836863" style="margin-right: 0.5rem"><i class="contact-icon-small flaticon-call-answer"></i>+1 (573) 883-6863</a>
				<a href="mailto:cccbus@ccconnections.info"><i class="contact-icon-small flaticon-note"></i>cccbus@ccconnections.info</a>
	    </div>
	    <div class="social-icons">
	      <ul class="social-list">
					<li class="mobile-display">
						<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<a href="tel:+15738836863" class="contact-icon flaticon-circle"></a>
						</span>
					</li>
					<li class="mobile-display">
						<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<a href="mailto:cccbus@ccconnections.info" class="contact-icon flaticon-email"></a>
						</span>
					</li>
	        <li>
	          <span class="fa-stack">
	            <i class="fa fa-circle-thin fa-stack-2x"></i>
	            <a href="https://fb.me/ccconnec" class="social-icon flaticon-facebook-logo"></a>
	          </span>
	        </li>
	        <li>
	          <span class="fa-stack">
	            <i class="fa fa-circle-thin fa-stack-2x"></i>
	            <a href="https://twitter.com/coclconnec" class="social-icon flaticon-twitter-social-logotype"></a>
	          </span>
	        </li>
	        <li>
	          <span class="fa-stack">
	            <i class="fa fa-circle-thin fa-stack-2x"></i>
	            <a href="https://www.instagram.com/ccconnec/" class="social-icon flaticon-instagram-social-network-logo-of-photo-camera"></a>
	          </span>
	        </li>
	        <li>
	          <span class="fa-stack">
	            <i class="fa fa-circle-thin fa-stack-2x" style="top: -2.6 !important"></i>
	            <a href="https://www.snapchat.com/add/ccconnec" class="fa fa-snapchat" aria-hidden="true"></a>
	          </span>
	        </li>
	      </ul>
	    </div>
	  </div>
	  <nav>
	    <div class="brand">
	      <img src="../../../img/logo.png" class="logo" alt="logo"/>
	      <h3 class="name"><a href="https://www.ccconnections.info">Community Clothing Connections</a></h3>
	    </div>
			<ul class="nav">
				{if $HideNavBar == false}
				{if $LoggedIn}
				<li class="tablet-display">
					<a href="{$Path}{Pages::DASHBOARD}">{translate key="Dashboard"}</a>
				</li>
				<li class="tablet-display main-links">
					<a>{translate key="MyAccount"}</a>
					<div>
						<ul>
							<li><a href="{$Path}{Pages::PROFILE}">{translate key="Profile"}</a></li>
							<li><a href="{$Path}{Pages::PASSWORD}">{translate key="ChangePassword"}</a></li>
						</ul>
					</div>
				</li>
				<li class="tablet-display main-links">
					<a>{translate key="Schedule"}</a>
					<div>
						<ul>
							<li><a href="{$Path}{Pages::SCHEDULE}">{translate key="Bookings"}</a></li>
							<li><a href="{$Path}{Pages::MY_CALENDAR}">{translate key="MyCalendar"}</a></li>
							<li><a href="{$Path}{Pages::OPENINGS}">{translate key="FindATime"}</a></li>
						</ul>
					</div>
				</li>
				{/if}
				{if $ShowScheduleLink}
				<li class="tablet-display">
					<a href="view-schedule.php">{translate key='ViewSchedule'}</a>
				</li>
				{/if}
				<li class="main-links">
					<a>{translate key="Help"}</a>
					<div>
						<ul>
							<li><a href="{$Path}help.php">{translate key=Help}</a></li>
							{if $CanViewAdmin}
							<li><a href="{$Path}help.php?ht=admin">{translate key=Administration}</a></li>
							{/if}
							<li><a href="{$Path}help.php?ht=about">{translate key=About}</a></li>
						</ul>
					</div>
				</li>
				{if $LoggedIn}
				<li class="main-links"><a href="{$Path}logout.php">{translate key="SignOut"}</a></li>
				{else}
				<li class="main-links"><a href="{$Path}index.php">{translate key="LogIn"}</a></li>
				{/if}
				{/if}
				<li>
					<button id="hamburger" class="hamburger hamburger--elastic" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</li>
	    </ul>
	  </nav>
	</header>

{/if}
