<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Surat Izin Mengemudi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <h2>Form Surat Izin Mengemudi</h2>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <div class="container">
                <form action="data.php" method="post" class="form-bg" enctype="multipart/form-data">
                    <div class="form-title">
                        <h2>Fill this form</h2>
                    </div>

                    <div class="form-fill">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-fill">
                        <label for="address">Alamat</label>
                        <input type="text" id="address" name="address" required>
                    </div>

                    <div class="form-fill">
                        <label for="birthPlace">Tempat lahir</label>
                        <input type="text" id="birthPlace" name="birthPlace" required>
                    </div>

                    <div class="form-fill">
                        <label for="birthDate">Tanggal lahir</label>
                        <input type="date" id="birthDate" name="birthDate" required>
                    </div>

                    <div class="form-fill">
                        <label for="height">Tinggi (cm)</label>
                        <input type="number" id="height" name="height" required>
                    </div>

                    <div class="form-fill">
                        <label for="sex">Jenis Kelamin</label>
                        <input type="text" id="sex" name="sex" required>
                    </div>

                    <div class="form-fill">
                        <label for="work">Pekerjaan</label>
                        <input type="text" id="work" name="work" required>
                    </div>

                    <div class="form-select">
                        <label for="simType">Jenis SIM</label>
                        <select name="simType" id="simType">
                            <option value="A">A</option>
                            <option value="A Khusus">A Khusus</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <input type="submit" class="form-btn" name="submit">

                </form>
            </div>
        </div>
    </main>

</body>
</html>
