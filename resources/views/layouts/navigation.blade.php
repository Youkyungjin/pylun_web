<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{isActiveRoute('main')}}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="{{isActiveRoute('product')}}">
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">상품관리</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" >
                    <li><a href="/product/list">상품정보 조회/수정</a></li>
                    <li><a href="/product/add">상품 등록</a></li>
                    <li><a href="graph_rickshaw.html">상품 심사</a></li>
                    <li><a href="graph_chartjs.html">표준 카테고리 수수료 관리</a></li>
                    <li><a href="graph_chartist.html">상품평 관리</a></li>
                    <li><a href="c3.html">상품문의 관리</a></li>
                    <li><a href="graph_peity.html">배송비 관리</a></li>
                </ul>
            </li>
            <li class="">
                <a href="{{ url('/order') }}"><i class="fa fa-th-large"></i> <span class="nav-label">주문관리</span></a>
            </li>
        </ul>

    </div>
</nav>
