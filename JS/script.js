// extra products section 
function toggleDetails(detailsId) {
  const details = document.getElementById(detailsId);
  if (details.style.display === "none" || details.style.display === "") {
    details.style.display = "block";
  } else {
    details.style.display = "none";
  }
}

function scrollToForm() {
  const formSection = document.getElementById("enquiry-from");
  formSection.scrollIntoView({ behavior: 'smooth' });
}

// share button section 
