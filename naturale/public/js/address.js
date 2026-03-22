var reset_text = true;

const addressdropdown = document.getElementById("address_drop_down");

const addressLine1 = document.getElementById("addressLine1");
const addressLine2 = document.getElementById("addressLine2");
const addressCity = document.getElementById("addressCity");
const addressCounty = document.getElementById("addressCounty");
const addressPostcode = document.getElementById("addressPostcode");
const addressCountry = document.getElementById("addressCountry");


addressdropdown.addEventListener("change", function () {

    var count = 0;

    if (addressdropdown.value == "new" && reset_text == true) {

        addressLine1.value = "";
        addressLine2.value = "";
        addressCity.value = "";
        addressCounty.value = "";
        addressPostcode.value = "";
        addressCountry.value = "";

    }

    for (var address of addresses) {

        if (count == addressdropdown.value) {

            addressLine1.value = address[0];
            addressLine2.value = address[1];
            addressCity.value = address[2];
            addressCounty.value = address[3];
            addressPostcode.value = address[4];
            addressCountry.value = address[5];

        }

        count = count + 1;

    }

    reset_text = true;

});

var inputs = document.getElementsByClassName("address_input");

for (var input of inputs) {


    input.addEventListener("change", function () {

        reset_text = false;

        if (addressdropdown.value != "new") {

            addressdropdown.value = "new";

        }

    });

}