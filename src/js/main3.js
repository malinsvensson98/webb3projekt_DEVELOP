'use strict'

/* Variables for webpages */

let webpagesEl = document.getElementById("webpages");
let webpagesElNoButton = document.getElementById("webpagesNoButton");
let addWebpagesBtn = document.getElementById("addWebpages");
let web_titleInput = document.getElementById("web_title");
let urlInput = document.getElementById("url");
let descriptionInput = document.getElementById("description");



/* Eventlisteners */

window.addEventListener('load', getWebpages);
window.addEventListener('load', getWebpagesNoButton);
if (addWebpagesBtn) { addWebpagesBtn.addEventListener('click', addWebpages) };



/* Get all webpages */
function getWebpages() {
    if (webpagesEl) { webpagesEl.innerHTML = '' };
    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/read.php")
        .then(response => response.json()
            .then(data => {
                data.forEach(webpages => {
                    if (webpagesEl) {
                        webpagesEl.innerHTML +=
                            `<div class="webpages"> 
<p> 
<b> Titel: </b> ${webpages.web_title} <br/>
<b> URL: </b> ${webpages.url}<br/>
<b> Beskrivning:</b> ${webpages.description}<br/>
</p>
<button id="${webpages.web_id }" onClick="getOneWebpageToUpdate(${webpages.web_id })">Uppdatera</button>
<button id="${webpages.web_id }" onClick="deleteWebpages(${webpages.web_id} )">Radera</button>
</div>`
                    }

                })
            }))
}


/* Get all webpages without buttons */

function getWebpagesNoButton() {
    webpagesElNoButton.innerHTML = '';
    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/read.php")
        .then(response => response.json()
            .then(data => {
                data.forEach(webpages => {
                    webpagesElNoButton.innerHTML +=
                        `<div class="webpagesNoButton"> 
<p> 
<b> Titel: </b> ${webpages.web_title} <br/>
<b> URL: </b><a href="${webpages.url}" target="_blank">Länk här</a><br/>
<b> Beskrivning: </b>${webpages.description}<br/>
</p> <br/>
</div>`



                })
            }))
}




/* Add webpages */
function addWebpages() {
    let web_title = web_titleInput.value;
    let url = urlInput.value;
    let description = descriptionInput.value;


    let webpages = { 'web_title': web_title, 'url': url, 'description': description };

    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/create.php", {
            method: "POST",
            body: JSON.stringify(webpages),
        })
        .then(response => response.json())
        .then(data => {
            getWebpages();
            document.getElementById('web_title').value = '';
            document.getElementById('url').value = '';
            document.getElementById('description').value = '';
        })
        .catch(error => {
            console.log('Error: ', error);
        })
}

/* Delete webpages */
function deleteWebpages(web_id) {
    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/delete.php?web_id=" + web_id, {
            method: "DELETE",
        })
        .then(response => response.json())
        .then(data => {
            getWebpages();
        })
        .catch(error => {
            console.log('Error: ', error);
        })
}



/* Uppdate webpages  */
function getOneWebpageToUpdate(web_id) {

    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/read_one.php?web_id=" + web_id)
        .then(response => response.json())
        .then(updateWebpageDiv.style.display = 'block')
        .then(webpages => {
            updateWebpageDiv.innerHTML +=
                `<form method="get">
            <label for="web_title">Titel</label>
            <input type="text" name="web_title" id="newweb_title" value="${webpages.web_title}"> <br>
            <label for="url">URL</label>
            <input type="text" name="url" id="newurl" value="${webpages.url}"> <br>
            <label for="description">Beskrivning</label>
            <input type="text" name="description" id="newdescription" value="${webpages.description}"> <br>
            <input type="button" id="updateWebpageButton" onClick="updateWebpages(${webpages.web_id })" value="Uppdatera">   
            <input type="submit" id="closeButton" onClick="closeDiv()" value="Avbryt">
            </form>`
        })
}

/* Update */
function updateWebpages(web_id) {

    let newweb_title = document.getElementById('newweb_title');
    let newurl = document.getElementById('newurl');
    let newdescription = document.getElementById('newdescription');


    newweb_title = newweb_title.value;
    newurl = newurl.value;
    newdescription = newdescription.value;


    let webpages = { 'web_id ': web_id, 'web_title': newweb_title, 'url': newurl, 'description': newdescription };

    fetch("https://malinsvensson.se/miun/webbutveckling3/projekt/api_webpages/update.php?web_id=" + web_id, {
            method: 'PUT',
            body: JSON.stringify(webpages)
        })
        .then(response => response.json())
        .then(data => {
            getWebpages();
        })
        .catch(error => {
            console.log('Error: ', error);
        })

}