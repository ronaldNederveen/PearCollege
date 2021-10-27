function toggleReadMore(value) { 
    getAllEntities();
    if(!popupnotifications.classList.contains('dis')) {
        popupnotifications.classList.add('dis');
    } else if(!popupuser.classList.contains('dis')) {
        popupuser.classList.add('dis');
    }
    popupln.classList.toggle('dis');

    checkState();

    if(!popupln.classList.contains('dis')) {
        lnimg = document.getElementById('pp-lnimg');
        lntitle = document.getElementById('pp-lntitle');
        lntext = document.getElementById('pp-lntext');

        // Replace ./data.json with your JSON feed
        fetch('./latest-news.json').then(response => {
            return response.json();
        }).then(data => {
            // Work with JSON data here
            items = Object.keys(data);
            items.forEach(item => {
                if(data[item]['id'] == value) {
                    lnimg.src = data[item]['image'];
                    lntitle.innerHTML = data[item]['title'];
                    lntext.innerHTML = data[item]['text'];
                }
            })
        });
    }
}