<?php
$title='Start Broadcast';
include 'header.php';
include 'connect-db.php';
$query = "SELECT * FROM student";
$result = mysqli_query($con,$query);
$res = array();
while($row = mysqli_fetch_assoc($result))
{

$res[$row['ID']] = array(
                    'ID' => $row['ID'],
                    'Email'=>$row['Email'],
                    );

}
?>

    </script>
			<div class="body">
				<div>
					<h2>HI </h2>
					<br/>
					<br/>
					 
			 <div id="placeholder-div"></div>
			 <?php foreach($res as $i) {?>
					<ul>
						
						<li class="ss"><?php //echo $i['Email']; ?></li>
						
					</ul>
						
					
<?php } ?> 
				</div>
			</div>
		</div>
	</div>
</body>
<script>
window.___gcfg = {
  lang: 'en-US'
};
(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/platform.js?onload=renderButton';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
function renderButton(){
  gapi.hangout.render('placeholder-div', {
      'render': 'createhangout',
      'hangout_type'  :'onair',
      'initial_apps': [{ app_id : 'broadcast-1230', start_data : 'dQw4w9WgXcQ', 'app_type' : 'ROOM_APP' }],
      'invites':[{ id : 'muslim2112802@gmail.com', invite_type : 'EMAIL' }]
    });
   
}
</script>
</html>