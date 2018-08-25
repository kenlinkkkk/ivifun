<head>
    <script !src="">
        function toggleNav(){
            if(document.getElementById("mySidenav").style.left >= "0px"){
                document.getElementById("mySidenav").style.left = "-15%";
                document.getElementById("mySidenav2").style.left = "-15%";
                document.getElementById("banner").style.left = "10%";
                document.getElementById("buttonopenleft").innerHTML = "&#10093;&#10093;";
            }
            else {
                document.getElementById("mySidenav").style.left = "0px";
                document.getElementById("mySidenav2").style.left = "0px";
                document.getElementById("banner").style.left = "-10%";
                document.getElementById("buttonopenleft").innerHTML = "&#10092;&#10092;";
            }
        }
    </script>
    <style>
        *{
            margin: 0px;
            font-family: "Helvetica Neue", sans-serif;
            font-size: 16px;
        }
        .sidenav {
            height: 100%;
            width: 15%;
            position: fixed;
            bottom: 0;
            left: -15%;
            transition: 0.5s;
            z-index:2;
        }
        .sidenav2{
            overflow:scroll;
            position:absolute;
            height: 100%;
            width:100%;
            z-index:2;
        }
        .sidenav2::-webkit-scrollbar {
            display: none;
        }
        .sidenav .sidenav2 ul li{
            margin-left:15%;
            margin-top:15px;
        }
        .sidenav2 a {
            text-decoration: none;
            font-size: 16px;
            color: #818181;
            transition: 0.6s;

        }
        .sidenav2 a:hover {
            color: #f1f1f1;
        }
        #buttonopenleft{
            border-radius: 0px 8px 8px 0px;
            font-size:30px;
            cursor:pointer;
            position: absolute;
            top:40%;
            right:-20px;
            padding:3px 1px 5px 1px;
            color:#CCC
        }
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav" style="background-color: #000000;">
        <div class="sidenav2" id="mySidenav2">
            <ul>
                <li><a href="#">Động vật</a>
                    <ul class="panel">
                        <li><a href="#">Thú cưng</a></li>
                        <li><a href="#">Hoang dã</a></li>
                    </ul>
                </li>
                <li><a href="#">Thể thao</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Giải trí</a></li>
                <li><a href="#">Tài chính</a></li>
                <li><a href="#">Ẩm thực</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Truyện tranh</a></li>
                <li><a href="#">Lập trình</a></li>
                <li><a href="#">Thể thao</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Giải trí</a></li>
                <li><a href="#">Tài chính</a></li>
                <li><a href="#">Ẩm thực</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Truyện tranh</a></li>
                <li><a href="#">Lập trình</a></li>
            </ul>
        </div>
        <div id="buttonopenleft" onclick="toggleNav()" style="background-color: #000000;"> &#10093;&#10093;</div>
    </div>
</body>