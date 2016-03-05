<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2014  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * https://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

$page_title = "Chat";
$style = '
.gitter-chat-embed-action-bar { display: none; }
.gitter iframe { width: 100%; height: 600px; }
';
require_once("../header.php");
?>

<!-- Hightlight active page -->
<script>document.getElementById("<?php echo $page_title; ?>").className += " active";</script>

<div class="div gitter"></div>
<script>
	((window.gitter = {}).chat = {}).options = {
		room: 'FreezingMoon/AncientBeast',
		showChatByDefault: true,
		targetElement: '.gitter',
		useStyles: false,
		preload: true
	};
</script>
<script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async defer></script>

<div class="center" id="action">
	<div style="display: inline-block;" class="lighten">
		<a href="http://reddit.com/r/AncientBeast" target="_blank"><img src="../images/squares/reddit.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png);">Reddit: Join Forum</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="https://github.com/FreezingMoon/AncientBeast" target="_blank"><img src="../images/squares/github.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png); ;">GitHub: Fork Project</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="http://ancient-beast.deviantart.com" target="_blank"><img src="../images/squares/deviantart.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png);">deviantArt: Submit Art</div></a>
	</div>
</div>

<?php
disqus();
include('../footer.php'); ?>
