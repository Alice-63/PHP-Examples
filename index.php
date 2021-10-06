<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="result"></p>
    are you online?
    <button onclick="add()">Check</button>
</body>
</html>

<script>
   async function add(){
     let response= await fetch("http://localhost/PHP/server.php")
     let data = await response.json()

     if(data=="Hallo")
     {
         document.getElementById("result").innerHTML=response.$num1
     }
     else{
        document.getElementById("result").innerHTML=response.$num1
     }

    }
</script>