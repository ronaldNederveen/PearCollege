function toggleNotificationsPopup() {
    getAllEntities();
    if(!popupUser.classList.contains('dis')) {
        popupUser.classList.add('dis');
    } else if(!popupLN.classList.contains('dis')) {
        popupLN.classList.add('dis');
    }
    popupNotifications.classList.toggle('dis');

    checkState();
}