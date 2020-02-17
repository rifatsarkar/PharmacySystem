<div class="footer">
<div class="container">
    <div class="col-md-3 footer-grid">
        <h3>About Us</h3>
        <p> medicine company</p>
    </div>
    <div class="col-md-3 footer-grid ">
        <h3> Popular Companies </h3>
        @foreach($brands as $brand)
        <ul>
            <li><a href=" ">{{ $brand->brand_name }}</a></li>

        </ul>
            @endforeach
    </div>
    <div class="col-md-3 footer-grid ">
        <h3>Customer Services</h3>
        <ul>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Faqs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Online Medicine</a></li>

        </ul>
    </div>
    <div class="col-md-3 footer-grid">
        <h3>My Account</h3>
        <ul>
            <li><a href="#">Customer Login</a></li>
            <li><a href="#">Admin Login</a></li>
            <li><a href="#">Medicine Cart </a></li>

        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="footer-bottom">
        <h2 ><a href="index.html"><b><br><br></b>Online Pharmacy <span> </span></a></h2>
        <p class="fo-para"> Medicine Shop</p>
        <ul class="social-fo">
            <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        </ul>
        <div class=" address">
            <div class="col-md-4 fo-grid1">
                <p><i class="fa fa-home" aria-hidden="true"></i>Banani, Dhaka 1230.</p>
            </div>
            <div class="col-md-4 fo-grid1">
                <p><i class="fa fa-phone" aria-hidden="true"></i>1212</p>
            </div>
            <div class="col-md-4 fo-grid1">
                <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@me.com</a></p>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <div class="copy-right">
        <p> &copy; 2020  All Rights Reserved | Developed by  <a href="http://www.devsprince.com"> Kumkum Akter Md. Rakibul Islam Md. Nasib Khan </a></p>
    </div>
</div>
</div>
