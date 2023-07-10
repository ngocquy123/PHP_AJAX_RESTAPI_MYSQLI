<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>

<body>
    <h2>Đăng Nhập</h2>
    <p id="messenger"></p>
    <form action="" method="post" id="formLogin">
        <label for="">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Đăng Nhập">
    </form>
    <!-- Javascript  -->
    <script>
    const formLogin = document.querySelector("#formLogin");
    formLogin.addEventListener("submit", (e) => {
        e.preventDefault();
        let messenger = document.querySelector("#messenger");
        const formtData = new FormData(formLogin);
        if (formtData.get("email") === "" || formtData.get("password") ===
            "") {
            messenger.innerHTML = "Vui lòng điền đầy đủ thông tin";
        } else {
            messenger.innerHTML = "";
            fetch('login.php', {
                method: "POST",
                body: formtData,
            }).then((response) => {
                return response.text();
            }).then((data) => {
                if (data == 'success') {
                    window.location.href = "index.php";
                } else {
                    messenger.innerHTML = "Mật khẩu hoặc tài khoản không chính xác !";
                }
            })
        }


    });
    </script>
</body>

</html>