function PostButton(){
  var styles=['fa fa-apple bg-blue','fa fa-apple bg-yellow','fa fa-apple bg-red','fa fa-android bg-blue','fa fa-android bg-yellow','fa fa-android bg-red','fa fa-whatsapp bg-blue','fa fa-whatsapp bg-yellow','fa fa-whatsapp bg-red','fa fa-comments-o bg-blue','fa fa-comments bg-yellow','fa fa-comments bg-red','fa fa- fa-binoculars bg-blue','fa fa- fa-binoculars bg-yellow','fa fa- fa-binoculars bg-red','fa fa-wifi bg-blue','fa fa-wifi bg-yellow','fa fa-wifi bg-red','fa fa-gears bg-blue','fa fa-gears bg-yellow','fa fa-gears bg-red','fa fa-lightbulb-o bg-blue','fa fa-lightbulb-o bg-yellow','fa fa-lightbulb-o bg-red','fa fa-recycle bg-blue','fa fa-recycle bg-yellow','fa fa-recycle bg-red','fa fa-tags bg-blue','fa fa-tags bg-yellow','fa fa-tags bg-red'];
     var cmtstyles=['info','danger','warning'];
  document.getElementById("PostPush").innerHTML="Posting...";
  var Postcontent=document.getElementById("contentPost").value;

  Postcontent=encodeURI(Postcontent);

  loadXMLDoc("Postcontent="+Postcontent+"&t=" + Math.random(),"testing.php",function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      var finale=xmlhttp.responseText;
      if(finale === "success"){
        $("#postSuccess").show('slow');
        document.getElementById("contentPost").value="";
        document.getElementById("PostPush").innerHTML="Post";

      }else {
        $("#postFailure").show('slow');
        document.getElementById("contentPost").value="";
        document.getElementById("PostPush").innerHTML="Post";
      }
    }
  });
}



function PostDel(Post_id){
  loadXMLDoc("Post_id="+Post_id+"&t=" + Math.random(),"delPost.php",function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      var finale=xmlhttp.responseText;
      if(finale === "success"){
        $("#pt"+Post_id).hide();

        $("#postDeleteSuccess").show('slow');

      }else {
        $("#postDeleteFailure").show('slow');
      }
    }
  });
}
