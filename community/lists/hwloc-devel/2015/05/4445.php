<?
$subject_val = "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 11:01:55 2015" -->
<!-- isoreceived="20150512150155" -->
<!-- sent="Tue, 12 May 2015 17:01:50 +0200" -->
<!-- isosent="20150512150150" -->
<!-- name="Peter Korsgaard" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition" -->
<!-- id="87iobxhmap.fsf_at_dell.be.48ers.dk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150512144605.GB15528_at_type.bordeaux.inria.fr" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition<br>
<strong>From:</strong> Peter Korsgaard (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 11:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Samuel&quot; == Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; writes:
</span><br>
<p><span class="quotelev1"> &gt; Peter Korsgaard, le Tue 12 May 2015 16:09:55 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2"> &gt;&gt; Make install contains a race condition in utils/hwloc, as both
</span><br>
<span class="quotelev2"> &gt;&gt; install-exec-hook (through intall-exec) and install-data trigger
</span><br>
<span class="quotelev2"> &gt;&gt; install-man:
</span><br>
<p><span class="quotelev1"> &gt; I'm surprised: isn't make supposed to handle this kind of dependency
</span><br>
<span class="quotelev1"> &gt; concurrency?
</span><br>
<p>Within the same make instance, yes - but install-exec fires up a new
<br>
make instance to handle install-exec-hook:
<br>
<p>install-exec-am: install-binPROGRAMS install-binSCRIPTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@$(NORMAL_INSTALL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MAKE) $(AM_MAKEFLAGS) install-exec-hook
<br>
<p>And this is in the Makefile.in code generated by automake, so I don't
<br>
think there's any way around that.
<br>
<p><pre>
-- 
Venlig hilsen,
Peter Korsgaard 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>