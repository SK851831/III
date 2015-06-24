<?php include_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html>
    <?php include_once('includes/head.php'); ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Team III
            </a>
            <?php include_once 'includes/navbar.php';?>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $system->uname;?></p>

                            <i class="fa fa-circle text-success"></i> Online
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../index.php">
                                <i class="fa fa-dashboard"></i> <h4>Home</h4>
                            </a>
                        </li>
                        <li>
                            <a href="../inbox.php">
                                <i class="fa fa-inbox"></i> <h4>Mailbox</h4>
                                
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-desktop"></i> <h4>OAdmin</h4>
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin Page
                        <small>Cp(Control paneL)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Home</li>
                        <li class="active"><i class="fa fa-desktop"></i> OAdmin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                     <div class="callout callout-warning">
                                        <h4>Notify is Under Research!</h4>
                                        <p>Hit <kbd>F5</kbd> to recieve new notifics.!!!</p>
                                    </div>
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-users"></i>
                                    <h2 class="box-title">User Settings</h2>
                                </div>
                                <div class="box-body">
                                    <h3 class="box-title">Add Admin</h3>
                                    <hr>
                                    <?php
                                        if (isset($_POST['addadmin'])) {
                                            $email=$_POST['user'];
                                            if (empty($email)) {
                                                echo '<div class="callout callout-danger"><h3 class="font-semibold">You forgot to enter the email address.</h3></div><br />';
                                            }
                                            if (!empty($email)) {
                                                $sql = dbConnect();
                                                $query="SELECT * FROM users where email='$email' and auth='11'";
                                                $result=mysqli_query($sql,$query)
                                                or die("error query: ".mysqli_error());
                                                if(!($row=mysqli_fetch_array($result))){
                                                $query="INSERT INTO users(email,auth) values('$email',11)";
                                                $result=mysqli_query($sql,$query);
                                                //include_once('mail.php');
                                                mysqli_close($sql);
                                                echo '<div class="callout callout-info"><h1 class="font-semibold">Admin is added.</h1></div>';
                                                }
                                                    else{
                                                        echo '<div class="callout callout-warning"><h3 class="font-semibold">This email is already registered as admin.!!!</h3></div><br />';
                                                    }
                                            }
                                        }
?>
                                    <form action="" id="add">
                                        <div class="form-group">
                                            <h4><i class="fa fa-user"></i> Email Address of the secondary Admin:</h4>
                                            <input type="email" class="form-control" name="user" style="border-radius: 20px !important;" required/>
                                        </div>
                                        <div class="box-footer clearfix">
                                            <button class="pull-left btn btn-success" name="addadmin" style="border-radius: 20px !important;">Add <i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </form>
                                    <br>
                                    <h3 class="box-title">Remove Admin</h3>
                                    <hr>
                                    <?php
                                        if (isset($_POST['remadmin'])) {
                                            $email=$_POST['user'];
                                            if (empty($email)) {
                                                echo '<div class="callout callout-danger"><h3 class="font-semibold">You forgot to enter the email address.</h3></div><br />';
                                            }
                                            if (!empty($email)) {
                                                $sql = dbConnect();
                                                $query="SELECT * FROM users where email='$email' and auth='11'";
                                                $result=mysqli_query($sql,$query)
                                                or die("error query: ".mysqli_error());
                                                if($row=mysqli_fetch_array($result)){
                                                $query="DELETE from users where email='$email' and auth='11'";
                                                $result=mysqli_query($sql,$query);
                                                //include_once('mail.php');
                                                mysqli_close($sql);
                                                echo '<div class="callout callout-info"><h1 class="font-semibold">Admin is removed.</h1></div>';
                                                }
                                                    else{
                                                        echo '<div class="callout callout-warning"><h3 class="font-semibold">This email is not already registered as admin.!!!</h3></div><br />';
                                                    }
                                            }
                                        }
?>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <h4><i class="fa fa-user"></i> Email Address of the secondary Admin:</h4>
                                            <input type="email" class="form-control" name="user" style="border-radius: 20px !important;" required />
                                        </div>
                                        <div class="box-footer clearfix">
                                            <button class="pull-left btn btn-danger" name="remadmin" style="border-radius: 20px !important;">Remove <i class="fa fa-close"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                            <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">Quick Email</h3>
                                    <!-- tools box -->
                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:use @ to represent other member"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                <div class="btn btn-success btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment"/>
                                </div>
                                <p class="help-block">Max. 32MB</p>
                            </div>
                                    </form>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                            <!-- Calendar -->
                            <div class="box box-solid bg-green-gradient">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">Calendar</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Add new event</a></li>
                                                <li><a href="#">Clear events</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">View calendar</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <?php include_once('includes/footer.php'); ?> 
    </body>
</html>
