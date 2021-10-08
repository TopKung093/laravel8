<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/order') }}">
                        <i class="fa fa-box"></i> คำสั่งซื้อของฉัน
                    </a>
                </li>
                @if(Auth::check())                 
                    <li role="presentation">
                        <a href="{{ url('/order-product/reportdaily') }}">
                            <i class="fa fa-file"></i> รายงานรายวัน
                        </a>
                    </li>                    
                    <li role="presentation">
                        <a href="{{ url('/order-product/reportmonthly') }}">
                            <i class="fa fa-file"></i> รายงานรายเดือน
                        </a>
                    </li>                    
                    <li role="presentation">
                        <a href="{{ url('/order-product/reportyearly') }}">
                            <i class="fa fa-file"></i> รายงานรายปี
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
