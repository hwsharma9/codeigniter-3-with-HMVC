<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>SEZ</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b><img src="<?php echo base_url("assets/user/images/logo1.png"); ?>" style="width:80%;"></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>" style="background-color:#1F90CC" class="pull-left">
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs"><?php echo ($this->type=="superadmin")?$this->admin_name:$this->client_name; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-footer">
                                <!--div class="pull-left">
                                    <a href="javascript:void(0)" class="btn btn-default btn-flat">Profile</a>
                                    </div-->
                                <div class="pull-right">
                                    <a href="<?php echo base_url("superadmin/logout"); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="<?php echo base_url("superadmin"); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Client & Bidder</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <!--li><a href="<?php echo base_url("client/client-search"); ?>"><i class="fa fa-circle-o"></i> Client Search</a></li>
                        <li><a href="<?php echo base_url("client/add-client"); ?>"><i class="fa fa-circle-o"></i> Add Client</a></li-->
                        <li><a href="<?php echo base_url("client/all-client-list"); ?>"><i class="fa fa-circle-o"></i> Client Detail</a></li>
                        <li><a href="<?php echo base_url("bidder/all-bidder-list"); ?>"><i class="fa fa-circle-o"></i> Bidder Detail</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Master</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("add-auction-page"); ?>"><i class="fa fa-circle-o"></i> Create Auction</a></li>
                        <li><a href="<?php echo base_url("auction/import-auction"); ?>"><i class="fa fa-circle-o"></i> Import Auction</a></li>
                        <li><a href="<?php echo base_url("auction/all-upcoming-auction-list"); ?>"><i class="fa fa-circle-o"></i> All Auction List</a></li>
                        <li><a href="<?php echo base_url("add-document"); ?>"><i class="fa fa-circle-o"></i> Auction Docs</a></li>
                        <li><a href="<?php echo base_url("edit-auction-price"); ?>"><i class="fa fa-circle-o"></i> Modify Auction Price</a></li>
                        <li><a href="<?php echo base_url("edit-auction-time"); ?>"><i class="fa fa-circle-o"></i> Modify Auction Time</a></li>
                        <li><a href="<?php echo base_url("modify-prebid-time"); ?>"><i class="fa fa-circle-o"></i> Modify PreBid Time</a></li>
                        <li><a href="<?php echo base_url("bidder-account"); ?>"><i class="fa fa-circle-o"></i> Bidder Account</a></li>
                        <li><a href="<?php echo base_url("auction-reverse"); ?>"><i class="fa fa-circle-o"></i> Auction Reverse</a></li>
                        <li><a href="<?php echo base_url("withdraw-auction"); ?>"><i class="fa fa-circle-o"></i> Withdraw Auction</a></li>
                        <li><a href="<?php echo base_url("message-board"); ?>"><i class="fa fa-circle-o"></i> Message Board</a></li>
                        <li><a href="<?php echo base_url("product/product-list"); ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
                        <li><a href="<?php echo base_url("state-city-list"); ?>"><i class="fa fa-circle-o"></i> State City List</a></li>
                        <li><a href="<?php echo base_url("bidder/defaulter-bidder-list"); ?>"><i class="fa fa-circle-o"></i> Defaulter</a></li>
                        <li><a href="<?php echo base_url("add-news"); ?>"><i class="fa fa-circle-o"></i> News</a></li>
                        <li><a href="<?php echo base_url("add-metal-rate"); ?>"><i class="fa fa-circle-o"></i> Metal Rate</a></li>
                        <li><a href="<?php echo base_url("add-currency-rate"); ?>"><i class="fa fa-circle-o"></i> Currency Rate</a></li>
                        <li><a href="<?php echo base_url("greetings"); ?>"><i class="fa fa-circle-o"></i> Greetings</a></li>
                        <li><a href="<?php echo base_url("home-popup-banner"); ?>"><i class="fa fa-circle-o"></i> Home Popup Banner</a></li>
                        <li><a href="<?php echo base_url("add-testimonial"); ?>"><i class="fa fa-circle-o"></i> Testimonial</a></li>
                    </ul>
                </li>
                <!--li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Auctions</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("auction/auction-search"); ?>"><i class="fa fa-circle-o"></i> Auction Search</a></li>
                        <li><a href="<?php echo base_url("auction/all-upcoming-auction-list"); ?>"><i class="fa fa-circle-o"></i> All Upcoming Auction List</a></li>
                        <li><a href="<?php echo base_url("auction/all-old-auction-list"); ?>"><i class="fa fa-circle-o"></i> All Old Auction List</a></li>
                    </ul>
                </li-->
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Activation</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("company-wise-authorization"); ?>"><i class="fa fa-circle-o"></i> Company Wise Authorization</a></li>
                        <li><a href="<?php echo base_url("auction-wise-authorization"); ?>"><i class="fa fa-circle-o"></i> Auction Wise Authorization</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Report</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("report/live-auction-summary"); ?>"><i class="fa fa-circle-o"></i> Live Auction Summary</a></li>
                        <li><a href="<?php echo base_url("report/auction-wise-authorization-report"); ?>"><i class="fa fa-circle-o"></i> Auction Wise Authorization</a></li>
                        <li><a href="<?php echo base_url("report/date-wise-seller-report"); ?>"><i class="fa fa-circle-o"></i> Date Wise Seller Report</a></li>
                        <li><a href="<?php echo base_url("report/prebid-report"); ?>"><i class="fa fa-circle-o"></i> Pre Bid Report</a></li>
                        <li><a href="<?php echo base_url("report/customized-auction-report"); ?>"><i class="fa fa-circle-o"></i> Customized Auction Report</a></li>
                        <li><a href="<?php echo base_url("report/bid-detail-report"); ?>"><i class="fa fa-circle-o"></i> Bid Detail Report</a></li>
                        <li><a href="<?php echo base_url("report/bidders-login-report"); ?>"><i class="fa fa-circle-o"></i> Bidders Login Report</a></li>
                        <li><a href="<?php echo base_url("report/bidders-TC-report"); ?>"><i class="fa fa-circle-o"></i> Bidders Accept T & C Report</a></li>
                        <li><a href="<?php echo base_url("bid-history"); ?>"><i class="fa fa-circle-o"></i> Reverce History</a></li>
                        <li><a href="<?php echo base_url("report/complaint-and-feedback-report"); ?>"><i class="fa fa-circle-o"></i> Complaint & Feedback Report</a></li>
                        <li><a href="<?php echo base_url("report/mif-report"); ?>"><i class="fa fa-circle-o"></i> MIF Report</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url("market-analysis-report"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>Market Analysis Report</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Alerts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("alert/sms-group"); ?>"><i class="fa fa-circle-o"></i> SMS Group</a></li>
                        <li><a href="<?php echo base_url("alert/send-sms"); ?>"><i class="fa fa-circle-o"></i> Send SMS</a></li>
                        <li><a href="<?php echo base_url("alert/email-group"); ?>"><i class="fa fa-circle-o"></i> Email Group</a></li>
                        <li><a href="<?php echo base_url("alert/send-email"); ?>"><i class="fa fa-circle-o"></i> Send Email</a></li>
                    </ul>
                </li>
                <!--li class="treeview">
                    <a href="<?php echo base_url("add-news"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>News</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url("add-testimonial"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>Testimonial</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url("add-metal-rate"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>Metal Rates</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url("add-currency-rate"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>Currency Rates</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url("home-popup-banner"); ?>">
                    <i class="fa fa-pie-chart"></i> <span>Home Popup Banner</span>
                    </a>
                </li-->
                <li class="treeview">
                    <a href="<?php echo base_url("superadmin/logout"); ?>">
                    <i class="fa fa-dashboard"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>