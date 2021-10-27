function toggleUserPopup() {
    getAllEntities();
    if(!popupNotifications.classList.contains('dis')) {
        popupNotifications.classList.add('dis');
    } else if(!popupLN.classList.contains('dis')) {
        popupLN.classList.add('dis');
    }
    popupUser.classList.toggle('dis');
    
    checkState();
}