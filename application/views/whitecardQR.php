
<?php
$this->db->select("*");
$this->db->from("WhitecardQR");
$query = $this->db->get();
$WhitecardQR = $query->result();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div style="position:relative;">
            <img  src="<?php base_url(); ?>assets/uploads/whitecard_qr/whitecard.jpg" width="100%"   alt="" />
            
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    <a href="https://line.me/R/ti/p/@wsmart" >
                        <img class="lineads" src="<?php base_url(); ?>assets/uploads/whitecard_qr/line_button.jpg" width="100%"   alt="" />   
                    </a>   
                </div>
            </div>        
        </div>
    </body>

    <style>
           
            .lineads{
                width: 274px;
                height: 100px;
                right: 10%;
                bottom: 5%;
                /* top: 0; */
                /* z-index: 0; */
                position: absolute;

       
        }
    </style>
</html>

