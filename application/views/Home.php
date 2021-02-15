<?php
$this->db->select("*");
$this->db->from("product1");
$this->db->where("product1.status", "1");
$query = $this->db->get();
$product1 = $query->result();
?>


<?php
$this->db->select("*");
$this->db->from("product2");
$this->db->where("product2.status", "1");
$query = $this->db->get();
$product2 = $query->result();
?>


<?php
$this->db->select("*");
$this->db->from("product3");
$this->db->where("product3.status", "1");
$query = $this->db->get();
$product3 = $query->result();
?>


<?php
$this->db->select("*");
$this->db->from("package");
$this->db->where("package.status", "1");
$this->db->limit("3,0");
$query = $this->db->get();
$packages = $query->result();
?>

<?php include('Banner.php'); ?>

<style>
.box {
    z-index: 9;
    margin-top: 40px;
    height: 300px;
    border-radius: 1px 20px 1px 20px;
    /* background: #D2E1E4; */
    /* background: linear-gradient(180deg, #D2E1E4) 43%, #D2E1E4 44%, #D2E1E4 100%); */
}
.bg_home{
   /*  padding: 10px; 
   margin-bottom: 25px;
    padding: 10px;
    border-style: solid;
    outline-offset: -12px;
   border-color: #ffffff;
    outline: 3px solid white;
    background-color: #04162b ;
    box-shadow: 0 35px 10px -30px #6e6e6e; */
    /* height: 345px;
    border: 9px solid #04162b ; */
    background-image: url("assets/images/หน้าแรกแก้ไข-01.png");
    background-repeat: no-repeat;
    background-size: 101%;
}0612b
}
</style>

<div class="home">
    <!-- ผลิตภัณฑ์แนะนำ -->
    <div class="p-3">
        <div class="row">
            <div class="title">
                <div class="title-circle">
                    <img src="<?php base_url(); ?>assets/images/car.png" />
                </div>

                <div class="title-text">
                    ผลิตภัณฑ์แนะนำ
                </div>

            </div>
        </div>

        <div class="row rec-product" >
            <?php foreach($packages as $package): ?>
            <div class="col-lg-4 col-md-6 product-item" >
                <div class="frame" style="text-decoration: none !important;">
                        <div class="box-title">
                            <div class="title"><?php echo $package->package ?></div>
                        </div>
                        
                    <a href="<?php echo base_url(); ?>Home/view/<?php echo $package->id ?>">
                        <img src="<?php base_url(); ?>assets/uploads/Package/<?php echo $package->image ?>">
                        <div class="des" style="text-decoration: none !important;">
                            <?php echo mb_substr($package->detail,0,200,'UTF-8'); ?>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


        <!-- <div class="col-12 button">
            <a href="<?php echo base_url(); ?>product" class="btn btn-more">
                เพิ่มเติม</a>
        </div> -->
    </div>
    
    <!-- มารู้จัก SMART SURE กันเถอะ -->
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php base_url(); ?>assets/images/car.png" />
            </div>
            <div class="title-text">
                มารู้จัก SMART SURE กันเถอะ
            </div>
            <br>
        </div>

        <?php foreach($product1 as $product1s): ?>
          <div class="bg_home col-11" style="margin-left:50px;">
        <div class="row">
      
        <div class="col-lg-5">
            <div class="row mx-lg-4 my-lg-4">
                <?php $youtubeId = substr($product1s->link_youtube, -11); ?>
                <iframe style="margin-left:75px; margin-top:8px;" width="100%" height="235px" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="row mx-lg-3 my-lg-3">
                <div class="box col-lg-12">
                    <div class="col-12">
                        <div class="text-right" style=" height:290px;">
                            <div style="margin:-15px; padding:-5px; text-align: left;">
                                <?php echo mb_substr($product1s->content,0,800,'UTF-8'); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="row">
                        <div class="col-9"> </div>
                        <div class="col-2">
                            <div class="col-12 col-lg-12 btn-buy">

                                <a href="<?php base_url();?>news">
                                    เพิ่มเติม
                                </a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div> -->
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php endforeach; ?>


    </div>
    <!-- Smart Top 10 Awards -->
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php base_url(); ?>assets/images/car.png" />
            </div>
            <div class="title-text">
                SMART TOP 10 THANK YOU PARTY
            </div>
            <br>
        </div>
      
        <?php foreach($product2 as $product2s): ?>  
<div class="bg_home col-11" style="margin-left:50px;">    
<div class="row">
     
        <div class="col-lg-5">
            <div class="row mx-lg-4 my-lg-4">
                <?php $youtubeId = substr($product2s->link_youtube, -11); ?>
                <iframe style="margin-left:75px; margin-top:8px;" width="100%" height="235px" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="row mx-lg-3 my-lg-3">
                <div class="box col-lg-12">
                    <div class="col-12">
                        <div class="text-right" style=" height:290px;">
                        <div style="margin:-15px; padding:-5px; text-align: left;">
                                <?php echo mb_substr($product2s->content,0,800,'UTF-8'); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="row">
                        <div class="col-9"> </div>
                        <div class="col-2">
                            <div class="col-12 col-lg-12 btn-buy">
                                <a href="<?php base_url();?>news">
                                    เพิ่มเติม
                                </a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div> -->
                </div>
            </div>
        </div>

