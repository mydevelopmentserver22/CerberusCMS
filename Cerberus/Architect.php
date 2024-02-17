﻿<?php
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
 +  ------
 + Installation Application
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Master Root Directory => Root Directory => Architect.php
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
 +
 + [ ^ ] Cerberus Content Management System :: Architect Application
 +
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Error Reporting System
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: Off: All
 +
 ============================================================================================================
*/

error_reporting(0);

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: Off: Warning AND Notice
 +
 ============================================================================================================
*/

// [ C ] error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: On: Error, Warning, Parse AND Notice
 +
 ============================================================================================================
*/

// [ C ] error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: On: All
 +
 ============================================================================================================
*/

// [ C ] error_reporting(-1);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] System Configuration Settings
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + File Inclusion :: System :: Configuration
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + File Inclusion :: System :: Configuration :: Global Configuration File
 ============================================================================================================
*/

include_once ("./System/Configuration/Global_Configuration.php");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Global :: Architect :: Local Server :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global :: Architect :: Local Server :: Variables :: Date, Time and Referrer
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Timestamp
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP									= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX								= time();
$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_WITH_SEPARATION							= date("l:F:j:Y:h:i:s:A");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: RFC
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Year, Month and Month Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_YEAR										= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_MONTH									= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_MONTH_DAY									= date("d");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Time :: Hours, Minutes and Seconds
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS									= date("h");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS									= date("s");

/*
 ============================================================================================================
 +
 + Global :: Date, Time and Referrer :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Standard
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD									= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL								= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_SHORT								= date("y");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Month
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL								= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT							= date("n");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL							= date("d");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Date :: Year :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_FULL								= date("Y-m-d");
$_GLOBAL_LOCAL_SERVER_DATE_TIME_NUMERICAL_FULL								= date("Y-m-d-g-i-s");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS									= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS									= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS							= date("g-i-s");

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Hyper-Text-Transfer-Protocol :: Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global :: Remote Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS										= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME										= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT										= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_SERVER_USER										= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 + Global :: Architect :: Local Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Connection :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE									= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS										= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME										= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE										= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL										= $_SERVER['SERVER_PROTOCOL'];
$_GLOBAL_LOCAL_SERVER_SIGNATURE										= $_SERVER['SERVER_SIGNATURE'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Request Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD									= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME									= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT								= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING									= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT									= $_SERVER['DOCUMENT_ROOT'];
$_GLOBAL_LOCAL_SERVER_DIRECTORY_CURRENT									= dirname($_SERVER['PHP_SELF']);
$_GLOBAL_LOCAL_SERVER_DIRECTORY_FILE_CURRENT								= $_SERVER['PHP_SELF'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Hyper-Text-Transfer-Protocol Information
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
 + Global :: Architect :: Local Server :: Variables :: Date :: HASH :: Message Digest Algorithm, Version Number: 5
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5								= md5($_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5);

/*
 ============================================================================================================
 +
 + Global :: Architect :: Local Server :: Variables :: Network Connection Protocols
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Network Connection Protocols :: Connection Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE									= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS										= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME										= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE										= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL										= $_SERVER['SERVER_PROTOCOL'];

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Protocol :: Connection Request Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD									= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME									= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT								= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING									= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT									= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Protocol :: Hyper-Text-Transfer-Protocol
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

$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT									= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 +
 + Global :: Architect :: Local Server :: Variables :: Hyper-Text-Transfer-Protocols
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Local Server :: Variables :: Hyper-Text-Transfer-Protocols :: Remote Server :: Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 +
 + Remote Server :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Remote Server :: Variables :: Network Connection
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS										= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME										= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT										= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_SERVER_USER										= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Log :: Interaction Log :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Find and Open :: Architect :: Activity Log :: Interaction Log File
 ============================================================================================================
*/

$_ARCHITECT_LOG_INTERACTION_LOG_FIND_FILE_NAME								= "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/Log.txt";
$_ARCHITECT_LOG_INTERACTION_LOG_OPEN_FILE_NAME								= fopen($_ARCHITECT_LOG_INTERACTION_LOG_FIND_FILE_NAME, "a");

/*
 ============================================================================================================
 + Data To Be Written To File :: Activity Log :: Interaction Details
 ============================================================================================================
*/

$_ARCHITECT_LOG_INTERACTION_LOG_DATA									= "
*** Timestamp :: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP
--------------------------------------------------------------------------
Machine and Connection Information
--------------------------------------------------------------------------
-- This Web Server
* Architect :: Machine :: This Web Server :: Document View Timestamp: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP
* Architect :: Machine :: This Web Server :: Document Referrer: $_GLOBAL_LOCAL_SERVER_HTTP_REFERRER
* Architect :: Machine :: This Web Server :: Request String: $_GLOBAL_LOCAL_SERVER_QUERY_STRING
* Architect :: Machine :: This Web Server :: Request Method: $_GLOBAL_LOCAL_SERVER_REQUEST_METHOD
* Architect :: Machine :: This Web Server :: Request Time: $_GLOBAL_LOCAL_SERVER_REQUEST_TIME
* Architect :: Machine :: This Web Server :: Connection Type: $_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE

-- Connecting Device
* Architect :: Machine :: Connecting Device :: Timestamp :: Document-View :: Unix-Time: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX
* Architect :: Machine :: Connecting Device :: Network :: Host-Name: $_GLOBAL_REMOTE_SERVER_HOSTNAME
* Architect :: Machine :: Connecting Device :: Network :: Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Architect :: Machine :: Connecting Device :: Network :: Internet Protocol Address :: Port Number: $_GLOBAL_REMOTE_SERVER_PORT
* Architect :: Machine :: Connecting Device :: Network :: User-Agent :: Web Browser: $_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT

--------------------------------------------------------------------------
Location :: Information
--------------------------------------------------------------------------
* Architect :: Location :: Connecting Device :: From :: Global-Positioning-System Coordinates In: X, Y, Z:
* Architect :: Location :: Connecting Device :: From :: Geographical Localization of Objects:
* Architect :: Location :: Connecting Device :: From :: Region: $_GLOBAL_REMOTE_SERVER_LOCATION_REGION
* Architect :: Location :: Connecting Device :: From :: Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS

--------------------------------------------------------------------------
This Web Server :: Information
--------------------------------------------------------------------------
-- Hyper-Text-Transfer-Protocol
* This Web Server :: Machine :: Server :: Hyper-Text-Transfer-Protocol :: Host: $_GLOBAL_LOCAL_SERVER_HTTP_HOST
* This Web Server :: Machine :: Hyper-Text-Transfer-Protocol :: Accept Type: $_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT
* This Web Server :: Machine :: Hyper-Text-Transfer-Protocol :: Character Set: $_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET
* This Web Server :: Machine :: Hyper-Text-Transfer-Protocol :: Encoding: $_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING
* This Web Server :: Machine :: Hyper-Text-Transfer-Protocol :: Loading Type: $_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING
* This Web Server :: Machine :: Hyper-Text-Transfer-Protocol :: Language: $_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE

-- Network
* This Web Server :: Machine :: Network :: Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS
* This Web Server :: Machine :: Network :: Internet Protocol Address :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT
* This Web Server :: Machine :: Network :: Gateway Interface: $_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE

-- Software
* This Web Server :: Machine :: Software: $_GLOBAL_LOCAL_SERVER_SOFTWARE

-- Request
* This Web Server :: Machine :: Server :: Request Time: $_GLOBAL_LOCAL_SERVER_REQUEST_TIME
* This Web Server :: Machine :: Server :: Request Time ( Float ): $_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT
* This Web Server :: Machine :: Server :: Document Root: $_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT

---------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------
* Timestamp :: This Web Server :: Year: $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL
* Timestamp :: This Web Server :: Month: $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL
* Timestamp :: This Web Server :: Day: $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL
* Timestamp :: This Web Server :: Hour: $_GLOBAL_LOCAL_SERVER_TIME_HOURS
* Timestamp :: This Web Server :: Minute: $_GLOBAL_LOCAL_SERVER_TIME_MINUTES
* Timestamp :: This Web Server :: Second: $_GLOBAL_LOCAL_SERVER_TIME_SECONDS

* Timestamp :: Connecting Device :: Year: $_GLOBAL_REMOTE_SERVER_DATE_NUMERICAL_YEAR_FULL
* Timestamp :: Connecting Device :: Month: $_GLOBAL_REMOTE_SERVER_DATE_NUMERICAL_MONTH_FULL
* Timestamp :: Connecting Device :: Day: $_GLOBAL_REMOTE_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL
* Timestamp :: Connecting Device :: Hour: $_GLOBAL_REMOTE_SERVER_TIME_HOURS
* Timestamp :: Connecting Device :: Minute: $_GLOBAL_REMOTE_SERVER_TIME_MINUTES
* Timestamp :: Connecting Device :: Second: $_GLOBAL_REMOTE_SERVER_TIME_SECONDS

* Timestamp :: This Web Server :: Unix-Time: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX
* Timestamp :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX
* Timestamp :: Connecting Device :: Unix-Time: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX
* Timestamp :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX
";

/*
 ============================================================================================================
 + Write To File :: Activity Log :: Interaction Details
 ============================================================================================================
*/

fwrite($_ARCHITECT_LOG_INTERACTION_LOG_OPEN_FILE_NAME, "$_ARCHITECT_LOG_INTERACTION_LOG_DATA");

/*
 ============================================================================================================
 + Close :: Architect :: Activity Log :: Interaction Log File
 ============================================================================================================
*/

