<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="{{route('location.shops.index')}}">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Shops</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Locations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('location.countries.index')}}"> Countries </a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.products.index')}}">Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.productCategories.index')}}">Categories</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>