<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Approved</title>

</head>

<body>
    <img src="{{ asset('/images/'.$details['carImg']) }}" style="width: 200px; height:100px">
    <h1>{{$details['title']}}</h1>
    <h5>Здравейте, <br />
        Вашата резервация за наем на автомобил {{ $details['carBrand'] }} {{ $details['carModel'] }} е одобрена! <br />
        Дата на вземане: {{ $details['startDate'] }} <br />
        Дата на връщане: {{ $details['endDate'] }} <br />
        Сума за плащане: {{ $details['price'] }}лв.<br />
        <br />
    </h5>
    <h4>Екипът на Nitro Rent Ви пожелава безпроблемно и безаварийно шофиране! :)</h4>
</body>

</html>