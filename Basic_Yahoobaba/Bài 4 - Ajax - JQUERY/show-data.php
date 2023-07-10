<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h1>PHP With Ajax = JQuery</h1>
            </div>
            <div class="col-md-12" id="table-form">
                Họ Và Tên : <input type="text" name="" id="name">
                Điện Thoại : <input type="text" name="" id="phone">
                Email : <input type="text" name="" id="email">
                <input type="submit" class="btn btn-success" value="Lưu" id="save-button">
            </div>
            <div class="col-md-12 m-3">
                <div id="table-load">
                    <input type="button" class="btn btn-primary" id="load-button" value="Load Data">
                </div>
            </div>
            <div class="col-md-12">
                <div id="table-data">

                </div>
            </div>

        </div>

    </div>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(() => {
        let loadTable = () => {
            $.ajax({
                url: "ajax-load.php",
                type: "GET",
                success: (data) => {
                    $("#table-data").html(data);
                }
            });
        }
        loadTable();
        $("#save-button").click((e) => {
            e.preventDefault();
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();

            $.ajax({
                url: "ajax-insert.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email
                },
                success: (data) => {
                    if (data == 1) {
                        loadTable();
                        $()
                    } else {
                        alert('Không thể thêm học sinh');
                    }


                }
            });
        })
        let messager = (type, content) => {

        }
    })
    </script>
</body>

</html>