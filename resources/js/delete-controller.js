const forms = document.querySelectorAll('.delete-controller');

forms.forEach(form => {
    
    form.addEventListener("submit", e => {
        e.preventDefault();
        console.log('yo')
    
    })
    
});
