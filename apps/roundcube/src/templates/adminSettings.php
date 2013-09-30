<form id="mail" action="#" method="post">
	<!-- Prevent CSRF attacks-->
	<input type="hidden" name="requesttoken" value="<?php echo $_['requesttoken'] ?>" id="requesttoken">

	<div id="roundcube" class="personalblock">
		<legend><strong><?php echo $l -> t('RoundCube Settings'); ?></strong></legend>
	
		<ul>
		        <li><a href="#roundcube-1"><?php echo $l -> t('Basic settings'); ?></a></li>
		        <li><a href="#roundcube-2"><?php echo $l -> t('Advanced settings'); ?></a></li>
		</ul>
	
		<fieldset id="roundcube-1">
	 		<p>
				<label for="mail"><?php echo $l -> t('Absolute path to roundcube installation, e.g. If you have http://example.com/roundcube enter /roundcube/ here. Note that subdomains or URLs do not work, just absolute paths to the same domain owncloud is running.'); ?>
	 				 <input type="text" id="maildir" name="maildir" value="<?php echo $_['maildir']; ?>"
						onchange="var lastChar = $('#maildir').val().substr($('#maildir').val().length - 1); if(lastChar !=='/') {$('#maildir').val($('#maildir').val()+'/');};}"  />
 				</label>
			</p>
		</fieldset>
	 	<fieldset id="roundcube-2">
			<input type="checkbox" name="removeControlNav" id="removeControlNav" <?php
      if ($_['removeControlNav'])
        echo ' checked';
 			?>> 
			<label title="<?php echo $l -> t('Remove RoundCube control navigation menu items with currently logged in user information'); ?>" for="removeControlNav"><?php echo $l -> t('Remove information bar on top of page'); ?></label> 
			<input type="checkbox" name="removeHeaderNav" id="removeHeaderNav" <?php
      if ($_['removeHeaderNav'])
        echo ' checked';
 			?>> 
 			<label title="<?php echo $l -> t('Removes the buttons for different sections (mail, adressbook, settings) within the RoundCube mail application'); ?>" for="removeHeaderNav"><?php echo $l -> t('Remove RoundCube header navigation menu items'); ?></label> 
      <br>  
			<input type="checkbox" name="autoLogin" id="autoLogin" <?php
      if ($_['autoLogin'])
        echo ' checked';
 			?>> 		
			<label title="<?php echo $l -> t('Enable autologin for users, which reuse the login data from OC for RoundCube.'); ?>" for="autoLogin"><?php echo $l -> t('Enable autologin for users'); ?></label>
      <br>  
			<label for="rcHost">
			  <?php echo $l -> t('Overwritte roundcube server hostname if not the same as owncloud, e.g. for (sub)domains which resides on the same server, e.g rc.domain.tld But keep in mind that due to iFrame security constraints it will be only working on the same server, see HTML/JS same-origin policies'); ?>
		  </label>
      <input type="text" id="rcHost" name="rcHost" value="<?php echo $_['rcHost']; ?>">
      <br>			
			<br>
        <p>
  				<label for="encryptstring1"><?php echo $l -> t('Encryptstring1'); ?>
  		 			<input type="text" id="encryptstring1" name="encryptstring1" value="<?php echo $_['encryptstring1']; ?>">
  		 		</label>	
        </p>
        <p>
  				<label for="encryptstring2"><?php echo $l -> t('Encryptstring2'); ?>
  			 		<input type="text" id="encryptstring2" name="encryptstring2" value="<?php echo $_['encryptstring2']; ?>">
  			 	</label>
        </p>		
		</fieldset>
		<input type="submit" value="Save" />
	</div>
</form>
