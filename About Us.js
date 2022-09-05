/*import { useState } from "react"; 8.3K (gzipped: 3.3K) 
import axios from "axios"; 15.4K (gzipped: 5.2K)

export default () => {
    const [email, setEmail] = useState("");
    const [state, setState] = useState("IDLE");
    const [errorMessage, setErrorMessage] = useState(null);

    const subscribe = async () => {
        setState("LOADING");
        setErrorMessage(null);
        try {
            const response = await axios.post("/api/newsletter", { email });
            setState("SUCCESS");
        } catch (e) {
            setErrorMessage(e.response.data.error);
            setState("ERROR");
        }
    }
};

function sendEmail() {
    Email.send({
    Host : "smtp.gmail.com",
    Username : "dikshya.shaw.bca22@heritageit.edu.in",
    Password : "password",
    To : 'dikshya.shaw007@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Contact Form Enquiry",
    Body : "Email: " + document.getElementById("name").value
}).then(
  message => alert("Message Sent Successfully")
);
  }*/

	$(document).ready(function(){
		$("#myModal").modal('show');
	});

