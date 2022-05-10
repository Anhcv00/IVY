// ----------------------soanpham--------
 const itemsliderbar = document.querySelectorAll(".tittle-sidebar")
 itemsliderbar.forEach(function (menu, index) {
     menu.addEventListener("click", function () {
         menu.classList.toggle("block");
     })
 })




// -----------------------Product--------------------------------------------------------

const bigImg = document.querySelector(".left-big-img img")
const smallImg = document.querySelectorAll(".left-small-img img")

smallImg.forEach(function (imgItem, index){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})





const baoquan = document.querySelector(".tittle-1")
const chitiet = document.querySelector(".tittle-2")
if(baoquan){
    baoquan.addEventListener("click", function () {
        document.querySelector(".tittle_1").style.display = "none"
        document.querySelector(".tittle_2").style.display = "block"
    })
}
if(chitiet){
    chitiet.addEventListener("click", function () {
        document.querySelector(".tittle_1").style.display = "block"
        document.querySelector(".tittle_2").style.display = "none"
    })
}
const button = document.querySelector(".content-top-bt")
if(button){
    button.addEventListener("click", function () {
        document.querySelector(".content-top-ct").classList.toggle("activeB")
    
    })
}
