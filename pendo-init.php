<?php
// Pendo SDK Initialization
// Include this file in the <head> section of each page after session_start()
?>
<script>
(function(apiKey){
    (function(p,e,n,d,o){var v,w,x,y,z;o=p[d]=p[d]||{};o._q=o._q||[];
    v=['initialize','identify','updateOptions','pageLoad','track','trackAgent'];for(w=0,x=v.length;w<x;++w)(function(m){
    o[m]=o[m]||function(){o._q[m===v[0]?'unshift':'push']([m].concat([].slice.call(arguments,0)));};})(v[w]);
    y=e.createElement(n);y.async=!0;y.src='https://cdn.pendo.io/agent/static/'+apiKey+'/pendo.js';
    z=e.getElementsByTagName(n)[0];z.parentNode.insertBefore(y,z);})(window,document,'script','pendo');
})('e8f6729e-a44f-4f1d-9c3c-a5e502b517ff');

pendo.initialize({
  visitor: {
    id: ''
  }
});
</script>
<?php
if (isset($_SESSION['login_user'])) {
    $pendo_conn = mysql_connect("182.50.133.87", "communique", "umesh0028");
    if ($pendo_conn) {
        mysql_select_db("comm_login", $pendo_conn);
        $pendo_username = mysql_real_escape_string($_SESSION['login_user'], $pendo_conn);
        $pendo_result = mysql_query("SELECT * FROM userdata WHERE username='$pendo_username'", $pendo_conn);
        if ($pendo_result && mysql_num_rows($pendo_result) > 0) {
            $pendo_user = mysql_fetch_assoc($pendo_result);
?>
<script>
pendo.identify({
  visitor: {
    id:           <?php echo json_encode((int)$pendo_user['id']); ?>,
    email:        <?php echo json_encode($pendo_user['email']); ?>,
    full_name:    <?php echo json_encode($pendo_user['name']); ?>,
    username:     <?php echo json_encode($pendo_user['username']); ?>,
    designation:  <?php echo json_encode($pendo_user['designation']); ?>,
    department:   <?php echo json_encode($pendo_user['department']); ?>,
    role:         <?php echo json_encode($pendo_user['role']); ?>,
    userStatus:   <?php echo json_encode($pendo_user['user_status']); ?>,
    userType:     <?php echo json_encode($pendo_user['type']); ?>,
    reportPerson: <?php echo json_encode($pendo_user['report_person']); ?>,
    region:       <?php echo json_encode($pendo_user['region']); ?>,
    state:        <?php echo json_encode($pendo_user['state']); ?>,
    city:         <?php echo json_encode($pendo_user['city']); ?>
  }
});
</script>
<?php
        }
    }
}
?>
