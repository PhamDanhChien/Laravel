<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer information</title>
</head>
<body>
    <form action="{{ route('customer.update', $data->id) }}" method="POST">
        @method('PUT')
        
        @csrf
        <input type="text" name="id" id="" value="{{$data->id}}">
        <input type="text" name="customer_id" id="" value="{{$data->customer_id}}">
        <input type="text" name="customer_name" id="" value="{{$data->customer_name}}">
        <input type="text" name="customer_mobile" id="" value="{{$data->customer_mobile}}">
        <input type="text" name="customer_address" id="" value="{{$data->customer_address}}">
        <input type="submit" value="Done" >
    </form>
</body>
</html>