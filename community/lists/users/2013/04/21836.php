<?
$subject_val = "Re: [OMPI users] job termination on grid";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 16:46:24 2013" -->
<!-- isoreceived="20130430204624" -->
<!-- sent="Tue, 30 Apr 2013 13:46:16 -0700" -->
<!-- isosent="20130430204616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job termination on grid" -->
<!-- id="E7EF0F9A-40D8-42FC-96F2-F12995FEF9AD_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAP9vw5APgT96UuRmynVjzbvhwYQrFZcZqiAgVRY1bc+Ge=LzeQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] job termination on grid<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 16:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2013, at 1:34 PM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I asked grid IT and they said they had to kill it as the job was overloading nodes. They saw loads up to 180 instead of close to 12 on 12-core nodes. They think that blastx is not an openmpi application, so openMPI is spawning between 64-96 blastx processes, each of which is then starting up 96 worker threads. Or if blastx can work with openmpi, my blastx synthax mpirun syntax is wrong. Any advice?
</span><br>
<span class="quotelev1">&gt; I was advised earlier to use &#150;pe openmpi [ARG} , where  ARG = number_of_processes x number_of_threads , and then pass desired number of threads as &#145; mpirun &#150;np $NSLOTS cpus-per-proc [ number_of_threads]&#146;. When I did that, I got an error that more threads were requested than number of physical cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>How many threads are you trying to launch?? If it is a 12-core node, then you can't have more than 12 - sounds like you are trying to startup 96!
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 30, 2013 at 2:35 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 30.04.2013 um 21:26 schrieb Vladimir Yamshchikov:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My recent job started normally but after a few hours of running died with the following message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 19390) died unexpectedly with status 137 while attempting
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder why it rose the failure only after running for hours. As 137 = 128 + 9 it was killed, maybe by the queuing system due to the set time limit? If you check the accouting, what is the output of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qacct -j &lt;job_id&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The scheduling script is below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt; &gt; #$ -N SC3blastx_64-96thr
</span><br>
<span class="quotelev2">&gt; &gt; #$ -pe openmpi* 64-96
</span><br>
<span class="quotelev2">&gt; &gt; #$ -l h_rt=24:00:00,vf=3G
</span><br>
<span class="quotelev2">&gt; &gt; #$ -j y
</span><br>
<span class="quotelev2">&gt; &gt; #$ -M yaximik_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; #$ -m eas
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Load the appropriate module files
</span><br>
<span class="quotelev2">&gt; &gt; # Should be loaded already
</span><br>
<span class="quotelev2">&gt; &gt; #$ -V
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NSLOTS blastx -query $UABGRID_SCRATCH/SC/AdQ30/fasta/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.fasta -db nr -out $UABGRID_SCRATCH/SC/blastx/SC/SC1-IS4-Ind1-153ngFr1sep1run1R1AdQ30.out -evalue 0.001 -max_intron_length 100000 -outfmt 5 -num_alignments 20 -lcase_masking -num_threads $NSLOTS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What caused this termination? It does not seem scheduling problem as the program run several hours with 96 threads. My $LD_LIBRARY_PATH does have /share/apps/openmpi/1.6.4-gcc/lib entry, so how else should I modify it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vladimir
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>In reply to:</strong> <a href="21835.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
<li><strong>Reply:</strong> <a href="21837.php">Vladimir Yamshchikov: "Re: [OMPI users] job termination on grid"</a>
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