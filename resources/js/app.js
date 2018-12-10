//get the modal
const modal = document.querySelector(".modal");
//get the anchor tag used to open the modal
const anchors = document.querySelectorAll(".anchor-delete");

for (let anchor of anchors) {
    anchor.onclick = (e) => {
        e.preventDefault();
        modal.style.display = 'block';
    };
}

//get buttons for cancelling
const cancel = document.querySelectorAll(".btn-cancel");
for (let cancel_btn of cancel){
    cancel_btn.onclick = (e)=>{
        modal.style.display = 'none';
    }
}

//close the modal when user clicks anywhere else
window.onclick =(event)=>{
    console.log(event.target);
    if(event.target === modal){
        modal.style.display = 'none';
    }
};

//change the profile picture button 
const prof_change = document.querySelector(".prof_change");
//get the form class name
const form = document.querySelector(".change-profile");
prof_change.onclick =()=>{
    form.style.display = 'block';
    prof_change.style.display = 'none';
};