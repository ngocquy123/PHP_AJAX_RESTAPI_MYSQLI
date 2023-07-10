<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>

<body>
    <h2>Đăng ký</h2>
    <p id="messenger"></p>
    <form action="" method="post" id="formRegister">
        <label for="">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Đăng Ký">
    </form>
    <!-- Javascript  -->
    <script>
    const formRegister = document.querySelector("#formRegister");
    formRegister.addEventListener("submit", (e) => {
        e.preventDefault();
        let messenger = document.querySelector("#messenger");
        const formtData = new FormData(formRegister);
        if (formtData.get("username") === "" || formtData.get("email") === "" || formtData.get("password") ===
            "") {
            messenger.innerHTML = "Vui lòng điền đầy đủ thông tin";
        } else {
            messenger.innerHTML = "";
            fetch('register.php', {
                method: "POST",
                body: formtData,
            }).then((response) => {
                return response.text();
            }).then((data) => {
                console.log(data);
            })
        }


    });
    </script>
</body>

</html>