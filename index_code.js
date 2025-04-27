document.addEventListener('DOMContentLoaded', function () {
    // Toggle visibility of Get Started button
    const getStartedButton = document.getElementById('get-started-button');
    if (getStartedButton) {
        getStartedButton.addEventListener('click', function () {
            alert("Implement your 'Get Started' functionality here!");
        });
    }

    function openModal() {
        document.getElementById("loginModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("loginModal").style.display = "none";
    }

    // Close modal if user clicks outside of it
    window.onclick = function(event) {
        var modal = document.getElementById("loginModal");
        if (event.target == modal) {
            closeModal();
        }
    }

    // Smooth scroll for the Up button
    const upButton = document.getElementById('up-button');
    if (upButton) {
        upButton.addEventListener('click', function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    }
});
