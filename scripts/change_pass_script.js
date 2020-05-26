$("#board1").html($("#change_pass_form"))

$("#new_repass").blur(function () {
    if ($("#new_pass").val() != $("#new_repass").val())
        $("#attention").show().html("<p>Пароли не совпадают</p>")

})
$("#new_repass").focus(function () {
    $("#attention").hide()
})