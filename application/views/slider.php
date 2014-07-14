<div class="col-md-10 col-md-offset-1">
    <div class="well">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="thumbnail" href="#x">
                                <img src="images/workers.jpg" alt="Image"
                                     class="img-responsive" style="height: 250px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="thumbnail" href="#x">
                                <img src="images/sugar_machine.jpg" alt="Image"
                                     class="img-responsive" style="height: 250px">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#x" class="thumbnail">
                                <img src="images/vertical_machine.jpg"
                                     alt="Image".
                                     class="img-responsive" style="height: 250px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#x" class="thumbnail">
                                <img src="images/label_machine_1.jpg"
                                     alt="Image"
                                     class="img-responsive" style="height: 250px">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#x" class="thumbnail">
                                <img src="images/label_machine_2.jpg"
                                     alt="Image"
                                     class="img-responsive" style="height: 250px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span> </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 10000
            })

            $('#myCarousel').on('slid.bs.carousel', function () {
                //alert("slid");
            });


        });

    </script>

