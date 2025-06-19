menu = document.querySelector('.nav-links').children;
    for(i = 0; i < menu.length; i++){
        menu[i].addEventListener("click", function(event){
            alert("Clicked on " + event.target.innerText);
            console.log(event.target.innerText);
        });
   }
text = document.querySelector('.text').children;
for(i = 0; i < text.length; i++){
    text[i].addEventListener("click", function(event){
        alert("Clicked on " + event.target.innerText);
        console.log(event.target.innerText);
    });
}

img =document.getElementById("avatar");
img.addEventListener("click", function(event){
    username =document.getElementById("name");
    username.innerText = "Iftekharul Islam Sahan";
    username.style.color = "red";
    username.style.fontSize = "30px";
    username.style.fontWeight = "bold";

    avt = document.getElementById("avatar");
    avt.src = imageUrl;

    avt.classList.add("avt");
});