window.addEventListener('load', function () {
    setTimeout(function () {
        var loaderContainer = document.getElementById('loader-container');
        loaderContainer.style.display = 'none';
        // Show the main content
        document.body.style.visibility = 'visible';
    }, 4000); // 10 seconds in milliseconds
});