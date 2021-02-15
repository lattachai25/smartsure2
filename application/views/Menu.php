
<style>
#nav a.active {
    font-size: 16px;
    font-weight: 600;
    color: #ffffff!important;
}


.tel{
    border:2px solid #979797; 
    background-color: #a3a3a3;
}

#nav a {
    padding: 8px 45px !important;
    margin: 8px 1px;
    padding: 8px 36px !important;
    margin: 0 10px;
    font-weight: 400;
    color: #2c3e50;
    text-decoration: none;
}

</style>

<!--Desktop / Tablet -->
<div class="d-none d-md-block">
    <table cellspacing="0" cellpadding="0" class="">
        <tr>
            <td width="50%">
                <a href="<?php echo base_url(); ?>">
                    <div class="col-md-7 col-lg-5 logo animate__animated animate__fadeInDown">
                        <img alt="SmartSure" src="<?php echo base_url(); ?>assets/images/LOGO2.png" width="100%">
                    </div>
                </a>
            </td>
            <td width="50%" align="right">
                <img alt="phone" src="<?php echo base_url(); ?>assets/images/โทรศัพท์-01.png" width="40%"  class="pb-2">
            </td>
        </tr>
    </table>
        <div id="nav" > 
            <a class="<?php if($this->uri->segment(1)==""){echo "active";}?>" href="<?php echo base_url();?>" id="home" >หน้าหลัก</a>
            <a class="<?php if($this->uri->segment(1)=="about"){echo "active";}?>" href="<?php echo base_url();?>about" id="about" >เกี่ยวกับเรา</a>
            <div class="service-dropdown" >
                <a >ซื้อผลิตภัณฑ์</a>
                    <div class="nav-dropdown" style="width: 250px;">
                        <a class="<?php if($this->uri->segment(1)=="Extended_warranty"){echo "active";} ?>" href="<?php echo base_url();?>Extended_warranty">Smart Extended Warranty</a>   
                        <a class="<?php if($this->uri->segment(1)=="Roadside_ast_service"){echo "active";}?>" href="<?php echo base_url();?>Roadside_ast_service">Smart Roadside Assistant Service</a>
                        <a class="<?php if($this->uri->segment(1)=="smart_tpa"){echo "active";}?>" href="<?php echo base_url();?>smart_tpa">Smart TPA Service</a>
                        <a class="<?php if($this->uri->segment(1)=="orico"){echo "active";}?>" href="<?php echo base_url();?>oricocare">Orico Care</a>
                    </div>
            </div>
            <!-- <a href="<?php echo base_url();?>promotion" id="promotion">โปรโมชั่น</a> -->
            <a class="<?php if($this->uri->segment(1)=="news"){echo "active";}?>" href="<?php echo base_url();?>news" id="news">ข่าวสารและกิจกรรม</a>
            <a class="<?php if($this->uri->segment(1)=="partner"){echo "active";}?>" href="<?php echo base_url();?>partner" id="partner">พันธมิตร</a>
            <a class="<?php if($this->uri->segment(1)=="contactus"){echo "active";}?>" href="<?php echo base_url();?>contactus" id="contactus">ติดต่อเรา</a>
        
        </div>
</div>


<!-- mobile -->

<div class="d-md-none d-block" style="margin-bottom: 20px;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand animate__animated animate__fadeInDown" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/images/LOGO2.png" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-top: 20px;">
                <a class="home nav-item nav-link active" href="<?php echo base_url();?>">หน้าหลัก <span class="sr-only">(current)</span></a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>about">เกี่ยวกับเรา</a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>">ซื้อผลิตภัณฑ์</a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>Extended_warranty">Smart Extended Warranty</a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>Roadside_ast_service">Smart Roadside Assistant Service</a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>smart_tpa">Smart TPA Service</a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>Oricocare">Orico Care</a>

                <!-- <a class="promotion nav-item nav-link" href="<?php echo base_url();?>promotion" id="promotion">โปรโมชั่น</a> -->
                <a class="news nav-item nav-link" href="<?php echo base_url();?>news">ข่าวสารและกิจกรรม</a>
              
                <!-- <div class="service-dropdown">
                <a href="<?php echo base_url();?>" id="service">พันธมิตร</a>
                <div class="nav-dropdown">
                    <a href="<?php echo base_url();?>orico">Orico</a>   
                    <a href="<?php echo base_url(); ?>cimb">CIMB</a>
                </div>
            </div> -->
                <a class="contactus nav-item nav-link" href="<?php echo base_url();?>contactus">ติดต่อเรา</a>
            </div>
        </div>
    </nav>
</div>
