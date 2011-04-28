<figure id="rotator">
	<ul>
		<% if CustomImages %>
			<% control CustomImages %>
				<li<% if First %> class="show"<% end_if %>>
					<a href="$Top.PageRedirect.Link">
						<% control BaseImage %>
							<% control SetSize(720, 478) %>
								<img src="$URL" alt="<% _t('NUMBER', 'Intro image') %>" class="intro-image"/>
							<% end_control %>
						<% end_control %>
					</a>
				</li>
			<% end_control %>
		<% end_if %>
	</ul>
</figure>