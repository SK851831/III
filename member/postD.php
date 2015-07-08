                                        <?php
                                        //Chking Id
                                        if(!isset($_POST['id'])){
                                      		die("");
                                      	}
                                        //Trimming
                                            $logid=addslashes($_POST['id']?$_POST['id'] :null);
                                            //chking it is not blank
                                            if(!empty($logid)&&!empty($_POST['t'])){
                                              //for db
                                            include_once('../dbConnect.php');
                                            $sql = dbConnect();
                                            //for posted on
                                            include('time.php');
                                            //return post array
                                            $post=array();
                                            //for posts
                                            $postarray=array();
                                            #$id = $system->id;
                                            //Extracting post ids
                                            $id=$logid;
                                            $query = mysqli_query($sql,"SELECT * FROM iii_newsfeed.$id ORDER BY posted_on DESC");
                                            if($query){
                                            while($row = mysqli_fetch_assoc($query))
                                            {
                                                //Extracting posts
                                                $post_id = $row['pid'];
                                                $query2 = mysqli_query($sql,"SELECT * FROM iii_posts.posts WHERE pid= '$post_id'");
                                                $result2 = mysqli_fetch_array($query2);
                                                $user_id = $result2['uid'];
                                                $postCont = $result2['post_content'];
                                                //Extracting posted user name
                                                $name_query = mysqli_query($sql,"SELECT * FROM iii.users WHERE id='$user_id' ");
                                                $name_query = mysqli_fetch_array($name_query);
                                                $name = $name_query['username'];
                                                $i = rand(0,20);
                                                $time = $result2['posted_on'];
                                                $posted = time1($time);
                                                //Pushing to post array
                                                array_push($postarray,$i,$post_id,$user_id,$name,$postCont,$posted);
                                            }
                                            }

                                            //For Comment array
                                            $cmtarray=array();
                                            //For cmt's post ids
                                            $cmt=array();
                                            for($i=1;$i<count($postarray);){
                                              //Pushing post ids to cmt array
                                              array_push($cmt,$postarray[$i]);
                                              $i=$i+6;
                                            }
                                            for($i=0;$i<count($cmt);$i++){
                                              $Pstid=$cmt[$i];
                                              //Extracting cmts using post ids
                                              $query = mysqli_query($sql,"SELECT * FROM iii_posts.".$Pstid." ORDER BY posted ");
                                              if($query){
                                                while($row = mysqli_fetch_assoc($query)){
                                                  $cmt_id = $row['id'];
                                                  $user_id = $row['uid'];
                                                  $cmtCont=$row['comments'];
                                                  //Extracting commented user name
                                                  $name_query = mysqli_query($sql,"SELECT * FROM iii.users WHERE id='$user_id' ");
                                                  $name_query = mysqli_fetch_array($name_query);
                                                  $name = $name_query['username'];
                                                  $istyle = rand(0,2);
                                                  $time = $row['posted'];
                                                  $posted = time1($time);
                                                  //Pushing comments to their post array
                                                  array_push($cmtarray,$Pstid,$cmt_id,$istyle,$user_id,$name,$cmtCont,$posted);
                                                }
                                              }
                                            }
                                            //Combining post array and their comments array
                                            $post['postArray']=$postarray;
                                            $post['cmtArray']=$cmtarray;
                                        }else{
                                          //Passing null array
                                          $post['postArray']=array();
                                          $post['cmtArray']=array();
                                          $post=array();
                                        }
                                        echo json_encode($post);
                                            ?>
