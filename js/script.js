var addCart = document.getElementById("add-to-cart");

if(addCart){
    addCart.addEventListener("click", addToCart);
}

// Functions used in Products.php
function addToCart(){
    var x = document.getElementById('added-span');



    x.innerHTML = "<p class='alert alert-success' id='added-sucess'>Added To cart</p>";

    // alert("Added to cart");
    // console.log("Clicked");

    setTimeout(function () {
        document.getElementById('added-sucess').style.display='none';
    }, 1500);

}

// JQuery used in uplaodproducts.php
$(".custom-file-input").on("change", function() {
    let fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//Form Script

function check() {
    if (document.getElementById('password2').value.length !== 0) {
        if (document.getElementById('password').value === document.getElementById('password2').value) {

            document.getElementById('message').style.color = "green";
            document.getElementById('message').innerHTML = "passwords match";
            document.getElementById('save').disabled = false;
        } else {

            document.getElementById('message').style.color = "red";
            document.getElementById('message').innerHTML = "passwords do not match";
            document.getElementById('save').disabled = true;
            document.getElementById('reset').disabled = true;
        }
    }
}