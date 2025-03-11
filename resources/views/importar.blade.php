<form action="{{ route('importar') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="archivo_csv" required>
    <button type="submit">Subir CSV</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
