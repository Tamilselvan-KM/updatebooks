var toastContainer = document.getElementById('messagebox');
var btn = document.getElementById('messageclose');
window.addEventListener('load',()=>{
    toastContainer.style.display = 'block';
});
btn.addEventListener('click', ()=>{
    toastContainer.style.display = 'none';
});
function indexAlert(msg){
    alert(`To see ${msg} please Login or Register first`);
}