fclose($_ARCHITECT_LOG_INTERACTION_LOG_OPEN_FILE_NAME);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Installation Form :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Installation Form :: Variables :: Post Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Installation Form :: Variables :: Post Variables :: Database Management System Server
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME								= $_POST['Architect_SQL_Database_Server_HostName'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME_PORT							= $_POST['Architect_SQL_Database_Server_HostName_Port'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME								= $_POST['Architect_SQL_Database_Server_UserName'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD								= $_POST['Architect_SQL_Database_Server_Password'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME							= $_POST['Architect_SQL_Database_Server_Database_Name'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX					= $_POST['Architect_SQL_Database_Server_Database_Name_Table_Prefix'];
$_ARCHITECT_INSTALL_FORM_POST_PHP_ENGINE_VERSION								= $_POST['Architect_PHP_Engine_Version'];
$_ARCHITECT_INSTALL_FORM_POST_SQL_ENGINE_VERSION								= $_POST['Architect_SQL_Engine_Version'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR					= $_POST['Architect_Electronic_Mail_Address_System_Administrator'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT						= $_POST['Architect_Electronic_Mail_Address_System_Root'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES						= $_POST['Architect_Electronic_Mail_Address_System_Services'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_STATUS_PGP_ELECTRONIC_MAIL_MESSAGE			= $_POST['Architect_System_Services_Encryption_Status_PGP_Electronic_Mail_Message'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC		= $_POST['Architect_System_Services_Encryption_Electronic_Mail_Message_PGP_Key_Panel_Public'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE									= $_POST['Architect_URL_Secure'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL									= $_POST['Architect_URL_Secure_SSL'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL_CUSTOM								= $_POST['Architect_URL_Secure_SSL_Custom'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL_OPENSSL								= $_POST['Architect_URL_Secure_SSL_OpenSSL'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS									= $_POST['Architect_URL_Secure_TLS'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS_CUSTOM								= $_POST['Architect_URL_Secure_TLS_Custom'];
$_ARCHITECT_INSTALL_FORM_POST_URL_CLEARTEXT									= $_POST['Architect_URL_ClearText'];
$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_APPLICATIONS							= $_POST['Architect_URL_GIT_Repository_Applications'];
$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_KERNEL								= $_POST['Architect_URL_GIT_Repository_Kernel'];
$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_PLUGINS							= $_POST['Architect_URL_GIT_Repository_PlugIns'];
$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_THEMES								= $_POST['Architect_URL_GIT_Repository_Themes'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_PASSWORD_MAINTENANCE							= $_POST['Architect_System_Password_Maintenance'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_PASSWORD_MAINTENANCE_HASHED						= hash('sha256', $_ARCHITECT_INSTALL_FORM_POST_SYSTEM_PASSWORD_MAINTENANCE);

/*
 ============================================================================================================
 + Installation Form :: Install Database :: Tables :: Variables :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME				= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_HostName'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME_PORT			= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_HostName_Port'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_USERNAME				= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_UserName'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_PASSWORD				= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_Password'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_NAME			= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_Database_Name'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX		= $_POST['Architect_Install_SQL_Database_Server_Database_Tables_Connect_Database_Table_Prefix'];

/*
 ============================================================================================================
 + Installation Form :: Install Database :: Name :: Variables :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_HOSTNAME				= $_POST['Architect_Install_SQL_Database_Server_Database_Name_Connect_HostName'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_HOSTNAME_PORT			= $_POST['Architect_Install_SQL_Database_Server_Database_Name_Connect_HostName_Port'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_USERNAME				= $_POST['Architect_Install_SQL_Database_Server_Database_Name_Connect_UserName'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_PASSWORD				= $_POST['Architect_Install_SQL_Database_Server_Database_Name_Connect_Password'];
$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CREATE_DATABASE_NAME			= $_POST['Architect_Install_SQL_Database_Server_Database_Name_Create'];

/*
 ============================================================================================================
 + Retrieve :: File Contents From :: Variables :: System Files
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_INSTALLATION_ARCHITECT					= file_get_contents("./$_INTERNAL_FILE_ARCHITECT");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_CONFIGURATION						= file_get_contents("./System/Configuration/Global_Configuration.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_STANDARD			= file_get_contents("./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_IMPROVED			= file_get_contents("./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Improved.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_KERNEL							= file_get_contents("./$_INTERNAL_FILE_KERNEL");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_SECURITY_MASTER_SANITIZATION				= file_get_contents("./System/Security/Module/Sanitization/Default/Sanitization.cerberus");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_LOG_FILE_INTERACTION_LOG						= file_get_contents("$_ARCHITECT_LOG_INTERACTION_LOG_FIND_FILE_NAME");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Background
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001						= hash_file('sha256', "./Applications/Background/Log_Administration");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002						= hash_file('sha256', "./Applications/Background/Log_Background");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003						= hash_file('sha256', "./Applications/Background/Log_Member");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004						= hash_file('sha256', "./Applications/Background/Log_Visitor");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Panel
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001							= hash_file('sha256', "./Applications/Panel/Applications_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002							= hash_file('sha256', "./Applications/Panel/Clock.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003							= hash_file('sha256', "./Applications/Panel/Language.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004							= hash_file('sha256', "./Applications/Panel/Latest_Articles.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005							= hash_file('sha256', "./Applications/Panel/Latest_Files.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006							= hash_file('sha256', "./Applications/Panel/Latest_Members.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007							= hash_file('sha256', "./Applications/Panel/Latest_Shouts.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008							= hash_file('sha256', "./Applications/Panel/Live_Video.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009							= hash_file('sha256', "./Applications/Panel/Location.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010							= hash_file('sha256', "./Applications/Panel/Member_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011							= hash_file('sha256', "./Applications/Panel/Networking.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012							= hash_file('sha256', "./Applications/Panel/Project_Badges.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013							= hash_file('sha256', "./Applications/Panel/RSS_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_014							= hash_file('sha256', "./Applications/Panel/Theme.panel");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Services Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001				= hash_file('sha256', "./Applications/Services/Commander");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002				= hash_file('sha256', "./Applications/Services/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003				= hash_file('sha256', "./Applications/Services/Integrity");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004				= hash_file('sha256', "./Applications/Services/Kernel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005				= hash_file('sha256', "./Applications/Services/Loops");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006				= hash_file('sha256', "./Applications/Services/Services");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007				= hash_file('sha256', "./Applications/Services/Tasks");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001					= hash_file('sha256', "./Applications/Root/Tasks");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001						= hash_file('sha256', "./Applications/Administration/Accounts");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002						= hash_file('sha256', "./Applications/Administration/Applications");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003						= hash_file('sha256', "./Applications/Administration/Archive");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004						= hash_file('sha256', "./Applications/Administration/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005						= hash_file('sha256', "./Applications/Administration/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006						= hash_file('sha256', "./Applications/Administration/File_Categories");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007						= hash_file('sha256', "./Applications/Administration/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008						= hash_file('sha256', "./Applications/Administration/GIT");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009						= hash_file('sha256', "./Applications/Administration/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010						= hash_file('sha256', "./Applications/Administration/Networking");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011						= hash_file('sha256', "./Applications/Administration/Panels");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012						= hash_file('sha256', "./Applications/Administration/PHP_Information.php");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013						= hash_file('sha256', "./Applications/Administration/PlugIns");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014						= hash_file('sha256', "./Applications/Administration/Publish");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015						= hash_file('sha256', "./Applications/Administration/Ranks");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016						= hash_file('sha256', "./Applications/Administration/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017						= hash_file('sha256', "./Applications/Administration/Robot_Monitor");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018						= hash_file('sha256', "./Applications/Administration/Settings");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019						= hash_file('sha256', "./Applications/Administration/Submissions");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020						= hash_file('sha256', "./Applications/Administration/Terminal");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_021						= hash_file('sha256', "./Applications/Administration/Themes");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_022						= hash_file('sha256', "./Applications/Administration/Update");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_023						= hash_file('sha256', "./Applications/Administration/Web_Pages");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Member
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001							= hash_file('sha256', "./Applications/Member/Account_Data");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002							= hash_file('sha256', "./Applications/Member/Account_Recovery");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003							= hash_file('sha256', "./Applications/Member/Active_Members");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004							= hash_file('sha256', "./Applications/Member/All_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005							= hash_file('sha256', "./Applications/Member/All_Shouts");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006							= hash_file('sha256', "./Applications/Member/Application_List");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007							= hash_file('sha256', "./Applications/Member/Articles");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008							= hash_file('sha256', "./Applications/Member/Calculator");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009							= hash_file('sha256', "./Applications/Member/Calendar");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010							= hash_file('sha256', "./Applications/Member/Clock");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011							= hash_file('sha256', "./Applications/Member/Comment");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012							= hash_file('sha256', "./Applications/Member/Contact_Administrator");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013							= hash_file('sha256', "./Applications/Member/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014							= hash_file('sha256', "./Applications/Member/Devices");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015							= hash_file('sha256', "./Applications/Member/Documentation");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016							= hash_file('sha256', "./Applications/Member/Download");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017							= hash_file('sha256', "./Applications/Member/Electronic_Mail");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018							= hash_file('sha256', "./Applications/Member/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019							= hash_file('sha256', "./Applications/Member/Files");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020							= hash_file('sha256', "./Applications/Member/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021							= hash_file('sha256', "./Applications/Member/Forward");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022							= hash_file('sha256', "./Applications/Member/Friend");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023							= hash_file('sha256', "./Applications/Member/Language");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024							= hash_file('sha256', "./Applications/Member/Legal");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025							= hash_file('sha256', "./Applications/Member/Lightning_Calculate");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026							= hash_file('sha256', "./Applications/Member/List");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027							= hash_file('sha256', "./Applications/Member/Login");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028							= hash_file('sha256', "./Applications/Member/Market");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029							= hash_file('sha256', "./Applications/Member/Media_Player");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030							= hash_file('sha256', "./Applications/Member/Member_Directory");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031							= hash_file('sha256', "./Applications/Member/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032							= hash_file('sha256', "./Applications/Member/News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033							= hash_file('sha256', "./Applications/Member/Notepad");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034							= hash_file('sha256', "./Applications/Member/Pages");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035							= hash_file('sha256', "./Applications/Member/Profile");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036							= hash_file('sha256', "./Applications/Member/Recommendations");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037							= hash_file('sha256', "./Applications/Member/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038							= hash_file('sha256', "./Applications/Member/Register");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039							= hash_file('sha256', "./Applications/Member/Reset_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040							= hash_file('sha256', "./Applications/Member/Search");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041							= hash_file('sha256', "./Applications/Member/System");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042							= hash_file('sha256', "./Applications/Member/Submit_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043							= hash_file('sha256', "./Applications/Member/System_Message");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044							= hash_file('sha256', "./Applications/Member/Theme");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045							= hash_file('sha256', "./Applications/Member/Travel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046							= hash_file('sha256', "./Applications/Member/Update_Account");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047							= hash_file('sha256', "./Applications/Member/Update_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048							= hash_file('sha256', "./Applications/Member/Upload");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_049							= hash_file('sha256', "./Applications/Member/VoIP");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_050							= hash_file('sha256', "./Applications/Member/Webspace");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Kernel :: File
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_KERNEL_FILE									= hash_file('sha256', "./$_INTERNAL_FILE_KERNEL");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Theme Settings
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + File Inclusion :: Theme :: Theme Settings File
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System Settings Defined Theme
 ============================================================================================================
*/

include_once ("./Theme/Global/Theme.php");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document :: Data Generation :: Start
 +
 +
 ============================================================================================================
*/

echo ("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Architect => Installation Process</TITLE>
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		<LINK REL=\"stylesheet\" HREF=\"./Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<Link REL=\"shortcut icon\" HREF=\"./Theme/Global/Image/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
	</HEAD>

	<BODY>
		<TABLE WIDTH=\"100%\"><TR><TD VALIGN=\"top\">
");

/*
 ============================================================================================================
 + IF: Installation Form :: Has Not Executed :: Display Installation Form
 ============================================================================================================
*/

if (!$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME) {

echo ("
		<HR><CENTER><BIG><B>[ <A HREF=\"../Documentation/Manuals/Hyper-Text-Markup-Language/Installation.html\" TARGET=\"_NEW\" TITLE=\":: Open & Read :: The :: $_PROJECT_STRING_NAME_EXTENDED Architect Installation Documentation File ::\">Architect Installation Documentation</A> ]</B></BIG></CENTER><HR>
		<BR>

		<IMG SRC=\"./Theme/Global/Image/Icon_Architect/Compass.png\" WIDTH=\"125\" HEIGHT=\"125\" TITLE=\":: Architect :: Compass ::\"></IMG>

		<FORM ACTION=\"?\" METHOD=\"post\">
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Database Management System Server :: Connection
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Database Management System Server :: Connection :: Host-Name</I>:<BR>
		[ Example: <I>Usually, 'localhost'</I> ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_HostName\" VALUE=\"localhost\"><BR><BR>

		* <I>Database Management System Server :: Connection :: Host-Name Port</I>:<BR>
		[ Example: <I>Usually, '3306'</I> ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_HostName_Port\" VALUE=\"3306\"><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* Settings :: Database Management System Server :: Database
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Database Management System Server :: Database :: Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_Database_Name\"><BR><BR>

		* <I>Database Management System Server :: Database :: Database Table' Prefix Name</I>:<BR>
		[ Example: <I>'MySQLDatabaseTables'</I> ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_Database_Name_Table_Prefix\" VALUE=\"$_PROJECT_STRING_NAME_SHORT\"><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Database Management System Server :: Credentials
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Database Management System Server :: Credentials :: User-Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_UserName\"><BR><BR>

		* <I>Database Management System Server :: Credentials :: Password</I>:<BR>
			<INPUT TYPE=\"password\" NAME=\"Architect_SQL_Database_Server_Password\"><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Pre-Hyper-Text-Post-Processor Engine
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Pre-Hyper-Text-Post-Processor Engine Version Number</I>:<BR>
			<SELECT NAME=\"Architect_PHP_Engine_Version\">
				<OPTION VALUE=\"4\">PHP Version - 4</OPTION>
				<OPTION VALUE=\"5\">PHP Version - 5</OPTION>
				<OPTION VALUE=\"7\">PHP Version - 7</OPTION>
				<OPTION VALUE=\"8\">PHP Version - 8</OPTION>
				<OPTION VALUE=\"9\">PHP Version - 9</OPTION>
			</SELECT><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Structured-Query-Language Engine
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Structured-Query-Language Engine Version Number</I>:<BR>
			<SELECT NAME=\"Architect_SQL_Engine_Version\">
				<OPTION VALUE=\"0\">Standard - MySQL</OPTION>
				<OPTION VALUE=\"1\">Improved - MySQL</OPTION>
				<OPTION VALUE=\"2\">Standard - MSQL</OPTION>
				<OPTION VALUE=\"3\">Standard - MiniSQL</OPTION>
				<OPTION VALUE=\"4\">Standard - PDO</OPTION>
			</SELECT><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Encryption :: System Messages
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Enable or Disable System-Level Electronic Mail Message Pretty-Good-Privacy Encryption Now ? </I>:<BR>
			<SELECT NAME=\"Architect_System_Services_Encryption_Status_PGP_Electronic_Mail_Message\">
				<OPTION VALUE=\"1\">On</OPTION>
				<OPTION VALUE=\"0\">Off</OPTION>
			</SELECT><BR>
			System-Level Pretty-Good-Privacy Public Key Panel:<BR>
			<TEXTAREA ROWS=\"20\" COLS=\"150\" NAME=\"Architect_System_Services_Encryption_Electronic_Mail_Message_PGP_Key_Panel_Public\" MAXLENGTH=\"4096\">Paste-In The Public Pretty-Good-Privacy Key Panel Here... Maximum Panel Length: 4096 BITS / Characters With Panel Armor.</TEXTAREA><BR><BR>

		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Electronic Mail Address
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Web Server Administrator Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Administrator\"><BR><BR>

		* <I>System Services-Root Administrator Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Root\"><BR><BR>

		* <I>System Background-Services Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Services\"><BR><BR>
			
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: System Hyper-Text-Transfer-Protocol :: Uniform-Resource-Location :: Kernel File Directory
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Encrypted :: General :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: SECURE.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure\"><BR><BR>

		* <I>Encrypted :: Secure Socket Layer :: SSL :: Standard :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: SSL.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_SSL\"><BR><BR>

		* <I>Encrypted :: Secure Socket Layer :: SSL :: CustomSSL :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: SSL.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_SSL_Custom\"><BR><BR>

		* <I>Encrypted :: Secure Socket Layer :: SSL :: OpenSSL :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: OPENSSL.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_SSL_OpenSSL\"><BR><BR>

		* <I>Encrypted :: Transport Layer Security :: TLS :: Standard :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: TLS.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_TLS\"><BR><BR>

		* <I>Encrypted :: Transport Layer Security :: TLS :: Custom :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: TLS.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_TLS_Custom\"><BR><BR>

		* <I>Non-Encrypted :: Clear-Text :: Uniform Resource Location With Path-To-Kernel Directory</I>:<BR>
		Example: http://www.WEBSERVERURL.COM<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_ClearText\"><BR><BR>
			
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Hyper-Text-Transfer-Protocol :: Uniform-Resource-Location :: GIT :: Master GIT Repository
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
			
		* <I>GIT :: Repository :: Uniform-Resource-Location With Path-To-Directory :: Applications</I>:<BR>
		Example: http://www.GITWebServer.com/RepositoryName/Version Number/Edit Number/Manual Edit Number/Applications<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_GIT_Repository_Applications\"><BR><BR>
			
		* <I>GIT :: Repository :: Uniform-Resource-Location With Path-To-Directory :: Kernel</I>:<BR>
		Example: http://www.GITWebServer.com/RepositoryName/Version Number/Edit Number/Manual Edit Number/System/Kernel/Version<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_GIT_Repository_Kernel\"><BR><BR>

		* <I>GIT :: Repository :: Uniform-Resource-Location With Path-To-Directory :: Plug-Ins</I>:<BR>
		Example: http://www.GITWebServer.com/RepositoryName/Version Number/Edit Number/Manual Edit Number/System/Plug-Ins<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_GIT_Repository_PlugIns\"><BR><BR>

		* <I>GIT :: Repository :: Uniform-Resource-Location With Path-To-Directory :: Themes</I>:<BR>
		Example: http://www.GITWebServer.com/RepositoryName/Version Number/Edit Number/Manual Edit Number/Themes<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_GIT_Repository_Themes\"><BR><BR>
			
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Settings :: Maintenance
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		* <I>Password :: Maintenance</I>:<BR>
		Note: <I>The Maintenance Password Is Used To Initiate Automated System Repair and Automated System Maintenance From The Maintenance Application</I><BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_System_Password_Maintenance\"><BR>
			
			<INPUT TYPE=\"submit\" VALUE=\"Start Installation\">
		</FORM><BR><BR>

		* <I>Current Kernel File :: $_INTERNAL_FILE_KERNEL</I><BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_KERNEL</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Configuration File</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_CONFIGURATION</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Database Server Class File For My-Structured-Query-Language :: Standard Driver</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_STANDARD</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Database Server Class File For My-Structured-Query-Language :: Improved Driver</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_IMPROVED</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Master Sanitization Security Module</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_SECURITY_MASTER_SANITIZATION</TEXTAREA>
		</FORM><BR><BR>

		* <I>Architect :: Log :: Interaction Log</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_LOG_FILE_INTERACTION_LOG</TEXTAREA>
		</FORM><BR><BR>

		<B>Pre-Installation Notes</B><HR>

		<B>Quick Installation Notes</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		Each Web Server Setup is completely different than every other Web Server Setup depending on how it is Built, Installed, Configured and Setup. Installing this Web Application will require some knowledge of what kind of Web Server it is loaded onto.<BR>
		[&nbsp;*&nbsp;] AAMP :: Apple, Apache, MySQL, PHP<BR>
		[&nbsp;*&nbsp;] BAMP :: BSD, Apache, MySQL, PHP<BR>
		[&nbsp;*&nbsp;] LAMP :: Linux, Apache, MySQL, PHP<BR>
		[&nbsp;*&nbsp;] WAMP :: Windows, Apache, MySQL, PHP<BR><BR>

		The exact process of installing this Web Application is in logical order:<BR>
		1.) This Software Project should be completely unpacked onto the Web Server' Digital Storage Medium.<BR>
		2.) This Software Project' Database Management System Configuration File should be either Configured manually or from this Installation Application.<BR>
		3.) This Software Project' Database Server Database Table Entries should be Generated and then created in the Database Server.<BR>
		3.1) Installing this Software Project' organized Database Server Table Entires requires doing so by either using this Installation Application or by Generating them manually and then copying the generated Table Strings and pasting those strings into the S.Q.L. Manager / Editor.<BR>
		4.) The Database Server Database Table Data should be inserted into the Database Server Database.<BR>
		4.1) Installing this Software Project' organized Database Server Table Entry Data requires doing so by either using this Installation Application or by Generating them manually and then copying the generated Table Data and pasting those strings into the S.Q.L. Manager / Editor.<BR>
		This includes: The Administration Account that is created.<BR><BR>

		Sometimes it is difficult to install anything on a shared hosting Web Server or another kind of Web Server that you do not have physical access to.<BR>
		so in light of those situations: Architect has been designed to split up the installation process of this system to make it easier to install everything either automatically or by installing it manually part by part.<BR><BR>

		<B>Directory and File Permissions Notes</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etcetera. ): See <A HREF=\"https://en.wikipedia.org/wiki/Chmod\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Wikipedia Entry For :: Access Control List / Change-Mode ( CHMOD ) ::\">Change-Mode ( CHMOD )</A> the following<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directories, sub-directories and each file within these directories to the correct read and write file permissions before proceeding with this installation:<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR><BR>

		<B>Overview :: Microsoft &#174; &#8482; Windows &#174; &#8482; Server Operating System</B><BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR><BR>

		<B>Overview :: Berkley Software Development, G.N.U. Not Unix, Linux and Unix Operating Systems</B><BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR><BR>

		<B>Detailed Directory and File Permissions</B><BR>
		Each specific Directory, Sub-Directory and File requires the correct file permissions before installation so as to completely secure the directory and files within that specific directory from writing or uploading to that specific directory.<BR>
		For instance: The ./Applications/Administration/ directory should be set to:<BR>
		Read Directory and Read Files Only :: Upload Not Permitted :: Writing To Existing Files Not Permitted :: Delete / Unlink Not Permitted<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etc. ): Refer to the $_PROJECT_STRING_NAME_EXTENDED Architect Installation Manual for a complete list of file permissions that should be applied to each individual file.<BR><BR>
		[&nbsp;!&nbsp;]&nbsp;This Architect Installation Application is capable of setting the correct file permissions to each directory and file within this system. Click [ <A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Execute The File Permissions Settings Loop ::\">here</A> ] to run the File Permissions Loop.<BR>
		[&nbsp;!&nbsp;]&nbsp;Microsoft Windows Server Users: All of $_PROJECT_STRING_NAME_EXTENDED' Files are set to the 'Read Only' flag by default. In order to install $_PROJECT_STRING_NAME_EXTENDED correctly you must remove the 'Read Only' flag on each file listed in the Architect Installation Walkthrough.<BR>
		[&nbsp;!&nbsp;]&nbsp;If you would like additional security for the Administration Control Panel you will need to configure an <I>.htaccess</I> file and then install that configured <I>.htaccess</I> file into the <I>./Application/Administration/</I> directory before proceeding with this installation.<BR><BR>

		<B>Digital Information Security Notes</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		[&nbsp;!&nbsp;]&nbsp;$_PROJECT_STRING_NAME_EXTENDED' programming code has been tested manually as well as by vulnerability and exploit scanning software<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the entire system has passed checks against all rudimentary vulnerabilities and exploit techniques, such as:<BR><BR>

		<B>Data Sanitization</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic Directory Listing Denial<BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic GET and POST Sanitization<BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic Variable Sanitization<BR><BR>

		<B>Injections</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Structured-Query-Language Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cookie Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Server Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Mixed Information Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Markup-Language Character Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Lightweight Directory Access Protocol Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Programming Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Operating System Command Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Arbitrary Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Site Scripting<BR><BR>

		<B>Information and Data Tampering</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Data Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;Cookie Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;File Swapping<BR>
		[&nbsp;*&nbsp;]&nbsp;Internet Protocol Address Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Transfer-Protocol Verb Tampering<BR><BR>

		<B>Programming Code Execution</B><BR>
		[&nbsp;*&nbsp;]&nbspRemote Code Execution<BR><BR>

		<B>File and Directory Handling</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Local File Inclusion<BR>
		[&nbsp;*&nbsp;]&nbsp;Remote File Inclusion<BR>
		[&nbsp;*&nbsp;]&nbsp;Directory Traversal<BR>
		[&nbsp;*&nbsp;]&nbsp;Fake File Extensions<BR>
		[&nbsp;*&nbsp;]&nbsp;Large File Upload<BR>
		[&nbsp;*&nbsp;]&nbsp;Unrestricted File Upload<BR><BR>

		<B>Buffers</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Buffer Overflow<BR>
		[&nbsp;*&nbsp;]&nbsp;Buffer Underrun<BR>
		[&nbsp;*&nbsp;]&nbsp;Integer Underrun<BR>
		[&nbsp;*&nbsp;]&nbsp;Integer Overflow<BR><BR>

		<B>Web Server Origins</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Request Forgery<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Site Request Forgery<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Origin Resources<BR><BR>

		<B>Configurations</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Security Misconfigurations<BR><BR>

		<B>Extensible Markup Language</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Extensible Markup Language External Entity Processing<BR>
		[&nbsp;*&nbsp;]&nbsp;Extensible Markup Language External Entities<BR><BR>

		<B>Password Storage</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Password Decryption<BR><BR>

		<B>Data Exfiltration</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Data Mining and Exfiltration<BR>
		[&nbsp;*&nbsp;]&nbsp;Encapsulation<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Uniform-Resource-Location Poisoning<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Transfer-Protocol Response Splitting<BR><BR>

		<B>Data Storage</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Cryptographic Storage<BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Digest<BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Direct Object Referencing<BR>
		[&nbsp;*&nbsp;]&nbsp;Sensitive Data Exposure<BR><BR>

		<B>Denial of Service</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through RAW Connection<BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through Ping<BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through Hyper-Text-Transfer-Protocol Code<BR><BR>

		<B>List of Digital Vulnerability Scanning Software Used</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Acunetix<BR>
		[&nbsp;*&nbsp;]&nbsp;beSecure<BR>
		[&nbsp;*&nbsp;]&nbsp;Burp Suite<BR>
		[&nbsp;*&nbsp;]&nbsp;Nessus<BR>
		[&nbsp;*&nbsp;]&nbsp;NMap<BR>
		[&nbsp;*&nbsp;]&nbsp;METASploit<BR><BR>

		<B>List of Programming Code Vulnerability Scanning Software Used</B><BR>
		[&nbsp;*&nbsp;]&nbsp;CodeHax<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;Keep this server software, this server operating system kernels and its applications up-to-date as well as set server security policies that comply with security standards to prevent any exploitation of the data on this server.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is up to the Administrator of this Web Server that is running $_PROJECT_STRING_NAME_EXTENDED to install $_PROJECT_STRING_NAME_EXTENDED correctly by following each of the important steps stated above<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as well as all of the steps outlined in the documentation file for this project - not doing so may leave the Internal System open to attacks. Double check the steps before proceeding.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;This Installation Application has not been secured from vulnerabilities. Do not leave this Installation Web Application on a live server for longer than is needed to install $_PROJECT_STRING_NAME_EXTENDED.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;If you are unable to install the Structured-Query-Language Tables automatically by this application, click [ <A HREF=\"./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/MySQL_Generator.php\" TITLE=\":: Open & Display The Structured-Query-Language Data Generator Application ::\" TARGET=\"_NEW\">here</A> ] to manually generate the S.Q.L. Structure and S.Q.L. Data.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once the Structured-Query-Language Table Structure and its data is generated correctly, copy the Structured-Query-Language Tables with generated Table Prefix Name and then manually paste the generated Structured-Query-Language Data Structure into your server Structured-Query-Language Manager / Editor.<BR><BR>

		<B>Tools :: Pre-Installation</B><HR>
		<B>Tools :: Pre-Installation :: Database Management System Server :: Database</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Database\" TARGET=\"_NEW\" TITLE=\":: Open & Display ::The Internal Application :: Structured-Query-Language Database Installer ::\">Installer :: Automatic :: Structured-Query-Language Database Server :: Database</A><BR><BR>
		
		<B>Tools :: Pre-Installation :: Database Management System Server :: Table Structure</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_DatabaseTableStructure\" TARGET=\"_NEW\" TITLE=\":: Open & Display ::The Internal Application :: Structured-Query-Language Database Table Installer ::\">Installer :: Automatic :: Structured-Query-Language Database Server :: Table Structure</A><BR>
		=>&nbsp;<A HREF=\"./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/MySQL_Generator.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display :: The Internal Application :: Structured-Query-Language Database Table Structure Generator ::\">Installer :: Manual :: Generate :: Structured-Query-Language Database Server :: Table Structure</A><BR><BR>

		<B>Tools :: Pre-Installation :: Database Management System Server :: Database Data</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Defaults\" TARGET=\"_NEW\" TITLE=\":: Open & Display :: The Installer :: Administration Account & Default Database Management System Server Database Data ::\">Installer :: Automatic :: Administration Account and Database Management System Server Database Data</A><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Administration\" TARGET=\"_NEW\" TITLE=\":: Open & Display :: The Installer :: Administration Account Installer ::\">Installer :: Automatic :: Administration Account</A><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_DatabaseData\" TARGET=\"_NEW\" TITLE=\":: Open & Display :: The Installer :: Default Database Management System Server Database Data ::\">Installer :: Automatic :: Default Database Management System Server Database Data</A><BR><BR>

		<B>ToolKits</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/Installation_ToolKit.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Pre-Installation ToolKit ::\">ToolKit :: Pre-Installation</A><BR><BR>

		<B>Files :: Integrity</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"?InternalApplication&#61;File_Integrity\" TITLE=\":: Open & Display :: The Internal Application :: File Integrity ::\">File Integrity :: Application Modules</A><BR><BR>

		<B>Files :: Permissions</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Open & Display :: The Internal Application :: Change-Mode ( CHMOD ) File Permissions Loop ::\">Permissions Loops :: Directories</A><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Open & Display :: The Internal Application :: Change-Mode ( CHMOD ) File Permissions Loop ::\">Permissions Loops :: Files</A><BR><BR>

		<B>Diagnostics</B>
		<HR ALIGN=\"LEFT\" WIDTH=\"20%\">
		=>&nbsp;<A HREF=\"./Maintenance/Diagnostics/$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS\" TARGET=\"_NEW\" TITLE=\":: Open & Display The System Diagnostics Application ::\">System Diagnostics :: Application</A><BR><BR>

		<B>Server Software, Server Software Engine Versions and Extended Information</B><HR>
		<B>Detailed Server Software and User-Interface Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;ServerSoftware_Information\" TITLE=\":: Display Detailed Information About What Server Software Versions Are Currently Running On This Web Server ::\">Information About What Server Software Versions Are Currently Running On This Web Server</A><BR><BR>

		<B>$_PROJECT_STRING_NAME_EXTENDED Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;SoftwareProject_Information\" TITLE=\":: Display Detailed Information About What $_PROJECT_STRING_NAME_EXTENDED Version Is Currently Running On This Web Server ::\">Information About What $_PROJECT_STRING_NAME_EXTENDED Version Is Currently Running On This Web Server</A><BR><BR>
		
		<B>Pre-Hyper-Text-Post-Processor ( P.H.P. ) Parser, Interpreter & Zend Engine Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Information\" TITLE=\":: View Detailed Information About What Pre-Hyper-Text-Post-Processor Parser Version Number & Zend Engine Version Number Is Currently Running On This Web Server ::\">Information About What P.H.P. Parser Version Number & Zend Engine Version Number Is Currently Running On This Web Server</A></B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Extensions\" TITLE=\":: View Detailed Information About What Pre-Hyper-Text-Post-Processor Server Extensions Are Currently Loaded On This Pre-Hyper-Text-Post-Processor Engine Running On This Web Server ::\">Information About What Extensions Are Currently Loaded On This Executed P.H.P. Engine</A></B><BR><BR>

		<B>Internal Documents</B><HR>
		=>&nbsp;<A HREF=\"About.txt\" TITLE=\":: Open & Display The About File ::\">About</A><BR>
		=>&nbsp;<A HREF=\"Bug_Tracker.txt\" TITLE=\":: Open & Display The Bug Tracker File ::\">Bug Tracker</A><BR>
		=>&nbsp;<A HREF=\"Change-Log.txt\" TITLE=\":: Open & Display The Change Log File ::\">Change Log</A><BR>
		=>&nbsp;<A HREF=\"File-List.txt\" TITLE=\":: Open & Display The File List Document - This Document Was Generated By The Programmers of $_PROJECT_STRING_NAME_EXTENDED, It Shows Detailed File and Directory Listings, Progress Reports On Files Within The Default $_PROJECT_STRING_NAME_EXTENDED Releases ::\">File List</A><BR>
		=>&nbsp;<A HREF=\"License.txt\" TITLE=\":: Open & Display The License File ::\">License</A><BR>
		=>&nbsp;<A HREF=\"Project-Scores.txt\" TITLE=\":: Open & Display The License File ::\">Project Scores</A><BR>
		=>&nbsp;<A HREF=\"Read_Me.txt\" TITLE=\":: Open & Display The Read Me File ::\">Read Me</A><BR>
		=>&nbsp;<A HREF=\"Security.txt\" TITLE=\":: Open & Display The Security Notes File ::\">Security Notes</A><BR>
		=>&nbsp;<A HREF=\"Software-Valuation.txt\" TITLE=\":: Open & Display The Security Notes File ::\">Software Valuation</A><BR>
		=>&nbsp;<A HREF=\"To-Do.txt\" TITLE=\":: Open & Display The To-Do Notes File ::\">To-Do Notes</A><BR>
		=>&nbsp;<A HREF=\"Version.txt\" TITLE=\":: Open & Display The Version Notes File ::\">Version Notes</A><BR>
		=>&nbsp;<A HREF=\"Vulnerabilities.txt\" TITLE=\":: Open & Display The Version Notes File ::\">Vulnerabilities</A><BR><BR>

		<B>Hand Update and Configure These Specific Documents Before Proceeeding With This Installation:</B><BR>
		=>&nbsp;<A HREF=\"robots.txt\" TITLE=\":: Open & Display The Robots File ::\">Robots</A><BR>
		=>&nbsp;<A HREF=\"TOS-PP.txt\" TITLE=\":: Open & Display The Terms of Service & Privacy Policy File ::\">Terms of Service & Privacy Policy</A><BR><BR>
");

} else {

/*
 ============================================================================================================
 + Delete :: Original System Database Server Connection Configuration File
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Deleting Original System Configuration File...<BR>");

		unlink("./System/Configuration/Global_Server_Configuration.php");
		copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./System/Configuration/Global_Server_Configuration.php");
		unlink("./System/Configuration/Global_Server_Configuration.php");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Creating New System Configuration File With Installer Specifications...<BR>");

/*
 ============================================================================================================
 + Create :: New System Database Server Connection Configuration File
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Define :: New System Database Server Connection Configuration File Variables
 ============================================================================================================
*/

$_SYSTEM_CONFIGURATION_ACCESS_FILE_FILENAME						= "./System/Configuration/Global_Server_Configuration.php";
$_SYSTEM_CONFIGURATION_ACCESS_FILE_DATA							= "<?php
\$_ACCESS_DATABASE_SERVER_HOSTNAME 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME\";
\$_ACCESS_DATABASE_SERVER_HOSTNAME_PORT							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME_PORT\";
\$_ACCESS_DATABASE_SERVER_USERNAME 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME\";
\$_ACCESS_DATABASE_SERVER_PASSWORD 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD\";
\$_ACCESS_DATABASE_SERVER_DATABASE_NAME 						= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME\";
\$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 					= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX\";
\$_ACCESS_PHP_ENGINE_VERSION								= \"$_ARCHITECT_INSTALL_FORM_POST_PHP_ENGINE_VERSION\";
\$_ACCESS_SQL_ENGINE_VERSION								= \"$_ARCHITECT_INSTALL_FORM_POST_SQL_ENGINE_VERSION\";
\$_ACCESS_URL_CLEARTEXT 								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_CLEARTEXT\";
\$_ACCESS_URL_SECURE									= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE\";
\$_ACCESS_URL_SECURE_SSL								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL\";
\$_ACCESS_URL_SECURE_SSL_CUSTOM								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL_CUSTOM\";
\$_ACCESS_URL_SECURE_SSL_OPENSSL							= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL_OPENSSL\";
\$_ACCESS_URL_SECURE_TLS								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS\";
\$_ACCESS_URL_SECURE_TLS_CUSTOM								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS_CUSTOM\";
\$_ACCESS_URL_GIT_REPOSITORY_APPLICATIONS						=\"$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_APPLICATIONS\";
\$_ACCESS_URL_GIT_REPOSITORY_KERNEL							=\"$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_KERNEL\";
\$_ACCESS_URL_GIT_REPOSITORY_PLUGINS							=\"$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_PLUGINS\";
\$_ACCESS_URL_GIT_REPOSITORY_THEMES							=\"$_ARCHITECT_INSTALL_FORM_POST_URL_GIT_REPOSITORY_THEMES\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR					= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT						= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES					= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES\";
\$_SYSTEM_SETTINGS_STATUS_ENCRYPTION_PGP_ELECTRONIC_MAIL_MESSAGE			= \"$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_STATUS_PGP_ELECTRONIC_MAIL_MESSAGE\";
\$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC		= \"$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC\";
\$_SYSTEM_SETTINGS_PASSWORD_MAINTENANCE							= \"$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_PASSWORD_MAINTENANCE_HASHED\";
?>";

/*
 ============================================================================================================
 + Write :: Data To New System Configuration File
 ============================================================================================================
*/

$_OPEN_ACCESS_FILE_FILENAME 								= fopen($_SYSTEM_CONFIGURATION_ACCESS_FILE_FILENAME, "w");

fwrite($_OPEN_ACCESS_FILE_FILENAME, "$_SYSTEM_CONFIGURATION_ACCESS_FILE_DATA");
fclose($_OPEN_ACCESS_FILE_FILENAME);

echo ("
								<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT>&nbsp;Configuration Files Created !<BR><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_DatabaseTableStructure\" TITLE=\":: Create Structured-Query-Language Database Management System Server Database Table Stucture ::\">Create Structured-Query-Language Database Management System Server Database Table Stucture</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Defaults\" TITLE=\":: Install Administration Account ::\">Install Administration Account</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Unlink and Secure-Delete All Installation Files ::\">Skip To Removing The Installation Files Without Installing The Administration Account</A>
");

} // [ + ] IF: Installation Variables Have Executed

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Application: Install :: Database Management System Server :: Database
 +
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "Install_Database") {

if (!$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_HOSTNAME) {

echo ("
		Install The Structured-Query-Language Database Server Tables<BR>
		<FORM ACTION=\"?InternalApplication&#61;Install_Database\" METHOD=\"post\">
		Database Management System Server Connection :: Settings<HR>
		* <I>Database Management System Server :: Database :: Host-Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Name_Connect_HostName\" VALUE=\"localhost\"><BR>
		* <I>Database Management System Server :: Database :: Host-Name :: Port Number</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Name_Connect_HostName_Port\" VALUE=\"3306\"><BR>
		* <I>Database Management System Server :: UserName</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Name_Connect_UserName\" VALUE=\"Database Server UserName\"><BR>
		* <I>Database Management System Server :: Password</I>:<BR>
			<INPUT TYPE=\"PASSWORD\" NAME=\"Architect_Install_SQL_Database_Server_Database_Name_Connect_Password\" VALUE=\"Database Server Password\"><BR>
		* <I>Database Management System Server :: Database :: Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Name_Create\" VALUE=\"Database Server Database Name\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Install Database\">
		</FORM><BR><BR>
");

} else {

/*
 ============================================================================================================
 + Architect :: Install Database Name :: Connect :: To Specified Database Management System Server
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Defining Database Management System Server Database Variables... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_NAME_CONNECT_INITIALIZE 					= mysqli_connect($_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_HOSTNAME, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_USERNAME, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_PASSWORD);

	echo ("[ Done ]<BR><BR>");
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Attempting Connection To Database Management System Server: Host-Name: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_HOSTNAME With UserName: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_USERNAME AND Password: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CONNECT_PASSWORD ... Wait.<BR>");
	
if ($_ARCHITECT_INSTALLATION_DATABASE_NAME_CONNECT_INITIALIZE) {
	
		echo ("[ Connected ]<BR><BR>");
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Creating Database Name: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CREATE_DATABASE_NAME ... Wait.<BR>");
	
mysqli_query("CREATE DATABASE $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_NAME_CREATE_DATABASE_NAME");
	
	echo ("[ Done ]<BR><BR>");
	
	echo ("Exiting...<BR><BR>");
	
	exit();
	
} // [ + ] IF: Internal Application: Create Database Management System Server :: Database :: Connect :: Database Management System Server

} // [ + ] IF: Internal Application: Create Database Management System Server :: Database :: Input Form Variables :: HAVE Executed

} // [ + ] IF: Internal Application: Create Database Management System Server :: Database :: Is: Activated

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Application: Install :: Database Management System Server :: Database :: Table Structure
 +
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "Install_DatabaseTableStructure") {

if (!$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME) {

echo ("
		Install The Structured-Query-Language Database Server Tables<BR>
		<FORM ACTION=\"?InternalApplication&#61;Install_DatabaseTableStructure\" METHOD=\"post\">
		Database Management System Server :: Connection :: Settings<HR>
		* <I>Database Management System Server :: Database :: Host-Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_HostName\" VALUE=\"localhost\"><BR>
		* <I>Database Management System Server :: Database :: Host-Name :: Port Number</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_HostName_Port\" VALUE=\"3306\"><BR>
		* <I>Database Management System Server :: UserName</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_UserName\" VALUE=\"Database Server UserName\"><BR>
		* <I>Database Management System Server :: Password</I>:<BR>
			<INPUT TYPE=\"PASSWORD\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_Password\" VALUE=\"Database Server Password\"><BR>
		* <I>Database Management System Server :: Database :: Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_Database_Name\" VALUE=\"Database Server Database Name\"><BR>
		* <I>Database Management System Server :: Database :: Name :: Table' Prefix</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Install_SQL_Database_Server_Database_Tables_Connect_Database_Table_Prefix\" VALUE=\"Database Server Database Name Table' Prefix\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Install Database Tables\">
		</FORM><BR><BR>
");

} else {

/*
 ============================================================================================================
 + Architect :: Install Database Data :: Connect :: To Specified Database Management System Server
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Defining Database Management System Server Database Variables... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE 					= new mysqli($_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_USERNAME, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_PASSWORD, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_NAME, $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME_PORT);
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_SELECT_DATABASE_NAME				= $_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->select_db($_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_NAME);

	echo ("[ Done ]<BR><BR>");
	
echo ("
<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Attempting Connection To...<BR>
* Database Management System Server Host-Name: <I>$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME</I> and Database Management System Server Database Name: <I>$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_NAME</I> With Host-Name Port Number: <I>$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_HOSTNAME_PORT</I><BR>
* Credentials Typed Were: UserName: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_USERNAME With Password: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_PASSWORD... Wait.<BR><BR>
");
	
if ($_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE) {
	
	echo ("[ Connected ]<BR><BR>");
	
/*
 ============================================================================================================
 + Architect :: Install Database Data :: Connect :: To Created Database Management System Server Database Name
 ============================================================================================================
*/
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Attempting Connection To Database Management System Server Database Name: <I>$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_NAME</I>... Wait.<BR>");

if ($_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_SELECT_DATABASE_NAME) {
	
	echo ("[ Connected ]<BR><BR>");

/*
 ============================================================================================================
 + Architect :: Install Database Data :: Database Structure
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architect: Installing Structured-Query-Language Database Management System Server Database Table Structure... Wait.<BR>");

/*
 ============================================================================================================
 + Install :: Default S.Q.L. Server Database Tables
 ============================================================================================================
*/

/* Applications :: Non-Registered Visitor and Registered Member Account */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications (
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
)");

/* Applications :: Administration */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_administration<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_administration (
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
)");

/* Applications :: Background */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_background<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_background (
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
)");

/* Custom Applications */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_custom<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
)");

/* Applications :: Root */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_root<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_root (
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
)");

/* Applications :: Services */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_services<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_services (
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
)");

/* Application Panels */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ applications_panel<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_applications_panel (
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
)");

/* Application Links */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ application_links<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
application_link_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
)");

/* Articles */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ articles<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
)");

/* Comments */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ comments<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_comments (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
comment_author VARCHAR(50),
comment_data TEXT,
comment_application_id CHAR(20),
comment_application_name VARCHAR(100),
comment_time VARCHAR(50),
PRIMARY KEY (id)
)");

/* File Categories */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ file_categories<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
)");

/* Files */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ files<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_files (
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
)");

/* Forum */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ forum_forum<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_description TEXT,
forum_timestamp VARCHAR(50),
forum_title VARCHAR(200),
PRIMARY KEY (id)
)");

/* Forum Topics */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ forum_topic<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_forum_topic (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
topic_access_level CHAR(1),
topic_description TEXT,
topic_forum_id CHAR(20),
topic_last_poster CHAR(20),
topic_timestamp VARCHAR(50),
topic_timestamp_last_message VARCHAR(50),
topic_title VARCHAR(200),
PRIMARY KEY (id)
)");

/* Forum Topic Messages */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ forum_topic_message<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_forum_topic_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_access_level CHAR(1),
message_author VARCHAR(50),
message_data TEXT,
message_forum_topic_id CHAR(20),
message_timestamp VARCHAR(50),
message_timestamp_last_update VARCHAR(50),
PRIMARY KEY (id)
)");

/* Kernel */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ kernel<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_kernel (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
kernel_file_date_installation VARCHAR(100),
kernel_file_integrity VARCHAR(512),
kernel_file_name VARCHAR(100),
kernel_file_version VARCHAR(10),
PRIMARY KEY (id)
)");

/* Links */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ links<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
link_author VARCHAR(50),
link_description TEXT,
link_time VARCHAR(50),
link_title VARCHAR(50),
link_url VARCHAR(250),
PRIMARY KEY (id)
)");

/* Registered Member Accounts */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ members<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_members (
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
)");

/* Messenger :: Plain-Text-File Room */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_clear_text_file_room<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_clear_text_file_room (
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
)");

/* Messenger :: Plain-Text S.Q.L. Messages */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_clear_text_messages<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_clear_text_messages (
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
)");

/* Messenger :: Encrypted-Text-File Room */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_encrypted_text_file_room<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_encrypted_text_file_room (
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
)");

/* Messenger :: Encrypted-Text S.Q.L. Messages */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_encrypted_text_messages<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_encrypted_text_messages (
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
)");

/* Messenger :: P2P :: Clear-Text File */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_p2p_clear_text_file_room<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_p2p_clear_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_username_local VARCHAR(100),
messenger_room_username_remote VARCHAR(100),
PRIMARY KEY (id)
)");

/* Messenger :: P2P :: Encrypted-Text File */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_p2p_encrypted_text_file_room<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_messenger_p2p_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_file_size VARCHAR(256),
messenger_room_username_local VARCHAR(100),
messenger_room_username_remote VARCHAR(100),
PRIMARY KEY (id)
)");

/* Networking */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ messenger_networking<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_networking (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
blocked_dns_address_string VARCHAR(250),
blocked_dns_address_text TEXT,
blocked_ip_address_string VARCHAR(250),
blocked_ip_address_text TEXT,
blocked_redirect_url VARCHAR(250),
PRIMARY KEY (id)
)");

/* News Articles */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ news<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_news (
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
)");

/* News Submissions */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ news_submissions<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
)");

/* Notepad */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ notepad<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_notepad (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
note_access_level VARCHAR(50),
note_author VARCHAR(50),
note_data TEXT,
note_encrypted CHAR(1),
note_name VARCHAR(100),
note_password VARCHAR(256),
note_timestamp VARCHAR(50),
PRIMARY KEY (id)
)");

/* Ranks */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ ranks<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_ranks (
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
)");

/* Services Commander */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ services_commander<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_services_commander (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
command_execute VARCHAR(500),
command_receive VARCHAR(500),
command_send VARCHAR(500),
command_timestamp VARCHAR(100),
command_type CHAR(1),
PRIMARY KEY (id)
)");

/* Services Tasks */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ services_tasks<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_services_tasks (
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
)");

/* Settings */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ settings<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_settings (
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
)");

/* Shout Messages */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ shout_messages<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
)");

/* Statistics */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ statistics<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_document_executions_non_unique CHAR(15),
statistics_total_number_of_document_executions_unique CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
)");

/* System Messages */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ system_message<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
system_message_author VARCHAR(50),
system_message_data TEXT,
system_message_member VARCHAR(50),
system_message_timestamp VARCHAR(100),
PRIMARY KEY (id)
)");

		echo ("[ Done ]<BR><BR>");
	
/* Tasks */
	
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Architec: Installing Table: $_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX _ tasks<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("CREATE TABLE {$_ARCHITECT_INSTALL_FORM_POST_INSTALL_DATABASE_SERVER_DATABASE_TABLES_CONNECT_DATABASE_TABLE_PREFIX}_tasks (
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
)");

		echo ("[ Done ]<BR><BR>");
	
		echo ("Exiting...<BR><BR>");

		echo ("[ <A HREF=\"?InternalApplication&#61;Install_Defaults\" TITLE=\":: Install Administration and Default Database Management System Server Database Data ::\">Install Administration Account and Default Database Management System Server Database Data</A> ]<BR>");
	
		exit();
	
} // [ + ] IF: Internal Application: Create Database Management System Server :: Database Tables :: Connect :: Database Management System Server
	
} // [ + ] IF: Internal Application: Create Database Management System Server :: Database Tables :: Connect :: Database Management System Server Database Name

} // [ + ] IF: Internal Application: Create Database Management System Server :: Database Tables :: Input Form Variables :: HAVE Executed

} // [ + ] IF: Internal Application: Create Database Management System Server :: Database Tables :: Is: Activated

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Application: Install Default Data
 +
 +
 ============================================================================================================
*/

if ( $_GET["InternalApplication"] == "Install_Defaults" ) {

/*
 ============================================================================================================
 + Administration Account :: Variables :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS				= $_POST['Architect_Administration_Account_Electronic_Mail_Address'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= $_POST['Architect_Administration_Account_UserName'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1					= $_POST['Architect_Administration_Account_Password_1'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2					= $_POST['Architect_Administration_Account_Password_2'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_BIRTHDATE					= $_POST['Architect_Administration_Account_BirthDate'];

/*
 ============================================================================================================
 + Internal Security => Administration Account :: Variables :: Post Variables :: Electronic Mail Address :: Convert String To LowerCase
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS				= strtolower($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS);

/*
 ============================================================================================================
 + Internal Security => Administration Account :: Variables :: Post Variables :: UserName :: Convert String To LowerCase With UpperCase First Character
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= strtolower($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME);
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= ucfirst($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME);

/*
 ============================================================================================================
 + Internal Security => Administration Account :: Variables :: Password Hashing
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED					= password_hash($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1, PASSWORD_BCRYPT);

/*
 ============================================================================================================
 + IF: Administrator Form Has Not Posted: Display :: Create New Administrator Form
 ============================================================================================================
*/

if ((!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME) || (!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1) || (!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2)) {

echo ("
	<HR><CENTER>Install :: Administration-Level Account</CENTER><HR><BR>
	<FORM ACTION=\"?InternalApplication&#61;Install_Defaults\" METHOD=\"post\">
		Create The Administration Account:<BR>
		It Is Recommended To Use a Random Password Generator and a Password Storage Application Such as KeePass Password Safe<BR>
		<A HREF=\"https://www.KeePass.info/\" TITLE=\":: Open & Display :: The Official KeePass Password Safe Website ::\" TARGET=\"_NEW\">Press or Click Here</A> To Download and Install The KeePass Software Package ]<BR>
			* <I>Administration Account :: Electronic Mail Address</I>:<BR>
	<INPUT TYPE=\"text\" NAME=\"Architect_Administration_Account_Electronic_Mail_Address\" MAXLENGTH=\"100\"><BR>	
	
			* <I>Administration Account :: UserName</I>:<BR>
	<INPUT TYPE=\"text\" NAME=\"Architect_Administration_Account_UserName\" MAXLENGTH=\"50\"><BR><BR>
	
			* <I>Administration Account :: Password</I>:<BR>
			[ Maximum Password Length: 50 Characters, Alpha-Numeric-Symbol ]<BR>
	<INPUT TYPE=\"password\" NAME=\"Architect_Administration_Account_Password_1\" MAXLENGTH=\"50\"><BR>
	
			* <I>Administration Account :: Password, Again</I>:<BR>
	<INPUT TYPE=\"password\" NAME=\"Architect_Administration_Account_Password_2\" MAXLENGTH=\"50\"><BR>
			* <I>Administration Account :: Birth Date</I>:<BR>
	<INPUT TYPE=\"date\" NAME=\"Architect_Administration_Account_BirthDate\" MAXLENGTH=\"50\"><BR>
	<INPUT TYPE=\"submit\" VALUE=\"Install Administrator\">
	</FORM><BR>
");

} else {

/*
 ============================================================================================================
 + Check Administrator Account Passwords For Differences: IF: Passwords Match Exactly, Execute Installation
 ============================================================================================================
*/

if ($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1 == "$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2") {

	echo ("<HR><CENTER>Installation Process Started</CENTER><HR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default S.Q.L. Data to Database Server Tables:<BR>");

include_once ("./System/Configuration/Global_Configuration.php");

/*
 ============================================================================================================
 + Database Management System Server :: Variables :: Connection Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE				= new mysqli($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);
$_ARCHITECT_INSTALLATION_DATA_DATABASE_CONNECT						= mysqli_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);
$_ARCHITECT_INSTALLATION_DATA_DATABASE_SELECT						= mysqli_select_db($_ARCHITECT_INSTALLATION_DATA_DATABASE_CONNECT, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Connect :: To Database Management System Server
 ============================================================================================================
*/

if ($_ARCHITECT_INSTALLATION_DATA_DATABASE_CONNECT) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Host Name: </I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> Successfully.<BR>");

/*
 ============================================================================================================
 + Connect :: To Database Management System Server Database Name
 ============================================================================================================
*/

if ($_ARCHITECT_INSTALLATION_DATA_DATABASE_SELECT) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Successfully.<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Application Module Links... Wait. {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}<BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Link Data
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Active Members','001','?Application_Member&#61;Active_Members','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Applications','002','?Application_Member&#61;Application_List','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calculator','004','?Application_Member&#61;Calculator&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calendar','005','?Application_Member&#61;Calendar&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Clock','006','?Application_Member&#61;Clock&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Contact','007','?Application_Member&#61;Contact_Administrator','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Devices','008','?Application_Member&#61;Devices&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Documentation','009','?Application_Member&#61;Documentation&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Download','010','?Application_Member&#61;Download&amp;Display&#61;Torrent','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Emulators','011','?Application_Member&#61;Emulators&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Files','012','?Application_Member&#61;Files&amp;CategoryID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Forum','013','?Application_Member&#61;Forum&amp;ForumID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Language','014','?Application_Member&#61;Language','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Lightning Calculate','015','?Application_Member&#61;Lightning_Calculate&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Legal','016','?Application_Member&#61;Legal','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Login','017','?Application_Member&#61;Login','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Market','018','?Application_Member&#61;Market&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Media Player','019','?Application_Member&#61;Media_Player','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Member Directory','020','?Application_Member&#61;Member_Directory','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Messenger','021','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('News','022','?Application_Member&#61;News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Notepad','023','?Application_Member&#61;Notepad&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Pages','024','?Application_Member&#61;Pages&amp;Display&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Recommendations','025','?Application_Member&#61;Recommendations','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Referrers','026','?Application_Member&#61;Referrers&amp;Display&#61;Box','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Register','027','?Application_Member&#61;Register','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('RSS Feed','028','./RSS.php?','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Search','029','?Application_Member&#61;Search','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('System','030','?Application_Member&#61;System&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Submit News','031','?Application_Member&#61;Submit_News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Travel','032','?Application_Member&#61;Travel&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Upload File','033','?Application_Member&#61;Upload','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('VoIP Phone','034','?Application_Member&#61;VoIP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Welcome !','035','?Application_Custom&#61;1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Applications and Application Settings... Wait.<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Non-Registered Visitor, Registered Member Account and Moderator Application Modules... Wait.<BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Data :: Access Level :: Non-Registered Visitor, Registered Member Account and Moderator
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_001','Account_Data','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_002','Account_Recovery','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_003','Active_Members','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_004','All_News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_005','All_Shouts','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_006','Application_List','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_007','Articles','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_008','Calculator','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_009','Calendar','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_010','Clock','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_011','Comment','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_012','Contact_Administrator','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_013','Control_Panel','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_014','Devices','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_015','Documentation','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_016','Download','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_017','Electronic_Mail','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_018','Emulators','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_019','Files','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_020','Forum','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_021','Forward','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_022','Friend','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_023','Language','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_024','Legal','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_025','Lightning_Calculate','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_026','List','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_027','Login','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_028','Market','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_029','Media_Player','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_030','Member_Directory','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_031','Messenger','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_032','News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_033','Notepad','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_034','Pages','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_035','Profile','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_036','Recommendations','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_037','Referrers','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_038','Register','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_039','Reset_Password','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_040','Search','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_041','Submit_News','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_042','System','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_043','System_Message','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_044','Theme','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_045','Travel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_046','Update_Account','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_047','Update_Password','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_048','Upload','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_049','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_049','VoIP','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_050','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_MEMBER_FILE_050','Webspace','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Data :: Access Level :: Administrator
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Administration Application Modules Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_001','Accounts','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_002','Applications','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_003','Archive','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_004','Control_Panel','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_005','Emulators','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_006','File_Categories','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_007','File_Manager','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_008','Forum','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_009','GIT','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_010','Messenger','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_011','Networking','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_012','Panels','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_013','PlugIns','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_014','Publish','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_015','Ranks','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_016','Referrers','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_017','Robot_Monitor','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_018','Settings','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_019','Submissions','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_020','Terminal','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_021','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_021','Themes','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_022','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_022','Update','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_023','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_023','VoIP','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_024','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ADMINISTRATION_FILE_024','Web_Pages','3','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Data :: Access Level :: Root
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administration Application Modules Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_root(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001','Tasks','4','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Data :: Access Level :: Services
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Services Root Administration Application Modules Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001','Commander','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002','Control_Panel','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003','Integrity','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004','Kernel','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005','Loops','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006','Services','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_007','Tasks','5','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Application Module Data :: Access Level :: Background
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Background Application Modules Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001','Log_Administration','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002','Log_Background','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003','Log_Member','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_background(application_file_integrity,application_file_integrity_installation,application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_glo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation,application_file_version)VALUES('$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004','Log_Visitor','6','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Panel Application Module Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Panel Application Modules... Wait.<BR>");

// [ C ] Application Module :: Panel :: Alignment :: Left
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001','Applications_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','001','<CENTER><B>Applications Panel</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010','Member_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','002','<CENTER><B>Member Panel</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008','Live_Video','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','002','<CENTER><B>Live Video</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002','Clock','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','003','<CENTER><B>Clock</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009','Location','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','004','<CENTER><B>Location</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011','Networking','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','005','<CENTER><B>Networking</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('0','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004','Latest_Articles','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','006','<CENTER><B>Latest Articles</B></CENTER><HR>')");

// [ C ] Application Module :: Panel :: Alignment :: Right
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012','Project_Badges','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','007','<CENTER><B>Project Badges</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007','Latest_Shouts','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','008','<CENTER><B>Latest Shouts</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005','Latest_Files','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','009','<CENTER><B>Latest Files</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006','Latest_Members','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','010','<CENTER><B>Newest Members</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003','Language','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','011','<CENTER><B>Languages</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_014','Theme','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','012','<CENTER><B>Theme Selection</B></CENTER><HR>')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel(application_panel_alignment,application_panel_file_integrity,application_panel_file_integrity_installation,application_panel_file_name,application_panel_file_permission,application_panel_file_permission_camera,application_panel_file_permission_microphone,application_panel_file_permission_location_gps,application_panel_file_permission_location_glo,application_panel_file_permission_location_ip_address,application_panel_file_status,application_panel_file_timestamp_installation,application_panel_file_version,application_panel_row,application_panel_title)VALUES('1','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012','$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013','RSS_Panel','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_VERSION_FILE_NUMBER','013','<CENTER><B>Real-Simple-Syndication</B></CENTER><HR>')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Kernel :: File :: Details
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Kernel File Details... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_kernel(kernel_file_date_installation,kernel_file_integrity,kernel_file_name,kernel_file_version)VALUES('$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_ARCHITECT_INTEGRITY_FILES_FIND_KERNEL_FILE','./System/Kernel/Backup/Kernel_Installation.kernel','$_INTERNAL_FILE_KERNEL_VERSION')");
$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_kernel(kernel_file_date_installation,kernel_file_integrity,kernel_file_name,kernel_file_version)VALUES('$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_ARCHITECT_INTEGRITY_FILES_FIND_KERNEL_FILE','$_INTERNAL_FILE_KERNEL','$_INTERNAL_FILE_KERNEL_VERSION')");

	echo ("[ Done ]<BR><BR>");


	echo ("-----------------------------------<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Details and Root Administrator Account ( $_PROJECT_STRING_NAME_SHORT )... Wait.<BR>");

/*
 ============================================================================================================
 + Install :: Specified Administrator Account Details
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
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
member_status_account_last_active_timestamp_unix,
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
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_BIRTHDATE',
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
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED',
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
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME'
)");

/*
 ============================================================================================================
 + Install :: Default Backup ( Robot ) Root Administrator Account
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
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
member_status_account_last_active_timestamp_unix,
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
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_BIRTHDATE',
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
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED',
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
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME'
)");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Services Account
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Services Root Administrator Account... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
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
member_status_account_last_active_timestamp_unix,
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
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED',
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
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_UNIX',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL',
'$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_TIME_MINUTES',
'$_GLOBAL_LOCAL_SERVER_TIME_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'Services'
)");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Backup Kernel File... Wait.<BR>");

	copy("./$_INTERNAL_FILE_KERNEL", "./System/Kernel/Backup/Kernel_Installation.kernel");
		copy("./$_INTERNAL_FILE_KERNEL", "./System/Kernel/Backup/Current.kernel");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Organized Directory Structure... Wait.<BR>");

/*
 ============================================================================================================
 + Make and Create :: Administrator Directory and Files
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Currently Making:<BR><BR>");

/*
 + Make Directory: Administrator UserName
*/

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME");

	echo ("[ Done ]<BR><BR>");

/*
 + Make Directory: Administrator' Organized File Directory Structure
*/

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files");

	echo ("[ Done ]<BR><BR>");

// Audio

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Archive<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Archive");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Push-To-Talk");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams");

	echo ("[ Done ]<BR><BR>");

// Document

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Coordinates<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/GLO<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Region<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Clear-Text<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Encrypted<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Coordinates");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/GLO");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Region");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Clear-Text");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Encrypted");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall");

	echo ("[ Done ]<BR><BR>");

// Image

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams");

	echo ("[ Done ]<BR><BR>");

// Video

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile/Backup<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile/Backup");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Directory Structure Index Files... Wait.<BR>");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

// Archive

copy("./Member/Setup/Indexes/Files/Files.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/index.php");
copy("./Member/Setup/Indexes/Files/Archive/Archive.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Archive/index.php");

// Audio

copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Gallery/Gallery.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Gallery/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Live/Live.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Music/Music.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Push-To-Talk/Push-To-Talk.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Push-To-Talk/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Recordings/Recordings.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Streams/Streams.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams/index.php");

// Document

copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging/index.php");
copy("./Member/Setup/Files/Document/Activity_Logging/Activity_Log.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging/Activity_Log.php");

copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/index.php");

copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Gallery/Gallery.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Document/Gallery/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/GPS.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/Coordinates/Coordinates.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Coordinates/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/GLO/GLO.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/GLO/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/Region/Region.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/GPS/Region/index.php");

copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends/index.php");

copy("./Member/Setup/Indexes/Files/Document/Messenger/Messenger.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Messenger.php");
copy("./Member/Setup/Indexes/Files/Document/Messenger/Clear-Text/Clear-Text.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Clear-Text/index.php");
copy("./Member/Setup/Indexes/Files/Document/Messenger/Encrypted/Encrypted.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Messenger/Encrypted/index.php");

copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall/index.php");

// Image

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Gallery/Gallery.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Image/Gallery/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Image/Streams/Streams.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams/index.php");

// Video

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/index.php");
copy("./Member/Setup/Indexes/Files/Video/Gallery/Gallery.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Video/Gallery/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Live/Live.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live/index.php");
copy("./Member/Setup/Indexes/Files/Video/Live/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies/index.php");
copy("./Member/Setup/Indexes/Files/Video/Profile/Profile.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Video/Profile/Backup/Backup.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Profile/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Streams/Streams.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/index.php");
	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Personal Web Page... Wait.<BR>");

/*
 + Make Directory: Administrator Hyper-Text-Markup-Language Web-Page Index File
*/

copy("./System/Default/Register/Register.html","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/index.html");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Physical Electronic Mail Address File... Wait.<BR>");

/*
 + Copy Default Files To Organized Directory Structure: Administrator Electronic Mail Address
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Adding Specified Administrator Account Electronic Mail Address To The Electronic Mail Address Master List... Wait.<BR>");

/*
 + Copy Administrator Electronic Mail Address To Master List
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/Master_List/Electronic_Mail_Addresses/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Make and Create Backup Root Administrator Directory and Files
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administrator Account ( $_PROJECT_STRING_NAME_SHORT ) Directory Structure Clone... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Currently Making:<BR><BR>");

/*
 + Make Directory: Root Administration UserName
*/

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT");

	echo ("[ Done ]<BR><BR>");

/*
 + Make Directory: Root Administration Organized File Directory Structure
*/

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files");

	echo ("[ Done ]<BR><BR>");

// Audio

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Archive<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Archive");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Push-To-Talk");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams");

	echo ("[ Done ]<BR><BR>");

// Document

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Coordinates<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/GLO<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Region<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Clear-Text<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Encrypted<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Coordinates");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/GLO");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Region");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Clear-Text");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Encrypted");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall");

	echo ("[ Done ]<BR><BR>");

// Image

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams");

	echo ("[ Done ]<BR><BR>");

// Video

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile/Backup<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile/Backup");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administration Account Directory Structure Index Files... Wait.<BR>");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

// Archive

copy("./Member/Setup/Indexes/Files/Files.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/index.php");
copy("./Member/Setup/Indexes/Files/Archive/Archive.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Archive/index.php");

// Audio

copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Gallery/Gallery.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Gallery/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Live/Live.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Music/Music.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Push-To-Talk/Push-To-Talk.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Push-To-Talk/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Recordings/Recordings.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Streams/Streams.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams/index.php");

// Document

copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging/index.php");
copy("./Member/Setup/Files/Document/Activity_Logging/Activity_Log.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging/Activity_Log.php");

copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/index.php");

copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Gallery/Gallery.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Document/Gallery/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/GPS.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/Coordinates/Coordinates.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Coordinates/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/GLO/GLO.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/GLO/index.php");
copy("./Member/Setup/Indexes/Files/Document/GPS/Region/Region.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/GPS/Region/index.php");

copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends/index.php");

copy("./Member/Setup/Indexes/Files/Document/Messenger/Messenger.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Messenger.php");
copy("./Member/Setup/Indexes/Files/Document/Messenger/Clear-Text/Clear-Text.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Clear-Text/index.php");
copy("./Member/Setup/Indexes/Files/Document/Messenger/Encrypted/Encrypted.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Messenger/Encrypted/index.php");

copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall/index.php");

// Image

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Gallery/Gallery.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Image/Gallery/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Image/Streams/Streams.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams/index.php");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administrator Account Personal Profile Image... Wait.<BR>");

