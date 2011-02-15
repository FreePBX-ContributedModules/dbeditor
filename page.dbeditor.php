<?php	
/**
 * FreePBX dbeditor Module
 *
 * Copyright (c) 2011, VoiceNation, LLC.
 *
 * This program is free software, distributed under the terms of
 * the GNU General Public License Version 2.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
*/
?>
<p style="margin-bottom:5px"><b>Database Editor (version 1.0)</b> - for mysql and pgsql</p>

<script type="text/javascript">
	// fix a jQuery/Opera/ie bug with determining the window height
	var windowHeight =  Math.max(
	        $(window).height(),
	        /* For opera and ie 8 (not sure about others): */
	        document.documentElement.clientHeight
	    	);
	var frameHeight = Math.round((windowHeight * 76)/100);
	
	document.write('<iframe src="<?php echo($_SERVER['PHP_SELF'].'?handler=file&module=dbeditor&file=dbkiss.html.php')?>" name="dbkiss" id="dbkiss" width="100%" height="'+frameHeight+'px" style="display:block;">');

	$(document).ready(function() {
		// force iFrame reload because main page may be cached by FreePBX
		$('#dbkiss').contentWindow.location.reload(true);
	});
</script>
	<p>Your browser does not support iframes.</p>
</iframe>
<p>For updates, bug reports, or feature requests visit <a href="http://www.qualityansweringservice.com/anatomy-oscc/freepbx/dbeditor">Database Editor Home</a></p>

