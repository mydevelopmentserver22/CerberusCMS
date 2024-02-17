<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Oildale and SouthGate In Southern California
 + - Company			 : CerberusCMS, Free and Open Source Software
 + - Company Address		 : Oildale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS2@Proton.me
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()    ()  ()  ()
 +  ()  ()() () () -
 +  ------------------------------
 +  Installation Application Module
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Architect => MySQL => MySQL_Generator.php
 + - This File, Version		 : 0.7.2
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Extensible-Markup-Language		   :: Version Numbers: 1, 1.1
 + - Compatibility		 : Hyper-Text-Markup-Language		   :: Version Numbers: 1, 2, 3, 4, 5
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + - Compatibility		 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, January 31st of 2024
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	 - Nyx -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|4|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 0.8 - Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 4,325
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Cerberus Content Management System :: Architect Installation :: MyS.Q.L. Structure Generator
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Error Handling Systems
 +
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Inclusion of All Internal Configuration Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Configuration :: Global System Configuration Modules
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global System Configuration File Exists, Include It
 ============================================================================================================
*/

	include_once "../../System/Configuration/Global_Configuration.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Local Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Date, Time and Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE										= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION								= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS									= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global :: Date, Time and Referrer :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure  :: Local Server :: Variables :: Date :: Standard
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD									= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL								= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_SHORT								= date("y");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Month
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL								= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT							= date("n");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL							= date("d");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Year :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_FULL								= date("Y-m-d");
$_GLOBAL_LOCAL_SERVER_DATE_TIME_NUMERICAL_FULL								= date("Y-m-d-g-i-s");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS									= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS									= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS							= date("g-i-s");

/*
 ============================================================================================================
 +
 + Remote Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Remote Server Connection
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS										= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME										= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT										= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER											= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 + Local Server Protocol Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Connection Information Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE									= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS										= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME										= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE										= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL										= $_SERVER['SERVER_PROTOCOL'];

/*
 ============================================================================================================
 + Local Server Connection Request Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD									= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME									= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT								= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING									= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT									= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT									= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET								= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING								= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING								= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE								= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE								= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST										= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT									= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 + Date Hashing Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_MD5										= md5($_GLOBAL_LOCAL_SERVER_DATE);
$_GLOBAL_LOCAL_SERVER_DATE_MD5_2									= md5($_GLOBAL_LOCAL_SERVER_DATE);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document :: Output :: Start
 +
 +
 ============================================================================================================
*/

