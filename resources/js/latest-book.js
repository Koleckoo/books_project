const list = document.getElementById("latest-books");
const image = document.getElementById("image");

const loadData = async () => {
    const response = await fetch("/api/books/latest");
    const data = await response.json();

    data.forEach((book) => {
        list.innerHTML += `<div class="book">
         <p>${book.title}</p> 
         <img src=${book.image}>
         <p>${book.authors.map((author) => author.name).join(", ")}</p>
        </div>`;
    });
    image.classList.add("hide");
};

setTimeout(() => {
    loadData();
}, 2000);
