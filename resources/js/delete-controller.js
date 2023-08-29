const forms = document.querySelectorAll('.delete-controller');

forms.forEach(form => {
    
    form.addEventListener("submit", e => {
        e.preventDefault();
        if(confirm('Are you sure bro?')) form.submit();
    })
    
});
