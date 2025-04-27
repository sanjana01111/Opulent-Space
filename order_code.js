function togglePaymentMethod() {
    var paymentOptions = document.getElementById("paymentOptions");
    var fullInstallmentOptions = document.getElementById("fullInstallmentOptions");
    var upiQRCode = document.getElementById("upiQRCode");
    var cardDetails = document.getElementById("cardDetails");

    if (paymentOptions.value === "cashOnDelivery") {
        fullInstallmentOptions.style.display = "none";
    } else {
        fullInstallmentOptions.style.display = "block";
        if (paymentOptions.value === "upi") {
            upiQRCode.style.display = "block";
            cardDetails.style.display = "none";
        } else if (paymentOptions.value === "installment" || paymentOptions.value === "fullPayment") {
            upiQRCode.style.display = "none";
            cardDetails.style.display = "block";
        }
    }
}

function submitForm() {
    // Add your form submission logic here
    alert("Form submitted successfully!");
}