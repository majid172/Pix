<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                            style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">
                                    <a href="{{route('home')}}" title="logo" target="_blank">
                                    <img width="100" src="{{asset('/assets/images/logo.png')}}" title="logo" alt="logo">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Dosis', sans-serif;">
                                    <h4 style="color:#1e1e2d; padding:0 35px;">@lang('Contact Us')
                                    </h4>

                                    <p style="text-align: left; padding:0 20px">@lang('Subject'): {{$data['subject']}}</p>
                                    <p style="text-align: left; padding:0 20px; color:#666668; ">{{$data['message']}} <br></p>
                                    <p style="text-align: left; padding:0 20px; color:#666668; ">
                                        @lang('Regards'),
                                        <ul style="list-style: none; text-align: left;">
                                            <li>@lang('Name'): {{$data['name']}}</li>
                                            <li>@lang('Email'): {{$data['email']}}</li>
                                            <li>@lang('Phone Number'): {{$data['phone']}}</li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.pixclipping.com</strong> </p>
                    </td>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>


    <!--/100% body table-->
