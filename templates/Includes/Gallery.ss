<% if GalleryImages %>
	<section id="gallery">
		<% control GalleryImages %>
			<a class="group" title="$Title" href="$ResizedBaseImage">
				$BaseImage.CroppedImage(125, 125)
			</a>
		<% end_control %>
	</section>
<% end_if %>
