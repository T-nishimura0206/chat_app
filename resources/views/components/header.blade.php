<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
    {{-- <div class="header_img">
        <a href="{{ url('/chat_my_profile') }}">
            <img src="../../storage/kkrn_icon_user_3.png" alt="アイコン" style="height:25px; width:25px;">
        </a> 
    </div> --}}
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo"><i class='bx bx-layer nav_logo-icon'></i><span class="nav_logo-name">BBBootstrap</span></a>
            <div class="nav_list"> 
                <a href="#" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="nav_name">Dashboard</span></a>
                <a href="{{ url('/friends') }}" class="nav_link"><i class='bx bx-user nav_icon'></i><span class="nav_name">Friends</span></a> 
                <a href="{{ url('/home') }}" class="nav_link"><i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span></a> 
                <a href="{{ url('/chat_my_profile') }}" class="nav_link"><i class='bx bx-bookmark nav_icon'></i><span class="nav_name">Bookmark</span></a> 
                <a href="#" class="nav_link"><i class='bx bx-folder nav_icon'></i><span class="nav_name">Files</span></a> 
                <a href="#" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i><span class="nav_name">Stats</span></a></div>
            </div> 
            <a href="{{ route('dashboard') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i><span class="nav_name">SignOut</span> </a>
    </nav>
</div>