function toggleReadMore(value) { 
    getAllEntities();
    if(!popupNotifications.classList.contains('dis')) {
        popupNotifications.classList.add('dis');
    } else if(!popupUser.classList.contains('dis')) {
        popupUser.classList.add('dis');
    }
    popupLN.classList.toggle('dis');

    checkState();

    if(!popupLN.classList.contains('dis')) {
        lnImg = document.getElementById('pp-lnImg');
        lnTitle = document.getElementById('pp-lnTitle');
        lnText = document.getElementById('pp-lnText');

        if(document.documentElement.lang == "nl") {
            jsonFile = './latest-newsnl.json';
        } else {
            jsonFile = './latest-news.json';
        }

        // Replace ./data.json with your JSON feed
        fetch(jsonFile).then(response => {
            return response.json();
        }).then(data => {
            // Work with JSON data here
            items = Object.keys(data);
            items.forEach(item => {
                if(data[item]['id'] == value) {
                    lnImg.src = data[item]['image'];
                    lnTitle.innerHTML = data[item]['title'];
                    lnText.innerHTML = data[item]['text'];
                }
            })
        });
    }
}