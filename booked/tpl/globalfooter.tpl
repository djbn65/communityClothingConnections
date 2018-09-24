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

	</div><!-- close main-->

	<footer class="events-footer">
		<div class="footer-info">
			<div class="footer-section">
				<h2><span class="special-first-letter">W</span>ho We Are</h2>
				<ul>
					<li>
						<a href="https://ccconnections.info/team">Our Team</a>
					</li>
					<li>
						<a href="https://ccconnections.info/contact">Contact Us</a>
					</li>
					<li>
						<a href="https://ccconnections.info/team#join">Join the Team</a>
					</li>
				</ul>
			</div>
			<div class="footer-section">
				<h2><span class="special-first-letter">W</span>hat We Do</h2>
				<ul>
					<li>
						<a href="https://ccconnections.info/about">About Us</a>
					</li>
					<li>
						<a href="https://ccconnections.info/events">Events</a>
					</li>
					<li>
						<a href="https://ccconnections.info/donate">Donations</a>
					</li>
				</ul>
			</div>
			<div class="footer-section">
				<h2><span class="special-first-letter">H</span>ow To Reach Us</h2>
				<ul>
					<li>
						<a href="tel:+15738836863">+1 (573) 883-6863</a>
					</li>
					<li>
						<a href="mailto:cccbus@ccconnections.info">cccbus@ccconnections.info</a>
					</li>
					<li>
						<a href="https://goo.gl/maps/CHoKYmuTCX72">Community Clothing Connections<br>509 East Tenth Street<br>Rolla, MO 65401</a>
					</li>
				</ul>
			</div>
			<div class="footer-section">
				<h2><span class="special-first-letter">H</span>ours</h2>
				<ul>
					<li>
						Monday-Thursday: 8AM-5PM
					</li>
					<li>
						Friday: 9AM-5PM
					</li>
					<li>
						Saturday: 8AM-12PM
					</li>
					<li>
						Sunday: CLOSED
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div> <!--END #my-wrapper-->

