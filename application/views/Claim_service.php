<?php 
 $this->db->select("*");
 $this->db->from("claim_service");
 $this->db->where("claim_service.status", "1");
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
            <div class="title-text">Smart Claim Service</div>
        </div>
    </div>

    <div class="p-1">
        <div class="mx-5 my-4">
            <?php foreach($products as $claim_service): ?>
            <div class="row frame mb-3">
                <div class="col-lg-4">
                    <div class="package-title"></div>
                    <div class="package-title"><?php echo mb_substr($claim_service->package,0,600,'UTF-8'); ?></div>
                    <div class="images">
                        <img
                            src="<?php echo base_url();?>/assets/uploads/claim_service/<?php echo $claim_service->image?>" />
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="details-title">รายละเอียดผลิตภัณฑ์</div>
                    <div class="details">
                        <div>
                            <?php echo mb_substr($claim_service->content,0,600,'UTF-8'); ?>
                        </div>
                    </div>
                    <!-- <div class="button"><a href="<?php echo base_url(); ?>claim_service/view/<?php echo $claim_service->id ?>" class="btn btn-more"  > เพิ่มเติม</a></div> -->
                </div>
            </div>
            <?php endforeach; 
            ?>
        </div>
    </div>
</div>

<style>
.content-row {
    display: block;
}

.frame {
    padding: 10px;
    border: 9px solid #04162b ;
}

.images {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.images img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.package-title {
    font-size: 22px;
    font-weight: bold;
}

.details-title {
    background-color: #04162b ;
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
    background-color: #04162b ;
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
    background-color: #04162b ;
    border-bottom-right-radius: 30px;
    box-shadow: 0 4px 2px #b1b1b1;
}
</style>