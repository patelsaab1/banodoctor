
<nav>
  <div class="app-logo">
    <a class="logo d-inline-block" href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/images/Bano-Doctor-Logo.png') }}" alt="#">
    </a>
    <span class="bg-light-primary toggle-semi-nav">
      <i class="ti ti-chevrons-right f-s-20"></i>
    </span>
  </div>
  <div class="app-nav" id="app-simple-bar">
    <ul class="main-nav p-0 mt-2">
      <li class="menu-title">
        <span>Dashboard</span>
      </li>
      <li>
        <a class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
          <i class="ph-duotone ph-house-line"></i>
          Dashboard
        </a>
      </li>

      <li class="menu-title"><span>Settings</span></li>
      
      
        <li>
        <a class="{{ request()->routeIs('upload.index') ? 'active' : '' }}" href="{{ route('upload.index') }}">
          <i class="ph-duotone ph-map-pin"></i>
          File Uploads
        </a>
      </li>
      
      
      <li>
        <a class="{{ request()->routeIs('state-setting') ? 'active' : '' }}" href="{{ route('state-setting') }}">
          <i class="ph-duotone ph-map-pin"></i>
          States
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('country-setting') ? 'active' : '' }}" href="{{ route('country-setting') }}">
          <i class="ph-duotone ph-globe"></i>
          Countries
        </a>
      </li>

      <li class="menu-title"><span>Menu Management</span></li>
      <li>
        <a class="{{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">
          <i class="ph-duotone ph-list"></i>
          Menu
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('menu-dropdown') ? 'active' : '' }}" href="{{ route('menu-dropdown') }}">
         
           <i class="ph-duotone ph-list-plus"></i>Dropdown Menu
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('mega-menu-dropdown') ? 'active' : '' }}" href="{{ route('mega-menu-dropdown') }}">
          <i class="ph-duotone ph-list-plus"></i>
          Megamenu
        </a>
      </li>

      <li class="menu-title"><span>Content Management</span></li>
      <li>
        <a class="{{ request()->routeIs('category') ? 'active' : '' }}" href="{{ route('category') }}">
          <i class="ph-duotone ph-folders"></i>
          Course Categories
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('subcategory') ? 'active' : '' }}" href="{{ route('subcategory') }}">
          <i class="ph-duotone ph-graduation-cap"></i>
          Course Degrees
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('page-view') ? 'active' : '' }}" href="{{ route('page-view') }}">
          <i class="ph-duotone ph-file-text"></i>
          Pages
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('fee-structure-view') ? 'active' : '' }}" href="{{ route('fee-structure-view') }}">
          <i class="ph-duotone ph-currency-dollar"></i>
          Fee Structure
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('faq-view') ? 'active' : '' }}" href="{{ route('faq-view') }}">
          <i class="ph-duotone ph-question"></i>
          FAQ's
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('widget') ? 'active' : '' }}" href="{{ route('widget') }}">
          <i class="ph-duotone ph-puzzle-piece"></i>
          Widgets
        </a>
      </li>

      <li class="menu-title"><span>Institutions</span></li>
      <li>
        <a class="{{ request()->routeIs('college-view') ? 'active' : '' }}" href="{{ route('college-view') }}">
          <i class="ph-duotone ph-buildings"></i>
          Colleges
        </a>
      </li>

      <li class="menu-title"><span>Content</span></li>
      <li>
        <a class="{{ request()->routeIs('blog-view') ? 'active' : '' }}" href="{{ route('blog-view') }}">
          <i class="ph-duotone ph-newspaper"></i>
          Blog Posts
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('review-view') ? 'active' : '' }}" href="{{ route('review-view') }}">
          <i class="ph-duotone ph-star"></i>
          Testimonials
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('notice-view') ? 'active' : '' }}" href="{{ route('notice-view') }}">
          <i class="ph-duotone ph-megaphone"></i>
          News & Alerts
        </a>
      </li>

      <li class="menu-title"><span>Enquiries</span></li>
      <li>
        <a class="{{ request()->routeIs('enquiry') ? 'active' : '' }}" href="{{ route('enquiry') }}">
          <i class="ph-duotone ph-envelope"></i>
          General Enquiries
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('course-enquiry') ? 'active' : '' }}" href="{{ route('course-enquiry') }}">
          <i class="ph-duotone ph-book-open"></i>
          Course Enquiries
        </a>
      </li>

      <li class="menu-title"><span>System</span></li>
      <li>
        <a class="{{ request()->routeIs('states-view') ? 'active' : '' }}" href="{{ route('states-view') }}">
          <i class="ph-duotone ph-map-trifold"></i>
          States Management
        </a>
      </li>
      <li>
        <a class="{{ request()->routeIs('work.history') ? 'active' : '' }}" href="{{ route('work.history') }}">
          <i class="ph-duotone ph-clock-counter-clockwise"></i>
          Work History
        </a>
      </li>
    </ul>
  </div>

  <div class="menu-navs">
    <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
    <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
  </div>
</nav>
<!-- Menu Navigation ends -->


