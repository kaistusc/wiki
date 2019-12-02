<?php
# This file was automatically generated by the MediaWiki 1.33.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined('MEDIAWIKI') ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "2Wiki";
$wgMetaNamespace = "프로젝트";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
// $wgScriptPath = "/w";
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

$actions = array('edit', 'watch', 'unwatch', 'delete','revert', 'rollback',
  'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'info');

foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/wiki/$action/$1";
}
$wgActionPaths['view'] = "/wiki/$1";
$wgArticlePath = $wgActionPaths['view'];

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://2js.dev";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgScriptPath/images/7/7b/2Wiki_Logo.png";
$wgLogoHD["2x"] = "$wgScriptPath/images/2/27/2Wiki_Logo_2x.png";
$wgFavicon = "$wgScriptPath/images/b/bc/2Wiki_Favicon.ico";
$wgAppleTouchIcon = "$wgScriptPath/images/4/4a/2Wiki_Apple_touch_icon.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "lego3410@gmail.com";
$wgPasswordSender = "lego3410@gmail.com";

$wgSMTP = [
    'host' => 'ssl://smtp.gmail.com',
    'IDHost' => 'gmail.com',
    'localhost' => '2js.dev',
    'port' => 465,
    'username' => "lego3410@gmail.com",
    'password' => "pfgkappqdcxybobc",
    'auth' => true
];

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "wiki_db_1";
$wgDBname = "wiki";
$wgDBuser = "sysop";
$wgDBpassword = "wLIwDrA9DSHbS3T6kP";

# MySQL specific settings
$wgDBprefix = "wiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;

# Allowed File Extensions
$wgFileExtensions = array(
	'png', 'gif', 'jpg', 'jpeg',
	'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx',
	'pdf', 'ico',
	'mp4', 'mov', 'm4v',
	'psd', 'ai'
);

$wgTrustedMediaFormats[] = 'video/quicktime';

$wgUploadSizeWarning = 128*1024*1024;
$wgMaxUploadSize = 2*1024*1024*1024;

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "ko";

$wgSecretKey = "0ca2d1c1b95422b8b51d5550846fb3af4fa6e2ed4955ca01bf7a46a24116f7f4";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "80f5a86a9f1cf12e";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/4.0/";
$wgRightsText = "크리에이티브 커먼즈 저작자표시-비영리-동일조건변경허락";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Set default timezone
$wgLocaltimezone = "Asia/Seoul";

# Custom Namespaces
define("NS_JJ", 506);
define("NS_JJ_TALK", 507);

$wgExtraNamespaces[NS_JJ] = "지윤";
$wgExtraNamespaces[NS_JJ_TALK] = "지윤_토론";

$wgNamespacesWithSubpages[NS_PROJECT] = true;
$wgNamespacesWithSubpages[NS_MEDIAWIKI] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;
$wgNamespacesWithSubpages[NS_JJ] = true;

$wgNamespacesToBeSearchedDefault[NS_JJ] = true;

# The following permissions were set based on your choice in the installer
$wgNamespaceProtection[NS_PROJECT] = ['edit-project'];

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['sysop']['edit-project'] = true;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";
wfLoadSkin('Vector');
$wgVectorResponsive = true;
$wgVectorUseIconWatch = true;
wfLoadSkin('MinervaNeue');

# End of automatically generated settings.
# Add more configuration options below.

# Extensions
wfLoadExtension('BetaFeatures');
wfLoadExtension('CategoryTree');
wfLoadExtension('Cite');
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ]);
$wgCaptchaClass = 'ReCaptchaNoCaptcha';
$wgReCaptchaSiteKey = "${RECAPTCHASITEKEY}";
$wgReCaptchaSecretKey = "${RECAPTCHASECRETKEY}";
wfLoadExtension('CiteThisPage');
wfLoadExtension('CodeEditor');
$wgDefaultUserOptions['usebetatoolbar'] = 1; // user option provided by WikiEditor extension
wfLoadExtension('Gadgets');
wfLoadExtension('ImageMap');
wfLoadExtension('InputBox');
wfLoadExtension('Interwiki');
$wgGroupPermissions['sysop']['interwiki'] = true;
// wfLoadExtension('LocalisationUpdate');
// $wgLocalisationUpdateDirectory = "$IP/cache";
wfLoadExtension('Lockdown');
wfLoadExtension('InviteSignup');
$wgGroupPermissions['bureaucrat']['invitesignup'] = true;
wfLoadExtension('MultimediaViewer');
wfLoadExtension('MobileFrontend');
$wgMFDefaultSkinClass = 'SkinMinerva';
wfLoadExtension('Nuke');
wfLoadExtension('OATHAuth');
$wgGroupPermissions['user']['oathauth-enable'] = true;
// wfLoadExtension('PageImages');
wfLoadExtension('ParserFunctions');
$wgPFEnableStringFunctions = true;
wfLoadExtension('PageImages'); // Popups Extension Dependency
// wfLoadExtension('PdfHandler');
wfLoadExtension('Poem');
wfLoadExtension('Popups');
$wgPopupsOptInDefaultState = '1';
wfLoadExtension('Renameuser');
wfLoadExtension('ReplaceText');
wfLoadExtension('SandboxLink');
wfLoadExtension('Scribunto');
$wgScribuntoDefaultEngine = 'luastandalone';
wfLoadExtension('SpamBlacklist');
wfLoadExtension('SyntaxHighlight_GeSHi');
wfLoadExtension('TemplateData');
wfLoadExtension('TextExtracts'); // Popups Extension Dependency
wfLoadExtension('TitleBlacklist');
wfLoadExtension('WikiEditor');

# VisualEditor Settings
wfLoadExtension('VisualEditor');
// Enable by default for everybody
$wgDefaultUserOptions['visualeditor-enable'] = 1;

// Optional: Set VisualEditor as the default for anonymous users
// otherwise they will have to switch to VE
$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";

// Don't allow users to disable it
// $wgHiddenPrefs[] = 'visualeditor-enable';

$wgVisualEditorAutoAccountEnable = true; // Whether to enable VisualEditor for every new account.

// $wgVisualEditorEnableTocWidget = true;

// OPTIONAL: Enable VisualEditor's experimental code features
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;

$wgVisualEditorEnableWikitext = true;
$wgDefaultUserOptions['visualeditor-newwikitext'] = 1;

$wgVisualEditorUseSingleEditTab = true;
$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";
$wgVisualEditorEnableDiffPage = true;

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance
    // Use port 8142 if you use the Debian package
    'url' => 'http://parsoid:8000',
    'domain' => 'wiki',
);
$wgSessionsInObjectCache = true;
$wgVirtualRestConfig['modules']['parsoid']['forwardCookies'] = true;

$wgVisualEditorAvailableNamespaces = [
	NS_PROJECT => true,
	NS_PROJECT_TALK => true,
	NS_MEDIAWIKI => true,
	NS_MEDIAWIKI_TALK => true,
	NS_TEMPLATE => true,
	NS_TEMPLATE => true,
	NS_HELP => true,
	NS_HELP_TALK => true,
	NS_JJ => true,
	NS_JJ_TALK => true
];

$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
