<?php 
    include ('database.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" Content-Type: application;>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chatbot</title>
    <link rel="stylesheet" href="stylel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Redressed&family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
        <section class=" header">
            <div class="chat-box">
            <center> <img src="botimg.png" alt="BOT"></center> 
                    <h4>Hey i'm your bot. Please enter your query below 👇 so that i can help you.</h4>
                    <br>
                    <div class="bot-box">
                        <br>
                    </div>

                   <div class="typing">
                        <input type="text" id="que" placeholder="Enter Your Query Here....">
                        <br>
                        <button><i class="bi bi-send" onclick="send_msg()"></i></button>
                    </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

    function send_msg(){
        var txt=jQuery('#que').val();
        var html=' <div class="chat_outgoing"><div class="details_out"><h5 class="msg_title_me">ME</h5></div><p class="pera">'+ txt +'</p></div>';
        jQuery('.bot-box').append(html);
        jQuery('#que').val('');

        if(txt){
            jQuery.ajax({
                url:'get_bot_reply.php',
                type:'post',
                data:'txt='+txt})
                .done(function(result){
                    var html='<div class="chat_incoming"><div class="details_in"><br><h5 class="msg_title_bot">BOT</h5></div><p class="pera_b">'+ result +'</p></div>';
                jQuery('.bot-box').append(html);
                jQuery('.bot-box').scrollTop(jQuery('.bot-box')[0].scrollHeight);
                console.log(result);
            });
        }
    }
</script>
</body>

</html>