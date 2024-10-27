<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Pendaftaran Lelang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
            font-weight: normal;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Informasi Pendaftaran Lelang</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Produk yang Dilelang</td>
                <td>{{ $lelang->title }}</td>
            </tr>
            <tr>
                <td>Nama Pelelang</td>
                <td>{{ $buyer->nama }}</td>
            </tr>
            <tr>
                <td>Harga Penawaran</td>
                <td>Rp {{ number_format($pelelang->penawaran, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $buyer->email }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $buyer->alamat }}</td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>{{ $buyer->nomor_telepon }}</td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td>{{ $buyer->npwp }}</td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td>{{ $pelelang->created_at->format('d M Y') }}</td>
            </tr>
        </table>
        <p>Terima kasih atas partisipasi Anda dalam lelang kami. Semoga Anda berhasil memenangkan produk yang Anda inginkan!</p>
        <p>Salam hangat,<br>Tim Lelang</p>
        <div class="footer">
            &copy; {{ date('Y') }} Tim Lelang. All rights reserved.
        </div>
    </div>
</body>
</html>