/*
 + Copy: Root Administration Personal Profile Image
*/

copy("./Theme/$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME/Image/Icon_Avatar/$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME.png","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/Backup/Profile.png");
copy("./Theme/$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME/Image/Icon_Avatar/$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME.png","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/Profile.png");
	echo ("[ Done ]<BR><BR>");

// Video

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/index.php");
copy("./Member/Setup/Indexes/Files/Video/Gallery/Gallery.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Video/Gallery/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Live/Live.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live/index.php");
copy("./Member/Setup/Indexes/Files/Video/Live/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies/index.php");
copy("./Member/Setup/Indexes/Files/Video/Profile/Profile.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Video/Profile/Backup/Backup.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Profile/Backup/index.php");
copy("./Member/Setup/Indexes/Files/Video/Streams/Streams.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/index.php");
	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administration Account Personal Web Page... Wait.<BR>");

/*
 + Make Directory: Administrator Hyper-Text-Markup-Language Web-Page Index File
*/

copy("./System/Default/Register/Register.html","./Member/$_PROJECT_STRING_NAME_SHORT/index.html");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Root Administration Account Physical Electronic Mail Address File... Wait.<BR>");

/*
 + Copy Default Files To Organized Directory Structure: Root Administration Electronic Mail Address
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail/$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Adding Root Administration Account Electronic Mail Address To The Electronic Mail Address Master List... Wait.<BR>");

/*
 + Copy Root Administration Electronic Mail Address To Master List
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/Master_List/Electronic_Mail_Addresses/$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR>");
	echo ("-----------------------------------<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Custom Applications and Their Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Custom Web Applications... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom(
custom_application_data,
custom_application_name,
custom_application_timestamp_installation
)VALUES(
'Hello and welcome to $_PROJECT_STRING_NAME_EXTENDED ! If you are reading this sentence then $_PROJECT_STRING_NAME_EXTENDED was successfully installed to this Web Server !',
'Welcome !',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP'
)");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Registered Member Account System Ranks Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default Ranking System... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks(
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
)");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default System Settings Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Pre-Configured System Settings... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings(
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
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
'25600000',
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
)");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Statistics Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Statistics... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_statistics(
statistics_total_number_of_document_executions_non_unique,
statistics_total_number_of_document_executions_unique,
statistics_installation_date
)VALUES(
'1',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP'
)");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Forum Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Entry... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_forum(forum_access_level,forum_description,forum_timestamp,forum_title)VALUES('0','This Is The Example Forum Entry #1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This Is The Example Forum Entry #1')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Forum Topic Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Entry... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_topic(topic_access_level,topic_description,topic_forum_id,topic_last_poster,topic_timestamp,topic_timestamp_last_message,topic_title)VALUES('0','This Is The Example Forum Topic Entry #1 Within The Example Forum Entry #1','1','$_PROJECT_STRING_NAME_SHORT','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This Is The Example Forum Topic Entry #1')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Topic Post Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Message Entry... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_topic_message(message_access_level,message_author,message_data,message_forum_topic_id,message_timestamp,message_timestamp_last_update)VALUES('0','$_PROJECT_STRING_NAME_SHORT','This is an Example Forum Topic Message Entry -- you can Administer the Forum via the Administration Control Panel.','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default File Category Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Category Entry ( For File Upload / Download Application Module )... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File Category Entry')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default File Download Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Entry ( For File Upload / Download Application Module )... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this Example File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File','$_PROJECT_STRING_NAME_SHORT')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default Article Entry Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Article Entry... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('$_PROJECT_STRING_NAME_SHORT','This is an Example Article Entry -- You can Delete this Article Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example Article')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Default News Entry Data
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example News Article Entry... Wait.<BR>");

$_ARCHITECT_INSTALLATION_DATABASE_DATA_CONNECT_INITIALIZE->query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('$_PROJECT_STRING_NAME_SHORT','Default.png','This is an Example News Article Entry -- You can Delete this News Article Entry from the Administration Control Panel.','None','None','Wed, 05 Aug 2009 15:04:18 -0700','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example News Article Entry')");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Integrity
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Integrity... Wait.<BR>");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Integrity :: KeyRings
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Installing My KeyRings... Wait.<BR>");

	echo ("[ Done ]<BR><BR>");
	
/*
 ============================================================================================================
 + Install :: Integrity :: KeyRings
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Installing Application KeyRings... Wait.<BR>");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Integrity :: Backup Application Modules
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Creating Read-Only Backup of Application Module Directories... Wait.<BR><BR>");

mkdir("./System/Security/Integrity/Backup");
mkdir("./System/Security/Integrity/Backup/Applications");
mkdir("./System/Security/Integrity/Backup/Applications/Administration");
mkdir("./System/Security/Integrity/Backup/Applications/Background");
mkdir("./System/Security/Integrity/Backup/Applications/Custom");
mkdir("./System/Security/Integrity/Backup/Applications/Member");
mkdir("./System/Security/Integrity/Backup/Applications/Moderator");
mkdir("./System/Security/Integrity/Backup/Applications/Panel");
mkdir("./System/Security/Integrity/Backup/Applications/Public");
mkdir("./System/Security/Integrity/Backup/Applications/Root");
mkdir("./System/Security/Integrity/Backup/Applications/Services");
mkdir("./System/Security/Integrity/Backup/Applications/Video_Games/");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Creating Read-Only Backup of Application Modules... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Administration/... Wait.<BR><BR>");

copy("./Applications/Administration/Accounts","./System/Security/Integrity/Backup/Applications/Administration/Accounts");
copy("./Applications/Administration/Applications","./System/Security/Integrity/Backup/Applications/Administration/Applications");
copy("./Applications/Administration/Archive","./System/Security/Integrity/Backup/Applications/Administration/Archive");
copy("./Applications/Administration/Control_Panel","./System/Security/Integrity/Backup/Applications/Administration/Control_Panel");
copy("./Applications/Administration/Emulators","./System/Security/Integrity/Backup/Applications/Administration/Emulators");
copy("./Applications/Administration/File_Categories","./System/Security/Integrity/Backup/Applications/Administration/File_Categories");
copy("./Applications/Administration/File_Manager","./System/Security/Integrity/Backup/Applications/Administration/File_Manger");
copy("./Applications/Administration/Forum","./System/Security/Integrity/Backup/Applications/Administration/Forum");
copy("./Applications/Administration/GIT","./System/Security/Integrity/Backup/Applications/Administration/GIT");
copy("./Applications/Administration/Messenger","./System/Security/Integrity/Backup/Applications/Administration/Messenger");
copy("./Applications/Administration/Networking","./System/Security/Integrity/Backup/Applications/Administration/Networking");
copy("./Applications/Administration/Panels","./System/Security/Integrity/Backup/Applications/Administration/Panels");
copy("./Applications/Administration/PlugIns","./System/Security/Integrity/Backup/Applications/Administration/PlugIns");
copy("./Applications/Administration/PHP_Information.php","./System/Security/Integrity/Backup/Applications/Administration/PHP_Information.php");
copy("./Applications/Administration/Publish","./System/Security/Integrity/Backup/Applications/Administration/Publish");
copy("./Applications/Administration/Ranks","./System/Security/Integrity/Backup/Applications/Administration/Ranks");
copy("./Applications/Administration/Referrers","./System/Security/Integrity/Backup/Applications/Administration/Referrers");
copy("./Applications/Administration/Robot_Monitor","./System/Security/Integrity/Backup/Applications/Administration/Robot_Monitor");
copy("./Applications/Administration/Settings","./System/Security/Integrity/Backup/Applications/Administration/Settings");
copy("./Applications/Administration/Submissions","./System/Security/Integrity/Backup/Applications/Administration/Submissions");
copy("./Applications/Administration/Terminal","./System/Security/Integrity/Backup/Applications/Administration/Terminal");
copy("./Applications/Administration/Themes","./System/Security/Integrity/Backup/Applications/Administration/Themes");
copy("./Applications/Administration/Update","./System/Security/Integrity/Backup/Applications/Administration/Update");
copy("./Applications/Administration/VoIP","./System/Security/Integrity/Backup/Applications/Administration/VoIP");
copy("./Applications/Administration/Web_Pages","./System/Security/Integrity/Backup/Applications/Administration/Web_Pages");
copy("./Applications/Administration/index.php","./System/Security/Integrity/Backup/Applications/Administration/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Background/... Wait.<BR><BR>");

copy("./Applications/Background/Log_Administration","./System/Security/Integrity/Backup/Applications/Background/Log_Administration");
copy("./Applications/Background/Log_Background","./System/Security/Integrity/Backup/Applications/Background/Log_Background");
copy("./Applications/Background/Log_Member","./System/Security/Integrity/Backup/Applications/Background/Log_Member");
copy("./Applications/Background/Log_Visitor","./System/Security/Integrity/Backup/Applications/Background/Log_Visitor");
copy("./Applications/Background/index.php","./System/Security/Integrity/Backup/Applications/Background/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Custom/... Wait.<BR><BR>");

copy("./Applications/Custom/index.php","./System/Security/Integrity/Backup/Applications/Custom/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Member/... Wait.<BR><BR>");

copy("./Applications/Member/Account_Data","./System/Security/Integrity/Backup/Applications/Member/Account_Data");
copy("./Applications/Member/Account_Recovery","./System/Security/Integrity/Backup/Applications/Member/Account_Recovery");
copy("./Applications/Member/Active_Members","./System/Security/Integrity/Backup/Applications/Member/Active_Members");
copy("./Applications/Member/All_News","./System/Security/Integrity/Backup/Applications/Member/All_News");
copy("./Applications/Member/All_Shouts","./System/Security/Integrity/Backup/Applications/Member/All_Shouts");
copy("./Applications/Member/Application_List","./System/Security/Integrity/Backup/Applications/Member/Application_List");
copy("./Applications/Member/Articles","./System/Security/Integrity/Backup/Applications/Member/Articles");
copy("./Applications/Member/Calculator","./System/Security/Integrity/Backup/Applications/Member/Calculator");
copy("./Applications/Member/Calendar","./System/Security/Integrity/Backup/Applications/Member/Calendar");
copy("./Applications/Member/Clock","./System/Security/Integrity/Backup/Applications/Member/Clock");
copy("./Applications/Member/Comment","./System/Security/Integrity/Backup/Applications/Member/Comment");
copy("./Applications/Member/Contact_Administrator","./System/Security/Integrity/Backup/Applications/Member/Contact_Administrator");
copy("./Applications/Member/Control_Panel","./System/Security/Integrity/Backup/Applications/Member/Control_Panel");
copy("./Applications/Member/Devices","./System/Security/Integrity/Backup/Applications/Member/Devices");
copy("./Applications/Member/Documentation","./System/Security/Integrity/Backup/Applications/Member/Documentation");
copy("./Applications/Member/Download","./System/Security/Integrity/Backup/Applications/Member/Download");
copy("./Applications/Member/Electronic_Mail","./System/Security/Integrity/Backup/Applications/Member/Electronic_Mail");
copy("./Applications/Member/Emulators","./System/Security/Integrity/Backup/Applications/Member/Emulators");
copy("./Applications/Member/Files","./System/Security/Integrity/Backup/Applications/Member/Files");
copy("./Applications/Member/Forum","./System/Security/Integrity/Backup/Applications/Member/Forum");
copy("./Applications/Member/Forward","./System/Security/Integrity/Backup/Applications/Member/Forward");
copy("./Applications/Member/Friend","./System/Security/Integrity/Backup/Applications/Member/Friend");
copy("./Applications/Member/Language","./System/Security/Integrity/Backup/Applications/Member/Language");
copy("./Applications/Member/Legal","./System/Security/Integrity/Backup/Applications/Member/Legal");
copy("./Applications/Member/Lightning_Calculate","./System/Security/Integrity/Backup/Applications/Member/Lightning_Calculate");
copy("./Applications/Member/List","./System/Security/Integrity/Backup/Applications/Member/List");
copy("./Applications/Member/Login","./System/Security/Integrity/Backup/Applications/Member/Login");
copy("./Applications/Member/Market","./System/Security/Integrity/Backup/Applications/Member/Market");
copy("./Applications/Member/Media_Player","./System/Security/Integrity/Backup/Applications/Member/Media_Player");
copy("./Applications/Member/Member_Directory","./System/Security/Integrity/Backup/Applications/Member/Member_Directory");
copy("./Applications/Member/Messenger","./System/Security/Integrity/Backup/Applications/Member/Messenger");
copy("./Applications/Member/News","./System/Security/Integrity/Backup/Applications/Member/News");
copy("./Applications/Member/Notepad","./System/Security/Integrity/Backup/Applications/Member/Notepad");
copy("./Applications/Member/Pages","./System/Security/Integrity/Backup/Applications/Member/Pages");
copy("./Applications/Member/Profile","./System/Security/Integrity/Backup/Applications/Member/Profile");
copy("./Applications/Member/Recommendations","./System/Security/Integrity/Backup/Applications/Member/Recommendations");
copy("./Applications/Member/Referrers","./System/Security/Integrity/Backup/Applications/Member/Referrers");
copy("./Applications/Member/Register","./System/Security/Integrity/Backup/Applications/Member/Register");
copy("./Applications/Member/Reset_Password","./System/Security/Integrity/Backup/Applications/Member/Reset_Password");
copy("./Applications/Member/Search","./System/Security/Integrity/Backup/Applications/Member/Search");
copy("./Applications/Member/Submit_News","./System/Security/Integrity/Backup/Applications/Member/Submit_News");
copy("./Applications/Member/System","./System/Security/Integrity/Backup/Applications/Member/System");
copy("./Applications/Member/System_Message","./System/Security/Integrity/Backup/Applications/Member/System_Message");
copy("./Applications/Member/Theme","./System/Security/Integrity/Backup/Applications/Member/Theme");
copy("./Applications/Member/Travel","./System/Security/Integrity/Backup/Applications/Member/Travel");
copy("./Applications/Member/Update_Account","./System/Security/Integrity/Backup/Applications/Member/Update_Account");
copy("./Applications/Member/Update_Password","./System/Security/Integrity/Backup/Applications/Member/Update_Password");
copy("./Applications/Member/Upload","./System/Security/Integrity/Backup/Applications/Member/Upload");
copy("./Applications/Member/VoIP","./System/Security/Integrity/Backup/Applications/Member/VoIP");
copy("./Applications/Member/Webspace","./System/Security/Integrity/Backup/Applications/Member/Webspace");
copy("./Applications/Member/index.php","./System/Security/Integrity/Backup/Applications/Member/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Moderator/... Wait.<BR><BR>");

copy("./Applications/Moderator/Forum","./System/Security/Integrity/Backup/Applications/Moderator/Forum");
copy("./Applications/Moderator/index.php","./System/Security/Integrity/Backup/Applications/Moderator/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Panel/... Wait.<BR><BR>");

copy("./Applications/Panel/Administration.panel","./System/Security/Integrity/Backup/Applications/Panel/Administration.panel");
copy("./Applications/Panel/Applications_Panel.panel","./System/Security/Integrity/Backup/Applications/Panel/Applications_Panel.panel");
copy("./Applications/Panel/Clock.panel","./System/Security/Integrity/Backup/Applications/Panel/Clock.panel");
copy("./Applications/Panel/Language.panel","./System/Security/Integrity/Backup/Applications/Panel/Language.panel");
copy("./Applications/Panel/Latest_Articles.panel","./System/Security/Integrity/Backup/Applications/Panel/Latest_Articles.panel");
copy("./Applications/Panel/Latest_Files.panel","./System/Security/Integrity/Backup/Applications/Panel/Latest_Files.panel");
copy("./Applications/Panel/Latest_Members.panel","./System/Security/Integrity/Backup/Applications/Panel/Latest_Members.panel");
copy("./Applications/Panel/Latest_Shouts.panel","./System/Security/Integrity/Backup/Applications/Panel/Latest_Shouts.panel");
copy("./Applications/Panel/Live_Video.panel","./System/Security/Integrity/Backup/Applications/Panel/Live_Video.panel");
copy("./Applications/Panel/Location.panel","./System/Security/Integrity/Backup/Applications/Panel/Location.panel");
copy("./Applications/Panel/Member_Panel.panel","./System/Security/Integrity/Backup/Applications/Panel/Member_Panel.panel");
copy("./Applications/Panel/Moderator.panel","./System/Security/Integrity/Backup/Applications/Panel/Moderator.panel");
copy("./Applications/Panel/Networking.panel","./System/Security/Integrity/Backup/Applications/Panel/Networking.panel");
copy("./Applications/Panel/Project_Badges.panel","./System/Security/Integrity/Backup/Applications/Panel/Project_Badges.panel");
copy("./Applications/Panel/RSS_Panel.panel","./System/Security/Integrity/Backup/Applications/Panel/RSS_Panel.panel");
copy("./Applications/Panel/Theme.panel","./System/Security/Integrity/Backup/Applications/Panel/Theme.panel");
copy("./Applications/Panel/index.php","./System/Security/Integrity/Backup/Applications/Panel/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Public/... Wait.<BR><BR>");

copy("./Applications/Public/Engine_Validation","./System/Security/Integrity/Backup/Applications/Public/Engine_Validation");
copy("./Applications/Public/index.php","./System/Security/Integrity/Backup/Applications/Public/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Root/... Wait.<BR><BR>");

copy("./Applications/Root/Tasks","./System/Security/Integrity/Backup/Applications/Root/Tasks");
copy("./Applications/Root/index.php","./System/Security/Integrity/Backup/Applications/Root/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Services/... Wait.<BR><BR>");

copy("./Applications/Services/Commander","./System/Security/Integrity/Backup/Applications/Services/Commander");
copy("./Applications/Services/Control_Panel","./System/Security/Integrity/Backup/Applications/Services/Control_Panel");
copy("./Applications/Services/Integrity","./System/Security/Integrity/Backup/Applications/Services/Integrity");
copy("./Applications/Services/Kernel","./System/Security/Integrity/Backup/Applications/Services/Kernel");
copy("./Applications/Services/Loops","./System/Security/Integrity/Backup/Applications/Services/Loops");
copy("./Applications/Services/Services","./System/Security/Integrity/Backup/Applications/Services/Services");
copy("./Applications/Services/index.php","./System/Security/Integrity/Backup/Applications/Services/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Copying Application Modules From: ./Applications/Video_Games/... Wait.<BR><BR>");

copy("./Applications/Video_Games/index.php","./System/Security/Integrity/Backup/Applications/Video_Games/index.php");

	echo ("[ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Install :: Integrity :: Application Module Permissions
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Integrity: Setting Application Module Permissions... Wait.<BR>");

	echo ("[ Done ]<BR><BR>");

	echo ("&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Remove Installation Files ::\">Remove Installation Files</A>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: Error: I am not able to connect to the Database Management System Server Database<BR>");

} // [ + ] IF: S.Q.L. Query Install Default S.Q.L. Data

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: Error: I am not able to connect to the Database Management System Server Server.<BR>");

} // [ + ] IF: S.Q.L. Server Connect

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: Error: the Password(s) that you have provided me do not match each-other. Try Again ?<BR>");

} // [ + ] IF: Administrator Passwords Are Equal

} // [ + ] IF: Null

} // [ + ] IF: Install Default S.Q.L. Data

/*
 ============================================================================================================
 +
 + Internal Application: Unlink and Secure-Delete Installation System
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "Unlink_Installation") {

	echo ("<HR><CENTER>Unlinking Installation Files</CENTER><HR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Delete :: Default Architect Log Files and index Files... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Filling Data Storage Medium Space With Zero Files... Wait.<BR><BR>");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/Log.txt");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/index.php");

copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/index.php");
copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/Log.txt");
copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/index.php");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction/Log.txt");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Delete :: Default MySQL Generator Applications and index Files... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Filling Data Storage Medium Space With Zero Files... Wait.<BR><BR>");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/MySQL_Generator.php");

copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/index.php");
copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/MySQL_Generator.php");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL/MySQL_Generator.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Delete :: Default Installation ToolKit Application and index Files... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Filling Data Storage Medium Space With Zero Files... Wait.<BR><BR>");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/Installation_ToolKit.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/index.php");

copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/index.php");
copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/Installation_ToolKit.php");
copy("./System/Plug-Ins/Secure-Delete/Default/Zero_5MB", "./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/index.php");

unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/index.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit/Installation_ToolKit.php");
unlink("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing Default Architect Directories... Wait.<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing => Architect => Log Directory... Wait.<BR>");

rmdir("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log/Interaction");
rmdir("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/Log");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing => Architect => MySQL Directory... Wait.<BR>");

rmdir("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/MySQL");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing => Architect => ToolKit Directory... Wait.<BR>");

rmdir("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY/ToolKit");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing => Architect Directory... Wait.<BR>");

rmdir("./$_INTERNAL_FILE_ARCHITECT_DIRECTORY");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing => Architect Installation Application... Wait.<BR>");

if (unlink("./$_INTERNAL_FILE_ARCHITECT")) {

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Redirecting To This <B>$_PROJECT_STRING_NAME_EXTENDED Installation</B> Login Application Module... Wait 15 Seconds.<BR><BR>");

	echo ("<META HTTP-EQUIV=Refresh CONTENT=\"15; URL=$_INTERNAL_FILE_KERNEL?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login\">");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: Error: I was not able to Secure-Delete the File: '$_INTERNAL_FILE_ARCHITECT' you will need to manually Secure-Delete this File before proceeding.</BIG><BR>");

} // [ + ] IF: Delete :: Architect Installation Application File

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: I am Testing the Pre-Hyper-Text-Post-Processor mail() Function. wait...</BIG><BR>");

if (mail($_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR,"$_PROJECT_STRING_NAME_EXTENDED - Testing the Pre-Hyper-Text-Post-Processor Server mail() Function.","
-------This is a test to see if this specific Web Server Pre-Hyper-Text-Post-Processor mail() Function is working-------

-------------------------------------------------------
If you have receieved this Non-Encrypted Electronic Mail Message $_PROJECT_STRING_NAME_EXTENDED was installed successfully to your web server through $_INTERNAL_ARCHITECT_NAME
The only thing left for you to do now is for you to manually configure this installation of $_PROJECT_STRING_NAME_EXTENDED
Read through the Portable Document Format Documentation File or watch the Educational Videos to see how to further secure this installation.
-------------------------------------------------------
-- Internet Protocol Addresses
* Internet Protocol Address :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Device: ( Who Installed This ): $_GLOBAL_REMOTE_SERVER_ADDRESS

-- Software Information :: This Web Server
* This Web Server :: Software Information: $_GLOBAL_LOCAL_SERVER_SOFTWARE

-- Timestamps
* Timestamp :: This Web Server :: Electronic Mail Message: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP
------------------------------------------------------
Have a nice day !

- $_PROJECT_STRING_NAME_ROBOT_ELECTRONIC_MAIL
")) {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: I have Tested the Pre-Hyper-Text-Post-Processor Server mail() Function and it seems to be working.</BIG><BR>");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> $_INTERNAL_ARCHITECT_NAME: Error: the Pre-Hyper-Text-Post-Processor Server mail() Function is not working. Correct this before using $_PROJECT_STRING_NAME_EXTENDED.</BIG>");

} // [ + ] IF: Electronic Mail Message :: Send :: To Administration Electronic Mail Message Address: System Test

} // [ + ] IF: Delete :: All Architect Installation Files

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Applications: Information Applications
 +
 +
 ============================================================================================================
*/

 /*
 ============================================================================================================
 +
 + Internal Application: Software Project System Information
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "SoftwareProject_Information") {

echo ("
		<HR><CENTER>$_PROJECT_STRING_NAME_EXTENDED Information</CENTER><HR>
		<B>$_PROJECT_STRING_NAME_EXTENDED Software Project Version Information</B><BR>
		*&nbsp;Extended Version: <I>$_PROJECT_VERSION_EXTENDED</I><BR>
		*&nbsp;Short Version: <I>$_PROJECT_VERSION_SHORT</I><BR><BR>

		<B>Official $_PROJECT_STRING_NAME_EXTENDED Software Project Web Servers</B><BR><BR>

		Software Project GIT Hosting<BR>
		*&nbsp;BITBucket Secure Server <I>$_PROJECT_SERVER_URL_BITBUCKET_SECURE</I><BR>
		*&nbsp;BITBucket Clear-Text Server <I>$_PROJECT_SERVER_URL_BITBUCKET_CLEARTEXT</I><BR><BR>

		*&nbsp;GITHub Secure Server <I>$_PROJECT_SERVER_URL_GITHUB_SECURE</I><BR>
		*&nbsp;GITHub Clear-Text Server <I>$_PROJECT_SERVER_URL_GITHUB_CLEARTEXT</I><BR><BR>

		*&nbsp;GITLab Secure Server <I>$_PROJECT_SERVER_URL_GITLAB_SECURE</I><BR>
		*&nbsp;GITLab Clear-Text Server <I>$_PROJECT_SERVER_URL_GITLAB_CLEARTEXT</I><BR><BR>

		External Software Project Hosting<BR>
		*&nbsp;Source Forge Secure Server: <I>$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE</I><BR>
		*&nbsp;Source Forge Clear-Text Server: <I>$_PROJECT_SERVER_URL_SOURCEFORGE_CLEARTEXT</I><BR><BR>

		$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED Internal Project Hosting<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE/$_PROJECT_STRING_NAME_UNIX</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT/$_PROJECT_STRING_NAME_UNIX</I><BR><BR>

		$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED Official Servers<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT</I>
");

} // [ + ] IF: Internal Application: SoftwareProject_Information Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: PHP Server Engine Information
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Information") {

	echo ("<HR>Currenty Running PHP Server Engine Information<HR><BR>");
	phpinfo();
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Information Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: Pre-Hyper-Text-Post-Processor Extensions
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Extensions") {

	echo ("<HR>Currently Loaded PHP Extensions<HR><BR>");
	print_r(get_loaded_extensions());
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Extensions Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: File Integrity
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "File_Integrity") {

/*
 ============================================================================================================
 + Find :: Application Module :: Directories
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_SERVICES_ROOT_ADMINISTRATION				= "./Applications/Services";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ROOT_ADMINISTRATION					= "./Applications/Root";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION						= "./Applications/Administration";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER							= "./Applications/Member";

$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_SERVICES_ROOT_ADMINISTRATION				= "./Applications/Services";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ROOT_ADMINISTRATION					= "./Applications/Root";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION						= "./Applications/Administration";
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER							= "./Applications/Member";

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Background
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_001						= hash_file('sha256', "./Applications/Background/Log_Administration");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_002						= hash_file('sha256', "./Applications/Background/Log_Background");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_003						= hash_file('sha256', "./Applications/Background/Log_Member");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_BACKGROUND_FILE_004						= hash_file('sha256', "./Applications/Background/Log_Visitor");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Panel
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_001							= hash_file('sha256', "./Applications/Panel/Administration.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_002							= hash_file('sha256', "./Applications/Panel/Applications_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_003							= hash_file('sha256', "./Applications/Panel/Clock.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_004							= hash_file('sha256', "./Applications/Panel/Language.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_005							= hash_file('sha256', "./Applications/Panel/Latest_Articles.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_006							= hash_file('sha256', "./Applications/Panel/Latest_Files.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_007							= hash_file('sha256', "./Applications/Panel/Latest_Members.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_008							= hash_file('sha256', "./Applications/Panel/Latest_Shouts.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_009							= hash_file('sha256', "./Applications/Panel/Location.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_010							= hash_file('sha256', "./Applications/Panel/Member_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_011							= hash_file('sha256', "./Applications/Panel/Moderator.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_012							= hash_file('sha256', "./Applications/Panel/Networking.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_013							= hash_file('sha256', "./Applications/Panel/Project_Badges.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_014							= hash_file('sha256', "./Applications/Panel/RSS_Panel.panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_PANEL_FILE_015							= hash_file('sha256', "./Applications/Panel/Theme.panel");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Services Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_001				= hash_file('sha256', "./Applications/Services/Commander");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_002				= hash_file('sha256', "./Applications/Services/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_003				= hash_file('sha256', "./Applications/Services/Integrity");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_004				= hash_file('sha256', "./Applications/Services/Kernel");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_005				= hash_file('sha256', "./Applications/Services/Loops");
$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_SERVICES_ROOT_ADMINISTRATION_FILE_006				= hash_file('sha256', "./Applications/Services/Services");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Root-Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_APPLICATION_ROOT_ADMINISTRATION_FILE_001					= hash_file('sha256', "./Applications/Root/Tasks");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Administration
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_001					= hash_file('sha256', "./Applications/Administration/Accounts");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_002					= hash_file('sha256', "./Applications/Administration/Applications");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_003					= hash_file('sha256', "./Applications/Administration/Archive");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_004					= hash_file('sha256', "./Applications/Administration/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_005					= hash_file('sha256', "./Applications/Administration/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_006					= hash_file('sha256', "./Applications/Administration/File_Categories");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_007					= hash_file('sha256', "./Applications/Administration/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_008					= hash_file('sha256', "./Applications/Administration/GIT");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_009					= hash_file('sha256', "./Applications/Administration/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_010					= hash_file('sha256', "./Applications/Administration/Networking");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_011					= hash_file('sha256', "./Applications/Administration/Panels");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_012					= hash_file('sha256', "./Applications/Administration/PHP_Information.php");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_013					= hash_file('sha256', "./Applications/Administration/PlugIns");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_014					= hash_file('sha256', "./Applications/Administration/Publish");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_015					= hash_file('sha256', "./Applications/Administration/Ranks");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_016					= hash_file('sha256', "./Applications/Administration/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_017					= hash_file('sha256', "./Applications/Administration/Robot_Monitor");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_018					= hash_file('sha256', "./Applications/Administration/Settings");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_019					= hash_file('sha256', "./Applications/Administration/Submissions");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_020					= hash_file('sha256', "./Applications/Administration/Terminal");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_021					= hash_file('sha256', "./Applications/Administration/Themes");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_022					= hash_file('sha256', "./Applications/Administration/Update");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_023					= hash_file('sha256', "./Applications/Administration/Web_Pages");

/*
 ============================================================================================================
 + Retrieve :: File Integrity :: Applications :: Member
 ============================================================================================================
*/

