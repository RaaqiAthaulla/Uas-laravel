@extends('main')
@section('container')
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: Trebuchet MS;
            }
            body{
                background-color: black;
            }
            .logo{
                position: relative;
                width: 100%;
                min-height: 100vh;
                padding: 0 100px;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                color: #FFFFFF;
            }
            .logo .bg{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            h1{
                font-size: 170px;
            }
            p{
                font-size: 20px;
            }
            a.button{
                display:inline-block;
                padding:0.35em 1.2em;
                margin:0 0.3em 0.3em 0;
                text-decoration:none;
                font-weight:300;
                color:#FFFFFF;
                text-align:center;
                transition: all 0.2s;
                font-size: 17px;
            }

            a.button:hover{
                color:black;
                background-color:#FFFFFF;
            }
            hr{
                height: 150px;
                margin-left: -3px;
                margin-right: auto;
                position: absolute;
                left: 80px;
                margin-top: -176px;
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <div class="text">
                <h1 style="color: red;">Welcome</h1>
                <hr>
              
                
            </div>
        </div>
    </body>
</html>