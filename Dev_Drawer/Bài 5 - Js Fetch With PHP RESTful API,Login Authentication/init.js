const auth = new Auth();

console.log('helelo')
document.querySelector('.logout').addEventListener('click', (e) => {
    auth.logOut();
});