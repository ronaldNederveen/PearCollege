bellIcon = document.getElementById('popupBell');
userIcon = document.getElementById('popupUser');

function buttonReplace() {
    if (bellIcon.classList.contains('fas')) {
        bellIcon.classList.replace('fas', 'far');
        userIcon.classList.replace('fas', 'far');

    } else {
        bellIcon.classList.replace('far', 'fas');
        userIcon.classList.replace('far', 'fas');
    }
}