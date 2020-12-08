<?php
$this->db->select("*");
$this->db->from("menu_slide");
$this->db->where("menu_slide.status", "1");
$this->db->limit("100,0");
$query = $this->db->get();
$images = $query->result();
$countIndicator = 0;
$countImage = 0;

// $this->db->select("*")
?>

<?php
$this->db->select("*");
$this->db->from("brands");
$query = $this->db->get();
$brands = $query->result();
?>

<?php
$this->db->select("*");
$this->db->from("models");
$query = $this->db->get();
$models = $query->result();
?>

<?php
$this->db->select("*");
$this->db->from("ccs");
$query = $this->db->get();
$ccs = $query->result();
?>


<div class="banner">

    <div class="row mx-lg-4 py-lg-3">
        <div class="col-lg-9 pr-lg-3 px-0 slide">
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach($images as $image): ?>
                    <li data-target="#carouselFade" data-slide-to="<?php echo $countIndicator; ?>"
                        class="<?php if($countIndicator == 0){ echo "active"; } ?>"></li>
                    <?php $countIndicator++; ?>
                    <?php endforeach; ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach($images as $image):  ?>
                    <div class="carousel-item <?php if($countImage == 0){ echo "active"; } ?>">
                        <img src="<?php echo base_url(); ?>assets/uploads/MenuSlide/<?php echo $image->image ?>"
                            class="d-block w-100">
                    </div>
                    <?php $countImage++; ?>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- <div class="col-lg-3 search">
            <div class="search-title">ค้นหาผลิตภัณฑ์</div>
            <div class="search-form">
                <div id="search-result dropdown"></div>
                <div class="border-form">
                    <form action="<?php echo base_url();?>product">
                        <input type="text" id="brand" name="brand" class="form-control form-control-sm" placeholder="ยี่ห้อ" autocomplete="off" value="<?php if (isset($_GET["brand"])) { echo $_GET["brand"]; } ?>" required>
                        <input type="text" id="model" name="model" class="form-control form-control-sm" placeholder="รุ่น"autocomplete="off" value="<?php if (isset($_GET["model"])) { echo $_GET["model"]; } ?>" required>
                        <input type="number" id="year" name="year" class="form-control form-control-sm" placeholder="ปี"autocomplete="off" min="1900" max="<?php echo date('Y'); ?>" value="<?php if (isset($_GET["year"])) { echo $_GET["year"]; } ?>" required>
                        <input type="text" id="cc" name="cc" class="form-control form-control-sm" placeholder="ขนาดเครื่องยนต์"autocomplete="off" value="<?php if (isset($_GET["cc"])) { echo $_GET["cc"]; } ?>" required>
                        <input type="text" id="mileage" name="mileage" class="form-control form-control-sm" placeholder="เลขไมล์"autocomplete="off" value="<?php if (isset($_GET["mileage"])) { echo $_GET["mileage"]; } ?>" required>
                        <button type="submit" class="btn btn-sm">ค้นหา</button>
                    </form>
                    
                </div>
            </div>
				</div> -->




        <div class="col-lg-3 search">
            <div class="search-title">ค้นหาผลิตภัณฑ์</div>
            <div class="search-form">
                <div id="search-result dropdown"></div>
                <div class="border-form">
                    <form action="<?php echo base_url();?>product">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>ยี่ห้อ</option>
                            <?php foreach($brands as $brandss): ?>
                            <option value="<?php echo $brandss->name_brand; ?>"><?php echo $brandss->name_brand; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>

                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>รุ่น</option>
                            <?php foreach($models as $modelss): ?>
                            <option value="<?php echo $modelss->name_model; ?>"><?php echo $modelss->name_model; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>

                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>ปี</option>
                            <?php
														for ($x = 1990; $x <= date('Y'); $x++) {
																echo " <option value='.$x.'>".$x."</option>" ;
														}
