 // Code for the dim toggle button
 window.onload = function() {
    const body = document.body;

    if (localStorage.getItem('dimMode') === 'on') {
        body.style.filter = 'brightness(50%)';
    }

    document.getElementById('brightness-toggle').addEventListener('click', () => {
        if (body.style.filter === 'brightness(50%)') {
            body.style.filter = 'none';
            localStorage.setItem('dimMode', 'off');
        } else {
            body.style.filter = 'brightness(50%)';
            localStorage.setItem('dimMode', 'on');
        }
    });
};