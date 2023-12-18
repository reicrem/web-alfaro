
/* ------- move top ------- */
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
    } else {
        document.getElementById("movetop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/* ------ login ----------- */
$(document).ready(function () {
    $(".button-log a").click(function () {
        $(".overlay-login").fadeToggle(200);
        $(this).toggleClass("btn-open").toggleClass("btn-close");
    });
});
$(".overlay-close1").on("click", function () {
    $(".overlay-login").fadeToggle(200);
    $(".button-log a").toggleClass("btn-open").toggleClass("btn-close");
    open = false;
});

$(function () {
    $(".navbar-toggler").click(function () {
        $("body").toggleClass("noscroll");
    });
});

/* ----------- funcion retiro en tienda ------------ */
function rett() {
    var ema = document.getElementById('email').value;
    var cem = document.getElementById('cemail').value;
    if (ema == "" || ema == "Email") {
        alert("Debes ingresar un email valido");
        document.getElementById("email").focus();
    } else {
        if (cem == "" || cem == "Confirmar Email") {
            alert("Debes ingresar un email");
            document.getElementById("cemail").focus();
        } else {
            if (ema != cem) {
                alert("Los Email ingresados no son Iguales");
            } else {
                document.getElementById('emailr').value = ema;
                $("#checkout-modal").modal('hide');
                $("#retiro-modal").modal('show');
            }
        }
    }
}

/* ------------ funcion envio email confirmación pedido ---------- */
function envia() {
    if (document.getElementById("nombre").value == "" || document.getElementById("nombre").value == "Nombre") {
        alert("Debes ingresar un Nombre de quien Retirará");
        document.getElementById("nombre").focus();
    } else {
        if (document.getElementById("rut").value == "" || document.getElementById("rut").value == "RUT") {
            alert("Debes ingresar el Rut de Quien Retirará");
            document.getElementById("rut").focus();
        } else {
            if (document.getElementById('rdo02').checked) {
                document.fretiro.submit()
            } else {
                alert('Debe seleccionar una forma de pago');
                document.getElementById("rdo02").focus();
            }
        }
    }
}



var goToCartIcon = function ($addTocartBtn) {
    var $cartIcon = $(".my-cart-icon");
    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
        "position": "fixed",
        "z-index": "999"
    });
    $addTocartBtn.prepend($image);
    var position = $cartIcon.position();
    $image.animate({
        top: position.top,
        left: position.left
    }, 500, "linear", function () {
        $image.remove();
    });
}

$('.my-cart-btn').myCart({
    currencySymbol: '$',
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    classProductQuantity: 'my-product-quantity',
    classProductRemove: 'my-product-remove',
    classCheckoutCart: 'my-cart-checkout',


    affixCartIcon: true,
    showCheckoutModal: true,
    numberOfDecimals: 0,

    clickOnAddToCart: function ($addTocart) {
        goToCartIcon($addTocart);
    },
    afterAddOnCart: function (products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
    },
    clickOnCartIcon: function ($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
    },
    checkoutCart: function (products, totalPrice, totalQuantity) {

        var checkoutString = "<tr>";
        $.each(products, function () {
            var total = this.quantity * this.price;
            checkoutString += ("<td>" + this.quantity + "</td><td>" + this.name + "</td><td>" + new Intl.NumberFormat("de-DE").format(this.price) + "</td><td>" + new Intl.NumberFormat("de-DE").format(total) + "</td></tr><tr>");
        });

        checkoutString += "<td></td><td></td><td><b>TOTAL</b></td><td><b>" + new Intl.NumberFormat("de-DE").format(totalPrice) + "</b></td></tr>";

        $("#ddta").html(checkoutString);
        $("#mddta").html(checkoutString);
        $("#deta").val(checkoutString);
        /* -- envia al modal --*/
        $("#checkout-modal").modal('show');

    },
    getDiscountPrice: function (products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
    }
});

$("#addNewProduct").click(function (event) {
    var currentElementNo = $(".row").children().length + 1;
    $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
});