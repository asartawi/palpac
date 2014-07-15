<?php $this->load->helper('url');?>
<nav id="myNavbar" class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pal Pac</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><?php echo anchor('/', 'Home', '') ?></li>
                <li><?php echo anchor('machines/', 'Machines', '') ?></li>
                <li><?php echo anchor('clients/', 'Clients', '') ?></li>
                <li><?php echo anchor('about/', 'About us', '') ?></li>
                <li><?php echo anchor('contact/', 'Contact us', '') ?></li>
            </ul>
        </div>
    </div>
</nav>