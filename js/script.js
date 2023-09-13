

function favor() {
    document.querySelector('.favorite').innerHTML = '<i onclick="unfavor()" class="fa-solid fa-heart fav"></i>';
}

function unfavor() {
    document.querySelector('.favorite').innerHTML = '<i onclick="favor()" class="fa-regular fa-heart non-fav"></i>';
}

function proportion_pm(clicked) {
    let proportions = parseFloat(document.querySelector('.proportion').textContent);
    const product_amount_start = [];
    document.querySelectorAll('.product-amount').forEach(item => {
        product_amount_start.push(parseFloat(item.textContent) / proportions);
    })
    if (clicked.classList.contains('fa-minus') && proportions > 1) {
        proportions -= 1;
    }
    else if (clicked.classList.contains('fa-plus') && proportions < 10 ) {
        proportions += 1;
    }
    document.querySelector('.proportion').textContent = proportions;
    let product_amount_new = product_amount_start.map(num => num * proportions);
    for (let i = 0; i < product_amount_new.length; i++) {
        if (!isNaN(product_amount_new[i])) {
            document.querySelectorAll('.product-amount')[i].textContent = String(product_amount_new[i]);
        }
    }
}


//??? мб найти другое решение
const acc_change = document.getElementById('accChange');
const acc_save = document.getElementById('accSave');
const acc_cancel = document.getElementById('accCancel');
const ChangeInp = document.querySelectorAll('.recipe-block .input-group input');
const pass = document.getElementById('password');
const pass_repeat = document.getElementById('password_repeat');
let val = [];
function Change_acc_data() {
    for (let i = 0; i < ChangeInp.length; i++) {
        ChangeInp[i].removeAttribute("disabled");
        ChangeInp[i].style.backgroundColor = "rgb(252,231,140)";
    }
    for (let i = 0; i < ChangeInp.length; i++) {
        val.push(ChangeInp[i].value);
    }

    document.getElementById('password_zone').style.display = "flex";
    console.log(ChangeInp);
    document.getElementById('accChange').style.display = "none";
    document.getElementById('accSave').style.display = "block";
    document.getElementById('accCancel').style.display = "block";
}
function Save_acc_data() {
    if (pass.value === pass_repeat.value) {
        for (let i = 0; i < ChangeInp.length; i++) {
            ChangeInp[i].setAttribute("disabled", "true");
            ChangeInp[i].style.backgroundColor = "rgb(233,236,239)";
        }
        val = [];
        document.getElementById('password_zone').style.display = "none";
        document.getElementById('accChange').style.display = "flex";
        document.getElementById('accSave').style.display = "none";
        document.getElementById('accCancel').style.display = "none";
    }
    else alert('Пароли должны совпадать!');
}

function Cancel_acc_data() {
    for (let j = 0; j < ChangeInp.length; j++) {
        ChangeInp[j].value = val[j];
    }
    for (let i = 0; i < ChangeInp.length; i++) {
        ChangeInp[i].setAttribute("disabled", "true");
        ChangeInp[i].style.backgroundColor = "rgb(233,236,239)";
    }

    document.getElementById('password_zone').style.display = "none";
    document.getElementById('accChange').style.display = "inline";
    document.getElementById('accSave').style.display = "none";
    document.getElementById('accCancel').style.display = "none";
}
acc_change.onclick = Change_acc_data;
acc_save.onclick = Save_acc_data;
acc_cancel.onclick = Cancel_acc_data;

function Go_to_recipes() {
    let position = document.getElementById("recipe-block")
    position.scrollIntoView();
}
