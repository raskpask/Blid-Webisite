$(document).ready(function () {


    $("img#menuButton").click(function () {

        $("ul#navbar").empty();
        $(  "<li>  <a href='/Index.php' id='navbutton'> <img src='/img/menu.png' id='menuButtonDown' >  Glyxnäs Multisport </a> </li> "+
            "<li> <a href='/links/gallery.php' id='navbutton'> Bilder </a> </li>\n" +
            "    <li> <a href='/links/signup.php' id='navbutton'> Anmälan/Anmälda Lag </a> </li>\n" +
            "    <li> <a href='/links/results.php' id='navbutton'> Resultat </a> </li>\n" +
            "    <li> <a href='/links/info.php' id='navbutton'> Info </a> </li>").appendTo($("ul#navbar"));
    });

    $("img#menuButtonDown").click(function () {

        $("ul#navbar").empty();
        //$(  " <li>  <img src=\"/img/menu.png\" id=\"menuButton\" > <a href='/Index.php' id='navbutton'>  Glyxnäs Multisport </a> </li>");
    });
    function up() {

    }
});