<nav id="my-menu">
    <ul>
			<li><a href="https://ccconnections.info/"><i class="nav-icon flaticon-home"></i>Home</a></li>
	<li class="main-links"><span><i class="nav-icon2 flaticon-web"></i>Main Links</span>
		<ul>
			<li><span><i class="nav-icon flaticon-information"></i>About</span>
				<ul>
					<li><a href="https://ccconnections.info/about.html"><i class="nav-icon2 flaticon-shop"></i>Our Business</a></li>
					<li><a href="https://ccconnections.info/history.html"><i class="nav-icon2 flaticon-clock-1"></i>History</a></li>
					<li><a href="https://ccconnections.info/impact.html"><i class="nav-icon2 flaticon-team"></i>Our Impact</a></li>
					<li><a href="https://ccconnections.info/projects.html"><i class="nav-icon2 flaticon-presentation"></i>Projects</a></li>
					<li><a href="https://ccconnections.info/credits.html"><i class="nav-icon2 flaticon-meeting"></i>Credits</a></li>
				</ul>
			</li>
			<li><a href="https://ccconnections.info/team.html"><i class="nav-icon flaticon-group"></i>Team</a></li>
			<li><a href="https://ccconnections.info/events.html"><i class="nav-icon flaticon-calendar-icon"></i>Events</a></li>
			<li><span><i class="nav-icon flaticon-hand-graving-smartphone"></i>Contact</span>
				<ul>
					<li><a href="https://ccconnections.info/faq.html"><i class="nav-icon2 flaticon-customer-service"></i>Questions</a></li>
					<li><a href="https://ccconnections.info/contact.html"><i class="nav-icon2 flaticon-responsive"></i>Call/Email</a></li>
				</ul>
			</li>
			<li><span><i class="nav-icon flaticon-make-a-donation"></i>Contribute</span>
				<ul>
					<li><a href="https://ccconnections.info/donate.html"><i class="nav-icon2 flaticon-donate"></i>Donate</a></li>
					<li><a href="https://ccconnections.info/booked"><i class="nav-icon2 flaticon-edit-document"></i>Event Signups</a></li>
				</ul>
			</li>
		</ul>
	</li>
	{if $HideNavBar == false}
	{if $LoggedIn}
	<li class="main-links mobile-display"><a href="{$Path}{Pages::DASHBOARD}"><i class="nav-icon2 flaticon-speedometer"></i>{translate key="Dashboard"}</a></li>
	<li class="main-links mobile-display"><span><i class="nav-icon2 flaticon-contract"></i>{translate key="MyAccount"}</span>
		<ul>
			<li><a href="{$Path}{Pages::PROFILE}"><i class="nav-icon2 flaticon-curriculum-vitae"></i>{translate key="Profile"}</a></li>
			<li><a href="{$Path}{Pages::PASSWORD}"><i class="nav-icon2 flaticon-padlock"></i>{translate key="ChangePassword"}</a></li>
		</ul>
	</li>
	<li class="main-links mobile-display"><span><i class="nav-icon2 flaticon-calendar"></i>{translate key="Schedule"}</span>
		<ul>
			<li><a href="{$Path}{Pages::SCHEDULE}"><i class="nav-icon2 flaticon-confirm-schedule"></i>{translate key="Bookings"}</a></li>
			<li><a href="{$Path}{Pages::MY_CALENDAR}"><i class="nav-icon2 flaticon-clock"></i>{translate key="MyCalendar"}</a></li>
			<!--<li class="menuitem"><a href="#">{translate key="Current Status"}</a></li>-->
			<li><a href="{$Path}{Pages::OPENINGS}"><i class="nav-icon2 flaticon-wall-clock"></i>{translate key="FindATime"}</a></li>
		</ul>
	</li>
	{if $CanViewAdmin}
	<li class="main-links"><span>{translate key="ApplicationManagement"}</span>
		<ul>
			<li><a href="{$Path}admin/manage_reservations.php">{translate key="ManageReservations"}</a></li>
			<li><a href="{$Path}admin/manage_blackouts.php">{translate key="ManageBlackouts"}</a></li>
			<li><a href="{$Path}admin/manage_quotas.php">{translate key="ManageQuotas"}</a></li>
			<li><a href="{$Path}admin/manage_schedules.php">{translate key="ManageSchedules"}</a></li>
			<li><a href="{$Path}admin/manage_resources.php">{translate key="ManageResources"}</a></li>
			<li><a href="{$Path}admin/manage_accessories.php">{translate key="ManageAccessories"}</a></li>
			<li><a href="{$Path}admin/manage_users.php">{translate key="ManageUsers"}</a></li>
			<li><a href="{$Path}admin/manage_groups.php">{translate key="ManageGroups"}</a></li>
			<li><a href="{$Path}admin/manage_announcements.php">{translate key="ManageAnnouncements"}</a></li>
			<li><a href="{$Path}admin/manage_attributes.php">{translate key="CustomAttributes"}</a></li>
			{if $EnableConfigurationPage}
			<li><a href="{$Path}admin/manage_configuration.php">{translate key="ManageConfiguration"}</a></li>
			{/if}
			<li><a href="{$Path}admin/manage_theme.php">{translate key="LookAndFeel"}</a></li>
			<li><a href="{$Path}admin/import.php">{translate key="Import"}</a></li>
			<li><a href="{$Path}admin/server_settings.php">{translate key="ServerSettings"}</a></li>
		</ul>
	</li>
	{/if} <!--END  of CanViewAdmin-->
	{if $CanViewResponsibilities}
	<li class="main-links"><span>{translate key="Responsibilities"} </span>
		<ul>
			{if $CanViewGroupAdmin}
			<li><a href="{$Path}admin/manage_group_users.php">{translate key="ManageUsers"}</a></li>
			<li><a href="{$Path}admin/manage_group_reservations.php">{translate key=GroupReservations}</a></li>
			<li><a href="{$Path}admin/manage_admin_groups.php">{translate key="ManageGroups"}</a></li>
			{/if}
			{if $CanViewResourceAdmin || $CanViewScheduleAdmin}
			<li><a href="{$Path}admin/manage_admin_resources.php">{translate key="ManageResources"}</a></li>
			<li><a href="{$Path}admin/manage_blackouts.php">{translate key="ManageBlackouts"}</a></li>
			{/if}
			{if $CanViewResourceAdmin}
			<li><a href="{$Path}admin/manage_resource_reservations.php">{translate key=ResourceReservations}</a></li>
			{/if}
			{if $CanViewScheduleAdmin}
			<li><a href="{$Path}admin/manage_admin_schedules.php">{translate key="ManageSchedules"}</a></li>
			<li><a href="{$Path}admin/manage_schedule_reservations.php">{translate key=ScheduleReservations}</a></li>
			{/if}
			<li><a href="{$Path}admin/manage_announcements.php">{translate key="ManageAnnouncements"}</a></li>
		</ul>
	</li>
	{/if} <!--END  of CanViewResponsibilities-->
	{if $CanViewReports}
	<li class="main-links"><span>{translate key="Reports"}</span>
		<ul>
			<li><a href="{$Path}reports/{Pages::REPORTS_GENERATE}">{translate key=GenerateReport}</a></li>
			<li><a href="{$Path}reports/{Pages::REPORTS_SAVED}">{translate key=MySavedReports}</a></li>
			<li><a href="{$Path}reports/{Pages::REPORTS_COMMON}">{translate key=CommonReports}</a></li>
		</ul>
	</li>
	{/if} <!--END  of CanViewReports-->
	{/if} <!--END  of IfLoggedIn-->
	{if $ShowScheduleLink}
	<li class="main-links"><span><i class="nav-icon2 flaticon-calendar"></i>{translate key="Schedule"}</span>
		<ul>
			<li><a href="view-schedule.php"><i class="nav-icon2 flaticon-eye-outline"></i>{translate key='ViewSchedule'}</a></li>
		</ul>
	</li>
	{/if}
	<li class="main-links"><span><i class="nav-icon2 flaticon-help-button"></i>{translate key="Help"}</span>
		<ul>
			<li><a href="{$Path}help.php"><i class="nav-icon2 flaticon-customer-service"></i>{translate key=Help}</a></li>
			{if $CanViewAdmin}
			<li><a href="{$Path}help.php?ht=admin">{translate key=Administration}</a></li>
			{/if}
			<li><a href="{$Path}help.php?ht=about"><i class="nav-icon2 flaticon-information2"></i>{translate key=About}</a></li>
		</ul>
	</li>
	{if $LoggedIn}
	<li class="main-links"><a href="{$Path}logout.php"><i class="nav-icon2 flaticon-logout"></i>{translate key="SignOut"}</a></li>
	{else}
	<li class="main-links"><a href="{$Path}index.php"><i class="nav-icon2 flaticon-log-in"></i>{translate key="LogIn"}</a></li>
	{/if}
	{/if} <!--END  of HideNavBar-->
	</ul>
  </nav>
	<script>
	$(document).ready(function() {
			 $("#my-menu").mmenu({
					offCanvas: {
						position: "right"
					},
					"extensions": [
						"pagedim-black",
						"listview-huge"
					],
			 });
			 var API = $("#my-menu").data( "mmenu" );
			 var $icon = $("#hamburger");

			 $icon.click(function() {
					API.open();
			 });

			 API.bind( "open:finish", function() {
				 setTimeout(function() {
						$icon.addClass( "is-active" );
				 }, 100);
			});
			API.bind( "close:finish", function() {
				 setTimeout(function() {
						$icon.removeClass( "is-active" );
				 }, 100);
			});
		});
	 </script>

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';
	</script>

	{if !empty($GoogleAnalyticsTrackingId)}
		{literal}
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  {/literal}
			  ga('create', '{$GoogleAnalyticsTrackingId}', 'auto');
			  ga('send', 'pageview');
			</script>
	{/if}
	</body>
</html>