echo ("
<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED :: My-Structured-Query-Language Database-Tables Generator</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<Link REL=\"shortcut icon\" HREF=\"../../Theme/Global/Image/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
		<HR><CENTER>[ <A HREF=\"?\" TITLE=\":: Reload The My Structured-Query-Language Database Structure Generation Form ::\">$_PROJECT_STRING_NAME_EXTENDED :: My-Structured-Query-Language :: Database Structure Generator</A> ]</CENTER><HR><BR>
");

/*
 ============================================================================================================
 +
 +
 + MySQL Generator :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + MySQL Generator :: Variables :: POST Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + MySQL Generator :: Variables :: POST Variables :: Database Server
 ============================================================================================================
*/

$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX 						= $_POST['Architect_MySQL_Generator_Database_Table_Name_Prefix'];

/*
 ============================================================================================================
 + MySQL Generator :: Variables :: POST Variables :: Credentials :: Administration Credentials
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS						= $_POST['Architect_Administrator_Electronic_Mail_Address'];
$_MySQL_Generator_POST_ADMINISTRATOR_USERNAME								= $_POST['Architect_Administrator_UserName'];
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD								= $_POST['Architect_Administrator_Password'];

/*
 ============================================================================================================
 + Password Hashing System
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH							= password_hash($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD, PASSWORD_BCRYPT);
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH_MD5							= md5($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD);

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Background
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001						= hash_file('sha256', "../../Applications/Background/Log_Administration");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002						= hash_file('sha256', "../../Applications/Background/Log_Background");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003						= hash_file('sha256', "../../Applications/Background/Log_Member");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004						= hash_file('sha256', "../../Applications/Background/Log_Visitor");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Panel
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001							= hash_file('sha256', "../../Applications/Panel/Applications_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002							= hash_file('sha256', "../../Applications/Panel/Clock.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003							= hash_file('sha256', "../../Applications/Panel/Language.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004							= hash_file('sha256', "../../Applications/Panel/Latest_Articles.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005							= hash_file('sha256', "../../Applications/Panel/Latest_Files.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006							= hash_file('sha256', "../../Applications/Panel/Latest_Members.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007							= hash_file('sha256', "../../Applications/Panel/Latest_Shouts.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008							= hash_file('sha256', "../../Applications/Panel/Location.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009							= hash_file('sha256', "../../Applications/Panel/Member_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010							= hash_file('sha256', "../../Applications/Panel/Networking.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011							= hash_file('sha256', "../../Applications/Panel/Project_Badges.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012							= hash_file('sha256', "../../Applications/Panel/RSS_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013							= hash_file('sha256', "../../Applications/Panel/Theme.panel");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Services Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001				= hash_file('sha256', "../../Applications/Services/Commander");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002				= hash_file('sha256', "../../Applications/Services/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003				= hash_file('sha256', "../../Applications/Services/Integrity");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004				= hash_file('sha256', "../../Applications/Services/Kernel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005				= hash_file('sha256', "../../Applications/Services/Loops");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006				= hash_file('sha256', "../../Applications/Services/Services");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007				= hash_file('sha256', "../../Applications/Services/Tasks");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001					= hash_file('sha256', "../../Applications/Root/Tasks");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001						= hash_file('sha256', "../../Applications/Administration/Accounts");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002						= hash_file('sha256', "../../Applications/Administration/Applications");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003						= hash_file('sha256', "../../Applications/Administration/Archive");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004						= hash_file('sha256', "../../Applications/Administration/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005						= hash_file('sha256', "../../Applications/Administration/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006						= hash_file('sha256', "../../Applications/Administration/File_Categories");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007						= hash_file('sha256', "../../Applications/Administration/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008						= hash_file('sha256', "../../Applications/Administration/GIT");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009						= hash_file('sha256', "../../Applications/Administration/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010						= hash_file('sha256', "../../Applications/Administration/Networking");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011						= hash_file('sha256', "../../Applications/Administration/Panels");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012						= hash_file('sha256', "../../Applications/Administration/PHP_Information.php");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013						= hash_file('sha256', "../../Applications/Administration/Publish");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014						= hash_file('sha256', "../../Applications/Administration/Ranks");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015						= hash_file('sha256', "../../Applications/Administration/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016						= hash_file('sha256', "../../Applications/Administration/Robot_Monitor");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017						= hash_file('sha256', "../../Applications/Administration/Settings");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018						= hash_file('sha256', "../../Applications/Administration/Submissions");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019						= hash_file('sha256', "../../Applications/Administration/Terminal");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020						= hash_file('sha256', "../../Applications/Administration/Update");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_021						= hash_file('sha256', "../../Applications/Administration/Web_Pages");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Member
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001							= hash_file('sha256', "../../Applications/Member/Account_Data");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002							= hash_file('sha256', "../../Applications/Member/Account_Recovery");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003							= hash_file('sha256', "../../Applications/Member/Active_Members");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004							= hash_file('sha256', "../../Applications/Member/All_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005							= hash_file('sha256', "../../Applications/Member/All_Shouts");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006							= hash_file('sha256', "../../Applications/Member/Application_List");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007							= hash_file('sha256', "../../Applications/Member/Articles");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008							= hash_file('sha256', "../../Applications/Member/Calculator");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009							= hash_file('sha256', "../../Applications/Member/Calendar");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010							= hash_file('sha256', "../../Applications/Member/Clock");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011							= hash_file('sha256', "../../Applications/Member/Comment");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012							= hash_file('sha256', "../../Applications/Member/Contact_Administrator");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013							= hash_file('sha256', "../../Applications/Member/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014							= hash_file('sha256', "../../Applications/Member/Documentation");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015							= hash_file('sha256', "../../Applications/Member/Download");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016							= hash_file('sha256', "../../Applications/Member/Electronic_Mail");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017							= hash_file('sha256', "../../Applications/Member/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018							= hash_file('sha256', "../../Applications/Member/Files");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019							= hash_file('sha256', "../../Applications/Member/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020							= hash_file('sha256', "../../Applications/Member/Forward");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021							= hash_file('sha256', "../../Applications/Member/Friend");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022							= hash_file('sha256', "../../Applications/Member/Language");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023							= hash_file('sha256', "../../Applications/Member/Legal");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024							= hash_file('sha256', "../../Applications/Member/Lightning_Calculate");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025							= hash_file('sha256', "../../Applications/Member/List");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026							= hash_file('sha256', "../../Applications/Member/Login");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027							= hash_file('sha256', "../../Applications/Member/Market");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028							= hash_file('sha256', "../../Applications/Member/Media_Player");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029							= hash_file('sha256', "../../Applications/Member/Member_Directory");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030							= hash_file('sha256', "../../Applications/Member/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031							= hash_file('sha256', "../../Applications/Member/News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032							= hash_file('sha256', "../../Applications/Member/Notepad");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033							= hash_file('sha256', "../../Applications/Member/Pages");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034							= hash_file('sha256', "../../Applications/Member/Profile");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035							= hash_file('sha256', "../../Applications/Member/Recommendations");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036							= hash_file('sha256', "../../Applications/Member/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037							= hash_file('sha256', "../../Applications/Member/Register");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038							= hash_file('sha256', "../../Applications/Member/Reset_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039							= hash_file('sha256', "../../Applications/Member/Search");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040							= hash_file('sha256', "../../Applications/Member/System");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041							= hash_file('sha256', "../../Applications/Member/Submit_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042							= hash_file('sha256', "../../Applications/Member/System_Message");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043							= hash_file('sha256', "../../Applications/Member/Theme");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044							= hash_file('sha256', "../../Applications/Member/Update_Account");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045							= hash_file('sha256', "../../Applications/Member/Update_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046							= hash_file('sha256', "../../Applications/Member/Upload");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047							= hash_file('sha256', "../../Applications/Member/VoIP");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048							= hash_file('sha256', "../../Applications/Member/Webspace");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Kernel :: File
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_KERNEL_FILE									= hash_file('sha256', "../../$_INTERNAL_FILE_KERNEL");

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language Tables Generation Form
 +
 +
 ============================================================================================================
*/

echo ("
		My-Structured-Query-Language :: Database Server :: Tables Generation<BR><BR>
		<FORM ACTION=\"?\" METHOD=\"POST\">
			<I>Name This Database Prefix</I>:<BR>
			[ **DO NOT** Input Any Underscores Or Symbols ]<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_MySQL_Generator_Database_Table_Name_Prefix\" VALUE=\"Cerberus\"><BR><BR>
			<I>Administration Account :: Electronic Mail Address</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_Administrator_Electronic_Mail_Address\"><BR><BR>
			<I>Administration Account :: UserName</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_Administrator_UserName\"><BR><BR>
			<I>Administration Account :: Password</I>:<BR>
			[ It Is Recommended To Use a Password Generation and Password Storage Application Such As KeePass ]<BR>
			[ When Using a Password Generator: Set Options To 50 Random Alpha-Numerical-Symbol Characters ]<BR>
				<INPUT TYPE=\"PASSWORD\" NAME=\"Architect_Administrator_Password\"><BR>
			<INPUT TYPE=\"SUBMIT\" VALUE=\"Generate S.Q.L. Database Structure\"><BR>
		</FORM>
");

if ($_MySQL_Generator_POST_ADMINISTRATOR_USERNAME) {

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language :: Generator :: Tables :: Output
 +
 +
 ============================================================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLES	= "

/* $_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX */

/* Applications :: Non-Registered Visitor and Registered Member Account */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
application_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Applications :: Root */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
application_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Applications :: Background */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
application_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Custom Applications */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Applications :: Root */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_root (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
application_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Applications :: Services */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
application_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Application Panels */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_panel_alignment CHAR(1),
application_panel_file_integrity VARCHAR(512),
application_panel_file_integrity_installation VARCHAR(512),
application_panel_file_name VARCHAR(250),
application_panel_file_permission CHAR(1),
application_panel_file_permission_camera CHAR(1),
application_panel_file_permission_microphone CHAR(1),
application_panel_file_permission_location_gps CHAR(1),
application_panel_file_permission_location_glo CHAR(1),
application_panel_file_permission_location_ip_address CHAR(1),
application_panel_file_status CHAR(1),
application_panel_file_timestamp_installation VARCHAR(100),
application_panel_file_version VARCHAR(10),
application_panel_row CHAR(5),
application_panel_title VARCHAR(250),
PRIMARY KEY (id)
);

/* Application Links */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
application_link_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Articles */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Comments */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_comments (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
comment_author VARCHAR(50),
comment_data TEXT,
comment_application_id CHAR(20),
comment_application_name VARCHAR(100),
comment_time VARCHAR(50),
PRIMARY KEY (id)
);

/* File Categories */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Files */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_files (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_author VARCHAR(50),
file_category VARCHAR(250),
file_description TEXT,
file_image VARCHAR(50),
file_location VARCHAR(50),
file_number_of_downloads CHAR(15),
file_time VARCHAR(50),
file_title VARCHAR(50),
file_uploader VARCHAR(50),
PRIMARY KEY (id)
);

/* Forum */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_description TEXT,
forum_timestamp VARCHAR(50),
forum_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Topics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
topic_access_level CHAR(1),
topic_description TEXT,
topic_forum_id CHAR(20),
topic_last_poster CHAR(20),
topic_timestamp VARCHAR(50),
topic_timestamp_last_message VARCHAR(50),
topic_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Topic Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_access_level CHAR(1),
message_author VARCHAR(50),
message_data TEXT,
message_forum_topic_id CHAR(20),
message_timestamp VARCHAR(50),
message_timestamp_last_update VARCHAR(50),
PRIMARY KEY (id)
);

/* Kernel */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_kernel (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
kernel_file_date_installation VARCHAR(100),
kernel_file_integrity VARCHAR(512),
kernel_file_name VARCHAR(100),
kernel_file_version VARCHAR(10),
PRIMARY KEY (id)
);

/* Links */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
link_author VARCHAR(50),
link_description TEXT,
link_time VARCHAR(50),
link_title VARCHAR(50),
link_url VARCHAR(250),
PRIMARY KEY (id)
);

/* Registered Member Accounts */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
member_access_level CHAR(1),
member_account_device_web_browser VARCHAR(200),
member_account_device_web_browser_authorized VARCHAR(200),
member_account_device_mac_address VARCHAR(17),
member_account_device_mac_address_authorized VARCHAR(17),
member_account_recovery_key VARCHAR(25),
member_account_recovery_pictograph_1 VARCHAR(2),
member_account_recovery_pictograph_2 VARCHAR(2),
member_account_recovery_pictograph_3 VARCHAR(2),
member_account_recovery_pictograph_4 VARCHAR(2),
member_account_recovery_pictograph_5 VARCHAR(2),
member_attempt_authentication CHAR(1),
member_birthdate VARCHAR(10),
member_address_cryptocurrency_bitcoin VARCHAR(200),
member_address_cryptocurrency_bitcoin_gold VARCHAR(200),
member_address_cryptocurrency_dogecoin VARCHAR(200),
member_address_cryptocurrency_ethereum VARCHAR(200),
member_address_cryptocurrency_litecoin VARCHAR(200),
member_address_cryptocurrency_mazacoin VARCHAR(200),
member_address_cryptocurrency_namecoin VARCHAR(200),
member_address_cryptocurrency_peercoin VARCHAR(200),
member_address_cryptocurrency_primecoin VARCHAR(200),
member_address_cryptocurrency_troncoin VARCHAR(200),
member_address_cryptocurrency_zcash VARCHAR(200),
member_address_home TEXT,
member_address_mail TEXT,
member_electronic_mail_address VARCHAR(100),
member_experience_amount VARCHAR(12),
member_gender CHAR(1),
member_image_avatar VARCHAR(100),
member_image_picture VARCHAR(100),
member_image_video VARCHAR(100),
member_ip_address VARCHAR(50),
member_ip_address_authorized VARCHAR(50),
member_ip_address_authorized_multifactor VARCHAR(50),
member_ip_address_authorization_token VARCHAR(512),
member_ip_address_last_authentication_server_device VARCHAR(200),
member_ip_address_last_authentication_server_local VARCHAR(200),
member_ip_address_last_authentication_server_remote VARCHAR(200),
member_ip_address_log TEXT,
member_contact_emergency_1 TEXT,
member_contact_emergency_2 TEXT,
member_contact_emergency_3 TEXT,
member_emergency_medical TEXT,
member_last_referrer TEXT,
member_level_rank CHAR(2),
member_location_device_html_gps_x VARCHAR(250),
member_location_device_html_gps_y VARCHAR(250),
member_location_device_html_gps_z VARCHAR(250),
member_location_device_php_gps_x VARCHAR(250),
member_location_device_php_gps_y VARCHAR(250),
member_location_device_php_gps_z VARCHAR(250),
member_location_device_glo TEXT,
member_location_device_region VARCHAR(100),
member_location_device_timezone VARCHAR(100),
member_location_given_area VARCHAR(100),
member_location_given_region VARCHAR(100),
member_location_given_timezone VARCHAR(100),
member_mood VARCHAR(100),
member_music VARCHAR(100),
member_name_first VARCHAR(100),
member_name_last VARCHAR(100),
member_name_middle VARCHAR(100),
member_name_nickname VARCHAR(100),
member_notes TEXT,
member_number_of_posts VARCHAR(10),
member_number_phone_area_code VARCHAR(5),
member_number_phone_cell VARCHAR(20),
member_number_phone_country_code VARCHAR(5),
member_number_phone_home VARCHAR(20),
member_number_phone_work VARCHAR(20),
member_password VARCHAR(250),
member_physical_biometrics_blood_type VARCHAR(10),
member_physical_biometrics_color_eye_1 VARCHAR(10),
member_physical_biometrics_color_eye_2 VARCHAR(10),
member_physical_biometrics_color_hair VARCHAR(10),
member_physical_biometrics_height VARCHAR(4),
member_physical_biometrics_weight VARCHAR(4),
member_physical_dimensions TEXT,
member_physical_ethnicity_1 VARCHAR(200),
member_physical_ethnicity_2 VARCHAR(200),
member_physical_ethnicity_3 VARCHAR(200),
member_physical_ethnicity_4 VARCHAR(200),
member_physical_nationality_1 VARCHAR(200),
member_physical_nationality_2 VARCHAR(200),
member_physical_nationality_3 VARCHAR(200),
member_physical_race_1 VARCHAR(200),
member_physical_race_2 VARCHAR(200),
member_physical_race_3 VARCHAR(200),
member_physical_race_4 VARCHAR(200),
member_profile_about TEXT,
member_profile_signature TEXT,
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed VARCHAR(512),
member_security_custom_password_panel TEXT,
member_security_pgp_key_panel_private TEXT,
member_security_pgp_key_panel_public TEXT,
member_security_setting_flag_force_logout CHAR(1),
member_settings_control_panel_audio CHAR(1),
member_settings_encryption_pgp CHAR(1),
member_settings_language VARCHAR(50),
member_settings_newsletter CHAR(1),
member_settings_theme_directory VARCHAR(25),
member_settings_visibility_profile_activity CHAR(1),
member_settings_visibility_profile_authentication CHAR(1),
member_settings_visibility_profile_contact CHAR(1),
member_settings_visibility_profile_contact_emergency CHAR(1),
member_settings_visibility_profile_details CHAR(1),
member_settings_visibility_profile_friends CHAR(1),
member_settings_visibility_profile_gallery_audio CHAR(1),
member_settings_visibility_profile_gallery_document CHAR(1),
member_settings_visibility_profile_gallery_image CHAR(1),
member_settings_visibility_profile_gallery_video CHAR(1),
member_settings_visibility_profile_location CHAR(1),
member_settings_visibility_profile_physical CHAR(1),
member_settings_visibility_profile_security CHAR(1),
member_settings_visibility_profile_streams CHAR(1),
member_social_preference_marital_status CHAR(1),
member_social_preference_sexual_orientation CHAR(1),
member_socialmedia_audio_spotify VARCHAR(250),
member_socialmedia_business_linkedin VARCHAR(250),
member_socialmedia_communications_discord VARCHAR(250),
member_socialmedia_communications_icq VARCHAR(250),
member_socialmedia_communications_skype VARCHAR(250),
member_socialmedia_communications_snapchat VARCHAR(250),
member_socialmedia_gallery_instagram VARCHAR(250),
member_socialmedia_posting_facebook VARCHAR(250),
member_socialmedia_posting_twitter VARCHAR(250),
member_socialmedia_programming_bitbucket VARCHAR(250),
member_socialmedia_programming_github VARCHAR(250),
member_socialmedia_programming_launchpad VARCHAR(250),
member_socialmedia_security_keybase VARCHAR(250),
member_socialmedia_video_youtube VARCHAR(250),
member_status_account_activation CHAR(1),
member_status_account_activation_key VARCHAR(100),
member_status_account_active CHAR(1),
member_status_account_banned CHAR(1),
member_status_account_last_active_timestamp VARCHAR(250),
member_status_account_last_active_timestamp_unix VARCHAR(250),
member_status_account_last_active_years VARCHAR(10),
member_status_account_last_active_months VARCHAR(10),
member_status_account_last_active_days VARCHAR(10),
member_status_account_last_active_hours VARCHAR(10),
member_status_account_last_active_minutes VARCHAR(10),
member_status_account_last_active_seconds VARCHAR(10),
member_status_account_locked CHAR(1),
member_url_homepage VARCHAR(250),
member_username VARCHAR(50),
PRIMARY KEY (id)
);

/* Messenger :: Plain-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_clear_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_maintenance VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger :: Plain-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_clear_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_timestamp VARCHAR(100),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
PRIMARY KEY (id)
);

/* Messenger :: Encrypted-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_maintenance VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger :: Encrypted-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_encrypted_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
messenger_room_timestamp_message VARCHAR(100),
messenger_room_timestamp_creation VARCHAR(100),
PRIMARY KEY (id)
);

/* Messenger :: P2P :: Clear-Text File */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_p2p_clear_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_username_local VARCHAR(100),
messenger_room_username_remote VARCHAR(100),
PRIMARY KEY (id)
);

