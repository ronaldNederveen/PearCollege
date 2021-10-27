function buttonReplace() {
    getAllEntities();
    if (bellIcon.classList.contains('fas')) {
        bellIcon.classList.replace('fas', 'far');
        userIcon.classList.replace('fas', 'far');

    } else {
        bellIcon.classList.replace('far', 'fas');
        userIcon.classList.replace('far', 'fas');
    }
}

function checkState() {
    getAllEntities();
    icons.every(item => {
        if(item.classList.contains('far')) {
            iconsFar = true;
            return true;
        } else {
            iconsFar = false;
            return false;
        }
    });
    
    popups.every(item => {
        console.log(item);
        if(item.classList.contains('dis')) {
            popupsVisable = false;
            return true;

        } else {
            popupsVisable = true;
            return false;
        }
    });


    if(popupsVisable && !iconsFar) {
        buttonReplace();
    } else if(!popupsVisable && iconsFar) {
        buttonReplace();
    }
}