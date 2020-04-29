<!doctype html>
<html lang="en">

<head>
    <title>Jadwal Sewa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center m-5">Pilih Jadwal Pertandingan</h1>
        <br>
        <div class="input-group mb-3">
            <input type="date" class="form-control" name="date-input" id="search-input">
            <div class="input-group-append">
                <button class="btn btn-primary" id="search-button">Search</button>
            </div>
        </div>
        <br>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jam</th>
                    <th>Tarif</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($jadwal as $jd) :
                ?>
                    <tr>
                        <td scope="row"> <?= $i ?> </td>
                        <td> <?= $jd['jam'] ?> </td>
                        <td> Rp.<?= $jd['tarif'] ?>,- </td>
                        <td>
                            <a href="" class="badge badge-primary pesansekarang">Pesan Sekarang!</a>
                        </td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/jadwal/script.js"></script>
</body>

</html>