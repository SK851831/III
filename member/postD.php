                                        <?php 
                                            $logid=addslashes($_GET['id']?$_GET['id'] :null);
                                            if(!empty($logid)&&!empty($_GET['t'])){
                                            include_once('../dbConnect.php');
                                            $sql = dbConnect();
                                            include('time.php');
                                            $post=array();
                                            $cmtstyles = array('info','danger','warning');
                                            $k=0;
                                            #$id = $system->id; 
                                            $id=$logid;
                                            $query = mysqli_query($sql,"SELECT * FROM iii_newsfeed.$id ORDER BY posted_on DESC");
                                            if($query){
                                            while($row = mysqli_fetch_assoc($query))
                                            {
                                                $post_id = $row['pid'];
                                                $query2 = mysqli_query($sql,"SELECT * FROM iii_posts.posts WHERE pid= '$post_id'");
                                                $result2 = mysqli_fetch_array($query2);
                                                $user_id = $result2['uid'];
                                                $postCont = $result2['post_content'];
                                                $name_query = mysqli_query($sql,"SELECT * FROM iii.users WHERE id='$user_id' ");
                                                $name_query = mysqli_fetch_array($name_query);
                                                $name = $name_query['username'];
                                                $i = rand(0,20);
                                                $time = $result2['posted_on'];
                                                $posted = time1($time);
                                                array_push($post,$i,$post_id,$user_id,$name,$postCont,$posted);
                                            }
                                            echo json_encode($post);
                                        }}
                                            ?>