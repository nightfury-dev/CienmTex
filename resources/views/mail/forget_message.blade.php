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
        <p>Hi {{$data->name}}<br>We received a request to reset your {{ config('app.name') }} password, open this link</p>
        <p><a href="{{url('/app/forget/rest/'.$data->forget_code)}}"> Click here</a></p></div>
    <!-- END BODY -->

    <div class="footer" style="margin-top: 100px;background: #e8e8e8;padding: 20px;">
        <p>Please do not reply to this email. Emails sent to this address will not be answered.
        </p>
        <p>Copyright © 2018-2019{{ config('app.name') }} </p>
    </div>
</div>
</body>
</html>