$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_001						= hash_file('sha256', "./Applications/Member/Account_Data");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_002						= hash_file('sha256', "./Applications/Member/Account_Recovery");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_003						= hash_file('sha256', "./Applications/Member/Active_Members");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_004						= hash_file('sha256', "./Applications/Member/All_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_005						= hash_file('sha256', "./Applications/Member/All_Shouts");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_006						= hash_file('sha256', "./Applications/Member/Application_List");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_007						= hash_file('sha256', "./Applications/Member/Articles");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_008						= hash_file('sha256', "./Applications/Member/Calculator");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_009						= hash_file('sha256', "./Applications/Member/Calendar");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_010						= hash_file('sha256', "./Applications/Member/Clock");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_011						= hash_file('sha256', "./Applications/Member/Comment");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_012						= hash_file('sha256', "./Applications/Member/Contact_Administrator");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_013						= hash_file('sha256', "./Applications/Member/Control_Panel");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_014						= hash_file('sha256', "./Applications/Member/Devices");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_015						= hash_file('sha256', "./Applications/Member/Documentation");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_016						= hash_file('sha256', "./Applications/Member/Download");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_017						= hash_file('sha256', "./Applications/Member/Electronic_Mail");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_018						= hash_file('sha256', "./Applications/Member/Emulators");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_019						= hash_file('sha256', "./Applications/Member/Files");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_020						= hash_file('sha256', "./Applications/Member/Forum");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_021						= hash_file('sha256', "./Applications/Member/Forward");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_022						= hash_file('sha256', "./Applications/Member/Friend");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_023						= hash_file('sha256', "./Applications/Member/Language");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_024						= hash_file('sha256', "./Applications/Member/Legal");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_025						= hash_file('sha256', "./Applications/Member/Lightning_Calculate");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_026						= hash_file('sha256', "./Applications/Member/List");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_027						= hash_file('sha256', "./Applications/Member/Login");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_028						= hash_file('sha256', "./Applications/Member/Market");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_029						= hash_file('sha256', "./Applications/Member/Media_Player");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_030						= hash_file('sha256', "./Applications/Member/Member_Directory");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_031						= hash_file('sha256', "./Applications/Member/Messenger");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_032						= hash_file('sha256', "./Applications/Member/News");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_033						= hash_file('sha256', "./Applications/Member/Notepad");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_034						= hash_file('sha256', "./Applications/Member/Pages");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_035						= hash_file('sha256', "./Applications/Member/Profile");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_036						= hash_file('sha256', "./Applications/Member/Recommendations");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_037						= hash_file('sha256', "./Applications/Member/Referrers");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_038						= hash_file('sha256', "./Applications/Member/Register");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_039						= hash_file('sha256', "./Applications/Member/Reset_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_040						= hash_file('sha256', "./Applications/Member/Search");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_041						= hash_file('sha256', "./Applications/Member/Submit_News");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_042						= hash_file('sha256', "./Applications/Member/System");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_043						= hash_file('sha256', "./Applications/Member/System_Message");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_044						= hash_file('sha256', "./Applications/Member/Theme");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_045						= hash_file('sha256', "./Applications/Member/Travel");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_046						= hash_file('sha256', "./Applications/Member/Update_Account");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_047						= hash_file('sha256', "./Applications/Member/Update_Password");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_048						= hash_file('sha256', "./Applications/Member/Upload");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_049						= hash_file('sha256', "./Applications/Member/VoIP");
$_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_050						= hash_file('sha256', "./Applications/Member/Webspace");

echo ("<HR>Finding File Integrity :: For :: Directory and Files :: ./Applications/Administration<HR ALIGN=\"LEFT\" WIDTH=\"25%\">");

echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_001 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Accounts<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_002 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Applications<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_003 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Archive<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_004 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Control_Panel<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_005 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Emulators<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_006 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/File_Categories<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_007 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/File_Manager<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_008 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Forum<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_009 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/GIT<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_010 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Messenger<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_011 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Networking<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_012 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Panels<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_013 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/PHP_Information.php<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_014 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/PlugIns<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_015 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Publish<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_016 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Ranks<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_017 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Referrers<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_018 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Robot_Monitor<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_019 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Settings<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_020 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Submissions<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_021 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Terminal<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_022 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Themes<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_023 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Update<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_024 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/VoIP<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_025 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/Web_Pages<BR><BR>");

echo ("<HR>Finding File Integrity :: For :: Directory and Files :: ./Applications/Member<HR ALIGN=\"LEFT\" WIDTH=\"25%\">");

echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_001 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Account_Data<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_002 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Account_Recovery<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_003 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Active_Members<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_004 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/All_News<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_005 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/All_Shouts<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_006 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Application_List<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_007 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Articles<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_008 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Calculator<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_009 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Calendar<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_010 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Clock<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_011 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Comment<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_012 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Contact_Administrator<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_013 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Control_Panel<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_014 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Devices<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_015 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Documentation<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_016 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Download<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_017 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Electronic_Mail<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_018 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Emulators<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_019 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Files<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_020 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Forum<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_021 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Forward<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_022 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Friend<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_023 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Language<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_024 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Legal<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_025 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Lightning_Calculate<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_026 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/List<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_027 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Login<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_028 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Market<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_029 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Media_Player<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_030 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Member_Directory<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_031 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Messenger<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_032 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/News<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_033 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Notepad<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_034 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Pages<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_035 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Profile<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_036 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Recommendations<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_037 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Referrers<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_038 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Register<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_039 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Reset_Password<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_040 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Search<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_041 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Submit_News<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_042 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/System<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_043 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/System_Message<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_044 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Theme<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_045 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Travel<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_046 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Update_Account<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_047 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Update_Password<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_048 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Upload<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_049 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/VoIP<BR>");
echo ("* Finding File Integrity For File: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_050 :: $_ARCHITECT_INTEGRITY_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/Webspace<BR>");

} // [ + ] IF: Internal Application: File Integrity :: Is: Activated

