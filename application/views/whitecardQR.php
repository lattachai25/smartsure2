
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
        <img src="<?php base_url(); ?>assets/uploads/whitecard_qr/whitecard.png" width="100%"   alt="" />   
        <div style="width:50px; height:50px; border:1px solid black;">
                <a href="www.facebook.com">click here</a>
        </div>
    </body>
</html>

