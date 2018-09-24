<?php /* Smarty version Smarty-3.1.16, created on 2017-06-03 00:44:25
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lang/en_us/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142184967759323ea9883630-41082695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8992ba70da30ba9f01f587f9ad7ee8606230132b' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lang/en_us/help.tpl',
      1 => 1487738507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142184967759323ea9883630-41082695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59323ea9b8e268_25616401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59323ea9b8e268_25616401')) {function content_59323ea9b8e268_25616401($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1 style="margin-top: 8rem">Booked Scheduler Help</h1>

<div id="help">
    <h2>Registration</h2>

    <p>
        Registration is required in order to use Booked Scheduler if you administrator has enabled it. After your
        account
        has been registered
        you will be able to log in and access any resources that you have permission to.
    </p>

    <h2>Booking</h2>

    <p>
        Under the Schedule menu item you will find the Booking item. This will show you the available, reserved and
        blocked slots on the schedule and allow you to book
        resources that you have permission to.
    </p>

    <h3>Express</h3>

    <p>
        On the Bookings page, find the resource, date and time you'd like to book. Clicking on the time slot will allow
        you change the details of the reservation. Clicking the
        Create button will check availability, book the reservation and send out any emails. You will be given a
        reference number to use for reservation follow-up.
    </p>

    <p>Any changes made to a reservation will not take effect until you save the reservation.</p>

    <p>Only Application Administrators can create reservations in the past.</p>

    <h3>Find A Time</h3>
    <p>
        Under Schedule there is an option to Find A Time. This gives you the ability to search for any available slot
        that meets your criteria.
    </p>

    <h3>Multiple Resources</h3>

    <p>You can book all resources that you have permission as part of a single reservation. To add more resources to
        your reservation, click the More Resources link, displayed next to the name of the primary resource you are
        reserving. You will then able to add more resources by selecting them and clicking the Done button.</p>

    <p>To remove additional resources from your reservation, click the More Resources link, deselect the resources you
        want to remove, and click the Done button.</p>

    <p>Additional resources will be subject to the same rules as primary resources. For example, this means that if you
        attempt to create a 2 hour reservation with Resource 1, which has a maximum length of 3 hours and with Resource
        2, which
        has a maximum length of 1 hour, your reservation will be denied.</p>

    <p>You can view the configuration details of a resource by hovering over the resource name.</p>

    <h3>Recurring Dates</h3>

    <p>A reservation can be configured to recur a number of different ways. For all repeat options the Until date is
        inclusive.</p>

    <p>The repeat options allow for flexible recurrence possibilities. For example: Repeat Daily every 2 days will
        create a reservation every other day for your specified time. Repeat Weekly, every 1 week on Monday, Wednesday,
        Friday will create a reservation on each of those days every week at your specified time. If you were creating a
        reservation on 2011-01-15, repeating Monthly, every 3 months on the day of month would create a reservation
        every third month on the 15th. Since 2011-01-15 is the third Saturday of January, the same example with the day
        of week selected would repeat every third month on the third Saturday of that month.</p>

    <h3>Additional Participants</h3>

    <p>You can either Add Participants or Invite Others when booking a reservation. Adding someone will include them on
        the reservation and will not send an invitation.
        The added user will receive an email. Inviting a user will send an invitation email and give the user an option
        to Accept or Decline the invitation. Accepting an
        invitation adds the user to the participants list. Declining an invitation removes the user from the invitees
        list.
    </p>

    <p>
        The total number of participants is limited by the resource's participant capacity.
    </p>

    <h3>Accessories</h3>

    <p>Accessories can be thought of as objects used during a reservation. Examples may be projectors or chairs. To add
        accessories to your reservation, click the Add link to the right of the Accessories title. From there you will
        be able to select a quantity for each of the available accessories. The quantity available during your
        reservation time will depend on how many accessories are already reserved.</p>

    <h3>Booking on behalf of others</h3>

    <p>Application Administrators and Group Administrators can book reservations on behalf of other users by clicking
        the Change link to the right of the user's name.</p>

    <p>Application Administrators and Group Administrators can also modify and delete reservations owned by other
        users.</p>

    <h2>Updating a Reservation</h2>

    <p>You can update any reservation that you have created or that was created on your behalf.</p>

    <h3>Updating Specific Instances From a Series</h3>

    <p>
        If a reservation is set up to repeat, then a series is created. After you make changes and Update the
        reservation, you will be asked which instances of the series you want to apply the changes to. You can
        apply your changes to the instance that you are viewing (Only This Instance) and no other instances will be
        changed.
        You can update All Instances to apply the change to every reservation instance that has not yet occurred. You
        can also apply the change only to Future Instances, which will update all reservation instances including and
        after the instance you are currently viewing.
    </p>

    <p>Only Application Administrators can update reservations in the past.</p>

    <h2>Deleting a Reservation</h2>

    <p>Deleting a reservation completely removes it from the schedule. It will no longer be visible anywhere in
        Booked Scheduler</p>

    <h3>Deleting Specific Instances From a Series</h3>

    <p>Similar to updating a reservation, when deleting you can select which instances you want to delete.</p>

    <p>Only Application Administrators can delete reservations in the past.</p>

    <h2>Adding a Reservation to Calendar (Outlook&reg;, iCal, Mozilla Lightning, Evolution)</h2>

    <p>When viewing or updating a reservation you will see a button to Add to Outlook. If Outlook is installed on your
        computer then you should be asked to add the meeting. If it is not installed you will be prompted to download an
        .ics file. This is a standard calendar format. You can use this file to add the reservation to any application
        that supports the iCalendar file format.</p>

    <h2>Subscribing to Calendars</h2>

    <p>Calendars can be published for Schedules, Resources and Users. For this feature to work, the administrator must
        have
        configured a subscription key in the config file. To enable Schedule and Resource level calendar
        subscriptions, simply turn subscriptions on when managing the Schedule or Resource. To turn on personal calendar
        subscriptions, open Schedule -> My Calendar. On the right side of the page you will find a link to Allow or Turn
        Off
        calendar subscriptions.
    </p>

    <p> To subscribe to a Schedule calendar, open Schedule -> Resource Calendar and select the schedule you want. On the
        right side of the page, you will find a link to subscribe to the current calendar. Subscribing the a Resource
        calendar follows the same steps. To subscribe to your personal calendar, open Scheudle -> My Calendar. On the
        right side of the page, you will find a link to subscribe to the current calendar.</p>

    <h3>Calendar client (Outlook&reg;, iCal, Mozilla Lightning, Evolution)</h3>

    <p>In most cases, simply clicking the Subscribe to this Calendar link will automatically set up the subscription in
        your calendar Client. For Outlook, if it does not automatically add, open the Calendar view, then right click My
        Calendars and choose
        Add Calendar -> From Internet. Paste in the URL printed under the Subscribe to this Calendar link in
        Booked Scheduler.</p>

    <h3>Google&reg; Calendar</h3>

    <p>Open Google Calendar settings. Click the Calendars tab. Click Browse interesting calendars. Click add by URL.
        Paste
        in the URL printed under the Subscribe to this Calendar link in Booked Scheduler.</p>

    <h2>Quotas</h2>

    <p>Administrators have the ability to configure quota rules based on a variety of criteria. If your reservation
        would violate any quota, you will be notified and the reservation will be denied.</p>

    <h2>Waiting For Availability</h2>

    <p>If a time is not available you can sign up to be notified if it becomes available. This option will be shown
        after a reservation attempt is made.</p>

    <h2>Reservation Tablet View</h2>

    <p>Booked provides a tablet-friendly view of a resource's current availability. To launch this view,
        open <?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/resource-display.php then choose the resource to display. From this view users can view the
        current availability, check in to their reservation, and book new reservations.</p>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
