document.addEventListener("DOMContentLoaded", function () {
  const accordionBtns = document.querySelectorAll(".accordion");

  accordionBtns.forEach((accordion) => {
    accordion.onclick = function () {
      this.classList.toggle("is-open");

      let content = this.nextElementSibling;
      console.log(content);

      if (content.style.maxHeight) {
        //this is if the accordion is open
        content.style.maxHeight = null;
      } else {
        //if the accordion is currently closed
        content.style.maxHeight = content.scrollHeight + "px";
        console.log(content.style.maxHeight);
      }
    };
  });


  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('close').style.display = 'block';
  });
  document.getElementById('close').addEventListener('click', function() {
    document.getElementById('limitedBanner').style.display = 'none';
  });
});
