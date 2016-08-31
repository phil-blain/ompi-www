<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 17:16:16 2009" -->
<!-- isoreceived="20090428211616" -->
<!-- sent="Tue, 28 Apr 2009 22:19:16 +0100" -->
<!-- isosent="20090428211916" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="63448C3A-3B63-44AC-9137-D6E86B332877_at_dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0904281212w775dcc6bi6219a3767aaf38d2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file<br>
<strong>From:</strong> Hugh Dickinson (<em>h.j.dickinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 17:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9134.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9131.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Yes I'm using ethernet connections. Doing as you suggest removes the  
<br>
errors generated by running the small test program, but still doesn't  
<br>
allow programs (including the small test program) to execute on any  
<br>
node other than the one launching mpirun. If I try to do that, the  
<br>
command hangs until I interrupt it, whereupon it gives the same  
<br>
timeout errors. It seems that there must be some problem with the  
<br>
setup of my Open MPI installation. Do you agree, and do you have any  
<br>
idea what it is? Also, is there a global settings file so I can  
<br>
instruct Open MPI to always only try ethernet?
<br>
<p>Cheers,
<br>
<p>Hugh
<br>
<p>On 28 Apr 2009, at 20:12, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; In this instance, OMPI is complaining that you are attempting to use  
</span><br>
<span class="quotelev1">&gt; Infiniband, but no suitable devices are found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you have Ethernet between your nodes? Can you run this with  
</span><br>
<span class="quotelev1">&gt; the following added to your mpirun cmd line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That will cause OMPI to ignore the Infiniband subsystem and attempt  
</span><br>
<span class="quotelev1">&gt; to run via TCP over any available Ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 12:16 PM, Hugh Dickinson &lt;h.j.dickinson_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Many thanks for your help nonetheless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 Apr 2009, at 17:23, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, but i must admit that i have never encountered these  
</span><br>
<span class="quotelev1">&gt; messages,
</span><br>
<span class="quotelev1">&gt; and i don't know what their cause exactly is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps one of the developers can give an explanation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 5:52 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried a simple mpi c++ program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace MPI;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt;  Init(argc,argv);
</span><br>
<span class="quotelev1">&gt;  rank=COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;  size=COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt;  cout &lt;&lt; &quot;P:&quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot; &lt;&lt; size &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;  Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; It didn't work over all the nodes, again same problem - the system  
</span><br>
<span class="quotelev1">&gt; seems to
</span><br>
<span class="quotelev1">&gt; hang. However, by  forcing mpirun to use only the node on which I'm
</span><br>
<span class="quotelev1">&gt; launching mpirun I get some more error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host gamma2 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: OpenIB on host gamma2 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: uDAPL on host gamma2 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host gamma2 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, as before the program does work in this special case, and I  
</span><br>
<span class="quotelev1">&gt; get:
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; P:0 out of 2
</span><br>
<span class="quotelev1">&gt; P:1 out of 2
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do these errors indicate a problem with the Open MPI installation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 Apr 2009, at 16:36, Hugh Dickinson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can paswordlessly ssh between all nodes (to and from)
</span><br>
<span class="quotelev1">&gt; Almost none of these mpirun commands work. The only working case is if
</span><br>
<span class="quotelev1">&gt; nodenameX is the node from which you are running the command. I  
</span><br>
<span class="quotelev1">&gt; don't know
</span><br>
<span class="quotelev1">&gt; if this gives you extra diagnostic information, but if I explicitly  
</span><br>
<span class="quotelev1">&gt; set the
</span><br>
<span class="quotelev1">&gt; wrong prefix (using --prefix), then I get errors from all the nodes  
</span><br>
<span class="quotelev1">&gt; telling
</span><br>
<span class="quotelev1">&gt; me the daemon would not start. I don't get these errors normally. It  
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev1">&gt; to me that the communication is working okay, at least in the outwards
</span><br>
<span class="quotelev1">&gt; direction (and from all nodes). Could this be a problem with  
</span><br>
<span class="quotelev1">&gt; forwarding of
</span><br>
<span class="quotelev1">&gt; standard output? If I were to try a simple hello world program, is  
</span><br>
<span class="quotelev1">&gt; this more
</span><br>
<span class="quotelev1">&gt; likely to work, or am I just adding another layer of complexity?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 Apr 2009, at 15:55, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt; You're right, there is no initialization command (like lamboot)  you
</span><br>
<span class="quotelev1">&gt; have to call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really know why your sewtup doesn't work, so i'm making some
</span><br>
<span class="quotelev1">&gt; more &quot;blind shots&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you do passwordless ssh from between any two of your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev1">&gt;  mpirun -np 1 --host nodenameX uptime
</span><br>
<span class="quotelev1">&gt; work for every X when called from any of your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --host nodename1,nodename2  uptime
</span><br>
<span class="quotelev1">&gt; (i.e. not using the host file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 4:37 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The node names are exactly the same. I wanted to avoid updating the
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; because I'm not the system administrator, and it could take some time
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; it gets done. If it's likely to fix the problem though I'll try it.  
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev1">&gt; assuming that I don't have to do something analogous to the old
</span><br>
<span class="quotelev1">&gt; &quot;lamboot&quot;
</span><br>
<span class="quotelev1">&gt; command to initialise Open MPI on all the nodes. I've seen no
</span><br>
<span class="quotelev1">&gt; documentation
</span><br>
<span class="quotelev1">&gt; anywhere that says I should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 Apr 2009, at 15:28, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, just to make sure, are the hostnames in your host file
</span><br>
<span class="quotelev1">&gt; well-known?
</span><br>
<span class="quotelev1">&gt; I.e. when you say you can do
</span><br>
<span class="quotelev1">&gt;  ssh nodename uptime
</span><br>
<span class="quotelev1">&gt; do you use exactly the same nodename in your host file?
</span><br>
<span class="quotelev1">&gt; (I'm trying to eliminate all non-Open-MPI error sources,
</span><br>
<span class="quotelev1">&gt; because with your setup it should basically work.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more point to consider is to  update to Open-MPI 1.3.
</span><br>
<span class="quotelev1">&gt; I don't think your OPen-MPI version is the cause of your trouble,
</span><br>
<span class="quotelev1">&gt; but there have been quite some changes since v1.2.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 3:22 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, all the nodes are running the same version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Perhaps I
</span><br>
<span class="quotelev1">&gt; was incorrect to describe the cluster as heterogeneous. In fact, all
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; nodes run the same operating system (Scientific Linux 5.2), it's only
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; hardware that's different and even then they're all i386 or i686. I'm
</span><br>
<span class="quotelev1">&gt; also
</span><br>
<span class="quotelev1">&gt; attaching the output of ompi_info --all as I've seen it's suggested in
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; mailing list instructions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure:
</span><br>
<span class="quotelev1">&gt; You have installed Open-MPI on all your nodes?
</span><br>
<span class="quotelev1">&gt; Same version everywhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all let me make it perfectly clear that I'm a complete
</span><br>
<span class="quotelev1">&gt; beginner
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; far as MPI is concerned, so this may well be a trivial problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to set up Open MPI to use SSH to communicate between nodes
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev1">&gt; heterogeneous cluster. I've set up passwordless SSH and it seems to
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; working fine. For example by hand I can do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh nodename uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it returns the appropriate information for each node.
</span><br>
<span class="quotelev1">&gt; I then tried running a non-MPI program on all the nodes at the same
</span><br>
<span class="quotelev1">&gt; time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 10 --hostfile hostfile uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where hostfile is a list of the 10 cluster node names with slots=1
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; each one i.e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nodename1 slots=1
</span><br>
<span class="quotelev1">&gt; nodename2 slots=2
</span><br>
<span class="quotelev1">&gt; etc...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing happens! The process just seems to hang. If I interrupt the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; with Ctrl-C I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev1">&gt; started processes had terminated.  You should double check and ensure
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If, instead of using the hostfile, I specify on the command line the
</span><br>
<span class="quotelev1">&gt; host
</span><br>
<span class="quotelev1">&gt; from which I'm running mpirun, e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host nodename uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then it works (i.e. if it doesn't need to communicate with other
</span><br>
<span class="quotelev1">&gt; nodes).
</span><br>
<span class="quotelev1">&gt; Do
</span><br>
<span class="quotelev1">&gt; I need to tell Open MPI it should be using SSH to communicate? If so,
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt; I do this? To be honest I think it's trying to do so, because before
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev1">&gt; up passwordless SSH it challenged me for lots of passwords.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2. Let
</span><br>
<span class="quotelev1">&gt; me
</span><br>
<span class="quotelev1">&gt; reiterate, it's very likely that I've done something stupid, so all
</span><br>
<span class="quotelev1">&gt; suggestions are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9134.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9131.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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