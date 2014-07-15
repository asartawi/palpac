<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Palestinian Packaging Machines</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/myStyles.css">
    <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container " style="background-color: lightgray   ">
    <div id="header">
        <?php $this->load->view('header'); ?>
    </div>
    <!--<?php //print_r($machines[0]);?>-->
    <?php for ($i = 0; $i < 4; $i++): ?>
        <div id="machineContainer" >
            <div class="row">
                <h3 class="col-md-4"
                    style="color: darkred; margin-left: 10px;"> <?php echo $machines[$i]['name']; ?></h3>
            </div>
            <div class="row" style="border-bottom: thin darkgray; border-bottom-style: solid">
                <img class="col-md-4" style="margin-left:10px; max-height: 300px;padding-bottom: 10px;"
                     src="<?php echo base_url(); ?>/<?php echo $machines[$i]['imageURL']; ?>">

                <p style="margin-top: 20px"><?php echo $machines[$i]['description']; ?></p>
            </div>
        </div>
    <?php endfor; ?>
    <?php $this->load->view('footer'); ?>
</div>

</body>
</html>