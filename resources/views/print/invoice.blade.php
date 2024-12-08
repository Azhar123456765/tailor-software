<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <!--[if gte mso 9]>
    <xml>
    <o:OfficeDocumentsettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentsettings>
    </xml>
    <![endif]-->
    <!--[if gt mso 15]>
     <style type="text/css" media="all">
     /* Outlook 2016 Height Fix */
     table, tr, td {border-collapse: collapse;}
     tr { font-size:0px; line-height:0px; border-collapse: collapse; }
     </style>
     <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Invoice Email</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            mso-line-height-rule: exactly;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body,
        table,
        td,
        p,
        a,
        li {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            font-family: 'Lato', Arial, Helvetica, sans-serif;
        }

        table td {
            border-collapse: collapse;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border-color: #FFFFFF;
        }

        p,
        a,
        li,
        td,
        blockquote {
            mso-line-height-rule: exactly;
        }

        p,
        a,
        li,
        td,
        body,
        table,
        blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        img,
        a img {
            border: 0;
            outline: none;
            text-decoration: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        * img[tabindex="0"]+div {
            display: none !important;
        }

        a[href^=tel],
        a[href^=sms],
        a[href^=mailto],
        a[href^=date] {
            color: inherit;
            cursor: default;
            text-decoration: none;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important
        }

        .logo {
            width: 220px !important;
            height: 35px !important;
        }

        .logo-footer {
            width: 129px !important;
            height: 29px !important;
        }

        .table-container .alert-icon {
            width: 120px !important;
            height: 120px !important;
        }

        .table-container .avatar-img {
            width: 64px !important;
            height: 64px !important;
        }

        .x-gmail-data-detectors,
        .x-gmail-data-detectors * {
            border-bottom: 0 !important;
            cursor: default !important
        }

        @media screen {
            body {
                font-family: 'Lato', Arial, Helvetica, sans-serif;
            }
        }

        @media only screen and (max-width: 640px) {
            body {
                margin: 0px !important;
                padding: 0px !important;
            }

            body,
            table,
            td,
            p,
            a,
            li,
            blockquote {
                -webkit-text-size-adjust: none !important;
            }

            .table-main,
            .table-container,
            .social-icons,
            table,
            .table-container td {
                width: 100% !important;
                min-width: 100% !important;
                margin: 0 !important;
                float: none !important;
            }

            .table-container img {
                width: 100% !important;
                max-width: 100% !important;
                display: block;
                height: auto !important;
            }

            .table-container a {
                width: 50% !important;
                max-width: 100% !important;
            }

            .table-container .logo {
                width: 200px !important;
                height: 30px !important;
            }

            .table-container .alert-icon {
                width: 120px !important;
                height: 120px !important;
            }

            .social-icons {
                float: none !important;
                margin-left: auto !important;
                margin-right: auto !important;
                width: 220px !important;
                max-width: 220px !important;
                min-width: 220px !important;
                background: #383e56 !important;
            }

            .social-icons td {
                width: auto !important;
                min-width: 1% !important;
                margin: 0 !important;
                float: none !important;
                text-align: center;
            }

            .social-icons td a {
                width: auto !important;
                max-width: 100% !important;
                font-size: 10px !important;
            }

            .mobile-title {
                font-size: 34px !important;
            }

            .table-container .logo-footer {
                width: 129px !important;
                height: 29px !important;
                margin-bottom: 20px !important;
            }

            .block-img {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }

            .info-block {
                padding: 0 !important;
            }

            .video-img {
                width: 100% !important;
                height: auto !important;
            }

            .post-footer-container td {
                text-align: center !important;
                padding: 0 40px 0 40px !important;
            }
        }







        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* transform: scale(0.75); */
            /* margin: 50px auto !important; */
            margin: 0;
            position: relative;
        }

        .back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 12px;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .back-button:hover {
            background-color: #45a049;
        }

        .print-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .print-button:hover {
            background-color: #45a049;
        }

        .page-inner {
            width: 100%;
            height: calc(100% - 10px);
            /* Adjust the height to accommodate the back button */
        }
    </style>
</head>

