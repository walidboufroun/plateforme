function showSection(event, sectionId) {
  // Prevent the default behavior of anchor tags
  event.preventDefault();

  // Hide all sections
  var sections = document.getElementsByClassName('section-secteur');
  for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = 'none';
  }

  // Show the selected section
  var selectedSection = document.getElementById(sectionId);
  if (selectedSection) {
      selectedSection.style.display = 'flex';
      selectedSection.style.flexDirection = 'row';
      selectedSection.style.flexWrap = 'wrap';
      selectedSection.style.justifyContent = 'center';
      selectedSection.style.alignItems = 'center';
      selectedSection.style.gap = '3vw';
  }
}
