const boxes = document.querySelectorAll(".box");

boxes.forEach(box => {
  box.addEventListener("click", function() {
    const targetId = this.dataset.target;
    const targetElement = document.getElementById(targetId);
    
    // Hide all content divs first
    const contentDivs = document.querySelectorAll("unhidden");
    contentDivs.forEach(div => div.classList.add("hidden"));
    
    // Show the clicked box's corresponding content
    targetElement.classList.remove("hidden");
  });
});

const triggerElements = document.querySelectorAll(".offre-produit");

// Close popup functionality
document.addEventListener("click", function(event) {
  // Check if clicked element is not a trigger element and not a descendant of a trigger element
  if (!triggerElements.some(element => element === event.target || element.contains(event.target))) {
    // Close all popups
    triggerElements.forEach(element => element.classList.add("hidden"));
  }
});



