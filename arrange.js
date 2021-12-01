let add_note_div_height = document.getElementById('add_note_div').offsetHeight;

console.log("height:"+add_note_div_height+"px");

let your_note_buttons_height = 150;
if(add_note_div_height<180)
{
    your_note_buttons_height = 1.5*add_note_div_height;
}
else
{
    your_note_buttons_height = add_note_div_height;
}

let ele = document.getElementsByClassName('your_note_buttons')
for (let i = 0; i < ele.length; i++ ) {
    ele[i].style.height = your_note_buttons_height+"px";
}