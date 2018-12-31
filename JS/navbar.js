$(document).ready(function () {

   /* function showmenu() {
        $("<li> <a href='/links/gallery.php' id='navbutton'> Bilder </a> </li>").appendTo($("ul#navbar"));
    }*/
    $("img#menuButton").click(function () {

        $("ul#navbar").html("");
        $(  "<li>  <a href='/Index.php' id='navbutton'>  Glyxnäs Multisport </a> </li> "+
            "<li> <a href='/links/gallery.php' id='navbutton'> Bilder </a> </li>\n" +
            "    <li> <a href='/links/signup.php' id='navbutton'> Anmälan/Anmälda Lag </a> </li>\n" +
            "    <li> <a href='/links/results.php' id='navbutton'> Resultat </a> </li>\n" +
            "    <li> <a href='/links/info.php' id='navbutton'> Info </a> </li>").appendTo($("ul#navbar"));
    });
});