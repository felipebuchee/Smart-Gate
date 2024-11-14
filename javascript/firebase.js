// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDbgxlRdNfMZuqQdOaLKIupE3zH-ik2Vl8",
    authDomain: "smart-gate-f82f5.firebaseapp.com",
    projectId: "smart-gate-f82f5",
    storageBucket: "smart-gate-f82f5.firebasestorage.app",
    messagingSenderId: "390527846039",
    appId: "1:390527846039:web:1eb60ee095781cb7968bd2",
    measurementId: "G-94CWZE551S"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);