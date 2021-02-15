<!-- view -->
<!-- view -->
<?php
$this->db->select("*");
$this->db->from("smart_tpa");
$this->db->where("smart_tpa.id", $id);
$query = $this->db->get();
$Smart_tpa = $query->row();
?> 

<div class="detail pb-2">
    <div class="outside">
        <div class="inside">
          <div class="package-title-border">
            <div class="package-title">
              <b><?php echo strtoupper($Smart_tpa->package) ?></b>
            </div>
					</div>
					
          <div class="row topic-detail">
            <div class="col-lg-12" style="margin-left: auto; margin-right: auto;">
              <div>
                <img src="<?php echo base_url();?>/assets/uploads/smart_tpa/<?php echo $Smart_tpa->image_main?>" width="100%" />	     
              </div>
            </div>
          </div>

            <!-- <div class="col-lg-3 font-weight-bold">
              เงื่อนไขการให้บริการ
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->package_condition?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              ระยะเวลาการรับผิดชอบบริการ
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->time_period ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              รถที่สามารถได้รับความคุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->unexcept ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              รับผิดชอบสูงสุด
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->responsible ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              สิทธิพิเศษ
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->privilege ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              รถที่ไม่สามารถได้รับความคุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->except ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              สิ่งที่ไม่คุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->uncover_detail ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              รายละเอียดความคุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->cover_detail ?>
              </div>
            </div>
          </div>

          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              ราคา
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->price ?>
              </div>
            </div>
          </div>
          
          <hr />
          <div class="row topic-detail">
            <div class="col-lg-3 font-weight-bold">
              หมายเหตุ
            </div>
            <div class="col-lg-9">
              <div>
                <?php echo $Smart_tpa->mark ?>
              </div>
            </div> -->
          <!-- </div> -->
        </div>
		</div>

			<div class="button" >
			<!-- <a href="<?php echo base_url(); ?>assets/uploads/smart_tpa/<?php echo $Roadside_ast_service->pdf?>" target="_blank" class="btn btn-info">รายละเอียดเพิ่มเติม</a> -->
			<a href="<?php echo base_url(); ?>customerInfo" class="btn btn-buy">ซื้อผลิตภัณฑ์</a>	
			</div>
	<br>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#product').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.product').addClass("active");
    });
</script>

<style>
.detail{
  text-align: left;
}

hr {
  margin: 5px 0;
  background-color: #c4c4c4;
}
.outside{
  padding: 30px 30px 0px 30px;
}

.inside {
  background-color: #e5e7e6;
  min-height: 800px;
  font-size: 15px;
  padding: 20px 50px;
  border-radius: 20px;
  text-align: left;
  overflow-x: hidden;
  /* overflow-y: scroll; */
}

/* .inside.col-lg-9 {
  
} */
.inside::-webkit-scrollbar-track {
  border-radius: 10px;
  background-color: #f5f5f5;
  box-shadow: inset 0 0 6px rgba(116, 116, 116, 0.3);
}
.inside::-webkit-scrollbar {
  width: 7px;
  background-color: #f5f5f5;
}
.inside::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: rgb(148, 148, 148);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
.package-title-border{
  text-align: center;
  margin-bottom: 20px;
}

.package-title{
  background-color: #ee8532;
  text-align: center;
  display: inline-block;
  padding: 7px 50px;
  font-size: 28px;
  border: 5px solid #ffffff;
  border-radius: 10px;
  box-shadow: 0px 8px 20px rgba(0,0,0,0.4);
}

.topic-detail{
  margin-bottom: 10px;
}

.button {
    display: flex;
    justify-content: flex-end;
    margin: 10px 30px;
		
}
.btn-buy {
    color: #ffffff;
    background-color: #04162b ;
    box-shadow: 2px 3px 3px 0px #b4b4b4;
}
.btn-buy:hover{
    color: #ffffff;
    box-shadow: 2px 3px 3px 0px #797979;
}
</style>
