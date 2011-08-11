<!DOCTYPE html>
<head>
    <script src="http://code.jquery.com/jquery-1.4.2.min.js" type="text/javascript" ></script>
    <style type="text/css" media="screen">
        .hidden{display:none;}
        body{background-color: #000;text-align:center;margin:0}
        #container{margin:auto;padding-top:200px}
        img{border: 10px solid #FFF;}
    </style>
    <script>
    $(document).ready(function() {
        $('#container').fadeIn()
     });
     </script>
</head>    

<body>
     <div id="container" class="hidden">
         <a href="<?php echo $_SERVER['HTTP_REFERER']?>"><img  src="images/<?php echo $_REQUEST['thumbnail'] ?>.jpg" /></a>
     </div>
</body>    
</html>