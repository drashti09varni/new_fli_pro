$(document).ready(function () {
    $("#back_btn").on("click", function () {
        history.back();
    });
    var add = localStorage.getItem("address");
    var address = JSON.parse(add);
    if (address) {
        $(".customer-name").html(address.name);
        $(".customer-address").html(address.flat + ", " + address.area + ", " + address.city + ", " + address.state + " " + address.pin);
        $(".customer-contact").html(address.number);
    }
});

function btnContinue() {
    window.location.href = MAIN_URL + "payment";
}