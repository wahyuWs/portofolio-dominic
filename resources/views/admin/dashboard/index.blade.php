<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            margin: 80px;
        }

        header {
            background-color: #007bff;
            padding: 10px 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .header-left h1 {
            margin: 0;
            color: #fff;
            padding-left: 20px;
            /* Untuk memberikan sedikit padding di kiri */
        }

        .header-right {
            margin-right: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            /* Untuk memberikan sedikit margin di kanan */
        }

        .header-right a {
            text-decoration: none;
            background-color: #fff;
            color: #007bff;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .header-right a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .logout-button {
            margin-top: 20px;
        }

        .logout-button a {
            text-decoration: none;
            background-color: #fff;
            color: #007bff;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .logout-button a:hover {
            background-color: #007bff;
            color: #fff;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            text-align: left;
            background-size: cover;
            background-position: center;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        .card-content {
            flex-grow: 1;
        }

        h2 {
            margin: 10px 0;
            color: #fff;
        }

        p {
            color: #fff;
        }

        a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-left">
            <h1>Dashboard</h1>
        </div>
        <div class="header-right">
            <a href="#">Logout</a>
        </div>
    </header>

    <div class="container">
        <h1>Menu Admin</h1>
        <div class="card" style="background-image: url('images/bg-portofolio.avif');">
            <div class="card-content">
                <h2>Portofolio</h2>
                <p>Tambahkan portofolio dibawah.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalportofolio">
                    Insert
                </button>
            </div>
        </div>
        <div class="card" style="background-image: url('images/bg-about.avif');">
            <div class="card-content">
                <h2>About</h2>
                <p>Tambahkan About.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalabout">
                    Insert
                </button>
            </div>
        </div>
        <div class="card" style="background-image: url('images/bg-services.avif');">
            <div class="card-content">
                <h2>Services</h2>
                <p>Tambahkan Jasa.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalservices">
                    Insert
                </button>
            </div>
        </div>
    </div>

    //modal portofolio
    <div class="modal fade" id="modalportofolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Portofolio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nama Project</label>
                        <input type="text" class="form-control rounded" name="nama_project">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Kategori
                            Project</label>
                        <select class="form-select rounded" name="kategori_project">
                            <option value="" selected>Pilih Kategori</option>
                            <option value="Biasa">Web Development</option>
                            <option value="Popular">Android Development</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Image Project</label>
                        <input name="image_project"
                            class="appearance-none block w-full bg-dark text-light border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="file">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    //modal about
    <div class="modal fade" id="modalabout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">About</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" name="about" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">About you</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    //modal services
    <div class="modal fade" id="modalservices" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Services</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Layanan</label>
                        <input type="text" class="form-control rounded" name="layanan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Logo</label>
                        <input name="logo"
                            class="appearance-none block w-full bg-dark text-light border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="file">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="description" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">description</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
