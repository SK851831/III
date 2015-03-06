<?php include_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html>
    <?php include_once('includes/head.php'); ?>
    <body class="skin-blue">
                <?php include_once('includes/header.php'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $system->uname;?></p>

                            <i class="fa fa-circle text-success"></i> Online
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <h4>Home</h4>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.php">
                                <i class="fa fa-inbox"></i> <h4>Mailbox</h4>
                                
                            </a>
                        </li>
                        <?php if($system->authen==11){?>
                        <li>
                            <a href="oadmin/index.php">
                                <i class="fa fa-desktop"></i> <h4>OAdmin</h4>
                                
                            </a>
                        </li>
                        <?php }elseif($system->authen>10){?>
                        <li>
                            <a href="admin/index.php">
                                <i class="fa fa-laptop"></i> <h4>Admin</h4>
                                
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Member List Page
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Home</li>
                        <li class="active"><i class="fa fa-group"></i> Members</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        10
                                    </h3>
                                    <p>
                                        New Tasks
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <a href="task.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53
                                    </h3>
                                    <p>
                                        Blog Posts
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <a href="../blog/" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        Team Members
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-group"></i>
                                </div>
                                <a href="members.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <a href="visitors.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                     <div class="callout callout-warning">
                                        <h4>Notify is Under Research!</h4>
                                        <p>Hit <kbd>F5</kbd> to recieve new notifics.!!!</p>
                                    </div>
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Members List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Proficinality</th>
                                            <th style="width: 100px">Joined on</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td>04-10-1995</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td>04-10-1995</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td>04-10-1995</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td>04-10-1995</td>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
<?php include_once('includes/footer.php'); ?>  
    </body>
</html>
