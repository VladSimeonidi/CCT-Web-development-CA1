const content = document.getElementById('content');

function searchByActorAndMivie() {
    const actorInputValue = document.getElementById("actorInput").value;
    const movieInputValue = document.getElementById("movieInput").value;

    axios.post("http://localhost/controllers/filter.php", {queries: [actorInputValue, movieInputValue]}).then(function (response) {
        content.innerHTML = response.data;
    })
}

function clickTableRow(el) {
    if (el.dataset.id) {
        window.location.assign(`movie/${el.dataset.id}`)
    }
}

function nextMovie(el) {
    function getLastPart(url) {
        const parts = url.split('/');
        return parts.at(-1);
    }
    let getId = getLastPart(window.location.pathname);
    let parsedId = parseInt(getId);
    const nextId = parsedId + 1;
    window.location.assign(nextId);
};

function prevMovie(el) {
    function getLastPart(url) {
        const parts = url.split('/');
        return parts.at(-1);
    }
    let getId = getLastPart(window.location.pathname);
    let parsedId = parseInt(getId);
    const prevId = parsedId - 1;
    window.location.assign(prevId);
};