<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../index.php");
    exit;
}
    $user = $_SESSION["user"];
    $uname = $_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Data R&D | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->

    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-bank"></i> <span>Data R&D</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $user; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include "sidemenu.php"; ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $user; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          
          <div class="row">


    
            <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">

            <script src="https://balkangraph.com/js/latest/OrgChart.js"></script>

            <div id="tree"></div>
                      </div>
                <script>
                
             OrgChart.templates.polina.field_0 = '<text class="field_0"  style="font-size: 20px;" fill="#ffffff" x="150" y="30" text-anchor="middle">{val}</text>';
                    OrgChart.templates.polina.field_1 = '<text class="field_1"  style="font-size: 14px;" fill="#ffffff" x="150" y="50" text-anchor="middle">{val}</text>';
                    OrgChart.templates.polina.field_2 = '<text class="field_2"  style="font-size: 14px;" fill="#ffffff" x="150" y="70" text-anchor="middle">{val}</text>';
                     OrgChart.templates.polina.img_0 = '<clipPath id="{randId}"><circle  cx="40" cy="40" r="35"></circle></clipPath><image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="0" y="0"  width="80" height="80"></image>';

            window.onload = function () { 
                var chart = new OrgChart(document.getElementById("tree"), {
                    template: "polina",
                    enableDragDrop: true,
                    nodeMouseClick: BALKANGraph.action.edit,
                    scaleInitial: BALKANGraph.match.boundary,
                    nodeMenu: {
                        details: { text: "Details" },
                        edit: { text: "Edit" },
                       // add: { text: "Add" },
                       //        remove: { text: "Remove" }
                    },
                     menu: {
                        pdf: { text: "Export PDF" },
                      //  png: { text: "Export PNG" },
                      //  svg: { text: "Export SVG" },
                        csv: { text: "Export CSV" }
                    },
                    dragDropMenu: {
                        addInGroup: { text: "Add in group" },
                        addAsChild: { text: "Add as child" }
                    },
                    nodeBinding: {
                        field_0: "name",
                        field_1: "title",
                        field_2: "department",
                        img_0: "img"
                    },
                    tags: {
                        Directors: {
                            group: true,
                            groupName: "Directors",
                            groupState: BALKANGraph.EXPAND,
                            template: "group_grey"
                        },
                        HRs: {
                            group: true,
                            groupName: "HR Team",
                            groupState: BALKANGraph.COLLAPSE,

                            template: "group_grey"
                        },
                        Sales: {
                            group: true,
                            groupName: "Sales Team",
                            groupState: BALKANGraph.EXPAND,
                            template: "group_grey"
                        },
                        Devs: {
                            group: true,
                            groupName: "Dev Team",
                            groupState: BALKANGraph.EXPAND,
                            template: "group_grey"
                        }
                    },
                    nodes: [
                        { id: 1, tags: ["Directors"], name: "Billy Moore", title: "CEO", department: "Management", img: "images/2.jpg" },
                        { id: 2, tags: ["Directors"], name: "Marley Wilson", title: "Director", department: "Management", img: "images/3.jpg" },
                        { id: 3, tags: ["Directors"], name: "Bennie Shelton", title: "Shareholder", department: "Management", img: "images/4.jpg" },

                        { id: 4, pid: 1, name: "Billie Rose", title: "Dev Team Lead", department: "IT Dept", img: "images/5.jpg" },

                        { id: 5, pid: 1, tags: ["HRs"], name: "Glenn Bell", title: "HR", department: "HR Dept", img: "images/10.jpg" },
                        { id: 6, pid: 1, tags: ["HRs"], name: "Blair Francis", title: "HR", department: "HR Dept", img: "images/11.jpg" },

                        { id: 7, pid: 1, name: "Skye Terrell", title: "Manager", department: "Operations Dept", img: "images/7.jpg" },

                        { id: 8, pid: 4, tags: ["Devs"], name: "Jordan Harris", title: "JS Developer", department: "IT Dept", img: "images/6.jpg" },
                        { id: 9, pid: 4, tags: ["Devs"], name: "Will Woods", title: "JS Developer", department: "IT Dept", img: "images/7.jpg" },
                        { id: 10, pid: 4, tags: ["Devs"], name: "Skylar Parrish", title: "node.js Developer", department: "IT Dept", img: "images/8.jpg" },
                        { id: 11, pid: 4, tags: ["Devs"], name: "Ashton Koch", title: "C# Developer", department: "IT Dept", img: "images/9.jpg" },

                        { id: 12, pid: 7, tags: ["Sales"], name: "Bret Fraser", title: "Sales", department: "Sales Dept", img: "images/13.jpg" },
                        { id: 13, pid: 7, tags: ["Sales"], name: "Steff Haley", title: "Sales", department: "Sales Dept", img: "images/14.jpg" }
                    ]
                });    
            };

    </script>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Data Research by <a href="https://colorlib.com">Data Analyst</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
