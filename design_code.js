// Function to handle button click and navigation
function btn(url) {
    // Handle button click and navigation
    window.location.href = url;
}

// Function to handle social media icon clicks
function handleSocialMediaClick(platform) {
    // Open the respective social media platform in a new tab
    const socialMediaLinks = {
        whatsapp: 'https://api.whatsapp.com/send/?phone=+918879109025&text=Hey There! I am interested in interior designs on the website. Can I know more about this?',
        instagram: 'https://www.instagram.com/meetpatel_2801/'
    };

    if (socialMediaLinks[platform]) {
        window.open(socialMediaLinks[platform], '_blank');
    }
}

// Function to scroll to top
function totop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Attach event listeners to design items
document.addEventListener('DOMContentLoaded', function () {
    const designItems = document.querySelectorAll('.d1 div');
    designItems.forEach(item => {
        item.addEventListener('click', function () {
            // Extract the topic from the clicked item
            const topic = this.getAttribute('data-topic');
            btn(`${topic}.html?topic=${topic}`);
        });
    });

    // Attach event listener to "GET STARTED" button
    const getStartedButton = document.querySelector('.m-last button');
    getStartedButton.addEventListener('click', function () {
        btn('book.html');
    });

    // Attach event listeners to social media icons
    const socialMediaIcons = document.querySelectorAll('.ftr-t ul li a');
    socialMediaIcons.forEach(icon => {
        const platform = icon.getAttribute('data-platform');
        icon.addEventListener('click', function (event) {
            event.preventDefault();
            handleSocialMediaClick(platform);
        });
    });
});
