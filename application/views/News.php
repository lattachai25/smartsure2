<?php
$this->db->select("*");
$this->db->from("news");
$this->db->where("news.status", "1");
$query = $this->db->get();
$news = $query->result();
?>


<style>
.box {
    z-index: 9;
    margin-top: 15px;
    height: 220px;
    border-radius: 1px 20px 1px 20px;
    background: #D2E1E4;
    background: linear-gradient(180deg, #D2E1E4 43%, #D2E1E4 44%, #D2E1E4 100%);
}
</style>



<?php include('Banner.php'); ?>
<div class="promotion">
    <div class="row">
        <div class="p-3 pb-4">
            <div class="title mb-3">
                <div class="title-circle">
                    <img src="<?php echo base_url(); ?>/assets/images/car.png" />
                </div>
                <div class="title-text">ข่าวสารและกิจกรรม</div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach($news as $new):  ?>
        <div class="mx-5 mt-2">
            <div cols="12" class="promotion-title">หัวข้อข่าวสารและกิจกรรม</div>
            <div class="frame">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url(); ?>/assets/uploads/News/<?php echo $new->news_image ?>"
                            width="100%" height="350px;" />
                    </div>
                    <div class="col-lg-6">

                        <div class="row" style="min-height: 200px; margin-top:30px;">
                            <div class="col-11" style="text-align: left;">
                                <div
                                    style="background:#000; color:#fff; font-size:18px; width:93px; position: absolute; margin-left:-15px; box-shadow: 2px 2px 3px;">
                                    <?php echo $new->date;?>
                                </div>
                                <div class="box">
                                    <br>
                                <div class="col-lg-12">
                    
                        <div class="details">
                            <div style="margin:15px; margin-top:20px; padding:10px;">
                            <?php echo mb_substr($new->news_content,0,600,'UTF-8'); ?>
                            </div>
                        </div>
                    </div>
                                    <!-- <div style="margin:15px; margin-top:20px; padding:10px;">
                                        <?php echo mb_substr($new->news_detail,0,550,'UTF-8').'...'; ?></div> -->
                                </div>
                            </div>
                        </div>

                        <a href="<?php base_url();?>news/view/<?php echo $new->id;?>">

                            <div class="button" style="margin:10px;">
                                <a class="btn btn-more"
                                    href="<?php base_url();?>news/view/<?php echo $new->id;?>">อ่านต่อ</a>
                            </div>
                            <!-- <button type="button" class="btn btn-more" style="float: right; margin-right:-15px;">อ่านต่อ</button> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>











<script type="text/javascript">
$(document).ready(function() {
    $('#nav a').removeClass("active");
    $('#news').addClass("active");

    $('.navbar-nav a').removeClass("active");
    $('a.news').addClass("active");
});


</script>


<style>
.frame {
    margin-bottom: 25px;
    padding: 10px;
    border-style: solid;
    border-color: #ffffff;
    outline: 3px solid white;
    outline-offset: -12px;
    background-color: #a2ced1;
    box-shadow: 0 35px 10px -30px #6e6e6e;
}

.promotion-title {
    text-align: left;
    padding: 4px 40px;
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    background-color: #000000;
}

.details-title {
    padding: 5px;
    margin-bottom: 10px;
    font-size: 19px;
    font-weight: bold;
}

.details {
    text-align: left;
}

.button {
    position: absolute;
    bottom: 0;
    right: 10px;
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
</style>