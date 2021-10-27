function toggleNotificationsPopup() {
    getAllEntities();
    if(!popupUser.classList.contains('dis')) {
        popupUser.classList.add('dis');
    } else if(!popupLn.classList.contains('dis')) {
        popupLn.classList.add('dis');
    }
    popupNotifications.classList.toggle('dis');

    checkState();
}