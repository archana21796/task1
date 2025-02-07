// import { getToken } from "./helpers/csrf_token";

// const body = document.body;

// // Check saved theme preference
// // if (localStorage.getItem('theme') === 'dark') {
// //     body.classList.replace('bg-light', 'bg-dark');
// //     body.classList.replace('text-dark', 'text-light');
// //     themeToggle.classList.replace('btn-light', 'btn-dark');
// //     themeToggle.innerHTML = '<i class="fa-solid fa-sun p-2"></i>Light Mode';
// // }

// themeToggle.addEventListener('click', () => {
//     themeToggle.classList.add("new");
//     if (body.classList.contains('bg-light')) {
//         // Switch to dark mode
//         body.classList.replace('bg-light', 'bg-dark');
//         body.classList.replace('text-dark', 'text-light');
//         themeToggle.classList.replace('btn-light', 'btn-dark');
//         themeToggle.innerHTML = '<i class="fa-solid fa-sun p-2"></i>Light Mode';
//         localStorage.setItem('theme', 'dark'); // Save preference
//     } else {
//         // Switch to light mode
//         body.classList.replace('bg-dark', 'bg-light');
//         body.classList.replace('text-light', 'text-dark');
//         themeToggle.classList.replace('btn-dark', 'btn-light');
//         themeToggle.innerHTML = '<i class="fa-solid fa-moon p-2"></i>Dark Mode';
//         localStorage.setItem('theme', 'light'); // Save preference
//     }
// });
