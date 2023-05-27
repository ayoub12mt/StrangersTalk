<?php
include 'config.php';
$chat = 'SELECT * FROM chat ORDER BY id DESC';
$run = mysqli_query($con,$chat);
    while($row = mysqli_fetch_array($run)){
        $name = $row['name'];
        $mes = $row['message'];
        $date = $row['date'];
?>
        <div id='msg_section'>
            <span><?php echo $name ?></span>
            <div id='app'>
                <div class='message-group-received'>
                    <div class='message-received'>
                        <div class='message-received-text'>
                        <?php echo $mes ?>
                        </div>
                    </div> 
                        <a href="" style='font-size:12px; background-color:transparent; border:none; color:black; text-decoration:underline;'>Delete</a>
                </div>
            </div> 
            <div class='lino'>
                <div class='line'>
                </div>
                <span style ='float: right;'><?php echo $date ?></span>       
            </div>
        </div>
   <?php 
    }
    ?>