/*
 ============================================================================================================
 +
 + Internal Application :: File Permissions
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "File_Permissions") {

/*
echo ("<HR>Setting File Permissions :: For :: Directory and Files :: ./Applications/Administration<HR>");

$_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL		= "0444";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION			= "./Applications/Administration";
$_ARCHITECT_PERMISSIONS_FILES_OPEN_DIRECTORY_APPLICATION_ADMINISTRATION			= opendir($_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION);

$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_001	= "Accounts";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_002	= "Applications";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_003	= "Archive";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_004	= "Control_Panel";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_005	= "Emulators";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_006	= "File_Categories";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_007	= "File_Manager";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_008	= "Forum";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_009	= "GIT";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_010	= "Messenger";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_011	= "Networking";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_012	= "Panels";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_013	= "PHP_Information.php";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_014	= "PlugIns";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_015	= "Publish";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_016	= "Ranks";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_017	= "Referrers";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_018	= "Robot_Monitor";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_019	= "Settings";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_020	= "Submissions";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_021	= "Terminal";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_022	= "Themes";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_023	= "Update";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_024	= "VoIP";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_025	= "Web_Pages";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_026	= "index.php";

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_001", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_001<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_002", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_002<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_003", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_003<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_004", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_004<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_005", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_005<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_006", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_006<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_007", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_007<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_008", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_008<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_009", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_009<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_010", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_010<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_011", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_011<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_012", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_012<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_013", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_013<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_014", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_014<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_015", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_015<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_016", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_016<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_017", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_017<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_018", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_018<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_019", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_019<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_020", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_020<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_021", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_021<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_022", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_022<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_023", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_023<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_024", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_024<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_025", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_025<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_026", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_ADMINISTRATION_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_ADMINISTRATION_FILE_026<BR>");
echo ("<BR><HR>Setting File Permissions :: For :: Directory and Files :: ./Applications/Member<HR>");

$_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL		= "0444";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER			= "./Applications/Member";

$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_001	= "Account_Data";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_002	= "Account_Recovery";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_003	= "Active_Members";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_004	= "All_News";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_005	= "All_Shouts";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_006	= "Application_List";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_007	= "Articles";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_008	= "Calculator";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_009	= "Calendar";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_010	= "Clock";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_011	= "Comment";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_012	= "Contact_Administrator";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_013	= "Control_Panel";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_014	= "Devices";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_015	= "Documentation";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_016	= "Download";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_017	= "Electronic_Mail";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_018	= "Emulators";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_019	= "Files";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_020	= "Forum";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_021	= "Forward";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_022	= "Friend";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_023	= "Language";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_024	= "Legal";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_025	= "Lightning_Calculate";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_026	= "List";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_027	= "Login";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_028	= "Market";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_029	= "Media_Player";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_030	= "Member_Directory";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_031	= "Messenger";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_032	= "News";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_033	= "Notepad";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_034	= "Pages";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_035	= "Profile";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_036	= "Recommendations";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_037	= "Referrers";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_038	= "Register";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_039	= "Reset_Password";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_040	= "Search";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_041	= "Submit_News";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_042	= "System";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_043	= "System_Message";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_044	= "Theme";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_045	= "Travel";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_046	= "Update_Account";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_047	= "Update_Password";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_048	= "Upload";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_049	= "VoIP";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_050	= "Webspace";
$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_051	= "index.php";

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_001", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_001<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_002", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_002<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_003", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_003<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_004", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_004<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_005", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_005<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_006", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_006<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_007", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_007<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_008", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_008<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_009", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_009<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_010", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_010<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_011", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_011<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_012", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_012<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_013", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_013<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_014", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_014<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_015", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_015<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_016", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_016<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_017", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_017<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_018", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_018<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_019", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_019<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_020", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_020<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_021", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_021<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_022", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_022<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_023", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_023<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_024", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_024<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_025", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_025<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_026", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_026<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_027", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_027<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_028", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_028<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_029", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_029<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_030", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_030<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_031", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_031<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_032", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_032<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_033", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_033<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_034", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_034<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_035", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_035<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_036", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_036<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_037", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_037<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_038", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_038<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_039", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_039<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_040", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_040<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_041", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_041<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_042", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_042<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_043", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_043<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_044", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_044<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_045", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_045<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_046", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_046<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_047", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_047<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_048", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_048<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_049", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_049<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_050", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_050<BR>");

chmod("$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER/$_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_051", octdec($_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL));
echo ("Architect: Message: Change-Mode File Permissions Were Set To: $_ARCHITECT_PERMISSIONS_FILES_VALUE_APPLICATIONS_MEMBER_VALUE_OCTAL On File: $_ARCHITECT_PERMISSIONS_FILES_FIND_DIRECTORY_APPLICATION_MEMBER_FILE_051<BR>");
*/

} // [ + ] IF: Internal Application :: File_Permissions :: Is: Activated

