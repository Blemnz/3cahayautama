<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ url('dashboard') }}">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('dashboard/order') }}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('dashboard/products') }}">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Products
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <form action="{{ url('/logout') }}" method="POST">
              @csrf
              <button class="nav-link d-flex align-items-center gap-2" type="submit"> <svg class="bi"><use xlink:href="#door-closed"/></svg>
                logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>