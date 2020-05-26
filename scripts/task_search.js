// function sendFormIntoDiv() {
//     var form = document.getElementById("task_form")
//     var field = document.getElementById("board")
//     field.appendChild(form)
// }

// $().insertAfter("<div class=\"field\" id=\"board\">")
$("#board1").html($("#task_form"))
$("#task_form").css("margin-left","10px")
$(".task").insertAfter($("#task_form"))
$("#btn").click(function () {
    $("#board").html($("#task1"))
})

// $("#back").html($("#task_form"))


var id1, id2

$("[id ^= task]").click(function() {
    console.log("Ищем необходимый блок.")
    id1 = $(this).attr('id')
    console.log("Задача: "+id1)
    // $("#"+id1).focus();
    var i1 = id1.substr(4)
    id2 = "#task_block" + i1;
    console.log("Номер задачи: "+id1+" id блока: "+id2)
    $(".task").hide();
    $(".task:focus").show();
    $(id2).insertAfter($(".task:focus"))
    $(id2).show();
    $("#back").show()
})


$("[id ^= task_block]").click(function () {
    $(".task:hidden").show()
    $(this).hide()
})

$("#back").click(function () {
    $(".task:hidden").show()
    $("[id ^= task_block]:visible").hide()
    $("#back").hide()

})

// $(document).ready(function(){
//
//     $("#search").click(function () {
//         console.log("Ajax start")
//         var param = "subject=" + $("#subject").val() + "&" + "grade=" + $("#grade").val() + "&" + "theme_name=" + $("#theme_name").val()
//         if ($("#difficulty").val() != 0)
//             param = param + "&" + "difficulty=" + $("#difficulty").val();
//         console.log(param)
//         $.ajax({
//             type: "POST",
//             url: "tasks2.php",
//             data: param,
//             success: function(html){
//                 $("#board1").html(html);
//             }
//         });
//         return false;
//     });
//
// });
