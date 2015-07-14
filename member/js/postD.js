
function postD(id)
{
    var cmtstyles=['info','danger','warning'];
    var styles=['fa fa-apple bg-blue','fa fa-apple bg-yellow','fa fa-apple bg-red','fa fa-android bg-blue','fa fa-android bg-yellow','fa fa-android bg-red','fa fa-whatsapp bg-blue','fa fa-whatsapp bg-yellow','fa fa-whatsapp bg-red','fa fa-comments-o bg-blue','fa fa-comments bg-yellow','fa fa-comments bg-red','fa fa- fa-binoculars bg-blue','fa fa- fa-binoculars bg-yellow','fa fa- fa-binoculars bg-red','fa fa-wifi bg-blue','fa fa-wifi bg-yellow','fa fa-wifi bg-red','fa fa-gears bg-blue','fa fa-gears bg-yellow','fa fa-gears bg-red','fa fa-lightbulb-o bg-blue','fa fa-lightbulb-o bg-yellow','fa fa-lightbulb-o bg-red','fa fa-recycle bg-blue','fa fa-recycle bg-yellow','fa fa-recycle bg-red','fa fa-tags bg-blue','fa fa-tags bg-yellow','fa fa-tags bg-red'];
loadXMLDoc("id="+id+"&t=" + Math.random(),"postD.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	 foot=jQuery.parseJSON(xmlhttp.responseText);
      var ul=document.getElementById('ttl');
      if(foot['postArray'].length>0){
        for(var i=0;i<foot['postArray'].length;){
          //For Posts
          if(i==0)
          var topstar=1;
          else {
            var topstar=0;
          }
          var idI=foot.postArray[i++];
          var Pid=foot.postArray[i++];
          var Uid=foot.postArray[i++];
          var name=foot.postArray[i++];
          var PostContent=foot.postArray[i++];
          var PostedOn=foot.postArray[i++];
          //For comments
          var Cmtid=[];
          var istyle=[];
          var usrid=[];
          var cmtname=[];
          var cmtcont=[];
          var posted=[];
          for(var cmti=0;cmti<foot['cmtArray'].length;){
            if(Pid === foot['cmtArray'][cmti++]){
              Cmtid.push(foot['cmtArray'][cmti++]);
              istyle.push(foot['cmtArray'][cmti++]);
              usrid.push(foot['cmtArray'][cmti++]);
              cmtname.push(foot['cmtArray'][cmti++]);
              cmtcont.push(foot['cmtArray'][cmti++]);
              posted.push(foot['cmtArray'][cmti++]);


            }else{
              cmti+=6;
            }
          }
          var totalCmts=Cmtid.length;
          //li
          //Applying nodes
          var li=document.createElement("li");
          li.setAttribute("id","pt"+Pid);
          if(topstar)
          li.className="topstar";
          //i
          var I=document.createElement("i");
          I.className=styles[idI];
          li.appendChild(I);
          //div-timeline item
          var divtl=document.createElement("div");
          divtl.className="timeline-item";
          //span-time
          var spanDiv=document.createElement("span");
          spanDiv.className="time";
          spanDiv.style.font="12px";
          spanDiv.innerHTML=PostedOn;

          divtl.appendChild(spanDiv);
          //h1-timeline header
          var h1=document.createElement("h1");
          h1.className="timeline-header";
          var a=document.createElement("a");
          a.innerHTML=name;
          h1.appendChild(a);
          divtl.appendChild(h1);
          //div-timeline body
          var divtb=document.createElement("div");
          divtb.className="timeline-body";
          //p
          var p=document.createElement("p");
          p.style.wordWrap="break-word";
          p.innerHTML=PostContent;
          divtb.appendChild(p);
          divtl.appendChild(divtb);
          //div-timeline footer
          var divtf=document.createElement("div");
          divtf.className="timeline-footer";
          //button-comments
          var button=document.createElement("button");
          button.className="btn bg-blue btn-xs";
          button.innerHTML="Comments";
          button.setAttribute("id","cmtbtn"+Pid);
          divtf.appendChild(button);
          //br
          var br=document.createElement("br");
          divtf.appendChild(br);
          divtl.appendChild(divtf);

          //div-timeline-footer
          var divtf=document.createElement("div");
          divtf.className="timeline-footer";
          divtf.setAttribute("id","cmt"+Pid+"C");
          var cmtcount=-1;
          if(totalCmts>0)
          for(var cmtcount=0;cmtcount<totalCmts;cmtcount++){
            //div-Commentbox
            var divCc=document.createElement("div");
            var IIstyle=istyle[cmtcount];
            divCc.className="callout callout-"+cmtstyles[IIstyle]+" ccmt";
            divCc.setAttribute("id","C"+cmtcount);
            divCc.style.margin="0px 0 20px 45px";
            //span-time
            var span=document.createElement("span");
            span.className="time pull-right";
            span.style.font="12px";
            //i
            var I=document.createElement("i");
            I.className="fa fa-clock-o";
            span.appendChild(I);
            span.innerHTML=posted[cmtcount];
            divCc.appendChild(span);
            //h3-commenter name
            var h3=document.createElement("h3");
            h3.style.font="12px";
            h3.style.margin="10px";
            h3.style.borderBottom="2px solid #ffffff";
            var a=document.createElement("a");
            a.innerHTML=cmtname[cmtcount];
            h3.appendChild(a);
            divCc.appendChild(h3);
            //p-comments
            var h4=document.createElement("h4");
            h4.style.wordWrap="break-word";
            h4.innerHTML=cmtcont[cmtcount];
            h4.style.color="#555";
            divCc.appendChild(h4);
            divtf.appendChild(divCc);
          }
          //comment-form
          var textarea=document.createElement("textarea");
          textarea.setAttribute("name","content");
          textarea.className="textarea";
          textarea.setAttribute("id","CmtForm"+Pid);
          var alter="CmtForm"+Pid;
          textarea.style.font="14px";
          textarea.style.width="100%";
          textarea.style.borderRadius = "20px !important";
          textarea.style.height="75px";
          textarea.style.lineHeight="18px";
          textarea.style.border="1px solid #dddddd";
          textarea.style.padding="10px";
          divtf.appendChild(textarea);
          var divtfC=document.createElement("div");
          divtfC.className="timeline-footer";
          var buttonC=document.createElement("button");
          buttonC.setAttribute("type","submit");
          buttonC.setAttribute("id","cmtPost"+Pid);
          buttonC.className="btn bg-green btn-xs";
          buttonC.innerHTML="Comment";
          divtfC.appendChild(buttonC);
          divtf.appendChild(divtfC);
          //appending
          divtl.appendChild(divtf);
          li.appendChild(divtl);
          ul.appendChild(li);
          $("#cmtPost"+Pid).click(function(){
            var cmtbtn1=$(this);
            var div1=cmtbtn1.parent();
            var textarea=div1.siblings("textarea");
            var id=textarea.attr("id");
            id=id.match(/\d+$/)[0];
            var conectcont=textarea.val();
            var C=textarea.prev();
            Cid=C.attr("id");
            if(Cid===undefined){
              var CCC=-1;
            }
            else{
              Cid=Cid.match(/\d+$/)[0];
              var CCC=Cid;
            }
            cmtpostbutton(id,conectcont,CCC);
          });

          //Hiding all commentsbox
          $("#cmt"+Pid+"C").hide();
          //Toggle commentbox
          $("#cmtbtn"+Pid).click(function(){
              var cmtbtn=$(this);
              var div=cmtbtn.parent();
              var cmt=div.next();
              cmt.toggle('slow');
          });

        }

      }else{
            $("#Nopost").show('slow');
      }
    }
  });


}
