<?php
/**
 * Copyright 2011-2016 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');
require_once('en_us.php');

class de_de extends en_us
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = parent::_LoadDates();

		$dates['general_date'] = 'd.m.Y';
		$dates['general_datetime'] = 'd.m.Y H:i:s';
		$dates['schedule_daily'] = 'l, d.m.Y';
		$dates['reservation_email'] = 'd.m.Y @ H:i (e)';
		$dates['res_popup'] = 'd.m.Y H:i';
		$dates['dashboard'] = 'l, d.m.Y H:i';
		$dates['period_time'] = 'H:i';
		$dates['general_date_js'] = 'dd.mm.yy';
		$dates['calendar_time'] = 'H:mm';
		$dates['calendar_dates'] = 'd.M';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = parent::_LoadStrings();

		$strings['FirstName'] = 'Vorname';
		$strings['LastName'] = 'Nachname';
		$strings['Timezone'] = 'Zeitzone';
		$strings['Edit'] = 'Bearbeiten';
		$strings['Change'] = 'Ändern';
		$strings['Rename'] = 'Umbenennen';
		$strings['Remove'] = 'Entfernen';
		$strings['Delete'] = 'Löschen';
		$strings['Update'] = 'Update';
		$strings['Cancel'] = 'Abbrechen';
		$strings['Add'] = 'Hinzufügen';
		$strings['Name'] = 'Name';
		$strings['Yes'] = 'Ja';
		$strings['No'] = 'Nein';
		$strings['FirstNameRequired'] = 'Vorname wird benötigt.';
		$strings['LastNameRequired'] = 'Nachname wird benötigt.';
		$strings['PwMustMatch'] = 'Kennwörter müssen übereinstimmen.';
		$strings['ValidEmailRequired'] = 'E-Mail-Adresse wird benötigt.';
		$strings['UniqueEmailRequired'] = 'Diese E-Mail-Adresse wird bereits verwendet.';
		$strings['UniqueUsernameRequired'] = 'Dieser Benutzername wird bereits verwendet.';
		$strings['UserNameRequired'] = 'Benutzername wird benötigt.';
		$strings['CaptchaMustMatch'] = 'Bitte die Sicherheitsabfrage korrekt beantworten.';
		$strings['Today'] = 'Heute';
		$strings['Week'] = 'Woche';
		$strings['Month'] = 'Monat';
		$strings['BackToCalendar'] = 'Zurück zum Kalender';
		$strings['BeginDate'] = 'Beginn';
		$strings['EndDate'] = 'Ende';
		$strings['Username'] = 'Benutzername';
		$strings['Password'] = 'Passwort';
		$strings['PasswordConfirmation'] = 'Passwort wiederholen';
		$strings['DefaultPage'] = 'Standard Startseite';
		$strings['MyCalendar'] = 'Mein Kalender';
		$strings['ScheduleCalendar'] = 'Terminplan Kalender';
		$strings['Registration'] = 'Registrierung';
		$strings['NoAnnouncements'] = 'Keine Ankündigungen';
		$strings['Announcements'] = 'Ankündigungen';
		$strings['NoUpcomingReservations'] = 'Sie haben keine kommenden Reservierungen.';
		$strings['UpcomingReservations'] = 'Kommende Reservierungen';
		$strings['AllNoUpcomingReservations'] = 'Es gibt keine kommenden Reservierungen in den nächsten %s Tagen';
		$strings['AllUpcomingReservations'] = 'Alle kommenden Reservierungen';
		$strings['ShowHide'] = 'Einblenden/Ausblenden';
		$strings['Error'] = 'Fehler';
		$strings['ReturnToPreviousPage'] = 'Zurück zur vorigen Seite';
		$strings['UnknownError'] = 'Unbekannter Fehler';
		$strings['InsufficientPermissionsError'] = 'Sie haben keinen Zugriff auf diese Ressource.';
		$strings['MissingReservationRessourceError'] = 'Keine Ressource ausgewählt';
		$strings['MissingReservationScheduleError'] = 'Kein Terminplan ausgewählt';
		$strings['DoesNotRepeat'] = 'Nicht wiederholend';
		$strings['Daily'] = 'Täglich';
		$strings['Weekly'] = 'Wöchentlich';
		$strings['Monthly'] = 'Monatlich';
		$strings['Yearly'] = 'Jährlich';
		$strings['RepeatPrompt'] = 'Wiederholen';
		$strings['hours'] = 'Stunden';
		$strings['days'] = 'Tage';
		$strings['weeks'] = 'Wochen';
		$strings['months'] = 'Monate';
		$strings['years'] = 'Jahre';
		$strings['day'] = 'Tag';
		$strings['week'] = 'Woche';
		$strings['month'] = 'Monat';
		$strings['year'] = 'Jahr';
		$strings['repeatDayOfMonth'] = 'Tag im Monat';
		$strings['repeatDayOfWeek'] = 'Tag in der Woche';
		$strings['RepeatUntilPrompt'] = 'bis zum';
		$strings['RepeatEveryPrompt'] = 'Alle';
		$strings['RepeatDaysPrompt'] = 'Am';
		$strings['CreateReservationHeading'] = 'Neue Reservierung';
		$strings['EditReservationHeading'] = 'Reservierung %s bearbeiten';
		$strings['ViewReservationHeading'] = 'Reservierung %s anzeigen';
		$strings['ReservationErrors'] = 'Reservierung ändern';
		$strings['Create'] = 'Anlegen';
		$strings['ThisInstance'] = 'In dieser Instanz';
		$strings['AllInstances'] = 'Alle Instanzen';
		$strings['FutureInstances'] = 'Zukünftige Instanzen';
		$strings['Print'] = 'Drucken';
		$strings['ShowHideNavigation'] = 'Navigation Einblenden/Ausblenden';
		$strings['ReferenceNumber'] = 'Referenznummer';
		$strings['Tomorrow'] = 'Morgen';
		$strings['LaterThisWeek'] = 'Später diese Woche';
		$strings['NextWeek'] = 'Nächste Woche';
		$strings['SignOut'] = 'Abmelden';
		$strings['LayoutDescription'] = 'Beginnend %s, zeige %s Tage';
		$strings['AllResources'] = 'Alle Ressourcen';
		$strings['TakeOffline'] = 'Offline gehen';
		$strings['BringOnline'] = 'Online gehen';
		$strings['AddImage'] = 'Bild hinzufügen';
		$strings['NoImage'] = 'Kein Bild zugewiesen';
		$strings['Move'] = 'Verschieben';
		$strings['AppearsOn'] = 'Erscheint im %s';
		$strings['Location'] = 'Position';
		$strings['NoLocationLabel'] = '(keine Position festgelegt)';
		$strings['Contact'] = 'Kontakt';
		$strings['NoContactLabel'] = '(keine Kontaktinformationen)';
		$strings['Description'] = 'Beschreibung';
		$strings['NoDescriptionLabel'] = '(keine Beschreibung)';
		$strings['Notes'] = 'Notizen';
		$strings['NoNotesLabel'] = '(keine Notizen)';
		$strings['NoTitleLabel'] = '(kein Titel)';
		$strings['UsageConfiguration'] = 'Reservierungskonfiguration';
		$strings['ChangeConfiguration'] = 'Konfiguration ändern';
		$strings['ResourceMinLength'] = 'Reservierung muss mindestens %s dauern';
		$strings['ResourceMinLengthNone'] = 'Es gibt keine minimale Reservierungsdauer';
		$strings['ResourceMaxLength'] = 'Reservierungen dürfen nicht länger als %s dauern';
		$strings['ResourceMaxLengthNone'] = 'Es gibt keine maximale Reservierungsdauer';
		$strings['ResourceRequiresApproval'] = 'Reservierungen müssen bestätigt werden';
		$strings['ResourceRequiresApprovalNone'] = 'Reservierungen müssen nicht bestätigt werden';
		$strings['ResourcePermissionAutoGranted'] = 'Berechtigung wird automatisch gewährt';
		$strings['ResourcePermissionNotAutoGranted'] = 'Berechtigung wird nicht automatisch gewährt';
		$strings['ResourceMinNotice'] = 'Reservierungen müssen mindestens %s vor der Startzeit getätigt werden';
		$strings['ResourceMinNoticeNone'] = 'Reservierungen können ohne Vorlaufzeit getätigt werden';
		$strings['ResourceMaxNotice'] = 'Reservierungen dürfen nicht %s vor der aktuellen Zeit enden';
		$strings['ResourceMaxNoticeNone'] = 'Reservierungen können zu jeder Zeit enden';
		$strings['ResourceBufferTime'] = 'Zwischen Reservierungen muss ein Puffer von %s liegen';
		$strings['ResourceBufferTimeNone'] = 'Es gibt keinen Puffer zwischen den Reservierungen';
		$strings['ResourceAllowMultiDay'] = 'Reservierungen können sich über mehrere Tage erstrecken';
		$strings['ResourceNotAllowMultiDay'] = 'Reservierungen dürfen sich nicht über mehrere Tage erstrecken';
		$strings['ResourceCapacity'] = 'Diese Ressource hat eine Kapazität von %s Personen';
		$strings['ResourceCapacityNone'] = 'Diese Ressource hat unlimitierte Kapazität';
		$strings['AddNewResource'] = 'Neue Ressource hinzufügen';
		$strings['AddNewUser'] = 'Neuen Benutzer hinzufügen';
		$strings['AddUser'] = 'Benutzer hinzufügen';
		$strings['InviteUsers'] = 'Benutzer einladen';
		$strings['Schedule'] = 'Terminplan';
		$strings['AddResource'] = 'Ressource hinzufügen';
		$strings['Capacity'] = 'Kapazität';
		$strings['Access'] = 'Zugriff';
		$strings['Duration'] = 'Dauer';
		$strings['Active'] = 'Aktiv';
		$strings['Inactive'] = 'Inaktiv';
		$strings['ResetPassword'] = 'Passwort zurücksetzen';
		$strings['LastLogin'] = 'Letzter Login';
		$strings['Search'] = 'Suchen';
		$strings['ResourcePermissions'] = 'Ressourcenberechtigungen';
		$strings['Reservations'] = 'Reservierungen';
		$strings['Groups'] = 'Gruppen';
		$strings['Users'] = 'Benutzer';
		$strings['AllUsers'] = 'Alle Benutzer';
		$strings['AllGroups'] = 'Alle Gruppen';
		$strings['AllSchedules'] = 'Alle Terminpläne';
		$strings['UsernameOrEmail'] = 'Benutzername oder E-Mail';
		$strings['Members'] = 'Mitglieder';
		$strings['QuickSlotCreation'] = 'Erzeuge Zeitfenster alle %s Minuten zwischen %s und %s';
		$strings['ApplyUpdatesTo'] = 'Updates anwenden';
		$strings['CancelParticipation'] = 'Teilnahme beenden';
		$strings['Attending'] = 'Teilnahme';
		$strings['QuotaConfiguration'] = 'Zeitkontingente im Terminplan %s für Ressource %s und Benutzer in %s sind limitiert auf %s %s pro %s';
		$strings['QuotaEnforcement'] = '%s %s erzwungen';
		$strings['reservations'] = 'Reservierungen';
		$strings['reservation'] = 'Reservierung';
		$strings['ChangeCalendar'] = 'Kalender ändern';
		$strings['AddQuota'] = 'Zeitkontingent hinzufügen';
		$strings['FindUser'] = 'Benutzer finden';
		$strings['Created'] = 'Erzeugt';
		$strings['LastModified'] = 'Zuletzt geändert';
		$strings['GroupName'] = 'Gruppen-Name';
		$strings['GroupMembers'] = 'Gruppen-Mitglieder';
		$strings['GroupRoles'] = 'Gruppen-Rollen';
		$strings['GroupAdmin'] = 'Gruppen-Administrator';
		$strings['Actions'] = 'Aktionen';
		$strings['CurrentPassword'] = 'Aktuelles Passwort';
		$strings['NewPassword'] = 'Neues Passwort';
		$strings['InvalidPassword'] = 'Das Passwort ist falsch';
		$strings['PasswordChangedSuccessfully'] = 'Das Passwort wurde geändert';
		$strings['SignedInAs'] = 'Angemeldet als';
		$strings['NotSignedIn'] = 'Sie sind nicht angemeldet';
		$strings['ReservationTitle'] = 'Titel der Reservierung';
		$strings['ReservationDescription'] = 'Beschreibung der Reservierung';
		$strings['ResourceList'] = 'Zu reservierende Ressourcen';
		$strings['Accessories'] = 'Zubehör';
		$strings['InvitationList'] = 'Eingeladene';
		$strings['AccessoryName'] = 'Zubehör Name';
		$strings['QuantityAvailable'] = 'Verfügbare Menge';
		$strings['Resources'] = 'Ressourcen';
		$strings['Participants'] = 'Teilnehmer';
		$strings['User'] = 'Benutzer';
		$strings['Resource'] = 'Ressource';
		$strings['Status'] = 'Status';
		$strings['Approve'] = 'Freigeben';
		$strings['Page'] = 'Seite';
		$strings['Rows'] = 'Zeilen';
		$strings['Unlimited'] = 'Unlimitiert';
		$strings['Email'] = 'E-Mail';
		$strings['EmailAddress'] = 'E-Mail-Adresse';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Organisation';
		$strings['Position'] = 'Position';
		$strings['Language'] = 'Sprache';
		$strings['Permissions'] = 'Berechtigungen';
		$strings['Reset'] = 'Zurücksetzen';
		$strings['FindGroup'] = 'Gruppe finden';
		$strings['Manage'] = 'Verwalten';
		$strings['None'] = 'Nichts';
		$strings['AddToOutlook'] = 'Zum Kalender hinzufügen';
		$strings['Done'] = 'Fertig';
		$strings['RememberMe'] = 'Angemeldet bleiben';
		$strings['FirstTimeUser?'] = 'Neuer Benutzer?';
		$strings['CreateAnAccount'] = 'Benutzerkonto hinzufügen';
		$strings['ViewSchedule'] = 'Terminplan ansehen';
		$strings['ForgotMyPassword'] = 'Passwort vergessen';
		$strings['YouWillBeEmailedANewPassword'] = 'Sie bekommen ein neues, zufälliges Passwort zugeschickt';
		$strings['Close'] = 'Schließen';
		$strings['ExportToCSV'] = 'Export als CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Arbeite...';
		$strings['Login'] = 'Benutzerkonto';
		$strings['AdditionalInformation'] = 'Zusätzliche Informationen';
		$strings['AllFieldsAreRequired'] = 'Alle Felder werden benötigt';
		$strings['Optional'] = 'optional';
		$strings['YourProfileWasUpdated'] = 'Ihre persönlichen Daten wurden aktualisiert';
		$strings['YourSettingsWereUpdated'] = 'Ihre Einstellungen wurden aktualisiert';
		$strings['Register'] = 'Registrieren';
		$strings['SecurityCode'] = 'Sicherheitscode';
		$strings['ReservationCreatedPreference'] = 'Wenn ich eine Reservierung tätige oder eine Reservierung in meinem Auftrag getätigt wird';
		$strings['ReservationUpdatedPreference'] = 'Wenn ich eine Reservierung aktualisiere oder eine Reservierung in meinem Auftrag aktualisiert wird';
		$strings['ReservationDeletedPreference'] = 'Wenn ich eine Reservierung lösche oder eine Reservierung in meinem Auftrag gelöscht wird';
		$strings['ReservationApprovalPreference'] = 'Wenn meine bevorstehende Reservierung freigegeben wird';
		$strings['PreferenceSendEmail'] = 'E-Mail senden';
		$strings['PreferenceNoEmail'] = 'Mich nicht informieren';
		$strings['ReservationCreated'] = 'Ihre Reservierung wurde erfolgreich angelegt!';
		$strings['ReservationUpdated'] = 'Ihre Reservierung wurde erfolgreich aktualisiert!';
		$strings['ReservationRemoved'] = 'Ihre Reservierung wurde erfolgreich gelöscht';
		$strings['ReservationRequiresApproval'] = 'Eine oder mehrere der reservierten Ressourcen erfordern eine Zustimmung vor der Verwendung. Diese Reservierung wird zurückbehalten, bis sie zugelassen ist.';
		$strings['YourReferenceNumber'] = 'Ihre Referenznummer ist %s';
		$strings['UpdatingReservation'] = 'Aktualisiere Reservierung';
		$strings['ChangeUser'] = 'Benutzer ändern';
		$strings['MoreResources'] = 'Weitere Ressourcen';
		$strings['ReservationLength'] = 'Reservierungslänge';
		$strings['ParticipantList'] = 'Teilnehmerliste';
		$strings['AddParticipants'] = 'Teilnehmer hinzufügen';
		$strings['InviteOthers'] = 'Weitere einladen';
		$strings['AddResources'] = 'Ressourcen hinzufügen';
		$strings['AddAccessories'] = 'Zubehör hinzufügen';
		$strings['Accessory'] = 'Zubehör';
		$strings['QuantityRequested'] = 'Menge angefordert';
		$strings['CreatingReservation'] = 'Lege Reservierung an';
		$strings['UpdatingReservation'] = 'Aktualisiere Reservierung';
		$strings['DeleteWarning'] = 'Diese Aktion kann nicht rückgängig gemacht werden!';
		$strings['DeleteAccessoryWarning'] = 'Beim Löschen wird dieses Zubehör auch aus sämtlichen Reservierungen gelöscht.';
		$strings['AddAccessory'] = 'Zubehör hinzufügen';
		$strings['AddBlackout'] = 'Sperrzeit hinzufügen';
		$strings['AllResourcesOn'] = 'Alle Ressourcen Ein';
		$strings['Reason'] = 'Grund';
		$strings['BlackoutShowMe'] = 'Zeige in Konflikt stehende Reservierungen';
		$strings['BlackoutDeleteConflicts'] = 'Lösche in Konflikt stehende Reservierungen';
		$strings['Filter'] = 'Filter';
		$strings['Between'] = 'Zwischen';
		$strings['CreatedBy'] = 'Erzeugt von';
		$strings['BlackoutCreated'] = 'Sperrzeit angelegt!';
		$strings['BlackoutNotCreated'] = 'Sperrzeit konnte nicht angelegt werden!';
		$strings['BlackoutUpdated'] = 'Sperrzeit aktulisiert';
		$strings['BlackoutNotUpdated'] = 'Sperrzeit konnte nicht aktualisiert werden';
		$strings['BlackoutConflicts'] = 'Sperrzeiten stehen im Konflikt zueinander';
		$strings['ReservationConflicts'] = 'Reservierungszeiten stehen im Konflikt zueinander';
		$strings['UsersInGroup'] = 'Benutzer in dieser Gruppe';
		$strings['Browse'] = 'Durchsuchen';
		$strings['DeleteGroupWarning'] = 'Beim Löschen dieser Gruppe werden alle verknüpften Berechtigungen gelöscht.  Benutzer in dieser Gruppe werden die Berechtigungen zu den Ressourcen verlieren.';
		$strings['WhatRolesApplyToThisGroup'] = 'Welche Rollen sollen der Gruppe zugewiesen werden?';
		$strings['WhoCanManageThisGroup'] = 'Wer darf diese Gruppe verwalten?';
		$strings['WhoCanManageThisSchedule'] = 'Wer darf diesen Termin verwalten?';
		$strings['AllQuotas'] = 'Alle Zeitkontingente';
		$strings['QuotaReminder'] = 'Beachte: Zeitkontingente werden basierend auf der Zeitzone des Terminplans erzwungen';
		$strings['AllReservations'] = 'Alle Reservierungen';
		$strings['PendingReservations'] = 'Anstehende Reservierungen';
		$strings['Approving'] = 'Bestätigen';
		$strings['MoveToSchedule'] = 'Zum Terminplan verschieben';
		$strings['DeleteResourceWarning'] = 'Beim Löschen dieser Ressource werden alle verknüpften Daten gelöscht, inklusive';
		$strings['DeleteResourceWarningReservations'] = 'alle in Verbindung stehenden Reservierungen';
		$strings['DeleteResourceWarningPermissions'] = 'alle zugewiesenen Berechtigungen';
		$strings['DeleteResourceWarningReassign'] = 'Bitte alles erneut hinzufügen, was nicht gelöscht werden soll';
		$strings['ScheduleLayout'] = 'Layout (Alle Zeiten %s)';
		$strings['ReservableTimeSlots'] = 'Buchbare Zeitfenster';
		$strings['BlockedTimeSlots'] = 'Geblockte Zeitfenster';
		$strings['ThisIsTheDefaultSchedule'] = 'Dies ist der Standard-Terminplan';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Der Standard-Terminplan kann nicht gelöscht werden';
		$strings['MakeDefault'] = 'Als Standard';
		$strings['BringDown'] = 'Nach Unten';
		$strings['ChangeLayout'] = 'Layout ändern';
		$strings['AddSchedule'] = 'Terminplan hinzufügen';
		$strings['StartsOn'] = 'Beginnt um';
		$strings['NumberOfDaysVisible'] = 'Anzahl der sichtbaren Tage';
		$strings['UseSameLayoutAs'] = 'Gleiches Layout verwenden wie';
		$strings['Format'] = 'Format';
		$strings['OptionalLabel'] = 'Optionales Etikett';
		$strings['LayoutInstructions'] = 'Gebe ein Zeitfenster pro Zeile ein. Zeitfenster müssen für alle 24 Stunden eines Tages vorgegeben werden, von und bis 0 Uhr.';
		$strings['AddUser'] = 'Benutzer hinzufügen';
		$strings['UserPermissionInfo'] = 'Aktueller Zugriff zur Ressource unterscheidet sich in Abhängigkeit der Benutzerrolle, der Gruppenberechtigungen oder externer Zugriffseinstellungen';
		$strings['DeleteUserWarning'] = 'Das Löschen des Benutzers führt auch zum Entfernen seiner momentanen, zukünftigen und vergangenen Reservierungen.';
		$strings['AddAnnouncement'] = 'Ankündigung hinzufügen';
		$strings['Announcement'] = 'Ankündigung';
		$strings['Priority'] = 'Priorität';
		$strings['Reservable'] = 'reservierbar';
		$strings['Unreservable'] = 'nicht reservierbar';
		$strings['Reserved'] = 'reserviert';
		$strings['MyReservation'] = 'Meine Reservierung';
		$strings['Pending'] = 'Unbestätigt';
		$strings['Past'] = 'Vergangen';
		$strings['Restricted'] = 'Beschränkt';
		$strings['ViewAll'] = 'Alle anzeigen';
		$strings['MoveResourcesAndReservations'] = 'Ressourcen und Reservierungen verschieben nach';
		$strings['TurnOffSubscription'] = 'Kalender-Abonnement abschalten';
		$strings['TurnOnSubscription'] = 'Kalender-Abonnement erlauben';
		$strings['SubscribeToCalendar'] = 'Kalender abonnieren';
		$strings['SubscriptionsAreDisabled'] = 'Das Abonnieren des Kalenders wurde vom Administrator deaktiviert';
		$strings['NoResourceAdministratorLabel'] = '(Kein Ressourcen-Administrator)';
		$strings['WhoCanManageThisResource'] = 'Wer darf diese Ressource verwalten?';
		$strings['ResourceAdministrator'] = 'Ressourcen-Administrator';
		$strings['Private'] = 'Privat';
		$strings['Accept'] = 'Akzeptieren';
		$strings['Decline'] = 'Ablehnen';
		$strings['ShowFullWeek'] = 'Ganze Woche anzeigen';
		$strings['CustomAttributes'] = 'Benutzerdefinierte Attribute';
		$strings['AddAttribute'] = 'Attribut hinzufügen';
		$strings['EditAttribute'] = 'Attribut ändern';
		$strings['DisplayLabel'] = 'Angezeigter Feldname';
		$strings['Type'] = 'Typ';
		$strings['Required'] = 'Erforderlich';
		$strings['ValidationExpression'] = 'Validierungsausdruck';
		$strings['PossibleValues'] = 'Mögliche Werte';
		$strings['SingleLineTextbox'] = 'Einzeilige Textbox';
		$strings['MultiLineTextbox'] = 'Mehrzeilige Textbox';
		$strings['Checkbox'] = 'Checkbox';
		$strings['SelectList'] = 'Auswahlliste';
		$strings['CommaSeparated'] = 'Komma separiert';
		$strings['Category'] = 'Kategorie';
		$strings['CategoryReservation'] = 'Reservierung';
		$strings['CategoryGroup'] = 'Gruppe';
		$strings['SortOrder'] = 'Sortierung';
		$strings['Title'] = 'Titel';
		$strings['AdditionalAttributes'] = 'Zusätzliche Attribute';
		$strings['True'] = 'Wahr';
		$strings['False'] = 'Falsch';
		$strings['ForgotPasswordEmailSent'] = 'Eine E-Mail zum Zurücksetzen Ihres Passworts ist an Ihre Adresse gesendet worden';
		$strings['ActivationEmailSent'] = 'Sie werden in Kürze eine Aktivierungs-E-Mail erhalten.';
		$strings['AccountActivationError'] = 'Sorry, wir können Ihr Benutzerkonto nicht aktivieren.';
		$strings['Attachments'] = 'Anhänge';
		$strings['AttachFile'] = 'Datei hinzufügen';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'Kein Termin-Administrator';
		$strings['ScheduleAdministrator'] = 'Termin-Administrator';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Reservierte Menge';
		$strings['AllAccessories'] = 'Alle Zubehörteile';
		$strings['GetReport'] = 'Bericht anfordern';
		$strings['NoResultsFound'] = 'Keine passenden Ergebnisse gefunden';
		$strings['SaveThisReport'] = 'Diesen Bericht speichern';
		$strings['ReportSaved'] = 'Bericht gespeichert!';
		$strings['EmailReport'] = 'Bericht per E-Mail';
		$strings['ReportSent'] = 'Bericht gesendet!';
		$strings['RunReport'] = 'Bericht ausführen';
		$strings['NoSavedReports'] = 'Sie haben keine Berichte gespeichert.';
		$strings['CurrentWeek'] = 'Diese Woche';
		$strings['CurrentMonth'] = 'Dieser Monat';
		$strings['AllTime'] = 'Alle Zeiträume';
		$strings['FilterBy'] = 'Filtern von';
		$strings['Select'] = 'Auswahl';
		$strings['List'] = 'Liste';
		$strings['TotalTime'] = 'Gesamtzeit';
		$strings['Count'] = 'Anzahl';
		$strings['Usage'] = 'Benutzung';
		$strings['AggregateBy'] = 'Summieren von';
		$strings['Range'] = 'Bereich';
		$strings['Choose'] = 'Auswahl';
		$strings['All'] = 'Alle';
		$strings['ViewAsChart'] = 'Darstellung als Diagramm';
		$strings['ReservedResources'] = 'Reservierte Ressourcen';
		$strings['ReservedAccessories'] = 'Reserviertes Zubehör';
		$strings['ResourceUsageTimeBooked'] = 'Ressourcen Verwendung - Gebuchte Zeit';
		$strings['ResourceUsageReservationCount'] = 'Ressourcen Verwendung - Reservierungszähler';
		$strings['Top20UsersTimeBooked'] = 'Top 20 Benutzer - Gebuchte Zeit';
		$strings['Top20UsersReservationCount'] = 'Top 20 Benutzer - Reservierungszähler';
		$strings['ConfigurationUpdated'] = 'Konfigurationsdatei wurde upgedated';
		$strings['ConfigurationUiNotEnabled'] = 'Auf diese Seite kann nicht zugegriffen werden, da $conf[\'settings\'][\'pages\'][\'enable.configuration\'] auf false gesetzt wurde oder fehlt.';
		$strings['ConfigurationFileNotWritable'] = 'Die Konfigurationsdatei ist nicht beschreibbar. Bitte überprüfen Sie die Berechtigungen dieser Datei und versuchen Sie es erneut.';
		$strings['ConfigurationUpdateHelp'] = 'Siehe den Abschnitt Konfiguration der <a target=_blank href=%s>Hilfe-Datei</a> für die Dokumentation zu diesen Einstellungen.';
		$strings['GeneralConfigSettings'] = 'Einstellungen';
		$strings['UseSameLayoutForAllDays'] = 'Verwende gleiches Layout für alle Tage';
		$strings['LayoutVariesByDay'] = 'Layout variiert jeden Tag';
		$strings['ManageReminders'] = 'Erinnerungen';
		$strings['ReminderUser'] = 'Benutzer ID';
		$strings['ReminderMessage'] = 'Nachricht';
		$strings['ReminderAddress'] = 'E-Mail-Adressen';
		$strings['ReminderSendtime'] = 'Absendezeit';
		$strings['ReminderRefNumber'] = 'Reservierungs-Referenz Nummer';
		$strings['ReminderSendtimeDate'] = 'Tag der Erinnerung';
		$strings['ReminderSendtimeTime'] = 'Zeit der Erinnerung (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Erinnerung hinzufügen';
		$strings['DeleteReminderWarning'] = 'Sind Sie sicher?';
		$strings['NoReminders'] = 'Sie haben keine kommenden Erinnerungen.';
		$strings['Reminders'] = 'Erinnerungen';
		$strings['SendReminder'] = 'Sende Erinnerung';
		$strings['minutes'] = 'Minuten';
		$strings['hours'] = 'Stunden';
		$strings['days'] = 'Tage';
		$strings['ReminderBeforeStart'] = 'vor dem Beginn';
		$strings['ReminderBeforeEnd'] = 'vor dem Ende';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS-Datei';
		$strings['ThemeUploadSuccess'] = 'Ihre Änderungen wurden gespeichert. Aktualisieren Sie die Seite, damit die Änderungen wirksam werden.';
		$strings['MakeDefaultSchedule'] = 'Mache dies zu meinem Standard-Terminplan';
		$strings['DefaultScheduleSet'] = 'Dies ist nun Ihr Standard-Terminplan';
		$strings['FlipSchedule'] = 'Terminplan-Layout umstellen';
		$strings['Next'] = 'Nächste';
		$strings['Success'] = 'Erfolgreich';
		$strings['Participant'] = 'Teilnehmer';
		$strings['ResourceFilter'] = 'Ressourcen Filter';
		$strings['ResourceGroups'] = 'Ressource Gruppe';
		$strings['AddNewGroup'] = 'Neue Gruppe hinzufügen';
		$strings['Quit'] = 'Beenden';
		$strings['AddGroup'] = 'Gruppe hinzufügen';
		$strings['StandardScheduleDisplay'] = 'Verwenden der Standardanzeige für den Terminplan';
		$strings['TallScheduleDisplay'] = 'Terminplan im Hochformat';
		$strings['WideScheduleDisplay'] = 'Terminplan im Querformat';
		$strings['CondensedWeekScheduleDisplay'] = 'Verkürzte Wochenplan-Anzeige';
		$strings['ResourceGroupHelp1'] = 'Mit Drag & Drop Ressourcengruppen reorganisieren.';
		$strings['ResourceGroupHelp2'] = ' Rechtsklick auf einen Ressourcengruppennamen für weitere Aktionen.';
		$strings['ResourceGroupHelp3'] = 'Mit Drag & Drop Ressourcen zu Gruppen hinzufügen.';
		$strings['ResourceGroupWarning'] = 'Bei Verwendung von Ressourcengruppen muss jede Ressource zumindest einer Gruppe zugeordnet werden. Nicht zugeordnete Ressourcen können nicht reserviert werden.';
		$strings['ResourceType'] = 'Ressourcentyp';
		$strings['AppliesTo'] = 'Betrifft';
		$strings['UniquePerInstance'] = 'Einzigartig pro Instanz';
		$strings['AddResourceType'] = 'Ressourcentyp hinzufügen';
		$strings['NoResourceTypeLabel'] = '(kein Ressourcentyp gesetzt)';
		$strings['ClearFilter'] = 'Filter löschen';
		$strings['MinimumCapacity'] = 'Minimale Kapazität';
		$strings['Color'] = 'Farbe';
		$strings['Available'] = 'Verfügbar';
		$strings['Unavailable'] = 'Nicht verfügbar';
		$strings['Hidden'] = 'Versteckt';
		$strings['ResourceStatus'] = 'Ressourcen-Status';
		$strings['CurrentStatus'] = 'Aktueller Status';
		$strings['AllReservationResources'] = 'Alle Reservierungs-Ressourcen';
		$strings['File'] = 'Datei';
		$strings['BulkResourceUpdate'] = 'Massenaktualisierung der Ressourcen';
		$strings['Unchanged'] = 'Unverändert';
		$strings['Common'] = 'Allgemein/gemeinsam';
		$strings['AdminOnly'] = 'Nur für Administratoren';
		$strings['AdvancedFilter'] = 'Erweiterter Filter';
		$strings['MinimumQuantity'] = 'Mindestmenge';
		$strings['MaximumQuantity'] = 'Maximalmenge';
		$strings['AddRule'] = 'Regel hinzufügen';
		$strings['Attribute'] = 'Attribut';
		$strings['RequiredValue'] = 'Erforderlicher Wert';
		$strings['ReservationCustomRuleAdd'] = 'Bei %s wird die Reservierungsfarbe';
		$strings['AddReservationColorRule'] = 'Regel für Reservierungsfarbe hinzufügen';
		$strings['LimitAttributeScope'] = 'In speziellen Fällen sammeln';
		$strings['CollectFor'] = 'Sammeln für';
		$strings['SignIn'] = 'Anmelden';
		$strings['RegisterANewAccount'] = 'Ein neues Benutzerkonto registrieren';
		$strings['Dates'] = 'Daten';
		$strings['More'] = 'Mehr';
		$strings['AllParticipants'] = 'Alle Teilnehmer';
		$strings['ResourceAvailability'] = 'Ressourcen Verfügbarkeit';
		$strings['UnavailableAllDay'] = 'Ganzer Tag nicht verfügbar';
		$strings['AvailableUntil'] = 'Verfügbar bis';
		$strings['AvailableBeginningAt'] = 'Verfügbar ab';
		$strings['AllResourceTypes'] = 'Alle Ressourcentypen';
		$strings['AllResourceStatuses'] = 'Alle Ressourcen-Statusangaben';
		$strings['AllowParticipantsToJoin'] = 'Erlaube Teilnehmern, beizutreten';
		$strings['JoinThisReservation'] = 'Dieser Reservierung hinzufügen';
		$strings['Join'] = 'Beitreten';
		$strings['YouAreAParticipant'] = 'Sie sind Teilnehmer dieser Reservierung';
		$strings['YouAreInvited'] = 'Sie sind zu dieser Reservierung eingeladen';
		$strings['YouCanJoinThisReservation'] = 'Sie können dieser Reservierung beitreten';
		$strings['Import'] = 'Importieren';
		$strings['GetTemplate'] = 'Template herunterladen';
		$strings['UserImportInstructions'] = 'Eine CSV-Datei ist erforderlich. Die Felder für Benutzername und E-Mail-Adresse müssen ausgefüllt sein. Wenn die anderen Felder frei sind, werden die Standardwerte gesetzt und das Passwort \'password\' vergeben. Das vorgegebene Template dient als Beispiel.';
		$strings['RowsImported'] = 'Zeilen importiert';
		$strings['RowsSkipped'] = 'Zeilen übersprungen';
		$strings['Columns'] = 'Zeilen';
		$strings['Reserve'] = 'Reservieren';
		$strings['AllDay'] = 'Ganzer Tag';
		$strings['Everyday'] = 'Jeden Tag';
		$strings['IncludingCompletedReservations'] = 'Inklusive Abgeschlossene Reservierungen';
		$strings['NotCountingCompletedReservations'] = 'Abgeschlossene Reservierungen werden nicht mitgezählt';
		$strings['RetrySkipConflicts'] = 'In Konflikt stehende Reservierungen werden übersprungen';
		$strings['Retry'] = 'Wiederholen';
		$strings['RemoveExistingPermissions'] = 'Bestehende Berechtigungen löschen?';
		$strings['Continue'] = 'Weiter';
		$strings['WeNeedYourEmailAddress'] = 'Sie müssen Ihre E-Mail-Adresse angeben, um die Reservierung anzulegen';
		$strings['ResourceColor'] = 'Ressourcen-Farbe';
		$strings['DateTime'] = 'Datum Zeit';
		$strings['SendAsEmail'] = 'Als E-Mail senden';
		$strings['AutoReleaseNotification'] = 'Wird automatisch freigegeben, wenn Sie sich nicht innerhalb von %s Minuten anmelden';
		$strings['RequiresCheckInNotification'] = 'Erfordert An- und Abmeldung';
		$strings['NoCheckInRequiredNotification'] = 'Erfordert keine An- und Abmeldung';
		$strings['RequiresApproval'] = 'Bestätigung erforderlich';
		$strings['CheckingIn'] = 'Melde an';
		$strings['CheckingOut'] = 'Melde ab';
		$strings['CheckIn'] = 'Anmelden';
		$strings['CheckOut'] = 'Abmelden';
		$strings['ReleasedIn'] = 'Freigabe in';
		$strings['CheckedInSuccess'] = 'Sie sind nicht angemeldet';
		$strings['CheckedOutSuccess'] = 'Sie sind abgemeldet';
		$strings['CheckInFailed'] = 'Sie konnten nicht angemeldet werden';
		$strings['CheckOutFailed'] = 'Sie konnten nicht abgemeldet werden';
		$strings['CheckInTime'] = 'Zeit der Anmeldung';
		$strings['CheckOutTime'] = 'Zeit der Abmeldung';
		$strings['OriginalEndDate'] = 'Ursprüngliches Ende';
		$strings['SpecificDates'] = 'Zeige spezielle Daten';
		$strings['Users'] = 'Benutzer';
		$strings['Guest'] = 'Gast';
		$strings['ResourceDisplayPrompt'] = 'Anzuzeigende Ressource';
		$strings['Credits'] = 'Punkte';
		$strings['AvailableCredits'] = 'Verfügbare Punkte';
		$strings['CreditUsagePerSlot'] = 'Erfordert %s Punkte pro Zeitfenster (vergünstigter Tarif)';
		$strings['PeakCreditUsagePerSlot'] = 'Erfordert %s Punkte pro Zeitfenster (Standard-Tarif)';
		$strings['CreditsRule'] = 'Hierfür sind %s Punkte notwendig, Sie haben aber nur %s Punkte';
		$strings['PeakTimes'] = 'Zeiten für den Standard-Tarif';
		$strings['AllYear'] = 'ganzjährig';
		$strings['MoreOptions'] = 'Mehr Optionen';
		$strings['UsersInGroups'] = 'Benutzer in Gruppen';
		$strings['UsersWithAccessToResources'] = 'Benutzer mit Zugriff auf Ressourcen';
		$strings['AnnouncementSubject'] = '%s hat eine Ankündigung veröffentlicht';
		$strings['AnnouncementEmailNotice'] = 'Diese Ankündigung wird den Benutzern als E-Mail zugestellt';
		$strings['Day'] = 'Tag';
		$strings['NotifyWhenAvailable'] = 'Benachrichtige mich, wenn verfügbar';
		$strings['AddingToWaitlist'] = 'Füge Sie zur Warteliste hinzu';
		$strings['WaitlistRequestAdded'] = 'Sie werden benachrichtigt, wenn diese Zeit frei wird';
		$strings['PrintQRCode'] = 'QR-Code drucken';
		$strings['FindATime'] = 'Termin finden';
		$strings['AnyResource'] = 'Irgendeine Ressource';
		$strings['ThisWeek'] = 'Diese Woche';
		$strings['Hours'] = 'Studnden';
		$strings['Minutes'] = 'Minuten';
        $strings['ImportICS'] = 'Aus ICS_Datei importieren';
        $strings['ImportQuartzy'] = 'Von Quartzy importieren';
		$strings['OnlyIcs'] = 'Nur ICS-Dateien können hochgeladen werden.';
		$strings['IcsLocationsAsResources'] = 'Positionen werden als Ressourcen importiert.';
		$strings['IcsMissingOrganizer'] = 'Für eine Buchung ohne Organisator wird der aktuelle Benutzer eingetragen.';
		$strings['IcsWarning'] = 'Reservationen werden nicht forciert, da Konflikte, Duplikate etc. möglich sind.';
        $strings['BlackoutAroundConflicts'] = 'In Konflikt stehende Reservierungen werden ausgeblendet';
		$strings['DuplicateReservation'] = 'Reservierung kopieren';
		$strings['UnavailableNow'] = 'Jetzt nicht verfügbar';
		$strings['ReserveLater'] = 'Später reservieren';
		$strings['CollectedFor'] = 'Gesammelt für';
		$strings['Back'] = 'Zurück';
		$strings['Forward'] = 'Vor';
		$strings['DateRange'] = 'Zeitspanne';
		$strings['Copy'] = 'Kopieren';
		$strings['Detect'] = 'Erkennen';
		$strings['IncludeDeleted'] = 'Inklusive gelöschte Reservierungen';
		$strings['Deleted'] = 'Gelöscht';
		$strings['BlackoutAroundConflicts'] = 'Konflikt Reservationen werden ausgeschwätzt';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Installiere Booked Scheduler (Nur mit MySQL)';
		$strings['IncorrectInstallPassword'] = 'Sorry, das Installationspasswort war falsch.';
		$strings['SetInstallPassword'] = 'Sie müssen ein Installationspasswort setzen, bevor die Installation ausgeführt werden kann.';
		$strings['InstallPasswordInstructions'] = 'In %s bitte ein %s Passwort setzen, das zufällig und schwer zu erraten ist, dann auf diese Seite zurück. <br/> Sie können %s verwenden.';
		$strings['NoUpgradeNeeded'] = 'Booked ist auf dem neuesten Stand. Es ist kein Upgrade erforderlich.';
		$strings['ProvideInstallPassword'] = 'Bitte geben Sie Ihr Installationspasswort ein.';
		$strings['InstallPasswordLocation'] = 'Dies finden Sie in %s in %s.';
		$strings['VerifyInstallSettings'] = 'Überprüfen Sie die folgenden Standardeinstellungen, bevor Sie fortfahren. Sie können die Einstellungen in %s ändern.';
		$strings['DatabaseName'] = 'Datenbank Name';
		$strings['DatabaseUser'] = 'Datenbank Benutzer';
		$strings['DatabaseHost'] = 'Datenbank Host';
		$strings['DatabaseCredentials'] = 'Sie müssen Anmeldeinformationen eines MySQL-Benutzer angeben, der Rechte zur Erstellung von Datenbanken hat. Wenn Sie keinen haben, wenden Sie sich an Ihren Datenbank-Administrator. In vielen Fällen wird root funktionieren.';
		$strings['MySQLUser'] = 'MySQL Benutzer';
		$strings['InstallOptionsWarning'] = 'Die folgenden Optionen werden wahrscheinlich nicht in einer gehosteten Umgebung funktionieren. Wenn Sie in einer gehosteten Umgebung installieren, verwenden Sie MySQL-Assistenz Werkzeuge, um diese Schritte abzuschließen.';
		$strings['CreateDatabase'] = 'Erstelle eine Datenbank';
		$strings['CreateDatabaseUser'] = 'Erstelle einen Datenbank Benutzer';
		$strings['PopulateExampleData'] = 'Importieren Sie Beispiel-Daten. Es wird ein Admin-Benutzerkonto: admin/password und ein normales Benutzerkonto: user/passwort erstellt.';
		$strings['DataWipeWarning'] = 'Achtung: Es werden alle existierenden Daten gelöscht.';
		$strings['RunInstallation'] = 'Installation starten';
		$strings['UpgradeNotice'] = 'Sie machen ein Upgrade von Version <b>%s</b> auf Version <b>%s</b>';
		$strings['RunUpgrade'] = 'Upgrade starten';
		$strings['Executing'] = 'Ausführung';
		$strings['StatementFailed'] = 'Fehler. Details:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Fehler-Code:';
		$strings['ErrorText'] = 'Fehler:';
		$strings['InstallationSuccess'] = 'Installation erfolgreich abgeschlossen!';
		$strings['RegisterAdminUser'] = 'Registrieren Sie Ihren Admin-Benutzer. Dies ist erforderlich, wenn Sie die Beispiel-Daten nicht importiert haben. Stellen Sie sicher, dass $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in Ihrer %s-Datei ist.';
		$strings['LoginWithSampleAccounts'] = 'Wenn Sie die Beispiel-Daten importiert haben, können Sie sich mit admin/password als Admin Benutzer oder mit user/password als Benutzer anmelden.';
		$strings['InstalledVersion'] = 'Sie haben jetzt die Version %s von Booked Scheduler.';
		$strings['InstallUpgradeConfig'] = 'Es wird empfohlen, dass Sie Ihre Konfigurationsdatei aktualisieren.';
		$strings['InstallationFailure'] = 'Es gab Probleme mit der Installation. Bitte korrigieren Sie sie und wiederholen Sie die Installation.';
		$strings['ConfigureApplication'] = 'Booked Scheduler konfigurieren';
		$strings['ConfigUpdateSuccess'] = 'Ihre Konfigurationsdatei ist nun auf dem neuesten Stand!';
		$strings['ConfigUpdateFailure'] = 'Wir konnten die Konfigurationsdatei nicht automatisch aktualisieren. Bitte überschreiben Sie den Inhalt der config.php mit den folgenden Werten:';
		$strings['SelectUser'] = 'Benutzer auswählen';
		$strings['InviteUsers'] = 'Benutzer einladen';
		$strings['InviteUsersLabel'] = 'Geben Sie die E-Mail-Adressen der Personen ein, die eingeladen werden sollen';
		// End Install

		// Errors
		$strings['LoginError'] = 'Benutzername oder Passwort falsch';
		$strings['ReservationFailed'] = 'Ihre Reservierung konnte nicht angelegt werden';
		$strings['MinNoticeError'] = 'Diese Reservierung benötigt eine Vorankündigung. Der früheste zu reservierende Zeitpunkt ist %s.';
		$strings['MaxNoticeError'] = 'Die Reservierung liegt zu weit in der Zukunft. Der späteste Zeitpunkt ist %s.';
		$strings['MinDurationError'] = 'Diese Reservierung muss mindestens %s dauern.';
		$strings['MaxDurationError'] = 'Diese Reservierung kann nicht länger als %s dauern.';
		$strings['ConflictingAccessoryDates'] = 'Es gibt nicht genug der folgenden Zubehörteile:';
		$strings['NoResourcePermission'] = 'Sie haben keine Berechtigung für eine oder mehrere der angefragten Ressourcen';
		$strings['ConflictingReservationDates'] = 'Es gibt in Konflikt stehende Reservierungen an folgenden Tagen:';
		$strings['StartDateBeforeEndDateRule'] = 'Der Startzeitpunkt muss vor dem Endzeitpunkt liegen';
		$strings['StartIsInPast'] = 'Der Startzeitpunkt darf nicht in der Vergangenheit liegen';
		$strings['EmailDisabled'] = 'Em-Mail-Benachrichtigungen wurden vom Administrator deaktiviert';
		$strings['ValidLayoutRequired'] = 'Zeitfenster müssen für alle 24 Stunden eines Tages vorgegeben werden, von und bis 0 Uhr.';
		$strings['CustomAttributeErrors'] = 'Es gibt Probleme mit den von Ihnen hinzugefügten Attributen:';
		$strings['CustomAttributeRequired'] = '%s ist ein Pflichtfeld';
		$strings['CustomAttributeInvalid'] = 'Der Wert für %s ist ungültig';
		$strings['AttachmentLoadingError'] = 'Sorry, es gab ein Problem beim Laden der angeforderten Datei.';
		$strings['InvalidAttachmentExtension'] = 'Sie können nur Dateien dieses Typs hochladen: %s';
		$strings['InvalidStartSlot'] = 'Die angeforderte Startzeit ist nicht gültig.';
		$strings['InvalidEndSlot'] = 'Die angeforderte Endzeit ist nicht gültig.';
		$strings['MaxParticipantsError'] = '%s ist für maximal %s Teilnehmer.';
		$strings['ReservationCriticalError'] = 'Es kam zu einem kritischer Fehler beim Speichern Ihrer Reservierung. Wenn das Problem weiterhin besteht, wenden Sie sich an Ihren Systemadministrator.';
		$strings['InvalidStartReminderTime'] = 'Ungültige Start-Erinnerungszeit.';
		$strings['InvalidEndReminderTime'] = 'Ungültige End-Erinnerungszeit.';
		$strings['QuotaExceeded'] = 'Kontingentgrenze überschritten.';
		$strings['MultiDayRule'] = '%s erlaubt keine Reservierung über Tagesgrenzen.';
		$strings['InvalidReservationData'] = 'Es gab Probleme mit Ihrer Reservierungsanfrage.';
		$strings['PasswordError'] = 'Das Passwort muss mindestens %s Buchstaben und mindestens %s Ziffern enthalten.';
		$strings['PasswordErrorRequirements'] = 'Das Passwort muss eine Kombination von mindestens %s Groß- und Kleinbuchstaben und %s Ziffern enthalten.';
		$strings['NoReservationAccess'] = 'Sie dürffen diese Reservierung nicht verändern.';
		$strings['PasswordControlledExternallyError'] = 'Ihr Passwort wird von einem externen System verwaltet und kann deshalb hier nicht aktualisiert werden.';
		$strings['AccessoryResourceRequiredErrorMessage'] = 'Zubehör %s kann nur in Zusammenhang mit Ressource %s gebucht werden';
		$strings['AccessoryMinQuantityErrorMessage'] = 'Sie müssen mindestens %s des Zubehörs %s buchen';
		$strings['AccessoryMaxQuantityErrorMessage'] = 'Sie können nicht mehr als %s des Zubehörs %s buchen';
		$strings['AccessoryResourceAssociationErrorMessage'] = 'Zubehör \'%s\' kann nicht in Zusammenhang mit den angeforderten Ressourcen gebucht werden';
		$strings['NoResources'] = 'Sie haben keine Ressourcen angegeben.';
		$strings['ParticipationNotAllowed'] = 'Sie haben keine Berechtigung, dieser Reservierung beizutreten.';
		$strings['ReservationCannotBeCheckedInTo'] = 'Die Anmeldung für diese Reservierung kann nicht ausgeführt werden vor:';
		$strings['ReservationCannotBeCheckedOutFrom'] = 'Die Abmeldung für diese Reservierung kann nicht ausgeführt werden nach:';
		$strings['InvalidEmailDomain'] = 'Die Domain dieser E-Mail-Adresse ist nicht erlaubt';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Reservierung anlegen';
		$strings['EditReservation'] = 'Reservierung bearbeiten';
		$strings['LogIn'] = 'Anmelden';
		$strings['ManageReservations'] = 'Reservierungen';
		$strings['AwaitingActivation'] = 'Erwarte Aktivierung';
		$strings['PendingApproval'] = 'Bestätigung steht aus';
		$strings['ManageSchedules'] = 'Terminpläne';
		$strings['ManageResources'] = 'Ressourcen';
		$strings['ManageAccessories'] = 'Zubehör';
		$strings['ManageUsers'] = 'Benutzer';
		$strings['ManageGroups'] = 'Gruppen';
		$strings['ManageQuotas'] = 'Zeitkontingente';
		$strings['ManageBlackouts'] = 'Sperrzeiten verwalten';
		$strings['MyDashboard'] = 'Meine Übersicht';
		$strings['ServerSettings'] = 'Server Einstellungen';
		$strings['Dashboard'] = 'Übersicht';
		$strings['Help'] = 'Hilfe';
		$strings['Administration'] = 'Administration';
		$strings['About'] = 'Über';
		$strings['Bookings'] = 'Buchungen';
		$strings['Schedule'] = 'Terminplan';
		$strings['Account'] = 'Benutzerkonto';
		$strings['EditProfile'] = 'Meine persönlichen Daten bearbeiten';
		$strings['FindAnOpening'] = 'Einen Anfang finden';
		$strings['OpenInvitations'] = 'Offene Einladungen';
		$strings['MyCalendar'] = 'Mein Kalender';
		$strings['ResourceCalendar'] = 'Ressourcen Kalender';
		$strings['Reservation'] = 'Neue Reservierung';
		$strings['Install'] = 'Installation';
		$strings['ChangePassword'] = 'Passwort ändern';
		$strings['MyAccount'] = 'Mein Benutzerkonto';
		$strings['Profile'] = 'Persönliche Daten';
		$strings['ApplicationManagement'] = 'Anwendungsverwaltung';
		$strings['ForgotPassword'] = 'Passwort vergessen';
		$strings['NotificationPreferences'] = 'Benachrichtigungseinstellungen';
		$strings['ManageAnnouncements'] = 'Ankündigungen';
		$strings['Responsibilities'] = 'Zuständigkeiten';
		$strings['GroupReservations'] = 'Gruppenreservierungen';
		$strings['ResourceReservations'] = 'Ressourcen-Reservierungen';
		$strings['Customization'] = 'Anpassungen';
		$strings['Attributes'] = 'Attribute';
		$strings['AccountActivation'] = 'Benutzerkonto aktivieren';
		$strings['ScheduleReservations'] = 'Reservierungsplanung';
		$strings['Reports'] = 'Berichte';
		$strings['GenerateReport'] = 'Neuen Bericht erstellen';
		$strings['MySavedReports'] = 'Meine gespeicherten Berichte';
		$strings['CommonReports'] = 'Standard-Berichte';
		$strings['ViewDay'] = 'Zeige Tag';
		$strings['Group'] = 'Gruppe';
		$strings['ManageConfiguration'] = 'Programm-Konfiguration';
		$strings['LookAndFeel'] = 'Logo und CSS-Änderung';
		$strings['ManageResourceGroups'] = 'Ressourcen-Gruppen';
		$strings['ManageResourceTypes'] = 'Ressourcen-Typen';
		$strings['ManageResourceStatus'] = 'Ressourcen-Statusangaben';
		$strings['ReservationColors'] = 'Reservierungsfarben';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'S';
		$strings['DayMondaySingle'] = 'M';
		$strings['DayTuesdaySingle'] = 'D';
		$strings['DayWednesdaySingle'] = 'M';
		$strings['DayThursdaySingle'] = 'D';
		$strings['DayFridaySingle'] = 'F';
		$strings['DaySaturdaySingle'] = 'S';

		$strings['DaySundayAbbr'] = 'So';
		$strings['DayMondayAbbr'] = 'Mo';
		$strings['DayTuesdayAbbr'] = 'Di';
		$strings['DayWednesdayAbbr'] = 'Mi';
		$strings['DayThursdayAbbr'] = 'Do';
		$strings['DayFridayAbbr'] = 'Fr';
		$strings['DaySaturdayAbbr'] = 'Sa';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Ihre Reservierung wurde genehmigt';
		$strings['ReservationCreatedSubject'] = 'Ihre Reservierung wurde angelegt';
		$strings['ReservationUpdatedSubject'] = 'Ihre Reservierung wurde aktualisiert';
		$strings['ReservationDeletedSubject'] = 'Ihre Reservierung wurde gelöscht';
		$strings['ReservationCreatedAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde angelegt';
		$strings['ReservationUpdatedAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde aktualisiert';
		$strings['ReservationDeleteAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde gelöscht';
		$strings['ReservationApprovalAdminSubject'] = 'Benachrichtigung: Eine Reservierung erfordert Ihre Bestätigung';
		$strings['ParticipantAddedSubject'] = 'Reservierungsteilnahme';
		$strings['ParticipantDeletedSubject'] = 'Reservierung gelöscht';
		$strings['InviteeAddedSubject'] = 'Reservierungseinladung';
		$strings['ResetPassword'] = 'Anfrage zum Zurücksetzen des Passworts';
		$strings['ActivateYourAccount'] = 'Bitte aktivieren Sie Ihr Benutzerkonto';
		$strings['ReportSubject'] = 'Ihr angeforderter Bericht (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Ihre Reservierung für %s beginnt bald';
		$strings['ReservationEndingSoonSubject'] = 'Ihre Reservierung für %s endet bald';
		$strings['UserAdded'] = 'Ein neuer Benutzer wurde hinzugefügt';
		$strings['UserDeleted'] = 'Das Benutzerkonto %s wurde von %s gelöscht';
		$strings['GuestAccountCreatedSubject'] = 'Ihre Benutzer-Details';
		$strings['InviteUserSubject'] = '%s hat Sie zu %s eingeladen';

		$strings['ReservationApprovedSubjectWithResource'] = 'Reservierung für %s wurde bestätigt';
		$strings['ReservationCreatedSubjectWithResource'] = 'Reservierung angelegt für %s';
		$strings['ReservationUpdatedSubjectWithResource'] = 'Reservierung aktualisiert für %s';
		$strings['ReservationDeletedSubjectWithResource'] = 'Reservierung gelöscht für %s';
		$strings['ReservationCreatedAdminSubjectWithResource'] = 'Benachrichtigung: Reservierung für %s angelegt';
		$strings['ReservationUpdatedAdminSubjectWithResource'] = 'Benachrichtigung: Reservierung für %s aktualisiert';
		$strings['ReservationDeleteAdminSubjectWithResource'] = 'Benachrichtigung: Reservierung für %s gelöscht';
		$strings['ReservationApprovalAdminSubjectWithResource'] = 'Benachrichtigung: Reservierung für %s erfordert Ihre Bestätigung';
		$strings['ParticipantAddedSubjectWithResource'] = '%s hat Sie zu einer Reservierung für %s hinzugefügt';
		$strings['ParticipantDeletedSubjectWithResource'] = '%s hat eine Reservierung für %s gelöscht';
		$strings['InviteeAddedSubjectWithResource'] = '%s hat Sie zu einer Reservierung für %s eingeladen';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = parent::_LoadDays();

		/***
		 * DAY NAMES
		 * All of these arrays MUST start with Sunday as the first element
		 * and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
		// The three letter abbreviation
		$days['abbr'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
		// The two letter abbreviation
		$days['two'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
		// The one letter abbreviation
		$days['letter'] = array('S', 'M', 'D', 'M', 'D', 'F', 'S');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = parent::_LoadMonths();

		/***
		 * MONTH NAMES
		 * All of these arrays MUST start with January as the first element
		 * and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
		// The three letter month name
		$months['abbr'] = array('Jan', 'Feb', 'Mrz', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'de';
	}
}