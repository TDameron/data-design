<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>User Case Interaction</title>
<body>
<h1>Use Case Interaction</h1>
<p><strong>Use Case Interaction:</strong>Johnathan is looking to make extra money doing smaller jobs that require his graphic design skillset.</p>
<p><strong>User Precondition: </strong> Johnathan is a graphic designer who is partially self-taught and has his bachelors degree in graphic design. Johnathan has created a profile on Fiverr and posted his resume under the "Art and Graphic Design" section.</p>
<p></p>
<div>
<ul>
	<li>Johnathan has been contacted by the owner of a small business who wants a logo designed for their food truck.</li>
	<li><strong>The browser gives Johnathan a notification that he has a new message.</strong></li>
	<li>Johnathan opens the message and replies by sending a resume and starts a chat through Fiverr's chat system.</li>
	<li><strong>The browser gives Johnathan a notification that his message and resume were sent.</strong></li>
	<li>The client reads Johnathan's credentials and resume and negotiates the terms and conditions through Fiverr.</li>
	<li><strong>Fiverr server sends Johnathan's contract to the client via Fiverr's messaging service.</strong></li>
	<li>Johnathan sends several drafts of the logo to be reviewed by the client via email as well as update via Fiverr messages.</li>
	<li><strong>The browser lets Johnathan know that his messages and drafts were successfully sent to to client.</strong></li>
	<li>The final logo is sent to the client for a final review.</li>
	<li><strong>The browser lets Johnathan know that he has sent his final draft and will alert him when the client responds.</strong></li>
	<li>The client pays Johnathan via paypal and is given access to the photoshop files for the final product for personal/business use.</li>
	<li><strong>Johnathan receives a notification through Fiverr that his final draft was accepted</strong></li>
	<li><strong>Fiverr server automatically sends a receipt to Johnathan and the client and invites the client to leave a review for Johnathan.</strong></li>
	</ul>

	<p><strong>User Postcondition: </strong> Johnathan was able to acquire and complete a small graphic design job in his spare time and has received payment from the client.</p>

	<h1>Conceptual Model</h1>
	<p><strong>User</strong></p>
	<ul>
		<li>userID(primary key)</li>
		<li>userDescription</li>
		<li>userGigs</li>
		<li>userHash</li>
		<li>userLevel</li>
		<li>userRating</li>


	</ul>
</div>
	<p><strong>message</strong></p>
	<ul>
		<li>messageId(primary key)</li>
		<li>messageUserId(foreign key 1)</li>
		<li>messageContent</li>
		<li>messageDate</li>

	</ul>

	<p><strong>gigs</strong></p>
	<ul>
		<li>gigId (foreign key 1)</li>
		<li>gigUserId (foreign key 2)</li>
		<li>gigDate</li>
		<li>gigDescription</li>
	</ul>

<h3>ERD</h3>

<img src="DataDesign ERD.png" alt="ask about what alt does later"/>
<div>
<a href="index.php">Back to Index</a>
</div>
</body>