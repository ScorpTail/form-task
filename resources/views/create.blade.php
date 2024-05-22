<!DOCTYPE html>
<html lang="en">
@vite(['resources/sass/app.scss', 'resources\js\bootstrap.js'])

<head>
    <title>Document</title>
</head>

<body class="container p-5">
    <h1 class="p-2">Form task</h1>
    <form class="d-flex gap-3 flex-column" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')


        @error('tt_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text">Дата звіту</label>
            <input type="number" class="form-control" placeholder="Номер TT" name="tt_number"
                value="{{ old('tt_number') }}" required>
        </div>


        @error('report_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text" for="report_date">Дата звіту</label>
            <input type="date" class="form-control" name="report_date" value="{{ old('report_date') }}">
        </div>

        @error('arrest_type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <select class="form-select" name="arrest_type">
            <option selected>Оберіть тип затримання:</option>
            <option value="1">Онлайн</option>
            <option value="2">По намотці</option>
            <option value="3">Затримання по намотці з бази FRP</option>
        </select>



        @error('unpaid_goods')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text">Сума не оплаченого товару</label>
            <input type="number" class="form-control" placeholder="Сума не оплаченого товару" name="unpaid_goods"
                value="{{ old('unpaid_goods') }}" required>
        </div>


        @error('adult_type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <label class="form-label">Вік особи яку було зупинено</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="adult_type" value="1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Неповнолітній
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="adult_type" value="2" id="flexRadioDefault2"
                checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Повнолітній
            </label>
        </div>

        @error('problem_solve_type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <select id="problem_solve_type" class="form-select" name="problem_solve_type">
            <option selected>Оберіть тип затримання:</option>
            <option value="1">Товар повернуто на ТТ</option>
            <option value="2">Товар оплачений в касу</option>
            <option value="3">Товар оплачений в касу при поліції</option>
            <option value="4">Заява в поліцію</option>
            <option value="5">Інше</option>
        </select>

        <div id="problem_solve_text_field" style="{{ old('problem_solve_type') == 5 ? '' : 'display:none' }}">
            @error('problem_solve_text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <label class="input-group-text" for="problem_solve_text">Інша проблема</label>
                <input type="text" class="form-control" id="problem_solve_text" placeholder="Інша проблема"
                    name="problem_solve_text" value="{{ old('problem_solve_text') }}">
            </div>
        </div>

        <script>
            document.getElementById('problem_solve_type').addEventListener('change', function() {
                let problemSolveText = document.getElementById('problem_solve_text_field');
                if (this.value == 5) {
                    problemSolveText.style.display = '';
                } else {
                    problemSolveText.style.display = 'none';
                }
            });

            document.getElementById('problem_solve_type').dispatchEvent(new Event('change'));
        </script>


        @error('theft_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text">Час та дата крадіжки</label>
            <input type="datetime-local" class="form-control" placeholder="Вкажіть час та дату крадіжки"
                name="theft_time" value="{{ old('theft_time') }}" required>
        </div>


        @error('cam_and_registrator_number_1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Камера (та номер реєстратора)"
                name="cam_and_registrator_number_1" value="{{ old('cam_and_registrator_number_1') }}" required>
        </div>


        @error('arrest_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text">Час затримання</label>
            <input type="datetime-local" class="form-control" name="arrest_time" value="{{ old('arrest_time') }}"
                required>
        </div>


        @error('cam_and_registrator_number_2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Камера (та номер реєстратора)"
                name="cam_and_registrator_number_2" value="{{ old('cam_and_registrator_number_2') }}" required>
        </div>


        @error('pay_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text">Час оплати</label>
            <input type="datetime-local" class="form-control" placeholder="Вкажіть час та дату оплати"
                name="pay_time" value="{{ old('pay_time') }}" required>
        </div>

        @error('cam_and_registrator_number_3')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Камера (та номер реєстратора)"
                name="cam_and_registrator_number_3" value="{{ old('cam_and_registrator_number_3') }}" required>
        </div>

        @error('thief_photo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Фото крадія</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="thief_photo">
        </div>

        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>

</body>

</html>