/* Messenger :: P2P :: Encrypted-Text File */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_p2p_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_username_local VARCHAR(100),
messenger_room_username_remote VARCHAR(100),
PRIMARY KEY (id)
);

/* Networking */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_networking (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
blocked_dns_address_string VARCHAR(250),
blocked_dns_address_text TEXT,
blocked_ip_address_string VARCHAR(250),
blocked_ip_address_text TEXT,
blocked_redirect_url VARCHAR(250),
PRIMARY KEY (id)
);

/* News Articles */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_author VARCHAR(50),
news_avatar VARCHAR(50),
news_data TEXT,
news_mood VARCHAR(250),
news_music VARCHAR(250),
news_rss_rfc TEXT,
news_time VARCHAR(50),
news_title VARCHAR(50),
PRIMARY KEY (id)
);

/* News Submissions */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Notepad */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_notepad (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
note_access_level VARCHAR(50),
note_author VARCHAR(50),
note_data TEXT,
note_encrypted CHAR(1),
note_name VARCHAR(100),
note_password VARCHAR(256),
note_timestamp VARCHAR(50),
PRIMARY KEY (id)
);

/* Ranks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_ranks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
rank_gender_female_0 VARCHAR(25),
rank_gender_female_1 VARCHAR(25),
rank_gender_female_2 VARCHAR(25),
rank_gender_female_3 VARCHAR(25),
rank_gender_female_4 VARCHAR(25),
rank_gender_male_0 VARCHAR(25),
rank_gender_male_1 VARCHAR(25),
rank_gender_male_2 VARCHAR(25),
rank_gender_male_3 VARCHAR(25),
rank_gender_male_4 VARCHAR(25),
rank_gender_none VARCHAR(25),
PRIMARY KEY (id)
);

/* Services Commander */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_services_commander (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
command_execute VARCHAR(500),
command_receive VARCHAR(500),
command_send VARCHAR(500),
command_timestamp VARCHAR(100),
command_type CHAR(1),
PRIMARY KEY (id)
);

