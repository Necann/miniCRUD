element = document.querySelector("#fortnite");

fetch("https://fortnite-api.com/v2/shop/br")
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        const img = data.data.featured.entries[0].bundle.image;
        element.innerHTML += "<img src='" +  img + "'/>";
    })
    .catch((err) => {
        console.warn("Something went wrong.", err);
    });
