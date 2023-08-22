let form = document.getElementById('form')

if(localStorage.getItem('username') && localStorage.getItem('password')){
    document.getElementById('username').value = localStorage.getItem('username')
    document.getElementById('password').value = localStorage.getItem('password')
}

form.addEventListener('submit',(e) => {
    e.preventDefault()
    let username = document.getElementById('username').value
    let password = document.getElementById('password').value

    //local storage

    localStorage.setItem('username', username)
    localStorage.setItem('password', password)

    alert("Your details are saved in local storage")

})
