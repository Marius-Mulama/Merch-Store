var addCart = document.getElementById("add-to-cart");

if(addCart){
    addCart.addEventListener("click", addToCart);
}


function addToCart(){
    var x = document.getElementById('added-span');



    x.innerHTML = "<p class='alert alert-success' id='added-sucess'>Added To cart</p>";

    // alert("Added to cart");
    // console.log("Clicked");

    setTimeout(function () {
        document.getElementById('added-sucess').style.display='none';
    }, 1500);

}