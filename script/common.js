function changeBackground(){
    let color = document.body.backgroundcolor;
    if (color === "palegreen"){
        color = "coral";
    }
    if (color === "coral"){
        color = "palegreen";
    }
    document.body.style.backgroundColor = color;
}
function ShowMess() {
    let messageText = "Шухер!!!"
    alert(messageText)
}

