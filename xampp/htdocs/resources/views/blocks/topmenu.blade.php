<header id="masthead" class="site-header" 
@if(Route::is('contact') )
style="background:rgb(0,49,82)"
@else
header id="masthead" class="site-header" data-top="background: rgba(0,49,82,0.4); border-bottom-color: rgba(0,49,82,0);"
data-top-bottom="background: rgba(0,49,82,1); border-bottom-color: rgba(0,49,82,1);"
 @endif
 >

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">

                <a href="{{route('index')}}" class="site-title yellow-text" style="font-size:3vh"> &nbsp &nbsp &nbsp I+ID<span class="white-text">Lab</span></a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{route('index')}}" style="font-size:1.8vh">Home</a></li>

                    <li class="dropdown">
                        <a href="{{route('director')}}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-size:1.8vh">People <i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('director')}}" style="font-size:1.8vh">Director</a></li>
                            <li><a href="{{route('researcher')}}" style="font-size:1.8vh">Full-time Researchers</a></li>
                            <li><a href="{{route('phd')}}" style="font-size:1.8vh">PhD</a></li>
                            <li><a href="{{route('people')}}" style="font-size:1.8vh">Masters</a></li>
                            <li><a href="{{route('interns')}}" style="font-size:1.8vh">Interns</a></li>
                            <li><a href="{{route('alumni')}}" style="font-size:1.8vh">Alumni</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li>
                    <li><a href="{{route('journals')}}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-size:1.8vh">Publications<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">    
                            <li><a href="{{route('journals')}}" style="font-size:1.8vh">Journals</a></li>
                            <li><a href="{{route('conferences')}}" style="font-size:1.8vh">Conferences</a></li>   
                        </ul>
                    </li>
                    <li><a href="{{route('ongoing')}}" class="dropdown-toggle" style="font-size:1.8vh" data-toggle="dropdown" aria-expanded="false">Projects<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('ongoing')}}" style="font-size:1.8vh">Ongoing</a></li>
                            <li><a href="{{route('complete')}}" style="font-size:1.8vh">Completed</a></li>   
                        </ul>
                    </li>
                    <li><a href="{{route('awards')}}" style="font-size:1.8vh" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Achievements<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('awards')}}" style="font-size:1.8vh">Awards</a></li>
                            <li><a href="{{route('intellectual')}}" style="font-size:1.8vh">Intellectual Property</a></li>
                            <li><a href="{{route('commerce')}}" style="font-size:1.8vh">Commercialization</a></li>   
                        </ul>
                    </li>
                    <li><a href="{{route('news')}}" style="font-size:1.8vh">News &nbsp &nbsp &nbsp</a></li>
                    
                    

                </ul><!-- /.navbar-nav -->

            </div><!-- /.navbar-collapse -->

        </div>

    </nav><!-- /.site-navigation -->

</header><!-- /#masthead -->
