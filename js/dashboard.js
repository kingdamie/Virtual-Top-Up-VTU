// document.addEventListener("DOMContentLoaded", function () {
//   const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

//   allSideMenu.forEach((item) => {
//     item.addEventListener("click", function () {
//       // Remove "active" class from all items
//       allSideMenu.forEach((i) => {
//         i.parentElement.classList.remove("active");
//       });

//       // Add "active" class to the clicked item's parent <li> element
//       const li = item.parentElement;
//       li.classList.add("active");
//     });
//   });
// });


 // jQuery code to add "active" class based on the current page URL
    $(document).ready(function () {
        // Get the current page URL
        var currentUrl = window.location.href;

        // Select all li elements inside the sidebarMenu
        $('#sidebarMenu li').each(function () {
            // Get the href attribute of the anchor tag inside the li
            var menuUrl = $(this).find('a').attr('href');

            // Check if the current page URL contains the menu URL
            if (currentUrl.indexOf(menuUrl) !== -1) {
                // Add the "active" class to the matching li element
                $(this).addClass('active');
            }
        });
    });
// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});
