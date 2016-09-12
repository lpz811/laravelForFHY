<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>后台登陆----发展党员网上纪实系统</title>

    <link href='{{ asset('/styles/themes/css/bootstrap.min.css') }}' rel="stylesheet">

    <!-- core - css -->
    <link href="{{ asset('/styles/themes/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/styles/themes/blue/core.css') }} " id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="{{ asset('/styles/plugins/kindeditor_4.1.10/themes/default/default.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }} " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/niceValidator/jquery.validator.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/bootstrapSelect/bootstrap-select.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/themes/css/FA/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--[if lte IE 7]>
    <link href="{{ asset('/styles/themes/css/ie7.css') }}" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
    <script src="{{ asset('/styles/other/html5shiv.min.js') }} "></script>
    <script src="{{ asset('/styles/other/respond.min.js') }} "></script>
    <![endif]-->
    <!-- jquery -->
    <script src="{{ asset('/styles/js/jquery-1.11.3.min.js') }} "></script>
    <script src="{{ asset('/styles/js/jquery.cookie.js') }} "></script>
    <!--[if lte IE 9]>
    <script src="{{ asset('/styles/other/jquery.iframe-transport.js') }} "></script>
    <![endif]-->
    <!-- BJUI.all 分模块压缩版 -->
    <script src="{{ asset('/styles/js/bjui-all.min.js') }} "></script>

    <!-- plugins -->
    <!-- swfupload for uploadify && kindeditor -->
    <script src="{{ asset('/styles/plugins/swfupload/swfupload.js') }} "></script>
    <!-- kindeditor -->
    <script src="{{ asset('/styles/plugins/kindeditor_4.1.10/kindeditor-all.min.js') }} "></script>
    <script src="{{ asset('/styles/plugins/kindeditor_4.1.10/lang/zh_CN.js') }}  "></script>
    <!-- colorpicker -->
    <script src="{{ asset('/styles/plugins/colorpicker/js/bootstrap-colorpicker.min.js') }} "></script>
    <!-- ztree -->
    <script src="{{ asset('/styles/plugins/ztree/jquery.ztree.all-3.5.js') }} "></script>
    <!-- nice validate -->
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.js') }} "></script>
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.themes.js') }} "></script>
    <!-- bootstrap plugins -->
    <script src="{{ asset('/styles/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/styles/plugins/bootstrapSelect/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/styles/plugins/bootstrapSelect/defaults-zh_CN.min.js') }} "></script>
    <!-- icheck -->
    <script src="{{ asset('/styles/plugins/icheck/icheck.min.js') }} "></script>
    <!-- dragsort -->
    <script src="{{ asset('/styles/plugins/dragsort/jquery.dragsort-0.5.1.min.js') }} "></script>
    <!-- HighCharts -->
    <script src="{{ asset('/styles/plugins/highcharts/highcharts.js') }} "></script>
    <script src="{{ asset('/styles/plugins/highcharts/highcharts-3d.js') }} "></script>
    <script src="{{ asset('/styles/plugins/highcharts/themes/gray.js') }} "></script>
    <!-- ECharts -->
    <script src="{{ asset('/styles/plugins/echarts/echarts.js') }}"></script>
    <!-- other plugins -->
    <script src="{{ asset('/styles/plugins/other/jquery.autosize.js') }}"></script>
    <link href="{{ asset('/styles/plugins/uploadify/css/uploadify.css') }} " rel="stylesheet">
    <script src="{{ asset('/styles/plugins/uploadify/scripts/jquery.uploadify.min.js') }}  "></script>
    <script src="{{ asset('/styles/plugins/download/jquery.fileDownload.js') }} "></script>




    <style type="text/css">
        /* 修复bootstrap样式被style.css覆盖问题开始 */
        .panel-default {
            border-color: #ddd;
        }

        .panel-default > .panel-heading {
            border-color: #ddd;
        }

        .form-group {
            margin-bottom: 15px;
        }

        /* 修复bootstrap样式被style.css覆盖问题结束 */
        .container {
            overflow: hidden;
            -webkit-animation: bounceIn 600ms linear;
            -moz-animation: bounceIn 600ms linear;
            -o-animation: bounceIn 600ms linear;
            animation: bounceIn 600ms linear;
        }

        /*登录框动画*/

        @-webkit-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(.3);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
            }
            70% {
                -webkit-transform: scale(.9);
            }
            100% {
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes bounceIn {
            0% {
                opacity: 0;
                -moz-transform: scale(.3);
            }
            50% {
                opacity: 1;
                -moz-transform: scale(1.05);
            }
            70% {
                -moz-transform: scale(.9);
            }
            100% {
                -moz-transform: scale(1);
            }
        }

        @-o-keyframes bounceIn {
            0% {
                opacity: 0;
                -o-transform: scale(.3);
            }
            50% {
                opacity: 1;
                -o-transform: scale(1.05);
            }
            70% {
                -o-transform: scale(.9);
            }
            100% {
                -o-transform: scale(1);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(.9);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
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
                                   {{-- <span class="help-block  text-center">
                                                 <strong>&nbsp;&nbsp;{{ $errors->first('email') }}</strong>
                                    </span>--}}
                            <div class="alert alert-danger text-center alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>{{ $errors->first('email') }}</strong>  .
                            </div>
                        @endif

                        <div class="form-group input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i>
                                </span>
                            {{-- <input class="form-control input-nm" name="password" id="password" type="password" placeholder="密码">--}}
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