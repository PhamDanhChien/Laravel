<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin khách hàng</title>
</head>
<body>
    <h1>Thông tin chi tiết</h1>
    <p>Mã khách hàng: {{ $data->customer_id }}</p>
    <p>Tên khách hàng: {{ $data->customer_name }}</p>
    <p>Số điện thoại: {{ $data->customer_mobile }}</p>
    <p>Địa chỉ: {{ $data->customer_address }}</p>
</body>
</html>