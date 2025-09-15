<!DOCTYPE html>
<html>
<head>
    <title>Danh sách trái cây</title>
</head>
<body>
    <h1>Danh sách trái cây (ORM)</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Tên trái cây</th>
            <th>Giá (VNĐ)</th>
        </tr>
        @foreach($fruits as $fruit)
            <tr>
                <td>{{ $fruit->id }}</td>
                <td>{{ $fruit->name }}</td>
                <td>{{ number_format($fruit->price, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
