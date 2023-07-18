
function registration() {
    let title = document.getElementById('modal-content')
    title.innerHTML = '<div class="modal-header">\n' +
    '                                    <h3 class="modal-title" id="exampleModalLabel">Регистрация</h3>\n' +
    '                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\n' +
    '                                </div>\n' +
    '                                <form>\n' +
    '                                   <div class="modal-body modal-inputs">\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="exampleFormControlInput1" class="form-label mb-0">Ваш Email*</label>\n' +
    '                                           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="exampleFormControlInput2" class="form-label mb-0">Ваше имя*</label>\n' +
    '                                           <input type="text" class="form-control" id="exampleFormControlInput2" required>\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="exampleFormControlInput3" class="form-label mb-0">Ваш возраст</label>\n' +
    '                                           <input type="number" class="form-control" id="exampleFormControlInput3">\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="exampleFormControlInput4" class="form-label mb-0">Ваш город</label>\n' +
    '                                           <input type="text" class="form-control" id="exampleFormControlInput4">\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label>Ваш пол*</label>\n' +
    '                                           <div class="row">\n' +
    '                                               <div class="col form-check">\n' +
    '                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">\n' +
    '                                                   <label class="form-check-label" for="flexRadioDefault1">\n' +
    '                                                       Мужской\n' +
    '                                                   </label>\n' +
    '                                               </div>\n' +
    '                                               <div class="col form-check">\n' +
    '                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>\n' +
    '                                                   <label class="form-check-label" for="flexRadioDefault2">\n' +
    '                                                       Женский\n' +
    '                                                   </label>\n' +
    '                                               </div>\n' +
    '                                           </div>\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="inputPassword1" class=" col-form-label mb-0">Пароль*</label>\n' +
    '                                           <div class="password">\n' +
    '                                               <input type="password" class="form-control" id="inputPassword1" required>\n' +
    '                                           </div>\n' +
    '                                       </div>\n' +
    '                                       <div class="mb-1">\n' +
    '                                           <label for="inputPassword2" class=" col-form-label mb-0">Повторите пароль*</label>\n' +
    '                                           <div class="password">\n' +
    '                                               <input type="password" class="form-control" id="inputPassword2" required>\n' +
    '                                           </div>\n' +
    '                                       </div>\n' +
    '                                   </div>\n' +
    '                                   <div class="modal-footer d-flex justify-content-between">\n' +
    '                                       <button type="button" onclick="login()" class="btn btn-primary btn-log-in btn-back">Назад</button>\n' +
    '                                       <button type="submit" class="btn btn-primary btn-log-in btn-sign-up">Зарегистрироваться</button>\n' +
    '                                   </div>' +
    '                                </form>'
}

function login() {
    let title = document.getElementById('modal-content')
    title.innerHTML = '<div class="modal-header">\n' +
        '                                    <h3 class="modal-title" id="exampleModalLabel">Вход</h3>\n' +
        '                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\n' +
        '                                </div>\n' +
        '                                <form>\n' +
        '                                    <div class="modal-body modal-inputs">\n' +
        '                                        <div class="mb-2">\n' +
        '                                            <label for="exampleFormControlInput1" class="form-label mb-0">Ваш Email</label>\n' +
        '                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>\n' +
        '                                        </div>\n' +
        '                                        <div class="mb-2">\n' +
        '                                            <label for="inputPassword" class="col-sm-2 col-form-label mb-0">Пароль</label>\n' +
        '                                            <div class="password">\n' +
        '                                                <input type="password" class="form-control" id="inputPassword" required>\n' +
        '                                            </div>\n' +
        '                                        </div>\n' +
        '                                    </div>\n' +
        '                                    <div class="modal-footer d-flex justify-content-between">\n' +
        '                                        <a class="reg" onclick="registration()">Нет аккаунта?</a>\n' +
        '                                        <button type="submit" class="btn btn-primary btn-log-in btn-sign-in">Войти</button>\n' +
        '                                    </div>\n' +
        '                                </form>'
}

function favor() {
    document.querySelector('.favorite').innerHTML = '<i onclick="unfavor()" class="fa-solid fa-heart fav"></i>'
}

function unfavor() {
    document.querySelector('.favorite').innerHTML = '<i onclick="favor()" class="fa-regular fa-heart non-fav"></i>'
}

function proportion_pm(clicked) {
    let proportions = parseFloat(document.querySelector('.proportion').textContent)
    const product_amount_start = []
    document.querySelectorAll('.product-amount').forEach(item => {
        product_amount_start.push(parseFloat(item.textContent) / proportions)
    })
    if (clicked.classList.contains('fa-minus') && proportions > 1) {
        proportions -= 1
    }
    else if (clicked.classList.contains('fa-plus') && proportions < 10 ) {
        proportions += 1
    }
    document.querySelector('.proportion').textContent = proportions
    let product_amount_new = product_amount_start.map(num => num * proportions)
    for (let i = 0; i < product_amount_new.length; i++) {
        if (!isNaN(product_amount_new[i])) {
            document.querySelectorAll('.product-amount')[i].textContent = String(product_amount_new[i])
        }
    }
}

const acc_change = document.getElementById('accChange')
const acc_save = document.getElementById('accSave')
const acc_cancel = document.getElementById('accCancel')
const ChangeInp = document.querySelectorAll('.recipe-block .input-group input');
const pass = document.getElementById('password')
const pass_repeat = document.getElementById('password_repeat')
let val = []
let gen_val = []
function Change_acc_data() {
    for (let i = 0; i < ChangeInp.length; i++) {
        ChangeInp[i].removeAttribute("disabled");
        ChangeInp[i].style.backgroundColor = "rgb(252,231,140)"
    }
    for (let i = 0; i < ChangeInp.length; i++) {
        val.push(ChangeInp[i].value)
    }

    document.getElementById('password_zone').style.display = "flex"
    console.log(ChangeInp)
    document.getElementById('accChange').style.display = "none"
    document.getElementById('accSave').style.display = "block"
    document.getElementById('accCancel').style.display = "block"
}
function Save_acc_data() {
    if (pass.value === pass_repeat.value) {
        for (let i = 0; i < ChangeInp.length; i++) {
            ChangeInp[i].setAttribute("disabled", "true");
            ChangeInp[i].style.backgroundColor = "rgb(233,236,239)"
        }
        val = []
        document.getElementById('password_zone').style.display = "none"
        document.getElementById('accChange').style.display = "flex"
        document.getElementById('accSave').style.display = "none"
        document.getElementById('accCancel').style.display = "none"
    }
    else alert('Пароли должны совпадать!')
}

function Cancel_acc_data() {
    for (let j = 0; j < ChangeInp.length; j++) {
        ChangeInp[j].value = val[j]
    }
    for (let i = 0; i < ChangeInp.length; i++) {
        ChangeInp[i].setAttribute("disabled", "true");
        ChangeInp[i].style.backgroundColor = "rgb(233,236,239)"
    }

    document.getElementById('password_zone').style.display = "none"
    document.getElementById('accChange').style.display = "inline"
    document.getElementById('accSave').style.display = "none"
    document.getElementById('accCancel').style.display = "none"
}
acc_change.onclick = Change_acc_data
acc_save.onclick = Save_acc_data
acc_cancel.onclick = Cancel_acc_data