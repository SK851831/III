function cmtpostbutton(pcid,Cmtcontent,CCC){
  var cmtstyles=['info','danger','warning'];
  document.getElementById("cmtPost"+pcid).innerHTML="Commenting...";
  Core=Cmtcontent;
  Cmtcontent=encodeURI(Cmtcontent);
  var CmtCount=CCC;
  loadXMLDoc("Cmtcontent="+Cmtcontent+"&t=" + Math.random()+"&pcid="+pcid,"testing1.php",function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      var cmtfinale=xmlhttp.responseText;
      if(cmtfinale === "success"){
        document.getElementById("CmtForm"+pcid).value="";
        document.getElementById("cmtPost"+pcid).innerHTML="Comment";
        if(CmtCount===-1){
          var Cctb=document.getElementById("cmt"+pcid+"C");

          //div-Commentbox
          var divCc=document.createElement("div");
          var rand=Math.floor((Math.random() * 3));
          divCc.className="callout callout-"+cmtstyles[rand]+" ccmt";
          CmtCount+=1;
          divCc.setAttribute("id","C"+CmtCount);
          divCc.style.margin="0px 0 20px 45px";
          //span-time
          var span=document.createElement("span");
          span.className="time pull-right";
          span.style.font="12px";
          //i
          var I=document.createElement("i");
          I.className="fa fa-clock-o";
          span.appendChild(I);
          span.innerHTML="Now";
          divCc.appendChild(span);
          //h3-commenter name
          var h3=document.createElement("h3");
          h3.style.font="12px";
          h3.style.margin="10px";
          h3.style.borderBottom="2px solid #ffffff";
          var a=document.createElement("a");
          a.innerHTML=UniversalName;
          h3.appendChild(a);
          divCc.appendChild(h3);
          //p-comments
          var h4=document.createElement("h4");
          h4.style.wordWrap="break-word";
          h4.innerHTML=Core;
          h4.style.color="#555";
          divCc.appendChild(h4);
          var child=document.getElementById("CmtForm"+pcid);
          Cctb.insertBefore(divCc,child);
        }
        else{

              var Cctb=document.getElementById("cmt"+pcid+"C");

              //div-Commentbox
              var divCc=document.createElement("div");
              var rand=Math.floor((Math.random() * 3));
              divCc.className="callout callout-"+cmtstyles[rand]+" ccmt";
              CmtCount+=1;
              divCc.style.margin="0px 0 20px 45px";
              divCc.setAttribute("id","C"+CmtCount);
              //span-time
              var span=document.createElement("span");
              span.className="time pull-right";
              span.style.font="12px";
              //i
              var I=document.createElement("i");
              I.className="fa fa-clock-o";
              span.appendChild(I);
              span.innerHTML="Now";
              divCc.appendChild(span);
              //h3-commenter name
              var h3=document.createElement("h3");
              h3.style.font="12px";
              h3.style.margin="10px";
              h3.style.borderBottom="2px solid #ffffff";
              var a=document.createElement("a");
              a.innerHTML=UniversalName;
              h3.appendChild(a);
              divCc.appendChild(h3);
              //p-comments
              var h4=document.createElement("h4");
              h4.style.wordWrap="break-word";
              h4.innerHTML=Core;
              h4.style.color="#555";
              divCc.appendChild(h4);
              var child=document.getElementById("CmtForm"+pcid);
              Cctb.insertBefore(divCc,child);
        }
      }else {
        document.getElementById("CmtForm"+pcid).value="";
        document.getElementById("cmtPost"+pcid).innerHTML="Comment";
      }
    }
  });
}
