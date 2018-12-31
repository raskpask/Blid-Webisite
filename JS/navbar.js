$(document).ready(function () {


    $("img#menuButton").click(function () {
        menuDown();
    });
    function menuUp(){
        $("ul#navbar").empty();
        $(  " <li>  <img src='/img/menu.png' id='menuButton'> <a href='/Index.php' id='navbutton'>  Glyxnäs Multisport </a> </li>").click(menuDown).appendTo($("ul#navbar"));
    }
    function menuDown(){
        $("ul#navbar").empty();

        $(  " <li> <img src='/img/menu.png' id='menuButtonDown' > <a href='/Index.php' id='navbutton'>  Glyxnäs Multisport </a> </li> " ).click(menuUp).appendTo($("ul#navbar"));
        $(             " <li> <a href='/links/gallery.php' id='navbutton'> Bilder </a> </li>\n" +
            "    <li> <a href='/links/signup.php' id='navbutton'> Anmälan/Anmälda Lag </a> </li>\n" +
            "    <li> <a href='/links/results.php' id='navbutton'> Resultat </a> </li>\n" +
            "    <li> <a href='/links/info.php' id='navbutton'> Info </a> </li>").appendTo($("ul#navbar"));
    }
    $("img#menuButtonDown").click(function () {

        $("ul#navbar").empty();
        //$(  " <li>  <img src=\"/img/menu.png\" id=\"menuButton\" > <a href='/Index.php' id='navbutton'>  Glyxnäs Multisport </a> </li>");
    });

});