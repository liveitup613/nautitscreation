<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                <img style='width: 120px; filter: grayscale(0.8);' src="<?php echo base_url('assets/images/logo.svg');?>">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                <h2>Get in Touch</h2>
                <p> <?php echo $Contact[0]['Value'];?><br><br> 
                    Phone: <?php echo $Contact[1]['Value'];?><br><br>
                    <?php
                    $emails = explode(",", $Contact[2]['Value']);
                    foreach($emails as $email) 
                        echo trim($email) . '<br>';
                    ?>
                </p>
            </div>                    
            
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block">
                <h2>Working Hours</h2>
                <?php
                    foreach ($Hour as $hour) {
                        echo '<p>'. $hour['Name'] . '. '. $hour['Value'] .'<br><br></p>';
                    }
                ?>
            </div>                    
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN INNER FOOTER -->
<div class="page-footer">
    <div class="container"> Copyright© 2021 . All rights Reserved. Made with ♥ Nauti T's Creation             
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END INNER FOOTER -->