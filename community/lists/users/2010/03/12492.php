<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 06:35:50 2010" -->
<!-- isoreceived="20100331103550" -->
<!-- sent="Wed, 31 Mar 2010 05:35:44 -0500" -->
<!-- isosent="20100331103544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705674A_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Problem in remote nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 06:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those are normal ssh messages, I think - an ssh session may try mulktiple auth methods before one succeeds. 
<br>

<br>
You're absolutely sure that there's no firewalling software and selinux is disabled?  Ompi is behaving as if it is trying to communicate and failing (e.g., its hanging while trying to open some tcp sockets back). 
<br>

<br>
Can you open random tcp sockets between your nodes?  (E.g., in non-mpi processes)
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Wed Mar 31 06:25:43 2010
<br>
Subject: Re: [OMPI users] Problem in remote nodes
<br>

<br>
I've been checking the /var/log/messages on the compute node and there is
<br>
nothing new after executing ' mpirun --host itanium2 -np 2
<br>
helloworld.out',
<br>
but in the /var/log/messages file on the remote node it appears the
<br>
following messages, nothing about unix_chkpwd.
<br>

<br>
Mar 31 11:56:51 itanium2 sshd(pam_unix)[15349]: authentication failure;
<br>
logname= uid=0 euid=0 tty=NODEVssh ruser= rhost=itanium1  user=otro
<br>
Mar 31 11:56:53 itanium2 sshd[15349]: Accepted publickey for otro from
<br>
192.168.3.1 port 40999 ssh2
<br>
Mar 31 11:56:53 itanium2 sshd(pam_unix)[15351]: session opened for user
<br>
otro by (uid=500)
<br>
Mar 31 11:56:53 itanium2 sshd(pam_unix)[15351]: session closed for user otro
<br>

<br>
It seems that the authentication fails at first, but in the next message
<br>
it connects with the node...
<br>

<br>
El Mar, 30 de Marzo de 2010, 20:02, Robert Collyer escribi&#195;&#179;:
<br>
<span class="quotelev1">&gt; I've been having similar problems using Fedora core 9.  I believe the
</span><br>
<span class="quotelev1">&gt; issue may be with SELinux, but this is just an educated guess.  In my
</span><br>
<span class="quotelev1">&gt; setup, shortly after a login via mpi, there is a notation in the
</span><br>
<span class="quotelev1">&gt; /var/log/messages on the compute node as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mar 30 12:39:45 &lt;node_name&gt; kernel: type=1400 audit(1269970785.534:588):
</span><br>
<span class="quotelev1">&gt; avc:  denied  { read } for  pid=8047 comm=&quot;unix_chkpwd&quot; name=&quot;hosts&quot;
</span><br>
<span class="quotelev1">&gt; dev=dm-0 ino=24579
</span><br>
<span class="quotelev1">&gt; scontext=system_u:system_r:system_chkpwd_t:s0-s0:c0.c1023
</span><br>
<span class="quotelev1">&gt; tcontext=unconfined_u:object_r:etc_runtime_t:s0 tclass=file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which says SELinux denied unix_chkpwd read access to hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you getting anything like this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, I'll check if allowing unix_chkpwd read access to hosts
</span><br>
<span class="quotelev1">&gt; eliminates the problem on my system, and if it works, I'll post the
</span><br>
<span class="quotelev1">&gt; steps involved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uriz.49949_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've benn investigating and there is no firewall that could stop TCP
</span><br>
<span class="quotelev2">&gt;&gt; traffic in the cluster. With the option --mca plm_base_verbose 30 I get
</span><br>
<span class="quotelev2">&gt;&gt; the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1] /home/otro &gt; mpirun --mca plm_base_verbose 30 --host itanium2
</span><br>
<span class="quotelev2">&gt;&gt; helloworld.out
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: component rsh has no
</span><br>
<span class="quotelev2">&gt;&gt; register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: component rsh open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev2">&gt;&gt; priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev2">&gt;&gt; Query
</span><br>
<span class="quotelev2">&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt; [itanium1:08311] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Hangs here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems a slurm problem??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to any idea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; El Vie, 19 de Marzo de 2010, 17:57, Ralph Castain escribi&#195;&#179;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you configure OMPI with --enable-debug? You should do this so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more diagnostic output is available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can also add the following to your cmd line to get more info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --debug --debug-daemons --leave-session-attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something is likely blocking proper launch of the daemons and processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you aren't getting to the btl's at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 19, 2010, at 9:42 AM, uriz.49949_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The processes are running on the remote nodes but they don't give the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; response to the origin node. I don't know why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With the option --mca btl_base_verbose 30, I have the same problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't show any message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; works perfectly, but when I try to execute it on the remote nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --host  option it hangs and gives no message. I think that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem is not ssh because i can access to the nodes with no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; password
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You might want to check that Open MPI processes are actually running
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the remote nodes -- check with ps if you see any &quot;orted&quot; or other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any TCP firewall software running between the nodes?  If
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you'll need to disable it (at least for Open MPI jobs).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I also recommend running mpirun with the option --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_base_verbose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 30 to troubleshoot tcp issues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In some environments, you need to explicitly tell mpirun what network
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interfaces it can use to reach the hosts. Read the following FAQ
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; section for more information:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Item 7 of the FAQ might be of special interest.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
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