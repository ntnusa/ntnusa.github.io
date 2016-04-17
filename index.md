---
title: 首頁
---

## Facebook 粉專最新消息

<ul id="fb_posts">
</ul>

<script>
	fetch('https://graph.facebook.com/ntnustua/posts?access_token=1767756620111473|jyBfjNiktbQfB5vjEXTTz_zCFzs').then(function(response) {
		return response.json();
	}).then( (posts) => {
		var content = "";
		var last_msg = "";
		var post_num = 0;
		posts.data.forEach( (post, index) => {
			//console.log(post);
			if(post.story !== undefined || post_num >= 6)
				return "!!!";

				if (post.message) {
				last_msg = msg;
				var msg = post.message
					.replace(/&/g, "&amp;")
					.replace(/</g, "&lt;")
					.replace(/>/g, "&gt;")
					.replace(/"/g, "&quot;")
					.replace(/'/g, "&#039;");

				msg = msg.length > 150 ? (msg.slice(0, 150) + "..." ): msg;

				var post_id = post.id.split("_")[1];
				content += `
				<li class="post">
					<a href="http://facebook.com/ntnustua/posts/${post_id}">
						<p>
							<img src="/image/loud.svg" alt="" width="40" height="40">
							${msg}
						</p>
					</a>
				</li>`;
				}
				post_num += 1;
			});
			return content;
		})
		.catch(function(err) {
			return "<p>請點選標題連結以觀看社團貼文！</p>";
		}).then(function (content) {
			document.getElementById('fb_posts').innerHTML += content;
		});
</script>
