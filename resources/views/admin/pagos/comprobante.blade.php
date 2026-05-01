<html>

<head>
    <meta charset="UTF-8">
    <title>Comprobante #{{ $pago->id }}</title>
    <style>
        /* Reset y configuración base*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 80mm;
            min-height: 100mm;
            font-family: 'Arial Narrow', sans-serif;
            font-size: 9pt;
            padding: 2mm;
            margin: 0 auto;
        }

        /* Encabezado */
        .header {
            text-align: center;
            margin-bottom: 2mm;
            padding-bottom: 2mm;
            border-bottom: 1px dashed #000;
        }

        .logo {
            max-width: 50mm;
            max-height: 15mm;
            margin: 0 auto 1mm;
            display: block;
        }

        .company-name {
            font-weight: bold;
            font-size: 1pt;
            margin-bottom: 1mm;
        }

        /* Datos de factura */
        .invoice-info {
            text-align: center;
            margin: 2mm 0;
        }

        .invoice-number {
            font-weight: bold;
            font-size: 11pt;
        }

        /* Tabla de productos */
        .product-table {
            width: 95%;
            border-collapse: collapse;
            margin: 2mm 0;
            font-size: 8pt;
        }

        .product-table th {
            padding: 1mm;
            border-bottom: 1px solid #000;
            text-align: left;
        }

        .product-table td {
            padding: 1mm;
            border-bottom: 1px dashed #ccc;
            vertical-align: top;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        /* Totales */

        .totals {
            margin: 3mm 0;
            font-size: 9pt;
        }

        .total-row {
            font-weight: bold;
            border-top: 1px solid #000;
            border-bottom: 2px double #000;
        }

        /* Pie de pagina */

        .footer {
            margin-top: 3mm;
            padding-top: 2mm;
            border-top: 1px dashed #000;
            text-align: center;
            font-size: 8pt;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <div class="header">
        <br>
        {{ $ajuste->nombre }}<br>
        {{ $ajuste->direccion }}<br>
        {{ $ajuste->telefono }}<br>
        {{ $ajuste->email }}<br>
        <br>
    </div>

    <!-- Información de factura-->
    <div class="invoice-info">
        <div class="invoice-number">COMPROBANTE DE PAGO #{{ $numero_pago }}</div>
    </div>

    <br>
    <!-- Datos del cliente -->
    <div style="text-align: left;">
        <strong>DATOS DEL CLIENTE:</strong><br><br>
        <b>Documento: </b> {{ $cliente->tipo_documento . ' ' . $cliente->numero_documento }}<br>
        <b>Señor(es): </b> {{ $cliente->apellidos . ' ' . $cliente->nombres }}<br>
        <b>Celular: </b> {{ $cliente->celular }}<br>
    </div>

    <br><br>

    <!-- Datos de la cuota -->
    <div style="text-align: left;">
        <strong>DATOS DE LA CUOTA:</strong><br><br>
        <b>Número de cuota: </b> {{ $pago->referencia_pago }}<br>
        <b>Fecha programada: </b> {{ $fecha_pago_programado }}<br>
        <b>Monto de la cuota: </b> {{ $ajuste->divisa . ' ' . number_format($pago->monto_cuota, 2, '.', ',') }}<br>
        <div style="height: 10px"></div>

        <!-- Datos del pago parcial -->
        @if ($pago->metodo_pago === 'Pago parcial')
        <br><br>
        <strong>PAGOS PARCIALES REALIZADOS:</strong><br><br>
        @foreach ($pago->pagosParciales as $pago_parcial)
        <b>Fecha pago parcial: </b> {{ \Carbon\Carbon::parse($pago_parcial->fecha_pago)->format('d/m/Y') }}<br>
        <b>Monto pagado: </b>
            {{ $ajuste->divisa . ' ' . number_format($pago_parcial->monto_pagado, 2, '.', ',') }}<br>
            <div style="height: 10px"></div>
        @endforeach
            <div style="height: 10px"></div>
        @endif

        <!-- Datos del pago -->
        <strong>DATOS DEL PAGO:</strong><br><br>
        <b>Fecha cancelado: </b>{{ $fecha_cancelado }}<br>
        <b>Metodo de pago: </b>{{ $pago->metodo_pago }}<br>

        @php

            $montoCuota = $pago->monto_cuota;
            $monto_total_pagado = $pago->monto_total_pagado;
            if ($monto_total_pagado !== $montoCuota) {
                $tieneMora = true;
            } else {
                $tieneMora = false;
            }

        @endphp

        @if ($tieneMora)
            <b>MORA:</b>
            {{ $ajuste->divisa . ' ' . number_format($monto_total_pagado - $montoCuota, 2, ',', ',') }}
            <br>
        @endif

        <div style="height: 5px"></div>
        <b>MONTO TOTAL PAGADO:</b>
        {{ $ajuste->divisa . ' ' . number_format($tieneMora ? $monto_total_pagado : $montoCuota, 2, ',', ',') }}
        <br>

        <br><br>

        <!-- Pie de página -->
        <div class="footer">
            <b>GRACIAS POR SU PREFERENCIA</b><br>
            <small>
                Atendido por el Usuario: {{ Auth::user()->name }} <br>
                Impreso en: Fecha y Hora:
                {{ \Carbon\Carbon::now()->timezone('-04:00')->format('d/m/Y H:i') }}<br><br>
            </small>

        </div>
    </div>
</body>

</html>
