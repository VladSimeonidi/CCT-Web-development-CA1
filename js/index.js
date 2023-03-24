const throttle = function (func, delay) {
    let timerId;
    // If setTimeout is already scheduled, no need to do anything
    if (timerId) {
        return
    }

    // Schedule a setTimeout after delay seconds
    timerId = setTimeout(function () {
        func()

        // Once setTimeout function execution is finished, timerId = undefined so that in <br>
        // the next scroll event function execution can be scheduled by the setTimeout
        timerId = undefined;
    }, delay)
}

function searchByActorAndMivie() {
    const content = document.getElementById('content');
    const actorInputValue = document.getElementById("actorInput").value;
    const movieInputValue = document.getElementById("movieInput").value;

    if (content) {
        axios.post("http://localhost/controllers/filter.php", {queries: [actorInputValue, movieInputValue]}).then(function (response) {
            content.innerHTML = response.data;
        })
    }
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

function clickBook(id) {
    const content = document.getElementById('content');

    if (content) {
        axios.get(`http://localhost/movie/book/${id}`).then(function (response) {
            content.innerHTML = response.data;
        })
    }
}