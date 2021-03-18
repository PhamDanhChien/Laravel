<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng</title>

    <link rel="stylesheet" href="{{asset('../css/home.css')}}" />

</head>
<body>
    <h1>Danh sách khách hàng</h1>
    <a href="customer/create">Create customer</a>
    <br> 
    <table id='table-customer' border='1'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $customer)
                <tr>
                    @foreach ($customer as $value)
                        <td>{{$value}}</td>
                    @endforeach
                    
                    <td>
                        <a href="{{ route('customer.edit', $customer['id']) }}">Edit</a> |
                        <a href="{{ route('customer.index') }}" onclick="event.preventDefault(); document.getElementById('del-form-' + {{ $customer['id'] }} ).submit();">Delete</a>
                    </td>
                    <form id="del-form-{{ $customer['id'] }}" action="{{ route('customer.destroy', $customer['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>