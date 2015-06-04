<?php include_once 'includes/session.php'; ?>

<!DOCTYPE html>
<html>
    <?php include_once('includes/head.php'); 
            include('time.php');
            $sql = dbConnect();
    ?>
    <body class="skin-blue" style="font-family: 'Titillium Web', sans-serif;">
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
                        Member Page
                        <small>Cp(Control paneL)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
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
                            <div class="box box-success" id="mydiv">
                                <div class="box-header">
                                    <i class="fa fa-newspaper-o"></i>
                                    <h3 class="box-title">TimeLine</h3>
                                    <ul class="timeline">
                                        <!-- timeline item -->
                                        <li>
                                            <i class="fa fa-futbol-o fa-spin bg-blue"></i>
                                            <div class="timeline-item">
                                                <h1 class="timeline-header"><a href="#">Status Feed</a></h1>
                                                <div class="timeline-body">
                                                    <form id="form" method="post">
                                                        <textarea name="content" id="content" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 19px; border-radius: 18px !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                        <div class='timeline-footer'>
                                                            <button type="submit" id="post" class="btn bg-green btn-xs">Post <i class="fa fa-mail-forward"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="time-label">
                                            <span class="bg-red">
                                            <?php 
                                                $time = date("Y-m-d ", time());
                                                echo $time;

                                               ?>
                                            </span>
                                        </li>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                       <?php $cmtstyles = array('info','danger','warning'); ?>
                                        <?php
                                            $styles = array('fa fa-apple bg-blue','fa fa-apple bg-yellow','fa fa-apple bg-red','fa fa-android bg-blue','fa fa-android bg-yellow','fa fa-android bg-red','fa fa-whatsapp bg-blue','fa fa-whatsapp bg-yellow','fa fa-whatsapp bg-red','fa fa-comments-o bg-blue','fa fa-comments bg-yellow','fa fa-comments bg-red','fa fa- fa-binoculars bg-blue','fa fa- fa-binoculars bg-yellow','fa fa- fa-binoculars bg-red','fa fa-wifi bg-blue','fa fa-wifi bg-yellow','fa fa-wifi bg-red','fa fa-gears bg-blue','fa fa-gears bg-yellow','fa fa-gears bg-red','fa fa-lightbulb-o bg-blue','fa fa-lightbulb-o bg-yellow','fa fa-lightbulb-o bg-red','fa fa-recycle bg-blue','fa fa-recycle bg-yellow','fa fa-recycle bg-red','fa fa-tags bg-blue','fa fa-tags bg-yellow','fa fa-tags bg-red');
                                            $id = $system->id; 
                                            $query = mysqli_query($sql,"SELECT * FROM iii_newsfeed.$id ORDER BY posted_on DESC");
                                            if($query)
                                            while($row = mysqli_fetch_assoc($query))
                                            {
                                                $post_id = $row['pid'];
                                                $query2 = mysqli_query($sql,"SELECT * FROM iii_posts.posts WHERE pid= '$post_id'");
                                                $result2 = mysqli_fetch_array($query2);
                                                $user_id = $result2['uid'];
                                                $name_query = mysqli_query($sql,"SELECT * FROM iii.users WHERE id='$user_id' ");
                                                $name_query = mysqli_fetch_array($name_query);
                                                $name = $name_query['username'];
                                                $i = rand(0,20);
                                                $k=0;
                                                $time = $result2['posted_on'];
                                                $posted = time1($time);
                                            ?>

                                                 <li id="pt">
                                            <!-- timeline icon -->
                                                <i class="<?php echo $styles[$i] ?>"></i>
                                                <div class="timeline-item">
                                                    <span class="time" style="font-size:12px;"><i class="fa fa-clock-o" ></i> <?php echo $posted; ?></span>
                                                    <h1 class="timeline-header"  style="font-size:25px;"><a href="#"><?php echo $name ?></a></h1>
                                                    <div class="timeline-body">
                                                        <p style="word-wrap:break-word"><?php echo $result2['post_content'] ?></p>
                                                    </div>
                                                    <!-- The comments -->
                                                                                                        <div class='timeline-footer' id="cmtbtn<?php echo $k; $k++;?>">
                                                        <button class="btn bg-blue btn-xs" >Comments</button><br><br>
                                                    </div>
                                                    <?php 
                                                    $cmtid=0;
                                                    $cmtquery = mysqli_query($sql,"SELECT * FROM iii_posts.$post_id ORDER BY posted DESC");
                                            if($cmtquery){
                                                while($cmtrow = mysqli_fetch_assoc($cmtquery))
                                                {
                                                    $cmt_id = $cmtrow['uid'];
                                                    $cmtcont = $cmtrow['comments'];
                                                    $cmttime= $cmtrow['posted_on'];
                                                    $cmtquery2 = mysqli_query($sql,"SELECT * FROM iii.users WHERE id= '$cmt_id'");
                                                    $cmtresult2 = mysqli_fetch_array($cmtquery2);
                                                    $cmt_name = $cmtresult2['username'];
                                                    $l = rand(0,2);
                                                    $cmtposted = time1($time);
                                                ?>
                                                    <div class='timeline-footer' id="cmt<?php echo $cmtid; $cmtid++; ?>">    
                                                        <div class="callout callout-<?php  echo $cmtstyles[$l];?>" style="margin: 0px 0 20px 45px;">
                                                            <span class="time pull-right" style="font-size:12px;"><i class="fa fa-clock-o" ></i> <?php echo $cmtposted; ?></span>
                                                            <h1 style="font-size:25px;   margin-top: -5px;"><a href="#"><?php echo $name ?></a></h1>
                                                            <p style="word-wrap:break-word"><?php echo $cmtcont; ?></p>
                                                        </div>
                                                        <?php } }?>
                                                        <form id="cmtForm" method="post">
                                                        <textarea name="content" class="textarea" placeholder="Message" style="width: 100%; border-radius: 20px !important; height: 75px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                        <div class='timeline-footer'>
                                                            <button type="submit" id="cmtPost" class="btn bg-green btn-xs">Comment <i class="fa fa-mail-reply"></i></button>
                                                        </div>
                                                    </form> 
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->

                                        <?php
                                             }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                             <!-- TO DO List -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-clipboard"></i>
                                    <h3 class="box-title"><a href="../blog/">Blog posts</a></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">

                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix no-border">
                                    
                                </div>
                            </div><!-- /.box -->
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php include_once('includes/footer.php'); ?>
    <script type="text/javascript"><?php for($k;$k>=0;$k--) {?>$(<?php echo "\"#cmt$k\""; ?>).hide();$(<?php echo "\"#cmtbtn$k\""; ?>).click(function(){$(<?php echo "\"#cmt$k\""; ?>).toggle('slow');});<?php } ?>
    </script>
     </body>
</html>
