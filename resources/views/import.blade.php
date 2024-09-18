<form action="{{ route('import.csv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="your_csv_file" required>
    <button type="submit">Upload CSV</button>
</form>
