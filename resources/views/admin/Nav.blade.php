<link href="../../resources/css/test.css" rel="stylesheet" />
<nav class="main-menu">
            <ul>
                <li>
                    <a href="{{route('admin.home')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Global Surveyors
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Group Hub Forums
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route('admin.projects')}}">
                       <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            projects Gallery
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                             Videos
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">                        
                            Tools & Resources
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('admin.Main_Image_Control',1)}}">Featured Works</a>
                                    </li>
                                <li>
                                    <a href=#>Other Images</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.site_info')}}">Site Information</a>
                                </li>
                            </ul>
                        </li>                                         
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('update_password_page')}}">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                          Your Profile
                        </span>
                    </a>
                </li>
                {{-- <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Map
                        </span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{route('admin.documentation')}}">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="{{route('admin.logout')}}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
