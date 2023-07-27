<!DOCTYPE html>
<html>
    <head>
        <meta charset utf="-8">
        <link rel="stylesheet" href="css/search.css">
        <title>SearchPage</title>
    </head>
    <body>
        <?php include './partials/header.php';?>
        
        <a  onclick="prompt()" href="#"></a>
        <div>
        <label for="search"></label>
        <input class="search" type="text" id="alphanumeric" placeholder="chatbot,writingMode"> <button>Search</button>
    </div>

    <?php include './partials/footer.php';?>

    <script>
        var name = propmt("What is your name?");
        if (name == null || name == "") {
            txt = "you need to fill the space.";
        } else {
            txt = " You have a choice the mely and writemode \n Hello" + name + "!";
        }
        alert(txt);

    </script>
    </body>
</html>