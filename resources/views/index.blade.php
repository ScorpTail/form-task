<!DOCTYPE html>
<html lang="en">
@vite(['resources/sass/app.scss', 'resources\js\bootstrap.js'])

<head>
    <title>Document</title>
</head>

<body class="container p-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер ТТ</th>
                <th scope="col">Дата звіту</th>
                <th scope="col">Тип затримання</th>
                <th scope="col">Сума неоплаченого товару (загальна сума затримання)</th>
                <th scope="col">Вік особи яку було зупинено</th>
                <th scope="col">Як було вирішено проблему</th>
                <th scope="col">Час крадіжки</th>
                <th scope="col">Камера (та номер реєстартора)</th>
                <th scope="col">Час затримання</th>
                <th scope="col">Камера (та номер реєстартора)</th>
                <th scope="col">Час оплати товару</th>
                <th scope="col">Камера (та номер реєстартора)</th>
                <th scope="col">Фото крадія</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $form->tt_number }}</td>
                    <td>{{ $form->report_date }}</td>
                    <td>{{ $form->arrest_type }}</td>
                    <td>{{ $form->unpaid_goods }}</td>
                    <td>{{ $form->adult_type }}</td>
                    <td>{{ $form->problem_solve_type }}</td>
                    <td>{{ $form->theft_time }}</td>
                    <td>{{ $form->cam_and_registrator_number_1 }}</td>
                    <td>{{ $form->arrest_time }}</td>
                    <td>{{ $form->cam_and_registrator_number_2 }}</td>
                    <td>{{ $form->pay_time }}</td>
                    <td>{{ $form->cam_and_registrator_number_3 }}</td>
                    <td> <img class="w-100" src="{{ Storage::url($form->thief_photo) }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
