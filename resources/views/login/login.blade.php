@extends('front-end.master')
@section('title')
    Checkout
@endsection
@section('body')
    <br/>

    <div class="container">
        <div class="row">

            <div class="col-md-8 well">
                <div class="text-center well text-success">
                    <h5>  <strong> {{ Session::get('message') }}</strong>  </h5>
                </div>

                <h3 class="text-success text-center"> Login Form </h3>
                <br/>
                <form class="form-horizontal" action="{{ route('customer-login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-md-3" > Email  </label>
                        <div class="col-md-9">
                            <input type="email" name="email_address" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3" > Password  </label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" value="login" class="btn btn-success btn-block" />
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <script>
        var email_address = document.getElementById('email_address');
        email_address.onblur = function () {

            var email = document.getElementById('email_address').value;
            var xmlHttp = new XMLHttpRequest();
            var serverPage = ('http://localhost/prince72/public/ajax-email-check/'+email);
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange = function () {
                if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                    if (xmlHttp.responseText == 'already exist'){
                        document.getElementById('regBtn').disabled = true;
                    }else {
                        document.getElementById('regBtn').disabled = false;
                    }
                }
            }
            xmlHttp.send(null);
        }

    </script>

@endsection

