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
<div class="title">nvml.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2012-2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;</div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">#ifndef HWLOC_NVML_H</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#define HWLOC_NVML_H</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &lt;nvml.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="a00110.php#ga26cf0036d09ec4d7cb692380fac9659d">   56</a></span>&#160;<a class="code" href="a00110.php#ga26cf0036d09ec4d7cb692380fac9659d">hwloc_nvml_get_device_cpuset</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                             nvmlDevice_t device, <a class="code" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;{</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;<span class="preprocessor">#define HWLOC_NVML_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;  <span class="keywordtype">char</span> path[HWLOC_NVML_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;  nvmlReturn_t nvres;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;  nvmlPciInfo_t pci;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;  }</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;  nvres = nvmlDeviceGetPciInfo(device, &amp;pci);</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;  <span class="keywordflow">if</span> (NVML_SUCCESS != nvres) {</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;  }</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/%04x:%02x:%02x.0/local_cpus&quot;</span>, pci.domain, pci.bus, pci.device);</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;  <a class="code" href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a>(sysfile, set);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a>(set))</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;  <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;}</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00109"></a><span class="lineno"><a class="line" href="a00110.php#gacd50fd0e2766ee05bc13234b46714756">  109</a></span>&#160;<a class="code" href="a00110.php#gacd50fd0e2766ee05bc13234b46714756">hwloc_nvml_get_device_osdev_by_index</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <span class="keywordtype">unsigned</span> idx)</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;{</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;        <a class="code" href="a00036.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a> == osdev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a></div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;                    &amp;&amp; !strncmp(<span class="stringliteral">&quot;nvml&quot;</span>, osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, 4)</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;                    &amp;&amp; atoi(osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a> + 4) == (<span class="keywordtype">int</span>) idx)</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;        }</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;}</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00136"></a><span class="lineno"><a class="line" href="a00110.php#gaf176159b5760a191871eff23f5a69ee9">  136</a></span>&#160;<a class="code" href="a00110.php#gaf176159b5760a191871eff23f5a69ee9">hwloc_nvml_get_device_osdev</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, nvmlDevice_t device)</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;{</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;        <a class="code" href="a00036.php">hwloc_obj_t</a> osdev;</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;        nvmlReturn_t nvres;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;        nvmlPciInfo_t pci;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;        <span class="keywordflow">if</span> (!<a class="code" href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;                errno = EINVAL;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;                <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;        }</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;        nvres = nvmlDeviceGetPciInfo(device, &amp;pci);</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        <span class="keywordflow">if</span> (NVML_SUCCESS != nvres)</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;                <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;        osdev = NULL;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;                <a class="code" href="a00036.php">hwloc_obj_t</a> pcidev = osdev-&gt;<a class="code" href="a00036.php#adc494f6aed939992be1c55cca5822900">parent</a>;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;                <span class="keywordflow">if</span> (strncmp(osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, <span class="stringliteral">&quot;nvml&quot;</span>, 4))</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;                        <span class="keywordflow">continue</span>;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;                <span class="keywordflow">if</span> (pcidev</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#acc4f0803f244867e68fe0036800be5de">type</a> == <a class="code" href="a00074.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9">HWLOC_OBJ_PCI_DEVICE</a></div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a8fba44988deb98613c1505a4019a34dc">domain</a> == pci.domain</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#aae99e035e8d1387d7b8768aaa8eceb0a">bus</a> == pci.bus</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">dev</a> == pci.device</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a695f32df53f4ef728670bfcf31b74e0f">func</a> == 0)</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;        }</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;}</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_NVML_H */</span><span class="preprocessor"></span></div>
<div class="ttc" id="a00036_php"><div class="ttname"><a href="a00036.php">hwloc_obj</a></div><div class="ttdoc">Structure of a topology object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:339</div></div>
<div class="ttc" id="a00042_php_a8fba44988deb98613c1505a4019a34dc"><div class="ttname"><a href="a00042.php#a8fba44988deb98613c1505a4019a34dc">hwloc_obj_attr_u::hwloc_pcidev_attr_s::domain</a></div><div class="ttdeci">unsigned short domain</div><div class="ttdef"><b>Definition:</b> hwloc.h:509</div></div>
<div class="ttc" id="a00096_php_ga036068a22d1aa5cb9ff1df348b525ff3"><div class="ttname"><a href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a></div><div class="ttdeci">void hwloc_bitmap_copy(hwloc_bitmap_t dst, hwloc_const_bitmap_t src)</div><div class="ttdoc">Copy the contents of bitmap src into the already allocated bitmap dst. </div></div>
<div class="ttc" id="a00103_php_gaa5a608236c3c0757b0b79818f1d429fb"><div class="ttname"><a href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a></div><div class="ttdeci">int hwloc_linux_parse_cpumap_file(FILE *file, hwloc_cpuset_t set)</div><div class="ttdoc">Convert a linux kernel cpumap file file into hwloc CPU set. </div></div>
<div class="ttc" id="a00042_php_a3d70c84a12f7e93d14c8d47bf4fd9dc5"><div class="ttname"><a href="a00042.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">hwloc_obj_attr_u::hwloc_pcidev_attr_s::dev</a></div><div class="ttdeci">unsigned char dev</div><div class="ttdef"><b>Definition:</b> hwloc.h:510</div></div>
<div class="ttc" id="a00092_php_ga69fbad44c685e46d80ecf51a714ba9ce"><div class="ttname"><a href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a></div><div class="ttdeci">static hwloc_const_cpuset_t hwloc_topology_get_complete_cpuset(hwloc_topology_t topology)</div><div class="ttdoc">Get complete CPU set. </div><div class="ttdef"><b>Definition:</b> helper.h:782</div></div>
<div class="ttc" id="a00042_php_a695f32df53f4ef728670bfcf31b74e0f"><div class="ttname"><a href="a00042.php#a695f32df53f4ef728670bfcf31b74e0f">hwloc_obj_attr_u::hwloc_pcidev_attr_s::func</a></div><div class="ttdeci">unsigned char func</div><div class="ttdef"><b>Definition:</b> hwloc.h:510</div></div>
<div class="ttc" id="a00095_php_ga8b4584c8949e2c5f1c97ba7fe92b8145"><div class="ttname"><a href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_get_next_osdev(hwloc_topology_t topology, hwloc_obj_t prev)</div><div class="ttdoc">Get the next OS device in the system. </div><div class="ttdef"><b>Definition:</b> helper.h:1231</div></div>
<div class="ttc" id="a00036_php_adc494f6aed939992be1c55cca5822900"><div class="ttname"><a href="a00036.php#adc494f6aed939992be1c55cca5822900">hwloc_obj::parent</a></div><div class="ttdeci">struct hwloc_obj * parent</div><div class="ttdoc">Parent, NULL if root (system object) </div><div class="ttdef"><b>Definition:</b> hwloc.h:370</div></div>
<div class="ttc" id="a00110_php_gaf176159b5760a191871eff23f5a69ee9"><div class="ttname"><a href="a00110.php#gaf176159b5760a191871eff23f5a69ee9">hwloc_nvml_get_device_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_nvml_get_device_osdev(hwloc_topology_t topology, nvmlDevice_t device)</div><div class="ttdoc">Get the hwloc OS device object corresponding to NVML device device. </div><div class="ttdef"><b>Definition:</b> nvml.h:136</div></div>
<div class="ttc" id="a00036_php_acc4f0803f244867e68fe0036800be5de"><div class="ttname"><a href="a00036.php#acc4f0803f244867e68fe0036800be5de">hwloc_obj::type</a></div><div class="ttdeci">hwloc_obj_type_t type</div><div class="ttdoc">Type of object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:341</div></div>
<div class="ttc" id="a00073_php_ga4bbf39b68b6f568fb92739e7c0ea7801"><div class="ttname"><a href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a></div><div class="ttdeci">hwloc_bitmap_t hwloc_cpuset_t</div><div class="ttdoc">A CPU set is a bitmap whose bits are set according to CPU physical OS indexes. </div><div class="ttdef"><b>Definition:</b> hwloc.h:122</div></div>
<div class="ttc" id="a00074_php_gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90"><div class="ttname"><a href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a></div><div class="ttdoc">Operating system GPU device. For instance ":0.0" for a GL display, "card0" for a Linux DRM device...</div><div class="ttdef"><b>Definition:</b> hwloc.h:269</div></div>
<div class="ttc" id="a00110_php_gacd50fd0e2766ee05bc13234b46714756"><div class="ttname"><a href="a00110.php#gacd50fd0e2766ee05bc13234b46714756">hwloc_nvml_get_device_osdev_by_index</a></div><div class="ttdeci">static hwloc_obj_t hwloc_nvml_get_device_osdev_by_index(hwloc_topology_t topology, unsigned idx)</div><div class="ttdoc">Get the hwloc OS device object corresponding to the NVML device whose index is idx. </div><div class="ttdef"><b>Definition:</b> nvml.h:109</div></div>
<div class="ttc" id="a00036_php_accd40e29f71f19e88db62ea3df02adc8"><div class="ttname"><a href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj::attr</a></div><div class="ttdeci">union hwloc_obj_attr_u * attr</div><div class="ttdoc">Object type-specific Attributes, may be NULL if no attribute value was found. </div><div class="ttdef"><b>Definition:</b> hwloc.h:350</div></div>
<div class="ttc" id="a00037_php_a22904c25fe44b323bab5c9bc52660fca"><div class="ttname"><a href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">hwloc_obj_attr_u::osdev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_osdev_attr_s osdev</div></div>
<div class="ttc" id="a00041_php_a31e019e27e54ac6138d04be639bb96f9"><div class="ttname"><a href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s::type</a></div><div class="ttdeci">hwloc_obj_osdev_type_t type</div><div class="ttdef"><b>Definition:</b> hwloc.h:533</div></div>
<div class="ttc" id="a00037_php_a4203d713ce0f5beaa6ee0e9bdac70828"><div class="ttname"><a href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">hwloc_obj_attr_u::pcidev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_pcidev_attr_s pcidev</div></div>
<div class="ttc" id="a00036_php_abb709ec38f2970677e4e57d1d30be96d"><div class="ttname"><a href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj::name</a></div><div class="ttdeci">char * name</div><div class="ttdoc">Object description if any. </div><div class="ttdef"><b>Definition:</b> hwloc.h:346</div></div>
<div class="ttc" id="a00077_php_ga68ffdcfd9175cdf40709801092f18017"><div class="ttname"><a href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a></div><div class="ttdeci">int hwloc_topology_is_thissystem(hwloc_topology_t restrict topology)</div><div class="ttdoc">Does the topology context come from this system? </div></div>
<div class="ttc" id="a00074_php_ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9"><div class="ttname"><a href="a00074.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9">HWLOC_OBJ_PCI_DEVICE</a></div><div class="ttdoc">PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unl...</div><div class="ttdef"><b>Definition:</b> hwloc.h:228</div></div>
<div class="ttc" id="a00096_php_ga5b64be28f5a7176ed8ad0d6a90bdf108"><div class="ttname"><a href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a></div><div class="ttdeci">int hwloc_bitmap_iszero(hwloc_const_bitmap_t bitmap)</div><div class="ttdoc">Test whether bitmap bitmap is empty. </div></div>
<div class="ttc" id="a00042_php_aae99e035e8d1387d7b8768aaa8eceb0a"><div class="ttname"><a href="a00042.php#aae99e035e8d1387d7b8768aaa8eceb0a">hwloc_obj_attr_u::hwloc_pcidev_attr_s::bus</a></div><div class="ttdeci">unsigned char bus</div><div class="ttdef"><b>Definition:</b> hwloc.h:510</div></div>
<div class="ttc" id="a00076_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:596</div></div>
<div class="ttc" id="a00110_php_ga26cf0036d09ec4d7cb692380fac9659d"><div class="ttname"><a href="a00110.php#ga26cf0036d09ec4d7cb692380fac9659d">hwloc_nvml_get_device_cpuset</a></div><div class="ttdeci">static int hwloc_nvml_get_device_cpuset(hwloc_topology_t topology, nvmlDevice_t device, hwloc_cpuset_t set)</div><div class="ttdoc">Get the CPU set of logical processors that are physically close to NVML device device. </div><div class="ttdef"><b>Definition:</b> nvml.h:56</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
