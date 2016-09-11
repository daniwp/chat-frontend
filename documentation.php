<?php
    $username = 'admin';
    $password = 'admin';

    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        if ( $username != $_POST['username'] || $password != $_POST['password'] ) {
            die();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/main.min.css">
    <title>Web Starter 2016</title>
</head>
<body>

<div class="container">
    <div class="row">
        <br><br><br><br><br><br><br>
        <h1 style="color: #D9534F">GitHub repository: <a target="_blank" style="color: #D9534F; text-decoration: underline" href="https://github.com/lucasmfredmark/TCPChatServer">TCPChatServer</a></h1>

        <h3 style="color: #D9534F"><strong>HOWTO</strong></h3>

        <p>To run both jar files you will need to have Java SE Runtime Environment 8 installed on your machine.</p>

        <p><strong style="color: #D9534F">NB:</strong> You do not have to install and run the server as it is already running on a remote
            server at:</p>
        <ul>
            <li>IP: 139.59.152.110</li>
            <li>Port: 1330</li>
        </ul>


        <h4 style="color: #D9534F"><strong>How to install and run the server:</strong></h4>
        <ol>
            <li>Download the "chatserver.jar" file from the frontpage</li>
            <li>Double-click the jar file to run the server with default arguments (ip: localhost, port:7777)</li>
            <li>If you want to run the server with different arguments you need to run it through the command line. Open
                a command prompt and type in "java -jar chatserver.jar &lt;ip&gt; &lt;port&gt;" when you are in the same folder as the jar file.
            </li>
            <li>The server is now running and can be tested with a client.</li>
        </ol>
        <br><br>

        <h4 style="color: #D9534F"><strong>How to install and run the client:</strong></h4>
        <ol>
            <li>Download the "chatclient.jar" file from the frontpage</li>
            <li>Double-click the jar file to run the client</li>
            <li>The client is now running. To connect to the server you must specify the IP and Port of the server
                running.
                <ul>
                    <li>IP: 139.59.152.110</li>
                    <li>Port: 1330</li>
                </ul>
            </li>
            <li>Click on the "Connect" button to connect to the server. You should now be able to send messages to the
                server.</li>
        </ol>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
    </div>
</div>


<script src="dist/js/main.min.js"></script>

</body>
</html>

