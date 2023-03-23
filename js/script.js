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