<body
    style="padding: 0; margin: 0; -webkit-font-smoothing:antialiased; background-color:#f1f1f1; -webkit-text-size-adjust:none;">
    <!--Main Parent Table -->
    <div id="invoice">
        <table width="100%" border="0" cellpadding="0" direction="ltr" bgcolor="#f1f1f1" cellspacing="0"
            role="presentation" style="width: 640px; min-width: 640px; margin:0 auto 0 auto;">
            <tbody>
                <tr>
                    <td>
                        <!--Content Starts Here -->
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#f1f1f1">
                            <tr>
                                <td height="30" style="line-height:30px;min-height:30px;">
                                </td>
                            </tr>
                        </table>
                        <!--Top Header Starts Here -->
                        <table border="0" bgcolor="#383e56" cellpadding="0" cellspacing="0" width="640"
                            role="presentation" width="640" style="width: 640px; min-width: 640px;" align="center"
                            class="table-container ">
                            <tbody>
                                <tr width="640" style="width: 640px; min-width: 640px; " align="center">
                                    <td>
                                        <table cellpadding="0" cellspacing="0" border="0" align="center"
                                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                            bgcolor="#383e56">
                                            <tr>
                                                <td height="35" style="line-height:35px;min-height:35px;">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--Top Header Ends Here -->
                        <!--Welcome  Section Ends Here -->
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tr>
                                <td height="60" style="line-height:60px;min-height:60px;">
                                </td>
                            </tr>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="640"
                            role="presentation" bgcolor="#FFFFFF" class="table-container ">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <img src="{{ asset('assets/img/logo.jpg') }}" width="250px"
                                            style="width: 411px !important;
    height: auto  !important;
}"
                                            alt="Section Image" width="120" height="120" class="alert-icon">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tr>
                                <td height="20" style="line-height:20px;min-height:20px;">
                                </td>
                            </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tbody>
                                <tr>
                                    <td align="center"
                                        style="color:#45535C;padding:20px 40px 0 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:800;font-size:34px;-webkit-font-smoothing:antialiased;line-height:1.2;"
                                        class="table-container mobile-title">
                                        {{ $customer->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="color:#45535C;padding:20px 40px 0 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:800;font-size:18px;-webkit-font-smoothing:antialiased;line-height:1.2;"
                                        class="table-container mobile-title">
                                        Here’s what you purchased
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="color:#5a5a5a;padding:20px 40px 0 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:normal;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;"
                                        class="table-container">
                                        {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tr>
                                <td height="60" style="line-height:60px;min-height:60px;">
                                </td>
                            </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tbody>
                                <tr>
                                    <table cellpadding="0" cellspacing="0" border="0" align="center"
                                        width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                        bgcolor="#FFFFFF">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                                <td bgcolor="#f9f9f9" align="left"
                                                    style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    Description #
                                                </td>
                                                <td bgcolor="#f9f9f9" align="right"
                                                    style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    Amount
                                                </td>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" border="0" align="center"
                                        width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                        bgcolor="#FFFFFF">
                                        <tbody>
                                            @for ($i = 0; $i < count($data['item']); $i++)
                                                <tr>
                                                    <td bgcolor="#FFF" width="40" align="left"
                                                        style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    </td>
                                                    <td bgcolor="#FFFFFF" align="left"
                                                        style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:normal;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                        {{ $data['item']["$i"] }}
                                                    </td>
                                                    <td bgcolor="#FFFFFF" align="right"
                                                        style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                        {{ $data['amount']["$i"] }}
                                                    </td>
                                                    <td bgcolor="#FFF" width="40" align="left"
                                                        style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" border="0" align="center"
                                        width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                        bgcolor="#FFFFFF">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                                <td bgcolor="#FFFFFF" align="left"
                                                    style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:normal;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    Discount(%)
                                                </td>
                                                <td bgcolor="#FFFFFF" align="right"
                                                    style="color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                    -{{ $data['discount'] }}
                                                </td>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" border="0" align="center"
                                        width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                        bgcolor="#FFFFFF">
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" border="0" align="center"
                                        width="640" style="width: 640px; min-width: 640px;" role="presentation"
                                        bgcolor="#FFFFFF">
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                                <td bgcolor="#FFFFFF" align="left"
                                                    style="border-top:2px solid #CCCCCC;border-bottom:2px solid #CCCCCC;color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;"
                                                    class="table-container">
                                                    TOTAL
                                                </td>
                                                <td bgcolor="#FFFFFF" align="right"
                                                    style="border-top:2px solid #CCCCCC;border-bottom:2px solid #CCCCCC;color:#5a5a5a;padding:10px 40px 10px 40px;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:16px;-webkit-font-smoothing:antialiased;line-height:1.4;"
                                                    class="table-container">
                                                    {{ $data['net_amount'] }}
                                                </td>
                                                <td bgcolor="#FFF" width="40" align="left"
                                                    style="color:#5a5a5a;padding:10px 0 10px 0;font-family: 'Lato', Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;-webkit-font-smoothing:antialiased;line-height:1.4;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tr>
                                <td height="60" style="line-height:60px;min-height:60px;">
                                </td>
                            </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" bgcolor="#FFFFFF" role="presentation"
                            class="table-container ">
                            <tbody>
                                <tr>
                                    <td style="padding:0 40px;">
                                        <table cellpadding="0" cellspacing="0" border="0" align="left"
                                            width="270" role="presentation" class="table-container">
                                            <tbody>
                                                <tr>
                                                    <td height="20" style="line-height:20px;min-height:20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="color: #111111; font-family: 'Lato', Arial, Helvetica, sans-serif; font-size: 16px; line-height: 16px;font-weight:bold;">
                                                        Remarks:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="10" style="line-height:10px;min-height:10px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="color: #111111; font-family: 'Lato', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 14px;font-weight:normal;">
                                                        {{ $data['remarks'] }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" align="right"
                                            width="270" role="presentation" class="table-container">
                                            <tbody>
                                                <tr>
                                                    <td height="20" style="line-height:20px;min-height:20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="color: #111111; font-family: 'Lato', Arial, Helvetica, sans-serif; font-size: 16px; line-height: 16px;font-weight:bold;">
                                                        Date
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="10" style="line-height:10px;min-height:10px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="color: #111111; font-family: 'Lato', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 14px;font-weight:normal;">
                                                        {{ $data['date'] }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="640"
                            style="width: 640px; min-width: 640px;" role="presentation" bgcolor="#FFFFFF">
                            <tr>
                                <td height="60" style="line-height:60px;min-height:60px;">
                                </td>
                            </tr>
                        </table>
                        <table bgcolor="#383e56" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            <tr>
                                <td height="35" style="line-height:35px;min-height:35px;">
                                </td>
                            </tr>
                        </table>
                        <table bgcolor="#383e56" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            <tr>
                                <td height="35" style="line-height:35px;min-height:35px;">
                                </td>
                            </tr>
                        </table>
                        <table cellpadding="0" width="640" style="width: 640px; min-width: 640px;"
                            cellspacing="0" border="0" role="presentation" align="center" bgcolor="#383e56">
                            <tbody>
                                <tr>
                                    <td>
                                        <table cellpadding="0" width="220" cellspacing="0" border="0"
                                            role="presentation" align="center" bgcolor="#383e56">
                                            <tbody>
                                                <tr class="social-icons">
                                                    {{-- <td style="padding:0 10px 0 10px;">
						<a href="https://www.MailerSend.com/" target="_blank"><img src="assets/social-facebook-white.png" alt="Social Icons" width="30" height="30" class="social-icon"></a>
					</td>
					<td style="padding:0 10px 0 10px;;">
						<a href="https://www.MailerSend.com/" target="_blank"><img src="assets/social-twitter-white.png" alt="Social Icons" width="30" height="30" class="social-icon"></a>
					</td>
					<td style="padding:0 10px 0 10px;">
						<a href="https://www.MailerSend.com/" target="_blank"><img src="assets/social-linkedin-white.png" alt="Social Icons" width="30" height="30" class="social-icon"></a>
					</td>
					<td style="padding:0 10px 0 10px;">
						<a href="https://www.MailerSend.com/" target="_blank"><img src="assets/social-instagram-white.png" alt="Social Icons" width="30" height="30" class="social-icon"></a>
					</td> --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table bgcolor="#383e56" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                        </table>
                        <table bgcolor="#383e56" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            {{-- <tr>
			<td style="color:#FFFFFF; font-size:14px; line-height:22px; text-align:center;border:none;font-weight:bold;">
				 Street Address, Town/City, State ZIP <br>
				 © 2021 Your Company, Inc. <br>
				<br>
				 Update your email preferences <a href="https://www.MailerSend.com/" target="_blank" class="link t-grey-1" style="text-decoration:underline; color:#FFFFFF;">here</a>.
			</td>
		</tr> --}}
                        </table>
                        <table bgcolor="#383e56" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            <tr>
                                <td height="60" style="line-height:60px;min-height:60px;">
                                </td>
                            </tr>
                        </table>
                        <table bgcolor="#CCCCCC" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            <tr>
                                <td height="1" style="line-height:1px;min-height:1px;">
                                </td>
                            </tr>
                        </table>
                        <table bgcolor="#f1f1f1" cellpadding="0" cellspacing="0" border="0" align="center"
                            width="640" style="width: 640px; min-width: 640px;" role="presentation"
                            class="table-container ">
                            <tr>
                                <td height="40" style="line-height:40px;min-height:40px;">
                                </td>
                            </tr>
                        </table>
                        <table align="center" border="0" bgcolor="#f1f1f1" cellpadding="0" cellspacing="0"
                            width="640" role="presentation" class="table-container ">
                        </table>
                        <!--Bottom Section Ends Here -->
                        <!--Main Td  Ends Here -->
                    </td>
                </tr>
            </tbody>
            <!--Main Parent Table Ends Here -->
        </table>
    </div>
    <script>
        function printInvoice() {
            var div = document.getElementById('invoice');

            if (!div) {
                console.error("Div not found");
                return;
            }

            // Save the current page content
            var originalContent = document.body.innerHTML;

            // Clear the body and append only the content of the div to print
            document.body.innerHTML = div.innerHTML;

            // Trigger the print dialog
            window.print();

            // Restore the original content after printing
            document.body.innerHTML = originalContent;
        }
    </script>

</body>

</html>
