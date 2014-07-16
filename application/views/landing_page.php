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
    <style type="text/css">
        #container {
            overflow: hidden;
            width: 100%;
        }
        #machinesDiv {
            float: left;
            width: 45%;
            background-color: orange;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
        #aboutUsDiv {
            float: left;
            width: 45%;
            margin-right: -1px; /* Thank you IE */
            border-left: 1px solid black;
            background-color: red;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
    </style>
</head>
<body>
<div class="container " style="background-color: lightgray   ">
    <div id="header">
        <?php $this->load->view('header'); ?>
    </div>
    <div id="container" class="container row" style="margin-bottom: 20px">

        <?php $this->load->view('slider'); ?>
        <div id="machinesDiv" class="col-md-5 col-md-offset-1 col-sm-12"
             style="background-color: darkgray;border-right-style:solid;border-right:thick double white;">
            <h2>Our machines</h2>
            <ul>
                <?php for ($i = 0; $i < sizeof($machines); $i++): ?>
                        <li class="btn btn-default btn-lg active" style="margin: 5px"> <?php echo anchor('machines/machine/' . $machines[$i]['name'], $machines[$i]['name'], '') ?></li>

                <?php endfor; ?>
            </ul>
        </div>
        <!--        <div id="seperatorDiv" class="col-md-1"></div>-->
        <div id="aboutUsDiv" class="col-md-5 col-sm-12" style="background-color: darkgray;">
            <h2> About us</h2>
            PAL PAC is a well-known Palestinian manufacturing establishment that was established in 1996 by our modest
            self-efforts. At the beginning, the establishment was working on many activities in different manufacturing
            fields such as designing of different purposes machines and building manufacturing projects. However, in
            2000, the establishment changes its manufacturing orientation to be focused on filling and packaging
            machines. Therefore, PAL PAC starts producing filling and packaging machines for different types of
            production lines. PAL PAC participated in many local an regional exhibitions, such as Damascus International
            Exhibition, Baghdad International Exhibition and Bahrain International Exhibition. Moreover, Eng.Ahmad
            Rajab, PAL PAC's founder and CEO, has got Palestine International Award for Excellence and Creativity.
        </div>
    </div>

    <?php $this->load->view('footer'); ?>
</div>
</body>
</html>