</div>
</div>  
        <?php endforeach; ?>


    </div>
<!-- ทำไมต้อง smart sure -->
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php base_url(); ?>assets/images/car.png" />
            </div>
            <div class="title-text">
                ทำไมต้อง SMART SURE 
            </div>
            <br>
        </div>

        <?php foreach($product3 as $product3s): ?>
          <div class="bg_home col-11" style="margin-left:50px;">
        <div class="row">
      
        <div class="col-lg-5">
            <div class="row mx-lg-4 my-lg-4">
                <?php $youtubeId = substr($product3s->link_youtube, -11); ?>
                <iframe style="margin-left:75px; margin-top:8px;" width="100%" height="235px" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <div class="row mx-lg-3 my-lg-3">

                <div class="box col-lg-12">
                    <div class="col-12">
                        <div class="text-right" style=" height:290px;">
                        <div style="margin:-15px; padding:-5px; text-align: left;">
                                <?php echo mb_substr($product3s->content,0,800,'UTF-8'); ?>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- <div class="row">
                        <div class="col-9"> </div>
                        <div class="col-2">
                            <div class="col-12 col-lg-12 btn-buy">

                                <a href="<?php base_url();?>news">
                                    เพิ่มเติม
                                </a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div> -->
                    
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php endforeach; ?>


    </div>



</div>


<style>
.rec-product {
    margin-top: 30px;
    margin-left: -6px;
    padding: 0 25px;
    height: 300px;
}

.rec-product .box-title {
    display: flex;
    align-content: center;
    position: absolute;
    z-index: 2;
    left: 0;
    right: 0;
    top: 25px;
    width: 100%;
}

.rec-product .box-title .title {
    margin: auto;
    padding: 0 15px;
    font-weight: 400;
    color: #ffffff;
    background-color: #04162b ;
    border-radius: 7px 7px 7px 7px;
    margin-top: -4px;
}

.rec-product .box-detail {
    display: flex;
    align-content: center;
    position: absolute;
    z-index: 2;
    top: 243px;
    width: 89%;
}

.rec-product .box-detail .detail {
    margin: 0 auto;
    line-height: 19px;
}

.product-item {
    text-align: center;
    display: block;
    position: relative;
    height: 300px;
    border-radius: 50px;
}

/* .frame {
  position: relative;
  height: auto;
  width: 100%;
  z-index: 1;
  left: 0;
  border-radius: 21%;
  box-shadow: 0 0 15px #b1b1b1;
}
.image {
  position: absolute;
  width: 80%;
  object-fit: cover;
  z-index: 0;
  left: 10%;
  padding-top: 6%;
} */

.button {
    margin-top: 12px;
    text-align: right;
    padding-right: 50px;
}

.btn-more {
    padding: 8px 12px 3px;
    font-weight: 600;
    color: #ffffff;
    background-color: #04162b;
    border: 2px solid #04162b;
    box-shadow: 2px 2px 3px #b1b1b1;
}

.text-left {
    padding-right: 10px;
}

.btn-buy {
    position: absolute;
    bottom: 0;
    margin-bottom: 35px;
    padding: 5px 0 0 0;
    background-color: #04162b ;
    border-bottom-right-radius: 15px;
}

.btn-buy a {
    color: #ffffff;
    font-size: 20px;
    font-weight: bold;
}

.frame {
    /*width: 300px;*/
    height: 290px;
    border: 15px solid #ffffff;
    background: #04162b;
    margin: auto;
    padding: 35px 11px 70px 10px;
    border-radius: 60px;
    box-shadow: 0 0 15px #b1b1b1;
}

.frame img {
    width: 95%;
    height: 110%;
    box-shadow: 0px 8px 0px #04162b;
    border-radius: 40px;
    object-fit: cover;
}

.des {
    color: white;
    margin-top: 8px;
    text-align: center;
    text-decoration: none !important;
}

@media only screen and (max-width: 991px) {
    .rec-product {
        margin-left: 18px;
        margin-right: 18px;
        padding: 0;
        height: auto;
    }

    .rec-product .box-title {
        width: 100%;
        top: 24px;
    }

    .rec-product .box-detail {
        top: 88%;
        width: 96%;
    }

    .product-item {
        padding-left: 0;
        margin-bottom: 30px;
    }

    .image {
        width: 82%;
        left: 7%;
    }

    .button {
        text-align: center;
        padding-right: 15px;
    }

    .text-left {
        padding: 0;
    }

    .btn-buy {
        position: static;
    }

    .title {
        margin-bottom: 20px;
    }
}

.title-text {
    position: relative;
    width: auto;
    margin-left: 35px;
    padding: 19px 20px 13px 60px !important;
    color: #ffffff;
    font-size: 28px;
    font-weight: bold;
    background-color: #04162b ;
    border-bottom-right-radius: 30px;
    box-shadow: 0 4px 2px #b1b1b1;
}
</style>