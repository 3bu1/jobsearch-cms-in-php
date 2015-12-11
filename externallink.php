<link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-1.11.1.js"></script>
  <script src="js/bootstrap.js"></script>
  
  <script>
function msieversion() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))) > 0)      // If Internet Explorer, return version number
                //alert("Best Viewd in Google chrome and IE 8+");
            
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
        }

if ( msieversion() <= 9 )
	alert("Please open in Chrome, Firefox or Internet Explorer 9 and above to access complete functionality")
     // document.write ( "This is Internet Explorer "+msieversion() );
</script>

<link rel="stylesheet" id="apt-style-css" href="css/style.css" type="text/css" media="all">
  