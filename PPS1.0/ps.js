

alert("Wellcome to Pyramid Scale!\n Enjoy.");

/*function checker(){
    var result = confirm("Are you sure.");
        if (result == false) {
            event.preventDefault();
        
    }
*/
   /* var  name = prompt("What is your name?");
    if (name == null || name == ""){
        txt = "No name provided."; 

    } else {
        txt = " Hello  " + name + "!";
    }
    alert(txt);

    /*function checker(){
        var result = confirm("thank you for choosing mely service, chatbot!");
        if (result == false) {
            event.preventDefault();
        }
    }*/

    function myFunction(){
        var element = document.body;
        element.classList.toggle("dark-mode")
    }
    //capture the current theme

    const htmlEl =
    document.getElementsByName('html')
    [0];
    const currentTheme =
    localStorage.getItem('theme')?
    localStorage.getItem('theme') :
    null;

    if(currentTheme) {
        htmlEl.dataset.theme = 
        currentTheme;
    }

    const toggleTheme = (theme) => {
        htmlEl.dataset.theme = theme;
        localStorage.setItem('theme',theme);
    }

    
    