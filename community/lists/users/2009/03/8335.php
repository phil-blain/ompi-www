<?
$subject_val = "Re: [OMPI users] mlx4 error - looking for guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 17:11:43 2009" -->
<!-- isoreceived="20090305221143" -->
<!-- sent="Fri, 06 Mar 2009 00:11:33 +0200" -->
<!-- isosent="20090305221133" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mlx4 error - looking for guidance" -->
<!-- id="49B04E15.7020202_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49B04081.6070306_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] mlx4 error - looking for guidance<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 17:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have the same HCA adapter type on all of your machines ?
<br>
In the error log I see mlx4 error message , and mlx4 is connectX driver,
<br>
but ibv_devinfo show some older hca.
<br>
<p>Pasha
<br>
<p>Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here you go... :) Thanks for looking at this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         4.8.200
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0003:ba00:0100:38ac
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0003:ba00:0100:38af
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 25208
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;        board_id:                       MT_00B0010001
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;        max_mr_size:                    0xffffffffffffffff
</span><br>
<span class="quotelev1">&gt;        page_size_cap:                  0xfffff000
</span><br>
<span class="quotelev1">&gt;        max_qp:                         64512
</span><br>
<span class="quotelev1">&gt;        max_qp_wr:                      65535
</span><br>
<span class="quotelev1">&gt;        device_cap_flags:               0x00001c76
</span><br>
<span class="quotelev1">&gt;        max_sge:                        59
</span><br>
<span class="quotelev1">&gt;        max_sge_rd:                     0
</span><br>
<span class="quotelev1">&gt;        max_cq:                         65408
</span><br>
<span class="quotelev1">&gt;        max_cqe:                        131071
</span><br>
<span class="quotelev1">&gt;        max_mr:                         131056
</span><br>
<span class="quotelev1">&gt;        max_pd:                         32768
</span><br>
<span class="quotelev1">&gt;        max_qp_rd_atom:                 4
</span><br>
<span class="quotelev1">&gt;        max_ee_rd_atom:                 0
</span><br>
<span class="quotelev1">&gt;        max_res_rd_atom:                258048
</span><br>
<span class="quotelev1">&gt;        max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev1">&gt;        max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev1">&gt;        atomic_cap:                     ATOMIC_HCA (1)
</span><br>
<span class="quotelev1">&gt;        max_ee:                         0
</span><br>
<span class="quotelev1">&gt;        max_rdd:                        0
</span><br>
<span class="quotelev1">&gt;        max_mw:                         0
</span><br>
<span class="quotelev1">&gt;        max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev1">&gt;        max_raw_ethy_qp:                0
</span><br>
<span class="quotelev1">&gt;        max_mcast_grp:                  8192
</span><br>
<span class="quotelev1">&gt;        max_mcast_qp_attach:            56
</span><br>
<span class="quotelev1">&gt;        max_total_mcast_qp_attach:      458752
</span><br>
<span class="quotelev1">&gt;        max_ah:                         0
</span><br>
<span class="quotelev1">&gt;        max_fmr:                        0
</span><br>
<span class="quotelev1">&gt;        max_srq:                        960
</span><br>
<span class="quotelev1">&gt;        max_srq_wr:                     65535
</span><br>
<span class="quotelev1">&gt;        max_srq_sge:                    31
</span><br>
<span class="quotelev1">&gt;        max_pkeys:                      64
</span><br>
<span class="quotelev1">&gt;        local_ca_ack_delay:             15
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 41
</span><br>
<span class="quotelev1">&gt;                        port_lid:               41
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                        max_msg_sz:             0x80000000
</span><br>
<span class="quotelev1">&gt;                        port_cap_flags:         0x02510a6a
</span><br>
<span class="quotelev1">&gt;                        max_vl_num:             8 (4)
</span><br>
<span class="quotelev1">&gt;                        bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                        qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                        sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                        pkey_tbl_len:           64
</span><br>
<span class="quotelev1">&gt;                        gid_tbl_len:            32
</span><br>
<span class="quotelev1">&gt;                        subnet_timeout:         18
</span><br>
<span class="quotelev1">&gt;                        init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                        active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                        active_speed:           2.5 Gbps (1)
</span><br>
<span class="quotelev1">&gt;                        phys_state:             LINK_UP (5)
</span><br>
<span class="quotelev1">&gt;                        GID[  0]:               
</span><br>
<span class="quotelev1">&gt; fe80:0000:0000:0000:0003:ba00:0100:38ad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                port:   2
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             512 (2)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                        port_lid:               0
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                        max_msg_sz:             0x80000000
</span><br>
<span class="quotelev1">&gt;                        port_cap_flags:         0x02510a68
</span><br>
<span class="quotelev1">&gt;                        max_vl_num:             8 (4)
</span><br>
<span class="quotelev1">&gt;                        bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                        qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                        sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                        pkey_tbl_len:           64
</span><br>
<span class="quotelev1">&gt;                        gid_tbl_len:            32
</span><br>
<span class="quotelev1">&gt;                        subnet_timeout:         0
</span><br>
<span class="quotelev1">&gt;                        init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                        active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                        active_speed:           2.5 Gbps (1)
</span><br>
<span class="quotelev1">&gt;                        phys_state:             POLLING (2)
</span><br>
<span class="quotelev1">&gt;                        GID[  0]:               
</span><br>
<span class="quotelev1">&gt; fe80:0000:0000:0000:0003:ba00:0100:38ae
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; Can you please provide more information about you HCA type 
</span><br>
<span class="quotelev2">&gt;&gt; (ibv_devinfo -v).
</span><br>
<span class="quotelev2">&gt;&gt; Do you see this error immediate during startup, or you get it during 
</span><br>
<span class="quotelev2">&gt;&gt; your run ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Layton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evening everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running a CFD code on IB and I've encountered an error I'm not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure about and I'm looking for some guidance on where to start 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking. Here's the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mlx4: local QP operation err (QPN 260092, WQE index 9a9e0000, vendor 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; syndrome 6f, opcode = 5e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,6][btl_openib_component.c:1392:btl_openib_component_progress] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from compute-2-0.local to: compute-2-0.local erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r polling HP CQ with status LOCAL QP OPERATION ERROR status number 2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for wr_id 37742320 opcode 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 21220 on node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-0.local exited on signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 78 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is openmpi-1.2.9rc2 (sorry - need to upgrade to 1.3.0). The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code works correctly for smaller cases, but when I run larger cases 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get this error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm heading to bed but I'll check email tomorrow (so to sleep and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run but it's been a long day).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIA!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------ 
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
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