/* Services Tasks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_services_tasks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
task_author VARCHAR(50),
task_data TEXT,
task_date_year VARCHAR(2),
task_date_month VARCHAR(2),
task_date_day VARCHAR(2),
task_time_hour VARCHAR(2),
task_time_minute VARCHAR(2),
task_time_second VARCHAR(2),
PRIMARY KEY (id)
);

/* Settings */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_settings (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
settings_system_time_cookies VARCHAR(10),
settings_system_status_embedded_compression_gzip CHAR(1),
settings_system_status_offline_mode CHAR(1),
settings_system_file_extension_audio VARCHAR(4),
settings_system_file_extension_image CHAR(3),
settings_system_directory_language VARCHAR(50),
settings_system_directory_theme VARCHAR(50),
settings_system_website_title VARCHAR(250),
settings_system_upload_size_private_member_audio CHAR(15),
settings_system_upload_size_private_member_document CHAR(15),
settings_system_upload_size_private_member_image CHAR(15),
settings_system_upload_size_private_member_video CHAR(15),
settings_system_upload_size_private_member_streams_audio CHAR(15),
settings_system_upload_size_private_member_streams_document CHAR(15),
settings_system_upload_size_private_member_streams_image CHAR(15),
settings_system_upload_size_private_member_streams_video CHAR(15),
settings_system_upload_size_public_file_categories CHAR(15),
settings_system_upload_size_public_messenger_audio CHAR(15),
settings_system_upload_size_public_messenger_document CHAR(15),
settings_system_upload_size_public_messenger_image CHAR(15),
settings_system_upload_size_public_messenger_video CHAR(15),
settings_system_plugin_directory_camera VARCHAR(50),
settings_system_plugin_directory_location VARCHAR(50),
settings_system_plugin_directory_microphone VARCHAR(50),
settings_system_plugin_directory_notifications VARCHAR(50),
settings_system_plugin_directory_smileys VARCHAR(50),
settings_system_plugin_directory_safeHTML VARCHAR(50),
settings_system_plugin_directory_secure_delete VARCHAR(50),
settings_system_plugin_directory_text_editor VARCHAR(250),
settings_system_plugin_directory_time VARCHAR(250),
settings_system_plugin_status_camera CHAR(1),
settings_system_plugin_status_location CHAR(1),
settings_system_plugin_status_microphone CHAR(1),
settings_system_plugin_status_notifications CHAR(1),
settings_system_plugin_status_safeHTML CHAR(1),
settings_system_plugin_status_secure_delete CHAR(1),
settings_system_plugin_status_text_editor CHAR(1),
settings_system_plugin_status_time CHAR(1),
settings_system_security_account_registration_age_requirement VARCHAR(2),
settings_system_security_account_restrict_mac_address CHAR(1),
settings_system_security_account_restrict_ip CHAR(1),
settings_system_security_account_restrict_web_browser CHAR(1),
settings_system_security_device_multifactor_ip CHAR(1),
settings_system_security_cache_server CHAR(1),
settings_system_security_module_directory_sanitization VARCHAR(50),
settings_system_security_module_status_sanitization CHAR(1),
settings_system_services_module_status_commander CHAR(1),
settings_system_services_module_status_integrity CHAR(1),
settings_system_services_module_status_loops CHAR(1),
settings_system_services_module_status_services CHAR(1),
settings_system_services_module_status_tasks CHAR(1),
PRIMARY KEY (id)
);

