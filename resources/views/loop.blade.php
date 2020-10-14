<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela</title>
</head>
<body>
    <style>
        table, tr, th, td{
            border: solid 1px grey;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: antiquewhite;
        }
    </style>
{{--<table>
        <tr>
            <th>Marka</th>
            <th>Model</th>
            <th>Kolor</th>
        </tr>
        @for ($i = 0; $i < count($car); $i++)
            <tr>
                <td>
                    {{$car [$i]['mark']}}
                </td>
                <td>
                    {{$car [$i]['model']}}
                </td>
                <td>
                    {{$car [$i]['color']}}
                </td>
            </tr>
        @endfor
    </table>--}}

    @foreach ($car as $item)
        <div>
            @if ($loop->first)
                Pierwszy element tablicy<br>
            @endif

            {{$loop->index}}: Marka: {{ $item['mark']}}, model: {{$item['model']}}, kolor {{$item['color'] }}

            @if ($loop->last)
            <br>Ostatni element tablicy
            @endif

        </div>
    @endforeach

</body>
</html>
