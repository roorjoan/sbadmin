<form action="{{ route('employees.import.excel') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="input-group mb-3">
        <input type="file" class="form-control" id="file" name="file"
            accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
        <label class="input-group-text text-danger" for="file">*excel only</label>
        @error('file')
            <script>
                alert('{{ $message }}')
            </script>
        @enderror
    </div>
    <hr>
    <button type="submit" class="btn btn-primary justify-content-end">Import</button>
</form>
