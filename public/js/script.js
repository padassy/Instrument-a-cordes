
/* var pincee = document.querySelector('#category1').addEventListener("click",changeColor);
var frappee = document.querySelector('#category2').addEventListener("click",changeColor);
var frottee = document.querySelector('#category3').addEventListener("click",changeColor);


function changeColor(){
  let classDark = this.classList.add("darkGrey");
  localStorage.setItem("classDark", this.classList);
}
 */

/* var frapee = document.querySelector('#category2').addEventListener("click",function () {
  frapee.classList.add("darkGrey")
  pincee.classList.remove("darkGrey");
  frottee.classList.remove("darkGrey");
},);
var frotee = document.querySelector('#category3').addEventListener("click",function () {
  frotee.classList.add("darkGrey")
  frappee.classList.remove("darkGrey");
  pincee.classList.remove("darkGrey");
},);
 var pincee = document.querySelector('#category1').addEventListener("click",function () {
  pincee.classList.add("darkGrey")
  frappee.classList.remove("darkGrey");
  frottee.classList.remove("darkGrey");
},);*/



window.onload = function() {
      var linksDetail = document.querySelectorAll('.divCateg');

      for (var i = 0; i < linksDetail.length; i++) {
          linksDetail[i].addEventListener('click', function(event) {
              // Remove 'clicked' class from all linksDetail
              var previousClicked = document.querySelector('.darkGrey');
              if (previousClicked) {
                  previousClicked.classList.remove('darkGrey');
              }

              // Add 'clicked' class to the clicked link
              this.classList.add('darkGrey');

              // Store the clicked link in a PHP session variable using AJAX
              var xhr = new XMLHttpRequest();
              xhr.open('POST', 'store_last_clicked_link.php');
              xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
              xhr.send('link=' + encodeURIComponent(this.href));

              // Continue with the default link behavior
          });
      }
      var links = document.querySelectorAll('#bar a ');

      for (var i = 0; i < links.length; i++) {
          links[i].addEventListener('click', function(event) {
              // Remove 'clicked' class from all links
              var previousClicked = document.querySelector('.darkGrey');
              if (previousClicked) {
                  previousClicked.classList.remove('darkGrey');
              }

              // Add 'clicked' class to the clicked link
              this.classList.add('darkGrey');

              // Store the clicked link in a PHP session variable using AJAX
              var xhr = new XMLHttpRequest();
              xhr.open('POST', 'store_last_clicked_link.php');
              xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
              xhr.send('link=' + encodeURIComponent(this.href));

              // Continue with the default link behavior
          });
      }
  };
