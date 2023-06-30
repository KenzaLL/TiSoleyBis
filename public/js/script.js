
// Liste déroulante 3 choix //
setTimeout(function () {
  const tomato = document.querySelectorAll(".tomate");
  const cream = document.querySelectorAll(".crème");
  const base = document.getElementById("base");

  base.addEventListener("click", function () {
    if (base.value === "pizzaAll") {
      for (let i = 0; i < tomato.length; i++) {
        tomato[i].style.display = "unset";
      }
      for (let i = 0; i < cream.length; i++) {
        cream[i].style.display = "unset";
      }
    } else if (base.value === "cream") {
      for (let i = 0; i < tomato.length; i++) {
        tomato[i].style.display = "none";
      }
      for (let i = 0; i < cream.length; i++) {
        cream[i].style.display = "unset";
      }
    } else if (base.value === "tomato") {
      for (let i = 0; i < cream.length; i++) {
        cream[i].style.display = "none";
      }
      for (let i = 0; i < tomato.length; i++) {
        tomato[i].style.display = "unset";
      }
    }
  });
}, 1000);



// fin liste déroulante 3 choix //


// barre de recherche //

const search = document.getElementById("search");
const card = document.querySelectorAll(".card-title");
const input = document.getElementById("enter");
// changer l'id par autre

// fonctionnement de la barre //
input.addEventListener("keyup", function () {
  for (let i = 0; i < card.length; i++) {
    if (!card[i].innerHTML.toUpperCase().includes(input.value.toUpperCase())) {
      card[i].parentNode.parentNode.style.display = "none";
    } else {
      card[i].parentNode.parentNode.style.display = "unset";
    }
  }
});


function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.style.display === "block") {
        openDropdown.style.display = "none";
      }
    }
  }
}