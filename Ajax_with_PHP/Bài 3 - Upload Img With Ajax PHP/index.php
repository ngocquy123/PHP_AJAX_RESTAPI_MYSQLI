<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Img - with PHP</title>
</head>

<body>

    <input type="file" id="inputImg" multiple>

    <form action="" id="formEl" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <button type="submit">Insert</button>
    </form>


</body>

<script>
const insertData = async (url = '', data = {}) => {
    const response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    return response.json();
};
const formEl = document.querySelector('#formEl');

formEl.addEventListener('submit', (e) => {
    e.preventDefault();
    insertData('create.php', {
        name: 'Quy dinh cao'
    }).then((data) => {
        console.log(data);
    });
})
</script>

</html>