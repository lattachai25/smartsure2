<!-- view -->
<?php 
 $this->db->select("*");
 $this->db->from("smart_tpa");
 $this->db->where("smart_tpa.status", "1");
 $this->db->order_by("smart_tpa.id","ASC");
 $query = $this->db->get();
 $products = $query->result();
 ?>


<?php include('Banner.php'); ?>
<div class="product">
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
            </div>
            <div class="title-text">Smart Third Party Administration Service</div>
        </div>
    </div>

    <div class="p-1">
        <div class="mx-5 my-4">
            <?php foreach($products as $smart_tpa): ?>
                <div class="row frame mb-3">
                    <div class="col-lg-6" style="margin-left:-15px">
                        <div class="package-title"></div>
                        <!-- <div class="package-title" ><?php echo mb_substr($smart_tpa->package,0,600,'UTF-8'); ?></div> -->
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/smart_tpa/<?php echo $smart_tpa->image?>" height="380px"/>
                        </div>
                    </div>
										<div class="col-lg-1" style="margin-left:15px"></div>
                    <div class="col-lg-5">
                        <div class="details-title">รายละเอียดผลิตภัณฑ์</div>
                        <div class="details"  style=" height:190px;">
                            <div>
                            <?php echo mb_substr($smart_tpa->content,0,550,'UTF-8'); ?>
                            </div>
                        </div>  
                        <div class="col-lg-12">
                    <div class="button" style="float: right;">
                          <a href="<?php echo base_url(); ?>smart_tpa/view/<?php echo $smart_tpa->id; ?>" class="btn btn-more"  > เพิ่มเติม</a>
                        </div>
                    </div>                     
                  </div>
                </div>
             
            
            <?php endforeach; 
            ?>  
          
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
  background-image: url("./assets/uploads/smart_tpa/Package-01.png");
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
  word-wrap: break-word;
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
	padding: 19px 20px 13px 60px;
  color: #ffffff;
  font-size: 28px;
  font-weight: bold;
  background-color: #000000;
  border-bottom-right-radius: 30px;
  box-shadow: 0 4px 2px #b1b1b1;
}
</style>
