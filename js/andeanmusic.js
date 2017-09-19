/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} 
//
//
////function getWindowSize()
//{
//    return window.innerWidth;
//}
//
//function responsiveMenu()
//{
//    var width = getWindowSize();
//    if(width <= 767)
//    {   
//        var menuNormal = document.getElementById("menu-normal").style;
//
//        if(menuNormal.display=="none" || menuNormal.display=="")
//        {
//    //        alert(1);
//            menuNormal.display = "block";
//    //        alert(2);
//        }
//        else
//            menuNormal.display = "none";
//    //    menuNormal.style.display = "b<lock";
//    //    menuNormal.style.clear = "both";
//    //    menuNormal.style.float = "none";
//    //    menuNormal.style.marginTop: "84px";
//    }
//    else
//    {
//        
////        menuNormal.removeAttribute('display');
//        menuNormal.display = "";
//    }
//}