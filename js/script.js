let isFound = false;

function checkUsername() {
    let username = document.getElementById("username").value;
    let result = document.getElementById("result");

    fetch("api/check-username.php",{
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({username})
    })
    .then(res=>res.json())
    .then(data=> {
        if(data.status === "exists") {
            result.innerText = data.message;
            result.style.color = "red";
            isFound = true;
        }
        else {
            result.innerText = data.message;
            result.style.color = "green";
            isFound = false;
        }
    })
}

function sendMessage() {
    // 1. Get values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Basic check to ensure fields aren't empty
    if(!name || !email || !message) {
        alert("Please fill all fields!");
        return;
    }

    // 2. Fetch request
    fetch("api/send-message.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({name: name, email: email, message: message})
    })
    .then(res => res.json())
    .then(data => {
        alert(data.response);
        // Clear the form after success
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Something went wrong with the connection.");
    });
}


function tableRefresh() {
    const tableBody = document.getElementById('messageTableBody');
    
    fetch('api/tableRefresh.php')
        .then(response => response.json())
        .then(data => {
            let html = '';
            data.forEach(msg => {
                html += `<tr>
                            <td>${msg.id}</td>
                            <td>${msg.name}</td>
                            <td>${msg.email}</td>
                            <td>${msg.message}</td>
                            <td>${msg.created_at}</td>
                         </tr>`;
            });
            tableBody.innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}