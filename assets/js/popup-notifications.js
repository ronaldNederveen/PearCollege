popupnotifications = document.getElementById('popupnotifications');

function toggleNotificationsPopup() {
    if(!popupuser.classList.contains('dis')) {
        popupuser.classList.add('dis');
    }
    popupnotifications.classList.toggle('dis');
    buttonReplace();
}