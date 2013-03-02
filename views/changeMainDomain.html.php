<?php 

 /**
  *  YunoHost - Self-hosting for all
  *  Copyright (C) 2012  Kload <kload@kload.fr>
  *
  *  This program is free software: you can redistribute it and/or modify
  *  it under the terms of the GNU Affero General Public License as
  *  published by the Free Software Foundation, either version 3 of the
  *  License, or (at your option) any later version.
  *
  *  This program is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU Affero General Public License for more details.
  *
  *  You should have received a copy of the GNU Affero General Public License
  *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
  */

 ?>
 <form action="/domain/changeMain" method="post" class="row row-tab entityForm">
	<input type="hidden" name="_method" value="PUT" id="_method">
	<div class="span6">
		<div class="well">
			<h3 class="center"><?php echo T_('Change main domain') ?></h3>
		    <br /><br />
		    <p class="row">
			   <label class="span2 labeluser"><?php echo T_('Actual') ?></label><span class="span3" style="padding-top: 5px; margin-left: 10px"><?php echo $mainDomain ?></span>
		    </p>
		    <p class="row">
			    <label class="span2 labeluser" for="domain"><?php echo T_('New') ?></label>
			    <select class="span3" style="" type="text" name="domain" id="domain">
			    	<?php foreach ($domains as $domain) { 
			    			if ($domain != $mainDomain) {
			    		?>
				  		<option value="<?php echo $domain ?>"><?php echo $domain ?></option>
				  	<?php }} ?>
				</select> 
		    </p>
		   	<div style="clear: both;"></div>
			<hr>
		    <p class="row" style="text-align: center;">
		    	<input class="btn btn-primary btn-large" type="submit" value="<?php echo T_('Save') ?>" />
		    </p>
		</div>
	</div>
	<div style="clear: both;"></div>
</form>