/*
 ============================================================================================================
 +
 + Internal Application :: Server Software System Information
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "ServerSoftware_Information") {

echo ("
		<HR>
			<B>Detailed Server Software Information</B>
		<HR>

<B>Local Server Date and Time Information</B><BR>
*&nbsp;Local Server Date: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP<BR>
*&nbsp;Local Server Date ( RFC ): $_GLOBAL_LOCAL_SERVER_DATE_RFC<BR>
*&nbsp;Local Server Time ( Hours ): $_GLOBAL_LOCAL_SERVER_TIME_HOURS<BR>
*&nbsp;Local Server Time ( Minutes ): $_GLOBAL_LOCAL_SERVER_TIME_MINUTES<BR>
*&nbsp;Local Server Time ( Seconds ): $_GLOBAL_LOCAL_SERVER_TIME_SECONDS<BR><BR>

<B>Local Server Software Information</B><BR>
*&nbsp;Local Server Gateway Interface: $_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE<BR>
*&nbsp;Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS<BR>
*&nbsp;Local Server Name: $_GLOBAL_LOCAL_SERVER_NAME<BR>
*&nbsp;Local Server Software: $_GLOBAL_LOCAL_SERVER_SOFTWARE<BR>
*&nbsp;Local Server Protocol: $_GLOBAL_LOCAL_SERVER_PROTOCOL<BR><BR>

<B>Remote Server Software Information</B><BR>
*&nbsp;Remote Server Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS<BR>
*&nbsp;Remote Server HostName: $_GLOBAL_REMOTE_SERVER_HOSTNAME<BR>
*&nbsp;Remote Server Port: $_GLOBAL_REMOTE_SERVER_PORT<BR>
*&nbsp;Remote Server User: $_GLOBAL_REMOTE_SERVER_USER
");

} // [ + ] IF: Internal Application: ServerSoftware_Information Is Activated

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language Document: End
 +
 ============================================================================================================
*/

	echo ("<HR><CENTER>Copyright <BIG><B>&copy;</B></BIG> <A HREF=\"$_PROJECT_SERVER_URL_GITHUB_SECURE\" TARGET=\"_NEW\" TITLE=\":: $_PROJECT_DEVELOPER_STRING_NAME_EXTENDED On :: GITHub ::\">$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED</A>, <A HREF=\"$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED Software Project On :: SourceForge ::\">$_PROJECT_STRING_NAME_EXTENDED</A>, <A HREF=\"mailto:$_PROJECT_STRING_LEGAL_ELECTRONIC_MAIL_ADDRESS\" TITLE=\":: Send :: Electronic Mail Message :: To :: $_PROJECT_STRING_LEGAL_ELECTRONIC_MAIL_ADDRESS ::\">$_PROJECT_STRING_LEGAL_NAME_AUTHOR</A>, 2000 - Present-Day.</CENTER><HR></TD></TR></TABLE>
	</BODY>
</HTML>
");
?>