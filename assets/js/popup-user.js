function toggleUserPopup() {
    getAllEntities();
    if(!popupnotifications.classList.contains('dis')) {
        popupnotifications.classList.add('dis');
    } else if(!popupln.classList.contains('dis')) {
        popupln.classList.add('dis');
    }
    popupuser.classList.toggle('dis');
    
    checkState();
}