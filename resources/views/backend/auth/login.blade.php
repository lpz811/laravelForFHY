<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台登陆----发展党员网上纪实系统</title>

    <link href='{{ asset('/styles/themes/css/bootstrap.min.css') }}' rel="stylesheet">

    <!-- core - css -->
    <link href="{{ asset('/styles/themes/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/styles/themes/purple/core.css') }} " id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="{{ asset('/styles/plugins/niceValidator/jquery.validator.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/themes/css/FA/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/styles/js/jquery-1.11.3.min.js') }} "></script>
    <!--[if lte IE 8]>
    <link href="{{ asset('/styles/themes/css/ie7.css') }}" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="{{ asset('/styles/other/html5shiv.min.js') }} "></script>
    <script src="{{ asset('/styles/other/respond.min.js') }} "></script>
    <![endif]-->
    <!-- jquery -->

     <!--[if lte IE 9]>
     <script src="{{ asset('/styles/other/jquery.iframe-transport.js') }} "></script>
     <![endif]-->
    <script src="{{ asset('/styles/js/bjui-all.min.js') }} "></script>
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.js') }}"></script>
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.themes.js') }}"></script>
    <!-- bootstrap plugins -->
    <script src="{{ asset('/styles/plugins/bootstrap.min.js') }}"></script>
    <link href="{{ asset('/styles/login.css') }}" rel="stylesheet">

    <title>发展党员网上纪实系统</title>
</head>

<body style="padding-top:12%;">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="login-panel panel panel-success">
                <div class="bg-primary panel-heading">
                    <h1 class="panel-title text-center lead"> 发展党员网上纪实系统---后台登陆</h1>
                </div>
                <div class="panel-body">
                    <form  role="form" method="POST" action="{{ url('/backend/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                             <span class="input-group-addon"><i class="fa fa-user fa-fw"></i>
                             </span>
                            <input id="email" class="form-control input-nm" type="email" name="email"
                                   value="{{ old('email') }}">

                        </div>
                        @if ($errors->has('email'))
                            <div class="alert alert-danger text-center alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>{{ $errors->first('email') }}</strong>  .
                            </div>
                        @endif

                        <div class="form-group input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i> </span>
                            <input class="form-control input-nm" id="password" type="password" class="form-control"
                                   name="password">
                        </div>
                        @if ($errors->has('password'))
                            {{-- <span class="help-block text-center">
                                     <strong>{{ $errors->first('password') }}</strong>
                             </span>--}}
                            <div class="alert alert-danger text-center alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>{{ $errors->first('password') }}</strong>  .
                            </div>
                        @endif


                        <button type="submit" class="btn btn-lg btn-primary btn-block submitForm">登 陆</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--[if lte IE 8]>
<div id="errorie">
    <div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE9以上版本 <a target="_blank"
                                                 href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;
        强烈建议您更改换浏览器：<a
                href="http://www.googlechromer.cn/" target="_blank">谷歌 Chrome</a></div>
</div>
<![endif]-->
<script type="text/javascript">
    $("form").keydown(function (e) {
        var e = e || event,
                keycode = e.which || e.keyCode;
        if (keycode == 13) {
            $(".submitForm").trigger("click");
        }
    });


    $(function () {
        $(".submitForm").click(function () {
            if ($("#email").val() == '' || $("#password").val() == '') {
                $(this).alertmsg('error', "填写完整后方可登陆");
                return false;
            }
            $(this).submit();
        });
    });

</script>

</body>
</html>