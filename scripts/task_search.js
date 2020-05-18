function sendFormIntoDiv() {
    var form = document.getElementById("task_form")
    var field = document.getElementById("board")
    field.appendChild(form)
}