<div style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:15px;">
        <tr>
            <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background:#ffffff; border-radius:8px; overflow:hidden;">
                    <tr>
                        <td style="background:#f97316; color:#ffffff; padding:18px; text-align:center;">
                            <h2 style="margin:0; font-size:20px;">Thank you for contacting us</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px; color:#333; font-size:14px; line-height:1.7;">
                            <p style="margin:0 0 16px 0;">Hi {{ $data['first_name'] ?? 'there' }},</p>
                            <p style="margin:0 0 16px 0;">We have received your message and our team will get back to you soon.</p>
                            <p style="margin:0 0 16px 0;"><strong>Your message:</strong></p>
                            <p style="margin:0 0 16px 0; color:#555;">{!! nl2br(e($data['message'] ?? 'No message provided.')) !!}</p>
                            <p style="margin:0;">If you need urgent help, you can reply to this email or contact us at <a href="mailto:{{ $supportEmail ?? '' }}" style="color:#f97316; text-decoration:none;">{{ $supportEmail ?? '' }}</a>.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
