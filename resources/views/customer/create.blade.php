<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer information</title>
</head>
<body>
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <input type="text" name="id" id="">
        <input type="text" name="customer_id" id="">
        <input type="text" name="customer_name" id="">
        <input type="text" name="customer_mobile" id="">
        <input type="text" name="customer_address" id="">
        <input type="submit" value="Create" >
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>