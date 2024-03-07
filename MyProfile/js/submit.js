let name=document.getElementById("name");
let email=document.getElementById("email");
let contact=document.getElementById("contact");
let get_set=document.getElementById("get_set");

let form=document.getElementById("form");


const tasks = sessionStorage.getItem("tasks")
? JSON.parse(sessionStorage.getItem("tasks"))
  : [];

showAllTasks();

function showAllTasks() {
    tasks.forEach((value) => {
      const h = document.createElement("h3");
      h.setAttribute("class", "adding");
      h.innerText=`Hey, ${value.title} Your Form Is Submitted !`; 
      get_set.append(h);
    });
}


function removeTasks() {
    tasks.forEach(() => {
      const div = document.querySelector(".task");
      div.remove();
    });
}

// form.addEventListener("submit", (e) => {
    // e.preventDefault();
function conclusion(){
  // alert("sda")
  // console.log(name.value + typeof(name.value))
    removeTasks();
    if(name.value!="" && email.value!="" && contact.value!=""){
    tasks.push({
      title: name.value,
    });
  
    sessionStorage.setItem("tasks", JSON.stringify(tasks));
    showAllTasks();
  }
};