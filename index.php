<?php
include 'config.php';

if (isset($_POST['submit'])){
    $n = $_POST['name'];
    $m = $_POST['message'];

    $result = mysqli_query($con,"INSERT INTO chat (name,message) VALUES ('$n','$m')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head onload = "aj()">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Strangers Talk</title>
    <script>
        function aj(){
            var req = new XMLHttpRequest()
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText
                }
            }
        req.open('GET','chat.php',true)
        req.send()
        }
        setInterval(() => {
            aj()
        }, 5000);
</script>
</head>
<body onload = "aj()">  
        
            <div id="container">
                <div class="mes_content">
                    <div id="chat"></div>
                </div>
       
                <form action="index.php" method="post">
                    <div class="inputs">
                        <input type="text" name="name" placeholder = "Enter your name" required>
                        <textarea name="message" cols="50" rows="" placeholder = "Enter your message" required></textarea>
                        <input type="submit" name="submit"  value="Send">
                    </div>    
                </form>
            </div>
</body>
</html>