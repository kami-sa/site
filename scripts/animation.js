$(".container").hide()
// $(".field").css("margin-left","50px")
// $(".field").css("width","1150px")
// $(".field").css("margin-right","25px")
// $(".field").css("transition-duration",".3s")
// $(".slide").css("transition-duration",".3s")
// $(".container").css("transition-duration",".3s")



$(".slide").mouseover(function () {
    $(".container").show()
    $(".slide").hide()
    $(".field").css("margin-left","250px")

})

$(".container").mouseout(function () {

    $(".container").hide()
    $(".slide").show()
    $(".field").css("margin-left","50px")

})

$(".container").mousemove(function () {
    $(".container").show()
    $(".slide").hide()
    $(".field").css("margin-left","250px")
})

$("#l1, #l2, #l3, #l4, .task").mouseover(function () {
    $(this).css("text-decoration","underline")
})

$("#l1, #l2, #l3, #l4, .task").mouseout(function () {
    $(this).css("text-decoration","none")
})


