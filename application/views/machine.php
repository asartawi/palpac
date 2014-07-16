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
    <div id="machineContainer" style="margin-top: 10px">
        <div class="row" style="margin-left: 10px">

            <h3 class="col-md-4 btn btn-default btn-lg active"
                style="color: darkred; margin-left: 10px; margin-bottom: 10px"> <?php echo anchor('machines/machine/'.$machine['name'], $machine['name'], '') ?></h3>
        </div>
        <div class="row" style=" margin-left: 10px">
            <img class="col-md-4 img-responsive img-rounded" style="margin-left:10px; padding-bottom: 10px;"
                 src="<?php echo base_url(); ?>/<?php echo $machine['imageURL']; ?>">

            <p style="margin-top: 20px"><?php echo $machine['description']; ?></p>
        </div>
        <div class="row" style="margin-left: 10px">
            <iframe height=400 class="col-md-8 col-md-offset-2" src="<?php echo $machine['videoURL'] ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

<?php //if(sizeof($machine)>0) echo $machine['name']; ?>
    <?php $this->load->view('footer'); ?>
</div>

</body>
</html>