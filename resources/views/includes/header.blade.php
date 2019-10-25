<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 contact-text">
        <span><b>Conatct us:</b> 054-8465484</span> &nbsp; &nbsp;
        <span><b>Email:</b> finance@gmail.com</span>
      </div>  
      <div class="col-md-6 text-right social-icons">
        <ul>
          <li><a href=""><span style="background-color: #3b5999;"><i class="fa fa-facebook"></i></span></a></li>
          <li><a href=""><span style="background-color: #55acee;"><i class="fa fa-twitter"></i></span></a></li>
          <li><a href=""><span style="background-color: #cd201f;"><i class="fa fa-youtube"></i></span></a></li>
          <li><a href=""><span style="background-color: #e4405f;"><i class="fa fa-instagram"></i></span></a></li>
          <li><a href=""><span style="background-color: #0077B5;"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
        </ul>
      </div>
    </div>
  </div>  
</div>

<nav class="navbar navbar-ageras  navbar-transparent  ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ageras-navbar" aria-expanded="false">
      <span class="sr-only">Navigation</span>
      <i data-icon="mdi-menu" class="iconify"></i>
      </button>
      <!-- <a class="navbar-brand" href="index.html" ></a> -->
      Logo
    </div>
    <div class="collapse navbar-collapse"  id="ageras-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{url('/')}}"  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Home
          </a>
        </li>
        <li class="dropdown">
          <a href=""  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <span class="arrow-icon">
            <span class="left-bar"></span>
            <span class="right-bar"></span>
          </span>
          <ul class="dropdown-menu dropdown-menu-services dropdown-menu-small">
            <li class="dropdown">
              <a href="" >Accounting</a>
            </li>
            <li class="dropdown">
              <a href="" >Bookkeeping</a>
            </li>
            <li class="dropdown">
              <a href="" >Tax</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href=""  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Blogs
          </a>
        </li>
        <li class="dropdown">
          <a href="blog.html"  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Contact Us
          </a>
        </li>
        <li class="dropdown">
          <a href="{{url('/partner')}}"  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Expert
          </a>
          <span class="arrow-icon">
            <span class="left-bar"></span>
            <span class="right-bar"></span>
          </span>
          <ul class="dropdown-menu dropdown-menu-services dropdown-menu-small">
          @if(!Session::has('faUser'))
            <li class="dropdown">
              <a href="{{ url('partner_register') }}" >Become a Partner</a>
            </li>
            @endif
            <!--<li class="dropdown">
              <a href="contact-us.html" >Dummy Cases</a>
            </li>-->
            <!--<li class="dropdown">
              <a href="contact-us.html" >Partner Registration</a>
              <span class="arrow-icon">
                <span class="left-bar"></span>
                <span class="right-bar"></span>
              </span>
              <ul class="dropdown-menu dropdown-menu-services dropdown-menu-small">
                <li class="dropdown">
                  <a href="blog/how-does-ageras-work.html" >Partner registration form</a>
                </li>
                <li class="dropdown">
                  <a href="contact-us.html" >Partner to have verified badges</a>
                </li>
                <li class="dropdown">
                  <a href="contact-us.html" >Review mechanism</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>-->
        @if(Session::has('faUser'))
         <li class="dropdown">
              <a href="{{url('partner/partner_dashboard')}}" >Partner Dashboard</a>
            </li>
        <li class="dropdown">
          <a href="{{ url('logout') }}"  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Logout
          </a>
        </li>
        @else
        <li class="dropdown">
          <a href="{{ url('partner_login') }}"  class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false">
            Login
          </a>
        </li>
        @endif
        
      </ul>
      </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>