      <!-- START WIDGETS -->                    
      <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">PEMERIKSAAN TERAKHIR</div>                                                                        
                                        <div class="widget-subtitle"><?php echo $last_date['tgl_test'];?></div>
                                        <!--<div class="widget-int">125</div>-->
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">TOTAL PEMERIKSAAN</div>
                                        <div class="widget-subtitle">Valid</div>
                                        <div class="widget-int"><?php echo $jml_valid['jml'];?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">TOTAL PEMERIKSAAN</div>
                                        <div class="widget-subtitle">Non Valid</div>
                                        <div class="widget-int"><?php echo $jml_nonvalid['jml'];?></div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo base_url(); ?>user/periksa/list_periksa';">
                                <div class="widget-item-left">
                                    <span class="fa fa-stethoscope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $jml_periksa['jml'] ;?></div>
                                    <div class="widget-title">Total Pemeriksaan</div>
                                    
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo base_url(); ?>user/profile';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">1</div>
                                    <div class="widget-title">Registered</div>
                                    <div class="widget-subtitle">User</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->      

                     <div class="row">
                        <div class="col-md-8">
                        <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Welcome</h3>
                                    <h4>Sistem Pakar Deteksi Tingkat Risiko Penyakit Jantung dengan Metode Inferensi Fuzzy Sugeno</h1>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Menu</h3>
                                </div>
                                <div class="panel-body faq">
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Dashboard</div>
                                        <div class="faq-text">
                                        <h5>Dashboard</h5>
                                            <p>Berisi tampilan awal setelah user login ke dalam sistem.</p>
                                            <p>Dashboard menyajikan informasi umum mengenai sistem pakar deteksi tingkat risiko penyakit jantung.</p>  
                                        </div>
                                    
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Profile</div>
                                        <div class="faq-text">
                                        <h5>Profile</h5>
                                            <p>Berisi informasi profile dari user pengguna sistem</p>
                                            <p>Dalam menu profile dapat melakukan perubahan data dan melakukan reset password.</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Pemeriksaan</div>
                                        <div class="faq-text">
                                        <h5>Data Pemeriksaan</h5>
                                            <p>Data pemeriksaan berisi data dari pemeriksaan yang telah di masukan ke dalam sistem</p>
                                            <p>Admin dapat menambah data pemeriksaan, update, dan hapus pemeriksaan</p>                           
                                        </div>
                                    </div>

                                </div>
                            </div>

                            
                        </div>                        
                        <div class="col-md-4">
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Navigation</h3>
                                  
                                 
                                    <div class="push-up-10">
                                        
                                        <div class="pull-right">
                                            <button class="btn btn-default" id="faqOpenAll"><span class="fa fa-angle-down"></span> Open All</button>
                                            <button class="btn btn-default" id="faqCloseAll"><span class="fa fa-angle-up"></span> Close All</button>
                                        </div>                                       
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Contact</h3>
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <br />
                                        <label>14111006.anggraini@gmail.com</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <br />
                                        <label>+62 87851484838</label>
                                    </div>                                
                                                                
                                </div>
                              
                            </div>
                            
                        </div>
                    </div>
                                  