function toggleReadMore(value) { 
    getAllEntities();
    if(!popupnotifications.classList.contains('dis')) {
        popupnotifications.classList.add('dis');
    } else if(!popupuser.classList.contains('dis')) {
        popupuser.classList.add('dis');
    }
    popupln.classList.toggle('dis');
    buttonReplace();
}