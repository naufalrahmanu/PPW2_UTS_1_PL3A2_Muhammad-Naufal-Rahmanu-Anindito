<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>nama</th>
                <th>nomor_punggung</th>
                <th>posisi</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $pemain)
                <tr>
                    <td>{{ $pemain->nama }}</td>
                    <td>{{ $pemain->nomor_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                    <td>{{ $pemain->created_at }}</td>
                    <td>{{ $pemain->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>