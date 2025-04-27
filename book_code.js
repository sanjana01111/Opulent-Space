document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("quote-form");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission behavior

            // Get form data
            const formData = new FormData(form);
            const formDataObject = {};
            formData.forEach((value, key) => {
                formDataObject[key] = value;
            });

            // Here you can perform further actions with the form data, like sending it to a server using AJAX

            // For demonstration, let's log the form data to the console
            console.log("Form data:", formDataObject);

            // Optionally, you can redirect the user to a thank you page after form submission
             window.location.href = "thankyou.html";
        });
    });
