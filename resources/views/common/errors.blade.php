<!-- resources/views/common/errors.blade.php -->

@if (count($errors) > 0)
    <!-- フォームのエラーリスト -->
    <div class="alert alert-danger">
        <p>
            <strong>おや？何かがおかしいようです！</strong>
        </p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif