<?php
$this->db->select("*");
$this->db->from("tpa_service");
$this->db->where("tpa_service.status", "1");
$query = $this->db->get();
$tpa_services = $query->result();

?>

<?php include('Banner.php'); ?>

<div class="promotion">
    <div class="row">
        <div class="p-3 pb-4">
            <div class="title mb-3">
                <div class="title-circle">
                  <img src="<?php echo base_url(); ?>/assets/images/TPA_SERVICE-01.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>
                
    
<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#partner').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.partner').addClass("active");
    });
</script>


<style>
.frame {
  margin-bottom: 25px;
  padding: 10px;
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

.sizePartner{
 width:100%;
 height:200px;
 padding:10px;
}

.egde{
  margin:5px;
}

</style>


