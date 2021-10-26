function toggleNotificationsPopup() {
    getAllEntities();
    if(!popupuser.classList.contains('dis')) {
        popupuser.classList.add('dis');
    } else if(!popupln.classList.contains('dis')) {
        popupln.classList.add('dis');
    }
    popupnotifications.classList.toggle('dis');
    buttonReplace();
}