<!DOCTYPE html>
<html lang="en">    
<head>
    <?php session_start();if(!isset($_SESSION['user_id'])){header('Location: ../index.html');}?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --transition: all 300ms ease-in-out;
            --dark-color: #007c28;
            --light-color: #fff;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            outline: 0;
        }

        html {
            font-size: 10px;
            scroll-behavior: smooth;
        }

        body {
            font-size: 1.6rem;
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-image: url('o.jpg');
        }

        button,
        .btn {
            cursor: pointer;
            border: none;
            background: transparent;
        }

        ul {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: var(--dark-color);
        }

        img {
            width: 10%;
            display: block;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .vh-100 {
            min-height: 100vh;
        }

        h1,
        h2,
        h3 {
            margin-top: 0;
            line-height: 1.3;
            margin-bottom: 2rem;
            color: rgb(255, 255, 255);
            font-size: 40px;
        }

        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .py-7 {
            padding: 7rem 0;
        }

        .qw {
            height: 10%;
            width: 10%;
        }

        img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }

        .lead {
            opacity: 0.8;
            padding: 1rem 0;
            font-size: 1.7rem;
            font-weight: 300;
            line-height: 1.8;
        }

        #header {
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100vw;
            height: auto;

        }

        #header .header {
            min-height: 8vh;
            background-color: rgb(0, 0, 0);
            transition: 0.3s ease background-color;
        }

        #header .nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 100%;
            max-width: 1300px;
            padding: 0 10px;
        }

        #header .hamburger .bar::after {
            top: 8px;
        }

        #header .hamburger .bar::before {
            bottom: 8px;
        }

        #header .hamburger.active .bar::before {
            bottom: 0;
        }

        #header .hamburger.active .bar::after {
            top: 0;
        }

        .about-left {
            margin-bottom: 4rem;
            width: 400x;
            height: 430px;
            overflow: hidden;
        }

        .cta {
            display: inline-block;
            padding: 10px 30px;
            color: (0, 0, 0);
            background-color: transparent;
            border: 2px solid rgb(72, 0, 255);
            font-size: 2rem;
            letter-spacing: 0.1rem;
            margin-top: 30px;
            transition: 0.3s ease;
            color: #fff;
        }

        .ct {
            display: inline-block;
            padding: 10px 30px;
            color: (0, 0, 0);
            background-color: transparent;
            font-size: 2rem;
            letter-spacing: 0.1rem;
            margin-top: 30px;
            transition: 0.3s ease;
            border: 3px solid rgb(20, 220, 77);
            color: aliceblue;
        }

        .ct:hover {
            color: rgb(0, 0, 0);
            background-color: rgb(20, 220, 77);
        }

        .cta1 {
            display: inline-block;
            padding: 10px 30px;
            color: (0, 0, 0);
            background-color: transparent;
            border: 4px solid rgb(51, 255, 0);
            font-size: 2rem;
            letter-spacing: 0.1rem;
            margin-top: 30px;
            transition: 0.3s ease;
            transition-property: background-color, color;
            color: #fff;
            top: -1500px;
        }

        .inp {
            display: inline-block;
            padding: 10px 30px;
            color: (0, 0, 0);
            background-color: transparent;
            border: 3px solid rgb(20, 220, 77);
            font-size: 2rem;
            letter-spacing: 0.1rem;
            margin-top: 30px;
            transition: 0.3s ease;
            transition-property: background-color, color;
            color: #fff;
            width: 90%;

            
        }

        h4 {
            font-size: 30px;
            color: aliceblue;
        }
        .delete{
            color: rgb(255, 255, 255);
        }
        .asd{
            position: absolute;
            top: 85%;
            width: 95%;
        }
    </style>
    <title>Black Zero</title>
</head>

<body>
    <br>
    <br>
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#">
                        <div class="bnmvc"><img src="b.png" alt="img"></div>
                    </a>
                </div>
                <h4>Chat</h4>
            </div>
        </div>
    </section>

    <div id="chat_box">
        
        <!-- chat box -->

        <!-- not me -->
 
        <!-- <div style="width: 100%;display: flex;justify-content: end;">
            <div class="cta1" >Zero : m</div>
        </div> -->
 
        <!-- me -->
 
        <!-- <div style="width: 100%;display: flex;justify-content: start;">
            <div class="cta" >karl : m</div> 
            <button type="submit" class="delete">delete</button>
        </div> -->
        
    </div>
    <div class="asd" style="display: flex;justify-content: center;">
        <input type="text" id="msg" class="inp">
        <button class="ct" id="send">send</button>
    </div>
</body>
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js";
    import { getDatabase, push,ref,get,onChildAdded,onChildRemoved, remove } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-database.js";

    const firebaseConfig = {
        apiKey: "AIzaSyCFm51kKQKWUR8pLfEUVjUYhO4xJZbj-AQ",
        authDomain: "zero-98.firebaseapp.com",
        databaseURL: "https://zero-98-default-rtdb.firebaseio.com",
        projectId: "zero-98",
        storageBucket: "zero-98.appspot.com",
        messagingSenderId: "167034841150",
        appId: "1:167034841150:web:f3cb703dfe887f9f55c96f",
        measurementId: "G-1VG8FDHQPG"
    };
    const app = initializeApp(firebaseConfig);
    const db = getDatabase(app);
    var userName;

    function getMesssages(){
        onChildAdded(ref(db,'chat'),function(msg){
            var sender = msg.val()['sender']
            var key = msg.key
            var msg = msg.val()['msg']

            var html = '';
            if(sender == userName){
                html += '<div style="width: 100%;display: flex;justify-content: start;"><div class="cta" >'+sender+': '+msg+'</div><button id="'+key+'" class="delete"> delete</button></div>'
            }else{
                html += '<div style="width: 100%;display: flex;justify-content: end;"><div class="cta1" >'+sender+': '+msg+'</div></div>'
            }
            document.getElementById('chat_box').innerHTML += html

            $('.delete').click(function(vio){
                remove(ref(db,'chat/'+vio.target.id)).then(()=>{

            })
        })
    }
)}
    document.getElementById('send').addEventListener('click',function(){
        var msg = document.getElementById('msg').value;

        // send message
        if(msg != ''){
            push(ref(db,'chat'),{
                'sender': userName,
                'msg': msg 
            }).then(()=>{
                document.getElementById('msg').value = ''
            })
        }
    })

    get(ref(db,'Users/'+<?php echo $_SESSION['user_id']?>)).then((user)=>{
        userName = user.val()['name'];getMesssages()
    })


    onChildRemoved(ref(db,'chat'),function(via){
        $('#'+via.key).parent().remove()
    })



</script>

</html>