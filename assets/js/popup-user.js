popupuser = document.getElementById('popupuser');
        
function toggleUserPopup() {
    if(!popupnotifications.classList.contains('dis')) {
        popupnotifications.classList.add('dis');
    }
    popupuser.classList.toggle('dis');
    buttonReplace();
}