function changeqty(context, qty) {
    if (qty == -1) {
        var prevqty = parseInt(context.previousSibling.innerHTML);
        if (prevqty > 1) {
            prevqty = prevqty + qty;
            context.previousSibling.innerHTML = prevqty;
        }

    } else if (qty == 1) {
        var prevqty = parseInt(context.nextSibling.innerHTML);
        if (prevqty < 5) {
            prevqty = prevqty + qty;
            context.nextSibling.innerHTML = prevqty;
        } else {
            alert("you can not order more than 5 pizzas of same time ")
        }

    }
}

function changesize(context, price) {
    $(context).addClass("rounded-square-size-selected");
    $(context).removeClass("rounded-square-size");

    $(context).siblings().addClass("rounded-square-size");
    $(context).siblings().removeClass("rounded-square-size-selected");

    var price = "&#x20b9; " + price;
    context.parentElement.nextSibling.nextSibling.nextSibling.innerHTML = price;
}
$(document).ready(function() {
    // Add scrollspy to <body>
    $('body').scrollspy({ target: ".navbar", offset: 50 });

    // Add smooth scrolling on all links inside the navbar
    $("#myNavbar a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

function addtocarts(context) {
    var s = context.id;
    var id = s.replace("a2c", "");
    var pizzaname = document.getElementById("pname" + id).innerHTML;
    var pizzaqty = document.getElementById("pqty" + id).innerHTML;
    var pizzaprice = document.getElementById("pprice" + id).innerHTML;
    alert(pizzaname + id + pizzaqty + pizzaprice);
    var data = {
        pid: id,
        pqty: pizzaqty,
        pname: pizzaname,
        pprice: pizzaprice
    };
    post("index.php", data, "POST");

}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for (var key in params) {
        if (params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}

function signupform(state) {
    var s = state;
    if (s == "1") {
        $('#login-form').css("display", "none");
        $('#signup-form').css("display", "block");

    } else {
        $('#signup-form').addClass("");
        $('#signup-form').removeClass("");
        $('#signup-form').css("display", "none");
    }

}

function loginform(state) {
    var s = state;
    if (s == "1") {
        $('#signup-form').css("display", "none");
        $('#login-form').css("display", "block");
        $('#login-form').addClass(".animation_zoomin_delay");
        $('#login-form').removeClass("");

    } else {
        $('#login-form').addClass("");
        $('#login-form').removeClass("");
        $('#login-form').css("display", "none");
    }
}