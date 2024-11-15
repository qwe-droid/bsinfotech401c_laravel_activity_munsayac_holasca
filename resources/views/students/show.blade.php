<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>{{ $student->name }}</h1>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Age:</strong> {{ $student->age }}</p>

    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>

    <!-- Delete form -->
    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
        @method('DELETE')  <!-- Use Blade directive for DELETE -->
        @csrf  <!-- CSRF token for security -->
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
</div>

</body>
</html>