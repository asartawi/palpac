<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Palestinian Packaging Machines</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/palpac/css/myStyles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container " style = "background-color: lightgray   ">
    <div id="header">
        <?php $this->load->view('header'); ?>
    </div>
    <div class="contents">
        <?php $this->load->view('slider'); ?>
        <div id="machinesDiv" class="col-md-6 col-sm-12" style="background-color: darkgray;border-right-style:solid;border-right:thick double white;>
            <ul >
                <li><a href="#">Labeling Machine</a></li>
                <li><a href="#">Vertical Machine</a></li>
                <li><a href="#">Sugar filling Machine</a></li>
            </ul>
        </div>
<!--        <div id="seperatorDiv" class="col-md-1"></div>-->
        <div id="aboutUsDiv" class="col-md-6 col-sm-12" style="background-color: darkgray;padding-left: 10px">
            About us
            <br>
            عن المؤسسة

            تأسست بال باك عام 1996 كمؤسسة صناعية رائدة في الوطن و بامكانيات ذاتية متواضعة، في البداية كان نشاط المؤسسة في مجالات صناعية متعددة كتصميم ماكنات متنوعة و تنفيذ مشاريع صناعية. في عام 2000 حصل تحول كبير في التوجه الصناعي للمؤسسة حيث شرعت بانتاج ماكنات التعبئة و التبكيت و خطوط الانتاج بمختلف أشكالها و أنواعها. شاركت المؤسسة في العديد من المعارض المحلية و الاقليمية :معرض دمشق الدولي-مرتين،معرض بغداد الدولي، معرض البحرين الدولي, حصل المهندس أحمد صبيحات مؤسس الشركة على جائزة فلسطين الدولية للتميز والإبداع
        </div>
    </div>
</div>
</body>
</html>