/* Shout Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Statistics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_document_executions_non_unique CHAR(15),
statistics_total_number_of_document_executions_unique CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
);

/* System Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
system_message_author VARCHAR(50),
system_message_data TEXT,
system_message_member VARCHAR(50),
system_message_timestamp VARCHAR(100),
PRIMARY KEY (id)
);

/* Tasks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_tasks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
tasks_author VARCHAR(50),
tasks_data TEXT,
tasks_date_year VARCHAR(2),
tasks_date_month VARCHAR(2),
tasks_date_day VARCHAR(2),
tasks_time_hour VARCHAR(2),
tasks_time_minute VARCHAR(2),
tasks_time_second VARCHAR(2),
PRIMARY KEY (id)
);
";

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language :: Generator :: Tables :: Columns and Data :: Output
 +
 +
 ============================================================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS	= "
/* Install :: Default Application Module Links */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Active Members','001','?Application_Member&#61;Active_Members','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Applications','002','?Application_Member&#61;Application_List','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calculator','004','?Application_Member&#61;Calculator&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calendar','005','?Application_Member&#61;Calendar&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Clock','006','?Application_Member&#61;Clock&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Contact','007','?Application_Member&#61;Contact_Administrator','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Documentation','008','?Application_Member&#61;Documentation&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Download','009','?Application_Member&#61;Download&amp;Display&#61;Torrent','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Emulators','010','?Application_Member&#61;Emulators&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Files','011','?Application_Member&#61;Files&amp;CategoryID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Forum','012','?Application_Member&#61;Forum&amp;ForumID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Language','013','?Application_Member&#61;Language','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Lightning Calculate','014','?Application_Member&#61;Lightning_Calculate&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Legal','015','?Application_Member&#61;Legal','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Login','016','?Application_Member&#61;Login','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Market','017','?Application_Member&#61;Market&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Media Player','018','?Application_Member&#61;Media_Player','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Member Directory','019','?Application_Member&#61;Member_Directory','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Messenger','020','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('News','021','?Application_Member&#61;News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Notepad','022','?Application_Member&#61;Notepad&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Pages','023','?Application_Member&#61;Pages&amp;Display&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Recommendations','024','?Application_Member&#61;Recommendations','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Referrers','025','?Application_Member&#61;Referrers&amp;Display&#61;Box','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Register','026','?Application_Member&#61;Register','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('RSS Feed','027','./RSS.php?','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Search','028','?Application_Member&#61;Search','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('System','029','?Application_Member&#61;System&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Submit News','030','?Application_Member&#61;Submit_News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Upload File','031','?Application_Member&#61;Upload','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('VoIP Phone','032','?Application_Member&#61;VoIP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Welcome !','033','?Application_Custom&#61;1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Install :: Default Application Module Data :: Access Level :: Non-Registered Visitor, Registered Member Account and Moderator */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001','Account_Data','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002','Account_Recovery','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003','Active_Members','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004','All_News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005','All_Shouts','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006','Application_List','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007','Articles','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008','Calculator','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009','Calendar','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010','Clock','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011','Comment','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012','Contact_Administrator','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013','Control_Panel','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014','Documentation','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015','Download','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016','Electronic_Mail','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017','Emulators','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018','Files','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019','Forum','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020','Forward','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021','Friend','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022','Language','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023','Legal','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024','Lightning_Calculate','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025','List','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026','Login','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027','Market','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028','Media_Player','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029','Member_Directory','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030','Messenger','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031','News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032','Notepad','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033','Pages','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034','Profile','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035','Recommendations','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036','Referrers','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037','Register','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038','Reset_Password','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039','Search','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040','Submit_News','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041','System','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042','System_Message','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043','Theme','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044','Update_Account','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045','Update_Password','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046','Upload','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047','VoIP','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048','Webspace','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');

/* Install :: Default Application Module Data :: Access Level :: Administration */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001','Accounts','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002','Applications','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003','Archive','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004','Control_Panel','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005','Emulators','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006','File_Categories','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007','Forum','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008','GIT','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009','Messenger','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010','Networking','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011','Panels','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012','Publish','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013','Ranks','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014','Referrers','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015','Robot_Monitor','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016','Settings','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017','Submissions','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018','Terminal','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019','Update','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020','Web_Pages','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');

