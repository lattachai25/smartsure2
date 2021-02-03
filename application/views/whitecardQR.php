
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

        <div >
            <img  src="<?php base_url(); ?>assets/uploads/whitecard_qr/whitecard.png" width="100%"   alt="" />
            
          
                    <a style="    z-index: 0;
                                float: right;
                                margin-top: 161%;
                                margin-left: -29%;
                                padding-bottom: 15px;
                                padding-top: 40px;
                                padding-right: 211px;
                                padding-left: 100px;
                                position: absolute;
                                font-size: 32;
                                color: #F4F4F4;
                                text-decoration: none;" 
                                href="https://line.me/R/ti/p/@wsmart" >
                    <!-- <a class="buttonline" href="https://line.me/R/ti/p/@wsmart" > -->
                   
                          ...
                    
                        <!-- <img class="" src="<?php base_url(); ?>assets/uploads/whitecard_qr/whitecard.png" width="100%"   alt="" />    -->
                    </a>   
                  
        </div>
    </body>

    <style>
           .buttonline{
            width: 274px;
            height: 100px;
            border:10px solid #00BD00;
            border-radius: 10px;
            text-decoration: none;
            color:#00BD00;
            text-align: center;
            font-size: 50;
           }

            .lineads{
                width: 50%;
                height: 100%;
                right: 10%;
                bottom: 5%;
                /* top: 0; */
                /* z-index: 0; */
                /* position: absolute; */

       
        }
    </style>
</html>

