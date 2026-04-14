
<div style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:15px;">
    <tr>
        <td align="center">

            <!-- MAIN CONTAINER -->
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="max-width:600px; background:#ffffff; border-radius:8px; overflow:hidden;">

                <!-- HEADER -->
                <tr>
                    <td style="background:#f97316; color:#ffffff; padding:18px; text-align:center;">
                        <h2 style="margin:0; font-size:20px;">New Contact Message</h2>
                    </td>
                </tr>

                <!-- CONTENT -->
                <tr>
                    <td style="padding:15px;">

                        <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse; font-size:14px;">

                            <!-- ROW -->
                            <tr style="border-bottom:1px solid #eee;">
                                <td style="font-weight:bold; color:#333; width:40%;">First Name</td>
                                <td style="color:#555; word-break:break-word;">{{ $data['first_name'] ?? '' }}</td>
                            </tr>

                             <tr style="border-bottom:1px solid #eee;">
                                <td style="font-weight:bold; color:#333; width:40%;">Last Name</td>
                                <td style="color:#555; word-break:break-word;">{{ $data['last_name'] ?? '' }}</td>
                            </tr>

                            <tr style="border-bottom:1px solid #eee;">
                                <td style="font-weight:bold; color:#333;">Email</td>
                                <td style="color:#555; word-break:break-word;">{{ $data['email'] ?? '' }}</td>
                            </tr>

                            <tr style="border-bottom:1px solid #eee;">
                                <td style="font-weight:bold; color:#333;">Phone</td>
                                <td style="color:#555;">{{ $data['phone'] ?? '' }}</td>
                            </tr>


                            <!-- MESSAGE -->
                            <tr>
                                <td style="font-weight:bold; color:#333;">Message</td>
                                <td style="color:#555; line-height:1.5; word-break:break-word;">
                                    {{ $data['message'] ?? '' }}
                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>

                <!-- CTA BUTTON -->
                <tr>
                    <td align="center" style="padding:15px;">
                        <a href="mailto:{{ $data['email'] ?? '' }}"
                           style="background:#f97316; color:#ffffff; text-decoration:none; padding:10px 20px; border-radius:5px; display:inline-block; font-size:14px;">
                           Reply to Customer
                        </a>
                    </td>
                </tr>

                <!-- FOOTER -->
                <tr>
                    <td style="background:#fafafa; text-align:center; padding:12px; font-size:12px; color:#999;">
                        © {{ date('Y') }} Your Company. All rights reserved.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</div>