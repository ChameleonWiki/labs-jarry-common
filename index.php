<?php	
	/**
	 * global.php � 2011
	 * @author Harry Burt <jarry1250@gmail.com>
	 *
	 * @todo "Introduction" -> i18n
	 *  
	 * This program is free software; you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation; either version 2 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful, 
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	 * GNU General Public License for more details.
	 * 
	 * You should have received a copy of the GNU General Public License
	 * along with This program; if not, write to the Free Software
	 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
	 */
	require_once( '/data/project/jarry-common/public_html/global.php' );
	
	echo get_html( 'header', 'Introduction' );
?>
			<p>Welcome to my index of Wikimedia Labs tools I (User:Jarry1250) have been involved in the development of. If you have any queries, you can always contact me by leaving a message on <a href="//en.wikipedia.org/wiki/User_talk:Jarry1250">my en.wp talk page</a> or by following that page's "Email this user" link. <em>Note that tools may be periodically removed. If you rely on one that does get removed, just tell me and I will replace it for you.</em> The last such rotation was in December 2013, during the transition to Labs.</p>
		</div>
		<h2 class="screenreaders">Tools</h2>
		<div class="boxes-holder">
			<ul class="boxes">
				<li><h3><a href="http://tools.wmflabs.org/wikicup/">WikiCup</a></h3><p>Live scores, plus individual and competition totals.</p><p class="source"><a href="https://github.com/Jarry1250/labs-wikicup"><?= _html( 'view-source' , 'general' ); ?></p></li>
				<li><h3><a href="http://toolserver.org/~jarry/svgtranslate/">SVG Translate</a></h3><p>(Non-functional.) Translate an SVG into a language or your choice.</p></li>
				<li><h3><a href="http://tools.wmflabs.org/svgcheck/">SVG Check</a></h3><p>Preview the display of SVG files and detect errors.</p><p class="source"><a href="https://github.com/Jarry1250/labs-svgcheck"><?= _html( 'view-source' , 'general' ); ?></p></li>
				<li><h3><a href="http://tools.wmflabs.org/wmukevents/">Wikimedia UK events</a></h3><p>Auto-generated .ics (calendar) file</p><p class="source"><a href="https://github.com/Jarry1250/labs-wmukevents"><?= _html( 'view-source' , 'general' ); ?></p></li>
				<li><h3><a href="http://tools.wmflabs.org/signpost/">Signpost publishing</a></h3><p>Tools built to assist the Signpost's Editor-in-Chief</p><p class="source"><a href="https://github.com/Jarry1250/labs-signpost"><?= _html( 'view-source' , 'general' ); ?></p></li>
			</ul>
<?php
	echo get_html( 'footer' );
?>