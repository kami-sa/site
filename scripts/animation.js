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