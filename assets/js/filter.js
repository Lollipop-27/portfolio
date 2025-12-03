// document.addEventListener("DOMContentLoaded", () => {
//     const buttons = document.querySelectorAll(".filter-button a");
//     const projects = document.querySelectorAll(".wp-block-post");

//     buttons.forEach(button => {
//         button.addEventListener("click", e => {
//             e.preventDefault();
//             const category = button.dataset.category;
//             console.log(category)

//             // Highlight active button
//             buttons.forEach(b => b.classList.remove("active"));
//             button.classList.add("active");

//             // Filter items
//             projects.forEach(project => {
//                 if (category === "all" || project.classList.contains(`category-${category}`)) {
//                     project.style.display = "block";
//                 } else {
//                     project.style.display = "none";
//                 }
//             });
//         });
//     });
// });

document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter-button a");
    const projects = document.querySelectorAll(".wp-block-post");

    buttons.forEach(button => {
        button.addEventListener("click", function(e) {
            e.preventDefault();

            // Get class like "category-design"
            const category = [...button.parentNode.classList].find(cls => cls.startsWith("category-") || cls === "all");
            console.log(button.parentNode.classList)
            // Remove active from all
            buttons.forEach(b => b.classList.remove("active"));
            button.classList.add("active");

            // Show/hide posts
            projects.forEach(project => {
                if (category === "all" || project.classList.contains(category)) {
                    project.style.display = "block";
                } else {
                    project.style.display = "none";
                }
            });
        });
    });
});
