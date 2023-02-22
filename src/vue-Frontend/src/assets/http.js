import axios from "axios";

const http = axios.create({
    baseURL: "http://localhost:5000/api",
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Authorization': 'Bearer 4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg'
    }
});

export {http}