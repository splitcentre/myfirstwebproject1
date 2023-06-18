let quantity1 = 0;
let numberbox1 = document.querySelector(".numberbox1");
function add1(){
quantity1++;
numberbox1.value = quantity1;
}

function subtract1(){
    if(quantity1>0){
        quantity1--;
        numberbox1.value = quantity1;
    }


}


let quantity2 = 0;
let numberbox2 = document.querySelector(".numberbox2");
function add2(){
quantity2++;
numberbox2.value = quantity2;
}

function subtract2(){
    if(quantity2>0){
        quantity2--;
        numberbox2.value = quantity2;
    }


}

let quantity3 = 0;
let numberbox3 = document.querySelector(".numberbox3");
function add3(){
quantity3++;
numberbox3.value = quantity3;
}

function subtract3(){
    if(quantity3>0){
        quantity3--;
        numberbox3.value = quantity3;
    }


}

var removeButtons = document.getElementsByClassName("remove-item");


for (var i = 0; i < removeButtons.length; i++) {
  var button = removeButtons[i];
  button.addEventListener("click", removeItem);
}


function removeItem(event) {
  var itemContainer = event.target.parentNode;
  itemContainer.remove();
}

function redirectToProfile() {

    var isLoggedIn = true; 
    
    if (isLoggedIn) {
      window.location.href = 'profile.php'; 
    } else {
      window.location.href="signup.php"
      window.location.href ='login.php'; 
    }
  }

  function addItemToCart(event) {
    event.preventDefault(); // Prevent form submission

    // Get the item details from the form
    var form = event.target.closest('form');
    var itemNameInput = form.querySelector('input[name="itemName"]');
    var itemPriceInput = form.querySelector('input[name="itemPrice"]');
    var itemName = itemNameInput.value;
    var itemPrice = itemPriceInput.value;

    // Generate the cart item HTML
    var cartItemHTML = `
      <div class="col-md-7">
        <h5 class="text-muted pt-2">${itemName}</h5>
        <p class="text-uppercase font-weight-light">Model Kit</p>
        <p class="text-muted">Price: $${itemPrice}</p>
        <button class="btn btn-sm text-muted text-uppercase" onclick="removeItem(this)"><i class="fas fa-trash-alt pr-2"></i>REMOVE ITEM</button>
        &nbsp;
        <button class="btn btn-sm text-muted text-uppercase"><i class="fas fa-heart pr-2"></i>ADD TO WISHLIST</button>
      </div>
    `;

    // Append the cart item to the container
    var container = document.getElementById('cart-items-container');
    container.innerHTML += cartItemHTML;

    // Reset the form
    form.reset();
  }

  // Call the addItemToCart function when the form is submitted
  var form = document.querySelector('form');
  form.addEventListener('submit', addItemToCart);