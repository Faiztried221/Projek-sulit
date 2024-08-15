<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KAPAL</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">DATA KAPAL</h1>

        <!-- Notification -->
        <?php
        session_start();
        if (isset($_SESSION['message'])):
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['message']); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php unset($_SESSION['']); ?>
        <?php endif; ?>

        <!-- Form Create -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Tambah Data Kapal</h2>
                <form action="data.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="nama_kapal">Nama Kapal</label>
                        <input type="text" id="nama_kapal" name="nama_kapal" class="form-control" placeholder="Nama kapal" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nahkoda">Nahkoda</label>
                        <input type="text" id="nahkoda" name="nahkoda" class="form-control" placeholder="Nahkoda" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gross_tonage">Gross Tonage</label>
                        <input type="number" id="gross_tonage" name="gross_tonage" class="form-control" placeholder="Gross Tonage" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kebangsaan">Kebangsaan</label>
                        <input type="text" id="kebangsaan" name="kebangsaan" class="form-control" placeholder="Kebangsaan" required>
                    </div>
                    <button type="submit" name="create" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>

        <!-- List Data -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">List Data Kapal</h2>
                <?php
                require_once 'config.php'; // Pastikan config.php berisi koneksi PDO
                require_once 'data.php'; // Menyertakan data.php yang berisi fungsi readAll

                // Mengambil data dari database
                $data1 = readAll($pdo);
                ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kapal</th>
                            <th>Nahkoda</th>
                            <th>Gross Tonage</th>
                            <th>Kebangsaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data1 as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id']); ?></td>
                                <td><?= htmlspecialchars($row['nama_kapal']); ?></td>
                                <td><?= htmlspecialchars($row['nahkoda']); ?></td>
                                <td><?= htmlspecialchars($row['gross_tonage']); ?></td>
                                <td><?= htmlspecialchars($row['kebangsaan']); ?></td>
                                <td>
                                    <a href="edit.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>