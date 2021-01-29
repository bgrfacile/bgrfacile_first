const forms = document.querySelectorAll('#form_js');
forms.forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const url = this.getAttribute('action');
        const courseId = this.querySelector('#course_id_js').value;
        const count = this.querySelector('#count_js');
        const token = document.querySelector('meta[name="csrf-token"]').content;

        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            method:'post',
            body: JSON.stringify({
                id: courseId
            })
        }).then( response =>{
            response.json().then(data=>{
                count.innerHTML = data.count;
            })

        }).catch(error=>{
            console.log(error)
        });
    })
})