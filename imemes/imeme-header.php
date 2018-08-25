<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        font-family: "Helvetica Neue",sans-serif;
        font-size: 14px;
        font-weight: inherit;

    }
    #cover{
        width: 100%;
        height: 40px;
        background-color: #000000;
    }
    #wrap{
        width: 80%;
        margin: auto;
    }
    #wrap ul li{
        float: left;
        padding: 13px 8px 0px 2px;
        list-style: none;
    }

    #wrap .left-menu ul li a{
        text-align: center;
        color: lightgrey;
        text-decoration: none;
    }
    #wrap .left-menu li a:hover{
        color: white;
    }
    .material-icons.custom{
        font-size: 20px;
        padding: 10px 0px 10px 0px;
    }
    .left-menu{
        float: left;
        color: darkorange;
        align-items: left;
    }
    .right-menu{
        float: right;
        color: lightgrey;
        font-size: 26px;
        padding: 4px 5px 4px 5px;
    }
    .avatar{
        float: right;
        width: 34px;
        height: 34px;
        padding: 0px;
        border-radius: 50%;
    }
    .right-menu:hover{
        color: white;
    }
    #wrap right-menu ul li{
        float: right;
        list-style: none;
    }
    .logo{
        border: dashed;
        color: blue;
        float: left;
        height: 35px;
        width: 80px;
        padding-right: 30px;
    }
</style>
<body>
    <div id="cover">
        <div id="wrap">
            <div class="logo"></div>
            <div class="left-menu">
                <ul>
                    <i class="material-icons custom left-menu">whatshot</i>
                    <li><a href="#">HOT</a></li>
                    <li><a href="#">Chưa xem</a></li>
                    <li><a href="#">TOP</a></li>
                    <li><a href="#">NEW</a></li>
                    <li><a href="#">RANDOM</a></li>
                    <li><a href="#">Sáng tạo</a></li>
                </ul>
            </div>
            <div class="right-menu">
                <a href="#"><i class="material-icons  right-menu" style="padding-left: 15px">settings</i></a>
                <a href="#"><i class="material-icons  right-menu">account_circle</i></a>
                <a href="#"><i class="material-icons  right-menu">notifications</i></a>
                <a href="#"><i class="material-icons  right-menu">search</i></a>
            </div>
        </div>
    </div>
</body>

