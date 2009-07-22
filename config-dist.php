<?php
$ldap = array(
  "host" => "pm-ns.mozilla.org",
  "port" => 389
);
$connection = null;

# Fill out MySQL server info.
$mysql = array(
  "host" => "",
  "user" => "",
  "password" => "",
  "database" => ""
);

# Set the constants below to TRUE to avoid spamming / db junk.
define(DISABLE_MAIL, FALSE);
define(DISABLE_DB, FALSE);

# Specify HR managers with email address only.
$hr_managers = array(
  "dportillo@mozilla.com",
  "karen@mozilla.com"
);

# Specified in RFC address format. One address per array element, please.
$notified_people = array(
  "Karen Prescott <karen@mozilla.com>",
  "Erica McClure <erica@mozilla.com>"
);

# Set to "submitter" to mail on behalf of the person submitting the notification
$from = "submitter";

# The following template variables are available:
# %notifier%, %start%, %end%, %reason%
$subject = "PTO notification from %notifier%";
$body = <<<EOD
%notifier% has submitted PTO from %start% to %end% with the reason:
%reason%

- The Happy PTO Managing Intranet App
EOD;
