
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
          <script type="text/javascript">
        window.onload = function() {
            $.ajax({ 
                type: "GET",  
                url: 'http://127.0.0.1/testmvc/model/select.php', 
                dataType: 'json',
                  success: function(data) {
                     for (var i=0;i<data.length;++i){
                        $('#cand').append("name:"+data[i].name+"/name:"+data[i].message+"<br>");
                    }          
                 },
                  error: function() {
                     alert("ERROR");
                        }
            });
         }
        </script>
    </head>
<body>
    <div id="cand"></div>
</body>
</html>
