// document.addEventListener('DOMContentLoaded', function() {
//     const links = document.querySelectorAll('.sidebar nav ul li a');
//     const mainContent = document.getElementById('main-content');

//     const loadContent = async (url) => {
//         try {
//             const response = await fetch(url);
//             if (!response.ok) {
//                 throw new Error('Network response was not ok ' + response.statusText);
//             }
//             const content = await response.text();
//             mainContent.innerHTML = content;

//             const searchForm = mainContent.querySelector('form');
//             if (searchForm) {
//                 searchForm.addEventListener('submit', function(event) {
//                     event.preventDefault();
//                     const formData = new FormData(searchForm);
//                     const queryString = new URLSearchParams(formData).toString();
//                     loadContent('search.php?' + queryString);
//                 });
//             }
//         } catch (error) {
//             console.error('Fetch operation failed: ', error);
//             mainContent.innerHTML = '<p>Failed to load content. Please try again later.</p>';
//         }
//     };

//     links.forEach(link => {
//         link.addEventListener('click', (event) => {
//             event.preventDefault();
//             const target = event.target.getAttribute('data-target');
//             if (target) {
//                 loadContent(target);
//             }
//         });
//     });

//     const defaultSection = links[0].getAttribute('data-target');
//     if (defaultSection) {
//         loadContent(defaultSection);
//     }
// });


document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.sidebar nav ul li a');
    const mainContent = document.getElementById('main-content');

    const loadContent = async (url) => {
        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            const content = await response.text();
            mainContent.innerHTML = content;

            const searchForm = mainContent.querySelector('form');
            if (searchForm) {
                searchForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const formData = new FormData(searchForm);
                    const queryString = new URLSearchParams(formData).toString();
                    loadContent('search.php?' + queryString);
                });
            }
        } catch (error) {
            console.error('Fetch operation failed: ', error);
            mainContent.innerHTML = '<p>Failed to load content. Please try again later.</p>';
        }
    };

    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const target = event.target.getAttribute('data-target');
            if (target) {
                loadContent(target);
            }
        });
    });

    const defaultSection = links[0].getAttribute('data-target');
    if (defaultSection) {
        loadContent(defaultSection);
    }
});
