<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordatorio de cuotas vencidas</title>
</head>

<body style="margin:0;padding:0;background:#f3f4f6;font-family:Arial,sans-serif;color:#1f2937;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f3f4f6;padding:24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="620" cellspacing="0" cellpadding="0"
                    style="max-width:620px;width:100%;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:#1d4ed8;padding:20px 24px;color:#ffffff;">
                            <h1 style="margin:0;font-size:20px;line-height:1.2;">Recordatorio de pago</h1>
                            <p style="margin:6px 0 0 0;font-size:14px;opacity:0.95;">Cuotas vencidas de su préstamo</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:24px;">
                            <p style="margin:0 0 14px 0;font-size:15px;">Estimado/a
                                <strong>{{ $resumen['cliente']->nombres }}
                                    {{ $resumen['cliente']->apellidos }}</strong>,
                            </p>

                            <p style="margin:0 0 16px 0;font-size:14px;line-height:1.6;">
                                Le informamos que, a la fecha {{ $resumen['fecha_actual'] }}, su cuenta registra cuotas
                                vencidas.
                                Le solicitamos regularizar el pago para evitar recargos adicionales.
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
                                style="border-collapse:collapse;margin:6px 0 18px 0;">
                                <tr>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;background:#f9fafb;font-size:13px;">
                                        Cuotas vencidas</td>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;text-align:right;font-size:13px;font-weight:700;">
                                        {{ $resumen['cuotas_vencidas_total'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;background:#f9fafb;font-size:13px;">
                                        Monto vencido total</td>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;text-align:right;font-size:13px;font-weight:700;color:#b91c1c;">
                                        {{ $resumen['divisa'] }} {{ number_format($resumen['monto_vencido_total'], 2) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;background:#f9fafb;font-size:13px;">
                                        Primer vencimiento</td>
                                    <td
                                        style="padding:10px;border:1px solid #e5e7eb;text-align:right;font-size:13px;font-weight:700;">
                                        {{ $resumen['primer_vencimiento_formateado'] }}
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0 0 14px 0;font-size:14px;line-height:1.6;">
                                Si ya realizó el pago, por favor ignore este mensaje. En caso contrario, comuníquese con
                                nuestra oficina para brindarle asistencia inmediata.
                            </p>

                            <p style="margin:18px 0 0 0;font-size:14px;">Atentamente,<br><strong>Área de
                                    cobranzas</strong></p>
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background:#f9fafb;padding:14px 24px;font-size:12px;color:#6b7280;border-top:1px solid #e5e7eb;">
                            Este es un mensaje automático de notificación de cuotas vencidas.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
