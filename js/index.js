const content = document.getElementById('content');
console.log(content);

function request() {
    axios.get("http://localhost/temp/php/listing.php").then(function (response) {
        content.innerHTML = response.data;
        console.log(response.data)
        // do whatever you want if console is [object object] then stringify the response
    })
}
