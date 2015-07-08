<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("<span>Hello world!</span>").insertBefore("p");
  });
});
</script>
</head>
<body>

<button>Insert span element before each p element</button>
<br><br>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

</body>

<!-- Mirrored from www.w3schools.com/jquery/tryit.asp?filename=tryjquery_html_insertbefore by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jan 2015 08:15:35 GMT -->
</html>
