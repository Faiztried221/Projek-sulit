<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div class="container mt-5">
        <h1 class="mb-4">CRUD PHP</h1>

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
                    <div class="form-group">
                        <label for="nama_kapal">Nama Kapal</label>
                        <input type="text" id="nama_kapal" name="Nama Kapal" class="form-control" placeholder="Nama kapal" required>
                    </div>
                    <div class="form-group">
                        <label for="Nahkoda">Nahkoda</label>
                        <input type="Nahkoda" id="nahkoda" name="Nahkoda" class="form-control" placeholder="Nahkoda" required>
                    </div>
                    <div>
                    <label for="gross_tonage">Gross Tonage</label>
                        <input type="gross_tonage" id="gross_tonage" name="gross tonage" class="form-control" placeholder="gross tonage" required>  
                    </div>
                    <div>
                    <label for="Kebangsaan">Kebangsaan</label>
                        <input type="Kebangsaan" id="Kebangsaan" name="Kebangsaan" class="form-control" placeholder="kebangsaan" required>
                    </div>
                    <button type="submit" name="tambahkan" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>

        <!-- List Data -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">List Users</h2>
                <?php
                require_once 'data.php';
                $users = readAll($pdo);
                ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
</body>
    </html>