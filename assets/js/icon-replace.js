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
    console.log('test');
    popups.foreach(function(item) {
        console.log(item);
        if(item.classList.contains('dis')) {
            popupsVisable = false;
        } else {
            popupsVisable = true;
            continue;
        }
    });
    icons.foreach(function(item) {
        if(item.classList.contains('far')) {
            iconsFar = true;
        } else {
            iconsFar = false;
            continue;
        }
    });

    // If      Popups zichtbaar = Icons -> class = far
    // Else                       Icons -> class = fas



    if(popupsVisable && !iconsFar) {
        buttonReplace();
    } else if(!popupsVisable && iconsFar) {
        buttonReplace();
    }
}