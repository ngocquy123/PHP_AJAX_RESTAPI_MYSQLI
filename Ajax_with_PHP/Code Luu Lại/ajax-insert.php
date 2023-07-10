<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>

<body>
    <h2>Đăng ký</h2>
    <form action="" method="post" id="formRegister">
        <label for="">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="">Password</label>
        <input type="text" name="password" id="password"><br>
        <input type="submit" value="Đăng Ký">
    </form>
    <!-- Javascript  -->
    <script>
    const formRegister = document.querySelector("#formRegister");



    // formRegister.addEventListener("submit", (e) => {
    //     e.preventDefault();
    //     const username = document.querySelector('#username').value,
    //         email = document.querySelector('#email').value,
    //         password = document.querySelector('#password').value;
    //     // console.log(username, email, password);
    //     const xhr = new XMLHttpRequest();
    //     // let inputjson = {
    //     //     'username': user,
    //     //     'email': emai,
    //     //     'password': pass,
    //     // }
    //     let inputjson = `username=${username}&email=${email}&password=${password}`;
    //     console.log(inputjson);

    //     xhr.open("POST", "register.php");
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    //     xhr.send(inputjson);

    // });

    formRegister.addEventListener("submit", (e) => {
        e.preventDefault();
        const username = document.querySelector('#username').value,
            email = document.querySelector('#email').value,
            password = document.querySelector('#password').value;
        let inputjson = `username=${username}&email=${email}&password=${password}`;
        console.log(inputjson);
        fetch('register.php', {
            method: "POST",
            body: inputjson,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
        }).then((response) => {
            return response.text();
        }).then((data) => {
            console.log(data);
        })
    });

    // formRegister.addEventListener("submit", (e) => {
    //     e.preventDefault();
    //     const formData = new FormData(formRegister);

    //     fetch('register.php', {
    //         method: "POST",
    //         body: formData,
    //     }).then((response) => {
    //         return response.text();
    //     }).then((data) => {
    //         console.log(data);
    //     })
    // });

    // formRegister.addEventListener("submit", (e) => {
    //     e.preventDefault();
    //     console.log(username.value, email.value, password.value);
    //     const inputjson = {
    //         username: username.value,
    //         email: email.value,
    //         password: password.value
    //     }

    //     fetch("register.php?username=" + username.value + "&email=" + email.value).then((response) => {
    //         return response.text();
    //     }).then((data) => {
    //         console.log(data);
    //     })
    // });
    </script>
</body>

</html>