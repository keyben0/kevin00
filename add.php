<html> 
    <body>
        <label>

            Enter a Number

        </label>
        <input type = "text" id="n1">
        <label> Enter a second number</label>
        <input type = "text" id="n2">
        <input type= "button" value= "ADD" onclick="add(  )"> <br> 
        <div id = "res"> </div>
        <script> 
            function add(){
                var n1 = parseInt(document.getElementById("n1").value);
                var n2 = parseInt(document.getElementById("n2").value);
                
                var sum = n1+n2;
                document.getElementById("res").innerHTML=sum;
                
            }
        </script>
    </body>

</html>