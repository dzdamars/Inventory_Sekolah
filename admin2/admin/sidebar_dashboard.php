     <div class="span3" id="sidebar">
                   <div class="empty">
                   <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>"> </div>
                    <?php include('count.php'); ?>
                      <?php include('count_damage.php'); ?>
                      <?php include('count_dump.php'); ?>
                       <?php include('count_remain_new_device.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                         <li> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
                        <li class="active">                     
                            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Barang Inventaris
                            <div class="muted pull-right"><i class="caret"></i></div></a>                       
                            <ul id="bs" class="collapse">                       
                            <li class="">
                            <a href="device_stocks.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Device / Stocks</a>
                            </li>
                            <li class="">
                            <a href="dev_name.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> Device Type</a>
                            </li> 
                            <?php 
         $new = mysql_query("select * from stdevice
         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
         $new = mysql_num_rows($new);
         ?>         
                            
                            <li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Damage Device
                            <?php if($not_read1 == '0'){
                            }else{ ?>
                            <span class="badge badge-important"><?php echo $not_read1; ?></span>
                            <?php } ?>
                            </a>
                            </li>
                            <li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i><span> Assign</span>&nbsp;Location                        
                            <span class="badge badge-info"><?php echo $new;?></span>
                            </a>
                            </li>       
                            <li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Device Location</a>
                            </li>
                            </ul>
                        </li>

                        <!------/.* Peminjaman*-------> 
                        <li>                        
                            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Peminjaman
                            <div class="muted pull-right"><i class="caret"></i></div></a>                       
                            <ul id="bs2"  class="collapse">                     
                           
                             <li>
                            <a href="pinjam.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i><span> FORM Peminjaman</span>&nbsp;Barang                     
                            
                            </a>
                            </li>
                            <li>
                            <a href="device_pinjam.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i><span> Daftar Peminjaman</span>&nbsp;Barang                     
                            
                            </a>
                            </li>   
                            </ul>
                        </li>

                        <!------/.* Habis Pakai*------->    
                        <li>                        
                            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Habis Pakai
                            <div class="muted pull-right"><i class="caret"></i></div></a>                       
                            <ul id="bs4" class="collapse">                      
                           
                             <li>
                            <a href="device_habispakai.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i><span> Daftar Barang</span>&nbsp;Habis Pakai                    
                            
                            </a>
                            </li>

                            <li>
                            <a href="habis_pakai_location.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i><span> Assign Location</span>                   
                            
                            </a>
                            </li>   
                            <li class="">
                            <a href="hp_cate.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i>Input Type Category</a>
                            </li>
                            <li class="">
                            <a href="device_location2.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i>Location Habis Pakai</a>
                            </li>
                            </ul>
                        </li>

                         <!------/.* manage location sidebar*------->   
                        <li>                        
                            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Location
                            <div class="muted pull-right"><i class="caret"></i></div></a>                       
                            <ul id="bs1" class="collapse">
                            <li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Add Location</a>
                            </li>
                            </ul>
                        </li>
                        
                        <!------/.* System Log sidebar*-------> 
                        <li>                        
                            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log & User
                            <div class="muted pull-right"><i class="caret"></i></div></a>                       
                            <ul id="bs3" class="collapse">                      
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Activity Log</a>
                            </li>
                            <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                            </li>
                            <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;System User</a>
                            </li>
                            </ul>
                        </li>
                        
                     
                  </ul>                 
                <?php include('search_form.php'); ?>
                <?php include('search_form1.php'); ?>                                       
    </div>