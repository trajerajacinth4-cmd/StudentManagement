<!DOCTYPE html>
<html>
<head>

    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Add Student</h2>

    <form action="<?php echo e(route('students.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input
                type="text"
                name="course"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input
                type="number"
                name="age"
                class="form-control"
                required>
        </div>

        <button class="btn btn-primary">
            Save Student
        </button>

    </form>

</div>

</body>
</html><?php /**PATH C:\laragon\www\StudentManagement\resources\views/students/create.blade.php ENDPATH**/ ?>