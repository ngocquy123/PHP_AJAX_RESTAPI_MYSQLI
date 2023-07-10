class Login {
    constructor(form, fields) {
        this.form = form;
        this.fields = fields;
        this.validateonSubmit();
    }

    validateonSubmit() {
        let self = this;

        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            let error = 0;

            self.fields.forEach((field) => {
                const input = document.getElementById(field);
                if (self.validateFields(input) == false) {
                    error++;
                }

            });
            if (error == 0) {
                // do login using api here
                localStorage.setItem("auth", 1)
                this.form.submit();
            }
        })
    }
    validateFields(field) {
        if (field.value.trim() == "") {
            this.setStatus(
                field,
                `Bạn chưa nhập ${field.previousElementSibling.innerText}`,
                `error`
            )
            return false;
        } else {
            if (field.type == "password") {
                if (field.value.length < 8) {
                    this.setStatus(
                        field,
                        ` ${field.previousElementSibling.innerText} phải > 8 Ký tự`,
                        `error`
                    )
                    return false;
                } else {
                    this.setStatus(field, null, "success");
                    return true;
                }
            } else {

            }
        }
    }
    setStatus(field, message, status) {
        const errorMessage = field.parentElement.querySelector(".error-message");
        if (status == "success") {
            if (errorMessage) {
                errorMessage.innerText = "";
            }
            field.classList.remove("input-error");
        }
        if (status == "error") {
            errorMessage.innerText = message;
            field.classList.add('input-error');
        }
    }
}
const form = document.querySelector(".loginForm");
if (form) {
    const fields = ['username', 'password'];
    const validator = new Login(form, fields);
}