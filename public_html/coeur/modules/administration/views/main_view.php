<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:32:42 GMT -->
         <?php 
            require('_header.php');
        ?> 
    <body class="layout-fixed-left-menu left-sidebar-toggled show-welcome-message">
        <?php 
            require('_header_left_sidebar.php');
        ?> 
        
        <!-- Right Side Bar -->
        <?php 
            require('_aside_right_sidebar.php');
        ?> 

        <section id="main">
        	<!-- Main Nav Bar -->
            <?php 
            require('_menu_sidebar_left.php');
        ?> 
            
            <!-- Content Section START -->
            <section id="content">
                <div class="container">
                    <div class="block-header clearfix">
                        <h2 class="pull-left">Espace d administration </h2>

                        <ul class="breadcrumb pull-right">
                           
                            <li><a href="#">Tableau de bords</a></li>
                        </ul>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-12">
                            <div class="card card-tile-combined">
                                <div class="card-body card-padding">
                                    <div class="row">
                                        <div class="col-sm-3 first">
                                            <div class="">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                                    <h5 class="text-muted vb">ENTREPRISES</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h1 class="counter text-right m-t-15 text-danger">56</h1>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                                            <span class="sr-only">40% Complete (success)</span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-3">
                                            <div>
                                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                                                    <h5 class="text-muted vb">PAIEMENTS EN ATTENTE</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h1 class="counter text-right m-t-15 text-primary">230</h1>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="progress">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                                        <span class="sr-only">40% Complete (success)</span> 
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-3">
                                            <div class="">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                                                    <h5 class="text-muted vb">PAIEMENTS EFFECTUES</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h1 class="counter text-right m-t-15 text-warning">218</h1>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                                            <span class="sr-only">40% Complete (success)</span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-3">
                                            <div class="">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                                                    <h5 class="text-muted vb">CHIFFRES D AFFAIRES</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h1 class="counter text-right m-t-15 text-success">305</h1>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                                            <span class="sr-only">40% Complete (success)</span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                	</div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-8">
                            <div class="card card-map" style="min-height: 380px">
                                <div class="card-header">
                                    <h2>Rapport de vente annuelle</h2>
                                </div>
    
                                <div class="card-body card-padding">
                                    <div class="chart-edge">
                                        <div id="line-chart" class="flot-chart-line"></div>
                                        <div class="flc-line"></div>
                                    </div>
                                </div>
                          	</div>
                        </div>
   						<div class="col-sm-4">
                            <!-- Widget Tile carousel -->
                            <div class="card md-bg-blue-400 widget-loader-bar-3" style="min-height: 380px">    
                                <div class="card-body">
                                    <div class="carousel vertical slide" data-ride="carousel" data-start-now="false">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active p-25">
                                                <div class="m-b-25">
                                                    <p class="m-b-10 c-grey-50 f-13">14 Apr</p>
                                                    <h3 class="m-0 c-white p-b-10 f-28 f-300">Embrace<br><span class="f-400"> a whole new World</span></h3>
                                                    <img src="<?php echo base_url(); ?>/assets/V2/dist/images/worldmap.png">
                                                </div>
                                                <div class="m-b-20">
                                                    <div class="pull-left">
                                                        <ul class="list-inline">
                                                            <li><a href="#" class="no-decoration"><i class="zmdi zmdi-comment-text c-white f-30"></i></a></li>
                                                            <li><a href="#" class="no-decoration"><i class="zmdi zmdi-favorite-outline c-white f-30"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item p-25">
                                                <div class="pull-top p-b-25">
                                                    <p class="m-b-10 c-grey-50 f-13">14 Apr</p>
                                                    <h3 class="m-0 c-white p-b-10 f-28 f-300">ABC Inc<br>is now a<br> <span class="f-400">Fortune 500 Company</span></h3>
                                                </div>
                                                <div class="pull-bottom m-b-20">
                                                    <div class="pull-left">
                                                        <ul class="list-inline">
                                                            <li><a href="#" class="no-decoration"><i class="zmdi zmdi-comment-text c-white f-30"></i></a></li>
                                                            <li><a href="#" class="no-decoration"><i class="zmdi zmdi-favorite-outline c-white f-30"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
						</div>  
                  	</div>
                                        
                    <div class="row">
                        
                    	<div class="col-sm-4">
                            <div class="card" style="min-height: 465px">
                                <div class="card-body">
                                    <div class="widget widget-report-table">
                                        <header class="widget-header m-b-15">
                                        </header>
                                        
                                        <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h2>August 2016</h2>
                                                <p>Chiffres d affaires mensuel</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                <h1 class="text-right c-teal f-300 m-t-20">$13,136</h1>
                                            </div>
                                        </div>
                                        
                                        <div class="widget-body p-15">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>ENTREPRISE</th>
                                                        <th>DATE</th>
                                                        <th>MONTANT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>41387</td>
                                                        <td>A. Datum Corporation</td>
                                                        <td>10/08/2017</td>
                                                        <td>6,400.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>41408</td>
                                                        <td>Proseware, Inc.</td>
                                                        <td>10/08/2017</td>
                                                        <td>5,800.00</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>41408</td>
                                                        <td>School of Fine Art</td>
                                                        <td>10/08/2017</td>
                                                        <td>5,800.00</td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <td>41423</td>
                                                        <td>Trey Research</td>
                                                        <td>10/08/2017</td>
                                                        <td>6,300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>41387</td>
                                                        <td>A. Datum Corporation</td>
                                                        <td>10/08/2017</td>
                                                        <td>6,900.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                        	<!-- Todo -->
                          <div id="todo1" class="card card-todo-list" style="min-height: 465px">
                            <div class="card-header ch-alt">
                              <h2>Taches  <small>gerer les taches a faire</small></h2>
                            </div>
                            <div class="card-body card-padding">
                              <div class="todo-add"> <i class="ta-btn zmdi zmdi-plus c-black" data-dp-action="todo-form-open"></i>
                                <div class="ta-block">
                                  <textarea placeholder="What you want to do..."></textarea>
                                  <div class="tab-actions"> <a data-dp-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a> <a data-dp-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a> </div>
                                </div>
                              </div>
                              <div class="list-group">
                                <div class="list-group-item media">
                                  <div class="pull-right">
                                    <ul class="actions">
                                      <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="#">Delete</a></li>
                                          <li><a href="#">Archive</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="media-body">
                                    <div class="checkbox">
                                      <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Get video on company culture. Get reviewed by Tim</div>
                                      <small class="lgi-text">assigned to Jenny</small> </span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item media">
                                  <div class="pull-right">
                                    <ul class="actions">
                                      <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="#">Delete</a></li>
                                          <li><a href="#">Archive</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="media-body">
                                    <div class="checkbox">
                                      <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Create training material and upload on Intranet. Circulate email with link</div>
                                      <small class="lgi-text">assigned to Allen</small> </span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item media">
                                  <div class="pull-right">
                                    <ul class="actions">
                                      <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="#">Delete</a></li>
                                          <li><a href="#">Archive</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="media-body">
                                    <div class="checkbox">
                                      <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Get video on company culture. Get reviewed by Tim</div>
                                      <small class="lgi-text">assigned to Jenny</small> </span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item media">
                                  <div class="pull-right">
                                    <ul class="actions">
                                      <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="#">Delete</a></li>
                                          <li><a href="#">Archive</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="media-body">
                                    <div class="checkbox">
                                      <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Create training material and upload on Intranet. Circulate email with link</div>
                                      <small class="lgi-text">assigned to Allen</small> </span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    	<div class="col-sm-4">
                            <div class="card" style="min-height: 465px">
                                <div class="card-body card-padding">
                                    <div class="widget">
                                        <header class="widget-header">
                                            <h4 class="widget-title">Rapports logs</h4>
                                        </header>
                                        <hr class="widget-separator">
                                        <div class="widget-body">
                                            <div class="streamline">
                                                <div class="sl-item sl-primary">
                                                    <div class="sl-content">
                                                        <small class="text-muted">5 mins ago</small>
                                                        <p>Williams has just joined Project X</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-danger">
                                                    <div class="sl-content">
                                                        <small class="text-muted">25 mins ago</small>
                                                        <p>Jane has sent a request for access to the project folder</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-success">
                                                    <div class="sl-content">
                                                        <small class="text-muted">40 mins ago</small>
                                                        <p>Kate added you to her team</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item">
                                                    <div class="sl-content">
                                                        <small class="text-muted">45 minutes ago</small>
                                                        <p>John has finished his task</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-warning">
                                                    <div class="sl-content">
                                                        <small class="text-muted">55 mins ago</small>
                                                        <p>Jim shared a folder with you</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item">
                                                    <div class="sl-content">
                                                        <small class="text-muted">60 minutes ago</small>
                                                        <p>John has finished his task</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-4">
                            <div class="card" style="min-height: 566px">
                                <div class="card-body">
                                    <div class="widget widget-status-table" id="country-sales-list">
                                        <div class="widget-body p-t-20">
                                            <table class="table table-hover f-12">
                                                <thead>
                                                    <tr>
                                                        <th><p class="c-red-500">Pays</p></th>
                                                        <th><p class="c-red-500">Entreprise</p></th>
                                                        <th><p class="c-red-500">Ventes</p></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-us f-13 m-r-5"></span>United States</td>
                                                        <td>1234</td>
                                                        <td>240</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-gb f-13 m-r-5"></span>United Kingdom</td>
                                                        <td>934</td>
                                                        <td>197</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-ca f-13 m-r-5"></span>Canada</td>
                                                        <td>340</td>
                                                        <td>90</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-au f-13 m-r-5"></span>Australia</td>
                                                        <td>34</td>
                                                        <td>24</td>
                                                    </tr>

                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-ca f-13 m-r-5"></span>Canada</td>
                                                        <td>340</td>
                                                        <td>90</td>
                                                    </tr>
                                                    <tr>

                                                        <td><span class="flag-icon flag-icon-au f-13 m-r-5"></span>Australia</td>
                                                        <td>34</td>
                                                        <td>24</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-de f-13 m-r-5"></span>Germany</td>
                                                        <td>13</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-in f-13 m-r-5"></span>India</td>
                                                        <td>11</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>

                                                        <td><span class="flag-icon flag-icon-za f-13 m-r-5"></span>South Africa</td>
                                                        <td>10</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-ae f-13 m-r-5"></span>United Arab Emirates</td>
                                                        <td>10</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="flag-icon flag-icon-sg f-13 m-r-5"></span>Singapore</td>
                                                        <td>8</td>
                                                        <td>4</td>
                                                    </tr>
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- list-group -->
                        <div class="col-sm-4">
                            <div class="card card-contact-list" style="min-height: 566px">
                                <div class="card-header">
                                    <h2>Contacts souscripteurs</h2>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">David Belle</div>
                                                	<small class="lg-item-text">david@gmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">PR Manager</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Chris Morris</div>
                                                	<small class="lg-item-text">chris@hotmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Director at Bingo</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Fredric Mitchell Jr.</div>
                                                	<small class="lg-item-text">fredric@gmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">PR Manager</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                            	<div class="pull-left">
                                                	<div class="lg-item-heading">Glenn Jecobs</div>
                                                	<small class="lg-item-text">glenn@hotmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Assistan</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Bill Phillips</div>
                                                	<small class="lg-item-text">billphillips@yahoo.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">PR Manager</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="#">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Chris Morris</div>
                                                	<small class="lg-item-text">chris@hotmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Director at Bingo</div>
                                                </div>
                                            </div>
                                        </a>
                                   	</div>
                                </div>
                            </div>
                      	</div>
                        
                    	<div class="col-sm-4">  
                        	<div class="card" id="calendar-widget" style="min-height: 566px">
                                <div class="card-header ch-alt md-bg-purple-500">
                                    <div class="cwh-year"></div>
                                    <div class="cwh-day"></div>
                                </div>

                                <div class="card-body card-padding-sm">
                                    <div id="cw-body"></div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    

                    
                    
                    
                    <div class="row">
                    	<div class="col-sm-12">
                            <div class="card card-map">
                                <div class="card-header">
                                    <h2>Commandes  <small>commande par region</small></h2>
                                </div>
    
                                <div class="card-body card-padding">
                                	<div class="row">
                                        <div class="list-group col-sm-4">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                	<div>
                                                    	<div class="lgi-heading m-b-5 pull-left">Paiement en attente</div>
                                                        <div class="lgi-heading m-b-5 pull-right">460/1000</div>
                                                        <div style="clear:both;"></div>
                                                    </div>
            
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="46"
                                                             aria-valuemin="0" aria-valuemax="100" style="width: 46%">
                                                            <span class="sr-only">46%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div>
                                                    	<div class="lgi-heading m-b-5 pull-left">Paiement valiide</div>
                                                        <div class="lgi-heading m-b-5 pull-right">550/1000</div>
                                                        <div style="clear:both;"></div>
                                                    </div>
            
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                                             aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 55%">
                                                            <span class="sr-only">55%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div>
                                                    	<div class="lgi-heading m-b-5 pull-left">Returned Orders</div>
                                                        <div class="lgi-heading m-b-5 pull-right">60/1000</div>
                                                        <div style="clear:both;"></div>
                                                    </div>
            
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                                             aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 6%">
                                                            <span class="sr-only">6%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div>
                                                    	<div class="lgi-heading m-b-5 pull-left">Paiement annule</div>
                                                        <div class="lgi-heading m-b-5 pull-right">30/1000</div>
                                                        <div style="clear:both;"></div>
                                                    </div>
            
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                                             aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 3%">
                                                            <span class="sr-only">3%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="list-group-item">
                                                    <p>Note: informations sur les paiements sont mise a jour chaque 10 minutes
                                                   	</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-8 p-t-10">
                                            <div id="dashboard-map-orders" style="width: 100%; height: 250px"></div>
                                        </div>
                                	</div>    
                                </div>
                          	</div>
                        </div>
            
                  	</div>
                    
                </div>
            </section>
            <!-- Content Section END -->
        </section>

        <!-- Footer -->
        <?php 
            require('_footer.php');
        ?> 
        

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/Waves/dist/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/sweetalert/dist/sweetalert.min.js"></script>
       
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/sparklines/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot.curvedlines/curvedLines.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/flot-orderBars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/charts/chartjs/Chart.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/map/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/map/jvectormap/jquery-jvectormap-world-mill.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/gdp-data.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
				/* Welcome Message */
				function notify(message, type){
					$.growl({
						message: message
					},{
						type: type,
						allow_dismiss: false,
						label: 'Cancel',
						placement: {
							from: 'top',
							align: 'right'
						},
						delay: 2000,
						animate: {
							enter: 'animated fadeInUp',
							exit: 'animated fadeOutDown'
						},
						offset: {
							x: 30,
							y: 70
						}
					});
				};
				
				setTimeout(function () {
					if ($('.show-welcome-message')[0]) {
						notify('Welcome Kate Winslet!', 'inverse');
					}
				}, 1000);
	
				/* Profile Card */
				$('.btn-move-up').click(function() {
					$('.card-reveal').css({'display': 'block', 'transform': 'translateY(-100%)'});
				});
				
				$('.btn-move-down').click(function() {
					$('.card-reveal').css({'display': 'none', 'transform': 'translateY(0%)'});
				});
								
				/* Vector Map */
				$('#dashboard-map-orders').vectorMap({
				  	map: 'world_mill',
				  	backgroundColor: '#EEE',                                      
					regionsSelectable: true,
					regionStyle: {selected: {fill: '#B64645'},
									initial: {fill: '#757575'}},
					markerStyle: {initial: {fill: '#3FBAE4',
								   stroke: '#3FBAE4'}},
					markers: [{latLng: [50.27, 30.31], name: 'Kyiv - 1'},                                              
							  {latLng: [52.52, 13.40], name: 'Berlin - 2'},
							  {latLng: [48.85, 2.35], name: 'Paris - 1'},                                            
							  {latLng: [51.51, -0.13], name: 'London - 3'},                                                                                                      
							  {latLng: [40.71, -74.00], name: 'New York - 5'},
							  {latLng: [35.38, 139.69], name: 'Tokyo - 12'},
							  {latLng: [37.78, -122.41], name: 'San Francisco - 8'},
							  {latLng: [28.61, 77.20], name: 'New Delhi - 4'},
							  {latLng: [39.91, 116.39], name: 'Beijing - 3'}]
				});

            });                        
        </script>

	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:22 GMT -->
</html>
