<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Abdelrahman</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Albums</div>
            </a>
            <ul>
                <li> <a href="{{ route('albums.index') }}"><i class="bx bx-right-arrow-alt"></i>Albums</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Pictures</div>
            </a>
            <ul>
                <li> <a href="{{ route('albums.index') }}"><i class="bx bx-right-arrow-alt"></i>Albums</a>
                </li>
            </ul>
        </li> --}}

</div>
<!--end sidebar wrapper -->
