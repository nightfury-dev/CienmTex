<html>
<body>
<div class="content" style="background: #fff;width: 50%;margin: 50px auto;padding: 50px;">
    <div class="header">
        <div class="logo" style="width: 25%;margin: 0 auto;text-align: center;">
            <p style="display: inline-block;position: relative;color: #404040;font-size: 25px;font-family: sans-serif;">{{ config('app.name') }} </p>
        </div>
    </div>
    <hr>
    <!-- END Header -->

    <div class="body">
        <p>Hi {{$data->name}}</p>
        <p>To confirm your email <a href="{{route('email_confiem', ['token' => $data->confirmation_code])}}">Click here</a></p>
    </div>
    <!-- END BODY -->

    <div class="footer" style="margin-top: 100px;background: #e8e8e8;padding: 20px;">
        <p>Please do not reply to this email. Emails sent to this address will not be answered.
        </p>
        <p>Copyright © 2018-2019{{ config('app.name') }}  </p>
    </div>
</div>
</body>
</html>
