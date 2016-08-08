 <style>
        *{
            margin: 0px;
        }
        body{
            background-color: #ebebeb;
        }

        #side-menu{

        }
        .warpper{
            position: fixed;
            width: 230px;
            background-color: purple;
            border-radius: 1.5px;
            box-shadow: silver 2px 2px 2px 2px;
        }
        .logo  {
            text-decoration: none;
            border-bottom: solid #262626 1px;
            text-align: center;
            padding: 1.3%;
            font-size: xx-large;
            font-kerning: auto;
            font-weight: 900;
            font-family: "Glyphicons Halflings";
            color: purple;
            background-color: floralwhite;
        }

        .options {
            margin: 5%;
            border-radius: 2%;
            background-color:rgba(255,255,255,0.15);
            text-align: center;
            padding: 5%;
            color:#ffffff;
            font-family:"Courier New";
            font-weight: 700;
            font-size: x-large;
        }
        .image{
            width: 50px;
            height: 50px;
            background-image: url({{ asset ('img/raza.jpg')}});
            background-size: cover;
            border-radius: 50%;
            padding: 5%;
            float: left;



        }
        .name{

            padding: 3%;

            color:white;

            font-weight: 700;
            font-size: x-large;

        }
        .icon{
            background-color: purple;
        }
        .logo>a{
            text-decoration: none;
            color: purple;
            text-shadow: 0 0 0.2em #F87, 0 0 0.2em #F87        }
        a{
            text-decoration:none ;
        }
    </style>


<nav class="navbar  navbar-static-top" role="navigation" style="margin-bottom:0;background-color: floralwhite;box-shadow: purple 2px 2px 2px 2px">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"style="border:purple solid 2px ">
            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar icon"></span>
            <span class="icon-bar icon"></span>
            <span class="icon-bar icon"></span>
            <div class="navbar"style="color:purple">LLTGS</div>
        </button>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-default sidebar " role="navigation">
                <div class="sidebar-nav navbar-collapse warpper">
                    <ul class="nav" id="side-menu"style="">
                        <li><div class="logo"><a href="#">LLTGS</a> </div></li>
                        <li><a href="#">
                            <div class="options" style="background-color: transparent">
                                <div class="image"></div>
                                <div class="name">Ali Raza</div>
                            </div>
                        </a> </li>
                        <li> <div class="options"><a href="#">Dashboard</a> </div></li>
                        <li> <div class="options"><a href="#">Front End</a> </div></li>
                        <li> <div class="options"><a href="#">Back End</a> </div></li>
                        <li> <div class="options"><a href="#">Articals</a> </div></li>
                        <li> <div class="options"><a href="#">Users</a> </div></li>
                        <li> <div class="options"><a href="#">Stops</a> </div></li>
                        <li> <div class="options"><a href="#">Buses</a> </div></li>
                        <li> <div class="options"><a href="#">Logout</a> </div>
                        </li>

                    </ul>
                </div>
  </div>
        </div>
    </div>
</nav>






<!--  <nav class="navbar  navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:lightgreen;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"style="border: solid white">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"style="background-color:  white"></span>
            <span class="icon-bar"style="background-color:  white"></span>
            <span class="icon-bar"style="background-color:  white"></span>
        </button>
        <a class="navbar-brand" href="index.html"style="color:white">LLTGS</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu" style="background-color:  lightgreen">
                <li style="background-color:  lightgreen;">
                    <a href="{{ URL::to('') }}"><i class="fa fa-backward"></i> Go to frontend</a>
                </li>
                <li style="background-color:lightgreen;">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> Language
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> Articles
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>  Article categories
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> Articles
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-camera"></i> Photo items
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/photoalbum')}}">
                                <i class="glyphicon glyphicon-list"></i> Photo albums
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/photo')}}">
                                <i class="glyphicon glyphicon-camera"></i> Photo
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="glyphicon glyphicon-user"></i> Users
                    </a>
                </li>

<li>
                    <a href="{{url('sitestop')}}">
                        <i class="glyphicon glyphicon-like"></i> Stops
                    </a>
                </li>
                

                <li>
                    <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->