/* General Body */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f5f5f5;
    color: #333;
}

/* Header */
header {
    background: #0056b3;
    padding: 15px 30px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 24px;
}

header nav select {
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

/* Links */
nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

nav a:hover {
    text-decoration: underline;
}

/* Forms */
form {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background: rgba(0,0,0,0.05);
    border-radius: 8px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Buttons */
button {
    padding: 10px 20px;
    background: #0056b3;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #003f7f;
}

/* Tables */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

/* Headings */
h1, h2, h3 {
    text-align: center;
}

/* Hero / Background Sections */
.hero {
    text-align: center;
    padding: 50px;
    background: #f0f0f0;
}

.hero h1 span {
    color: #0056b3;
}

/* Footer */
footer {
    background: #222;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    margin-top: 20px;
}

/* Lists */
ul {
    padding: 0;
    list-style: none;
}

ul li {
    padding: 5px 0;
}

/* Responsive */
@media screen and (max-width: 768px) {
    header {
        flex-direction: column;
        text-align: center;
    }
    
    form, table {
        width: 95%;
    }
}
