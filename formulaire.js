
// enleve la fonction/logique du formulaire //
var forms = document.querySelectorAll('form')

forms.forEach(function (form) {  
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', this.action, true);
        xhr.send(formData);
        });
    })  

