<!-- resources/views/upload_excel.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel</title>
</head>
<body>
    <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Import</button>
    </form>
</body>
</html>
