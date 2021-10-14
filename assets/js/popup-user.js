popupuser = document.getElementById('popupuser');
containerPopupUser = document.getElementById('container_popup_user');
        
function toggleUserPopup() {
    popupuser.classList.toggle('dis');
    containerPopupUser.classList.toggle('dis');
    buttonReplace()
}