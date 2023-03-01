const input = document.getElementById("search_input");
const responseDiv = document.querySelector(".response");

input.addEventListener("input", (e) => {
    let value = e.target.value;
    const loadData = async () => {
        const response = await fetch(`/api/books/search?search=${value}`);
        const data = await response.json();

        responseDiv.innerHTML = " ";
        data.forEach((book) => {
            responseDiv.innerHTML += `<div>${book.title}</div>`;
        });
    };
    loadData();
});
