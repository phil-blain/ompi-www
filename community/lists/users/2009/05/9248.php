<?
$subject_val = "Re: [OMPI users] Problem with Filem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 04:08:05 2009" -->
<!-- isoreceived="20090507080805" -->
<!-- sent="Thu, 07 May 2009 10:07:58 +0200" -->
<!-- isosent="20090507080758" -->
<!-- name="Bouguerra mohamed slim" -->
<!-- email="mohamed-slim.bouguerra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Filem" -->
<!-- id="4A0296DE.70702_at_inrialpes.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6079FFE2-9955-4874-A83E-E0CA48ECABFF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Filem<br>
<strong>From:</strong> Bouguerra mohamed slim (<em>mohamed-slim.bouguerra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 04:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9249.php">Peter Kjellstrom: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9247.php">neeraj_at_[hidden]: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>Reply:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Thank you, with the release r21172 and it works. But how i can dispatch 
<br>
the checkpoint on different storage nodes, because it is to costly that 
<br>
all computing nodes write on one storage node.
<br>
<p><p><p><p>Josh Hursey a &#233;crit :
<br>
<span class="quotelev1">&gt; I just realized that not all of the FileM fixes made it to the trunk 
</span><br>
<span class="quotelev1">&gt; in my previous commit. Sorry about that :( I just committed the 
</span><br>
<span class="quotelev1">&gt; remainder of the changes in r21167 if you wanted to try them out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 8:48 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command line looks fine. Can you send the output generated by the 
</span><br>
<span class="quotelev2">&gt;&gt; verbose arguments (there was no file attached to the last email)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The version of the trunk that I was referring to was r21131, and can 
</span><br>
<span class="quotelev2">&gt;&gt; be downloaded via SVN or a nightly snapshot tarball from the links 
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 4, 2009, at 3:44 AM, Bouguerra mohamed slim wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is the global command that i use it to run the program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/grenoble/msbouguerra/install/ompi-1.3.2/cr/bin/mpirun -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_base_help_aggregate 0 -mca filem_rsh_rcp scp -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filem_rsh_verbose 99 -mca filem_base_verbose 99 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapc_base_verbose 1 -mca ompi_cr_verbose 1 -mca orte_cr_verbose 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca opal_cr_verbose 1 -mca snapc_base_global_snapshot_dir 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/stable -mca snapc_base_store_in_place 0 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapc_base_global_snapshot_ref ompi_global_snapshot_09_30 -np 20 -am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ft-enable-cr -hostfile ./hostfile_04_05 --mca btl '^mx' ./nqueen 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, i got always the same problem, the error stack in the file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally can you tell me exactly the version of the development trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This typically this means that one or more of the rcp/scp or 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh/ssh commands failed. FileM should be printing an error message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when one of the copy commands fail. Try turning up the verbose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; level to 10 to see if it indicates any problems:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca filem_rsh_verbose 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you send me the MCA parameters that you are setting? That may 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help narrow down the problem as well. Also I cleaned up some of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; filem (and snapc) error reporting in the development trunk if you 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want to give that a try.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know what you find out.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 30, 2009, at 6:40 AM, Bouguerra mohamed slim wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a problem with the Filem module when i would checkpoint on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a remote host without shared space file system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use the new open-mpi 1.3.2 and it is the same problem as in the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version 1.3.1. Indeed, when i use the NFS system file it works. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thus i guess that is a problem with the Filem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [azur-6.fr:23223] filem:rsh: wait_all(): Wait failed (-1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [azur-6.fr:23223] [[48784,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/grenoble/msbouguerra/openmpi-1.3.2/orte/mca/snapc/full/snapc_full_global.c 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at line 1054
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cordialement,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ENSIMAG - antenne de Montbonnot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ZIRST 51, avenue Jean Kuntzmann
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 38330 MONTBONNOT SAINT MARTIN France
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel :+33 (0)4 76 61 20 79
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax :+33 (0)4 76 61 20 99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cordialement,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ENSIMAG - antenne de Montbonnot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ZIRST 51, avenue Jean Kuntzmann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 38330 MONTBONNOT SAINT MARTIN France
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel :+33 (0)4 76 61 20 79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax :+33 (0)4 76 61 20 99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:base: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process_get_remote_path_cmd: [[52993,0],0] -&gt; [[52993,0],0]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filename Requested (/tmp/opal_snapshot_1.ckpt) translated to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/tmp/opal_snapshot_1.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:base: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process_get_remote_path_cmd: [[52993,0],0] -&gt; [[52993,0],0]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filename Requested (/tmp/opal_snapshot_5.ckpt) translated to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/tmp/opal_snapshot_5.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:base: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process_get_remote_path_cmd: [[52993,0],0] -&gt; [[52993,0],0]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filename Requested (/tmp/opal_snapshot_9.ckpt) translated to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/tmp/opal_snapshot_9.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:base: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process_get_remote_path_cmd: [[52993,0],0] -&gt; [[52993,0],0]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filename Requested (/tmp/opal_snapshot_13.ckpt) translated to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/tmp/opal_snapshot_13.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:base: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process_get_remote_path_cmd: [[52993,0],0] -&gt; [[52993,0],0]: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filename Requested (/tmp/opal_snapshot_17.ckpt) translated to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/tmp/opal_snapshot_17.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/stable/ompi_global_snapshot_09_30/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sol-7.sophia.grid5000.fr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] filem:rsh: wait_all(): Wait failed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sol-7.sophia.grid5000.fr:04545] [[52993,0],0] ORTE_ERROR_LOG: Error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/grenoble/msbouguerra/openmpi-1.3.2/orte/mca/snapc/full/snapc_full_global.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 1054
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Cordialement,
Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
ENSIMAG - antenne de Montbonnot
ZIRST 51, avenue Jean Kuntzmann
38330 MONTBONNOT SAINT MARTIN France
Tel :+33 (0)4 76 61 20 79
Fax :+33 (0)4 76 61 20 99
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9249.php">Peter Kjellstrom: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9247.php">neeraj_at_[hidden]: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>Reply:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
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
