<?php 
 $this->db->select("*");
 $this->db->from("orico");
 $this->db->where("orico.status", "1");
 $query = $this->db->get();
 $products = $query->result();
 ?>

<?php 
 $this->db->select("*");
 $this->db->from("orico_rsa");
 $this->db->where("orico_rsa.status", "1");
 $query = $this->db->get();
 $products1 = $query->result();
 ?>

<?php include('Banner.php'); ?>
<div class="product">
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
            </div>
            <div class="title-text">Orico EW Care</div>
        </div>
    </div>

    <div class="p-1">
        <div class="mx-5 my-4">
            <?php foreach($products as $orico): ?>
                <div class="row frame mb-3">
                  
                    <div class="col-lg-6" style="margin-left:-15px">
                        <div class="package-title"></div>
                        <!-- <div class="package-title" ><?php echo mb_substr($orico->package,0,450,'UTF-8'); ?></div> -->
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/Orico/<?php echo $orico->image?>" height="380px" />
                        </div>
                    </div>
										<div class="col-lg-1" style="margin-left:15px"></div>
                    <div class="col-lg-5">
                        <div class="details-title">รายละเอียดผลิตภัณฑ์</div>
                        <div class="details"  style=" height:190px;">
                            <div>
                            <?php echo mb_substr($orico->content,0,600,'UTF-8'); ?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="button" style="float: right;">
                          <a href="<?php echo base_url(); ?>Oricocare/view/<?php echo $orico->id ?>" class="btn btn-more" > เพิ่มเติม</a></div>

                         
                        </div>
                      </div>
                        
                </div>
            <?php endforeach; ?>  
        </div>
    </div>

    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
            </div>
            <div class="title-text">Orico RSA Service</div>
        </div>
    </div>

    <div class="p-1">
        <div class="mx-5 my-4">
            <?php foreach($products1 as $orico_rsa): ?>
                <div class="row frame mb-3">
                  
                    <div class="col-lg-6" style="margin-left:-15px">
                        <div class="package-title"></div>
                        <!-- <div class="package-title" ><?php echo mb_substr($orico_rsa->package,0,450,'UTF-8'); ?></div> -->
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/Orico_rsa/<?php echo $orico_rsa->image?>" height="380px" />
                        </div>
                    </div>
										<div class="col-lg-1" style="margin-left:15px"></div>
                    <div class="col-lg-5">
                        <div class="details-title">รายละเอียดผลิตภัณฑ์</div>
                        <div class="details"  style=" height:190px;">
                            <div>
                            <?php echo mb_substr($orico_rsa->content,0,600,'UTF-8'); ?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="button" style="float: right;">
                          <a href="<?php echo base_url(); ?>OricoRsa/view/<?php echo $orico_rsa->id ?>" class="btn btn-more" > เพิ่มเติม</a></div>

                         
                        </div>
                      </div>
                        
                </div>
            <?php endforeach; ?>  
        </div>
    </div>
    
    </div>


</div>

<style>
.content-row{
  display: block;
}

.frame {
  padding: 10px;
  border: 9px solid #a2ced1;
  background-image: url("assets/uploads/Orico/Package-01.png");
  background-repeat: no-repeat;
  background-size: 100%;
}
.images{
  width: 103%;
  height: 270px;
  overflow: hidden;
}
.images img{
  width: 94%;
    height: 269px;
    object-fit: cover;
    margin-left: -40px;
}
.package-title {
  font-size: 22px;
  font-weight: bold;
}
.details-title {
  background-color: #000000;
  color: #ffffff;
  padding: 5px;
  margin-bottom: 10px;
  font-size: 19px;
  font-weight: bold;
}
.details {
  text-align: left;
}
.button {
  text-align: right;
}
.btn-more {
  padding: 4px 10px 1px;
  background-color: #000000;
  color: #ffffff;
}
.btn-more:hover {
    color: #ffffff;
}
.title-text {
  position: relative;
  width: auto;
  margin-left: 35px;
	padding: 21px 20px 12px 60px;
  color: #ffffff;
  font-size: 28px;
  font-weight: bold;
  background-color: #000000;
  border-bottom-right-radius: 30px;
  box-shadow: 0 4px 2px #b1b1b1;
}
</style>
