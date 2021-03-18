<?php

    use \Illuminate\Support\Facades\DB;


    $data = DB::select("Select * from customers");
    foreach ($data as $value) {
        foreach((array)$value as $keyCus => $valCus) {
            echo $keyCus . ": " . $valCus . " | ";
        }
        echo "<br>";
    }
?>

<hr>
Phương thức là: {{$res->method()}} <br>
Đường dẫn là: {{$res->fullUrl()}} <br>
Địa chỉ là: {{$res->ip()}} <br>
Dữ liệu là: {{$res->query('name')}} <br>
{{url()->current()}}