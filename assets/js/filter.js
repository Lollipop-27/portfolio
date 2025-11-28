document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter-button a");
    const projects = document.querySelectorAll(".project-item");

    buttons.forEach(button => {
        button.addEventListener("click", e => {
            e.preventDefault();
            const category = button.dataset.category;

            // Active button highlight
            buttons.forEach(b => b.classList.remove("active"));
            button.classList.add("active");

            // Show/hide projects
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
