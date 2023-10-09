<aside class="sidebar-wrapper">
    <div class="iconmenu"> 
      <div class="nav-toggle-box">
        <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
      </div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="eCommerce">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Components">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-bookmark-star-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Forms">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-forms" type="button"><i class="bi bi-file-earmark-break-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tables">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-authentication" type="button"><i class="bi bi-lock-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-icons" type="button"><i class="bi bi-cloud-arrow-down-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Content">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-content" type="button"><i class="bi bi-cone-striped"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
        </li>
      </ul>
    </div>
    <div class="textmenu">
      <div class="brand-logo">
        <img src="{{asset('/')}}assets/backend/assets/images/brand-logo-2.png" width="140" alt=""/>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade" id="pills-dashboards">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Dashboards</h5>
              </div>
            </div>
            {{-- category --}}
            <div class="dropdown">
              <a class="list-group-item" type="button" data-bs-toggle="dropdown"><i class="bi bi-wallet"></i>
                Category
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('categories.create')}}">Add Category</a></li>
                <li><a class="dropdown-item" href="{{route('categories.index')}}">Manage Category</a></li>
              </ul>
            </div>

            {{-- blog --}}
            <div class="dropdown">
              <a class="list-group-item" type="button" data-bs-toggle="dropdown"><i class="bi bi-wallet"></i>
                Blog
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('blogs.create')}}">Add Blog</a></li>
                <li><a class="dropdown-item" href="{{route('blogs.index')}}">Manage Blog</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
 </aside>