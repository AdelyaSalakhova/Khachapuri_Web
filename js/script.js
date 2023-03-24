let val = []

document.addEventListener('click', e => {
    const element = document.getElementById('accChange')
    const elementE = e.composedPath().includes(element)

    const element1 = document.getElementById('accSave')
    const element1E = e.composedPath().includes(element1)

    const element2 = document.getElementById('accCancel')
    const element2E = e.composedPath().includes(element2)

    const ChangeInp = document.querySelectorAll('.wrapper .input-group input');

    for (let i = 0; i < ChangeInp.length; i++) { // выведет 0, затем 1, затем 2
        val.push(ChangeInp[i].value)
    }


    if(elementE) {
        for (let i = 0; i < ChangeInp.length; i++) { // выведет 0, затем 1, затем 2
            ChangeInp[i].removeAttribute("disabled");
            ChangeInp[i].style.backgroundColor = "rgb(252,231,140)"
        }

        document.getElementById('accChange').style.display = "none"
        document.getElementById('accSave').style.display = "block"
        document.getElementById('accCancel').style.display = "block"
    }

    else if(element1E) {
        for (let i = 0; i < ChangeInp.length; i++) { // выведет 0, затем 1, затем 2
            ChangeInp[i].setAttribute("disabled", "true");
            ChangeInp[i].style.backgroundColor = "black"
        }

        val = []

        for (let j = 0; j < ChangeInp.length; j++) { // выведет 0, затем 1, затем 2
            val.push(ChangeInp[j].value)
        }

        document.getElementById('accChange').style.display = "inline"
        document.getElementById('accSave').style.display = "none"
        document.getElementById('accCancel').style.display = "none"
    }

    else if(element2E) {
        for (let j = 0; j < ChangeInp.length; j++) { // выведет 0, затем 1, затем 2
            ChangeInp[j].value=val[j]
        }
    }
})


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
    '                                           <label for="exampleFormControlInput3" class="form-label mb-0">Ваш город</label>\n' +
    '                                           <input type="text" class="form-control" id="exampleFormControlInput3">\n' +
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
};

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
};