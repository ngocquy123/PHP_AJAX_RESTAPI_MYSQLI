const loadTable = () => {
    fetch('php/load-table.php')
        .then((response) => response.json())
        .then((data) => {
            let tbody = document.getElementById('tbody');
            if (data['empty']) {
                tbody.innerHTML = `<tr colspan="5">Chưa Thêm Dữ Liệu</tr>`;
            } else {
                let tr = '';
                for (let i in data) {
                    tr += ` 
                    <tr>
                    <th scope="row">${data[i].id}</th>
                    <td colspan="">${data[i].first_name} ${data[i].last_name}</td>
                    <td>${data[i].city}</td>
                    <td>${data[i].name}</td>
                    <td>
                    <button class="btn btn-success edit-btn" onclick="editRecored(${data[i].id})">Sửa</button>
                    <button class="btn btn-danger delete-btn" onclick="deleteRecored(${data[i].id})">Xóa</button>
                    </td>
                    </tr>`;
                }
                tbody.innerHTML = tr;
            }
        })
        .catch((error) => {
            show_message('error', 'Không tìm thấy dữ liệu');
        })
}
loadTable();
function addNewModal() {
    let addModal = document.getElementById('addModal');
    addModal.style.display = "block";
    fetch('php/fetch-class-field.php')
        .then((response) => response.json())
        .then((data) => {
            let select = document.getElementById('classlist');
            let option = `<option value="0" disabled selected> Chọn Lớp </option>`;
            for (let i = 0; i < data.length; i++) {
                option += `<option value="${data[i].id}">${data[i].name}</option>`
            }
            select.innerHTML = option;
        })
        .catch((error) => {
            show_message('error', "Can't Thể gọi ra danh sách lớp ");
        })
}
const json_data = (form) => {
    const formData = new FormData(form);
    let output = {};
    for (const [key, value] of formData) {
        if (value == '') {
        }
        output[key] = `${value}`;
    }
    const json_string = JSON.stringify(output)
    return json_string;
}
const submit_data = () => {
    const addForm = document.getElementById('add-form');
    const fname = document.querySelector('#fname').value,
        lname = document.querySelector('#lname').value,
        city = document.querySelector('#city'),
        sClass = document.querySelector('#classlist').value
    if (fname === "" || lname === "" || city === "" || sClass === "") {
        alert('Vui lòng điền dữ liệu vào tất cả các ô');
    } else {
        fetch('php/fetch-insert.php', {
            method: 'POST',
            body: json_data(addForm),
            headers: {
                "Content-Type": "application/json"
            }
        })
            .then((response) => response.json())
            .then((result) => {
                console.log(result);
                if (result.insert == 'success') {
                    show_message('success', 'Đã thêm dữ liệu');
                    loadTable();
                    hide_modal();
                } else {
                    show_message('error', 'Không thể thêm dữ liệu');
                    hide_modal();
                }
            }).catch((error) => {
                console.log(error);
                show_message('error', 'Có lỗi xảy ra');
            })
    }
}
const deleteRecored = ($id) => {
    fetch('php/delete.php?id=' + $id)
        .then((response) => { response.json() })
        .then((data) => {
            loadTable();
        })

}
function hide_modal() {
    let addModal = document.getElementById('addModal');
    addModal.style.display = 'none';
}
function show_message(type, text) {
    let message_box = ''
    if (type == 'error') {
        message_box = document.getElementById('error-message');
    } else {
        message_box = document.getElementById('success-message');
    }
    message_box.innerHTML = text;
    message_box.style.display = "block";
    setTimeout(function () {
        message_box.style.display = "none";
    }, 3000)
}