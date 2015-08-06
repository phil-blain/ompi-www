<?php
$topdir = "../..";

$title = "GlassBottom Mailing Lists";

include_once("nav.inc");
include_once("functions.inc");
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");
?>

<p><center><?php red("YOU MUST BE SUBSCRIBED IN ORDER TO POST!");
?></center></p>

<p> Due to the ever-present problem of spam, we cannot accept posts
from non-subscribers.  If you are not subscribed <?php red("with the
address that you post from"); ?>, you posts will be automatically
discarded.</p>

<p><center><hr width=50%></center>

<P>The following lists are available for the <a href="<?php
print($topdir); ?>/projects/pmix/">PMIx</a> community:</p>

<P>
<UL>

<?php print_link("GlassBottom announcement list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "announce-glassbottom"); ?>

<P> This is a low-volume list that is used to announce new version of
GlassBottom, important updates, etc.  The list is only for announcements, so
<strong>only the GlassBottom development team can post to the list.</strong>
Posts from outside the GlassBottom development team will be automatically
discarded.</p>

<?php print_link("GlassBottom developers list", "devel-glassbottom"); ?>

<P>This list is used for general questions and discussion of GlassBottom.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("devel-glassbottom"); ?>

<?php print_link("Git commit list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "glassbottom-commits"); ?>

<p>A mail is sent to this list for every Git push to Github commit in
the GlassBottom code base.  The mail includes a list of files that were
changed, the developer's commit message, and a diff of the changes.
<strong>Only the automated git-email-bot can post to this
list;</strong> all other posts are automatically discarded.

</UL>

<?php
  include_once("$topdir/includes/footer.inc");