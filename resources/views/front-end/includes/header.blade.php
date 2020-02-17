<div class="header">

    <div class="container">

        <div class="logo">
            <h1 ><a href="{{ route('/') }}"> <span> <h1> Online Pharmacy Management System </h1> </span> <span>people's ultimate medicine destination</span></a></h1>
        </div>
        <div class="head-t">
            <ul class="card">
                <li><a href="" ><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i> Dashboard </a></li>
                @if(Session::get('customer_id'))

                    <li><a href="{{ route('customer-logout') }}" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Logout </a></li>
                @else
                    <li><a href="{{ route('checkout') }}" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Customer Login </a></li>

                @endif


                <li><a href="{{ route('login') }}" ><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>Admin Login</a></li>
{{--                <li><a href="" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>--}}
                <li><a href="{{ route('show-cart') }}" ><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> <strong><h5> Medicine Cart </h5></strong> </a></li>
            </ul>

        </div>

        <div class="header-ri">
            <ul class="social-top">
                <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
            </ul>
        </div>


        <div class="nav-top">
            <nav class="navbar navbar-default">

                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        @foreach($categories as $category)
                        <li class="active"><a href="{{ route('category-product', ['id'=>$category->id]) }}" class="hyper "><span>{{ $category->category_name }}</span></a></li>

                        @endforeach

                    </ul>
                </div>
            </nav>

            <div class="clearfix"></div>
        </div>

    </div>
</div>
