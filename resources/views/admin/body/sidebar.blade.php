@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<aside class="main-sidebar">

  <!-- sidebar-->
  <section class="sidebar">

    <div class="user-profile">
      <div class="ulogo">
        <a href="{{ route('dashboard') }}">
          <!-- logo for regular state and mobile devices -->
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('backend/images/feed icon.png')}}" height="30" width="30" alt="">
            <h3><b>FeedHub</b></h3>
          </div>
        </a>
      </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="{{ ($route == 'dashboard')?'active':'' }}">
        <a href="{{ route('dashboard') }}">
          <i data-feather="pie-chart"></i>
          <span>Dashboard</span>
        </a>
      </li>




      <li class="treeview {{ ($prefix == '/playstore')?'active':'' }}">
        <a href="#">
          <i class="fab fa-google-play"></i>
          <span>Playstore</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('review.view')  }}"><i class="far fa-comments"></i>Reviews</a></li>
          <li><a href="{{ route('rating.view')  }}"><i class="far fa-star"></i>Ratings</a></li>
          <li><a href="{{ route('feed.add') }}"><i class="fas fa-plus-circle"></i><span>Add Feedback</span>
            </a>
          </li>
        </ul>
      </li>





      <li class="treeview {{ ($prefix == '/microsoft')?'active':'' }}">
        <a href="#">
          <i class="fab fa-microsoft"></i>
          <span>Microsoft</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('msft.rate')  }}"><i class="far fa-star"></i>Ratings</a></li>

          </a>
      </li>
    </ul>
    </li>


    <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
      <a href="#">
        <i data-feather="mail"></i> <span>Manage Profile</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your profile</a></li>

      </ul>
    </li>




    </ul>


  </section>

  <div class="sidebar-footer">
    <!-- item-->
    <a href="https://www.linkedin.com/in/michael-chekole-232801197" class="link" data-toggle="tooltip" title="" data-original-title="LinkedIn" aria-describedby="tooltip92529"><i class="fab fa-linkedin-in"></i></a>
    <!-- item-->
    <a href="mailto:micted94@gmail.com" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
    <!-- item-->

  </div>
</aside>