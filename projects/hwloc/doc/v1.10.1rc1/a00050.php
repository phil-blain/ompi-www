<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00051.php">hwloc_topology_diff_u</a></li><li class="navelem"><a class="el" href="a00050.php">hwloc_topology_diff_too_complex_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s Struct Reference<div class="ingroups"><a class="el" href="a00097.php">Topology differences</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00058_source.php">diff.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a92084295a4d6faf17a95a7eea526ddbd"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00097.php#ga4b86adb00c8b2d09ebc4ef8f3bfd92b2">hwloc_topology_diff_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a92084295a4d6faf17a95a7eea526ddbd">type</a></td></tr>
<tr class="separator:a92084295a4d6faf17a95a7eea526ddbd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a375afbaa043b109be689a7d9a3c7d153"><td class="memItemLeft" align="right" valign="top">union <a class="el" href="a00051.php">hwloc_topology_diff_u</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a375afbaa043b109be689a7d9a3c7d153">next</a></td></tr>
<tr class="separator:a375afbaa043b109be689a7d9a3c7d153"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a77e9eac7db8b073c9bf996f19eda1631"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a77e9eac7db8b073c9bf996f19eda1631">obj_depth</a></td></tr>
<tr class="separator:a77e9eac7db8b073c9bf996f19eda1631"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6dc6b3c4adb10db74d993e37afaa0580"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php#a6dc6b3c4adb10db74d993e37afaa0580">obj_index</a></td></tr>
<tr class="separator:a6dc6b3c4adb10db74d993e37afaa0580"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a375afbaa043b109be689a7d9a3c7d153"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">union <a class="el" href="a00051.php">hwloc_topology_diff_u</a>* hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s::next</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a77e9eac7db8b073c9bf996f19eda1631"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s::obj_depth</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a6dc6b3c4adb10db74d993e37afaa0580"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s::obj_index</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a92084295a4d6faf17a95a7eea526ddbd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00097.php#ga4b86adb00c8b2d09ebc4ef8f3bfd92b2">hwloc_topology_diff_type_t</a> hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s::type</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00058_source.php">diff.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
