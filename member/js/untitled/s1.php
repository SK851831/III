<!-- timeline item -->
                                       <?php $cmtstyles = array('info','danger','warning'); ?>
                                        <?php
                                            $k=0;$cmtid=0;
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
                                                </div>
                                            </li>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->

                                        <?php
                                             }
                                        ?>