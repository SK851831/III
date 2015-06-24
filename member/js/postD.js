function postD(id)
{
	document.getElementById("logButton").style.visibility='hidden';
    var cmtstyles=['info','danger','warning'];
	var styles=['fa fa-apple bg-blue','fa fa-apple bg-yellow','fa fa-apple bg-red','fa fa-android bg-blue','fa fa-android bg-yellow','fa fa-android bg-red','fa fa-whatsapp bg-blue','fa fa-whatsapp bg-yellow','fa fa-whatsapp bg-red','fa fa-comments-o bg-blue','fa fa-comments bg-yellow','fa fa-comments bg-red','fa fa- fa-binoculars bg-blue','fa fa- fa-binoculars bg-yellow','fa fa- fa-binoculars bg-red','fa fa-wifi bg-blue','fa fa-wifi bg-yellow','fa fa-wifi bg-red','fa fa-gears bg-blue','fa fa-gears bg-yellow','fa fa-gears bg-red','fa fa-lightbulb-o bg-blue','fa fa-lightbulb-o bg-yellow','fa fa-lightbulb-o bg-red','fa fa-recycle bg-blue','fa fa-recycle bg-yellow','fa fa-recycle bg-red','fa fa-tags bg-blue','fa fa-tags bg-yellow','fa fa-tags bg-red'];
loadXMLDoc("postD.php?id="+id+"&t=" + Math.random(),function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {	
    	var foot=JSON.parse(xmlhttp.responseText);
    	var ul=document.getElementById('ttl');
    	for(var i=0;i<foot.length;){
            //Extracting data from foot array
            
    		var idI=foot[i++];
    		var Pid=foot[i++];
    		var Uid=foot[i++];
    		var name=foot[i++];
    		var PostContent=foot[i++];
    		var PostedOn=foot[i++];
            
            //For Comment STyle
            var CmtId=Math.floor(Math.random() * 3);
            //Applying nodes

            //li		
            var li=document.createElement("li");
            //i
            var I=document.createElement("i");
    		I.className=styles[idI]; 
    		li.appendChild(I);
            var divtl=document.createElement("div");
    		divtl.className="timeline-item";
    		var spanDiv=document.createElement("span");
    		spanDiv.className="time";
    		spanDiv.style.font="12px";
    		spanDiv.innerHTML=PostedOn;
    		divtl.appendChild(spanDiv);
    		var h1=document.createElement("h1");
    		h1.className="timeline-header";
    		var a=document.createElement("a");
    		a.innerHTML=name;
    		h1.appendChild(a);
    		divtl.appendChild(h1);
    		var divtb=document.createElement("div");
            divtb.className="timeline-body";
            var p=document.createElement("p");
            p.style.wordWrap="break-word";
            p.innerHTML=PostContent;
            divtb.appendChild(p);
            divtl.appendChild(divtb);
            var divtf=document.createElement("div");
            divtf.className="timeline-footer";
            var button=document.createElement("button");
            button.className="btn bg-blue btn-xs";
            button.innerHTML="Comments";
            button.setAttribute("id","cmtbtn"+i);
            divtf.appendChild(button);
            var br=document.createElement("br");
            divtf.appendChild(br);
            divtl.appendChild(divtf);
            var divtf=document.createElement("div");
            divtf.className="timeline-footer";
            divtf.setAttribute("id","cmt"+i);
            var divCc=document.createElement("div");
            divCc.className="callout callout-"+cmtstyles[CmtId];
            divCc.style.margin="0px 0 20px 45px";
            var span=document.createElement("span");
            span.className="time pull-right";
            span.style.font="12px";
            var I=document.createElement("i");
            I.className="fa fa-clock-o";
            span.appendChild(I);
            span.innerHTML=PostedOn;
            divCc.appendChild(span);
            var h3=document.createElement("h3");
            h3.style.font="12px";
            h3.style.margin="10px";
            h3.style.borderBottom="2px solid #ffffff";
            var a=document.createElement("a");
            a.innerHTML=name;
            h3.appendChild(a);
            divCc.appendChild(h3);
            var p=document.createElement("p");
            p.style.wordWrap="break-word";
            p.innerHTML=PostContent;
            divCc.appendChild(p);
            divtf.appendChild(divCc);
            divtl.appendChild(divtf);
            li.appendChild(divtl);
            ul.appendChild(li);
            $("#cmt"+i).hide();
            var count=i;
            button.addEventListener("click",function(event){
                
            }); 
    	}
    }
  });
        
        
}