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
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">intel-mic.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;</div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef HWLOC_INTEL_MIC_H</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#define HWLOC_INTEL_MIC_H</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &lt;dirent.h&gt;</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &lt;string.h&gt;</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#include &lt;stdio.h&gt;</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#include &lt;stdlib.h&gt;</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="a00112.php#ga91bafa51abe81527f72437e24ad5944e">   58</a></span>&#160;<a class="code" href="a00112.php#ga91bafa51abe81527f72437e24ad5944e">hwloc_intel_mic_get_device_cpuset</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;                                  <span class="keywordtype">int</span> idx __hwloc_attribute_unused,</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;                                  <a class="code" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;{</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;        <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;<span class="preprocessor">#define HWLOC_INTEL_MIC_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        <span class="keywordtype">char</span> path[HWLOC_INTEL_MIC_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;        DIR *sysdir = NULL;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;        FILE *sysfile = NULL;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        <span class="keyword">struct </span>dirent *dirent;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;        <span class="keywordtype">unsigned</span> pcibus, pcidev, pcifunc;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;        <span class="keywordflow">if</span> (!<a class="code" href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;                errno = EINVAL;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;                <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;        }</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;        sprintf(path, <span class="stringliteral">&quot;/sys/class/mic/mic%d&quot;</span>, idx);</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        sysdir = opendir(path);</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        <span class="keywordflow">if</span> (!sysdir)</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;                <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;        <span class="keywordflow">while</span> ((dirent = readdir(sysdir)) != NULL) {</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;                <span class="keywordflow">if</span> (sscanf(dirent-&gt;d_name, <span class="stringliteral">&quot;pci_%02x:%02x.%02x&quot;</span>, &amp;pcibus, &amp;pcidev, &amp;pcifunc) == 3) {</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;                        sprintf(path, <span class="stringliteral">&quot;/sys/class/mic/mic%d/pci_%02x:%02x.%02x/local_cpus&quot;</span>, idx, pcibus, pcidev, pcifunc);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;                        sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;                        <span class="keywordflow">if</span> (!sysfile) {</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;                                closedir(sysdir);</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;                                <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;                        }</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;                        <a class="code" href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a>(sysfile, set);</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;                        <span class="keywordflow">if</span> (<a class="code" href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a>(set))</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;                                <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;                        fclose(sysfile);</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;                        <span class="keywordflow">break</span>;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;                }</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;        }</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        closedir(sysdir);</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;        <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;        <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;        <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;}</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00121"></a><span class="lineno"><a class="line" href="a00112.php#gabce0465e853de74be84cafcb96dd48ab">  121</a></span>&#160;<a class="code" href="a00112.php#gabce0465e853de74be84cafcb96dd48ab">hwloc_intel_mic_get_device_osdev_by_index</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;                                          <span class="keywordtype">unsigned</span> idx)</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;{</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;        <a class="code" href="a00036.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83">HWLOC_OBJ_OSDEV_COPROC</a> == osdev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a></div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;                    &amp;&amp; !strncmp(<span class="stringliteral">&quot;mic&quot;</span>, osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, 3)</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;                    &amp;&amp; atoi(osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a> + 3) == (<span class="keywordtype">int</span>) idx)</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;        }</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;}</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_INTEL_MIC_H */</span><span class="preprocessor"></span></div>
<div class="ttc" id="a00036_php"><div class="ttname"><a href="a00036.php">hwloc_obj</a></div><div class="ttdoc">Structure of a topology object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:339</div></div>
<div class="ttc" id="a00112_php_ga91bafa51abe81527f72437e24ad5944e"><div class="ttname"><a href="a00112.php#ga91bafa51abe81527f72437e24ad5944e">hwloc_intel_mic_get_device_cpuset</a></div><div class="ttdeci">static int hwloc_intel_mic_get_device_cpuset(hwloc_topology_t topology, int idx, hwloc_cpuset_t set)</div><div class="ttdoc">Get the CPU set of logical processors that are physically close to MIC device whose index is idx...</div><div class="ttdef"><b>Definition:</b> intel-mic.h:58</div></div>
<div class="ttc" id="a00096_php_ga036068a22d1aa5cb9ff1df348b525ff3"><div class="ttname"><a href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a></div><div class="ttdeci">void hwloc_bitmap_copy(hwloc_bitmap_t dst, hwloc_const_bitmap_t src)</div><div class="ttdoc">Copy the contents of bitmap src into the already allocated bitmap dst. </div></div>
<div class="ttc" id="a00103_php_gaa5a608236c3c0757b0b79818f1d429fb"><div class="ttname"><a href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a></div><div class="ttdeci">int hwloc_linux_parse_cpumap_file(FILE *file, hwloc_cpuset_t set)</div><div class="ttdoc">Convert a linux kernel cpumap file file into hwloc CPU set. </div></div>
<div class="ttc" id="a00092_php_ga69fbad44c685e46d80ecf51a714ba9ce"><div class="ttname"><a href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a></div><div class="ttdeci">static hwloc_const_cpuset_t hwloc_topology_get_complete_cpuset(hwloc_topology_t topology)</div><div class="ttdoc">Get complete CPU set. </div><div class="ttdef"><b>Definition:</b> helper.h:782</div></div>
<div class="ttc" id="a00095_php_ga8b4584c8949e2c5f1c97ba7fe92b8145"><div class="ttname"><a href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_get_next_osdev(hwloc_topology_t topology, hwloc_obj_t prev)</div><div class="ttdoc">Get the next OS device in the system. </div><div class="ttdef"><b>Definition:</b> helper.h:1231</div></div>
<div class="ttc" id="a00074_php_gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83"><div class="ttname"><a href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83">HWLOC_OBJ_OSDEV_COPROC</a></div><div class="ttdoc">Operating system co-processor device. For instance "mic0" for a Xeon Phi (MIC) on Linux...</div><div class="ttdef"><b>Definition:</b> hwloc.h:278</div></div>
<div class="ttc" id="a00073_php_ga4bbf39b68b6f568fb92739e7c0ea7801"><div class="ttname"><a href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a></div><div class="ttdeci">hwloc_bitmap_t hwloc_cpuset_t</div><div class="ttdoc">A CPU set is a bitmap whose bits are set according to CPU physical OS indexes. </div><div class="ttdef"><b>Definition:</b> hwloc.h:122</div></div>
<div class="ttc" id="a00036_php_accd40e29f71f19e88db62ea3df02adc8"><div class="ttname"><a href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj::attr</a></div><div class="ttdeci">union hwloc_obj_attr_u * attr</div><div class="ttdoc">Object type-specific Attributes, may be NULL if no attribute value was found. </div><div class="ttdef"><b>Definition:</b> hwloc.h:350</div></div>
<div class="ttc" id="a00037_php_a22904c25fe44b323bab5c9bc52660fca"><div class="ttname"><a href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">hwloc_obj_attr_u::osdev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_osdev_attr_s osdev</div></div>
<div class="ttc" id="a00041_php_a31e019e27e54ac6138d04be639bb96f9"><div class="ttname"><a href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s::type</a></div><div class="ttdeci">hwloc_obj_osdev_type_t type</div><div class="ttdef"><b>Definition:</b> hwloc.h:533</div></div>
<div class="ttc" id="a00036_php_abb709ec38f2970677e4e57d1d30be96d"><div class="ttname"><a href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj::name</a></div><div class="ttdeci">char * name</div><div class="ttdoc">Object description if any. </div><div class="ttdef"><b>Definition:</b> hwloc.h:346</div></div>
<div class="ttc" id="a00077_php_ga68ffdcfd9175cdf40709801092f18017"><div class="ttname"><a href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a></div><div class="ttdeci">int hwloc_topology_is_thissystem(hwloc_topology_t restrict topology)</div><div class="ttdoc">Does the topology context come from this system? </div></div>
<div class="ttc" id="a00096_php_ga5b64be28f5a7176ed8ad0d6a90bdf108"><div class="ttname"><a href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a></div><div class="ttdeci">int hwloc_bitmap_iszero(hwloc_const_bitmap_t bitmap)</div><div class="ttdoc">Test whether bitmap bitmap is empty. </div></div>
<div class="ttc" id="a00112_php_gabce0465e853de74be84cafcb96dd48ab"><div class="ttname"><a href="a00112.php#gabce0465e853de74be84cafcb96dd48ab">hwloc_intel_mic_get_device_osdev_by_index</a></div><div class="ttdeci">static hwloc_obj_t hwloc_intel_mic_get_device_osdev_by_index(hwloc_topology_t topology, unsigned idx)</div><div class="ttdoc">Get the hwloc OS device object corresponding to the MIC device for the given index. </div><div class="ttdef"><b>Definition:</b> intel-mic.h:121</div></div>
<div class="ttc" id="a00076_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:596</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
