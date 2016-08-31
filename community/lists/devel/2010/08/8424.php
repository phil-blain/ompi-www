<?
$subject_val = "[OMPI devel] Fwd:  1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 13:57:34 2010" -->
<!-- isoreceived="20100831175734" -->
<!-- sent="Tue, 31 Aug 2010 10:57:30 -0700" -->
<!-- isosent="20100831175730" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  1.5rc5 has been posted" -->
<!-- id="542C870F-5189-4EEB-A494-4BC89C48E108_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8B7DF307-7350-4566-91F5-85D3D85E7CFE_at_usgs.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 13:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The source of this problem is configure does not properly set up the  
<br>
LIBS variable in 1.5rc5 (compared to 1.4.2):
<br>
<p><span class="quotelev1">&gt; [root_at_hydra src]# diff openmpi-{1.4.2,1.5rc5}/config.log | grep -w  
</span><br>
<span class="quotelev1">&gt; LIBS=
</span><br>
<span class="quotelev1">&gt; &lt; LIBS='-lnsl -lutil  -lpthread'
</span><br>
<span class="quotelev2">&gt; &gt; LIBS='-lnsl  -lutil'
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Larry Baker &lt;baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 30, 2010 6:23:22 PM PDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Fwd: [OMPI devel] 1.5rc5 has been posted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same problem (LIBS = is missing -lpthread) occurs in orte/tools/ 
</span><br>
<span class="quotelev1">&gt; {orte-clean,orte-iof,orte-ps,orted,orterun,orte-top}/Makefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Larry Baker &lt;baker_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: August 30, 2010 4:48:01 PM PDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] 1.5rc5 has been posted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To follow up on <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8417.php">http://www.open-mpi.org/community/lists/devel/2010/08/8417.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; : OpenMPI 1.5rc5 fails in opal/tools/wrappers for PGI 10.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem appears to be a missing -lpthread in the definition of  
</span><br>
<span class="quotelev2">&gt;&gt; most of the *LIBS variables in OpenMPI 1.5rc5 opal/tools/wrappers/ 
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra src]# diff openmpi-{1.4.2,1.5rc5}/opal/tools/wrappers/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile | grep lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; LIBS = -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; LIBS = -lnsl  -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; OMPI_WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -lpthread -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; OMPI_WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; OPAL_WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -lpthread -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; OPAL_WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; ORTE_WRAPPER_EXTRA_LIBS =  -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -lpthread -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ORTE_WRAPPER_EXTRA_LIBS =  -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lutil -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; WRAPPER_EXTRA_LIBS =   -ldl   -Wl,--export-dynamic -lnsl -lutil - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lpthread -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WRAPPER_EXTRA_LIBS = -ldl   -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; crs_blcr_LIBS = -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; crs_blcr_LIBS = -lnsl  -lutil -lpthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra src]# diff openmpi-{1.4.2,1.5rc5}/opal/tools/wrappers/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile | grep LINK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; LINK = $(LIBTOOL) --tag=CC $(AM_LIBTOOLFLAGS) $(LIBTOOLFLAGS) \
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; LINK = $(LIBTOOL) $(AM_V_lt) --tag=CC $(AM_LIBTOOLFLAGS) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; 	$(LINK) $(opal_wrapper_OBJECTS) $(opal_wrapper_LDADD) $(LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 	$(AM_V_CCLD)$(LINK) $(opal_wrapper_OBJECTS) $ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (opal_wrapper_LDADD) $(LIBS)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know anything about automake, so I don't know what code to  
</span><br>
<span class="quotelev2">&gt;&gt; look at that changed between 1.4.2 and 1.5rc5 that defines the  
</span><br>
<span class="quotelev2">&gt;&gt; *LIBS Makefile variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We still have one known possible regression:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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