<<<<<<< Updated upstream
													?>
                        </select>

                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>ขนาดเครื่องยนต์</option>
                            <?php foreach($ccs as $ccss): ?>
                            <option value="<?php echo $ccss->cc; ?>"><?php echo $ccss->cc; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <input type="number" id="mileage" name="mileage" class="form-control"
                            style="background-color:white; color:#000000; " placeholder=" เลขไมล์" autocomplete="off"
                            value="" required>

=======
													?> 										
											</select>
											
											<select class="form-control" id="exampleFormControlSelect1">
												<option>ขนาดเครื่องยนต์</option>
												<?php foreach($ccs as $ccss): ?>
												<option value="<?php echo $ccss->cc; ?>"><?php echo $ccss->cc; ?></option>
												<?php endforeach; ?>
											</select>

											<input type="number" id="mileage" name="mileage" class="form-control form-control-sm"  
											placeholder="เลขไมล์"autocomplete="off" 
											value="" required>
													
>>>>>>> Stashed changes
                        <button type="submit" class="btn btn-sm">ค้นหา</button>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script>
var brandWording = "";
var modelWording = "";
var ccWording = "";

$("#brand").on("keyup", function() {
    var str = $(this).val();
    brandWording = str;
});
$("#model").on("keyup", function() {
    var str = $(this).val();
    brandWording = $("#brand").val();
    modelWording = str;
});
$("#cc").on("keyup", function() {
    var str = $(this).val();
    ccWording = str;
});

$("#brand").autocomplete({
    source: function(request, response) {
        $.ajax({
            type: "GET",
            data: {
                "brand": brandWording
            },
            url: "suggest/brand",
            dataType: 'json',
            success: function(data) {
                response($.map(data, function(el) {
                    return {
                        label: el.name_brand,
                        value: el.name_brand
                    }
                }));
            }
        });
    }
});

$("#model").autocomplete({
    source: function(request, response) {
        $.ajax({
            type: "GET",
            data: {
                "brand": brandWording,
                "model": modelWording
            },
            url: "suggest/model",
            dataType: 'json',
            success: function(data) {
                response($.map(data, function(el) {
                    return {
                        label: el.name_model,
                        value: el.name_model
                    }
                }));
            }
        });
    }
});

$("#cc").autocomplete({
    source: function(request, response) {
        $.ajax({
            type: "GET",
            data: {
                "cc": ccWording
            },
            url: "suggest/ccs",
            dataType: 'json',
            success: function(data) {
                response($.map(data, function(el) {
                    return {
                        label: el.cc,
                        value: el.cc
                    }
                }));
            }
        });
    }
});
</script>

<style>
h3 {
    margin: 40px 0 0;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    display: inline-block;
    margin: 0 10px;
}

a {
    color: #42b983;
}

.ui-menu-item {
    display: block;
    text-align: left;
}

.carousel-item,
.carousel-item img {
    height: 335px;
}

.carousel-item img {
    object-fit: cover;
}

.search {
    padding: 0;
    background-color: #A2CED1;
    color: #ffffff;
}

.search-title {
    background-color: #000;
    padding: 1px;
    font-size: 24px;
    font-weight: bold;
}

.border-form {
    border: 1px solid #d9d9d9;
    padding: 15px 25px;
    box-shadow: 4px 4px 5px -4px #666666;
}

.search-form {
    padding: 10px;
}

.search-form input {
    margin-bottom: 10px;
    background-color: rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 8px 5px -7px #525252;
    border: none;
    border-bottom: 2px solid #ffffff;
}

.search-form input::placeholder {
    text-align: left;
    font-size: 1rem;
    color: #000;
}

.search-form button {
    margin-top: 5px;
    padding: 3px 20px;
    font-size: 17px;
    font-weight: bold;
    color: #ffffff;
    background-color: #000000;
}

.search-form button:hover {
    color: #ffffff;
}

/**/
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}

@media only screen and (max-width: 991px) {
    .slide {
        margin: 10px 15px 0;
    }

    .carousel-item {
        height: auto !important;
    }

    .search {
        margin: 15px 30px;
    }

    .search-title {
        font-size: 20px;
    }
}
</style>