/* Install :: Default Application Module Data :: Access Level :: Root */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_root(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001','Tasks','4','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');

/* Install :: Default Application Module Data :: Access Level :: Services */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001','Commander','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002','Control_Panel','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003','Integrity','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004','Kernel','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005','Loops','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006','Services','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007','Tasks','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');

/* Install :: Default Application Module Data :: Access Level :: Background */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001','Log_Administration','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002','Log_Background','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003','Log_Member','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004','Log_Visitor','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1');

/*  Install :: Default Panel Application Module Data */

/* Application Module :: Panel :: Alignment :: Left */
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001','Applications_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','001','<CENTER><B>Applications Panel</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009','Member_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','002','<CENTER><B>Member Panel</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002','Clock','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','003','<CENTER><B>Clock</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008','Location','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','004','<CENTER><B>Location</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010','Networking','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','005','<CENTER><B>Networking</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004','Latest_Articles','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','006','<CENTER><B>Latest Articles</B></CENTER><HR>');

/* Application Module :: Panel :: Alignment :: Right */
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011','Project_Badges','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','007','<CENTER><B>Project Badges</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007','Latest_Shouts','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','008','<CENTER><B>Latest Shouts</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005','Latest_Files','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','009','<CENTER><B>Latest Files</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006','Latest_Members','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','010','<CENTER><B>Newest Members</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003','Language','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','011','<CENTER><B>Languages</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013','Theme','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','012','<CENTER><B>Theme Selection</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012','RSS_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','0.7.1','013','<CENTER><B>Real-Simple-Syndication</B></CENTER><HR>');

/* Install :: Default Custom Applications and Their Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_custom(
custom_application_data,
custom_application_name,
custom_application_timestamp_installation
)VALUES(
'Hello and welcome to $_PROJECT_STRING_NAME_EXTENDED ! If you are reading this sentence then $_PROJECT_STRING_NAME_EXTENDED was successfully installed to this Web Server !',
'Welcome !',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP'
);

/* Install :: Default Registered Member Account System Ranks Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_ranks(
rank_gender_female_0,
rank_gender_female_1,
rank_gender_female_2,
rank_gender_female_3,
rank_gender_female_4,
rank_gender_male_0,
rank_gender_male_1,
rank_gender_male_2,
rank_gender_male_3,
rank_gender_male_4,
rank_gender_none
)VALUES(
'Aphrodite',
'Demeter',
'Artemis',
'Hera',
'Athena',
'Hermes',
'Apollo',
'Poseidon',
'Hades',
'Zeus',
'Chaos'
);

/* Install :: Default System Settings Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_settings(
settings_system_time_cookies,
settings_system_status_embedded_compression_gzip,
settings_system_status_offline_mode,
settings_system_file_extension_audio,
settings_system_file_extension_image,
settings_system_directory_language,
settings_system_directory_theme,
settings_system_website_title,
settings_system_upload_size_private_member_audio,
settings_system_upload_size_private_member_document,
settings_system_upload_size_private_member_image,
settings_system_upload_size_private_member_video,
settings_system_upload_size_private_member_streams_audio,
settings_system_upload_size_private_member_streams_document,
settings_system_upload_size_private_member_streams_image,
settings_system_upload_size_private_member_streams_video,
settings_system_upload_size_public_file_categories,
settings_system_upload_size_public_messenger_audio,
settings_system_upload_size_public_messenger_document,
settings_system_upload_size_public_messenger_image,
settings_system_upload_size_public_messenger_video,
settings_system_plugin_directory_camera,
settings_system_plugin_directory_location,
settings_system_plugin_directory_microphone,
settings_system_plugin_directory_notifications,
settings_system_plugin_directory_smileys,
settings_system_plugin_directory_safeHTML,
settings_system_plugin_directory_secure_delete,
settings_system_plugin_directory_text_editor,
settings_system_plugin_directory_time,
settings_system_plugin_status_camera,
settings_system_plugin_status_location,
settings_system_plugin_status_microphone,
settings_system_plugin_status_notifications,
settings_system_plugin_status_safeHTML,
settings_system_plugin_status_secure_delete,
settings_system_plugin_status_text_editor,
settings_system_plugin_status_time,
settings_system_security_account_registration_age_requirement,
settings_system_security_account_restrict_mac_address,
settings_system_security_account_restrict_ip,
settings_system_security_account_restrict_web_browser,
settings_system_security_device_multifactor_ip,
settings_system_security_cache_server,
settings_system_security_module_directory_sanitization,
settings_system_security_module_status_sanitization,
settings_system_services_module_status_commander,
settings_system_services_module_status_integrity,
settings_system_services_module_status_loops,
settings_system_services_module_status_services,
settings_system_services_module_status_tasks
)VALUES(
'86400',
'0',
'0',
'mp3',
'png',
'English',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME',
'$_PROJECT_STRING_NAME_EXTENDED',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'256000',
'Default',
'Default',
'Default',
'Default',
'Default',
'Default',
'Default',
'Default',
'Default',
'1',
'1',
'1',
'1',
'1',
'1',
'1',
'1',
'21',
'0',
'0',
'0',
'0',
'1',
'Default',
'1',
'1',
'1',
'1',
'1',
'1'
);

/* Install :: Default Statistics Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_statistics(
statistics_total_number_of_document_executions_non_unique,
statistics_total_number_of_document_executions_unique,
statistics_installation_date
)VALUES(
'1',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP'
);

/* Install :: Default Forum Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_forum(forum_access_level,forum_description,forum_timestamp,forum_title)VALUES('0','This Is The Example Forum Entry #1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This Is The Example Forum Entry #1');

/* Install :: Default Forum Topic Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic(topic_access_level,topic_description,topic_forum_id,topic_last_poster,topic_timestamp,topic_timestamp_last_message,topic_title)VALUES('0','This Is The Example Forum Topic Entry #1 Within The Example Forum Entry #1','1','$_PROJECT_STRING_NAME_SHORT','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This Is The Example Forum Topic Entry #1');

/* Install :: Default Topic Post Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic_message(message_access_level,message_author,message_data,message_forum_topic_id,message_timestamp,message_timestamp_last_update)VALUES('0','$_PROJECT_STRING_NAME_SHORT','This is an Example Forum Topic Message Entry -- you can Administer the Forum via the Administration Control Panel.','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Install :: Default File Category Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File Category Entry');

/* Install :: Default File Download Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this Example File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File','$_PROJECT_STRING_NAME_SHORT');

/* Install :: Default Article Entry Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('$_PROJECT_STRING_NAME_SHORT','This is an Example Article Entry -- You can Delete this Article Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example Article');

/* Install :: Default Kernel File Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_kernel(kernel_file_date_installation,kernel_file_integrity,kernel_file_name,kernel_file_version)VALUES('$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','','$_INTERNAL_FILE_KERNEL','4.08.250');

/* Install :: Default News Entry Data */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('$_PROJECT_STRING_NAME_SHORT','Default.png','This is an Example News Article Entry -- You can Delete this News Article Entry from the Administration Control Panel.','None','None','Wed, 05 Aug 2009 15:04:18 -0700','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example News Article Entry');
";

$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT	= "

/* Install :: Specified Administrator Account Details */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members(
member_access_level,
member_account_device_web_browser,
member_account_device_web_browser_authorized,
member_account_device_mac_address,
member_account_device_mac_address_authorized,
member_account_recovery_key,
member_account_recovery_pictograph_1,
member_account_recovery_pictograph_2,
member_account_recovery_pictograph_3,
member_account_recovery_pictograph_4,
member_account_recovery_pictograph_5,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_troncoin,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_image_video,
member_ip_address,
member_ip_address_authorized,
member_ip_address_authorized_multifactor,
member_ip_address_authorization_token,
member_ip_address_last_authentication_server_device,
member_ip_address_last_authentication_server_local,
member_ip_address_last_authentication_server_remote,
member_ip_address_log,
member_contact_emergency_1,
member_contact_emergency_2,
member_contact_emergency_3,
member_emergency_medical,
member_last_referrer,
member_level_rank,
member_location_device_html_gps_x,
member_location_device_html_gps_y,
member_location_device_html_gps_z,
member_location_device_php_gps_x,
member_location_device_php_gps_y,
member_location_device_php_gps_z,
member_location_device_glo,
member_location_device_region,
member_location_device_timezone,
member_location_given_area,
member_location_given_region,
member_location_given_timezone,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_notes,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_biometrics_blood_type,
member_physical_biometrics_color_eye_1,
member_physical_biometrics_color_eye_2,
member_physical_biometrics_color_hair,
member_physical_biometrics_height,
member_physical_biometrics_weight,
member_physical_dimensions,
member_physical_ethnicity_1,
member_physical_ethnicity_2,
member_physical_ethnicity_3,
member_physical_ethnicity_4,
member_physical_nationality_1,
member_physical_nationality_2,
member_physical_nationality_3,
member_physical_race_1,
member_physical_race_2,
member_physical_race_3,
member_physical_race_4,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_custom_password_panel,
member_security_pgp_key_panel_private,
member_security_pgp_key_panel_public,
member_security_setting_flag_force_logout,
member_settings_control_panel_audio,
member_settings_encryption_pgp,
member_settings_language,
member_settings_newsletter,
member_settings_theme_directory,
member_settings_visibility_profile_activity,
member_settings_visibility_profile_authentication,
member_settings_visibility_profile_contact,
member_settings_visibility_profile_contact_emergency,
member_settings_visibility_profile_details,
member_settings_visibility_profile_friends,
member_settings_visibility_profile_gallery_audio,
member_settings_visibility_profile_gallery_document,
member_settings_visibility_profile_gallery_image,
member_settings_visibility_profile_gallery_video,
member_settings_visibility_profile_location,
member_settings_visibility_profile_physical,
member_settings_visibility_profile_security,
member_settings_visibility_profile_streams,
member_social_preference_marital_status,
member_social_preference_sexual_orientation,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active_timestamp,
member_status_account_last_active_years,
member_status_account_last_active_months,
member_status_account_last_active_days,
member_status_account_last_active_hours,
member_status_account_last_active_minutes,
member_status_account_last_active_seconds,
member_status_account_locked,
member_url_homepage,
member_username
)VALUES(
'3',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'00:00:00:00:00:00',
'00:00:00:00:00:00',
'01-02-03-04-05',
'1',
'2',
'3',
'4',
'5',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS',
'10000',
'2',
'Default.png',
'No_Image.png',
'No_Image.mp4',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'000.000.000.000',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'Emergency Contact :: 1',
'Emergency Contact :: 2',
'Emergency Contact :: 3',
'Emergency :: Medical',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'10',
'Unknown :: Location :: Device :: HTML :: GPS X',
'Unknown :: Location :: Device :: HTML :: GPS Y',
'Unknown :: Location :: Device :: HTML :: GPS Z',
'Unknown :: Location :: Device :: PHP :: GPS X',
'Unknown :: Location :: Device :: PHP :: GPS Y',
'Unknown :: Location :: Device :: PHP :: GPS Z',
'Unknown :: Location :: Device :: GLO',
'Unknown :: Location :: Device :: Region',
'Unknown :: Location :: Device :: Timezone',
'Unknown :: Location :: Given :: Area',
'Unknown :: Location :: Given :: Region',
'Unknown :: Location :: Given :: Timezone',
'On Guard',
'Nine Inch Nails - Deep',
'Empty Entry :: First Name',
'Empty Entry :: Last Name',
'Empty Entry :: Middle Name',
'Emtpy Entry :: Nick Name',
'Administration Notes',
'10000',
'111',
'111-1111',
'1',
'111-1111',
'111-1111',
'$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASHED',
'NA',
'Eye',
'Eye',
'Hair',
'000',
'000',
'0',
'Unknown :: Ethnicity :: 1',
'Unknown :: Ethnicity :: 2',
'Unknown :: Ethnicity :: 3',
'Unknown :: Ethnicity :: 4',
'Unknown :: Nationality :: 1',
'Unknown :: Nationality :: 2',
'Unknown :: Nationality :: 3',
'Unknown :: Race :: 1',
'Unknown :: Race :: 2',
'Unknown :: Race :: 3',
'Unknown :: Race :: 4',
'Account Profile :: Installation Administration Account',
'Account Signature :: Installation Administration Account',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'This Registered Member Account Was Registered From The Internet Protocol Address :: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'Unknown :: Fingerprint :: Clear-Text',
'Unknown :: Fingerprint :: Hashed',
'Empty Entry :: Password :: Panel :: Custom :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Public',
'0',
'1',
'1',
'English',
'0',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'1',
'1',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5',
'0',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_MySQL_Generator_POST_ADMINISTRATOR_USERNAME'
);

/* Install :: Default Backup ( Robot ) Root Administrator Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members(
member_access_level,
member_account_device_web_browser,
member_account_device_web_browser_authorized,
member_account_device_mac_address,
member_account_device_mac_address_authorized,
member_account_recovery_key,
member_account_recovery_pictograph_1,
member_account_recovery_pictograph_2,
member_account_recovery_pictograph_3,
member_account_recovery_pictograph_4,
member_account_recovery_pictograph_5,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_troncoin,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_image_video,
member_ip_address,
member_ip_address_authorized,
member_ip_address_authorized_multifactor,
member_ip_address_authorization_token,
member_ip_address_last_authentication_server_device,
member_ip_address_last_authentication_server_local,
member_ip_address_last_authentication_server_remote,
member_ip_address_log,
member_contact_emergency_1,
member_contact_emergency_2,
member_contact_emergency_3,
member_emergency_medical,
member_last_referrer,
member_level_rank,
member_location_device_html_gps_x,
member_location_device_html_gps_y,
member_location_device_html_gps_z,
member_location_device_php_gps_x,
member_location_device_php_gps_y,
member_location_device_php_gps_z,
member_location_device_glo,
member_location_device_region,
member_location_device_timezone,
member_location_given_area,
member_location_given_region,
member_location_given_timezone,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_notes,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_biometrics_blood_type,
member_physical_biometrics_color_eye_1,
member_physical_biometrics_color_eye_2,
member_physical_biometrics_color_hair,
member_physical_biometrics_height,
member_physical_biometrics_weight,
member_physical_dimensions,
member_physical_ethnicity_1,
member_physical_ethnicity_2,
member_physical_ethnicity_3,
member_physical_ethnicity_4,
member_physical_nationality_1,
member_physical_nationality_2,
member_physical_nationality_3,
member_physical_race_1,
member_physical_race_2,
member_physical_race_3,
member_physical_race_4,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_custom_password_panel,
member_security_pgp_key_panel_private,
member_security_pgp_key_panel_public,
member_security_setting_flag_force_logout,
member_settings_control_panel_audio,
member_settings_encryption_pgp,
member_settings_language,
member_settings_newsletter,
member_settings_theme_directory,
member_settings_visibility_profile_activity,
member_settings_visibility_profile_authentication,
member_settings_visibility_profile_contact,
member_settings_visibility_profile_contact_emergency,
member_settings_visibility_profile_details,
member_settings_visibility_profile_friends,
member_settings_visibility_profile_gallery_audio,
member_settings_visibility_profile_gallery_document,
member_settings_visibility_profile_gallery_image,
member_settings_visibility_profile_gallery_video,
member_settings_visibility_profile_location,
member_settings_visibility_profile_physical,
member_settings_visibility_profile_security,
member_settings_visibility_profile_streams,
member_social_preference_marital_status,
member_social_preference_sexual_orientation,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active_timestamp,
member_status_account_last_active_years,
member_status_account_last_active_months,
member_status_account_last_active_days,
member_status_account_last_active_hours,
member_status_account_last_active_minutes,
member_status_account_last_active_seconds,
member_status_account_locked,
member_url_homepage,
member_username
)VALUES(
'4',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'00:00:00:00:00:00',
'00:00:00:00:00:00',
'01-02-03-04-05',
'1',
'2',
'3',
'4',
'5',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_ELECTRONIC_MAIL_ADDRESS',
'10000',
'2',
'Default.png',
'Profile.png',
'No_Image.mp4',
'$_GLOBAL_LOCAL_SERVER_ADDRESS',
'000.000.000.000',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'Emergency Contact :: 1',
'Emergency Contact :: 2',
'Emergency Contact :: 3',
'Emergency :: Medical',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'10',
'Unknown :: Location :: Device :: HTML :: GPS X',
'Unknown :: Location :: Device :: HTML :: GPS Y',
'Unknown :: Location :: Device :: HTML :: GPS Z',
'Unknown :: Location :: Device :: PHP :: GPS X',
'Unknown :: Location :: Device :: PHP :: GPS Y',
'Unknown :: Location :: Device :: PHP :: GPS Z',
'Unknown :: Location :: Device :: GLO',
'Unknown :: Location :: Device :: Region',
'Unknown :: Location :: Device :: Timezone',
'Unknown :: Location :: Given :: Area',
'Unknown :: Location :: Given :: Region',
'Unknown :: Location :: Given :: Timezone',
'On Guard',
'Nine Inch Nails - Deep',
'Cerberus',
'of Hades',
'Empty Entry :: Middle Name',
'CerberusCMS',
'Administration Notes',
'10000',
'111',
'111-1111',
'1',
'111-1111',
'111-1111',
'$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASHED',
'NA',
'Eye',
'Eye',
'Hair',
'000',
'000',
'0',
'Unknown :: Ethnicity :: 1',
'Unknown :: Ethnicity :: 2',
'Unknown :: Ethnicity :: 3',
'Unknown :: Ethnicity :: 4',
'Unknown :: Nationality :: 1',
'Unknown :: Nationality :: 2',
'Unknown :: Nationality :: 3',
'Unknown :: Race :: 1',
'Unknown :: Race :: 2',
'Unknown :: Race :: 3',
'Unknown :: Race :: 4',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_ABOUT',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_SIGNATURE',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'This Registered Member Account Was Registered From The Internet Protocol Address :: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'Unknown :: Fingerprint :: Clear-Text',
'Unknown :: Fingerprint :: Hashed',
'Empty Entry :: Password :: Panel :: Custom :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Public',
'0',
'1',
'1',
'English',
'0',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'1',
'1',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME'
);

/* Install :: Services Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members(
member_access_level,
member_account_device_web_browser,
member_account_device_web_browser_authorized,
member_account_device_mac_address,
member_account_device_mac_address_authorized,
member_account_recovery_key,
member_account_recovery_pictograph_1,
member_account_recovery_pictograph_2,
member_account_recovery_pictograph_3,
member_account_recovery_pictograph_4,
member_account_recovery_pictograph_5,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_troncoin,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_image_video,
member_ip_address,
member_ip_address_authorized,
member_ip_address_authorized_multifactor,
member_ip_address_authorization_token,
member_ip_address_last_authentication_server_device,
member_ip_address_last_authentication_server_local,
member_ip_address_last_authentication_server_remote,
member_ip_address_log,
member_contact_emergency_1,
member_contact_emergency_2,
member_contact_emergency_3,
member_emergency_medical,
member_last_referrer,
member_level_rank,
member_location_device_html_gps_x,
member_location_device_html_gps_y,
member_location_device_html_gps_z,
member_location_device_php_gps_x,
member_location_device_php_gps_y,
member_location_device_php_gps_z,
member_location_device_glo,
member_location_device_region,
member_location_device_timezone,
member_location_given_area,
member_location_given_region,
member_location_given_timezone,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_notes,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_biometrics_blood_type,
member_physical_biometrics_color_eye_1,
member_physical_biometrics_color_eye_2,
member_physical_biometrics_color_hair,
member_physical_biometrics_height,
member_physical_biometrics_weight,
member_physical_dimensions,
member_physical_ethnicity_1,
member_physical_ethnicity_2,
member_physical_ethnicity_3,
member_physical_ethnicity_4,
member_physical_nationality_1,
member_physical_nationality_2,
member_physical_nationality_3,
member_physical_race_1,
member_physical_race_2,
member_physical_race_3,
member_physical_race_4,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_custom_password_panel,
member_security_pgp_key_panel_private,
member_security_pgp_key_panel_public,
member_security_setting_flag_force_logout,
member_settings_control_panel_audio,
member_settings_encryption_pgp,
member_settings_language,
member_settings_newsletter,
member_settings_theme_directory,
member_settings_visibility_profile_activity,
member_settings_visibility_profile_authentication,
member_settings_visibility_profile_contact,
member_settings_visibility_profile_contact_emergency,
member_settings_visibility_profile_details,
member_settings_visibility_profile_friends,
member_settings_visibility_profile_gallery_audio,
member_settings_visibility_profile_gallery_document,
member_settings_visibility_profile_gallery_image,
member_settings_visibility_profile_gallery_video,
member_settings_visibility_profile_location,
member_settings_visibility_profile_physical,
member_settings_visibility_profile_security,
member_settings_visibility_profile_streams,
member_social_preference_marital_status,
member_social_preference_sexual_orientation,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active_timestamp,
member_status_account_last_active_years,
member_status_account_last_active_months,
member_status_account_last_active_days,
member_status_account_last_active_hours,
member_status_account_last_active_minutes,
member_status_account_last_active_seconds,
member_status_account_locked,
member_url_homepage,
member_username
)VALUES(
'5',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT',
'00:00:00:00:00:00',
'00:00:00:00:00:00',
'01-02-03-04-05',
'1',
'2',
'3',
'4',
'5',
'0',
'01-01-1970',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'Services@Root',
'10000',
'2',
'Default.png',
'No_Image.png',
'No_Image.mp4',
'$_GLOBAL_LOCAL_SERVER_ADDRESS',
'000.000.000.000',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'Emergency Contact :: 1',
'Emergency Contact :: 2',
'Emergency Contact :: 3',
'Emergency :: Medical',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'10',
'Unknown :: Location :: Device :: HTML :: GPS X',
'Unknown :: Location :: Device :: HTML :: GPS Y',
'Unknown :: Location :: Device :: HTML :: GPS Z',
'Unknown :: Location :: Device :: PHP :: GPS X',
'Unknown :: Location :: Device :: PHP :: GPS Y',
'Unknown :: Location :: Device :: PHP :: GPS Z',
'Unknown :: Location :: Device :: GLO',
'Unknown :: Location :: Device :: Region',
'Unknown :: Location :: Device :: Timezone',
'Unknown :: Location :: Given :: Area',
'Unknown :: Location :: Given :: Region',
'Unknown :: Location :: Given :: Timezone',
'None',
'None',
'Services',
'None',
'Empty Entry :: Middle Name',
'Services',
'Administration Notes',
'10000',
'111',
'111-1111',
'1',
'111-1111',
'111-1111',
'$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASHED',
'NA',
'Eye',
'Eye',
'Hair',
'000',
'000',
'0',
'Unknown :: Ethnicity :: 1',
'Unknown :: Ethnicity :: 2',
'Unknown :: Ethnicity :: 3',
'Unknown :: Ethnicity :: 4',
'Unknown :: Nationality :: 1',
'Unknown :: Nationality :: 2',
'Unknown :: Nationality :: 3',
'Unknown :: Race :: 1',
'Unknown :: Race :: 2',
'Unknown :: Race :: 3',
'Unknown :: Race :: 4',
'Hi ! I am the automated Services Account. This is the Master Account with Supreme Privileges System-Wide. You cannot Login to this Account. You cannot Authenticate into this Account. There is no Password on this Account, there is no Electronic Mail Address on this Account. This is an Automated Services Account that automatically performs Services Root Administration-Level Actions and Services Root Administration-Level Programming Code set by the Administration Team with Administration-Level Access or the Moderation Team with Moderation-Level Access. You can however send commands to me so that I can perform or execute a Task, Integrity or a Loop from either the Administration-Level Control Panel Terminal, here on my Account Profile Terminal or by sending an escalated command to me through the Automated Root Administration-Level Robot Account.',
'I am Services. Always at your Command !',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'This Registered Member Account Was Registered From The Internet Protocol Address :: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'Unknown :: Fingerprint :: Clear-Text',
'Unknown :: Fingerprint :: Hashed',
'Empty Entry :: Password :: Panel :: Custom :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Private',
'Empty Entry :: P.G.P. :: Key Block :: Public',
'0',
'1',
'1',
'English',
'0',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'1',
'1',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'Services'
);
";

$_MySQL_Generator_PRINT_MySQL_TABLES					= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLES);
$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS				= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS);
$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT			= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT);

		echo ("$_PROJECT_STRING_NAME Administration UserName / Password HASHED<BR>");
		echo (" [ Password In BlowFish Algorithm With Salt / Password In Pure Message Digest Algorithm, Version: 5 / Password In Clear-Text ]<BR>");
		echo ("<TEXTAREA ROWS=\"10\" COLS=\"75\" MAXLENGTH=\"10000\">Administration Username: $_MySQL_Generator_POST_ADMINISTRATOR_USERNAME / Administration Password In BlowFish Algorithm With Password HASH Salt: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH / Administration Password In Pure Message Digest Algorithm, Version 5: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH_MD5 / Administration Password In Clear-Text: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME MyS.Q.L. Tables Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLES</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME MyS.Q.L. Table Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME Administration Account S.Q.L. Insertion Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT</TEXTAREA>");

} // [ + ] IF: Database Server Query :: Insert :: Default Administration Account Database Data Variables Have Executed

/*
 ============================================================================================================
 +
 +
 + Hyper-Text-Markup-Language Document :: Output :: End
 +
 +
 ============================================================================================================
*/

echo ("
	</BODY>
</HTML>
");
?>