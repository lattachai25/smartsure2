<style>
.circle {
    border-radius: 0%;
    width: 100%;
    height: auto;

    margin-left: 0px;
    /* width and height can be anything, as long as they're equal */
    margin-top: 25px;
    margin-bottom: 30px;
    position: relative;
}

.navbar-default {
    /* background-color: #a2ced1; */
    border-color: #100f0f;
}

.navbar-brand {
    color: black !important;
}

#page-wrapper {
    padding: 0 15px;
    min-height: 568px;
    /* background-color: #a2ced1; */
}
</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url($this->uri->segment(1).'');?>">Smartsure | administrator</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li><a href="<?php echo base_url('/admin/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search" style='text-align:center;'>

                    <img class='circle' src='<?php echo base_url();?>assets/images/LOGO2.png'>
                    <div class="">
                        USERNAME : <font color='#ff7500'>
                            <?php echo $this->session->userdata['logged_in']['username'];?> </font>
                    </div>
                </li>


                <li>
                    <a href="#"><i class="glyphicon glyphicon-home"></i>&nbsp; Home<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/menuSlide');?>"><i
                                    class="fa fa-circle"></i>&nbsp; MenuSlide</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/packages');?>"><i
                                    class="fa fa-circle"></i>&nbsp; ผลิตภัณฑ์แนะนำ</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/product1');?>"><i
                                    class="fa fa-circle"></i>&nbsp; ซื้อผลิตภัณฑ์ง่าย</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/product2');?>"><i
                                    class="fa fa-circle"></i>&nbsp; ชีวิตดี๊ดีเมื่อมี SMART SURE</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url('administrator/about');?>"><i class="fa fa-users"></i>&nbsp; About
                        Us</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/product');?>"><i class="fa fa-users"></i>&nbsp;
                        Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/extended_warranty');?>"><i
                                    class="fa fa-circle"></i>&nbsp; Smart Extended_warranty</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/roadside_ast_service');?>"><i
                                    class="fa fa-circle"></i>&nbsp; Smart Roadside Assistant Service</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/claim_service');?>"><i
                                    class="fa fa-circle"></i>&nbsp; Smart Claim Service</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/orico');?>"><i class="fa fa-circle"></i>&nbsp;
                                Orico care</a>
                        </li>
                    </ul>
                </li>

                <!-- <li>
                    <a href="<?php echo base_url('administrator/promotion');?>"><i class="fa fa-calendar"></i>&nbsp; Promotion</a>
				</li>  -->

                <li>
                    <a href="<?php echo base_url('administrator/news');?>"><i class="fa fa-newspaper-o"></i>&nbsp;
                        News</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/partner');?>"><i class="fa fa-users"></i>&nbsp;
                        Partner<span></span></a>
                    <!-- <ul class="nav nav-second-level">
                        
                        <li>
                            <a href="<?php echo base_url('administrator/cimb');?>"><i class="fa fa-circle"></i>&nbsp; CIMB</a>
                        </li>
                    </ul>     -->
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/seo');?>"><i class="fa fa-globe"></i>&nbsp; SEO</a>
                </li>

                <!-- <li>
                    <a href="<?php echo base_url('administrator/rest_server');?>"><i class=" glyphicon glyphicon-transfer "></i> Rest_server</a>
                </li>  -->

                <!-- <li>
                    <a href="<?php echo base_url('administrator/contactus');?>"><i class="fa fa-fire fa-fw"></i>Contactus</a>
                </li>  -->
            </ul>
        </div>
    </div>
</nav>