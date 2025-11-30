<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="imagem" required>
    <button type="submit">Enviar</button>
</form>

@if(session('arquivo'))
    <p>Arquivo salvo em:</p>
    <img src="{{ session('arquivo') }}" width="200">
@endif