@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">Gözlənilməyən xəta baş verdi!</div>
@endif
@if(session('success'))
    <div class="alert alert-success">Uğurla nəticələndi!</div>
@endif
@if(session('parol'))
    <div class="alert alert-danger">Şifrə və ya email yanlışdır!</div>
@endif
