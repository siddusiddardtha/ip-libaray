// script.js

// Dummy data for book catalog and user info
const books = ["Harry Potter", "The Great Gatsby", "To Kill a Mockingbird", "1984"];
let loggedInUser = null;

// Login function
function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    if (username === "admin" && password === "admin123") {
        loggedInUser = "admin";
        alert("Logged in as Admin!");
        document.getElementById("profileUsername").textContent = "admin";
    } else if (username === "user" && password === "user123") {
        loggedInUser = "user";
        alert("Logged in as User!");
        document.getElementById("profileUsername").textContent = "user";
    } else {
        alert("Invalid login!");
    }
}

// Search book function
document.getElementById("searchBook").addEventListener("keyup", function() {
    const searchValue = this.value.toLowerCase();
    const filteredBooks = books.filter(book => book.toLowerCase().includes(searchValue));
    
    const bookList = document.getElementById("bookList");
    bookList.innerHTML = filteredBooks.map(book => `<p>${book}</p>`).join("");
});
