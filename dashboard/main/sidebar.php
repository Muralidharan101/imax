<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>


.fa-angle-down{
  
  display:none !important;
}

.page-wrapper.compact-wrapper .page-body-wrapper .according-menu {
    position: absolute;
    right: 20px;
    top: 13px;
    display: none;

}

.fa-thumb-tack:before {
    content: "";
    display:none;
}
</style>

<div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index.html"><h1 class="mt-2 text-white">IMAX</h1><img class="img-fluid for-light" src="<?php echo $path ?>" alt=""></a>
              <div class="back-btn"><i data-feather="grid"></i></div>
              <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-list">
                    <h6>Pinned</h6>
                  </li>
                  <hr>
                  <br>
                  <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                    <div class="according-menu am">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="Product_creation.php">
                    <i data-feather="airplay"></i>
                    <span>Product Creation</span>
                    <span class="fa fa-down-arrow"></span>
                  </a>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="Product_list.php">
                    <i data-feather="airplay"></i>
                    <span>Products List</span>
                    <span class="fa fa-down-arrow"></span>
                  </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="orders.php">
                    <i data-feather="airplay"></i>
                    <span>Orders Data</span>
                    <span class="fa fa-down-arrow"></span>
                  </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="customer_list.php">
                    <i data-feather="airplay"></i>
                    <span>Customers Data</span>
                    <span class="fa fa-down-arrow"></span>
                  </a>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title active" href="javascript:void(0)" data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg><span >Master Data </span><div class="according-menu"><span><i class="bi bi-chevron-down"></i></span></div></a>
                    <ul class="sidebar-submenu" style="">
                      <li><a href="Product_size.php" data-bs-original-title="" title="">Product Size Creation</a></li>
                      <li><a href="Product_color.php" data-bs-original-title="" title="">Product Color Creation</a></li>
                      <li><a href="Product_category.php" data-bs-original-title="" title="">Product Category Creation</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>