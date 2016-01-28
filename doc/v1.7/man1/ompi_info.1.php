<?php
$topdir = "../../..";
$title = "ompi_info(1) man page (version 1.7.4)";
$meta_desc = "Open MPI v1.7.4 man page: ompi_info(1)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
   <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
ompi_info - Display information about the Open MPI installation

<h2><a name='sect1' href='#toc1'>Synopsis</a></h2>
<b>ompi_info [options]</b>
<h2><a name='sect2' href='#toc2'>Description</a></h2>
<p>
<b>ompi_info</b> provides detailed
information about the Open MPI installation.  It can be useful for at least
three common scenarios: <p>
1. Checking local configuration and seeing how Open
MPI was installed. <p>
2. Submitting bug reports / help requests to the Open
MPI community (see  <i>https://www.open-mpi.org/community/help/</i>) <p>
3. Seeing a list
of installed Open MPI plugins and querying what  MCA parameters they support.

<h2><a name='sect3' href='#toc3'>Options</a></h2>
<b>ompi_info</b> accepts the following options:
<dl>

<dt><i>-a|--all</i>  </dt>
<dd>Show all configuration
options and MCA parameters </dd>

<dt><i>--arch</i>    </dt>
<dd>Show architecture Open MPI was compiled
on </dd>

<dt><i>-c|--config</i> </dt>
<dd>Show configuration options </dd>

<dt><i>-gmca|--gmca</i> &lt;param&gt; &lt;value&gt; </dt>
<dd>Pass global
MCA parameters that are applicable to all contexts. </dd>

<dt><i>-h|--help</i> </dt>
<dd>Shows help / usage
message </dd>

<dt><i>--hostname</i> </dt>
<dd>Show the hostname that Open MPI was configured and built
on </dd>

<dt><i>--internal</i> </dt>
<dd>Show internal MCA parameters (not meant to be modified by users)
</dd>

<dt><i>--level</i> </dt>
<dd>Show only variables with at most this level (1-9). The default is 1
unless --all is specified without --level in which case the default is 9. See
the LEVEL section for more information. </dd>

<dt><i>-mca|--mca</i> &lt;param&gt; &lt;value&gt; </dt>
<dd>Pass context-specific
MCA parameters; they are considered global if --gmca is not used and only
one context is specified. </dd>

<dt><i>--param</i> &lt;type&gt; &lt;component&gt; </dt>
<dd>Show MCA parameters.  The
first parameter is the type of the component to display; the second parameter
is the specific component to display (or the keyword "all", meaning "display
all components of this type"). </dd>

<dt><i>--parsable</i> </dt>
<dd>When used in conjunction with other
parameters, the output is displayed in a machine-parsable format <i>--parseable</i>
Synonym for --parsable </dd>

<dt><i>--path</i> &lt;type&gt; </dt>
<dd>Show paths that Open MPI was configured
with.  Accepts the following parameters: prefix, bindir, libdir, incdir,
pkglibdir, sysconfdir. </dd>

<dt><i>--pretty</i> </dt>
<dd>When used in conjunction with other parameters,
the output is displayed in &rsquo;prettyprint&rsquo; format (default) </dd>

<dt><i>--selected-only</i> </dt>
<dd>Show
only variables from selected components. </dd>

<dt><i>-V|--version</i> </dt>
<dd>Show version of Open MPI.
    </dd>
</dl>

<h2><a name='sect4' href='#toc4'>Levels</a></h2>

<ol>
<li>Basic information of interest to users  </li><li>Detailed information
of interest to users  </li><li>All remaining information of interest to users  </li>
<li>Basic information required for tuning  </li><li>Detailed information required for
tuning  </li><li>All remaining information required for tuning  </li><li>Basic information
for MPI implementors  </li><li>Detailed information for MPI implementors  </li><li>All remaining
information for MPI implementors     </li>
</ol>

<h2><a name='sect5' href='#toc5'>Examples</a></h2>

<dl>

<dt>ompi_info </dt>
<dd>Show the default
output of options and listing of installed components in a human-readable
/ prettyprint format.   </dd>

<dt>ompi_info --parsable </dt>
<dd>Show the default output of options
and listing of installed components in a machine-parsable format.   </dd>

<dt>ompi_info
--param btl openib </dt>
<dd>Show the MCA parameters of the "openib" BTL component
in a human-readable / prettyprint format.   </dd>

<dt>ompi_info --param btl openib --parsable
</dt>
<dd>Show the MCA parameters of the "openib" BTL component in a machine-parsable
format.   </dd>

<dt>ompi_info --path bindir </dt>
<dd>Show the "bindir" that Open MPI was configured
with.   </dd>

<dt>ompi_info --version ompi full --parsable </dt>
<dd>Show the full version numbers
of Open MPI (including the ORTE and OPAL version numbers) in a machine-readable
format.   </dd>

<dt>ompi_info --version btl major </dt>
<dd>Show the major version number of all
BTL components in a prettyprint format.   </dd>

<dt>ompi_info --version btl:tcp minor
</dt>
<dd>Show the minor version number of the TCP BTL component in a prettyprint
format.   </dd>

<dt>ompi_info --all </dt>
<dd>Show  <i>all</i>  information about the Open MPI installation,
including all components that can be found, the MCA parameters that they
support, versions of Open MPI and the components, etc.      </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Authors</a></h2>
The Open
MPI maintainers -- see  <i><i>http://www.openmpi.org/</i></i> or the file <i>AUTHORS</i>. <p>
This manual
page was originally contributed by Dirk Eddelbuettel &lt;email-address-removed&gt;, one
of the Debian GNU/Linux maintainers for Open MPI, and may be used by others.
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Synopsis</a></li>
<li><a name='toc2' href='#sect2'>Description</a></li>
<li><a name='toc3' href='#sect3'>Options</a></li>
<li><a name='toc4' href='#sect4'>Levels</a></li>
<li><a name='toc5' href='#sect5'>Examples</a></li>
<li><a name='toc6' href='#sect6'>Authors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
