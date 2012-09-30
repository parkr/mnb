<script type="text/javascript" src="/js/mnb.js"></script>
<link href="/css/mnb.css" rel="stylesheet">
<p>
    <span>
        <img alt="" src="http://wvbr.com/images/uploads/376.jpg" style="margin: 10px; float: right; width: 400px; height: 242px; "
        />
    </span>
</p>
<p>
    <span>
        <span style="font-size: 14px; ">Join DJ Kaminsk &amp; Professor G. every Monday night from 7-11pm for
            all the classic rock, gritty ol&#39; time rock &#39;n roll, heartland,
            grunge, power ballads and blues that you can&#39;t keep away from!</span>
    </span>
</p>
<p>
    <span>
        <span style="font-size: 14px; ">Tune in for MNB&#39;s&nbsp;
            <span style="color: rgb(0, 0, 255); ">
                <em>Live at Nine!</em>&nbsp;</span>An hour long set devoted to live music
            featuring the Bromance artists you know and love.&nbsp;</span>
    </span>
</p>
<p>
    <span>
        <span style="font-size: 14px; ">We like to laugh too. Check out Professor G&#39;s weekly &nbsp;stand-up
            segment,&nbsp;
            <span style="color: rgb(0, 0, 255); ">
                <em>8pm Premium Blend</em>
            </span>. You knew he was hooked on coffee, but maybe you didn&#39;t know that
            he&#39;s also hung up on stand-up.</span>
    </span>
</p>
<p>
    <span>Click&nbsp;
        <a href="http://www.facebook.com/pages/Monday-Night-Bromance/184856578214676"><span style="color: rgb(178, 34, 34); ">MNB</span></a>&nbsp;to like us on Facebook!</span>
</p>
<p style="text-align: center; ">
    <span>
        <span style="font-size: 16px;">Is it Monday Night?&nbsp;
            <a href="http://wvbr.com/listen"><span style="color: rgb(178, 34, 34); ">Click here to listen live!</span></a>
        </span>
    </span>
</p>
<div id="album_covers"><div class="slides_container"></div></div>
<p style="text-align: center; ">
    <span>
        <span style="font-size: 18px; ">
            <u>
                <strong>
                    <span style="color: rgb(0, 0, 255); ">Live at Nine!</span>
                </strong>
            </u>
        </span>
    </span>
</p>
<div id="playlists_container">
	<select id="shows">
		<?php foreach($shows as $show): ?>
			<option value="<?php echo $show['Show']['date']; ?>"><?php echo date('j M, Y', strtotime($show["Show"]["date"])); ?></option>
		<?php endforeach; ?>
	</select>
	<div id="playlists">
		<div class="playlist current" id="<?php echo $shows[0]['Show']['date']; ?>">
			<?php foreach($shows[0]['TrackListing'] as $track): ?>
				<?php echo $track['artist'] . ' &mdash; ' . $track['title']; ?><br />
			<?php endforeach; ?>
		</div>
	</div>
</div>
