<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-danger text-center">PHP & Javascript Fetch CRUD</h2>
                </div>
                <div class="col-md-12">


                    <button type="button" class="btn btn-primary" onclick="addNewModal()" data-bs-toggle="modal"
                        data-bs-target="#addModal">
                        Thêm
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="add-form">
                                        <table>
                                            <tr>
                                                <td>Tên</td>
                                                <td><input type="text" name="fname" id="fname"></td>
                                            </tr>
                                            <tr>
                                                <td>Họ</td>
                                                <td><input type="text" name="lname" id="lname"></td>
                                            </tr>
                                            <tr>
                                                <td>Thành Phố</td>
                                                <td><input type="text" name="city" id="city"></td>
                                            </tr>
                                            <tr>
                                                <td>Lớp</td>
                                                <td>
                                                    <select id="classlist" name="class">
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <tr>
                                            <td colspan="4"><button type="button" class="btn btn-primary"
                                                    onclick="submit_data()" id="new-submit">Thêm</button>
                                            </td>
                                        </tr>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <table id="table-data" class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Thành Phố</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                    <div id="error-message" class="alert alert-danger text-center"></div>
                    <div id="success-message" class="alert alert-success text-center"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Javascript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <!-- End Js bootstrap -->
    <script src="js/fetch.js"></script>
</body>

</html>