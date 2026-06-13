<?php
session_start();
unset($_SESSION["login_user"]);
unset($_SESSION["user_name"]);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<script>
(function(apiKey){
    (function(p,e,n,d,o){var v,w,x,y,z;o=p[d]=p[d]||{};o._q=o._q||[];
    v=['initialize','identify','updateOptions','pageLoad','track','trackAgent'];for(w=0,x=v.length;w<x;++w)(function(m){
    o[m]=o[m]||function(){o._q[m===v[0]?'unshift':'push']([m].concat([].slice.call(arguments,0)));};})(v[w]);
    y=e.createElement(n);y.async=!0;y.src='https://cdn.pendo.io/agent/static/'+apiKey+'/pendo.js';
    z=e.getElementsByTagName(n)[0];z.parentNode.insertBefore(y,z);})(window,document,'script','pendo');
})('e8f6729e-a44f-4f1d-9c3c-a5e502b517ff');
</script>
<script>
(function() {
    var done = false;
    function redirect() {
        if (!done) { done = true; window.location.href = 'index.php'; }
    }
    var iv = setInterval(function() {
        if (typeof pendo.clearSession === 'function') {
            clearInterval(iv);
            pendo.clearSession();
            redirect();
        }
    }, 50);
    setTimeout(function() { clearInterval(iv); redirect(); }, 2000);
})();
</script>
</head>
<body></body>
</html>
