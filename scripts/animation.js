$(".container").hide()

$(".slide").mouseover(function () {
    $(".container").show()
    $(".slide").hide()
})

$(".container").mouseout(function () {

    $(".container").hide()
    $(".slide").show()

})

$(".container").mousemove(function () {
    $(".container").show()
    $(".slide").hide()
})

$("#l1, #l2, #l3, #l4").mouseover(function () {
    $(this).css("text-decoration","underline")
})

$("#l1, #l2, #l3, #l4").mouseout(function () {
    $(this).css("text-decoration","none")
})