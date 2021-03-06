<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 12:57:40 2011" -->
<!-- isoreceived="20111104165740" -->
<!-- sent="Fri, 4 Nov 2011 10:57:32 -0600" -->
<!-- isosent="20111104165732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="F3E4654B-E00F-4087-8C35-C3DF1D2B26B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5481AF1_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 12:57:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17706.php">David Turner: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2011, at 10:19 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; OK, I wouldn't have guessed that the space for /tmp isn't actually in RAM until it's needed.  That's the key piece of knowledge I was missing; I really appreciate it.  So you can allow /tmp to be reasonably sized, but if you aren't actually using it, then it doesn't take up 11 GB of RAM.  And you prevent users from crashing the node by setting mem limit to 4 GB less than the available memory. Got it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with your earlier comment:  these are fairly common systems now.  We have program- and owner-specific disks where I work, and after the program ends, the disks are archived or destroyed.  Before the stateless configuration option, the entire computer, nodes and switches as well as disks, were archived or destroyed after each program.  Not too cost-effective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a reasonable final summary? :  OpenMPI uses temporary files in such a way that it is performance-critical that these so-called session files, used for shared-memory communications, must be &quot;local&quot;.  For state-less clusters, this means the node image must include a /tmp or /wrk partition, intelligently sized so as not to enable an application to exhaust the physical memory of the node, and care must be taken not to mask this in-memory /tmp with an NFS mounted filesystem.  
</span><br>
<p><p><span class="quotelev1">&gt; It is not uncommon for cluster enablers to exclude /tmp from a typical base Linux filesystem image or mount it over NFS, as a means of providing users with a larger-sized /tmp that is not limited to a fraction of the node's physical memory, or to avoid garbage accumulation in /tmp taking up the physical RAM.
</span><br>
<p>Not sure I agree with this statement, but it is irrelevant here.
<br>
<p><span class="quotelev1">&gt;  But not having /tmp or mounting it over NFS is not a viable stateless-node configuration option if you intend to run OpenMPI. Instead you could have a /bigtmp which is NFS-mounted and a /tmp whi!
</span><br>
<span class="quotelev1">&gt; ch is local, for example. Starting in OpenMPI 1.7.x, shared-memory communication will no longer go through memory-mapped files, and vendors/users will no longer need to be vigilant concerning this OpenMPI performance requirement on stateless node configuration. 
</span><br>
<p>Having a local /tmp is typically required by Linux for proper operation as the OS itself needs to ensure its usage is protected, as was previously stated and is reiterated in numerous books on managing Linux systems. The &quot;usual&quot; way of dealing with what you describe is for sys admins to add a /usr/tmp space which is solely intended for use by users, with the understanding that they may stomp on each other if they don't take care in naming their files. This is why we provided the ability to redirect the placement of the session directories.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that a reasonable summary?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, would it be helpful to include this as an FAQ entry under General category?  Or the &quot;shared memory&quot; category?  Or the &quot;troubleshooting&quot; category?
</span><br>
<p>IMO, discussions of how to handle /tmp on diskless systems goes beyond the bounds of OMPI - it is a Linux system management issue that is covered in depth by material on that subject. Explaining how the session directory is used, and why we now include a test and warning if the session directory is going to land on a networked file system (pretty sure this is now in the 1.5 series, but certainly is in the trunk for future releases), would be reasonable.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of David Turner
</span><br>
<span class="quotelev1">&gt; Sent: Friday, November 04, 2011 1:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % df /tmp
</span><br>
<span class="quotelev1">&gt; Filesystem           1K-blocks      Used Available Use% Mounted on
</span><br>
<span class="quotelev1">&gt; -                     12330084    822848  11507236   7% /
</span><br>
<span class="quotelev1">&gt; % df /
</span><br>
<span class="quotelev1">&gt; Filesystem           1K-blocks      Used Available Use% Mounted on
</span><br>
<span class="quotelev1">&gt; -                     12330084    822848  11507236   7% /
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That works out to 11GB.  But...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compute nodes have 24GB.  Freshly booted, about 3.2GB is
</span><br>
<span class="quotelev1">&gt; consumed by the kernel, various services, and the root file system.
</span><br>
<span class="quotelev1">&gt; At this time, usage of /tmp is essentially nil.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We set user memory limits to 20GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would imagine that the size of the session directories depends on a
</span><br>
<span class="quotelev1">&gt; number of factors; perhaps the developers can comment on that.  I have
</span><br>
<span class="quotelev1">&gt; only seen total sizes in the 10s of MBs on our 8-node, 24GB nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As long as they're removed after each job, they don't really compete
</span><br>
<span class="quotelev1">&gt; with the application for available memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/3/11 8:40 PM, Ed Blosch wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much, exactly what I wanted to hear. How big is /tmp?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of David Turner
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, November 03, 2011 6:36 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp
</span><br>
<span class="quotelev2">&gt;&gt; for OpenMPI usage
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not a systems guy, but I'll pitch in anyway.  On our cluster,
</span><br>
<span class="quotelev2">&gt;&gt; all the compute nodes are completely diskless.  The root file system,
</span><br>
<span class="quotelev2">&gt;&gt; including /tmp, resides in memory (ramdisk).  OpenMPI puts these
</span><br>
<span class="quotelev2">&gt;&gt; session directories therein.  All our jobs run through a batch
</span><br>
<span class="quotelev2">&gt;&gt; system (torque).  At the conclusion of each batch job, an epilogue
</span><br>
<span class="quotelev2">&gt;&gt; process runs that removes all files belonging to the owner of the
</span><br>
<span class="quotelev2">&gt;&gt; current batch job from /tmp (and also looks for and kills orphan
</span><br>
<span class="quotelev2">&gt;&gt; processes belonging to the user).  This epilogue had to written
</span><br>
<span class="quotelev2">&gt;&gt; by our systems staff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is a fairly common configuration for diskless
</span><br>
<span class="quotelev2">&gt;&gt; clusters.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/3/11 4:09 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the help.  A couple follow-up-questions, maybe this starts to
</span><br>
<span class="quotelev2">&gt;&gt; go outside OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's wrong with using /dev/shm?  I think you said earlier in this thread
</span><br>
<span class="quotelev2">&gt;&gt; that this was not a safe place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp magically
</span><br>
<span class="quotelev2">&gt;&gt; appear in the filesystem for a stateless node?  How big would it be, given
</span><br>
<span class="quotelev2">&gt;&gt; that there is no local disk, right?  That may be something I have to ask the
</span><br>
<span class="quotelev2">&gt;&gt; vendor, which I've tried, but they don't quite seem to get the question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 03, 2011 5:22 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp
</span><br>
<span class="quotelev2">&gt;&gt; for OpenMPI usage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2011, at 2:55 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I might be missing something here. Is there a side-effect or performance
</span><br>
<span class="quotelev2">&gt;&gt; loss if you don't use the sm btl?  Why would it exist if there is a wholly
</span><br>
<span class="quotelev2">&gt;&gt; equivalent alternative?  What happens to traffic that is intended for
</span><br>
<span class="quotelev2">&gt;&gt; another process on the same node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a definite performance impact, and we wouldn't recommend doing
</span><br>
<span class="quotelev2">&gt;&gt; what Eugene suggested if you care about performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The correct solution here is get your sys admin to make /tmp local. Making
</span><br>
<span class="quotelev2">&gt;&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the Linux
</span><br>
<span class="quotelev2">&gt;&gt; world - it should never be done, for the reasons stated by Jeff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 1:23 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev2">&gt;&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right.  Actually &quot;--mca btl ^sm&quot;.  (Was missing &quot;btl&quot;.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/3/2011 11:19 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't tell OpenMPI what BTLs to use. The default uses sm and puts a
</span><br>
<span class="quotelev2">&gt;&gt; session file on /tmp, which is NFS-mounted and thus not a good choice.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you suggesting something like --mca ^sm?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 12:54 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev2">&gt;&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've not been following closely.  Why must one use shared-memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications?  How about using other BTLs in a &quot;loopback&quot; fashion?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17706.php">David Turner: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
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
