let popupuser = document.getElementById('popupuser');
let bellIcon = document.getElementById('popupBell');
let userIcon = document.getElementById('popupUser');
let containerPopupUser = document.getElementById('container_popup_user');
        
function toggleUserPopup() {
    popupuser.classList.toggle('dis');
    containerPopupUser.classList.toggle('dis');
    if (bellIcon.classList.contains('fas')) {
        bellIcon.classList.replace('fas', 'far');
        userIcon.classList.replace('fas', 'far');
    } else {
        bellIcon.classList.replace('far', 'fas');
        userIcon.classList.replace('far', 'fas');
    }
}