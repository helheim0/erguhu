</div>
<div class="row">
  <div class="col d-flex justify-content-evenly align-items-center border-1 border-dark border-top my-footer">
      <div class="flex-data col-md-3 text-center">
          <h4 class="fs-5">Helga Budai</h4>
      </div>
      <div class="vl1"></div>
      <div class="flex-data col-md-6 text-center">
        <a href="#"> <i class="fa-brands fa-linkedin-in fs-2 me-4"></i></a>
        <a href="#"> <i class="fa fa-github fa-lg fs-2 me-4"></i></a>
        <a href="#"> <i class="fa fa-twitter fa-lg fs-2"></i></a>
      </div>
      <div class="vl2"></div>
      <div class="flex-data col-md-3 text-center">
          <h5 class="fs-6">Send me an email</h5>
          <h6 class="pt-2 pb-2">helga.budai@proton.me</h6>
      </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      
<a href="#navbar" class="top" id="top">  <i class="fas fa-arrow-up"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        //Get the button
let mybutton = document.getElementById("top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
    <script src="https://kit.fontawesome.com/141ab076f9.js" crossorigin="anonymous"></script>
    
</body>
</html>